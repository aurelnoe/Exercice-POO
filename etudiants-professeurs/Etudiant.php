<?php
include_once("Personne.php");

class Etudiant extends Personne
{
    private $cne;

    public function __construct(int $id, string $nom, string $prenom, string $cne)
    {
        parent::__construct($id,$nom,$prenom);
        $this->cne = $cne;  
    }

    /**
     * Get the value of cne
     */ 
    public function getCne():string
    {
        return $this->cne;
    }

    /**
     * Set the value of cne
     *
     * @return  self
     */ 
    public function setCne($cne):self
    {
        $this->cne = $cne;

        return $this;
    }

    public function __toString() :string
    {
        return "je suis ".$this->getNom()." ".$this->getPrenom()." mon CNE est : " . $this->cne;
    }
}