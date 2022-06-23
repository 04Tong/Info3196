<?php 

//On récupère la valeur envoyée par le front

//On inclut le fichier de conneion
include_once('php/log.php');

$matricule=$_POST['matricule_ens'];
$nom=$_POST['nom_ens'];
$prenom=$_POST['prenom_ens'];
$mail=$_POST['mail_ens'];
$departement=$_POST['departement'];
$filiere=$_POST['filiere'];
$grade='ens';
$matiere=$_POST['matiere'];
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
    
$requete2=$bdd->prepare("INSERT INTO enseignant VALUES(:mat,:matiere)");
$requete2->bindParam(':mat', $matricule);
$requete2->bindParam(':matiere', $matiere);
$requete2->execute();
?>
<script>
    alert("Enregistrement de l'enseignant fait avec succès !");
    self.location.href="home.php";
</script>
<?php 
}