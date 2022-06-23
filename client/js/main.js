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

setTimeout(function(){

//On enleve les menus
   
    $('#main_stats').css('display','none');

    //Disparition des autres blocs de détails
    $('#detail_stat2').css('display','none');
    $('#detail_stat3').css('display','none');


    //On fait apparaitre le bloc des détails*
    $('#detail_stat1').css('display','block');

},1000)

//Edition du titre
$('#title').html('Statistics of activity 1')


});


//Affichage des stats de l'activité 2
$('#bloc2').on('click',function(){

    $(this).addClass('go2');
    $('#bloc1').addClass('go1');
    $('#bloc3').addClass('go3');
    
    setTimeout(function(){
    
    //On enleve les menus
       
        $('#main_stats').css('display','none');
    
        //Disparition des autres blocs de détails
        $('#detail_stat1').css('display','none');
        $('#detail_stat3').css('display','none');
    
    
        //On fait apparaitre le bloc des détails*
        $('#detail_stat2').css('display','block');
    
    },1000)
    
    //Edition du titre
    $('#title').html('Statistics of activity 2')
    
    
    });
    
    
//Affichage des stats de l'activité 3
$('#bloc3').on('click',function(){

    $(this).addClass('go3');
    $('#bloc2').addClass('go2');
    $('#bloc1').addClass('go1');
    
    setTimeout(function(){
    
    //On enleve les menus
       
        $('#main_stats').css('display','none');
    
        //Disparition des autres blocs de détails
        $('#detail_stat2').css('display','none');
        $('#detail_stat1').css('display','none');
    
    
        //On fait apparaitre le bloc des détails*
        $('#detail_stat3').css('display','block');
    
    },1000)
    
    //Edition du titre
    $('#title').html('Statistics of activity 3')
    
    
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
    
    setTimeout(function(){
    
    //On enleve les menus
       
        $('#main_stats').css('display','none');
    
        //Disparition des autres blocs de détails
        $('#detail_stat2').css('display','none');
        $('#detail_stat3').css('display','none');
    
    
        //On fait apparaitre le bloc des détails*
        $('#detail_stat1').css('display','block');
    
    },1000)
    
    //Edition du titre
    $('#title').html('Statistics of activity 1')
    
    
    });
    
    
    //Affichage des stats de l'activité 2
    $('#menu_activite2').on('click',function(){
    
        $('#bloc2').addClass('go2');
        $('#bloc1').addClass('go1');
        $('#bloc3').addClass('go3');
        
        setTimeout(function(){
        
        //On enleve les menus
           
            $('#main_stats').css('display','none');
        
            //Disparition des autres blocs de détails
            $('#detail_stat1').css('display','none');
            $('#detail_stat3').css('display','none');
        
        
            //On fait apparaitre le bloc des détails*
            $('#detail_stat2').css('display','block');
        
        },1000)
        
        //Edition du titre
        $('#title').html('Statistics of activity 2')
        
        
        });
        
        
    //Affichage des stats de l'activité 3
    $('#menu_activite3').on('click',function(){
    
        $("#bloc3").addClass('go3');
        $('#bloc2').addClass('go2');
        $('#bloc1').addClass('go1');
        
        setTimeout(function(){
        
        //On enleve les menus
           
            $('#main_stats').css('display','none');
        
            //Disparition des autres blocs de détails
            $('#detail_stat2').css('display','none');
            $('#detail_stat1').css('display','none');
        
        
            //On fait apparaitre le bloc des détails*
            $('#detail_stat3').css('display','block');
        
        },1000)
        
        //Edition du titre
        $('#title').html('Statistics of activity 3')
        
        
        });
        