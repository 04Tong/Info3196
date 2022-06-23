<?php 

//On récupère la valeur envoyée par le front
$data = json_decode($_POST['data']);

//On inclut le fichier de conneion
include_once('log.php');

//On crée le tableau qui stockera les valeurs des départements
$tableau=array();
//On initialise notre indice compteur
$i=0;

//Fonction qui charge les départements
$requete= "SELECT* FROM matiere  WHERE id_filiere='".$data."'";
foreach ($bdd->query($requete) as $row) {
    # code...
    $tableau[$i]=$row['code_matiere'];


    $i++;
}

//On renvoie ld etableau au front end
die(json_encode($tableau));


?>