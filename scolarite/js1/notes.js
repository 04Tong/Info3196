    var param2='';
    var param3='';
    var param1='';
$(document).ready(function(){

    //On appelle la fonction qui charge les années académiques

    //fonction qui charge les filières
    load_filiere();
    //Fonction qui charge les documents
    
    load_document(param1,param2);
})




function load_filiere(){
    //On crée un tableau qui récuperera les départements provenant de la BD
   
            
            var filieres= new Array();
            var select_filiere=document.getElementById('select_filiere');
            
       
                //  alert(data)
                $.ajax({
                    url: 'php/load_filiere1.php',
                    type: 'POST',
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
                        
                         //Lorsqu'on clique sur un département pour charger les enseignants
                         select_filiere.addEventListener('change',function(){
                             var data2=this.value;
                             param1='id_filiere';
                             param2=this.value;
                             //alert(param2)
                             load_document(param1,param2);
      })
                        
                        }
                })
       
}




//Fonction qui charge les documents
function load_document(val1,val2) {
    var data=new Array();
    data[0]=document.getElementById('id_exp').value;
    data[1]=val1;
    data[2]=val2;
    //alert(data[0])
    documents=new Array();
    $.ajax({
        url: 'php/load_document.php',
        type: 'POST',
        data: {data: JSON.stringify(data)}, 
        success: function(reponse2) {
           // alert(reponse2);
              documents=JSON.parse(reponse2);
                         
             //On recupere l'id du tableau
             tableau=document.getElementById('tableau');           
             tableau.innerHTML='';

             //Boucle qui parcourt le tableau

             for (let i2 = 0; i2 < documents.length; i2++) {
                 var type=documents[i2][0];

                 if(type=='pdf'){
                    tableau.innerHTML+=" <tr> <td><img src='../images/icon-pdf.png' style='transform:scale(.7) translateY(-20px);position:absolute;'></td> <td><a href='../client/files1/"+documents[i2][1]+"'>"+documents[i2][1]+"</a></td> <td></td> <td><div class='container  ' style='margin-left:10%;'>         <div class='text-center text-lg-start '> <a href='../client/files1/"+documents[i2][1]+"' class='btn btn-success btn-lg'><i class='fa fa-download'></i> Télécharger</a>                 </div></td></td></tr>";
                
                 }
                 else if(type=='xlsx'){
                        tableau.innerHTML+=" <tr> <td><img src='../images/icon-excel.png' style='transform:scale(.7) translateY(-20px);position:absolute;'></td> <td><a href='../client/files1/"+documents[i2][1]+"'>"+documents[i2][1]+"</a></td> <td></td> <td><div class='container  ' style='margin-left:10%;'>         <div class='text-center text-lg-start '> <a href='../client/files1/"+documents[i2][1]+"' class='btn btn-success btn-lg'><i class='fa fa-download'></i> Télécharger</a>                 </div></td></td></tr>";
                    
                
                 }else{
                        tableau.innerHTML+=" <tr> <td><img src='../images/word-icon-png.png' style='transform:scale(.7) translateY(-10px);position:absolute;'></td> <td><a href='../client/files1/"+documents[i2][1]+"'>"+documents[i2][1]+"</a></td> <td></td> <td><div class='container  ' style='margin-left:10%;'>         <div class='text-center text-lg-start '> <a href='../client/files1/"+documents[i2][1]+"' class='btn btn-success btn-lg'><i class='fa fa-download'></i> Télécharger</a>                 </div></td></td></tr>";
                    
                
                 }
                 
             }
            }
    })
}