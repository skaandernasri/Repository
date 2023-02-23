<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    #[Route('/product', name: 'app_product')]
    public function index(): Response
    {
        return $this->render('product/index.html.twig', [
            'controller_name' => 'ProductController',
        ]);
    }

    // #[Route('/welcome',name:'app_index')]
    public function index2() : Response
    {
        return new Response("Bonjour 3A17/3A18");
    }

    #[Route('/welcome2/{para}/{para2}',name:'app_index_para')]
    public function routePara($para,$para2) : Response {
        return new Response ("Hello".$para . ' ' . $para2);
    }
}
