<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package vice
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('masonry-item'); ?>">
<header class="entry-header">
    <?php
    if (get_the_post_thumbnail()) {
        echo '<div class="masonry-image">';
        the_post_thumbnail();
        echo '</div>';
    }
    if (is_single()) {
        the_title('<h1 class="entry-title">', '</h1>');
    } else {
        the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
    }
    echo '<div class="masonry-tags">';
    the_tags('');
    echo '</div>';
    echo '<div></div>';

    if ('post' === get_post_type()) { ?>
        <?php if (!is_home()) { ?>
            <div class="entry-meta">
                <?php vice_posted_on(); ?>
            </div><!-- .entry-meta -->
        <?php } ?>
        <?php
    } ?>
</header><!-- .entry-header -->

<div class="entry-content">
    <?php
    the_excerpt();

    wp_link_pages(array(
        'before' => '<div class="page-links">' . esc_html__('Pages:', 'vice'),
        'after' => '</div>',
    ));
    ?>
</div><!-- .entry-content -->

<footer class="entry-footer">
    <?php echo '<a class="more-link" href="' . get_permalink() . '">'.__("Read More", "vice").'</a>' ?>
</footer><!-- .entry-footer -->
</article><!-- #post-## -->
