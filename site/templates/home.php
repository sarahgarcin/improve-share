<?php snippet('header') ?>


<section class="content home">
	<div id = "canvas">

		<ul class= "projets">
			<?php foreach($page->children()->visible() as $project): ?>
			<?php $image = $project->images()->first()?>

			<li class = "<?php echo $project->filter() ?> <?php echo $project->important() ?> <?php echo $project->pays() ?>" >
				<a href="<?php echo $project->url() ?>" ><img class="<?php echo $image->title() ?>" src="<?php echo $image->url() ?>" width="<?php echo $image->width() ?>" height="<?php echo $image->height() ?>"/>    
	  			<p><?php echo $project->year() ?> </br>
	  			<?php echo $project->title() ?></br>
	  			<?php echo $project->author() ?></p>
		    </li>

		    <?php endforeach ?>
		 </ul>
	</div>

    <div id='overlay'></div>
<div id='modal'>
    <div id='content'></div>
    <a href='#' id='close'></a>
</div>

    <div class="intro-toggle">
        <p class="contrib"><a href="<?php echo url('contrib') ?>" > Enjeux et promesses</a></p>
        <p class="intro-titre"> Fonctionnement et contribution </p>
            <p class="intro-text">
            Ce site est un état des lieux de travaux que nous appelons « conviviaux ». 
            Il est la première étape pour notre projet de diplôme de l’EnsAD consacré à la pratique de l’open source dans le design graphique. 
            Il présente des projets, des outils par un système de filtres:<br>
            Création/augmentation d’outils, partage de la documentation, partage des sources, création en collaboration, 
            workshop / conférences, utilisation de logiciels open-source, projets de recherche.
            </p>
            <p class="intro-text">
            Le menu permet de sélectionner plusieurs filtres et ainsi croiser des catégories de projets. 
            À vous de faire la combinaison de votre choix.
            </p>
            <p class="intro-text">
            Ce site est un outil qui nous permet d’archiver des travaux que nous considérons comme des références. 
            L’objectif, peut-être ambitieux, de notre projet de diplôme de L’EnsAD est de recouvrir l’ensemble des filtres. 
            Comment présenter un site sur des projets contributifs et/ou conviviaux autrement que sous une forme contributive?<br>  
            Nous serions ravis si vous souhaitiez contribuer, proposer un projet. Envoyez nous un email à l’adresse <strong>augmenter-partager@ensad.fr</strong>. 
            Nous vous procurerons un identifiant.
            </p>
            <p class="intro-text">
            Vous trouverez sur notre Titanpad l’ensemble des textes que nous avons rédigés (<a href="http://bigproject.titanpad.com/5" target="_blank"><strong>articles</strong></a>, <a href="http://bigproject.titanpad.com/6" target="_blank"><strong>enjeux et promesses</strong></a>). 
            Une version de notre sera disponible sur Github afin de proposer des debugs, améliorations ou même utiliser le site pour vos propres projets.
            </p>
            <p class="intro-text">
            Si le créateur de l’un des projets souhaite ne plus apparaître sur le site ou voudrait modifier l’article le concernant,    
            il peut nous contacter à la même adresse mail. Nous rappelons que des droits d’auteurs s’appliquent sur certains des projets.
            Nous n’en sommes pas les auteurs simplement le relai.
            </p>
            <p class="intro-text">
            Nous remercions tout particulièrement : Jean-Baptiste Labrune, Francesca Cozzolino, Vadim Bernard, Ruedi Baur, Laurent Ungerer, 
            Remy Bourganel ainsi que le service informatique de l’EnsAD.
            </p>
            <p class="intro-text">
            Colophon :
            Site réalisé grâce au CMS Kirby.
            Typographie : Old standard TT
            </p>
            <p class="intro-text">
            Cordialement,
            Sarah Garcin, Victor Lebeau. Rédacteurs des articles et concepteurs du site.
            </p>  
        </div>

	<div class="tags">

        <label>
            <input type="checkbox" rel="outil" />
            <span class="label-outils">Création / augmentation d'outils</span>
        </label>
        <label>
            <input type="checkbox" rel="doc" />
            <span class="label-doc">Partage de la documentation</span>
        </label>
        <label>
            <input type="checkbox" rel="source" />
            <span class="label-sources">Partage des sources</span>
        </label>
        <label>
            <input type="checkbox" rel="collaboration" />
            <span class="label-collab">Création en collaboration</span>
        </label>
         <label>
            <input type="checkbox" rel="workshop" />
            <span class="label-work">Workshop / Conférences</span>
        </label>
         <label>
            <input type="checkbox" rel="logiciels" />
            <span class="label-log">Utilisation de logiciels open source</span>
        </label>
        <label>
            <input type="checkbox" rel="recherche" />
            <span class="label-rech">Projets de recherche</span>
        </label>
    
    </div>    

