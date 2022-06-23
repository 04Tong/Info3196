<?php 

//On récupère la valeur envoyée par le front
$data=array();
$data = json_decode($_POST['data']);
//On inclut le fichier de conneion
include_once('log.php');
$tableau=array();
//On initialise notre indice compteur
$i=0;
 //affichage  des fichiers recus
if($data[1]!=''){
    $id=$data[0];
    $champs=$data[1];
    $val=$data[2];
        //Fonction qui charge les départements
    $requete= "SELECT* FROM note WHERE id_expediteur='".$id."' AND $champs='".$val."' ORDER BY date DESC";
    foreach ($bdd->query($requete) as $row) {
        # code...
        $fileName=$row['libelle'];
                 
        foreach (new DirectoryIterator('../../client/files1') as $fileInfo) {
            if($fileInfo->isDot()) continue;
            if($fileInfo->getFilename()==$fileName){
    
                $path="../client/files1/".$fileInfo->getFilename();
                $extension= pathinfo($path,PATHINFO_EXTENSION);
                $tableau[$i][0]=$extension;
                $tableau[$i][1]=$fileInfo->getFilename();
                //$tableau[$i][2]=filemtime($fileInfo->getFilename());
            
            }
        }
    
        $i++;
    }
    
}
else{
    $id=$data[0];
    //Fonction qui charge les départements
    $requete= "SELECT* FROM note WHERE id_expediteur='".$id."' ORDER BY date DESC";
    foreach ($bdd->query($requete) as $row) {
        # code...
        $fileName=$row['libelle'];
                 
        foreach (new DirectoryIterator('../../client/files1') as $fileInfo) {
            if($fileInfo->isDot()) continue;
            if($fileInfo->getFilename()==$fileName){
    
                $path="../client/files1/".$fileInfo->getFilename();
                $extension= pathinfo($path,PATHINFO_EXTENSION);
                $tableau[$i][0]=$extension;
                $tableau[$i][1]=$fileInfo->getFilename();
                //$tableau[$i][2]=filemtime($fileInfo->getFilename());
            
            }
        }
    
        $i++;
    }
    
}

//On renvoie ld etableau au front end
die(json_encode($tableau));


/*
 
*/

?>