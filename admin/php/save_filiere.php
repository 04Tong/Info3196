<?php 

//On récupère la valeur envoyée par le front
$data=array();
$data = json_decode($_POST['data']);

//On inclut le fichier de conneion
include_once('log.php');

$id=$data[0];
$libelle=$data[1];

//Requete d'enregistrement d'un département
$requete1=$bdd->prepare("INSERT INTO filiere(libelle,id_departement) VALUES(:libelle,:id)");

$requete1->bindParam(':libelle', $libelle);
$requete1->bindParam(':id', $id);
$requete1->execute();
//On execute la permiere requete
if($requete1){
    die("Enregistrement de la filière fait avec succès !");
}