<?php
include_once("Employe.php");

class Professeur extends Employe
{
    private $specialite;

    public function __construct(int $id, string $nom, string $prenom, int $salaire, string $specialite)
    {
        parent::__construct($id, $nom, $prenom, $salaire);
        $this->specialite = $specialite;   
    }

    /**
     * Get the value of specialite
     */ 
    public function getSpecialite():string
    {
        return $this->specialite;
    }

    /**
     * Set the value of specialite
     *
     * @return  self
     */ 
    public function setSpecialite($specialite):self
    {
        $this->specialite = $specialite;

        return $this;
    }

    public function __toString() :string
    {
        return "Je suis ".$this->getNom()." ".$this->getPrenom()." mon salaire est : ".number_format($this->getSalaire(),1)." ma spécialité est : " . $this->specialite;
    }
}
