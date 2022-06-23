$(document).ready(function(){
  
    //On appelle la fonction qui charge les départements dans le select
    load_departement();
    suppression();
})




//fonction qui charge les départements

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
                select_departement.appendChild(options[i])
            }
        }
    })
}


//fonction qui supprime le choix du departement lorsque'il ne s'agit pas d'un enseignant
function suppression(){
    //On récupère l'id du select du grade
    var select_grade=document.getElementById('grade');

    select_grade.addEventListener('change',function() {
        val=this.value;
        //On vérifie si c'est un membre du département
        if(val=='ci'){
            select_departement.style.display='none';
            document.getElementById('label').style.display='none';
        }
        
    })
}