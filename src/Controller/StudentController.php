<?php

namespace App\Controller;
use Doctrine\Persistence\ManagerRegistry;
use App\Entity\Student;
use App\Repository\StudentRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StudentController extends AbstractController
{
   /* #[Route('/student', name: 'app_student')]
    public function index(StudentRepository $repo): Response
    {
        $students = $repo->findall();
        return $this->render('student/index.html.twig', [
            'controller_name' => 'StudentController',
            'students'=>$students
        ]);
    }
*/
    #[Route('/student', name: 'app_student')]
    public function index(ManagerRegistry $doctrine): Response
    {
        $repo = $doctrine->getRepository(Student::class);
        $students = $repo->findAll();
        return $this->render('student/index.html.twig', [
            'controller_name' => 'StudentController',
            'students'=>$students
        ]);
    }
    
    
    #[Route('/deleteStudent/{id}', name: 'delete_student')]
    public function deleteStudent($id,ManagerRegistry $doctrine){
    $student=$doctrine->getRepository(Student::class)->find($id);
    $em=$doctrine->getManager();
    $em->remove($student);
    $em->flush();
        return $this->redirectToRoute('app_student');
    }
    #[Route('/addStudent', name: 'add_student')]
    public function addStudent(ManagerRegistry $doctrine){
    $student= new Student();
    $student= $student->setUsername('test_persist');
    $student= $student->setEmail('test@persist');
    $em=$doctrine->getManager();
    $em->persist($student);
    $em->flush();
        return $this->redirectToRoute('app_student');
}


#[Route('/updateStudent/{id}', name: 'update_student')]
public function update($id,ManagerRegistry $doctrine){
$student= $doctrine->getRepository(Student::class)->find($id);
$student= $student->setUsername('test_ update');

$em=$doctrine->getManager();
//$em->persist($student);
$em->flush();
    return $this->redirectToRoute('app_student');
}
}