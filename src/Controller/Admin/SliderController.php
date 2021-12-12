<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Images;
use App\Entity\Slider;
use App\Form\SliderType;
use App\Repository\SliderRepository;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Route("/admin/slider", name="admin_slider_")
 * @package App\Controller\Admin
 */
class SliderController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(SliderRepository $sliderRepository){

        $sliders = $sliderRepository->findAll();

        return $this->render('admin/slider/index.html.twig', [
            'sliders' => $sliders
        ]);
    }
    /**
     * @Route("/add", name="add")
     */
    public function addSlider(Request $request)
    {
        $slider = new Slider;

        $form = $this->createForm(SliderType::class, $slider);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            $image_desktop = $form->get('image_desktop')->getData();
            $image_mobile = $form->get('image_mobile')->getData();

            $file_desktop = md5(uniqid()) . '.' . $image_desktop->guessExtension();
            $file_mobile = md5(uniqid()) . '.' . $image_mobile->guessExtension();

            $image_desktop->move($this->getParameter('images_directory'), $file_desktop);
            $image_mobile->move($this->getParameter('images_directory'), $file_mobile);

            $img_desktop = new Images();
            $img_mobile = new Images();

            $img_desktop->setName($file_desktop);
            $img_mobile->setName($file_mobile);

            $slider->addImageDesktop($img_desktop);
            $slider->addImageMobile($img_mobile);

            $slider->setActive(false);

            $em = $this->getDoctrine()->getManager();
            $em->persist($slider);
            $em->flush();

            return $this->redirectToRoute('admin_slider_home');

        }

        return $this->render('admin/slider/add.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/update/{id}", name="update")
     */
    public function updateSlider(Slider $slider, Request $request){

        $form = $this->createForm(SliderType::class, $slider);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            $em = $this->getDoctrine()->getManager();
            $em->persist($slider);
            $em->flush();

            return $this->redirectToRoute('admin_slider_home');
        }

        return $this->render('admin/slider/add.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/delete/{id}", name="delete")
     */
    public function deletePost(Slider $slider)
    {
        $imagesDesktop = $slider->getImageDesktop();
        $imagesMobile = $slider->getImageMobile();
        
        if($imagesDesktop){
            // On boucle sur les images de l'annonce
            foreach($imagesDesktop as $imageDesktop){
                // On "génère" le chemin physique de l'image
                $image_desktop_name = $this->getParameter("images_directory") . '/' . $imageDesktop->getName();
                
                // On vérifie si l'image existe
                if(file_exists($image_desktop_name)){
                    unlink($image_desktop_name);
                }
            }
        }

        if($imagesMobile){
            // On boucle sur les images de l'annonce
            foreach($imagesMobile as $imageMobile){
                // On "génère" le chemin physique de l'image
                $image_mobile_name = $this->getParameter("images_directory") . '/' . $imageMobile->getName();
                
                // On vérifie si l'image existe
                if(file_exists($image_mobile_name)){
                    unlink($image_mobile_name);
                }
            }
        }

        $em = $this->getDoctrine()->getManager();
        $em->remove($slider);
        $em->flush();

        $this->addFlash('message', 'Slider supprimé avec succès');
        return $this->redirectToRoute('admin_slider_home');
    }

    /**
     * @Route("/activate/{id}", name="activate")
     */
    public function activateSlider(Slider $slider){

        $slider->setActive(($slider->getActive())?false:true);
        $em = $this->getDoctrine()->getManager();
        $em->persist($slider);
        $em->flush();

        return new Response("true");
    }
}
