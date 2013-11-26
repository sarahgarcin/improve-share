<!DOCTYPE html>
<html lang="en">
<head>
  
  <title><?php echo html($site->title()) ?> - <?php echo html($page->title()) ?></title>
  <meta charset="utf-8" />
  <meta name="description" content="<?php echo html($site->description()) ?>" />
  <meta name="keywords" content="<?php echo html($site->keywords()) ?>" />
  <meta name="robots" content="index, follow" />

  <?php echo css('assets/styles/styles.css') ?>
  <?php echo css('assets/styles/kube.css') ?>
  <?php echo css('assets/js/fancy/source/jquery.fancybox.css') ?>

  <?php echo js('assets/js/jquery-1.9.1.min.js') ?>
  <?php echo js('assets/js/jquery-ui-1.10.3.custom.js') ?>
  <?php echo js('assets/js/fancy/source/jquery.fancybox.js') ?>

</head>

<body>

  <header>
    <!-- <h1><a href="<?php echo url() ?>"><img src="<?php echo url('assets/images/logo.png') ?>" width="115" height="41" alt="<?php echo html($site->title()) ?>" /></a></h1> -->
  </header>