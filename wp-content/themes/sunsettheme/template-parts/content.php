<?php
/*
@package sunsettheme

	================================
	SUNSET STANDARD POST FORMAT
	================================
*/

/* Standard Post Format Markup */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php //the_title('<h1 class"entry-title">', '</h1>'); ?>
		<?php /** @noinspection HtmlUnknownTarget */
		the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
		<div class="entry-meta">
			<?php echo sunset_posted_meta(); ?>
		</div>
	</header><!-- .entry-header -->
	<div class="entry-content">
		<?php if(has_post_thumbnail()): ?>
			<div class="standard-featured"><?php the_post_thumbnail(); ?></div>
		<?php endif; ?>
		<div class="entry-excerpt">
			<?php the_excerpt(); ?>
		</div>
		<div class="button-container">
			<a href="<?php the_permalink(); ?>" class="btn btn-default"><?php _e('Read More'); ?></a>
		</div>
	</div><!-- .entry-content -->
	<footer class="entry-footer">
		<?php sunset_posted_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->