<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the wordpress construct of pages
 * and that other 'pages' on your wordpress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers 3.0
 */

get_header(); ?>

    <section id="articles">

        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
            <article class="post">
                <header>
                    <h1><?php the_title(); ?></h1>

                    <span class="date"><?php tinman_posted_on(); ?></span>
                </header>

                <section class="content">

                    <?php the_content(); ?>
                    <?php wp_link_pages( array( 'before' => '' . __( 'Pages:', 'twentyten' ), 'after' => '' ) ); ?>
                    <?php edit_post_link( __( 'Edit', 'twentyten' ), '', '' ); ?>
                </section>

                <section class="comments">

                    <?php comments_template( '', true ); ?>

                </section>
            </article>
        <?php endwhile; ?>
    </section>

<?php get_footer(); ?>
