<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- FAVICONS ICON ============================================= -->
	<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png" />
	
	<!-- PAGE TITLE HERE ============================================= -->
	<title>Sysco </title>
</head>
<body>
<?php

//recuperation des donnees du formulaire

$matricule=$_POST['matricule'];
$username=$_POST['login'];
$pswd=$_POST['password'];

//Verifier la recuperation
//echo $matricule."|".$nom."|".$prenom."|".$mail."|".$grade."|".$username."|".$pswd;


//On crypte les informations de session
$pswd2=password_hash($pswd, PASSWORD_BCRYPT);


//connexion à la bd
include_once('log.php');

 //Requete qui charge le matricule

 $requete="SELECT grade FROM utilisateur WHERE  matricule= '".$matricule."'";
    
 foreach ($bdd->query($requete) as $row) {
     # code...
     $grade=$row['grade'];
 }


if($grade){

   
    //On execute la deuxieme

    //REquete qui enregistre les informations de connexion
    $requete2=$bdd->prepare("INSERT INTO login VALUES(:username,:pswd,:matricule)");
    $requete2->bindParam(':username', $username);
    $requete2->bindParam(':pswd', $pswd2);
    $requete2->bindParam(':matricule', $matricule);
          
    $requete2->execute();
    if($requete2){
        
        $_SESSION['username']=$username;
        $_SESSION['matricule']=$matricule;
       // echo("Enregistrement de l'utilisateur effecuté avec succès");
       ?>
       <script>
           alert("Enregistrement de l'utilisateur effecuté avec succès");
           
       </script>
<?php
    //Verification du grade
    if($grade=='ci'){
        ?>
        <script>
        
        self.location.href="../../cellule/index.php";
    </script>

<?php
    }
    else if($grade=='ens'){
        ?>
        <script>
        
        self.location.href="../../client/enseignant.php";
    </script>

<?php
    }
        
    else{
        ?>
        <script>
        
        self.location.href="../../client/index.php";
    </script>

<?php
    }

    }
    else{
        //echo("Une erreur est survenue lors de l'enregistrement de vos informations de connexion");
        ?>
        <script>
            alert("Une erreur est survenue lors de l'enregistrement de vos informations de connexion")
            self.location.href="../index.html";
        </script>
 <?php
    }
}
else{
   // echo("Une erreur est survenue lors de l'enregistrement de cet utilisateur");
   ?>

   <script>
   alert("Une erreur est survenue lors de l'enregistrement de cet utilisateur")
</script>
<?php
}

?>

</body>
</html>