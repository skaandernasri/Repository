<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
 class StudentController extends AbstractController{


/**
 * @Route("/index",name="index")
 */
#[Route('/index', name: 'index')]
  public function index()
 {
    return new Response('Bonjour mes étudiants') ;
 }



}
?>