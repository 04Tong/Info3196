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
    
    <style>
        
        .detail_stat1 .div1{
    width:100%;
    background-color: white;
    font-size:18px;
    border-radius:10px;
    box-shadow: 2px 5px 5px .5px rgba(0,0,0,.1);
    padding:10px;
    height:110px;
    margin-top:-10px;
}

.detail_stat1 .div1 .form-group{
    margin-left:30px;
}
.detail_stat1 .div2{
    width:103%;
    background-color: white;
    font-size:18px;
    border-radius:10px;
    box-shadow: 2px .5px 2px .5px rgba(0,0,0,.1);
    padding:10px;
    height:800px;
    margin-top:25px;
    overflow-x:auto;
}
    </style>
</head>
<body>
<?php

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

<input type="hidden" name="" id="id_dest" value="<?php echo $_SESSION['matricule'];?>">
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
            <div id="title" class="bloc_title" style="height:45px">Pvs reçus</div>

            <div class="detail_stat1" style="display:block;margin-left:20px">
            <div class="div1">
               <div class="form-group  mt-3 ml-5">
                                        <label for="">Type de note </label>

                                        <select name="note" class="form-control" id="select_type_pv">
                                                <option value="">-Selectionner-</option>
                                                <option value="CC">Contrôle continu</option>
                                                <option value="TP">TP</option>
                                                <option value="SN">Session normale</option>
                                                <option value="Rattrapage">Rattrapage</option>
                                            </select>
                        </div>
                        <div class="form-group  mt-3 ml-5">
                                    
                                    <label for="">Filière</label>
                                        
                                                <select name="" class="form-control" id="select_filiere">
                                                        <option value="">-Selectionner-</option>
                                                      
                                                    </select>
                    
                                                            </div>
                                    
                                <div class="form-group  mt-3 ml-5">
                                                <label for="">Matière</label>
        
                                                <select name="" class="form-control" id="select_matiere">
                                                        <option value="">-Selectionner-</option>
                                                       
                                                    </select>
                                </div>
        <br>

               </div>
               <div class="div2" style="">

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
         </div>
    </div>



    <script src="js/jquery.js"></script>
    <script src="js/main.js"></script>
    <script src="js1/pv.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/canvasjs.min.js"></script>
</body>
</html>