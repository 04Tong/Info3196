//quand on clique sur le bouton next

$('#next').on('click',function(){

    //On fait disparaitre le premier bloc d'upload
    $('.part1').addClass('hidden');
    //On fait appaitre 2e bloc contenant le formulaire
    $('#bloc-form').removeClass('hidden');

    //On évalue à la ée étape sur le fil d'ariane
    $('.step2').children('.circle').addClass('parcouru');

    //On fait apparaitre le bouton preview et le bouton de validation du formulaire
    $('#btn-submit').removeClass('hidden');
    $('#preview').removeClass('hidden');


})

//quand on clique sur le bouton preview

$('#preview').on('click',function(){

    //On fait disparaitre le premier bloc du formulaire
    $('#bloc-form').addClass('hidden');
    //On fait appaitre 1er bloc
    $('.part1').removeClass('hidden');

    //On revient à la 1ere étape sur le fil d'ariane
    $('.step2').children('.circle').removeClass('parcouru');

    //On fait apparaitre le bouton preview et le bouton de validation du formulaire
    $('#btn-submit').addClass('hidden');
    $('#preview').addClass('hidden');


})



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
        alert(rep)
  
       // hidden.classList.add('hidden');
        //document.getElementById("button").classList.remove('hidden'); 
  
        //On affiche l'aperçu du fichier téléchargé
      //  $('#gallery li:Last-child').css('display','block');
      },
    error: function(){} 	        
    });
    }));