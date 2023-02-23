<?php

namespace App\Entity;

use App\Repository\ClassroomRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ClassroomRepository::class)]
class Classroom
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;
    #[ORM\Column(length: 255)]
    private ?String $name = null ;
    public function getId(): ?int
    {
        return $this->id;
    }
    public function getName(): ?String
    {
        return $this->name;
    }
    public function setId(int $id)
    {
       $this->id=$id;
    }
    public function setName(String $name)
    {
       $this->name=$name;
    }
}

