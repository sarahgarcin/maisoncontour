<?php snippet('header') ?>

<div class="container">
  <div class="row">

		<?php snippet('left-col') ?>
		<main class="col-7 border">
			<?php snippet('menu-top') ?>
			<div class="content">
				<ul class="liste">
					<?php foreach($page->children()->visible() as $child):?>
						<li>
							<h2><?php echo $child->title()->html()?></h2>
							<?php if($child->thumb()->isNotEmpty()):
								echo thumb($child->thumb()->toFile(), array('width' => 400, 'height' => 100, 'crop' => true));
							endif; ?>
							<?php echo str::excerpt($child->text()->kirbytext(), 250, false) ?>
							<p><a href="<?php echo $child->url()?>" title="<?php echo $child->title()?>">Lire la suite</a></p>
						</li>
					<?php endforeach;?>
				</ul>
			</div>
		</main>
	</div>
</div>


<?php snippet('footer') ?>
