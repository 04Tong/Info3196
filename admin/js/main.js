/**Toggle menu */

$('#menu').find('li').each(function() {
$(this).on('click',function(){
        $(this).children('ul').toggleClass('on');

    $(this).children('div').toggleClass('up');

});
});



/**Clic sur les menus principaux des stats */

//Affichage des stats de l'activité 1
$('#bloc1').on('click',function(){

$(this).addClass('go1');
$('#bloc2').addClass('go2');
$('#bloc3').addClass('go3');


//On enleve les menus
   
    $('#main_stats').css('display','none');

    //Disparition des autres blocs de détails
    $('#detail_stat2').css('display','none');
    $('#detail_stat3').css('display','none');
    $('#detail_stat4').css('display','none');
    $('#detail_stat5').css('display','none');
    $('#detail_stat6').css('display','none');


    //On fait apparaitre le bloc des détails*
    $('#detail_stat1').css('display','block');


//Edition du titre
$('#title').html('Enseignants enregistrés')


});


//Affichage des stats de l'activité 2
$('#bloc2').on('click',function(){

    $(this).addClass('go2');
    $('#bloc1').addClass('go1');
    $('#bloc3').addClass('go3');
    
    
    //On enleve les menus
       
        $('#main_stats').css('display','none');
    
        //Disparition des autres blocs de détails
        $('#detail_stat1').css('display','none');
        $('#detail_stat3').css('display','none');
        $('#detail_stat4').css('display','none');
        $('#detail_stat5').css('display','none');
        $('#detail_stat6').css('display','none');
        
    
        //On fait apparaitre le bloc des détails*
        $('#detail_stat2').css('display','block');
    
    
    //Edition du titre
    $('#title').html('Membres de la scolarité')
    
    
    });
    
    
//Affichage des stats de l'activité 3
$('#bloc3').on('click',function(){

    $(this).addClass('go3');
    $('#bloc2').addClass('go2');
    $('#bloc1').addClass('go1');
    
    
    //On enleve les menus
       
        $('#main_stats').css('display','none');
    
        //Disparition des autres blocs de détails
        $('#detail_stat2').css('display','none');
        $('#detail_stat1').css('display','none');
        $('#detail_stat4').css('display','none');
        $('#detail_stat5').css('display','none');
        $('#detail_stat6').css('display','none');
        
    
        //On fait apparaitre le bloc des détails*
        $('#detail_stat3').css('display','block');
    
    
    //Edition du titre
    $('#title').html('Membres de la cellule')
    
    
    });
    
    
//CLic sur le menu dashbord pour retour aux menus principaux


$('#dashboard').on('click',function(){

    $('#bloc3').removeClass('go3');
    $('#bloc2').removeClass('go2');
    $('#bloc1').removeClass('go1');
    
    
    //On affiche les menus
       
        $('#main_stats').css('display','block');
    
        //Disparition des autres blocs de détails
        $('#detail_stat2').css('display','none');
        $('#detail_stat1').css('display','none');
        $('#detail_stat4').css('display','none');
        $('#detail_stat5').css('display','none');
        $('#detail_stat6').css('display','none');
           
     $('#detail_stat3').css('display','none');
    
    
    //Edition du titre
    $('#title').html('Current stats')
    
    
    });
    
//Clics sur le dropdown pour déployer les activités 

