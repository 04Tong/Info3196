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
                            <li id=""> <a href="nouvelles_notes.php">Nouvelles notes reçues</a><i class="" style="color:rgba(29, 138, 29,.4)"></i> <p class="plus" style=""> 3  </p> </li>
                            <li id=""> <a href="          notes.php">Notes reçues</a>  </li>
                            <li id=""> <a href="            pv.php"> PVs envoyés</a></li>                                                       
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
            <div id="title" class="bloc_title"><h3>Edition de documents</h3></div>

            <div id="" class="">
            <div class="container mt-3 ml-1"><div class="input-group mb-3">
                     <input type="text" class="form-control" placeholder="Quel fichier cherchez-vous?" aria-label="Quel fichier cherchez-vous?" aria-describedby="texte-bouton">
                     <div class="input-group-append">
                         <button class="btn btn-outline-primary" type="button" id="texte-bouton">Chercher</button>
                     </div>
                 </div></div>

                <div class="form-group mt-1 ml-5">
                                    
                                    <label for="">Annee academique:</label>
                                            <select name="" class="form-control" id="select_annee">
                                                    <option value="2021-2022">2021-2022</option>
                                                </select>
                                                
                </div>

                <div class="form-group mt-1 ml-5">
                                    
                                    <label for="">Note de:</label>
                                            <select name="" class="form-control" id="select_typenote">
                                                    <option value="">-Sélectionner-</option>
                                                    <option value="CC">Contrôle continu</option>
                                                    <option value="TP">TP</option>
                                                    <option value="SN">Session normale</option>
                                                    <option value="Rattrapage">Rattrapage</option>
                                                </select>
                                                
                    </div>
                    <div class="form-group mt-1 ml-5">
                                    
                                    <label for="">Département</label>
                                            <select name="" class="form-control" id="select_departement">
                                                    <option value="">-Sélectionner-</option>
                                                    
                                                </select>
                                                
                                </div>
                                <div class="form-group mt-1 ml-5">
                                    
                                    <label for="">Filiere</label>
                                            <select name="" class="form-control" id="select_filiere">
                                                    <option value="">-Sélectionner-</option>
                                                    
                                                </select>
                                                
                                </div>
                
                <div class="container  ">

                    
                          <table class="table">
                            <thead class="thead-light">
                              <tr>
                                  
                                <th style="padding-left: 2.5rem; padding-right: 2.5rem;color:gray"><h4>Type</h4></th>
                                <th style="padding-left: 3.5rem; padding-right: 3.5rem;color:gray"><h4>Libellé</h4></th>
                                <th style="padding-left: 2.5rem; padding-right: 2.5rem;color:gray"><h4>Date dernière modif</h4></th>
                                <th style="padding-left: 0.5rem; padding-right: 2.5rem;color:gray"> Action </th>
                              </tr>
                            </thead>
                            <tbody id='tableau'>
                             
                            </tbody>
                          </table>
                  </div>
            </div>
            <div class="container " style="margin-left:40%; margin-top: auto;" ><b>Fichier inexistant dans la liste? Alors:</b></div>
            <div class="container py-0 h-60 " style="margin-left:70%;">
                <div class="text-center text-lg-start mt-2 pt-2">
                        <a href="web/index.php" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">Impoter un fichier</a>
                                                
                </div> 
            
            

</div>
            
            



    <script src="js/jquery.js"></script>
    <script src="js/main.js"></script>
    <script src="js/edition.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/canvasjs.min.js"></script>
</body>
</html>