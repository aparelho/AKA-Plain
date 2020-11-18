<section class="pre-agenda fixed-full-height">

	
<div class="agenda-container">
	<div class="current">
		<div class="menu-header agenda-header">
			Events
		</div>
	<?php foreach ($pages->find('agenda')
							->children()
							->listed()
							->sortBy('startdate', 'desc')
							->limit(20) 


							as $current): ?>


		<div class="news-wrapper event-wrapper lg-txt">
			<div class="news-item event-item transform-3d">
				<div class="date">
					<span><?= $current->startdate()->toDate('%d.%m.%y') ?></span> 
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

	  <footer>
	  	<button>View Full Agenda</button>
	  </footer>
</div>
</section>