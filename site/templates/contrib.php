<?php snippet('header') ?>
<?php snippet('menu') ?>

<a href="https://github.com/sarahgarcin/improve-share"><img style="position: absolute; top: 0; right: 0; border: 0;" src="https://s3.amazonaws.com/github/ribbons/forkme_right_green_007200.png" alt="Fork me on GitHub"></a>

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