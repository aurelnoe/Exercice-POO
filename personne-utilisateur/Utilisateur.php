<?php
include_once("Profil.php");
include_once("Personne.php");

class Utilisateur extends Personne
{
    private $login;
    private $password;
    private $service;
    private $profil;

    public function __construct(Personne $personne, string $login, string $password, string $service, Profil $profil)
    {
        parent::__construct($personne->getId(),$personne->getPrenom(),$personne->getNom(),$personne->getMail(),$personne->getTelephone(),$personne->getSalaire());   //Ou $this->setPrenom($personne->getPrenom).....pareil pour nom
        $this->login = $login;
        $this->password = $password;
        $this->service = $service;
        $this->profil = $profil;
    }

    /**
     * Get the value of login
     */ 
    public function getLogin():string
    {
        return $this->login;
    }

    /**
     * Set the value of login
     *
     * @return  self
     */ 
    public function setLogin(string $login):self
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get the value of password
     */ 
    public function getPassword():string
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */ 
    public function setPassword(string $password):self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of service
     */ 
    public function getService():string
    {
        return $this->service;
    }

    /**
     * Set the value of service
     *
     * @return  self
     */ 
    public function setService(string $service):self
    {
        $this->service = $service;

        return $this;
    }

    /**
     * Get the value of profil
     */ 
    public function getProfil():Profil
    {
        return $this->profil;
    }

    /**
     * Set the value of profil
     *
     * @return  self
     */ 
    public function setProfil(Profil $profil):self
    {
        $this->profil = $profil;

        return $this;
    }

    public function __toString()
    {
        return "Mon login : ".$this->login."mon password : ".$this->password."mon service : ".$this->service."".$this->profil; 
    }
    /***********************************************************/
    public function calculerSalaire():float
    {
        if ($this->profil->getCode() == "MN") {
            $this->salaire * 1.10;
        }
        elseif ($this->profil->getCode() == "DG") {
            $this->salaire * 1.4;
        }

        return $this->salaire;
    }
    /**************** */
    public function affiche():void
    {
        echo $this;   //$this Affiche la fonction __toString de la classe
    }

}
