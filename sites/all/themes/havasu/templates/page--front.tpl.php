<?php // page template ?>
<div id="wrap">
<div id="allbutend">
<!-- top band that is full width-->
	<div id="top">
			<div class="fixed">
		        <?php if ($main_menu): ?>
			      <div id="main-menu">
			        <?php print theme('links__system_main_menu', array(
			          'links' => $main_menu,
			          'attributes' => array(
			            'id' => 'main-menu-links',
			            'class' => array('links', 'clearfix'),
			          ),
			          'heading' => array(
			            'text' => t('Main menu'),
			            'level' => 'h2',
			            'class' => array('element-invisible'),
			          ),
			        )); ?>
			      </div> <!-- /#main-menu -->
			    <?php endif; ?>
			<?php print render($page['search']); ?>
			</div><!-- /.fixed -->
	</div><!-- /#top -->
<!-- start portion of site that's a fixed width container -->
<div class="fixed">   	
	<div id="branding" class="clearfix">
    <!-- logo -->
		<?php if ($logo): ?>
      <div id="logo">
				<a href="<?php print $base_path; ?>" title="<?php print t('Home'); ?>"><img src="<?php print $logo ?>"alt="<?php print t('Home'); ?>" /></a>
			</div>
		<?php endif; ?>
    <!-- site name -->
		<?php if ($site_name): ?>
			<div id="sitename">
				<h1><a href="<?php print $base_path ?>" title="<?php print t('Home')?>"><?php print $site_name; ?></a></h1>
			</div>
		<?php endif; ?>
		<div class="social"><?php print render($page['social']); ?></div>
  </div><!-- /#branding -->
	<div id="featured">
		<?php print render($page['slides']); ?>
    <!-- Slideshow -->
		<div id="slideshow">
			<div id="slides">
				<div class="slides_container">
					<div class="slide">
						<img src="sites/all/themes/havasu/images/bunga_kantan.jpg" width="960" height="300" alt="Slide 1">
						<div class="caption" style="bottom:0">
							<p>Etlingera elatior<br/><br/>
							Torch ginger is a species of herbaceous perennial plant from the family of Zingiberaceae. Leaves of <i>E. eliator</i> have high antioxidant, antibacterial, and tyrosinase inhibition activity.<br/><br/>
							<a href="node/9654">Read more</a></p>
						</div>
					</div>
					<div class="slide">
						<img src="sites/all/themes/havasu/images/Coriander.jpg" width="960" height="300" alt="Slide 2">
						<div class="caption">
							<p>Coriandrum sativum<br/><br/>
							Coriender is an annual herb in the family Apiaceae. Coriander contains antioxidants, traditional treatment for diabetes, and relief of anxiety and insomnia.<br/><br/>
							<a href="node/6605">Read more</a></p>
						</div>
					</div>
					<div class="slide">
						<img src="sites/all/themes/havasu/images/pegaga.jpg" width="960" height="300" alt="Slide 3">
						<div class="caption">
							<p>Centella asiatica<br/><br/>
							Asian pennywort is a small, herbaceous, annual plant of family Mackinlayaceae. It is used as a medicinal herb in Indian, African, and Chinese traditional medicine.<br/><br/>
							<a href="node/5169">Read more</a></p>
						</div>
					</div>
					<div class="slide">
						<img src="sites/all/themes/havasu/images/whitepepper.jpg" width="960" height="300" alt="Slide 4">
						<div class="caption">
							<p>Piper nigrum<br/><br/>
							White pepper originated from the same species as black pepper which is from the family of Piperaceae. Among other benefits, pepper contain piperine that accelerates energy metabolism in the body.<br/><br/>
							<a href="node/18183">Read more</a></p>
						</div>
					</div>
					<div class="slide">
						<img src="sites/all/themes/havasu/images/kunyit.jpg" width="960" height="300" alt="Slide 5">
						<div class="caption">
							<p>Curcuma longa<br/><br/>
							Turmeric is a rhizomatus herbacous perennial plant of the ginger family, Zingiberaceae. Turmeric is currently a potential benefit in Alzheimer's disease, cancer, arthritis, and other clinical disorders.<br/><br/>
							<a href="node/7168">Read more</a></p>
						</div>
					</div>
				</div>
				<a href="#" class="prev"><img src="sites/all/themes/havasu/images/arrow-prev.png" width="30" height="30" alt="Arrow Prev"></a>
				<a href="#" class="next"><img src="sites/all/themes/havasu/images/arrow-next.png" width="30" height="30" alt="Arrow Next"></a>
			</div>
		</div><!-- /#Slideshow -->
		</div><!-- /#featured -->
<div id="box" class="clearfix">
  <!-- Region: Content -->
	<div id="main">
		<div id="content" class="clearfix">
			<!-- title -->
			<?php if ($title): ?>
				<h2 class="content-title"><?php print $title; ?></h2>
			<?php endif; ?>
			<?php print render($tabs); ?>
			<?php print render($help); ?>
			<?php print render($messages); ?>
        	<?php print render($page['content']); ?>
    </div>
		<!-- Region: Sidebar One -->
		<?php if ($page['sidebar_first']): ?>
     	<div class="bar">
				<?php print render($page['sidebar_first']); ?>
			</div>
		<?php endif; ?>		
		<!-- Region: Sidebar Two -->
		<?php if ($page['sidebar_second']): ?>
			<div class="bar">
				<?php print render($page['sidebar_second']); ?>
			</div>
    <?php endif; ?>
	</div><!-- fixed width container area ends -->
</div>
</div>

</div><!-- /#allbutend -->
</div><!-- /#wrap -->

<div id="end" class="clearfix">

<!-- bottom band that is full width-->
<?php if ($page['footer_first'] || $page['footer_second'] || $page['footer_third']): ?>
<div id="footer" class="clearfix">
	<div class="fixed">
	<!-- Region: Footer Left -->
	<?php if ($page['footer_first']): ?>
		<div class="footerblock">
			<?php print render($page['footer_first']); ?>
		</div>
  <?php endif; ?>
	<!-- Region: Footer Middle -->
	<?php if ($page['footer_second']): ?>
		<div class="footerblock">
			<?php print render($page['footer_second']); ?>
		</div>
  <?php endif; ?>
	<!-- Region: Footer Right -->
	<?php if ($page['footer_third']): ?>
		<div class="footerblock last">
			<?php print render($page['footer_third']); ?>
		</div>
  <?php endif; ?>
 </div><!-- /.fixed -->
</div><!-- /footer -->
<?php endif; ?>


	<div class="fixed">
	<!-- Region: Credits -->
	<?php if ($page['credits']): ?>
		<div class="credits">
			<?php print render($page['credits']); ?>
		</div>
  <?php endif; ?>
 </div><!-- /.fixed -->
</div><!-- /#end -->