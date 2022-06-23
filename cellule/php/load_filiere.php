<?php 

//On inclut le fichier de conneion
include_once('log.php');


//On recupere l'id département envoyé par le front end
$id_departement=json_decode($_POST['data']);
//On crée le tableau qui stockera les valeurs des départements
$tableau=array();
//On initialise notre indice compteur
$i=0;

//Fonction qui charge les départements
$requete= "SELECT* FROM filiere WHERE id_departement='".$id_departement."'";
foreach ($bdd->query($requete) as $row) {
    # code...
    $tableau[$i][0]=$row['id'];

    $tableau[$i][1]=$row['libelle'];
    $i++;
}

//On renvoie ld etableau au front end
die(json_encode($tableau));


?>