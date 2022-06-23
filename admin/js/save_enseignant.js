
//fonction qui charge les départements


$(document).ready(function(){
    load_departement2();
})



//On récupère l'id du select
var select_departement2=document.getElementById('select_departement2');

function load_departement2() {
    //On crée un tableau qui récuperera les départements provenant de la BD
    var departement2=new Array();
    //On crée le fonction ajax qui récupère les informations
    $.ajax({
        url: 'php/load_departement.php',
        type: 'POST',
        success: function(reponse) {
            //On enregistre les infos obtenues dans le tableau
            departement2=JSON.parse(reponse);
            

            //On met ces valeurs dans le select

            //Création du tableau des options
            options=new Array();

            //Boucle qui parcourt le tableau
            for (let i = 0; i < departement2.length; i++) {
                //On créer le option HTML
                options[i]=document.createElement('OPTION');
                var element=departement2[i][1];
                //On met la valeur du département dans le option
                options[i].appendChild(document.createTextNode(element));//Le tet qui sera visible dan le option
                //On met la valeur qui sera récupérée
                options[i].value=departement2[i][0];
                //On met le option créé dans le select
                select_departement2.appendChild(options[i]);

                
            }
            val=select_departement2.value;
            //alert(val)
            //PArtie concernée aux filières
            var filieres2= new Array();
            var select_filiere2=document.getElementById('select_filiere2');
            
            //Lorsqu'on clique sur un département pour charger les enseignants
            select_departement2.addEventListener('change',function(){
                select_filiere2.innerHTML="<option value=''>-Sélectionner-</option><option value='new'>Ajouter une filière</option>";       
                var data=this.value;
                //alert(data)
                if(data=='new'){

                    //On appelle la fonction qui ajoute un département
                    add_departement();
            
                }
                //alert(data)
                $.ajax({
                    url: 'php/load_filiere.php',
                    type: 'POST',
                    data: {data: JSON.stringify(data)}, 
                    success: function(reponse2) {
                       // alert(reponse2);
                          filieres2=JSON.parse(reponse2);
                                     
                         //On met ces valeurs dans le select
                                    
                         //Création du tableau des options
                         options2=new Array();
                                    
                         //Boucle qui parcourt le tableau
                         for (let i2 = 0; i2 < filieres2.length; i2++) {
                             //On créer le option HTML
                             options2[i2]=document.createElement('OPTION');
                             var element2=filieres2[i2][1];
                             //On met la valeur du département dans le option
                             options2[i2].appendChild(document.createTextNode(element2));//Le tet qui sera visible dan le option
                             //On met la valeur qui sera récupérée
                             options2[i2].value=filieres2[i2][0];
                             //On met le option créé dans le select
                             select_filiere2.appendChild(options2[i2]);
                            
                             
                         }


                         
            val2=select_filiere2.value;
            //alert(val)
            //PArtie concernée aux filières
            var matieres2= new Array();
            var select_matiere2=document.getElementById('select_matiere2');
            
            //Lorsqu'on clique sur un département pour charger les enseignants
            select_filiere2.addEventListener('change',function(){
                select_matiere2.innerHTML="<option value=''>-Sélectionner-</option><option value='new'>Ajouter une matière</option>";       
                var data2=this.value;
                //alert(data2)
                $.ajax({
                    url: 'php/load_matiere.php',
                    type: 'POST',
                    data: {data: JSON.stringify(data2)}, 
                    success: function(reponse3) {
                        //alert(reponse3);
                          matieres2=JSON.parse(reponse3);
                                     
                         //On met ces valeurs dans le select
                                    
                         //Création du tableau des options
                         options3=new Array();
                                    
                         //Boucle qui parcourt le tableau
                         for (let i3 = 0; i3 < matieres2.length; i3++) {
                             //On créer le option HTML
                             options3[i3]=document.createElement('OPTION');
                             var element3=matieres2[i3];
                             //On met la valeur du département dans le option
                             options3[i3].appendChild(document.createTextNode(element3));//Le tet qui sera visible dan le option
                             //On met la valeur qui sera récupérée
                             options3[i3].value=matieres2[i3];
                             //On met le option créé dans le select
                             select_matiere2.appendChild(options3[i3]);
                            
                             
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
select_filiere2.addEventListener('change',function(){
    var data2=this.value;
    //alert(data2)
    if(data2=='new'){

        //On appelle la fonction qui ajoute un département
        add_filiere();

    }
})

select_matiere2.addEventListener('change',function(){
    var data3=this.value;
//    alert(data3)
    if(data3=='new'){

        //On appelle la fonction qui ajoute un département
        add_matiere();
        select_matiere2.innerHTML="<option value=''>-Sélectionner-</option><option value='new'>Ajouter une matière</option>";       

        $.ajax({
            url: 'php/load_matiere.php',
            type: 'POST',
            data: {data: JSON.stringify(data3)}, 
            success: function(reponse3) {
                //alert(reponse3);
                  matieres2=JSON.parse(reponse3);
                             
                 //On met ces valeurs dans le select
                            
                 //Création du tableau des options
                 options3=new Array();
                            
                 //Boucle qui parcourt le tableau
                 for (let i3 = 0; i3 < matieres2.length; i3++) {
                     //On créer le option HTML
                     options3[i3]=document.createElement('OPTION');
                     var element3=matieres2[i3];
                     //On met la valeur du département dans le option
                     options3[i3].appendChild(document.createTextNode(element3));//Le tet qui sera visible dan le option
                     //On met la valeur qui sera récupérée
                     options3[i3].value=matieres2[i3];
                     //On met le option créé dans le select
                     select_matiere2.appendChild(options3[i3]);
                    
                     
                 }

                

                }
        })
    }
 })


//Fonction qui aoute un département

function add_departement(){
    var data = prompt('Entrer le nom du département');
    //On envoie la valeur au backend
    
    $.ajax({
        url: 'php/save_departement.php',
        type: 'POST',
        data: {data: JSON.stringify(data)}, 
        success: function(reponse) {
            alert(reponse);
           document.getElementById('select_departement2').innerHTML="<option value=''>-Sélectionner-</option><option value='new'>Ajouter une matière</option>"; 
            load_departement2();

            }
    })   
}


//Fonction qui aoute une filière

function add_filiere(){
    var data=new Array();
    data[0]=select_departement2.value;
    if(data[0]==''){
        alert('Veuillez sélectionner un département');
    }
    else{
        
     data[1] = prompt('Entrer le nom de la filière');
     //On envoie la valeur au backend
     
     $.ajax({
         url: 'php/save_filiere.php',
         type: 'POST',
         data: {data: JSON.stringify(data)}, 
         success: function(reponse) {
             alert(reponse);
            
             }
     })   
    }
}


//Fonction qui aoute une filière

function add_matiere(){
    var data=new Array();
    data[0]=select_departement2.value;
    data[1]=select_filiere2.value;

    if(data[0]==''){
        alert('Veuillez sélectionner un département');
    }else if(data[1]==''){
        alert('Veuillez selectionner une fiiliere svp');
    }
    else{
        
     data[2] = prompt('Entrer le code de la matiere');
     data[3] = prompt('Entrer le nom de la  matiere');
     //On envoie la valeur au backend
     
     $.ajax({
         url: 'php/save_matiere.php',
         type: 'POST',
         data: {data: JSON.stringify(data)}, 
         success: function(reponse) {
             alert(reponse);
            
             }
     })   
    }
}



//Fonction qui aoute une matière
/*
function add_departement(){
    var data = prompt('Entrer le nom du département');
    //On envoie la valeur au backend
    
    $.ajax({
        url: 'php/save_departement.php',
        type: 'POST',
        data: {data: JSON.stringify(data)}, 
        success: function(reponse) {
            alert(reponse);
           document.getElementsById('select_departement2').innerHTML="<option value=''>-Sélectionner-</option><option value='new'>Ajouter une matière</option>"; 
            load_departement2();

            }
    })   
}*/