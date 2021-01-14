<?php snippet ('header-internal') ?>

<main class="about-content">

	<div class="text-content">

			<div id="about" class="lg-txt">
				<?= $page->text()->kirbytext() ?>
			</div>

		<div class="second-text md-txt">
				<div id="area">
					<h2><?= $page->secondtitle()->kirbytext() ?></h2>
					<?= $page->second()->kirbytext() ?>
				</div>

				<div id="programme">
					<h2><?= $page->thirdtitle()->kirbytext() ?></h2>
					<?= $page->third()->kirbytext() ?>
				</div>

				<div id="background">
					<h2><?= $page->fourthtitle()->kirbytext() ?></h2>
					<?= $page->fourth()->kirbytext() ?>
				</div>
		</div>

		</div>
	<?php snippet ('about-slider') ?>

	<nav class="about-nav md-txt">
		<ul>
			<a href="<?= $page->url().'#about' ?>"><li>Intro</li></a>
			<a href="<?= $page->url().'#area' ?>"><li><?= $page->secondtitle() ?></li></a>
			<a href="<?= $page->url().'#programme' ?>"><li><?= $page->thirdtitle() ?></li></a>
			<a href="<?= $page->url().'#background' ?>"><li><?= $page->fourthtitle()?></li></a>
		</ul>
	</nav>

</main>


<?php snippet ('footer') ?>