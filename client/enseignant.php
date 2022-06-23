<?php

// Démarrage de la session

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
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/jquery-ui.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/tailwind.min.css">
    
</head>
<body><?php

$user=$_SESSION['username'];
$matricule=$_SESSION['matricule'];
?>
    <div class="main_bloc">
        
    <div class="part_left">
        <div class="head">
            <img src="img/avatar.png" alt="">
            <div class="user">
                    <p class="name">
                    <?php

                       echo $user;
                    ?>
                    </p>
                    <p class="status">Online</p>
            </div>
            
        </div>
        <div class="body">
            <nav><h6>MENU PRINCIPAL</h6>
                <ul id="menu"> 
                    <li>
                        <i class="fa fa-home" style="color:lightgrey"></i>
                        <p id="dashboard">Gestion des notes</p>
                        <div class="down arraw" style=""> &laquo;  </div>
                        <ul>                            
                            <li id=""><a href="                    notes_envoyees.php">Notes envoyées</a> </li>
                            <li id=""> <a href="                nouveaux_pv_recus.php">Nouveaux PVs reçus</a> </li>
                            <li id=""> <a href="                         pv_recus.php">PVs reçus</a> </li>

                        </ul>
                    </li>
                    <li>
                        <i class="fa fa-tasks"></i>
                        <p>Requêtes</p>
                        <div class="down" style=""> &laquo;  </div>
                        <ul>
                                <li id="">  <a href="#">Soumettre une requete </a></li>
                                <li id="">  <a href="#">Requêtes en cours </a></li>
                                <li id="">  <a href="#">Requêtes validées </a></li>                            
                                
                        </ul>    
                    </li>    
                    <li>    
                        <i class="fa fa-users" style="color:rgba(29, 138, 29,.6)"></i>
                        <p>Gestion de compte</p>
                        <div class="down" style=""> &laquo;  </div>
                        <ul>
                            <li> <a href="parametres.php">Paramètres</a> </li>                            

                        </ul>
                    </li>
                    <li>
                        <i class="fa fa-inbox" style="color:rgba(29, 138, 29,.4)"></i>
                        <p>Boite de reception</p>
                        <p class="plus" style=""> 20  </p>

                    </li>
                    <li>
                        <i class="fa fa-envelope" style="color:rgba(29, 138, 29,.4)"></i>
                        <p>Nouveau message</p>
                        
                    </li>
                    
                    
                </ul>
                
                <div class="container py-0 h-60 " style="margin-left:8%;">
                        <div class="text-center text-lg-start mt-2 pt-2">
                                <a href="upload.php" class="btn btn-success btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">Envoyer des notes</a>
                                                    
                        </div> 
                        
                      
                        
                       
                    </div>
            </nav>
        </div>
    </div>
    <div class="part_right">
        <div class="head">
                <ol class="liste1">
                    <li><i class="fa fa-bars"></i></li>
                    <li class="titre">SYSTEME DE COLLECTE DES NOTES</li>
                </ol>
                <ol class="liste2">
                    <li class="comment"><i class="fa fa-comment"></i></li>
                    <li class="notif"><i class="fa fa-bell"></i></li>
                    <li><i class="fa fa-search"></i></li>
                    <li class="user"><i class="fa fa-user"></i></li>
                    <li><i class="fa fa-ellipsis-v"></i></li>

                </ol>      
            
            </div>
        <div class="body">
            <div id="title" class="bloc_title">Statistiques</div>

            <div id="main_stats" class="main_stats">
                <div id="bloc1" class="bloc1">
                    <p class="title">
                        Nouveaux Pvs reçus
                    </p>
                    <p class="number">
                    <?php
                    
                    //On inclut le fichier de conneion
                    include_once('php/log.php');

                    //On crée le tableau qui stockera les valeurs des départements
                    //On initialise notre indice compteur

                    //Fonction qui charge les départements
                    $requete= "SELECT COUNT(id) As nb FROM pv";
                    foreach ($bdd->query($requete) as $row) {
                        # code...
                        $nb_new_pv=$row['nb'];
                        
                    }
                    echo $nb_new_pv;
                ?>      
                    </p>
                    <p class="progression">
                        <p class="progress_bar"></p>
                        
                    </p>
                    <ol>
                        <li>Progression</li>
                        <li>45%</li>
                    </ol>
                </div>
                <div id="bloc2" class="bloc2">
                    <p class="title">
                        Notes envoyées
                    </p>
                    <p class="number">
                    <?php
                    
                    //On inclut le fichier de conneion
                    include_once('php/log.php');

                    //On crée le tableau qui stockera les valeurs des départements
                    //On initialise notre indice compteur

                    //Fonction qui charge les départements
                    $requete= "SELECT COUNT(id) As nb FROM fichier";
                    foreach ($bdd->query($requete) as $row) {
                        # code...
                        $nb_new_pv=$row['nb'];
                        
                    }
                    echo $nb_new_pv;
                ?>      
                    </p>
                    <p class="progression">
                        <p class="progress_bar"></p>
                        
                    </p>
                    <ol>
                        <li>Progression</li>
                        <li>65%</li>
                    </ol>
                </div>
                <div id="bloc3" class="bloc3">
                    <p class="title">
                        Notes éditées
                    </p>
                    <p class="number">
                    <?php
                    
                    //On inclut le fichier de conneion
                    include_once('php/log.php');

                    //On crée le tableau qui stockera les valeurs des départements
                    //On initialise notre indice compteur

                    //Fonction qui charge les départements
                    $requete= "SELECT COUNT(id) As nb FROM new_pv";
                    foreach ($bdd->query($requete) as $row) {
                        # code...
                        $nb_new_pv=$row['nb'];
                        
                    }
                    echo $nb_new_pv;
                ?>      
                    </p>
                    <p class="progression">
                        <p class="progress_bar"></p>
                        
                    </p>
                    <ol>
                        <li>Progression</li>
                        <li>56%</li>
                    </ol>
                </div>
            </div>
            
        </div>
    </div>
    </div>



    <script src="js/jquery.js"></script>
    <script src="js/main.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/canvasjs.min.js"></script>
</body>
</html>