<?php

namespace App\Controller;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Classroom;
class ClassroomController extends AbstractController
{
    #[Route('/classroom', name: 'app_classroom')]
    public function index(): Response
    {
        return $this->render('classroom/index.html.twig', [
            'controller_name' => 'ClassroomController'
        ]);
    }
    #[Route('/classroom/liste', name: 'classroom_liste')]
    public function liste(ManagerRegistry $doctrine): Response
    {
        $repo = $doctrine->getRepository(Classroom::class);
        $classrooms = $repo->findAll();   
        return $this->render('classroom/list.html.twig', [
            'controller_name' => 'ClassroomController','classrooms'=>$classrooms
        ]);
    }

}
