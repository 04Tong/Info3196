<?php 

//On récupère la valeur envoyée par le front
$data = json_decode($_POST['data']);

//On inclut le fichier de conneion
include_once('log.php');

//Requete d'enregistrement d'un département
$requete1=$bdd->prepare("INSERT INTO departement(libelle) VALUES(:libelle)");

$requete1->bindParam(':libelle', $data);
$requete1->execute();
//On execute la permiere requete
if($requete1){
    die("Enregistrement du département fait avec succès !");
}