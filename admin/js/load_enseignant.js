
//fonction qui charge les départements

var val_dep='';
var val_fil='';
var val_mat='';

$(document).ready(function(){
    load_departement();
    load_enseignant(val_dep,val_fil,val_mat);
})

//Fonction qui charge les enseignants

function load_enseignant(val1,val2,val3){
    var data=new Array();
    if(val1==''){
        
    data[0]='null';

    }else{
        //alert(val1)
        data[0]=val1;

    }
    if(val2==''){
        data[1]='null';

    }else{
        data[1]=val2

    }   
    
    if(val3==''){
        data[2]='null';

    }else{
        data[2]=val3

    }   
    var enseignants=new Array();    
    $.ajax({
        url: 'php/load_enseignants.php',
        type: 'POST',
        data: {data: JSON.stringify(data)}, 
        success: function(reponse) {
            //alert(reponse);
              enseignants=JSON.parse(reponse);
                         
             //On recupere l'id du tableau html
             var tableau_ens=document.getElementById('tableau_ens');
             tableau_ens.innerHTML='';
             //Boucle qui parcourt le tableau
             for (let i = 0; i < enseignants.length; i++) {
                tableau_ens.innerHTML+="<tr> <th scope='row'>"+enseignants[i][0]+"</th> <td>"+enseignants[i][1]+"</td> <td>"+enseignants[i][2]+"</td> <td>"+enseignants[i][3]+"</td> </tr>";
                 
             }
            }
    })
}






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
                //On appelle la fonction qui charege les enseignants
                load_enseignant(data,val_fil,val_mat);
            
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
                //On appelle la fonction qui charege les enseignants
                load_enseignant(data,data2,val_mat);
        
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

                         select_matiere.addEventListener('change',function(){
                            var data3=this.value;

                            //On appelle la fonction qui charege les enseignants
                            load_enseignant(data,data2,data3);
        
                         })

                        }
                })
            })
                        }
                })
            })
        }
    })
}

