

<section class="news">

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
					<?= $dailyitem->intro() ?>
				</div>
				<div class="first-images">
				</div>
				<div class="text">
					<?= $dailyitem->continued() ?>
				</div>
			</div>

		</div>
	</div>
	  <?php endforeach ?>
</section>