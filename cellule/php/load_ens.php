<?php 

//On récupère la valeur envoyée par le front
$data = json_decode($_POST['data']);

//On inclut le fichier de conneion
include_once('log.php');

//On crée le tableau qui stockera les valeurs des départements
$tableau=array();
//On initialise notre indice compteur
$i=0;

$requete= "SELECT id FROM enseignant  WHERE matiere='".$data."'";
foreach ($bdd->query($requete) as $row) {
    # code...
    $id=$row['id'];
    $tableau[$i][0]=$id;
    $requete2= "SELECT* FROM utilisateur  WHERE matricule='".$id."'";
    foreach ($bdd->query($requete2) as $row2) {
        # code...
        $tableau[$i][1]=$row2['nom'];
    
        $tableau[$i][2]=$row2['prenom'];
    
         }

    $i++;
}

//On renvoie ld etableau au front end
die(json_encode($tableau));


?>