//Affichage des stats de l'activité 1
$('#menu_activite1').on('click',function(){

    $('#bloc1').addClass('go1');
    $('#bloc2').addClass('go2');
    $('#bloc3').addClass('go3');
    
    
    //On enleve les menus
       
        $('#main_stats').css('display','none');
    
        //Disparition des autres blocs de détails
        $('#detail_stat2').css('display','none');
        $('#detail_stat3').css('display','none');
        $('#detail_stat4').css('display','none');
        $('#detail_stat5').css('display','none');
        $('#detail_stat6').css('display','none');
        
        //On fait apparaitre le bloc des détails*
        $('#detail_stat1').css('display','block');
    
    
    //Edition du titre
    $('#title').html('Enseignants enregistrés')
    
    
    });
    
    
    //Affichage des stats de l'activité 2
    $('#menu_activite2').on('click',function(){
    
        $('#bloc2').addClass('go2');
        $('#bloc1').addClass('go1');
        $('#bloc3').addClass('go3');
        
        
        //On enleve les menus
           
            $('#main_stats').css('display','none');
        
            //Disparition des autres blocs de détails
            $('#detail_stat1').css('display','none');
            $('#detail_stat3').css('display','none');
            $('#detail_stat4').css('display','none');
            $('#detail_stat5').css('display','none');
            $('#detail_stat6').css('display','none');
                
        
            //On fait apparaitre le bloc des détails*
            $('#detail_stat2').css('display','block');
        
        
        //Edition du titre
        $('#title').html('Membres de la scolarité')
        
        
        });
        
        
    //Affichage des stats de l'activité 3
    $('#menu_activite3').on('click',function(){
    
        $("#bloc3").addClass('go3');
        $('#bloc2').addClass('go2');
        $('#bloc1').addClass('go1');
        
        
        //On enleve les menus
           
            $('#main_stats').css('display','none');
        
            //Disparition des autres blocs de détails
            $('#detail_stat2').css('display','none');
            $('#detail_stat1').css('display','none');
            $('#detail_stat4').css('display','none');
            $('#detail_stat5').css('display','none');
            $('#detail_stat6').css('display','none');
                
            //On fait apparaitre le bloc des détails*
            $('#detail_stat3').css('display','block');
        
        
        //Edition du titre
        $('#title').html('Membres de la cellule')
        
        
        });
        
        
    //Affichage des stats de l'activité 3
    $('#menu_enseignant').on('click',function(){
    
        $("#bloc3").addClass('go3');
        $('#bloc2').addClass('go2');
        $('#bloc1').addClass('go1');
        
        
        //On enleve les menus
           
            $('#main_stats').css('display','none');
        
            //Disparition des autres blocs de détails
            $('#detail_stat2').css('display','none');
            $('#detail_stat1').css('display','none');
            $('#detail_stat3').css('display','none');
            $('#detail_stat5').css('display','none');
            $('#detail_stat6').css('display','none');
                 
        
            //On fait apparaitre le bloc des détails*
            $('#detail_stat4').css('display','block');
        
        
        //Edition du titre
        $('#title').html("Enregistrement d'un enseigant");
        
        
        });
        
    //Affichage des stats de l'activité 3
    $('#menu_scolarite').on('click',function(){
    
        $("#bloc3").addClass('go3');
        $('#bloc2').addClass('go2');
        $('#bloc1').addClass('go1');
        
        
        //On enleve les menus
           
            $('#main_stats').css('display','none');
        
            //Disparition des autres blocs de détails
            $('#detail_stat2').css('display','none');
            $('#detail_stat1').css('display','none');
            $('#detail_stat3').css('display','none');
            $('#detail_stat4').css('display','none');
            $('#detail_stat6').css('display','none');

        
            //On fait apparaitre le bloc des détails*
            $('#detail_stat5').css('display','block');
        
        
        //Edition du titre
        $('#title').html("Enregistrement d'un membre de la scolarite");
        
        
        });
        
    //Affichage des stats de l'activité 3
    $('#menu_cellule').on('click',function(){
       // alert('ok')
        $("#bloc3").addClass('go3');
        $('#bloc2').addClass('go2');
        $('#bloc1').addClass('go1');
        
        
        //On enleve les menus
           
            $('#main_stats').css('display','none');
        
            //Disparition des autres blocs de détails
            $('#detail_stat2').css('display','none');
            $('#detail_stat1').css('display','none');
            $('#detail_stat3').css('display','none');
            $('#detail_stat4').css('display','none');
            $('#detail_stat5').css('display','none');

        
            //On fait apparaitre le bloc des détails*
            $('#detail_stat6').css('display','block');
        
        
        //Edition du titre
        $('#title').html("Enregistrement d'un membre de la cellule informatique");
        
        
        });
        