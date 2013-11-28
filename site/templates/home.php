<?php snippet('header') ?>


<section class="content home">
	<div id = "canvas">

		<ul class= "projets">
			<?php foreach($page->children()->visible()->shuffle() as $project): ?>
			<?php $image = $project->images()->first()?>

			<li class = "<?php echo $project->filter() ?> <?php echo $project->important() ?> <?php echo $project->pays() ?>" >
				<a href="<?php echo $project->url() ?>" ><img class="<?php echo $image->title() ?>" src="<?php echo $image->url() ?>" width="<?php echo $image->width() ?>" height="<?php echo $image->height() ?>"/>    
	  			<p><?php echo $project->year() ?> </br>
	  			<?php echo $project->title() ?></br>
	  			<?php echo $project->author() ?></p>
<!-- 	  			<p><?php echo $project->intro() ?></p> -->
		    </li>

		    <?php endforeach ?>
		 </ul>
	</div>

    <div id='overlay'></div>
<div id='modal'>
    <div id='content'>No JavaScript Yet!</div>
    <a href='#' id='close'>close</a>
</div>

    <div class="intro">
        <div class="close-buttons">X</div> 
        <img src= "../../assets/images/traitpng2.png" class="trait" ></img>
        <p>Introduction<br>
        <br>
         L'ambition d'Ivan Illich était immense : « (...) il faut inverser radicalement les institutions industrielles, reconstruire la société de fond en comble. »
