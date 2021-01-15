<nav class="shortcuts">
		
				<a href="<?= $pages->find('about')->url() ?>" class="<?= $pages->find('about')->title() ?>"> <?= $pages->find('about')->title() ?> </a>
				<a href="<?= $pages->find('archive')->url() ?>" class="<?= $pages->find('archive')->title() ?>"> <?= $pages->find('archive')->title() ?> </a>
				<a class="Blackboard"><?php echo t('blb') ?></a>
				

				<div class="menu-caller">

					<?php snippet ('chat-icon') ?>

				<div class="caller-helper"><?php echo t('more') ?></div>
			</div>
			</nav>