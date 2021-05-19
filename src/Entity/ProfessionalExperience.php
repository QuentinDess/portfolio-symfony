<?php

namespace App\Entity;

use App\Repository\ProfessionalExperienceRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProfessionalExperienceRepository::class)
 */
class ProfessionalExperience
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $enterprise;

    /**
     * @ORM\Column(type="date")
     */
    private $yearOfStart;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $yearOfStop;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getEnterprise(): ?string
    {
        return $this->enterprise;
    }

    public function setEnterprise(string $enterprise): self
    {
        $this->enterprise = $enterprise;

        return $this;
    }

    public function getYearOfStart(): ?\DateTimeInterface
    {
        return $this->yearOfStart;
    }

    public function setYearOfStart(\DateTimeInterface $yearOfStart): self
    {
        $this->yearOfStart = $yearOfStart;

        return $this;
    }

    public function getYearOfStop(): ?\DateTimeInterface
    {
        return $this->yearOfStop;
    }

    public function setYearOfStop(?\DateTimeInterface $yearOfStop): self
    {
        $this->yearOfStop = $yearOfStop;

        return $this;
    }
}
