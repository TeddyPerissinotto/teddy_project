<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\CategoriesRepository;
use App\Entity\Categories;


/**
 * @Route("/categories", name="categories_")
 */
class CategoriesController extends AbstractController
{
    
    /**
     * @Route("/", name="home")
     */
    public function index(CategoriesRepository $categoryRepository)
    {
        $page_name = "Catégories";

        $categories = $categoryRepository->findAll();

        return $this->render('categories/index.html.twig', [
            'categories' => $categories,
            'page_name' => $page_name
        ]);
    }

    /**
     * @Route("/single/{slug}", name="single")
     */
    public function single(Categories $category, CategoriesRepository $categoryRepository)
    {

        $current_category = $categoryRepository->find($category);

        $posts = $current_category->getPosts();

        $page_name = "Catégorie";

        return $this->render('categories/single.html.twig', [
            'category' => $current_category,
            'posts' => $posts,
            'page_name' => $page_name
        ]);
    }
}
