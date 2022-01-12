<?php

namespace App\Entity;

use App\Entity\Groupe;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\EtudiantRepository;

#[ORM\Entity(repositoryClass: EtudiantRepository::class)]
class Etudiant
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'integer')]
    private $cne;

    #[ORM\Column(type: 'string', length: 255)]
    private $fullName;

    #[ORM\Column(type: 'integer')]
    private $Telephone;

    #[ORM\Column(type: 'string', length: 255)]
    private $email;

    #[ORM\ManyToOne(targetEntity: Groupe::class, inversedBy: 'etudiants')]
    #[ORM\JoinColumn(nullable: false)]
    private $groupe;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCne(): ?int
    {
        return $this->cne;
    }

    public function setCne(int $cne): self
    {
        $this->cne = $cne;

        return $this;
    }

    public function getFullName(): ?string
    {
        return $this->fullName;
    }

    public function setFullName(string $fullName): self
    {
        $this->fullName = $fullName;

        return $this;
    }

    public function getTelephone(): ?int
    {
        return $this->Telephone;
    }

    public function setTelephone(int $Telephone): self
    {
        $this->Telephone = $Telephone;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getGroupe(): ?Groupe
    {
        return $this->groupe;
    }

    public function setGroupe(?Groupe $groupe): self
    {
        $this->groupe = $groupe;

        return $this;
    }
}
