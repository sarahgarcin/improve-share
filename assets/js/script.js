$(document).ready(function(){


////////////////////// HOME ////////////////////

// INTRODUCTION TOOGLE //

    $( ".intro-titre" ).click(function() {
        $( ".intro-text" ).toggle('slow');
    });


    /////////// GENERAL /////////////////

// Projects are Draggable + z-index ++ when drag 

    var a = 3;
    $("#canvas li").draggable({
        containment: "canvas",
        start: function(event, ui) { $(this).css("z-index", a++); }        
    });

// Random position of project in wrapper

    $("#canvas li").each(
        function(intIndex) {

            var l = Math.floor(Math.random() * $("#canvas").width());
            var t = Math.floor(Math.random() * $("#canvas").height());

        $(this).css("left", l);
        $(this).css("top", t);

    });    

// Create a div for each country + append project by class country  

    /////////// FRANCE /////////////////

    // Create Div and Append 
    var div = document.createElement('div');
    div.className = "france-wrapper"; 
    $('.projets').append(div);
    $('.france').each(function() {
        $(div).append($(this));
    });
    $(".france-wrapper").append('<p class="pays">France</p>');


    // Random Positionning Project in the div 
    $(".france-wrapper li").each(
        function(intIndex) {

            var l = Math.floor(Math.random() * $(".france-wrapper").width());
            var t = Math.floor(Math.random() * $(".france-wrapper").height());

        $(this).css("left", l);
        $(this).css("top", t);

    }); 

    // Projects are draggable in the div
    var a = 3;
    $(".france-wrapper li").draggable({
        containment: ".france-wrapper",
        start: function(event, ui) { $(this).css("z-index", a++); }        
    });

     /////////// PAYS-BAS /////////////////   

    // Create Div and Append 
    var div = document.createElement('div');
    div.className = "paysbas-wrapper"; 
    $('.projets').append(div);
    $('.paysbas').each(function() {
        $(div).append($(this));
    });
    $(".paysbas-wrapper").append('<p class="pays">Pays-Bas</p>');

    // Random Positionning Project in the div
    $(".paysbas-wrapper li").each(
        function(intIndex) {

            var l = Math.floor(Math.random() * $(".paysbas-wrapper").width());
            var t = Math.floor(Math.random() * $(".paysbas-wrapper").height());

        $(this).css("left", l);
        $(this).css("top", t);

    }); 

    // Projects are draggable in the div
    var a = 3;
    $(".paysbas-wrapper li").draggable({
        containment: ".paysbas-wrapper",
        start: function(event, ui) { $(this).css("z-index", a++); }        
    });


    /////////// SUISSE /////////////////   

    // Create Div and Append    
    var div = document.createElement('div');
    div.className = "suisse-wrapper"; 
    $('.projets').append(div);
    $('.suisse').each(function() {
        $(div).append($(this));
    });
    $(".suisse-wrapper").append('<p class="pays">Suisse</p>');

    // Random Positionning Project in the div
    $(".suisse-wrapper li").each(
        function(intIndex) {

            var l = Math.floor(Math.random() * $(".suisse-wrapper").width());
            var t = Math.floor(Math.random() * $(".suisse-wrapper").height());

        $(this).css("left", l);
        $(this).css("top", t);
    });

    // Projects are draggable in the div
    var a = 3;
    $(".suisse-wrapper li").draggable({
        containment: ".suisse-wrapper",
        start: function(event, ui) { $(this).css("z-index", a++); }
        
    });

    /////////// ALLEMAGNE /////////////////   

    // Create Div and Append 
    var div = document.createElement('div');
    div.className = "allemagne-wrapper"; 
    $('.projets').append(div);
    $('.allemagne').each(function() {
        $(div).append($(this));
    });
    $(".allemagne-wrapper").append('<p class="pays">Allemagne</p>');

    // Random Positionning Project in the div
    $(".allemagne-wrapper li").each(
        function(intIndex) {

            var l = Math.floor(Math.random() * $(".allemagne-wrapper").width());
            var t = Math.floor(Math.random() * $(".allemagne-wrapper").height());

        $(this).css("left", l);
        $(this).css("top", t);
    });

    // Projects are draggable in the div
    var a = 3;
    $(".allemagne-wrapper li").draggable({
        containment: ".allemagne-wrapper",
        start: function(event, ui) { $(this).css("z-index", a++); }        
    }); 

    /////////// USA /////////////////   

    // Create Div and Append  
    var div = document.createElement('div');
    div.className = "usa-wrapper"; 
    $('.projets').append(div);
    $('.usa').each(function() {
        $(div).append($(this));
    });
    $(".usa-wrapper").append('<p class="pays">États-Unis</p>');

    // Random Positionning Project in the div
    $(".usa-wrapper li").each(
        function(intIndex) {

            var l = Math.floor(Math.random() * $(".usa-wrapper").width());
            var t = Math.floor(Math.random() * $(".usa-wrapper").height());

        $(this).css("left", l);
        $(this).css("top", t);
    });

    // Projects are draggable in the div
    var a = 3;
    $(".usa-wrapper li").draggable({
        containment: ".usa-wrapper",
        start: function(event, ui) { $(this).css("z-index", a++); }
        
    });

    /////////// BELGIQUE /////////////////   

    // Create Div and Append   
    var div = document.createElement('div');
    div.className = "belgique-wrapper"; 
    $('.projets').append(div);
    $('.belgique').each(function() {
        $(div).append($(this));
    });
    $(".belgique-wrapper").append('<p class="pays">Belgique</p>');

    // Random Positionning Project in the div
    $(".belgique-wrapper li").each(
        function(intIndex) {

            var l = Math.floor(Math.random() * $(".belgique-wrapper").width());
            var t = Math.floor(Math.random() * $(".belgique-wrapper").height());

        $(this).css("left", l);
        $(this).css("top", t);
    });

    // Projects are draggable in the div
    var a = 3;
    $(".belgique-wrapper li").draggable({
        containment: ".belgique-wrapper",
        start: function(event, ui) { $(this).css("z-index", a++); }      
    });

    /////////// ESPAGNE /////////////////   

    // Create Div and Append 
    var div = document.createElement('div');
    div.className = "espagne-wrapper"; 
    $('.projets').append(div);
    $('.espagne').each(function() {
        $(div).append($(this));
    });
    $(".espagne-wrapper").append('<p class="pays">Espagne</p>');

    // Random Positionning Project in the div
    $(".espagne-wrapper li").each(
        function(intIndex) {

            var l = Math.floor(Math.random() * $(".espagne-wrapper").width());
            var t = Math.floor(Math.random() * $(".espagne-wrapper").height());

        $(this).css("left", l);
        $(this).css("top", t);

    });

    // Projects are draggable in the div
    var a = 3;
    $(".espagne-wrapper li").draggable({
        containment: ".espagne-wrapper",
        start: function(event, ui) { $(this).css("z-index", a++); }
    });

////// FILTERS ///////

    $('div.tags').delegate('input[type=checkbox]', 'change', function()
    {
        var $lis = $('.projets > div > li'),
            $checked = $('input:checked');

        if ($checked.length) {
            var selector = $checked.map(function(){
                return '.' + $(this).attr('rel');
            }).get().join('');
            $lis.hide().filter(selector).show();     
        }
        else {
            $lis.show();
        }
    });

// COOKIE / FIRST TIME ON THE WEB PAGE

    if ( firstImpression() ) {
      $('.intro-text').css('display','block');
    } 
    else {
      $('.intro-text').css('display','none'); 
    } 

});	