</section>


<script type="text/javascript">
$(document).ready(function(){

// Random position in wrapper

	$("#canvas li").each(
		function(intIndex) {

			var l = Math.floor(Math.random() * $("#canvas").width());
			var t = Math.floor(Math.random() * $("#canvas").height());

		$(this).css("left", l);
		$(this).css("top", t);

	});

// Object are Draggable + incrémentation z-index lorsque drag un objet

	var a = 3;
	$("#canvas li").draggable({
		containment: "canvas",
		start: function(event, ui) { $(this).css("z-index", a++); }
		
    });

// Création d'une div de type "pays" + intégration des projets du pays dans la div

 /* INTRO */

    $( ".intro-titre" ).click(function() {
        $( ".intro-text" ).toggle('slow');
    });

    /* FRANCE */

    var div = document.createElement('div');
    div.className = "france-wrapper"; 
    $('.projets').append(div);
    $('.france').each(function() {
        $(div).append($(this));
    });
    $(".france-wrapper").append('<p class="pays">France</p>');



        // var div = document.createElement('div');
    // var wrapperClass = $('#canvas li').attr('class').split(' ')[0];
    // div.className = wrapperClass + "-wrapper"; 
    // $('.projets').append(div);
    // $(wrapperClass).each(function() {
    //     $(div).append($(this));
    // });


    $(".france-wrapper li").each(
        function(intIndex) {

            var l = Math.floor(Math.random() * $(".france-wrapper").width());
            var t = Math.floor(Math.random() * $(".france-wrapper").height());

        $(this).css("left", l);
        $(this).css("top", t);

    }); 

    var a = 3;
    $(".france-wrapper li").draggable({
        containment: ".france-wrapper",
        start: function(event, ui) { $(this).css("z-index", a++); }
        
    });


    /* PAYS BAS */    

    var div = document.createElement('div');
    div.className = "paysbas-wrapper"; 
    $('.projets').append(div);
    $('.paysbas').each(function() {
        $(div).append($(this));
    });
    $(".paysbas-wrapper").append('<p class="pays">Pays-Bas</p>');


    $(".paysbas-wrapper li").each(
        function(intIndex) {

            var l = Math.floor(Math.random() * $(".paysbas-wrapper").width());
            var t = Math.floor(Math.random() * $(".paysbas-wrapper").height());

        $(this).css("left", l);
        $(this).css("top", t);

    }); 

     var a = 3;
    $(".paysbas-wrapper li").draggable({
        containment: ".paysbas-wrapper",
        start: function(event, ui) { $(this).css("z-index", a++); }
        
    });


    /* SUISSE */    

    var div = document.createElement('div');
    div.className = "suisse-wrapper"; 
    $('.projets').append(div);
    $('.suisse').each(function() {
        $(div).append($(this));
    });
    $(".suisse-wrapper").append('<p class="pays">Suisse</p>');


    $(".suisse-wrapper li").each(
        function(intIndex) {

            var l = Math.floor(Math.random() * $(".suisse-wrapper").width());
            var t = Math.floor(Math.random() * $(".suisse-wrapper").height());

        $(this).css("left", l);
        $(this).css("top", t);

    });

    var a = 3;
    $(".suisse-wrapper li").draggable({
        containment: ".suisse-wrapper",
        start: function(event, ui) { $(this).css("z-index", a++); }
        
    });

    /* ALLEMAGNE */    

    var div = document.createElement('div');
    div.className = "allemagne-wrapper"; 
    $('.projets').append(div);
    $('.allemagne').each(function() {
        $(div).append($(this));
    });
    $(".allemagne-wrapper").append('<p class="pays">Allemagne</p>');


    $(".allemagne-wrapper li").each(
        function(intIndex) {

            var l = Math.floor(Math.random() * $(".allemagne-wrapper").width());
            var t = Math.floor(Math.random() * $(".allemagne-wrapper").height());

        $(this).css("left", l);
        $(this).css("top", t);

    });

    var a = 3;
    $(".allemagne-wrapper li").draggable({
        containment: ".allemagne-wrapper",
        start: function(event, ui) { $(this).css("z-index", a++); }
        
    }); 

    /* USA */    

    var div = document.createElement('div');
    div.className = "usa-wrapper"; 
    $('.projets').append(div);
    $('.usa').each(function() {
        $(div).append($(this));
    });
    $(".usa-wrapper").append('<p class="pays">États-Unis</p>');

    $(".usa-wrapper li").each(
        function(intIndex) {

            var l = Math.floor(Math.random() * $(".usa-wrapper").width());
            var t = Math.floor(Math.random() * $(".usa-wrapper").height());

        $(this).css("left", l);
        $(this).css("top", t);

    });

    var a = 3;
    $(".usa-wrapper li").draggable({
        containment: ".usa-wrapper",
        start: function(event, ui) { $(this).css("z-index", a++); }
        
    });

    /* BELGIQUE */    

    var div = document.createElement('div');
    div.className = "belgique-wrapper"; 
    $('.projets').append(div);
    $('.belgique').each(function() {
        $(div).append($(this));
    });
    $(".belgique-wrapper").append('<p class="pays">Belgique</p>');


    $(".belgique-wrapper li").each(
        function(intIndex) {

            var l = Math.floor(Math.random() * $(".belgique-wrapper").width());
            var t = Math.floor(Math.random() * $(".belgique-wrapper").height());

        $(this).css("left", l);
        $(this).css("top", t);

    });

    var a = 3;
    $(".belgique-wrapper li").draggable({
        containment: ".belgique-wrapper",
        start: function(event, ui) { $(this).css("z-index", a++); }
        
    });

    /* ESPAGNE */    

    var div = document.createElement('div');
    div.className = "espagne-wrapper"; 
    $('.projets').append(div);
    $('.espagne').each(function() {
        $(div).append($(this));
    });
    $(".espagne-wrapper").append('<p class="pays">Espagne</p>');

    $(".espagne-wrapper li").each(
        function(intIndex) {

            var l = Math.floor(Math.random() * $(".espagne-wrapper").width());
            var t = Math.floor(Math.random() * $(".espagne-wrapper").height());

        $(this).css("left", l);
        $(this).css("top", t);

    });

    var a = 3;
    $(".espagne-wrapper li").draggable({
        containment: ".espagne-wrapper",
        start: function(event, ui) { $(this).css("z-index", a++); }
        
    });


// Filtres selector

$('div.tags').delegate('input[type=checkbox]', 'change', function()
{
    var $lis = $('.projets > div > li'),
        $checked = $('input:checked');

    if ($checked.length)
    {
        var selector = $checked.map(function ()
        {
            return '.' + $(this).attr('rel');
        }).get().join('');
    
        $lis.hide().filter(selector).show();     
    }
    else
    {
        $lis.show();
    }
});

// COOKIE / PREMIERE VISITE

if ( firstImpression() ) {
  $('.intro-text').css('display','block');
} 
else {
   $('.intro-text').css('display','none'); 
} 


});	

</script>


