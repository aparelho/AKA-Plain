

<section class="news">
	<div class="news-controls">
		<div class="title">
			<?php echo t('journal') ?>
		</div>
		<!--<div class="filtering">
			Filter
		</div>
		<div class="expand">
			<button>All</button>
		</div>-->
	</div>

<?php foreach ($pages->find('daily')->children()->listed()->sortBy('date', 'desc') as $dailyitem): ?>
	<div class="news-wrapper shadow-inset">
		<div class="news-item transform-3d">
			<div class="date">
				<?= $dailyitem->date()->toDate('%d.%m.%y') ?>
			</div>
			<div class="tags">
				<?php
				  $tags = $dailyitem->tags()->split(); 
				?>
				<ul>
				<?php foreach($tags as $tag): ?>
				  <!-- change link to the page that lists all articles if necessary -->
				  <li><a class="<?php echo $tag ?>" href="<?php echo url('daily/tag:' . urlencode($tag)) ?>"><?php echo $tag ?></a></li>
				<?php endforeach ?>
				</ul>
				
			</div>
			<div class="content lg-txt">
				<div class="excerpt">
						<div class="previous-images">

					 <?php foreach ($dailyitem->images()->limit(2) as $imagex): ?>
						     <img data-srcset="
						      <?= $imagex->srcset([50, 120, 200]) ?>" class="lazyload">
					  <?php endforeach ?>
				</div>
					<?= $dailyitem->intro() ?>
				</div>
				<div class="news-images">
					 <?php foreach ($dailyitem->images()->limit(1)  as $image): ?>
						      <img 
						      data-srcset="
						      <?= $image->srcset([300, 800, 1024]) ?>" 
						      class="content-image lazyload" 
						      data-sizes="auto"
						      data-expand="-50">
					  <?php endforeach ?>
				</div>
				<div class="text md-txt">
					<?= $dailyitem->continued() ?>
				</div>
			</div>

		</div>
	</div>
	  <?php endforeach ?>
</section>