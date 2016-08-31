<?php
// Main Template
get_header(); ?>
<div class="container">
	<div class="row">
	<main id="main" class="col-xs-9 page pull-right">
		<h4>Result For "<?php echo $_GET['s']; ?>"</h4>
		<?php if ( have_posts() ) : ?>
			<?php while (have_posts()) : the_post(); ?>
				<article id="post-not-found" class="hentry cf">
					<header class="article-header">
						<h4><a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></h4>
					</header>
					<section class="entry-content blog clearfix">
						<div><?php excerpt('10','<span class="btn btn-success btn-xs pull-right">Read More</span>'); ?></div>
					</section>
				</article>
			<?php endwhile; ?>
			<?php do_action('pagination'); ?>
			<p></p>
		<?php else : ?>

			<article id="post-not-found" class="hentry cf">
				<header class="article-header">
					<h1><?php _e( 'Oops, Result Not Found!' ); ?></h1>
				</header>
				<section class="entry-content">
					<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.' ); ?></p>
				</section>
				<footer class="article-footer">
					<p><?php _e( "Your Search Didn't Match ....." ); ?></p>
				</footer>
			</article>

		<?php endif; ?>

	</main>
	<aside id="sidebar" class="col-xs-3">
		<?php get_sidebar(); ?>
	</div>
	</div>
</div>
<?php get_footer(); ?>
