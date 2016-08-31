<?php
// Main Template
get_header(); ?>
<div class="container">
	<div class="row">
	<main id="main" class="col-xs-12 col-md-9 page pull-right">
		<?php
			the_archive_title( '<h1 class="h4">', '</h1>' );
			the_archive_description( '<div class="taxonomy-description">', '</div>' );
		?>
		<?php if ( have_posts() ) : ?>
			<p></p>
			<?php do_action('breadcrumb'); ?>
			<?php while (have_posts()) : the_post(); ?>
				<article id="post-not-found" class="hentry cf">
					<header class="article-header">
						<h3><a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></h4>
						<hr />
					</header>
					<div class="entry-thumbnail">
						<?php the_post_thumbnail(); ?>
					</div>
					<section class="entry-content blog clearfix">
						<div><?php excerpt('40','<span class="btn btn-success btn-xs pull-right">Read More</span>'); ?></div>
					</section>
					<footer class="article-footer">
						<div class="text-left">
							<b><?php _e('Posted by'); ?> <?php the_author(); ?> <?php _e('on'); ?> <?php the_time('M d, Y') ?></b>
						</div>
					</footer>
				</article>
			<?php endwhile; ?>
			<?php do_action('pagination'); ?>
			<p></p>
		<?php else : ?>

			<article id="post-not-found" class="hentry cf">
				<header class="article-header">
					<h1><?php _e( 'Oops, Post Not Found!' ); ?></h1>
				</header>
				<section class="entry-content">
					<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.' ); ?></p>
				</section>
				<footer class="article-footer">
					<p><?php _e( 'This is the error message in the index.php template.' ); ?></p>
				</footer>
			</article>

		<?php endif; ?>

	</main>
	<aside id="sidebar" class="clearfix col-xs-12 col-md-3">
		<?php get_sidebar(); ?>
	</aside>
	</div>
</div>
<?php get_footer(); ?>
