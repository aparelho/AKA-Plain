<!DOCTYPE html>
<html <?= site()->langAttr() ?>>
<head>
 <?= $page->htmlhead() ?>
 <?= $page->metaTags(['og', 'twitter', 'json-ld']) ?>

 <?= css(['assets/css/normalize.css', '@auto']) ?>
 <?= css(['assets/css/index.css', '@auto']) ?>

 <!--<script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>-->

 <?= js(['assets/js/jquery-3.5.1.min.js']) ?>
 <?= js(['assets/js/lazysizes.min.js']) ?>
 <?= js(['assets/js/app.js']) ?>
 <script src="https://unpkg.com/swup@latest/dist/swup.min.js"></script>  

</head>

<body>
	<?php snippet ('apply') ?>

	<div class="global-wrapper">
		<header>
			<a href="<?= $site->url() ?>">
				<img class="logo" alt="Agder Kunstakademi Logo" src="<?php echo url('assets/images/aka-logo-core.png') ?>">
			</a>

			<nav class="shortcuts lg-txt">
				<?php foreach ($site->children()->listed()->limit(1) as $item): ?>
				 <a href="<?= $item->url() ?>" class="<?= $item->title() ?>"> <?= $item->title() ?> </a>
			<?php endforeach ?>
				<a class="Blackboard">Blackboard</a>
				<a class="application-caller">Apply</a>

				<div class="menu-caller">

					<?php snippet ('chat-icon') ?>

				<div class="caller-helper">more</div>
			</div>
			</nav>
		</header>

<?php snippet ('full-menu') ?>
<?php snippet ('blackboard-intro') ?>
<?php snippet ('blackboard-full') ?>

