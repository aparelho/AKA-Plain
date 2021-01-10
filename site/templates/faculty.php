<?php snippet ('header-internal') ?>

<main class="faculty-main">


<div class="members lg-txt">
	<span class="title member-title">Members</span>
		<ul>
		<?php 
		// using the `toStructure()` method, we create a structure collection
		$members = $page->members()->toStructure();
		// we can then loop through the entries and render the individual fields
		foreach ($members as $member): ?>
			<li>
		  <span><?= $member->name() ?></span>
		  <div class="collab-details">
			  
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
	<span class="title collaborator-title">Collaborators</span>
	<ul>
		<?php 
		// using the `toStructure()` method, we create a structure collection
		$collaborators = $page->collabs()->toStructure();
		// we can then loop through the entries and render the individual fields
		foreach ($collaborators as $collaborator): ?>
			<li>
			  <span><?= $collaborator->cname() ?></span>
			  <div class="collab-details">
				  <?php foreach ($collaborator->cpic()->toFiles() as $cpic): ?>
				    <img data-srcset="
						      <?= $cpic->srcset([300, 800, 1024]) ?>" 
						      class="lazyload" 
						      data-sizes="auto"
						      >
				  <?php endforeach ?>
					  <div class="information">
						  <span><?= $collaborator->cpos() ?></span>
						  <p><?= $collaborator->cdescr()->kirbytext() ?></p>
					</div>
				</div>
			</li>
		<?php endforeach ?>
	</ul>
</div>
</main>


<?php snippet ('footer') ?>