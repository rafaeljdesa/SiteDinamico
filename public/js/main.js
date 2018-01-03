
$(document).ready(function(){
    
    //navbar
    $(".button-collapse").sideNav();
    $(".slider").slider({full_width:true});

    //select
    $('select').material_select();
});


//Voltar slide

$("#prev-slide").click(function(){
    $(".slider").slider('pause');
    $(".slider").slider('prev');
});

//Avançar slide

$("#next-slide").click(function(){
    $(".slider").slider('pause');
    $(".slider").slider('next');
});
