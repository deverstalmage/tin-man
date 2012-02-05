<?php
/**
Template Name: Archives
 * The template for displaying Archive pages.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers 3.0
 */

get_header(); ?>

    <h1><?php the_title(); ?></h1>

    <?php
        $args=array(
          'post_type' => 'post',
          'post_status' => 'publish',
          'posts_per_page' => -1,
          'caller_get_posts'=> 1
          );
        $my_query = null;
        $my_query = new WP_Query($args);
        if( $my_query->have_posts() ) { ?>
            <ul>
            
            <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
                <li class="archive-article">
                    <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>

                    <span class="archive-date"><?php the_time('F jS Y') ?></span>
                </li>
           <?php
          endwhile;
        }
        wp_reset_query();  // Restore global post data stomped by the_post().
    ?>
    

    <?php //wp_get_archives('type=postbypost&format=custom'); ?>

<?php get_footer(); ?>
