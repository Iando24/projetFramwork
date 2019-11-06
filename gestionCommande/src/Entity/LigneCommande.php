<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LigneCommandeRepository")
 */
class LigneCommande
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $idCom;

    /**
     * @ORM\Column(type="integer")
     */
    private $idProduit;

    /**
     * @ORM\Column(type="integer")
     */
    private $qteCom;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdCom(): ?int
    {
        return $this->idCom;
    }

    public function setIdCom(int $idCom): self
    {
        $this->idCom = $idCom;

        return $this;
    }

    public function getIdProduit(): ?int
    {
        return $this->idProduit;
    }

    public function setIdProduit(int $idProduit): self
    {
        $this->idProduit = $idProduit;

        return $this;
    }

    public function getQteCom(): ?int
    {
        return $this->qteCom;
    }

    public function setQteCom(int $qteCom): self
    {
        $this->qteCom = $qteCom;

        return $this;
    }
}
