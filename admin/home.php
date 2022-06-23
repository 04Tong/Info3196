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
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/jquery-ui.min.css">
    <link rel="stylesheet" href="css/style2.css">
    <script src="js/chart.js"></script>
    <style>
       
table.form{
    width:50%;
}

table.form tr td{
    height:70px;
}
table.form tr td label{
    width:100px;
}

    </style>
</head>
<body>
    <div class="main_bloc">
        
    <div class="part_left">
        <div class="head">
            <img src="img/avatar.png" alt="">
            <div class="user">
                <p class="name">Admin</p>
                <p class="status">Online</p>
            </div>
        </div>
        <div class="body">
            <nav><h3>Menu principal</h3>
                <ul id="menu"> 
                    <li>
                        <i class="fa fa-home" style="color:lightgrey"></i>
                        <p id="dashboard">Afficher</p>
                        <div class="down arraw" style="margin-top:-40px"> &laquo;  </div>
                        <ul>
                            <li id="menu_activite1"> Enseignants </li>
                            <li  id="menu_activite2">Membres de la scolarité</li>
                            <li id="menu_activite3">Membres de la cellule</li>

                        </ul>
                    </li>
                    <li>
                        <i class="fa fa-edit" style="color:lightgrey"></i>
                        <p id="dashboard">Enregistrer</p>
                        <div class="down arraw" style="margin-top:-40px"> &laquo;  </div>
                        <ul>
                            <li id="menu_enseignant"> Enseignant </li>
                            <li  id="menu_scolarite">Membre de la scolarité</li>
                            <li id="menu_cellule">Membre de la cellule</li>

                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="part_right">
        <div class="head">
                <ol class="liste1">
                    <li><i class="fa fa-bars"></i></li>
                    <li class="titre">GESTION DES UTILISATEURS</li>
                </ol>
                <ol class="liste2">
                    <li class="notif"><i class="fa fa-tasks"></i></li>
                    <li><i class="fa fa-search"></i></li>
                    <li class="user"><i class="fa fa-user"></i></li>
                    <li><i class="fa fa-ellipsis-v"></i></li>




                </ol>      
            
            </div>
        <div class="body">
            <div id="title" class="bloc_title">Statistiques</div>

            <div id="main_stats" class="main_stats">
                <div id="bloc1" class="bloc1 card">
                    <p class="title">
                        Enseignants
                    </p>
                    <p class="number">
                    <?php
                    
                    //On inclut le fichier de conneion
                    include_once('php/log.php');

                    //On crée le tableau qui stockera les valeurs des départements
                    //On initialise notre indice compteur

                    //Fonction qui charge les départements
                    $requete= "SELECT COUNT(matricule) As nb FROM utilisateur WHERE grade='ens'";
                    foreach ($bdd->query($requete) as $row) {
                        # code...
                        $nb_ens=$row['nb'];
                        
                    }
                    echo $nb_ens;
                ?>                    </p>
                    <div class="bar1 bar">
                        <p class="progression">
                            <p class="progress_bar"></p>
                            
                        </p>
                        <ol>
                            <li>Progression</li>
                            <li>45%</li>
                        </ol>
                        
                    </div>
                    
                </div>
                <div id="bloc2" class="bloc2 card">
                    <p class="title">
                        Membres scolarité
                    </p>
                    <p class="number">
                    <?php
                    
                    //On inclut le fichier de conneion
                    include_once('php/log.php');

                    //On crée le tableau qui stockera les valeurs des départements
                    //On initialise notre indice compteur

                    //Fonction qui charge les départements
                    $requete= "SELECT COUNT(matricule) As nb FROM utilisateur WHERE grade='scl'";
                    foreach ($bdd->query($requete) as $row) {
                        # code...
                        $nb_scl=$row['nb'];
                        
                    }
                    echo $nb_scl;
                ?>                            </p>
                    <div class="bar1 bar">
                      
                    <p class="progression">
                        <p class="progress_bar"></p>
                        
                    </p>
                    <ol>
                        <li>Progression</li>
                        <li>65%</li>
                    </ol>
                    
                </div>
               
            </div>
                <div id="bloc3" class="bloc3 card">
                    <p class="title">
                        Membres cellule
                    </p>
                    <p class="number">
                    <?php
                    
                    //On inclut le fichier de conneion
                    include_once('php/log.php');

                    //On crée le tableau qui stockera les valeurs des départements
                    //On initialise notre indice compteur

                    //Fonction qui charge les départements
                    $requete= "SELECT COUNT(matricule) As nb FROM utilisateur WHERE grade='ci'";
                    foreach ($bdd->query($requete) as $row) {
                        # code...
                        $nb_ci=$row['nb'];
                        
                    }
                    echo $nb_ci
                ?>                            </p>
                    
                    <div class="bar1 bar">
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
            <div id="detail_stat1" class="detail_stat1">
               <div class="div1">
               
                    
                        <div class="form-group mt-3 ml-5">
                                    
                            <label for="">Département</label>
                                    <select name="" class="form-control" id="select_departement">
                                            <option value="">-Sélectionner-</option>
                                            
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
               <div class="div2">

               <table class="table">
  <thead>
    <tr>
<th scope="col">Matricule</th>
<th scope="col">Nom</th>
<th scope="col">Prenom</th>
<th scope="col">Email</th>
    </tr>
  </thead>
  <tbody id="tableau_ens">
    <tr> <th scope='row'></th> <td></td> <td></td> <td></td> </tr>
    
  </tbody>
