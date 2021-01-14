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
					<?php if($current->enddate() != ''): ?>
					<span><?= $current->startdate()->toDate('%d.%m') ?></span>
						<span>—<?= $current->enddate()->toDate('%d.%m.%y') ?></span>
					<?php else: ?>
						<span><?= $current->startdate()->toDate('%d.%m.%y') ?></span>
					<?php endif ?> 		
					<!--<span class="time"><?= $current->starttime() ?></span>-->
				</div>
				<div class="content">
					<div class="excerpt">
						<?= $current->title() ?>
					</div>

				<?php
				  $tags = $current->tags()->split(); 
				?>
				<ul>
				<?php foreach($tags as $tag): ?>
				  <!-- change link to the page that lists all articles if necessary -->
				  <li><a class="<?php echo $tag ?>" href="<?php echo url('daily/tag:' . urlencode($tag)) ?>"><?php echo $tag ?></a></li>
				<?php endforeach ?>
				</ul>

				</div>

			</div>
		</div>
		  <?php endforeach ?>
	</div>

	  <footer>
	  	<a href="<?= $pages->find('agenda')->url() ?>"><button>View Full Agenda</button></a>
	  </footer>
</div>
</section>