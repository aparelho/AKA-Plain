<!DOCTYPE html>
<html <?= site()->langAttr() ?>>
<head>
 <?= $page->htmlhead() ?>
 <?= $page->metaTags(['og', 'twitter', 'json-ld']) ?>

 <?= css(['assets/css/normalize.css', '@auto']) ?>
 <?= css(['assets/css/index.css', '@auto']) ?>

 <script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
 <?= js(['assets/js/app.js']) ?>

</head>

<body>
	<div class="global-wrapper">
		<header>
			<a href="<?= $site->url() ?>">
				<img class="logo" alt="Agder Kunstakademi Logo" src="<?php echo url('assets/images/aka-logo-core.svg') ?>">
			</a>

			<nav class="shortcuts">
				<?php foreach ($site->children()->listed()->flip()->limit(2) as $item): ?>
				 <?= $item->title()->link() ?>
			<?php endforeach ?>
				<a href="#apply">Apply</a>

				<div class="menu-caller">
				<button>
					<div class="round first"></div>
					<div class="round second"></div>
					<div class="round third"></div>
				</button>
				<div class="caller-helper">more</div>
			</div>
			</nav>
		</header>

<?php snippet ('full-menu') ?>
