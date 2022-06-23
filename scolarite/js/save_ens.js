$(document).ready(function(){
    
})


//Pour la selection des ue

//Recuperation des id des select
var select_ue=document.getElementById('select_ue');
var select_niveau=document.getElementById('select_niveau');
var select_specialite=document.getElementById('select_specialite');
var select_groupe=document.getElementById('select_groupe');
var select_prof=document.getElementById('select_prof');
var select_jury=document.getElementById('select_jury');


var i1=0;
var i2=0;
var i3=0;
var i4=0;
var i5=0;
var i6=0;

//Lorsque qu'on choisit une option pour les ue
select_ue.addEventListener('change',function(){
    val=this.value;
    if(val!=""){
        
    //On crée un autre li
    $('#liste_ue').append("<li id='li_ue"+i1+"'><input type='hidden' id='ue"+i1+"' value='"+val+"'>"+val+" <i id='close_ue"+i1+"'  class='fa fa-times'></i></li>");
    document.getElementById('close_ue'+i1).addEventListener('click',function(){
        
       $(this).parent('li').remove();
    })
    i1++;
    }
})

for (let i = 0; i < i1; i++) {

   
}



//Lorsque qu'on choisit une option pour les niveaux
select_niveau.addEventListener('change',function(){
    val=this.value;
    if(val!=""){
        
    //On crée un autre li
    $('#liste_niveau').append("<li><input type='hidden' id='niveau"+i2+"' value='"+val+"'>"+val+"  <i id='close_niveau"+i2+"'  class='fa fa-times'></i></li>");
    document.getElementById('close_niveau'+i2).addEventListener('click',function(){
        
        $(this).parent('li').remove();
     })
    i2++;
    }
})



//Lorsque qu'on choisit une option pour les spécialités
select_specialite.addEventListener('change',function(){
    val=this.value;
    if(val!=""){
        
    //On crée un autre li
    $('#liste_specialite').append("<li><input type='hidden' id='specialite"+i3+"' value='"+val+"'>"+val+" <i id='close_specialite"+i3+"'  class='fa fa-times'></i></li>");
    document.getElementById('close_specialite'+i3).addEventListener('click',function(){
        
        $(this).parent('li').remove();
     })
    i3++;
    }
})


//Lorsque qu'on choisit une option pour les groupe
select_groupe.addEventListener('change',function(){
    val=this.value;
    if(val!=""){
        
    //On crée un autre li
    $('#liste_groupe').append("<li><input type='hidden' id='groupe"+i4+"' value='"+val+"'>"+val+" <i id='close_groupe"+i4+"'  class='fa fa-times'></i></li>");
    document.getElementById('close_groupe'+i4).addEventListener('click',function(){
        
        $(this).parent('li').remove();
     })
    i4++;
    }
})


//Lorsque qu'on choisit une option pour les profs
select_prof.addEventListener('change',function(){
    val=this.value;
    if(val!=""){
        
    //On crée un autre li
    $('#liste_prof').append("<li><input type='hidden' id='prof"+i5+"' value='"+val+"'>"+val+" <i id='close_prof"+i5+"'  class='fa fa-times'></i></li>");
    document.getElementById('close_prof'+i5).addEventListener('click',function(){
        
        $(this).parent('li').remove();
     })
    i5++;
    }
})


//Lorsque qu'on choisit une option pour les jury
select_jury.addEventListener('change',function(){
    val=this.value;
    if(val!=""){
        
    //On crée un autre li
    $('#liste_jury').append("<li><input type='hidden' id='jury"+i6+"' value='"+val+"'>"+val+" <i id='close_jury"+i6+"'  class='fa fa-times'></i></li>");
    document.getElementById('close_jury'+i6).addEventListener('click',function(){
        
        $(this).parent('li').remove();
     })
    i6++;
    }
})
