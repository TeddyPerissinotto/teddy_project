<?php

namespace App\Controller;

use App\Entity\Posts;
use App\Repository\PostsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


/**
 * @Route("/posts", name="posts_")
 */
class PostsController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(PostsRepository $postsRepository)
    {
        $posts = $postsRepository->findAll();

        $page_name = "Publications";
        

        return $this->render('posts/index.html.twig', [
            'posts' => $posts,
            'page_name' => $page_name,
            
        ]);
    }

    /**
     * @Route("/{slug}", name="single")
     */
    public function single(Posts $post, PostsRepository $postsRepository)
    {
        $current_post = $postsRepository->find($post);

        $page_name = $current_post->getTitle();
        $page_title = "Gestion des Publicat";

        return $this->render('posts/single.html.twig', [
            'post' => $current_post,
            'page_name' => $page_name
        ]);
    }
}
