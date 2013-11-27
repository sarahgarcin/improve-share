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
	  			<p><?php echo $project->intro() ?></p>
		    </li>
		    <?php endforeach ?>
		 </ul>
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


