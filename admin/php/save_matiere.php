<?php 

//On récupère la valeur envoyée par le front
$data=array();
$data = json_decode($_POST['data']);

//On inclut le fichier de conneion
include_once('log.php');

$code=$data[2];
$libelle=$data[3];
$id_filiere=$data[1];
$id_ens='';
//Requete d'enregistrement d'un département
$requete1=$bdd->prepare("INSERT INTO matiere VALUES(:code,:libelle,:id_filiere,:id_ens)");

$requete1->bindParam(':code', $code);
$requete1->bindParam(':libelle', $libelle);
$requete1->bindParam(':id_filiere', $id_filiere);
$requete1->bindParam(':id_ens', $id_ens);
$requete1->execute();
//On execute la permiere requete
if($requete1){
    die("Enregistrement de la matière fait avec succès !");
}