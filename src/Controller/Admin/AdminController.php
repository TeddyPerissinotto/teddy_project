<?php

namespace App\Controller\Admin;

use App\Entity\Categories;
use App\Entity\Images;
use App\Entity\Posts;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\CategoriesType;
use App\Repository\CategoriesRepository;
use App\Form\PostsType;
use App\Repository\PostsRepository;

/**
 * @Route("/admin", name="admin_")
 * @package App\Controller
 */
class AdminController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {

        $user = $this->getUser();
        
        return $this->render('admin/index.html.twig', [
            'user' => $user
        ]);
    }

    
}
