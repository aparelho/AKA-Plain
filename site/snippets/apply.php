<section id="application" class="shadow">
	<div class="lines-bg brown-border"></div>
	<div class="lines-bg  blue-border"></div>
	<div class="lines-bg  green-border"></div>

	<div class="apply-content">

		<?= $pages->find('apply')->text()->kirbytext() ?>
		
	</div>

	<button class="close application-caller"> <?php echo t('back') ?> </button>
</section>