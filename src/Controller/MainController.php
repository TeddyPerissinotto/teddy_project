<?php
namespace App\Controller;

use App\Repository\SliderRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(SliderRepository $sliderRepository)
    {
        $page_name = "home";

        $sliders = $sliderRepository->findAll();

        
        return $this->render('main/index.html.twig', [
            'page_name' => $page_name,
            'sliders' => $sliders
        ]);
    }
}
