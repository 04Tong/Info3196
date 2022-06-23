$(document).ready(function(){
    load_scolarite();
})

//Fonction qui charge les enseignants

function load_scolarite(){
       
    var scolarite=new Array();    
    $.ajax({
        url: 'php/load_scolarite.php',
        type: 'POST',
        success: function(reponse) {
            //alert(reponse);
              scolarite=JSON.parse(reponse);
                         
             //On recupere l'id du tableau html
             var tableau_scolarite=document.getElementById('tableau_scolarite');
             tableau_scolarite.innerHTML='';
             //Boucle qui parcourt le tableau
             for (let i = 0; i < scolarite.length; i++) {
                tableau_scolarite.innerHTML+="<tr> <th scope='row'>"+scolarite[i][0]+"</th> <td>"+scolarite[i][1]+"</td> <td>"+scolarite[i][2]+"</td> <td>"+scolarite[i][3]+"</td> </tr>";
                 
             }
            }
    })
}


