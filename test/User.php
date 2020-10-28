<?php

class User
{
   public $name;
   public $prenom;

    public function getName() 
   {
		return $this->name;
	}

   public function setName(public $name) 
   {
      $this->name = $name;
      return $this->name;
	}

    public function getPrenom() 
   {
      return $this->prenom;
	}

   public function setPrenom(public $prenom) 
   {
      $this->prenom = $prenom;
      return $this->prenom;
	}
 
}
