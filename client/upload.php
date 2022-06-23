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
                            <li id=""><a href="notes_envoyees.php">Notes envoyées</a> </li>
                            <li id=""> <a href="nouveaux_pv_recus.php">Nouveaux PVs reçus</a> </li>
                            <li id=""> <a href="pv_recus.php">PVs reçus</a> </li>

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
                            <li> <a href="parametres.html">Paramètres</a> </li>                            

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
            <div id="title" class="bloc_title">Envoyer des notes</div>

            <div id="" class=" mt-2 w-100 h-100">
                    <div class="formulaire bg-white container" style="margin-left:30px;width:90%;height:90%">
                       
                            <form method="POST" id="uploadForm" action="" class=" validate-form">
                                <div class="form-group mt-3 " >                          
                                  <label for="">Notes de :</label>
                                            <select name="type" class="form-control" id="select_type" required>
                                                    <option value="">-Sélectionner-</option>
                                                    <option value="CC">CC         </option>
                                                    <option value="TP">TP         </option>
                                                    <option value="Examen">Examen     </option>
                                                    <option value="Rattrapage">Rattrapage</option>
                                                    
                                                </select>
                                </div>
                            
                                <div class="form-group mt-3 ml-5">
                                            
                                    <label for="">Département</label>
                                            <select name="departement" class="form-control" id="select_departement" required>
                                                    <option value="">-Sélectionner-</option>
                                                    
                                                </select>
                                                
                                </div>
                                <div class="form-group  mt-3 ml-5">
                                            
                                    <label for="">Filière</label>
                                        
                                                <select name="filiere" class="form-control" id="select_filiere" required>
                                                        <option value="">-Selectionner-</option>
                                                      
                                                    </select>
                    
                                                            </div>
                                    
                                <div class="form-group  mt-3 ml-5">
                                                <label for="">Matière</label>
        
                                                <select name="matiere" class="form-control" id="select_matiere" required>
                                                        <option value="">-Selectionner-</option>
                                                       
                                                    </select>
                                </div>
        <br>    <input type="hidden" name="id" value="<?php echo $_SESSION['matricule'] ?>">
                                    <div class="w-100">
                
                                            <!-- file upload modal -->
                                            <article aria-label="File Upload Modal" class="relative bg flex flex-col bg-white shadow-xl rounded-md" ondrop="dropHandler(event);" ondragover="dragOverHandler(event);" ondragleave="dragLeaveHandler(event);" ondragenter="dragEnterHandler(event);">
                                                <div class="part1">
                                                    <!-- overlay -->
                                              <div id="overlay" class="w-full h-full absolute top-0 left-0 pointer-events-none z-50 flex flex-col items-center justify-center rounded-md">
                                              </div>
                                      
                                              <!-- scroll area -->
                                              <section class="h-full overflow-auto p-8 w-full h-full flex flex-col">
                                                <header class="border-dashed border-2 border-gray-400 py-12 flex flex-col justify-center items-center">
                                                        <i>
                                                                <svg class="fill-current w-12 h-12 mb-3 text-blue-700" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                                  <path d="M19.479 10.092c-.212-3.951-3.473-7.092-7.479-7.092-4.005 0-7.267 3.141-7.479 7.092-2.57.463-4.521 2.706-4.521 5.408 0 3.037 2.463 5.5 5.5 5.5h13c3.037 0 5.5-2.463 5.5-5.5 0-2.702-1.951-4.945-4.521-5.408zm-7.479-1.092l4 4h-3v4h-2v-4h-3l4-4z" />
                                                                </svg>
                                                              </i>
                                                          
                                                    <p class="mb-3 font-semibold text-gray-900 flex flex-wrap justify-center">
                                                    <span>Porter et déposer vos</span>&nbsp;<span>fichiers ici</span>
                                                  </p>
                                                  <input type="button" id="button" value="Uploader un fichier" class="mt-2 rounded-sm px-3 py-1 bg-gray-200 hover:bg-gray-300 focus:shadow-outline focus:outline-none">
                                                    
                                                           
                                                    <input id='input0' name='fileupload0' type='file' multiple class=' hidden' />
                                                </header>
                                      
                                                <h1 class="pt-8 pb-3 font-semibold sm:text-lg text-gray-900">
                                                  Fichiers uploadés
                                                </h1>
                                      
                                                <ul id="gallery" class="flex flex-1 flex-wrap -m-1">
                                                  <li id="empty" class="h-full w-full text-center flex flex-col items-center justify-center items-center">
                                                    <img class="mx-auto w-32" src="images/thumb.png" alt="no data" />
                                                    <span id="name_file" class="text-small text-gray-500">Aucun fichier uploadé</span>
                                                  </li>
                                                </ul>
                                              </section>
                                            </div>
                                      
                                      
                                              <!-- sticky footer -->
                                              <footer class="flex justify-end px-8 pb-8 pt-4">
                                                <button id="preview" class="hidden ml-1 rounded-sm px-3 py-1 bg-red-500 hover:bg-gray-300 focus:shadow-outline focus:outline-none text-white">
                                                  Revenir
                                                </button>
                                                 
                                                  <button id="next" class="ml-3 rounded-sm px-3 py-1 bg-blue-500 hover:bg-gray-300 focus:shadow-outline focus:outline-none text-white">
                                                    Envoyer 
                                                  </button>
                                              </footer>
                                            </article>
                                        </div>
                                      
                                        <!-- Partie qui charge les motifs des fichiers chargés en bas -->
                                        <template id="file-template">
                                          <li class="block p-1 w-1/2 sm:w-1/3 md:w-1/4 lg:w-1/6 xl:w-1/8 h-24">
                                            <article tabindex="0" class="group w-full h-full rounded-md focus:outline-none focus:shadow-outline elative bg-gray-100 cursor-pointer relative shadow-sm">
                                              <img alt="upload preview" class="img-preview hidden w-full h-full sticky object-cover rounded-md bg-fixed" />
                                      
                                              <section class="flex flex-col rounded-md text-xs break-words w-full h-full z-20 absolute top-0 py-2 px-3">
                                                <h1 class="flex-1 group-hover:text-blue-800"></h1>
                                                <div class="flex">
                                                  <span class="p-1 text-blue-800">
                                                    <i>
                                                      <svg class="fill-current w-4 h-4 ml-auto pt-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                        <path d="M15 2v5h5v15h-16v-20h11zm1-2h-14v24h20v-18l-6-6z" />
                                                      </svg>
                                                    </i>
                                                  </span>
                                                  <p class="p-1 size text-xs text-gray-700"></p>
                                                  <button class="delete ml-auto focus:outline-none hover:bg-gray-300 p-1 rounded-md text-gray-800">
                                                    <svg class="pointer-events-none fill-current w-4 h-4 ml-auto" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                      <path class="pointer-events-none" d="M3 6l3 18h12l3-18h-18zm19-4v2h-20v-2h5.711c.9 0 1.631-1.099 1.631-2h5.316c0 .901.73 2 1.631 2h5.711z" />
                                                    </svg>
                                                  </button>
                                                </div>
                                              </section>
                                            </article>
                                          </li>
                                        </template>
                                      
                                        <template id="image-template">
                                          <li class="block p-1 w-1/2 sm:w-1/3 md:w-1/4 lg:w-1/6 xl:w-1/8 h-24">
                                            <article tabindex="0" class="group hasImage w-full h-full rounded-md focus:outline-none focus:shadow-outline bg-gray-100 cursor-pointer relative text-transparent hover:text-white shadow-sm">
                                              <img alt="upload preview" class="img-preview w-full h-full sticky object-cover rounded-md bg-fixed" />
                                      
                                              <section class="flex flex-col rounded-md text-xs break-words w-full h-full z-20 absolute top-0 py-2 px-3">
                                                <h1 class="flex-1"></h1>
                                                <div class="flex">
                                                  <span class="p-1">
                                                    <i>
                                                      <svg class="fill-current w-4 h-4 ml-auto pt-" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                        <path d="M5 8.5c0-.828.672-1.5 1.5-1.5s1.5.672 1.5 1.5c0 .829-.672 1.5-1.5 1.5s-1.5-.671-1.5-1.5zm9 .5l-2.519 4-2.481-1.96-4 5.96h14l-5-8zm8-4v14h-20v-14h20zm2-2h-24v18h24v-18z" />
                                                      </svg>
                                                    </i>
                                                  </span>
                                      
                                                  <p class="p-1 size text-xs"></p>
                                                  <button class="delete ml-auto focus:outline-none hover:bg-gray-300 p-1 rounded-md">
                                                    <svg class="pointer-events-none fill-current w-4 h-4 ml-auto" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                      <path class="pointer-events-none" d="M3 6l3 18h12l3-18h-18zm19-4v2h-20v-2h5.711c.9 0 1.631-1.099 1.631-2h5.316c0 .901.73 2 1.631 2h5.711z" />
                                                    </svg>
                                                  </button>
                                                </div>
                                              </section>
                                            </article>
                                          </li>
                                        </template>
                                      
                                        
                                    
                        
        </div>
    </div>  
    </div>



    <script src="js/jquery.js"></script>
    <script src="js/main.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/canvasjs.min.js"></script>
    <script src="js1/upload_file.js"></script>
    <script src="js1/main_script.js"></script>

</body>
</html>