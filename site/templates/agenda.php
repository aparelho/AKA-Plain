<?php snippet ('header-internal') ?>



<main class="pre-agenda full-agenda">
<div class="agenda-container">
	<?php foreach ($pages->find('agenda')
							->children()
							->listed()
							->sortBy('startdate', 'desc')


							as $current): ?>


		<div class="news-wrapper event-wrapper lg-txt">
			<div class="news-item event-item transform-3d">
				<div class="date">
					<?php if($current->enddate() != ''): ?>
					<span><?= $current->startdate()->toDate('%d.%m.%y') ?></span><br>
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
				</div>

				<div class="time">
					<?php if($current->endtime() != ''): ?>
					<span><?= $current->starttime() ?></span>—<br>
						<span><?= $current->endtime() ?></span>
					<?php else: ?>
						<span><?= $current->starttime() ?></span>
					<?php endif ?> 		
				</div>

				<div class="kind">
					<?php $tags = $current->tags()->split(); ?>
						<ul>
							<?php foreach($tags as $tag): ?>
							  <!-- change link to the page that lists all articles if necessary -->
							  <li><a class="<?php echo $tag ?>" href="<?php echo url('daily/tag:' . urlencode($tag)) ?>"><?php echo $tag ?></a></li>
							<?php endforeach ?>
						</ul>
				</div>
			</div>

			<div class="event-details">
				<div class="details">
					<span><?= $current->who() ?></span>
					<span><?= $current->where() ?></span>
				</div>
				<div class="event-description">
					<?= $current->agendatxt()->kirbytext() ?>
				</div>
				<div>
					<?php foreach ($current->images()->limit(2)  as $image): ?>
						      <img 
						      data-srcset="
						      <?= $image->srcset([300, 800, 1024]) ?>" 
						      class="content-image lazyload" 
						      data-sizes="auto"
						      data-expand="-50">
					  <?php endforeach ?>
				</div>

			</div>

		</div>
		  <?php endforeach ?>
</div>
</main>


<?php snippet ('footer') ?>