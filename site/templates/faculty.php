<?php snippet ('header-internal') ?>


<main class="faculty-main">
	<span class="mobile-only lg-txt collab-closer"><?php echo t('close') ?></span>

<div class="members lg-txt">
	<span class="title member-title"><?php echo t('members') ?></span>
		<ul>
		<?php 
		// using the `toStructure()` method, we create a structure collection
		$members = $page->members()->toStructure();
		// we can then loop through the entries and render the individual fields
		foreach ($members as $member): ?>
			<li class="collab-expand">
		  <span><?= $member->name() ?></span>
		  <div class="collab-details permanent-details">
		  
			  <?php foreach ($member->pic()->toFiles() as $pic): ?>
			    <img data-srcset="
						      <?= $pic->srcset([300, 800, 1024]) ?>" 
						      class="lazyload" 
						      data-sizes="auto"
						      >
			  <?php endforeach ?>
			  <div class="information">
				  <span><?= $member->pos() ?></span>
				  <p><?= $member->descr()->kirbytext() ?></p>
				</div>
			</div>
		</li>
		<?php endforeach ?>
	</ul>
</div>

<div class="collaborators lg-txt">
		<span class="title member-title"><?php echo t('collab') ?></span>
	<ul>
		<?php 
		// using the `toStructure()` method, we create a structure collection
		$collaborators = $page->collabs()->toStructure();
		// we can then loop through the entries and render the individual fields
		foreach ($collaborators as $collab): ?>
			<li class="collab-expand">
		  <span><?= $collab->cname() ?></span>
		  <div class="collab-details permanent-details">
			  
			  <?php foreach ($collab->cpic()->toFiles() as $pic): ?>
			    <img data-srcset="
						      <?= $pic->srcset([300, 800, 1024]) ?>" 
						      class="lazyload" 
						      data-sizes="auto"
						      >
			  <?php endforeach ?>
			  <div class="information">
				  <span><?= $collab->cpos() ?></span>
				  <p><?= $collab->cdescr()->kirbytext() ?></p>
				</div>
			</div>
		</li>
		<?php endforeach ?>
	</ul>
</div>
</div>
</main>


<?php snippet ('footer') ?>