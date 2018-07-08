<?php snippet('header') ?>

<div class="container">
  <div class="row">

		<?php snippet('left-col') ?>
		<main class="col-7 border">
			<?php snippet('menu-top') ?>
			<div class="content">
				<ul class="projets row">
					<?php foreach($page->children()->visible() as $child):?>
						<li class="projet col-4">
							<a href="<?php echo $child->url()?>" title="<?php echo $child->title()?>">
								<?php if($child->thumb()->isNotEmpty()):
									echo thumb($child->thumb()->toFile(), array('width' => 600, 'height' => 420, 'crop' => true));
								endif; ?>
								<h2>
									<?php echo $child->year()->html()?><br>
									<?php echo $child->title()->html()?>
								</h2>
							</a>
						</li>
					<?php endforeach;?>
				</ul>
			</div>
		</main>
	</div>
</div>


<?php snippet('footer') ?>
