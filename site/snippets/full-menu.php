<section class="menu fixed-full-height">
	

	<div class="menu-header">
		<a class="header-link close-menu"><?php echo t('close') ?></a>

	</div>
	<div class="menu-container">
		<div class="main-menu lg-txt">
			<a class="agenda-caller"><?php echo t('calendar') ?></a>
			
			<?php foreach ($site->children()->listed()->limit(8) as $item): ?>
					 <a href="<?= $item->url() ?>" class="<?= $item->title() ?>"> <?= $item->title() ?> </a>
				<?php endforeach ?>
				
				<a class="application-caller"><?php echo t('apply') ?></a>
			<a class="Blackboard"><?php echo t('blb') ?></a>
			</div>

		<div class="secondary-menu">
			<ul>
			    <?php foreach($kirby->languages() as $language): ?>
			    <li<?php e($kirby->language() == $language, ' class="active"') ?>>
			      <a href="<?= $page->url($language->code()) ?>" hreflang="<?php echo $language->code() ?>">
			        <?= html($language->name()) ?>
			      </a>
			    </li>
			    <?php endforeach ?>
			    <li class=""><?= $pages->find('legal')->title() ?></li>
			    <li class=""><a href="https://aparelho.tv"><?= $pages->find('site-credits')->title() ?></a></li>
			  </ul>

			</div>
	</div>

		<div class="overlay close-menu"></div>

</section>
<?php snippet ('pre-agenda') ?>
