<?php
include_once("Personne.php");
include_once("Professeur.php");
include_once("Employe.php");
include_once("Etudiant.php");

$pers1 = new Personne(1,"DOUK", "Rachid");
$pers2 = new Personne(2,"NGOYE", "Roland");
$pers3 = new Personne(3,"OBAKA", "Med");
$pers4 = new Personne(4,"ALSENY", "Thomas");
$pers5 = new Personne(5,"OBA", "Kévin");
$pers6 = new Personne(6,"MAGASSOUBA", "Cheick");


$employe1 = new Employe($pers1->getId(),$pers1->getNom(), $pers1->getPrenom(), 10000.0);
$employe2 = new Employe($pers2->getId(),$pers2->getNom(), $pers2->getPrenom(), 10000.0);

$etudiant1 = new Etudiant($pers3->getId(),$pers3->getNom(), $pers3->getPrenom(),"65678754");
$etudiant2 = new Etudiant($pers4->getId(),$pers4->getNom(), $pers4->getPrenom(),"87543543");

$prof1 = new Professeur($pers5->getId(),$pers5->getNom(), $pers5->getPrenom(),5700.0,"JAVA/JEE");
$prof2 = new Professeur($pers6->getId(),$pers6->getNom(), $pers6->getPrenom(),5000.0,"PHP");

echo "La liste des employés : \n";
echo $employe1."\n";
echo $employe2."\n";

echo "La liste des étudiants : \n";
echo $etudiant1."\n";
echo $etudiant2."\n";

echo "La liste des professeurs : \n";
echo $prof1."\n";
echo $prof2."\n";