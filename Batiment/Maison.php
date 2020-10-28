<?php

include_once("Batiment.php");

class Maison extends Batiment 
{
    private $nbpiece;
    
    public function __construct(int $newNbpiece, string $newAdresse, float $newSuperficie)
    {
        $this->nbpiece = $newNbpiece;
        parent::__construct($newAdresse);  // Plus sécurisé que d'utiliser le setAdresse
        $this->setSuperficie($newSuperficie);
    }

    /**
     * Get the value of nbpiece
     */ 
    public function getNbpiece():int
    {
        return $this->nbpiece;
    }

    /**
     * Set the value of nbpiece
     *
     * @return  self
     */ 
    public function setNbpiece($nbpiece):self
    {
        $this->nbpiece = $nbpiece;

        return $this;
    }

    public function __toString() :string
    {
        return "[Nombre de piece(s)] : " . $this->nbpiece . " \n[Adresse] : " . $this->__toString()." \n[Superficie] : " . $this->getSuperficie();
    }
}