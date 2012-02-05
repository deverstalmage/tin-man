<!doctype html>
<html <?php language_attributes(); ?>>

    <head>
        <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>">
        <link rel="alternate" type="application/atom+xml" title=" - feed" href="/index.xml" />
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <link href='http://fonts.googleapis.com/css?family=Noticia+Text:400,700' rel='stylesheet' type='text/css'>
        <?php
            /* We add some JavaScript to pages with the comment form
             * to support sites with threaded comments (when in use).
             */
            if ( is_singular() && get_option( 'thread_comments' ) )
                wp_enqueue_script( 'comment-reply' );

            /* Always have wp_head() just before the closing </head>
             * tag of your theme, or you will break many plugins, which
             * generally use this hook to add elements to <head> such
             * as styles, scripts, and meta tags.
             */
            wp_head();
        ?>
        <title>
        
            <?php
                /*
                 * Print the <title> tag based on what is being viewed.
                 * We filter the output of wp_title() a bit -- see
                 * twentyten_filter_wp_title() in functions.php.
                 */
                wp_title( '|', true, 'right' );

            ?>

        </title>
    </head>

    <body <?php body_class(); ?>>

        <header>

            <nav>

                <?php
                    wp_nav_menu( array(
                        'container' =>false,
                        'items_wrap' => '%3$s',
                        'walker' => new simple_walker())
                    );
                ?>

            </nav>

            <a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home" id="title"><?php bloginfo( 'name' ); ?></a>

        </header>

        <section>
