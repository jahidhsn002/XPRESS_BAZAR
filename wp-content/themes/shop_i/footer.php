	<div class="clearfix footer_ttop">
		<a class="pull-left" href="<?php echo bellaAdminPageFramework::getOption( 'Theme_Option', 'link_01', home_url().'/?p=148' ); ?>">
			<img width="100%" src="<?php echo get_template_directory_uri(); ?>/images/slider/footer_top_01.png">
		</a>
		<a class="pull-left" href="<?php echo bellaAdminPageFramework::getOption( 'Theme_Option', 'link_02', home_url().'/?p=181' ); ?>">
			<img width="100%" src="<?php echo get_template_directory_uri(); ?>/images/slider/footer_top_02.png">
		</a>
		<a class="pull-left" href="<?php echo bellaAdminPageFramework::getOption( 'Theme_Option', 'link_03', home_url().'/?p=183' ); ?>">
			<img width="100%" src="<?php echo get_template_directory_uri(); ?>/images/slider/footer_top_03.png">
		</a>
		<a class="pull-left" href="<?php echo bellaAdminPageFramework::getOption( 'Theme_Option', 'link_04', home_url().'/?p=183' ); ?>">
			<img width="100%" src="<?php echo get_template_directory_uri(); ?>/images/slider/footer_top_04.png">
		</a>
		<a class="pull-left" href="<?php echo bellaAdminPageFramework::getOption( 'Theme_Option', 'link_05', home_url().'/?p=181' ); ?>">
			<img width="100%" src="<?php echo get_template_directory_uri(); ?>/images/slider/footer_top_05.png">
		</a>
	</div>
	<div class="container">
		<h4 class="text-right cctv"><a href="<?php echo the_permalink(); ?>">Latest Blog Posts</a></h4>
		<div class="row">
			<?php query_posts('post_type=post&post_status=publish&post_per_page=3'); ?>
			<?php if ( have_posts() ) : ?>
				<?php while (have_posts()) : the_post(); ?>
					<article id="post-has-found" class="cf col-sm-3">
						<div class="homeeee blog_post">
							<header class="article-header">
								<h4><a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></h4>
							</header>
							<section class="entry-content blog text-justify clearfix">
								<div><?php excerpt('20','<hr/><span class="btn btn-success btn-xs pull-right">Read More</span>'); ?></div>
							</section>
						</div>
					</article>
				<?php endwhile; ?>
				<p></p>
			<?php endif; ?>
		</div>
	</div>
	<p></p>
	<footer id="footer" >
		<div class="footer_bg"></div>
		<p></p>
		<div class="container">
			<div class="row"> 
				<div class="col-xs-12">
					<div class="row">
						<div class="col-xs-12 col-sm-3">
							<h4 class="h4 text-center about">
								Membership
							</h4>
							<p>&nbsp;</p>
							<p class="text-justify">
								<?php echo bellaAdminPageFramework::getOption( 'Theme_Option', 'membership_content','W3Schools is optimized for learning, testing, and training.Examples might be simplified to improve reading and basic' ); ?>
							</p>
							<p class="text-center">
								<img width="100%" alt="ecab" src="<?php echo bellaAdminPageFramework::getOption( 'Theme_Option','membership_img', get_template_directory_uri().'/images/ecab.jpg'); ?>">
							</p>
						</div>
						<div class="col-xs-12 col-sm-3 site_map">
							<h4 class="h4 text-center sitemap">
								Sitemap
							</h4>
							<p>&nbsp;</p>
							<p class="text-justify">
								<?php wp_nav_menu( array( 
									'theme_location' => 'secondary',
									'menu_class' => 'text-left',
									'menu_id' => 'secondary'
								) ); ?>
							</p>
						</div>
						<div class="col-xs-12 col-sm-3">
							<h4 class="h4 text-center follow">
								Follow Us
							</h4>
							<p>&nbsp;</p>
							<div class="text-justify clearfix follow">
								<ul class='text-left'>
									<li class="pull-left"><a class="facebook" href="<?php echo bellaAdminPageFramework::getOption( 'Theme_Option', 'fb_link','#'); ?>">
										<img src="<?php echo get_template_directory_uri(); ?>/images/facebook.png" >
									</a></li>
									<li class="pull-left"><a class="twiter" href="<?php echo bellaAdminPageFramework::getOption( 'Theme_Option', 'tw_link','#'); ?>">
										<img src="<?php echo get_template_directory_uri(); ?>/images/twiter.png" >
									</a></li>
									<li class="pull-left"><a class="google" href="<?php echo bellaAdminPageFramework::getOption( 'Theme_Option', 'go_link','#'); ?>">
										<img src="<?php echo get_template_directory_uri(); ?>/images/google.png" >
									</a></li>
									<li class="pull-left"><a class="rss" href="<?php echo bellaAdminPageFramework::getOption( 'Theme_Option', 'rs_link','#'); ?>">
										<img src="<?php echo get_template_directory_uri(); ?>/images/rss.png" >
									</a></li>
								</ul>
							</div>
							<p>&nbsp;</p>
							<?php dynamic_sidebar( 'sidebar-2' ); ?>
						</div>
						<div class="col-xs-12 col-sm-3">
							<h4 class="h4 text-center address">
								Address
							</h4>
							<p>&nbsp;</p>
							<div class="text-right">
								<?php echo bellaAdminPageFramework::getOption( 'Theme_Option', 'address','
								<b>CORPORATE</b>
								<br/>
								NEWMARKET <br/>
								SHERPUR-2100 <br/>
								CELL : 01740588988 
								<p>&nbsp;</p>
								<hr/>
								<b>CORPORATE</b>
									<br/>
								BARI-DHARA <br/>
								DHAKA-100 <br/>
								CELL : 01740588988
								' ); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-3">
						<a class="pull-left" href="<?php echo home_url(); ?>/?p=181">
							<img alt="Payment Method" src="<?php echo bellaAdminPageFramework::getOption( 'Theme_Option','pay_img_01', get_template_directory_uri().'/images/payment_01.gif'); ?>">
						</a>
					</div>
					<div class="col-xs-12 col-sm-3">
						<a class="pull-left" href="<?php echo home_url(); ?>/?p=181">
							<img alt="Payment Method" src="<?php echo bellaAdminPageFramework::getOption( 'Theme_Option','pay_img_02', get_template_directory_uri().'/images/payment_02.jpg'); ?>">
						</a>
					</div>
					<div class="col-xs-12 col-sm-6 text-right">
						A Sister Concern Of 
						<a href="http://ekattorITsolution.com">
							ekattorITsolution.com
						</a>
					</div>
				</div>
			</div>
		</div>
		<?php do_action('site_footer'); ?>
	</footer><!-- #colophon -->

</div><!-- #page -->
<a class="topppp btn btn-primary" href="#page">Go Top</a>
<?php wp_footer(); ?>
<script>
	jQuery('#sidebar .widget .content ul li ul').click(function(){
		jQuery(this).toggleClass('expand');
	});
</script>
</body>
</html>
