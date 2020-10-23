

<section class="news">
	<div class="news-controls">
		<div class="title">
			Daily
		</div>
		<div class="filtering">
			Filter
		</div>
		<div class="expand">
			<button>All</button>
		</div>
	</div>

<?php foreach ($pages->find('daily')->children()->listed()->sortBy('date', 'desc') as $dailyitem): ?>
	<div class="news-wrapper shadow-inset">
		<div class="news-item transform-3d">
			<div class="date">
				<?= $dailyitem->date()->toDate('%d.%m') ?></span>
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
			<div class="content">
				<div class="excerpt">
						<div class="previous-images">

					 <?php foreach ($dailyitem->images()->limit(3) as $imagex): ?>
						     <img srcset="
						      <?= $imagex->srcset([50, 120, 200]) ?>">
					  <?php endforeach ?>
				</div>
					<?= $dailyitem->intro() ?>
				</div>
				<div class="news-images">
					 <?php foreach ($dailyitem->images()->limit(4)  as $image): ?>
						      <img srcset="
						      <?= $image->srcset([300, 800, 1024]) ?>">
					  <?php endforeach ?>
				</div>
				<div class="text">
					<?= $dailyitem->continued() ?>
				</div>
			</div>

		</div>
	</div>
	  <?php endforeach ?>
</section>