C'est un révolutionnaire et non un réformateur.
Il est difficile de dire quel est l'héritage d'Illich mais il est probable que ce soit sa conception de l'outil qui reste la plus intéressante : « L’outil juste répond à trois exigences :
il est générateur d'efficience sans dégrader l'autonomie personnelle,
il ne suscite ni esclave ni maître,
il élargit le rayon d'action personnelle».
(Les externalités positives d'un outil conviviales sont supérieurs aux externalités négatives.)
L'open source est un projet Illichien dont l'ambition est d'investir du temps, des connaissances pour créer des outils authentiques, par besoin ou par envie, et de rendre public ce travail. Les concepteurs  peuvent bénéficier des améliorations et des applications des autres utilisateurs. Les outils qui découlent de cette pratique sont des « outils conviviaux », justes.
Dans le design graphique, la pratique du logiciel libre ne se limite pas, seulement, à l'utilisation de logicielsFLOSS (free/libre/open-source software) mais se traduit dans la conception des projets.
Certains des travaux, que nous présentons, n'utilisent pas la programmation ou même l'informatique mais le process fait appel à certaines ambitions de l'open source sans pour autant en être le décalque ou l'illustration de ce qui ce fait dans la programmation. Ces travaux ne font pas appel à l'ensemble des caractéristiques du FLOSS (utiliser le logiciel sans restriction, étudier le logiciel, le modifier pour l’adapter à ses besoins et le redistribuer sous certaines conditions), mais : ils se créent en collaboration, débouchent sur la création d'outils spécifiques, partage les sources ou les outils... Il s'agit, pour nous, de projets, d'outils « conviviaux » qui contiennent en eux les caractéristiques de l'open source, de l'économie collaborative, tout comme la presse de Gutemberg contient en elle-même les caractéristiques de la modernité : reproduction de masse, travail à la chaîne.
</p>
    </div> 

	<div class="tags">

        <label>
            <input type="checkbox" rel="outil" />
            Création / augmentation d'outils
        </label>
        <label>
            <input type="checkbox" rel="doc" />
            Partage de la documentation
        </label>
        <label>
            <input type="checkbox" rel="source" />
            Partage des sources
        </label>
        <label>
            <input type="checkbox" rel="collaboration" />
            Création en collaboration
        </label>
         <label>
            <input type="checkbox" rel="workshop" />
            Workshop / Conférences
        </label>
         <label>
            <input type="checkbox" rel="logiciels" />
            Utilisation de logiciels open source
        </label>
        <label>
            <input type="checkbox" rel="recherche" />
            Projets de recherche
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

    /* INTRODUCTION*/

    var div = document.createElement('div');
    div.className = "introduction-wrapper"; 
    $('.projets').append(div);
    $('.introduction').each(function() {
        $(div).append($(this));
    });


    $(".introduction-wrapper li").each(
        function(intIndex) {

            var l = Math.floor(Math.random() * $(".introduction-wrapper").width());
            var t = Math.floor(Math.random() * $(".introduction-wrapper").height());

        $(this).css("left", l);
        $(this).css("top", t);

    }); 

        $(document).on('click','.close-buttons',function(){
        $('.intro').remove();
    });

    //    $(document).on('click','.introduction',function(){
    //       $('.introduction').remove();
    // });

    /* FRANCE */

    var div = document.createElement('div');
    div.className = "france-wrapper"; 
    $('.projets').append(div);
    $('.france').each(function() {
        $(div).append($(this));
    });


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

    $(".paysbas-wrapper li").each(
        function(intIndex) {

            var l = Math.floor(Math.random() * $(".paysbas-wrapper").width());
            var t = Math.floor(Math.random() * $(".paysbas-wrapper").height());

        $(this).css("left", l);
        $(this).css("top", t);

    }); 

    //  var a = 3;
    // $(".paysbas-wrapper li").draggable({
    //     containment: ".paysbas-wrapper",
    //     start: function(event, ui) { $(this).css("z-index", a++); }
        
    // });


    /* SUISSE */    

    var div = document.createElement('div');
    div.className = "suisse-wrapper"; 
    $('.projets').append(div);
    $('.suisse').each(function() {
        $(div).append($(this));
    });

    $(".suisse-wrapper li").each(
        function(intIndex) {

            var l = Math.floor(Math.random() * $(".suisse-wrapper").width());
            var t = Math.floor(Math.random() * $(".suisse-wrapper").height());

        $(this).css("left", l);
        $(this).css("top", t);

    });

    /* ALLEMAGNE */    

    var div = document.createElement('div');
    div.className = "allemagne-wrapper"; 
    $('.projets').append(div);
    $('.allemagne').each(function() {
        $(div).append($(this));
    });

    $(".allemagne-wrapper li").each(
        function(intIndex) {

            var l = Math.floor(Math.random() * $(".allemagne-wrapper").width());
            var t = Math.floor(Math.random() * $(".allemagne-wrapper").height());

        $(this).css("left", l);
        $(this).css("top", t);

    }); 

    /* USA */    

    var div = document.createElement('div');
    div.className = "usa-wrapper"; 
    $('.projets').append(div);
    $('.usa').each(function() {
        $(div).append($(this));
    });

    $(".usa-wrapper li").each(
        function(intIndex) {

            var l = Math.floor(Math.random() * $(".usa-wrapper").width());
            var t = Math.floor(Math.random() * $(".usa-wrapper").height());

        $(this).css("left", l);
        $(this).css("top", t);

    });

    /* BELGIQUE */    

    var div = document.createElement('div');
    div.className = "belgique-wrapper"; 
    $('.projets').append(div);
    $('.belgique').each(function() {
        $(div).append($(this));
    });

    $(".belgique-wrapper li").each(
        function(intIndex) {

            var l = Math.floor(Math.random() * $(".belgique-wrapper").width());
            var t = Math.floor(Math.random() * $(".belgique-wrapper").height());

        $(this).css("left", l);
        $(this).css("top", t);

    });

    /* ESPAGNE */    

    var div = document.createElement('div');
    div.className = "espagne-wrapper"; 
    $('.projets').append(div);
    $('.espagne').each(function() {
        $(div).append($(this));
    });

    $(".espagne-wrapper li").each(
        function(intIndex) {

            var l = Math.floor(Math.random() * $(".espagne-wrapper").width());
            var t = Math.floor(Math.random() * $(".espagne-wrapper").height());

        $(this).css("left", l);
        $(this).css("top", t);

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


});	

</script>


