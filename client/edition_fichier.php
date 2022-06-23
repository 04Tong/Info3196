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
                        <p id="dashboard">Gestion des anonymats</p>
                        <div class="down arraw" style=""> &laquo;  </div>
                        <ul>                            
                            <li id=""> <a href="      fichiers_envoyes.php">Fichiers anonymés envoyés</a> </li>
                            <li id=""> <a href="   note_anonymee_recue.php">Notes anonymées reçues</a> </li>
                            <li id=""> <a href="nouvelle_note_anonymee.php"> Nouvelles Notes anonymées reçues</a></li>

                        </ul>
                    </li>
                    <li>
                        <i class="fa fa-tasks"></i>
                        <p>Edition des notes</p>
                        <div class="down" style=""> &laquo;  </div>
                        <ul>
                            <li id="">  <a href="edition_fichier.php">Modifer des fichiers anonymés</a>   </li>                            
                            
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
                            <a href="upload.html" class="btn btn-success btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">Envoyer des notes</a>
                                                
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
            <div id="title" class="bloc_title">Edition des fichiers anonymés</div>
            <div id="" class="">
                    <div class="container">
                        
                              <table class="table">
                                <thead class="thead-light">
                                  <tr>
                                      <th style="padding-left: 0.5rem; padding-right: 0.5rem;">  </th>
                                    <th style="padding-left: 2.5rem; padding-right: 2.5rem;"><h4>Type de document</h4></th>
                                    <th style="padding-left: 3.5rem; padding-right: 3.5rem;"><h4>Libellé</h4></th>
                                    <th style="padding-left: 2.5rem; padding-right: 2.5rem;"><h4>Date de dernière modicfication</h4></th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td><input class="form-check-input" type="checkbox" value="" id="form1Example3" /></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                  </tr>
                                  <tr>
                                    <td><input class="form-check-input" type="checkbox" value="" id="form1Example3" /></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                  </tr>
                                  <tr>
                                    <td><input class="form-check-input" type="checkbox" value="" id="form1Example3" /></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                  </tr>
                                </tbody>
                              </table>
                      </div>
                </div>
                <div class="container py-0 h-60 " style="margin-left:70%;">
                    <div class="text-center text-lg-start mt-2 pt-2">
                            <a href="" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">Upload</a>
                                                    
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