<?php snippet ('header-internal') ?>

<main class="about-content">

	<div class="main-info">
		<?= $page->text()->kirbytext() ?>
	</div>

<div class="columns">
	<div class="column left-column">
		
		<div class="practical-info">
			<?= $page->practical()->kirbytext() ?>
		</div>

		<div class="background-info">
			<?= $page->bg()->kirbytext() ?>
		</div>


	</div>

	<div class="column right-column">

	<?= $page->sectext()->kirbytext() ?>

	</div>
</div>

</main>


<?php snippet ('footer') ?>