<nav class="shortcuts">
				<?php foreach ($site->children()->listed()->limit(2) as $item): ?>
				 <a href="<?= $item->url() ?>" class="<?= $item->title() ?>"> <?= $item->title() ?> </a>
			<?php endforeach ?>
				<a class="Blackboard">Blackboard</a>
				

				<div class="menu-caller">

					<?php snippet ('chat-icon') ?>

				<div class="caller-helper">more</div>
			</div>
			</nav>