<section class="menu fixed-full-height">
	

	<div class="menu-header">
		<a class="header-link application-caller">Apply</a>
		<a href=" <?= $pages->find('about')->url() ?>" class="header-link">Contact</a>
		<a class="header-link close-menu">Close</a>

	</div>
	<div class="menu-container">
		<div class="main-menu lg-txt">
			<a class="agenda-caller">Agenda</a>
			<?php foreach ($site->children()->listed()->flip()->limit(3) as $item): ?>
					 <a href="<?= $item->url() ?>" class="<?= $item->title() ?>"> <?= $item->title() ?> </a>
				<?php endforeach ?>
				<a class="Blackboard">Blackboard</a>
			</div>

		<div class="secondary-menu">

			</div>
	</div>
</section>
<?php snippet ('pre-agenda') ?>