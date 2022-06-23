<?php

// Appel du fichier de gestion des session
require_once('php/session.php');

// Démarrage de la session
$session = new Session();


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
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.min.css">
    <link rel="stylesheet" href="css/tailwind.min.css">

    
</head>
<body>
    <div class="main_bloc">
        
    <div class="part_left">
        <div class="head">
            <img src="img/avatar.png" alt="">
           
        </div>
        <div class="body">
            <nav><h6>Administration de compte utilisateur</h6>
                <ul id="menu"> 
                   
                    <li>
                        <i class="fa fa-home" style="color:lightgrey"></i>
                        <p id="dashboard">Gestion des PVs</p>
                        <div class="down arraw" style=""> &laquo;  </div>
                        <ul>
                            <li id=""> <a href="nouvelles_notes.php">Nouvelles notes reçues</a>  </li>
                            <li id=""> <a href="          notes.php">Notes reçues</a>  </li>
                            <li id=""> <a href="             pv.php"> PVs envoyés</a></li>                                                       
                        </ul>
                    </li>
                    <li>
                        <i class="fa fa-tasks"></i>
                        <p>Edition des PVs</p>
                        <div class="down" style=""> &laquo;  </div>
                        <ul>
                            <li id=""> <a href="edition_pv.php">Modifier des elements sur un PV</a> </li>
                            

                        </ul>
                    </li>
                    <li>
                        <i class="fa fa-users" style="color:rgba(29, 138, 29,.6)"></i>
                        <p>Gestion de compte</p>
                        <div class="down" style=""> &laquo;  </div>
                        <ul>
                            <li> <a href="parametre.php">Paramètres</a> </li>                            

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
                            <a href="upload.html" class="btn btn-success btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">Envoyer des PVs</a>
                                            
                </div>
            </nav>
        </div>
    </div>
    <div class="part_right">
        <div class="head">
                <ol class="liste1">
                    <li><i class="fa fa-bars"></i></li>
                    <li class="titre">GESTION DES RESULTATS UYI/FS</li>
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
            <div id="title" class="bloc_title"><h3>Parametres de compte utilisateur</h3></div>

            <div id="" class="">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti tempora laborum commodi! Ipsa aliquam non quis corrupti ullam perspiciatis autem maxime tempora animi. Dolorum eos earum laboriosam ad temporibus deserunt?
            
            </div>

</div>
            
            



    <script src="js/jquery.js"></script>
    <script src="js/main.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/canvasjs.min.js"></script>
</body>
</html>