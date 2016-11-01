<?php
/**
 * Template part for displaying single posts.
 *
 * @package Cerauno
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
        <?php if ( is_single() || is_page() && has_post_thumbnail() ) : ?>
		<div class="featured-header-image">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<?php the_post_thumbnail( 'cerauno-header' ); ?>
			</a>
		</div><!-- .featured-header-image -->
	<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'cerauno' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer clear">
		<?php cerauno_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

