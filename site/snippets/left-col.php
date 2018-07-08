<header class="col-3 border">
	<div class="fixedEl header-inner">
		<div class="logo">
			<div class="logo-text-wrapper center">
				<a href="<?php echo $site->url()?>" title="MaisonContour">
					<img src="<?php echo $site->url()?>/assets/images/logo-maisoncontour.svg" alt="Logo MaisonContour">
				</a>
			</div>
			<div class="logo-cible-wrapper">
				<a href="<?php echo $site->url()?>" title="MaisonContour">
					<img src="<?php echo $site->url()?>/assets/images/cible-03.png" alt="Logo MaisonContour">
				</a>
			</div>
		</div>
		<div class="menu-principal-wrapper menu">
			<ul class="menu-principal">
				<?php foreach($pages->visible()->slice(0,4) as $el):?>
					<li <?php e($el->isOpen(), ' class="active"') ?>>
						<a href="<?php echo $el->url() ?>" title="<?php echo $el->title()?>">
						<?php echo $el->title()->html()?>
						</a>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>
		<div class="menu-secondaire-wrapper menu">
			<ul class="menu-principal">
				<?php foreach($pages->visible()->slice(4,9) as $el):?>
					<li <?php e($el->isOpen(), ' class="active"') ?>>
						<a href="<?php echo $el->url() ?>" title="<?php echo $el->title()?>">
						<?php echo $el->title()->html()?>
						</a>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>
	
</header><!-- /header -->