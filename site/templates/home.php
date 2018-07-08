<?php snippet('header') ?>

<div class="container">
  <div class="row">

		<?php snippet('left-col') ?>
		<main class="col-7 border">
			<?php snippet('menu-top') ?>
			<div class="content">
				<div class="image-home">
					<?php $image = $page->accueilImage()->toFile()?>
					<figure>
						<img src="<?php echo $image->url()?>" alt="<?php echo $image->name()?>">
						<figcaption><?php echo $image->caption()->kt()?></figcaption>
					</figure>
					
				</div>
			</div>
		</main>
	</div>
</div>


<?php snippet('footer') ?>
