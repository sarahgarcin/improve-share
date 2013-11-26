<?php snippet('header') ?>
<?php snippet('menu') ?>
<?php snippet('submenu') ?>

<div class="units-row">

<section class="content-projet">

  <article class="unit-40">
    <h1><?php echo html($page->title()) ?></h1>
    <h2><?php echo kirbytext($page->author()) ?>
    <?php echo kirbytext($page->year()) ?></h2>
    <?php echo kirbytext($page->text()) ?>
    <?php echo kirbytext($page->lien()) ?>
    <h5><?php echo kirbytext($page->titreoutils()) ?></h5>
    <?php echo kirbytext($page->outils()) ?>
    <h5><?php echo kirbytext($page->titrestudio()) ?></h5>
    <?php echo kirbytext($page->studio()) ?>
    <?php echo kirbytext($page->site()) ?>
    <h5><?php echo kirbytext($page->titreprojets()) ?></h5>
    <?php echo kirbytext($page->projets()) ?>
    <?php echo kirbytext($page->tags()) ?>
  </article>

  <?php if($page->hasImages()): ?> 
<ul class="gallery unit-60">
  <?php foreach($page->images() as $image): ?>
  <li><img src="<?php echo $image->url() ?>" width="<?php echo $image->width() ?>" height="<?php echo $image->height() ?>" alt="<?php echo $image->name() ?>" /></li>
  <?php endforeach ?>
</ul>
<?php endif ?>

</section>

</div>


<script type="text/javascript">



</script>
