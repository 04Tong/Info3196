<?php 

session_start();

?>
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
/*
// See the password_hash() example to see where this came from.
$hash = '$2y$07$BCryptRequires22Chrcte/VlQH0piJtjXl.0t1XkA8pw9dMXTpOq';

if (password_verify('rasmuslerdorf', $hash)) {
    echo 'Password is valid!';
} else {
    echo 'Invalid password.';
}


  // Plaintext password entered by the user
  $plaintext_password = "Password@123";
  
  // The hashed password retrieved from database
  $hash = 
"$2y$10$8sA2N5Sx/1zMQv2yrTDAaOFlbGWECrrgB68axL.hBb78NhQdyAqWm";
  
  // Verify the hash against the password entered
  $verify = password_verify($plaintext_password, $hash);
  
  // Print the result depending if they match
  if ($verify) {
      echo 'Password Verified!';
  } else {
      echo 'Incorrect Password!';
  }
*/
?>
   <?php
    
    //recuperationdes donnees du formulaire
    $username=$_POST['username'];
    $pswd=$_POST['password'];

    //connexion a la bd
    require_once('log.php');

    //requete de recuperation
    
   
        
        $_SESSION['username']=$username;
        //Requete qui recupère le grade de la personne
        $requete3=$bdd->prepare("SELECT* FROM admin WHERE login='".$username."' AND password = '".$pswd."'");

        $requete3->execute();
        $user2=$requete3->fetch();
    
        //On vérifie
        if($user2){
            ?>
            <script>
                alert('Connexion faite avec succès');
                self.location.href="../home.php";
            </script>
    <?php 
        }
    else{
        ?>
        <script>
            alert("Nom d'utilisateur ou mot de passe incorect"); 
            self.location.href="../index.html";
        </script>
<?php 
    }

    
    ?>
</body>
</html>