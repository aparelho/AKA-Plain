<section class="pre-agenda fixed-full-height">
	<div class="menu-header agenda-header">
		Upcoming
	</div>
	
<div class="agenda-container">
<?php foreach ($pages->find('agenda')->children()->listed()->sortBy('startdate', 'desc') as $event): ?>
	<div class="news-wrapper event-wrapper">
		<div class="news-item event-item transform-3d">
			<div class="date">
				<span><?= $event->startdate()->toDate('%d.%m') ?></span> 
				<span class="time"><?= $event->starttime() ?></span>
			</div>
			<div class="content">
				<div class="excerpt">
					<?= $event->title() ?>
				</div>

			</div>

		</div>
	</div>
	  <?php endforeach ?>

	  <footer>
	  	<button>View Full Agenda</button>
	  </footer>
</div>
</section>