</table>

               </div>
            </div>
            
            <div id="detail_stat2" class="detail_stat1">
                
           <table class="table">
  <thead>
    <tr>
<th scope="col">Matricule</th>
<th scope="col">Nom</th>
<th scope="col">Prenom</th>
<th scope="col">Email</th>
    </tr>
  </thead>
  <tbody id="tableau_scolarite">
    <tr> <th scope='row'></th> <td></td> <td></td> <td></td> </tr>
    
  </tbody>
</table>

                
            </div>

            
            <div id="detail_stat3" class="detail_stat1" style="height:450px;overflow-y:auto">
                        
            <table class="table">
  <thead>
    <tr>
<th scope="col">Matricule</th>
<th scope="col">Nom</th>
<th scope="col">Prenom</th>
<th scope="col">Email</th>
    </tr>
  </thead>
  <tbody id="tableau_cellule">
    <tr> <th scope='row'></th> <td></td> <td></td> <td></td> </tr>
    
  </tbody>
</table>

            </div>

            <div id="detail_stat4" class="detail_stat1">
               <div class="div1"> 
                   <form action="save_enseignant.php" method="post">
               <marquee behavior="" direction="left">Selectionner les informations liées à l'enseignant</marquee>
                    
                        <div class="form-group mt-3 ml-5">
                                    
                            <label for="">Département</label>
                                    <select class="form-control" name="departement" id="select_departement2">
                                            <option value="">-Sélectionner-</option>
                                            <option value="new">Ajouter un département</option>

                                            
                                        </select>
                                        
                        </div>
                        <div class="form-group  mt-3 ml-5">
                                    
                            <label for="">Filière</label>
                                
                                        <select  class="form-control" name="filiere" id="select_filiere2">
                                                <option value="">-Selectionner-</option>
                                                <option value="new">Ajouter une filière</option>

                                            </select>
            
                                                    </div>
                            
                        <div class="form-group  mt-3 ml-5">
                                        <label for="">Matière</label>

                                        <select class="form-control" name="matiere" id="select_matiere2">
                                                <option value="">-Selectionner-</option>
                                                <option value="new">Ajouter une matière</option>

                                            </select>
                        </div>
<br>
               </div>
               <div class="div2">

               <table class='form'>
               <tr>
        <td width="30"><label for="">Matricule </label></td>
        <td>                                     <input type="text" class="form-control" name="matricule_ens" id="matricule_ens" required>
</td>
    </tr>
    <tr>
        <td width="30"><label for="">Nom </label></td>
        <td>                                     <input type="text" class="form-control" name="nom_ens" id="nom_ens" required>
</td>
    </tr>
    <tr>
        <td><label for="">Prénom </label></td>
        <td>                                     <input type="text" class="form-control" name="prenom_ens" id="prenom_ens" required>
</td>
    </tr>
 <tr>
        <td><label for="">Email </label></td>
        <td>                                     <input type="email" class="form-control" name="mail_ens" id="mail_ens" required>
</td>
    </tr>
</table>                     


<button type="submit" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">Enregistrer</button>
</form>    
</div>
            </div>
            
            <div id="detail_stat5" class="detail_stat1">
               <div class="div2">
               <form action="save_scolarite.php" method="post">

               <table class='form'>
               <tr>
        <td width="30"><label for="">Matricule </label></td>
        <td>                                     <input type="text" class="form-control" name="matricule_scl" id="matricule_ens" required>
</td>
    </tr>
    <tr>
        <td width="30"><label for="">Nom </label></td>
        <td>                                     <input type="text" class="form-control" name="nom_scl" id="nom_ens" required>
</td>
    </tr>
    <tr>
        <td><label for="">Prénom </label></td>
        <td>                                     <input type="text" class="form-control" name="prenom_scl" id="prenom_ens" required>
</td>
    </tr>
 <tr>
        <td><label for="">Email </label></td>
        <td>                                     <input type="email" class="form-control" name="mail_scl" id="mail_ens" required>
</td>
    </tr>
</table>                     


<button type="submit" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">Enregistrer</button>
</form>    
</div>
            </div>
            <div id="detail_stat6" class="detail_stat1">
              
               <div class="div2">
               <form action="save_cellule.php" method="post">

               <table class='form'>
               <tr>
        <td width="30"><label for="">Matricule </label></td>
        <td>                                     <input type="text" class="form-control" name="matricule_ci" id="matricule_ens" required>
</td>
    </tr>
    <tr>
        <td width="30"><label for="">Nom </label></td>
        <td>                                     <input type="text" class="form-control" name="nom_ci" id="nom_ens" required>
</td>
    </tr>
    <tr>
        <td><label for="">Prénom </label></td>
        <td>                                     <input type="text" class="form-control" name="prenom_ci" id="prenom_ens" required>
</td>
    </tr>
 <tr>
        <td><label for="">Email </label></td>
        <td>                                     <input type="email" class="form-control" name="mail_ci" id="mail_ens" required>
</td>
    </tr>
</table>                     


<button type="submit" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">Enregistrer</button>
</form>    
</div>
            </div>
            

        </div>
    </div>
    </div>



    <script src="js/jquery.js"></script>
    <script src="js/main.js"></script>
    <script src="js/load_enseignant.js"></script>
    <script src="js/load_scolarite.js"></script>
    <script src="js/load_cellule.js"></script>
    <script src="js/save_enseignant.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/canvasjs.min.js"></script>
</body>
</html>