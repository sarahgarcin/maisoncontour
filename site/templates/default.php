<?php snippet('header') ?>

<div class="container">
  <div class="row">

		<?php snippet('left-col') ?>
		<main class="col-7 border">
			<?php snippet('menu-top') ?>
			<div class="content">
				<h1><?php echo $page->title()->html()?></h1>
				<?php if($page->thumb()->isNotEmpty()):?>
					<figure>
						<?php $pic = $page->thumb()->toFile();?>
						<img src="<?php echo $pic->url()?>" alt="<?php echo $page->title()?>">
						<?php if($pic->caption()->isNotEmpty()):?>
							<figcaption><?php echo $pic->caption()?></figcaption>
						<?php endif; ?>
					</figure>
				<?php endif; ?>
				<?php echo $page->text()->kt(); ?>
			</div>
		</main>
	</div>
</div>


<?php snippet('footer') ?>
