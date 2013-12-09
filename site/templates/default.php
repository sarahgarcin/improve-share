<?php snippet('header') ?>
<?php snippet('menu') ?>
<?php snippet('submenu') ?>

<div class="units-row">

<section class="content-projet">

  <article class="unit-40">
    <h1><?php echo html($page->title()) ?></h1>
    <h2 class="author"><?php echo html($page->author()) ?></h2>
    <h2 class="year"><?php echo html($page->year()) ?></h2>
    <p class="text"><?php echo kirbytext($page->text()) ?></p>
    <?php echo kirbytext($page->lien()) ?>
    <h5><?php echo html($page->titreoutils()) ?></h5>
    <?php echo html($page->outils()) ?>
    <h5><?php echo html($page->titrestudio()) ?></h5>
    <?php echo kirbytext($page->studio()) ?>
    <?php echo kirbytext($page->site()) ?>
    <h5><?php echo html($page->titreprojets()) ?></h5>
    <?php echo html($page->projets()) ?>
    <?php echo html($page->tags()) ?>
  </article>

  <?php if($page->hasImages()): ?> 
<ul class="gallery unit-60">
  <?php foreach($page->images() as $image): ?>
  <li><img src="<?php echo $image->url() ?>" width="<?php echo $image->width() ?>" height="<?php echo $image->height() ?>" alt="<?php echo $image->name() ?>" /><p class="legendary"><?php echo $image->caption() ?></p></li>
  <?php endforeach ?>
</ul>
<?php endif ?>

</section>

<div class="comments"><?php snippet('disqus', array('disqus_shortname' => 'outilsetprojetsconviviaux')) ?>
</div>

</div>



<script type="text/javascript">



</script>
