<?php
include_once("Personne.php");

class Employe extends Personne
{
    private $salaire;

    public function __construct(int $id, string $nom, string $prenom, float $salaire)
    {
        parent::__construct($id,$nom,$prenom);
        $this->salaire = $salaire;
    }

    /**
     * Get the value of salaire
     */ 
    public function getSalaire():float
    {
        return $this->salaire;
    }

    /**
     * Set the value of salaire
     *
     * @return  self
     */ 
    public function setSalaire($salaire):self
    {
        $this->salaire = $salaire;

        return $this;
    }

    public function __toString() :string
    {
        return "Je suis ".$this->getNom()." ".$this->getPrenom()." mon salaire est : " . number_format($this->salaire, 1) ." euros";
    }
}