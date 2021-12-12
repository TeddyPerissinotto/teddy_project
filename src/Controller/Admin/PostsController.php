<?php

namespace App\Controller\Admin;


use App\Entity\Images;
use App\Entity\Posts;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\PostsType;
use App\Repository\PostsRepository;
use Symfony\Component\HttpFoundation\Response;

/**
 * @Route("/admin/posts", name="admin_posts_")
 * @package App\Controller\Admin
 */
class PostsController extends AbstractController{

    /**
     * @Route("/", name="home")
     */
    public function index(PostsRepository $postsRepository){

        $posts = $postsRepository->findAll();
        $page_title = "Gestion des Publications";

        return $this->render('admin/posts/index.html.twig', [
            'posts' => $posts,
            'page_title' => $page_title
        ]);
    }



    /**
     * @Route("/add", name="add")
     */
    public function addPosts(Request $request){

        $page_title = "Ajouter une Publication";

        $post = new Posts;

        $form = $this->createForm(PostsType::class, $post);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            $images = $form->get('images')->getData();

            foreach($images as $image){

                $file = md5(uniqid()) . '.' . $image->guessExtension();

                $image->move($this->getParameter('images_directory'), $file);
                
                $img = new Images();
                $img->setName($file);

                $post->addImage($img);

            }

            $post->setActive(false);
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($post);
            $em->flush();

            return $this->redirectToRoute('admin_home');
        }

        return $this->render('admin/posts/add.html.twig', [
            'form' => $form->createView(),
            'page_title' => $page_title,
        ]);


    }

    /**
     * @Route("/update/{id}", name="update")
     */
    public function updatePost(Posts $post, Request $request){

        $page_title = "Modification d'une publication";

        $form = $this->createForm(PostsType::class, $post);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            $em = $this->getDoctrine()->getManager();
            $em->persist($post);
            $em->flush();

            return $this->redirectToRoute('admin_posts_home');
        }

        return $this->render('admin/posts/add.html.twig', [
            'form' => $form->createView(),
            'page_title' => $page_title,
        ]);
    }

     /**
     * @Route("/delete/{id}", name="delete")
     */
    public function deletePost(Posts $post)
    {
        $images = $post->getImages();
        
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
        $em->remove($post);
        $em->flush();

        $this->addFlash('message', 'Annonce supprimée avec succès');
        return $this->redirectToRoute('admin_posts_home');
    }

    /**
     * @Route("/activate/{id}", name="activate")
     */
    public function activatePost(Posts $post){

        $post->setActive(($post->getActive())?false:true);
        $em = $this->getDoctrine()->getManager();
        $em->persist($post);
        $em->flush();

        return new Response("true");
    }

}