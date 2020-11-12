<section class="menu fixed-full-height">
	

	<div class="menu-header">
		<a class="header-link application-caller">Apply</a>
		<a href=" <?= $pages->find('about')->url() ?>" class="header-link">About</a>
		<a href=" <?= $pages->find('about')->url() ?>" class="header-link">Contact</a>
		<a class="header-link close-menu">Close</a>

	</div>
	<div class="agenda-caller">
		Agenda
	</div>
</section>
<?php snippet ('pre-agenda') ?>