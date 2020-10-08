<html <?= site()->langAttr() ?>>
<head>
 <?= $page->htmlhead() ?>
 <?= $page->metaTags(['og', 'twitter', 'json-ld']) ?>

 <?= css(['assets/css/normalize.css', '@auto']) ?>
 <?= css(['assets/css/index.css', '@auto']) ?>

</head>

<body>
<header>
	<a href="<?= $site->url() ?>"><?= $site->title() ?></a>

	<nav class="shortcuts">
		<?php foreach ($site->children()->listed()->flip()->limit(2) as $item): ?>
		 <?= $item->title()->link() ?>
	<?php endforeach ?>
		<a href="#apply">Apply</a>
	</nav>

</header>