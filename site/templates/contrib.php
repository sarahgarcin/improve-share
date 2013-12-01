<?php snippet('header') ?>
<?php snippet('menu') ?>

<div class="units-row">

<section class="content-projet">

  <article class="unit-40">
    <h1><?php echo html($page->title()) ?></h1>
    <h2 class="author"><?php echo html($page->author()) ?></h2>
    <h2 class="year"><?php echo html($page->year()) ?></h2>
    <p class="text"><?php echo kirbytext($page->text()) ?></p>
  </article>

</section>

</div>