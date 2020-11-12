<section class="pre-agenda fixed-full-height">

	
<div class="agenda-container">
	<div class="current">
		<div class="menu-header agenda-header">
			Current
		</div>
	<?php foreach ($pages->find('agenda')->children()->unlisted()->sortBy('startdate', 'desc') as $current): ?>
		<div class="news-wrapper event-wrapper">
			<div class="news-item event-item transform-3d">
				<div class="date">
					<span><?= $current->startdate()->toDate('%d.%m') ?></span> 
					<span class="time"><?= $current->starttime() ?></span>
				</div>
				<div class="content">
					<div class="excerpt">
						<?= $current->title() ?>
					</div>

				</div>

			</div>
		</div>
		  <?php endforeach ?>
	</div>

		<div class="upcoming">
		<div class="menu-header agenda-header">
			Upcoming
		</div>
	<?php foreach ($pages->find('agenda')->children()->published()->unlisted()->sortBy('startdate', 'desc') as $futureevent): ?>
		<div class="news-wrapper event-wrapper">
			<div class="news-item event-item transform-3d">
				<div class="date">
					<span><?= $futureevent->startdate()->toDate('%d.%m') ?></span> 
					<span class="time"><?= $futureevent->starttime() ?></span>
				</div>
				<div class="content">
					<div class="excerpt">
						<?= $futureevent->title() ?>
					</div>

				</div>

			</div>
		</div>
		  <?php endforeach ?>
	</div>

			<div class="past">
		<div class="menu-header agenda-header">
			Previous
		</div>
	<?php foreach ($pages->find('agenda')->children()->listed()->sortBy('startdate', 'desc')->limit(3) as $pastevent): ?>
		<div class="news-wrapper event-wrapper">
			<div class="news-item event-item transform-3d">
				<div class="date">
					<span><?= $pastevent->startdate()->toDate('%d.%m') ?></span> 
					<span class="time"><?= $pastevent->starttime() ?></span>
				</div>
				<div class="content">
					<div class="excerpt">
						<?= $pastevent->title() ?>
					</div>

				</div>

			</div>
		</div>
		  <?php endforeach ?>
	</div>				  

	  <footer>
	  	<button>View Full Agenda</button>
	  </footer>
</div>
</section>