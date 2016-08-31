<?php
// Main Template
get_header(); ?>
<div class="container">
	<div class="row">
	<main id="main" class="col-xs-12 col-md-9 page pull-right">

		<?php if ( have_posts() ) : ?>
			<?php while (have_posts()) : the_post(); ?>
				<article id="post-not-found" class="hentry blog_post cf">
					<header class="article-header">
						<h3><?php the_title(); ?></h4>
						<hr />
					</header>
					<section class="entry-content clearfix">
						<div><?php the_content(); ?></div>
					</section>
					<footer class="article-footer">
						<div class="text-left">
							<b><?php _e('Posted by'); ?> <?php the_author(); ?> <?php _e('on'); ?> <?php the_time('M d, Y') ?></b>
						</div>
					</footer>
				</article>
			<?php endwhile; ?>
			<?php do_action('pagination'); ?>
			<div class="">
				<p></p>
                <div class="panel-group">
                    <div class="panel panel-default">
                        <div>
                            <div class="panel-body">
								<?php comments_template(); ?>
							</div>
                        </div>
                    </div>
                </div>
            </div>
			<p></p>
		<?php else : ?>

			<article id="post-not-found" class="hentry cf">
				<header class="article-header">
					<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
				</header>
				<section class="entry-content">
					<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
				</section>
				<footer class="article-footer">
					<p><?php _e( 'This is the error message in the index.php template.', 'bonestheme' ); ?></p>
				</footer>
			</article>

		<?php endif; ?>

	</main>
	<aside id="sidebar" class="col-xs-12 col-md-3">
		<?php get_sidebar(); ?>
	</aside>
	</div>
</div>
<?php get_footer(); ?>
