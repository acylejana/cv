<?php

namespace App\Entity;

use App\Repository\PatronymeRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PatronymeRepository::class)
 */
class Patronyme
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
    private $ll;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $profession;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLl(): ?string
    {
        return $this->ll;
    }

    public function setLl(string $ll): self
    {
        $this->ll = $ll;

        return $this;
    }

    public function getProfession(): ?string
    {
        return $this->profession;
    }

    public function setProfession(string $profession): self
    {
        $this->profession = $profession;

        return $this;
    }
}
