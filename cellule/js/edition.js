var select_annee=document.getElementById('select_annee').value;
    var param2='';
    var param3='';
    var param4='';
$(document).ready(function(){

    //On appelle la fonction qui charge les années académiques

    //fonction qui charge les départements
    load_departement();
    //Fonction qui charge les documents
    
    load_document(select_annee,param2,param3,param4);
})





function load_departement(){
    //On recupere l'id du select départements
    var select_departement=document.getElementById('select_departement');
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
            
            var filieres= new Array();
            var select_filiere=document.getElementById('select_filiere');
            
            //Lorsqu'on clique sur un département pour charger les enseignants
            select_departement.addEventListener('change',function(){
                select_filiere.innerHTML="<option value=''>-Sélectionner-</option>";       
                var data=this.value;
                
                load_document(select_annee,param2,data,param4);

                //  alert(data)
                $.ajax({
                    url: 'php/load_filiere.php',
                    type: 'POST',
                    data: {data: JSON.stringify(data)}, 
                    success: function(reponse2) {
                        //alert(reponse2);
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
                        }
                })
            })
        }
    })
}


//Fonction qui charge les documents
function load_document(val1,val2,val3,val4) {
    var data=new Array();
    data[0]=val1;
    data[1]=val2;
    data[2]=val3;
    data[3]=val4;
    documents=new Array();
    $.ajax({
        url: 'php/load_document.php',
        type: 'POST',
    //    data: {data: JSON.stringify(data)}, 
        success: function(reponse2) {
            //alert(reponse2);
              documents=JSON.parse(reponse2);
                         
             //On recupere l'id du tableau
             tableau=document.getElementById('tableau');           
             tableau.innerHTML='';

             //Boucle qui parcourt le tableau

             for (let i2 = 0; i2 < documents.length; i2++) {
                 var type=documents[i2][0];

                 if(type=='pdf'){
                    tableau.innerHTML+=" <tr> <td><img src='../images/icon-pdf.png' style='transform:scale(.7) translateY(-20px);position:absolute;'></td> <td><a href='../client/files1/"+documents[i2][1]+"'>"+documents[i2][1]+"</a></td> <td></td> <td><div class='container  ' style='margin-left:10%;'>         <div class='text-center text-lg-start '> <a href='' class='btn btn-primary btn-lg'><i class='fa fa-edit'></i> Editer</a> <a href='' class='btn btn-success btn-lg'><i class='fa fa-download'></i> Télécharger</a>                 </div></td></td></tr>";
                
                 }
                 
             }
            }
    })
}