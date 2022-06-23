<?php 

//On récupère la valeur envoyée par le front

//On inclut le fichier de conneion
include_once('log.php');

//On crée le tableau qui stockera les valeurs des départements
$tableau=array();
//On initialise notre indice compteur
$i=0;

//Fonction qui charge les départements
$requete= "SELECT* FROM filiere";
foreach ($bdd->query($requete) as $row) {
    # code...
    $tableau[$i][0]=$row['id'];

    $tableau[$i][1]=$row['libelle'];


    $i++;
}

//On renvoie ld etableau au front end
die(json_encode($tableau));


?>