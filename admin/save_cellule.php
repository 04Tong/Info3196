<?php 

//On récupère la valeur envoyée par le front

//On inclut le fichier de conneion
include_once('php/log.php');

$matricule=$_POST['matricule_ci'];
$nom=$_POST['nom_ci'];
$prenom=$_POST['prenom_ci'];
$mail=$_POST['mail_ci'];
$departement=0;
$grade='ci';
//Requete d'enregistrement d'un département
$requete1=$bdd->prepare("INSERT INTO utilisateur VALUES(:mat,:nom,:prenom,:mail,:grade,:dep)");

$requete1->bindParam(':mat', $matricule);
$requete1->bindParam(':nom', $nom);
$requete1->bindParam(':prenom', $prenom);
$requete1->bindParam(':mail', $mail);
$requete1->bindParam(':grade', $grade);
$requete1->bindParam(':dep', $departement);
$requete1->execute();
//On execute la permiere requete
if($requete1){
    ?>
<script>
    alert("Enregistrement du membre de la cellule fait avec succès !");
    self.location.href="home.php";
</script>
<?php 
}