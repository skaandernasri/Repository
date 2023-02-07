<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TeacherController extends AbstractController
{
    /**
 * @Route("/teacher/{name}",name="app_teacher")
 */
    #[Route('/teacher/{name}', name: 'app_teachers')]
    public function index(): Response   
    {   
        return $this->render('teacher/index.html.twig', [
            'controller_name' => 'TeacherController',
        ]);
    }
    #[Route('/showTeacher/{name}', name: 'show_teachers')]
   public function showTeacher($name):Response
   {
return new Response("bonjour ".$name);
   }
   #[Route('/redirect', name: 'redirect_teachers')]
   public function goToindex(){
    return  $this->redirectToRoute('index');
   }
}
