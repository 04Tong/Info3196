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
    <title>Gestion des résultats de la FS </title>
    <link rel="icon" type="image/png" href="images/buy1.png"/>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/save_ens.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/jquery-ui.min.css">
    

</head>
<body>
    <div class="main_bloc">
        
    <div class="part_left">
        <div class="head">
            <img src="img/avatar.png" alt="">
            
        </div>
        <div class="body">
            <nav><h3></h3>
                <ul id="menu"> 
                        
                </ul>
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
                    




                </ol>      
            
            </div>
        <div class="body" style="overflow: hidden">
            <div id="title" class="bloc_title">VEILLEZ FINALISER VOTRE ENREGISTREMENT ET COMPLETER CES CHAMPS </div>

              <div id="" class="">
                 
                <div class="formulaire bg-white container" style="margin-left:20px;width:90%;height:90%">
                    
                        <form method="POST" id="uploadForm" action="" class=" validate-form">
                            <br>
                            <br>
                            <div class="container" style="width:110%">
                                <div class="row">
                                    <div class="col -lg -10">
                                        <div class="ligne 1">
                                            <div class="form-group  mt-2 ml-5">
                                                <label for="">CODE UE</label>
            
                                                <select name="" class="form-control" id="select_ue">
                                                            <option value="">-Choisir-</option>
                                                            <option value="INF1121">INF1121</option> 
                                                            <option value="INF2046">INF2046</option> 
                                                            <option value="INF3046">INF3046</option>                                         
                                                    </select>
                                            </div>
                                            <div class="form-group  mt-2 ml-5">
                                                <label for="">Niveau</label>
            
                                                <select name="" class="form-control" id="select_niveau">
                                                        <option value="">-Choisir-</option>
                                                        <option value="L1">L1</option>
                                                        <option value="L2">L2</option>
                                                        <option value="L3">L3</option>
                                                       
                                                    </select>
                                            </div>
                                            <div class="form-group  mt-2 ml-5">
                                                <label for="">Specialite</label>
            
                                                <select name="" class="form-control" id="select_specialite">
                                                        <option value="">-Choisir-</option>
                                                        <option value="Securite      ">Securite      </option>
                                                        <option value="Genie logiciel">Genie logiciel</option>
                                                        <option value="Data sciences ">Data sciences  </option>
                                                        <option value="Reseaux       ">Reseaux       </option>
                                                       
                                                    </select>
                                            </div>
                                            <div class="form-group  mt-2 ml-5">
                                                <label for="">Groupe</label>
            
                                                <select name="" class="form-control" id="select_groupe">
                                                    <option value="">-Choisir-</option>
                                                    <option value="1 ">1 </option>
                                                    <option value="2 ">2 </option>
                                                    <option value="3 ">3 </option>
                                                    <option value="4 ">4 </option>
                                                    <option value="5 ">5 </option>
                                                    <option value="6 ">6 </option>
                                                    <option value="7 ">7 </option>
                                                    <option value="8 ">8 </option>
                                                    <option value="9 ">9 </option>
                                                    <option value="10">10</option>
                                                       
                                                    </select>
                                            </div>
                                            <div class="form-group  mt-2 ml-5">
                                                <label for="">Professeur </label>
            
                                                <select name="" class="form-control" id="select_prof">
                                                        <option value="">-Choisir-</option>

                                                        <option value="Principal">Principal</option>
                                                        <option value="Simple   ">Simple   </option>
                                                       
                                                    </select>
                                            </div>
                                            <div class="form-group  mt-2 ml-5">
                                                <label for="">Jury</label>
            
                                                <select name="" class="form-control" id="select_jury">
                                                        <option value="">-Choisir-</option>
 
                                                        <option value="President     ">President     </option>
                                                        <option value="vice-president">vice-president</option>
                                                        <option value="Membre        ">Membre        </option>
                                                        <option value="RAS           ">RAS           </option>
                                                       
                                                    </select>
                                            </div>
            
                                    </div>
                                </div>
                            </div>

                            <br>   <br>  
                            <div class="row row2">
                                    <div class="col -lg -10">
                                        <div class="ligne 1">
                                            <div class="form-group  mt-2 ml-5">
                                                <ol id="liste_ue">

                                                </ol>
                                            </div>
                                            <div class="form-group  mt-2 ml-5">
                                                <ol id="liste_niveau">

                                                </ol>
                                            </div>
                                            <div class="form-group  mt-2 ml-5">
                                                <ol id="liste_specialite">

                                                </ol>
                                                                                            </div>
                                            <div class="form-group  mt-2 ml-5">
                                                <ol id="liste_groupe">

                                                </ol>
                                            </div>
                                            <div class="form-group  mt-2 ml-5">
                                                <ol id="liste_prof">

                                                </ol>
                                            </div>
                                            <div class="form-group  mt-2 ml-5">
                                                <ol id="liste_jury">

                                                </ol>
                                            </div>
            
                                    </div>
                                </div>
                            </div>

                            <br>
                            <br>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <button class="btn btn-primary me-md-2" type="submit" value="Enregistrer">Enregistrer</button>
                                    
                              </div>
                            

                        </form>
                </div>
                    
              </div>
              
                
            </div>
        </div>

            
            
            
           
    </div>
    </div>



    <script src="js/jquery.js"></script>
    <script src="js/main.js"></script>
    <script src="js/save_ens.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/canvasjs.min.js"></script>
</body>
</html>