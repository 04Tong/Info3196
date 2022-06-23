$(document).ready(function(){
    load_cellule();
})

//Fonction qui charge les enseignants

function load_cellule(){
       
    var cellule=new Array();    
    $.ajax({
        url: 'php/load_cellule.php',
        type: 'POST',
        success: function(reponse) {
            //alert(reponse);
              cellule=JSON.parse(reponse);
                         
             //On recupere l'id du tableau html
             var tableau_cellule=document.getElementById('tableau_cellule');
             tableau_cellule.innerHTML='';
             //Boucle qui parcourt le tableau
             for (let i = 0; i < cellule.length; i++) {
                tableau_cellule.innerHTML+="<tr> <th scope='row'>"+cellule[i][0]+"</th> <td>"+cellule[i][1]+"</td> <td>"+cellule[i][2]+"</td> <td>"+cellule[i][3]+"</td> </tr>";
                 
             }
            }
    })
}


