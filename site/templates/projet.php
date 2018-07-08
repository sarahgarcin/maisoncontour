<?php snippet('header') ?>

<div class="container">
  <div class="row">

		<?php snippet('left-col') ?>
		<main class="col-7 border">
			<?php snippet('menu-top') ?>
			<div class="content offset-md-1 col-10">
				<h2><?php echo $page->year()->html()?></h2>
				<h1><?php echo $page->title()->html()?></h1>
				<?php echo $page->text()->kt(); ?>
				<?php if($page->imagesProject()->isNotEmpty()):?>
					<ul class="images-list row">
						<?php $filenames = $page->imagesProject()->split(',');
							if(count($filenames) < 2) $filenames = array_pad($filenames, 2, '');
							$files = call_user_func_array(array($page->files(), 'find'), $filenames);
							foreach($files as $file):?>
								<li class='col-6'>
									<img src="<?php echo $file->url()?>" alt="<?php echo $page->title()?>">
								</li>
							<?php endforeach?>
					</ul>
				<?php endif ?>	
			</div>
		</main>
	</div>
</div>


<?php snippet('footer') ?>
