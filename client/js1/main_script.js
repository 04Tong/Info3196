//quand on clique sur le bouton next


//fonction qui charge les départements

$(document).ready(function(){
    load_departement();
})

//On récupère l'id du select
var select_departement=document.getElementById('select_departement');

function load_departement() {
    //On crée un tableau qui récuperera les départements provenant de la BD
    var departement=new Array();
    //On crée le fonction ajax qui récupère les informations
    $.ajax({
        url: 'php/load_departement.php',
        type: 'POST',
        success: function(reponse) {
            //On enregistre les infos obtenues dans le tableau
            departement=JSON.parse(reponse);
            

            //On met ces valeurs dans le select

            //Création du tableau des options
            options=new Array();

            //Boucle qui parcourt le tableau
            for (let i = 0; i < departement.length; i++) {
                //On créer le option HTML
                options[i]=document.createElement('OPTION');
                var element=departement[i][1];
                //On met la valeur du département dans le option
                options[i].appendChild(document.createTextNode(element));//Le tet qui sera visible dan le option
                //On met la valeur qui sera récupérée
                options[i].value=departement[i][0];
                //On met le option créé dans le select
                select_departement.appendChild(options[i]);

                
            }
            val=select_departement.value;
            //alert(val)
            //PArtie concernée aux filières
            var filieres= new Array();
            var select_filiere=document.getElementById('select_filiere');
            
            //Lorsqu'on clique sur un département pour charger les enseignants
            select_departement.addEventListener('change',function(){
                select_filiere.innerHTML="<option value=''>-Sélectionner-</option>";       
                var data=this.value;
                //alert(data)
                $.ajax({
                    url: 'php/load_filiere.php',
                    type: 'POST',
                    data: {data: JSON.stringify(data)}, 
                    success: function(reponse2) {
                       // alert(reponse2);
                          filieres=JSON.parse(reponse2);
                                     
                         //On met ces valeurs dans le select
                                    
                         //Création du tableau des options
                         options2=new Array();
                                    
                         //Boucle qui parcourt le tableau
                         for (let i2 = 0; i2 < filieres.length; i2++) {
                             //On créer le option HTML
                             options2[i2]=document.createElement('OPTION');
                             var element2=filieres[i2][1];
                             //On met la valeur du département dans le option
                             options2[i2].appendChild(document.createTextNode(element2));//Le tet qui sera visible dan le option
                             //On met la valeur qui sera récupérée
                             options2[i2].value=filieres[i2][0];
                             //On met le option créé dans le select
                             select_filiere.appendChild(options2[i2]);
                            
                             
                         }


                         
            val2=select_filiere.value;
            //alert(val)
            //PArtie concernée aux filières
            var matieres= new Array();
            var select_matiere=document.getElementById('select_matiere');
            
            //Lorsqu'on clique sur un département pour charger les enseignants
            select_filiere.addEventListener('change',function(){
                select_matiere.innerHTML="<option value=''>-Sélectionner-</option>";       
                var data2=this.value;
                //alert(data2)
                $.ajax({
                    url: 'php/load_matiere.php',
                    type: 'POST',
                    data: {data: JSON.stringify(data2)}, 
                    success: function(reponse3) {
                        //alert(reponse3);
                          matieres=JSON.parse(reponse3);
                                     
                         //On met ces valeurs dans le select
                                    
                         //Création du tableau des options
                         options3=new Array();
                                    
                         //Boucle qui parcourt le tableau
                         for (let i3 = 0; i3 < matieres.length; i3++) {
                             //On créer le option HTML
                             options3[i3]=document.createElement('OPTION');
                             var element3=matieres[i3];
                             //On met la valeur du département dans le option
                             options3[i3].appendChild(document.createTextNode(element3));//Le tet qui sera visible dan le option
                             //On met la valeur qui sera récupérée
                             options3[i3].value=matieres[i3];
                             //On met le option créé dans le select
                             select_matiere.appendChild(options3[i3]);
                            
                             
                         }
                        }
                })
            })
                        }
                })
            })
        }
    })
}


//Quand on clique sur le bouton valider qui ssoumet le formulaire

$("#uploadForm").on('submit',(function(e){

    e.preventDefault();
     // console.log(document.getElementById('hidden-input').files)
    $.ajax({
    url: "php/upload.php",
    type: "POST",
    data:  new FormData(this),
    contentType: false,
    cache: false,
    processData:false,
    success: function(rep){
        alert(rep);
        //alert(rep);
      //  rep2=JSON.parse(rep);
        //alert(rep2)
        self.location.href="upload.php";
        //self.location.href=rep2;
       // hidden.classList.add('hidden');
        //document.getElementById("button").classList.remove('hidden'); 
  
        //On affiche l'aperçu du fichier téléchargé
      //  $('#gallery li:Last-child').css('display','block');
      },
    error: function(){} 	        
    });
    }));