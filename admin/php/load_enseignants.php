<?php 

//On récupère la valeur envoyée par le front
$data=array();
$data = json_decode($_POST['data']);

//On inclut le fichier de conneion
include_once('log.php');

//On crée le tableau qui stockera les valeurs des départements
$tableau=array();
//On initialise notre indice compteur
$i=0;
if($data[0]!="null" && $data[1]!="null"  && $data[2]!="null" ){

    $requete2= "SELECT* FROM enseignant WHERE  matiere='".$data[2]."'";
    foreach ($bdd->query($requete2) as $row2) {
        # code...
        $ens=$row2['id'];
        $requete3= "SELECT* FROM utilisateur WHERE matricule='".$ens."'";
        foreach ($bdd->query($requete3) as $row3) {
            # code...
            $tableau[$i][0]=$row3['matricule'];
            $tableau[$i][1]=$row3['nom'];
            $tableau[$i][2]=$row3['prenom'];
            $tableau[$i][3]=$row3['mail'];
        
        }
        
    }
}
elseif($data[0]!="null" && $data[1]=="null"  && $data[2]=="null"){

//Fonction qui charge les départements
$requete= "SELECT* FROM utilisateur WHERE grade='ens' AND id_departement='".$data[0]."'";
foreach ($bdd->query($requete) as $row) {
    # code...
    $tableau[$i][0]=$row['matricule'];

    $tableau[$i][1]=$row['nom'];
    $tableau[$i][2]=$row['prenom'];
    $tableau[$i][3]=$row['mail'];

    $i++;
}
}
elseif($data[0]!="null" && $data[1]!="null"  && $data[2]=="null"){
$matieres=array();
$i2=0;
//On sélectionne les matières qui font partie de la filiere
$requete= "SELECT* FROM matiere WHERE  id_filiere='".$data[1]."'";
foreach ($bdd->query($requete) as $row) {
    # code...
    $matieres[$i2]=$row['code_matiere'];
   
$i2++;


}
$a=0;
for ($i=0; $i < $i2; $i++) { 
    # code...
    $requete2= "SELECT* FROM enseignant WHERE  matiere='".$matieres[$i]."'";
    foreach ($bdd->query($requete2) as $row2) {
        # code...
        $ens=$row2['id'];
        $requete3= "SELECT* FROM utilisateur WHERE matricule='".$ens."'";
        foreach ($bdd->query($requete3) as $row3) {
            # code...
            $tableau[$i][0]=$row3['matricule'];
            $tableau[$i][1]=$row3['nom'];
            $tableau[$i][2]=$row3['prenom'];
            $tableau[$i][3]=$row3['mail'];
        
        }
        
    }
}

}
else{
//Fonction qui charge les départements
$requete= "SELECT* FROM utilisateur WHERE grade='ens'";
foreach ($bdd->query($requete) as $row) {
    # code...
    $tableau[$i][0]=$row['matricule'];

    $tableau[$i][1]=$row['nom'];
    $tableau[$i][2]=$row['prenom'];
    $tableau[$i][3]=$row['mail'];

    $i++;
}
}




//On renvoie ld etableau au front end
die(json_encode($tableau));


?>