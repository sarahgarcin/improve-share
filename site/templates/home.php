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


