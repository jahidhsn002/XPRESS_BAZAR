<?php
// Main Template
get_header(); ?>
<div class="container">
	<div class="row">
	<main id="main" class="col-xs-9 page pull-right">
		<article class="hentry text-center"></article>
		<article id="404" class="hentry text-center">
			<header class="article-header">
				<h1 style="font-size:500%"><?php _e( '404!' ); ?></h1>
				<h1><?php _e( 'Oops, Item Not Found!' ); ?></h1>
			</header>
			<section class="entry-content">
				<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.' ); ?></p>
			</section>
			<footer class="article-footer">
				<p><?php _e( 'This is the error message in the index.php template.' ); ?></p>
			</footer>
		</article>
		<article class="hentry text-center"></article>
	</main>
	<aside id="sidebar" class="col-xs-3">
		<?php get_sidebar(); ?>
	</div>
	</div>
</div>
<?php get_footer(); ?>
