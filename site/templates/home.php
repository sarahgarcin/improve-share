<?php snippet('header') ?>


<section class="content home">
	<div id = "canvas">

		<ul class= "projets">
			<?php foreach($page->children()->visible()->shuffle() as $project): ?>
			<?php $image = $project->images()->first()?>

			<li class = "<?php echo $project->filter() ?> <?php echo $project->important() ?>" >
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

	$("#canvas li").each(
		function(intIndex) {

			var l = Math.floor(Math.random() * $("#canvas").width());
			var t = Math.floor(Math.random() * $("#canvas").height());

		$(this).css("left", l);
		$(this).css("top", t);

	});

	var a = 3;
	$("#canvas li").draggable({
		containment: "canvas",
		start: function(event, ui) { $(this).css("z-index", a++); }
		
});
    // $('#canvas li').click(function() {
    //     $(this).addClass('top').removeClass('bottom');
    //     $(this).siblings().removeClass('top').addClass('bottom');
    //     $(this).css("z-index", a++);

    // });

 //    $( "input[type=checkbox]" ).on( "click", function() {
 //  		$( "#log" ).html( $( "input:checked" ).val() + " is checked!" );
	// });

$('div.tags').delegate('input[type=checkbox]', 'change', function()
{
    var $lis = $('.projets > li'),
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


