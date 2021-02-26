<!DOCTYPE html>

<!--

DESIGN AND DEVELOPMENT BY
 
    ___       ___       ___       ___       ___       ___       ___       ___   
   /\  \     /\  \     /\  \     /\  \     /\  \     /\__\     /\__\     /\  \  
  /::\  \   /::\  \   /::\  \   /::\  \   /::\  \   /:/  /    /:/__/_   /::\  \ 
 /::\:\__\ /::\:\__\ /::\:\__\ /::\:\__\ /::\:\__\ /:/__/    /::\/\__\ /:/\:\__\
 \/\::/  / \/\::/  / \/\::/  / \;:::/  / \:\:\/  / \:\  \    \/\::/  / \:\/:/  /
   /:/  /     \/__/    /:/  /   |:\/__/   \:\/  /   \:\__\     /:/  /   \::/  / 
   \/__/               \/__/     \|__|     \/__/     \/__/     \/__/     \/__/  

www.aparelho.tv

-->

<html <?= site()->langAttr() ?>>
<head>
 <?= $page->htmlhead() ?>
 <?= $page->metaTags(['og', 'twitter', 'json-ld']) ?>
 <meta name="description" content="<?= $pages->find('home')->text() ?>">

 <?= css(['assets/css/normalize.css', '@auto']) ?>
 <?= css(['assets/css/index.css', '@auto']) ?>




 <!--<script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>-->

 <?= js(['assets/js/jquery-3.5.1.min.js']) ?>
 <?= js(['assets/js/lazysizes.min.js']) ?>
 <?= js(['assets/js/app.js']) ?>


</head>

<body>
	<?php snippet ('apply') ?>
	<?php snippet ('soon') ?>

	<div class="global-wrapper">
		<header>
			<a href="<?= $site->url() ?>" class="aka-logo">
				<img class="logo" alt="Agder Kunstakademi Logo" src="<?php echo url('assets/images/aka-logo-core.png') ?>">
			</a>

			<?php snippet ('shortcuts') ?>
			
		</header>

<?php snippet ('full-menu') ?>
<?php snippet ('blackboard-intro') ?>
<?php snippet ('blackboard-full') ?>

