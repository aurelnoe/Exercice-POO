<?php
include_once("Profil.php");
include_once("Utilisateur.php");

$CP = new Profil(1, "CP\n", "Chef de projet\n");
$MN = new Profil(2, "MN\n", "Manager\n");
$DP = new Profil(3, "DP\n", "Directeur de projet\n");
$DRH = new Profil(4, "DRH\n", "Directeur des ressources humaines\n");
$DG = new Profil(5, "DG\n", "Directeur Général\n");

$personne1 = new Personne(1,"David", "Dupond", "dava@mail.com", "0607080910", 1000);
$personne2 = new Personne(2,"Robert", "Dupond", "robi@mail.com", "0607080910", 1000);
$personne3 = new Personne(3,"George", "Dupond", "gogo@mail.com", "0607080910", 1000);
$personne4 = new Personne(4,"Robert", "Dupond", "robi@mail.com", "0607080910", 1000);
$personne5 = new Personne(5,"Robert", "Dupond", "robi@mail.com", "0607080910", 1000);

$user1 = new Utilisateur($personne1,"bob\n","Bob1234\n", "Informatique\n",$CP);   //string $login, string $password, string $service, Profil(int $id, string $code, string $libelle)
$user2 = new Utilisateur($personne2,"toto\n","Toto1234\n", "Management\n",$MN);
$user3 = new Utilisateur($personne3,"bibi\n","Bibi1234\n", "Direction\n",$DP);
$user4 = new Utilisateur($personne4,"doudou\n","Dou1234\n", "Direction\n",$DRH);
$user5 = new Utilisateur($personne5,"kéké\n","Ké1234\n", "Direction\n",$DG);

echo "\nUtilisateur 1 :\n" .$user1;
echo "\nUtilisateur 2 :\n" .$user2;
