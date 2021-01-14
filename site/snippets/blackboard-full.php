<section class="blackboard-container">
	
	<?php foreach ($pages->find('blackboard')->children()->listed()->limit(1) as $currentblackboard): ?>

	<div class="blb-header">
		<div class="blb-header-container" style="display: flex;">
			<span class="blb-title"><?= $currentblackboard->title() ?></span>
			<span class="blb-close blackboard-dismiss">(<?php echo t('close') ?>)</span>

			<div class="blb-description">
				<?= $currentblackboard->description()->kirbytext() ?>
			</div>
		</div>
	</div>



	<div class="blb-images">
					 <?php foreach ($currentblackboard->images()->limit(22)  as $image): ?>
						      <img 
						      data-srcset="
						      <?= $image->srcset([300, 800, 1024]) ?>" 
						      class="content-image lazyload" 
						      data-sizes="auto"
						      data-expand="-20">
					  <?php endforeach ?>

	 <?php endforeach ?>
</section>