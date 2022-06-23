<?php

$data=array();

include_once('log.php');

//Récupération des éléments du formulaire
$type=$_POST['type'];
$departement=$_POST['departement'];
$filiere=$_POST['filiere'];
$matiere=$_POST['matiere'];
$expediteur=$_POST['id'];

$date=date("Y-m-d");
//die($_POST['max']);
for ($i=0; $i < $_POST['max']; $i++) { 
    # code...
    
  if($_POST['max']==1){

    $fileName=$_FILES['fileupload'.$i]['name'];
    $filetmp=$_FILES['fileupload'.$i]['tmp_name'];
    $tmp=explode('.',$fileName);
    $file_ext=end($tmp);

    $extensions=array('pdf','xls','xlsx','docx');
    $fileDestination='../files1/'.$fileName;

    if(in_array($file_ext,$extensions)===true){

      //REquete pour enregistrer le fichier dans la bd
      
    //REquete qui enregistre les informations de connexion
    $requete2=$bdd->prepare("INSERT INTO note(type,libelle,id_expediteur,id_filiere,id_matiere,date) VALUES(:type,:libelle,:id_exp,:id_fil,:id_mat,:date)");
    $requete2->bindParam(':type', $type);
    $requete2->bindParam(':libelle', $fileName);
    $requete2->bindParam(':id_exp', $expediteur);
    $requete2->bindParam(':id_fil', $filiere);
    $requete2->bindParam(':id_mat', $matiere);
    $requete2->bindParam(':date', $date);
          
    $requete2->execute();
    if($requete2){
      $requete= "SELECT* FROM note  WHERE type='".$type."' AND libelle='".$fileName."' AND id_expediteur='".$expediteur."' AND id_filiere='".$filiere."' AND id_matiere='".$matiere."' AND date='".$date."' ";
      foreach ($bdd->query($requete) as $row) {
        $id=$row['id'];
        $requete4=$bdd->prepare("INSERT INTO new_notes(id_note) VALUES(:id)");
        $requete4->bindParam(':id', $id);      
        $requete4->execute();
       
      }
      
      move_uploaded_file($filetmp, $fileDestination); 
      die("Fichier envoyé avec succès");
    }
      
    }else{
      die("N'envoyez que des fichiers pdf, word ou excel svp");
    }

  }else{
    die("Envoyez un seul fichier à la fois pour plus de sécurité");
  }
   
}

