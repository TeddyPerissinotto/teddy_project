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

            $images = $form->get('images')->getData();
          

            $file_desktop = md5(uniqid()) . '.' . $images->guessExtension();

            $images->move($this->getParameter('images_directory'), $file_desktop);

            $img = new Images();

            $img->setName($file_desktop);

            $slider->addImages($img);
            $slider->setImage_Mobile(true);

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
        $images = $slider->getImages();
        
        if($images){
            // On boucle sur les images de l'annonce
            foreach($images as $image){
                // On "génère" le chemin physique de l'image
                $image_name = $this->getParameter("images_directory") . '/' . $image->getName();
                
                // On vérifie si l'image existe
                if(file_exists($image_name)){
                    unlink($image_name);
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

    /**
     * @Route("/activate-on-mobile/{id}", name="activate_img_mobile")
     */
    public function activateImageMobile(Slider $slider){

        $slider->setImage_Mobile(($slider->getImage_Mobile())?false:true);
        $em = $this->getDoctrine()->getManager();
        $em->persist($slider);
        $em->flush();

        return new Response("true");
    }
}
