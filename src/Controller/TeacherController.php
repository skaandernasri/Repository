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
    #[Route('/teacher/{name}', name: 'app_teacher')]
    public function index(): Response   
    {   
        return $this->render('teacher/index.html.twig', [
            'controller_name' => 'TeacherController',
        ]);
    }
    
   public function showTeacher($name){
return new Response("bonjour".$name);
   }
   public function goToindex(){
    return  $this->forward('StudentController.php::index',[]);
   }
}
