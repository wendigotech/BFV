<!doctype html> 
<html <?php language_attributes(); ?>> 
    <head>          
        <meta charset="<?php bloginfo( 'charset' ); ?>"> 
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
        <meta name="mobile-web-app-capable" content="yes"> 
        <meta name="apple-mobile-web-app-capable" content="yes"> 
        <meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>"> 
        <link rel="profile" href="http://gmpg.org/xfn/11"> 
        <meta name="description" content="<?php bloginfo( 'description' ); ?>"> 
        <meta name="author" content="The Pinegrow Team">          
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">                                     
        <?php wp_head(); ?>
    </head>     
    <body class="<?php echo implode(' ', get_body_class()); ?>"> 
        <div class="hfeed site" id="page"> 
            <header> 
                <div itemscope="" itemtype="http://schema.org/WebSite" id="wrapper-navbar"> 
                    <a class="skip-link screen-reader-text sr-only" href="#content"><?php _e( 'Skip to content', 'st2' ); ?></a> 
                    <nav class="navbar navbar-expand-lg navbar-light"> 
                        <div class="container"> 
                            <?php if ( ! has_custom_logo() ) : ?>
                                <div> 
                                    <a rel="home" class="navbar-brand" href="<?php echo esc_url( home_url() ); ?>"><?php bloginfo( 'name' ); ?></a> 
                                </div>                                 
                            <?php else : ?>
                                <?php the_custom_logo(); ?>
                            <?php endif; ?> 
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler6" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation"> 
                                <span class="navbar-toggler-icon"></span> 
                            </button>                             
                            <div class="collapse navbar-collapse" id="navbarToggler6"> 
                                <?php if ( has_nav_menu( 'primary' ) ) : ?>
                                    <?php wp_nav_menu( array(
                                            'menu' => 'primary',
                                            'menu_class' => 'navbar-nav mt-2 mt-lg-0 ml-auto ',
                                            'container' => '',
                                            'depth' => '2',
                                            'fallback_cb' => 'wp_bootstrap4_navwalker::fallback',
                                            'walker' => new wp_bootstrap4_navwalker()
                                    ) ); ?>
                                <?php endif; ?> 
                            </div>                             
                        </div>                         
                    </nav>                     
                </div>                 
                <?php if ( get_theme_mod( 'show_jumbotron' ) ) : ?>
                    <div> 
                        <div class="jumbotron" style="background-color:<?php echo get_theme_mod( 'jumbotron_bg_color' ); ?>;background-image:<?php echo 'url('.wp_get_attachment_image_url( get_theme_mod( 'jumbotron_bg_image' ), 'full' ).')' ?>;"> 
                            <div class="container"> 
                                <h1 class="display-5" style="color:<?php echo get_theme_mod( 'jumbotron_heading_color' ); ?> !important;"><?php _e( 'Editor´s choice', 'st2' ); ?></h1> 
                                <div id="carousel1" class="carousel slide" data-ride="carousel"> 
                                    <ol class="carousel-indicators"> 
                                        <li data-target="#carousel1" data-slide-to="0" class="active"></li>                                         

                                        <li data-target="#carousel1" data-slide-to="1"></li>                                         

                                        <li data-target="#carousel1" data-slide-to="2"></li>                                         
                                    </ol>                                     

                                    <div class="carousel-inner" style="display:grid;grid-template-columns:1fr 1fr 1fr;grid-template-rows:100px 176px;grid-gap:20px;"> 
                                        <div class="carousel-item active" style="grid-area:1 / 1 / 3 / 4;">                                                                                           

                                            <div class="row" style="display:grid;grid-template-columns:4fr 2fr 3fr 4fr 4fr;grid-template-rows:none none;grid-auto-rows:120px;grid-gap:10px;">
                                                <?php
                                                    $tag_choice_args = array(
                                                        'tag' => 'choice',
                                                        'nopaging' => true,
                                                        'order' => 'ASC',
                                                        'orderby' => 'date'
                                                    )
                                                ?>
                                                <?php $tag_choice = new WP_Query( $tag_choice_args ); ?>
                                                <?php if ( $tag_choice->have_posts() ) : ?>
                                                    <?php $tag_choice_item_number = 0; ?>
                                                    <?php while ( $tag_choice->have_posts() && $tag_choice_item_number++ < 1 ) : $tag_choice->the_post(); ?>
                                                        <figure style="grid-area:1 / 1 / 2 / 3;" <?php post_class( 'imghvr-blur' ); ?> id="post-<?php the_ID(); ?>">
                                                            <?php
                                                                if ( has_post_thumbnail() ) {
                                                                    the_post_thumbnail( 'normal' );
                                                                }
                                                             ?>
                                                            <figcaption>
                                                                <a class="btn active btn-sm d-table btn-warning btn-block" role="button" aria-pressed="true" href="<?php echo get_post_meta( get_the_ID(), 'Link', true ); ?>"><?php _e( 'Play', 'st2' ); ?></a>
                                                                <a class="btn active btn-sm btn-danger d-table" role="button" aria-pressed="true" href="<?php echo get_post_meta( get_the_ID(), 'T&C´s link', true ); ?>"><?php _e( 'T&C´s', 'st2' ); ?></a>
                                                                <h6 class="text-center display-5"><?php the_title(); ?></h6>
                                                                <?php the_excerpt( ); ?>
                                                            </figcaption>
                                                        </figure>
                                                    <?php endwhile; ?>
                                                    <?php wp_reset_postdata(); ?>
                                                <?php else : ?>
                                                    <p><?php _e( 'Sorry, no posts matched your criteria.', 'st2' ); ?></p>
                                                <?php endif; ?>
                                                <?php if ( $tag_choice->have_posts() ) : ?>
                                                    <?php $tag_choice_item_number = 0; ?>
                                                    <?php while ( $tag_choice->have_posts() && $tag_choice_item_number++ < 1 ) : $tag_choice->the_post(); ?>
                                                        <figure style="grid-area:1 / 3 / 2 / 5;" <?php post_class( 'imghvr-blur' ); ?> id="post-<?php the_ID(); ?>">
                                                            <?php
                                                                if ( has_post_thumbnail() ) {
                                                                    the_post_thumbnail( 'normal' );
                                                                }
                                                             ?>
                                                            <figcaption>
                                                                <a class="btn active btn-sm d-table btn-warning btn-block" role="button" aria-pressed="true" href="<?php echo get_post_meta( get_the_ID(), 'Link', true ); ?>"><?php _e( 'Play', 'st2' ); ?></a>
                                                                <a class="btn active btn-sm btn-danger d-table" role="button" aria-pressed="true" href="<?php echo get_post_meta( get_the_ID(), 'T&C´s link', true ); ?>"><?php _e( 'T&C´s', 'st2' ); ?></a>
                                                                <h6 class="text-center display-5"><?php the_title(); ?></h6>
                                                                <?php the_excerpt( ); ?>
                                                            </figcaption>
                                                        </figure>
                                                    <?php endwhile; ?>
                                                    <?php wp_reset_postdata(); ?>
                                                <?php else : ?>
                                                    <p><?php _e( 'Sorry, no posts matched your criteria.', 'st2' ); ?></p>
                                                <?php endif; ?>
                                                <?php if ( $tag_choice->have_posts() ) : ?>
                                                    <?php $tag_choice_item_number = 0; ?>
                                                    <?php while ( $tag_choice->have_posts() && $tag_choice_item_number++ < 1 ) : $tag_choice->the_post(); ?>
                                                        <figure style="grid-area:1 / 5 / 2 / 6;" <?php post_class( 'imghvr-blur' ); ?> id="post-<?php the_ID(); ?>">
                                                            <?php
                                                                if ( has_post_thumbnail() ) {
                                                                    the_post_thumbnail( 'normal' );
                                                                }
                                                             ?>
                                                            <figcaption>
                                                                <a class="btn active btn-sm d-table btn-warning btn-block" role="button" aria-pressed="true" href="<?php echo get_post_meta( get_the_ID(), 'Link', true ); ?>"><?php _e( 'Play', 'st2' ); ?></a>
                                                                <a class="btn active btn-sm btn-danger d-table" role="button" aria-pressed="true" href="<?php echo get_post_meta( get_the_ID(), 'T&C´s link', true ); ?>"><?php _e( 'T&C´s', 'st2' ); ?></a>
                                                                <h6 class="text-center display-5"><?php the_title(); ?></h6>
                                                                <?php the_excerpt( ); ?>
                                                            </figcaption>
                                                        </figure>
                                                    <?php endwhile; ?>
                                                    <?php wp_reset_postdata(); ?>
                                                <?php else : ?>
                                                    <p><?php _e( 'Sorry, no posts matched your criteria.', 'st2' ); ?></p>
                                                <?php endif; ?>
                                                <?php if ( $tag_choice->have_posts() ) : ?>
                                                    <?php $tag_choice_item_number = 0; ?>
                                                    <?php while ( $tag_choice->have_posts() && $tag_choice_item_number++ < 1 ) : $tag_choice->the_post(); ?>
                                                        <figure style="grid-area:2 / 2 / 3 / 4;" <?php post_class( 'imghvr-blur' ); ?> id="post-<?php the_ID(); ?>">
                                                            <?php
                                                                if ( has_post_thumbnail() ) {
                                                                    the_post_thumbnail( 'normal' );
                                                                }
                                                             ?>
                                                            <figcaption>
                                                                <a class="btn active btn-sm d-table btn-warning btn-block" role="button" aria-pressed="true" href="<?php echo get_post_meta( get_the_ID(), 'Link', true ); ?>"><?php _e( 'Play', 'st2' ); ?></a>
                                                                <a class="btn active btn-sm btn-danger d-table" role="button" aria-pressed="true" href="<?php echo get_post_meta( get_the_ID(), 'T&C´s link', true ); ?>"><?php _e( 'T&C´s', 'st2' ); ?></a>
                                                                <h6 class="text-center display-5"><?php the_title(); ?></h6>
                                                                <?php the_excerpt( ); ?>
                                                            </figcaption>
                                                        </figure>
                                                    <?php endwhile; ?>
                                                    <?php wp_reset_postdata(); ?>
                                                <?php else : ?>
                                                    <p><?php _e( 'Sorry, no posts matched your criteria.', 'st2' ); ?></p>
                                                <?php endif; ?>
                                                <?php if ( $tag_choice->have_posts() ) : ?>
                                                    <?php $tag_choice_item_number = 0; ?>
                                                    <?php while ( $tag_choice->have_posts() && $tag_choice_item_number++ < 1 ) : $tag_choice->the_post(); ?>
                                                        <figure style="grid-area:2 / 1 / 3 / 2;" <?php post_class( 'imghvr-blur' ); ?> id="post-<?php the_ID(); ?>">
                                                            <?php
                                                                if ( has_post_thumbnail() ) {
                                                                    the_post_thumbnail( 'normal' );
                                                                }
                                                             ?>
                                                            <figcaption>
                                                                <a class="btn active btn-sm d-table btn-warning btn-block" role="button" aria-pressed="true" href="<?php echo get_post_meta( get_the_ID(), 'Link', true ); ?>"><?php _e( 'Play', 'st2' ); ?></a>
                                                                <a class="btn active btn-sm btn-danger d-table" role="button" aria-pressed="true" href="<?php echo get_post_meta( get_the_ID(), 'T&C´s link', true ); ?>"><?php _e( 'T&C´s', 'st2' ); ?></a>
                                                                <h6 class="text-center display-5"><?php the_title(); ?></h6>
                                                                <?php the_excerpt( ); ?>
                                                            </figcaption>
                                                        </figure>
                                                    <?php endwhile; ?>
                                                    <?php wp_reset_postdata(); ?>
                                                <?php else : ?>
                                                    <p><?php _e( 'Sorry, no posts matched your criteria.', 'st2' ); ?></p>
                                                <?php endif; ?>
                                                <?php if ( $tag_choice->have_posts() ) : ?>
                                                    <?php $tag_choice_item_number = 0; ?>
                                                    <?php while ( $tag_choice->have_posts() && $tag_choice_item_number++ < 1 ) : $tag_choice->the_post(); ?>
                                                        <figure style="grid-area:2 / 4 / 3 / 6;" <?php post_class( 'imghvr-blur' ); ?> id="post-<?php the_ID(); ?>">
                                                            <?php
                                                                if ( has_post_thumbnail() ) {
                                                                    the_post_thumbnail( 'normal' );
                                                                }
                                                             ?>
                                                            <figcaption>
                                                                <a class="btn active btn-sm d-table btn-warning btn-block" role="button" aria-pressed="true" href="<?php echo get_post_meta( get_the_ID(), 'Link', true ); ?>"><?php _e( 'Play', 'st2' ); ?></a>
                                                                <a class="btn active btn-sm btn-danger d-table" role="button" aria-pressed="true" href="<?php echo get_post_meta( get_the_ID(), 'T&C´s link', true ); ?>"><?php _e( 'T&C´s', 'st2' ); ?></a>
                                                                <h6 class="text-center display-5"><?php the_title(); ?></h6>
                                                                <?php the_excerpt( ); ?>
                                                            </figcaption>
                                                        </figure>
                                                    <?php endwhile; ?>
                                                    <?php wp_reset_postdata(); ?>
                                                <?php else : ?>
                                                    <p><?php _e( 'Sorry, no posts matched your criteria.', 'st2' ); ?></p>
                                                <?php endif; ?>
                                            </div>
                                        </div>                                         

                                        <div class="carousel-item" style="grid-area:1 / 1 / 2 / 4;">                                                                                           

                                            <div class="row" style="display:grid;grid-template-columns:3fr 3fr 2fr 4fr 4fr;grid-template-rows:none none;grid-auto-rows:120px;grid-gap:10px;">
                                                <?php if ( $tag_choice->have_posts() ) : ?>
                                                    <?php $tag_choice_item_number = 0; ?>
                                                    <?php while ( $tag_choice->have_posts() && $tag_choice_item_number++ < 1 ) : $tag_choice->the_post(); ?>
                                                        <figure style="grid-area:1 / 1 / 2 / 3;" <?php post_class( 'imghvr-blur' ); ?> id="post-<?php the_ID(); ?>">
                                                            <?php
                                                                if ( has_post_thumbnail() ) {
                                                                    the_post_thumbnail( 'normal' );
                                                                }
                                                             ?>
                                                            <figcaption>
                                                                <a class="btn active btn-sm d-table btn-warning btn-block" role="button" aria-pressed="true" href="<?php echo get_post_meta( get_the_ID(), 'Link', true ); ?>"><?php _e( 'Play', 'st2' ); ?></a>
                                                                <a class="btn active btn-sm btn-danger d-table" role="button" aria-pressed="true" href="<?php echo get_post_meta( get_the_ID(), 'T&C´s link', true ); ?>"><?php _e( 'T&C´s', 'st2' ); ?></a>
                                                                <h6 class="text-center display-5"><?php the_title(); ?></h6>
                                                                <?php the_excerpt( ); ?>
                                                            </figcaption>
                                                        </figure>
                                                    <?php endwhile; ?>
                                                    <?php wp_reset_postdata(); ?>
                                                <?php else : ?>
                                                    <p><?php _e( 'Sorry, no posts matched your criteria.', 'st2' ); ?></p>
                                                <?php endif; ?>
                                                <?php if ( $tag_choice->have_posts() ) : ?>
                                                    <?php $tag_choice_item_number = 0; ?>
                                                    <?php while ( $tag_choice->have_posts() && $tag_choice_item_number++ < 1 ) : $tag_choice->the_post(); ?>
                                                        <figure style="grid-area:1 / 3 / 2 / 5;" <?php post_class( 'imghvr-blur' ); ?> id="post-<?php the_ID(); ?>">
                                                            <?php
                                                                if ( has_post_thumbnail() ) {
                                                                    the_post_thumbnail( 'normal' );
                                                                }
                                                             ?>
                                                            <figcaption>
                                                                <a class="btn active btn-sm d-table btn-warning btn-block" role="button" aria-pressed="true" href="<?php echo get_post_meta( get_the_ID(), 'Link', true ); ?>"><?php _e( 'Play', 'st2' ); ?></a>
                                                                <a class="btn active btn-sm btn-danger d-table" role="button" aria-pressed="true" href="<?php echo get_post_meta( get_the_ID(), 'T&C´s link', true ); ?>"><?php _e( 'T&C´s', 'st2' ); ?></a>
                                                                <h6 class="text-center display-5"><?php the_title(); ?></h6>
                                                                <?php the_excerpt( ); ?>
                                                            </figcaption>
                                                        </figure>
                                                    <?php endwhile; ?>
                                                    <?php wp_reset_postdata(); ?>
                                                <?php else : ?>
                                                    <p><?php _e( 'Sorry, no posts matched your criteria.', 'st2' ); ?></p>
                                                <?php endif; ?>
                                                <?php if ( $tag_choice->have_posts() ) : ?>
                                                    <?php $tag_choice_item_number = 0; ?>
                                                    <?php while ( $tag_choice->have_posts() && $tag_choice_item_number++ < 1 ) : $tag_choice->the_post(); ?>
                                                        <figure style="grid-area:1 / 5 / 2 / 6;" <?php post_class( 'imghvr-blur' ); ?> id="post-<?php the_ID(); ?>">
                                                            <?php
                                                                if ( has_post_thumbnail() ) {
                                                                    the_post_thumbnail( 'normal' );
                                                                }
                                                             ?>
                                                            <figcaption>
                                                                <a class="btn active btn-sm d-table btn-warning btn-block" role="button" aria-pressed="true" href="<?php echo get_post_meta( get_the_ID(), 'Link', true ); ?>"><?php _e( 'Play', 'st2' ); ?></a>
                                                                <a class="btn active btn-sm btn-danger d-table" role="button" aria-pressed="true" href="<?php echo get_post_meta( get_the_ID(), 'T&C´s link', true ); ?>"><?php _e( 'T&C´s', 'st2' ); ?></a>
                                                                <h6 class="text-center display-5"><?php the_title(); ?></h6>
                                                                <?php the_excerpt( ); ?>
                                                            </figcaption>
                                                        </figure>
                                                    <?php endwhile; ?>
                                                    <?php wp_reset_postdata(); ?>
                                                <?php else : ?>
                                                    <p><?php _e( 'Sorry, no posts matched your criteria.', 'st2' ); ?></p>
                                                <?php endif; ?>
                                                <?php if ( $tag_choice->have_posts() ) : ?>
                                                    <?php $tag_choice_item_number = 0; ?>
                                                    <?php while ( $tag_choice->have_posts() && $tag_choice_item_number++ < 1 ) : $tag_choice->the_post(); ?>
                                                        <figure style="grid-area:2 / 1 / 3 / 2;" <?php post_class( 'imghvr-blur' ); ?> id="post-<?php the_ID(); ?>">
                                                            <?php
                                                                if ( has_post_thumbnail() ) {
                                                                    the_post_thumbnail( 'normal' );
                                                                }
                                                             ?>
                                                            <figcaption>
                                                                <a class="btn active btn-sm d-table btn-warning btn-block" role="button" aria-pressed="true" href="<?php echo get_post_meta( get_the_ID(), 'Link', true ); ?>"><?php _e( 'Play', 'st2' ); ?></a>
                                                                <a class="btn active btn-sm btn-danger d-table" role="button" aria-pressed="true" href="<?php echo get_post_meta( get_the_ID(), 'T&C´s link', true ); ?>"><?php _e( 'T&C´s', 'st2' ); ?></a>
                                                                <h6 class="text-center display-5"><?php the_title(); ?></h6>
                                                                <?php the_excerpt( ); ?>
                                                            </figcaption>
                                                        </figure>
                                                    <?php endwhile; ?>
                                                    <?php wp_reset_postdata(); ?>
                                                <?php else : ?>
                                                    <p><?php _e( 'Sorry, no posts matched your criteria.', 'st2' ); ?></p>
                                                <?php endif; ?>
                                                <?php if ( $tag_choice->have_posts() ) : ?>
                                                    <?php $tag_choice_item_number = 0; ?>
                                                    <?php while ( $tag_choice->have_posts() && $tag_choice_item_number++ < 1 ) : $tag_choice->the_post(); ?>
                                                        <figure style="grid-area:2 / 2 / 3 / 4;" <?php post_class( 'imghvr-blur' ); ?> id="post-<?php the_ID(); ?>">
                                                            <?php
                                                                if ( has_post_thumbnail() ) {
                                                                    the_post_thumbnail( 'normal' );
                                                                }
                                                             ?>
                                                            <figcaption>
                                                                <a class="btn active btn-sm d-table btn-warning btn-block" role="button" aria-pressed="true" href="<?php echo get_post_meta( get_the_ID(), 'Link', true ); ?>"><?php _e( 'Play', 'st2' ); ?></a>
                                                                <a class="btn active btn-sm btn-danger d-table" role="button" aria-pressed="true" href="<?php echo get_post_meta( get_the_ID(), 'T&C´s link', true ); ?>"><?php _e( 'T&C´s', 'st2' ); ?></a>
                                                                <h6 class="text-center display-5"><?php the_title(); ?></h6>
                                                                <?php the_excerpt( ); ?>
                                                            </figcaption>
                                                        </figure>
                                                    <?php endwhile; ?>
                                                    <?php wp_reset_postdata(); ?>
                                                <?php else : ?>
                                                    <p><?php _e( 'Sorry, no posts matched your criteria.', 'st2' ); ?></p>
                                                <?php endif; ?>
                                                <?php if ( $tag_choice->have_posts() ) : ?>
                                                    <?php $tag_choice_item_number = 0; ?>
                                                    <?php while ( $tag_choice->have_posts() && $tag_choice_item_number++ < 1 ) : $tag_choice->the_post(); ?>
                                                        <figure style="grid-area:2 / 4 / 3 / 6;" <?php post_class( 'imghvr-blur' ); ?> id="post-<?php the_ID(); ?>">
                                                            <?php
                                                                if ( has_post_thumbnail() ) {
                                                                    the_post_thumbnail( 'normal' );
                                                                }
                                                             ?>
                                                            <figcaption>
                                                                <a class="btn active btn-sm d-table btn-warning btn-block" role="button" aria-pressed="true" href="<?php echo get_post_meta( get_the_ID(), 'Link', true ); ?>"><?php _e( 'Play', 'st2' ); ?></a>
                                                                <a class="btn active btn-sm btn-danger d-table" role="button" aria-pressed="true" href="<?php echo get_post_meta( get_the_ID(), 'T&C´s link', true ); ?>"><?php _e( 'T&C´s', 'st2' ); ?></a>
                                                                <h6 class="text-center display-5"><?php the_title(); ?></h6>
                                                                <?php the_excerpt( ); ?>
                                                            </figcaption>
                                                        </figure>
                                                    <?php endwhile; ?>
                                                    <?php wp_reset_postdata(); ?>
                                                <?php else : ?>
                                                    <p><?php _e( 'Sorry, no posts matched your criteria.', 'st2' ); ?></p>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="carousel-item" style="grid-area:1 / 1 / 2 / 4;">                                                                                           

                                            <div class="row" style="display:grid;grid-template-columns:3fr 3fr 2fr 4fr 4fr;grid-template-rows:none none;grid-auto-rows:120px;grid-gap:10px;">
                                                <?php if ( $tag_choice->have_posts() ) : ?>
                                                    <?php $tag_choice_item_number = 0; ?>
                                                    <?php while ( $tag_choice->have_posts() && $tag_choice_item_number++ < 1 ) : $tag_choice->the_post(); ?>
                                                        <figure style="grid-area:1 / 1 / 2 / 3;" <?php post_class( 'imghvr-blur' ); ?> id="post-<?php the_ID(); ?>">
                                                            <?php
                                                                if ( has_post_thumbnail() ) {
                                                                    the_post_thumbnail( 'normal' );
                                                                }
                                                             ?>
                                                            <figcaption>
                                                                <a class="btn active btn-sm d-table btn-warning btn-block" role="button" aria-pressed="true" href="<?php echo get_post_meta( get_the_ID(), 'Link', true ); ?>"><?php _e( 'Play', 'st2' ); ?></a>
                                                                <a class="btn active btn-sm btn-danger d-table" role="button" aria-pressed="true" href="<?php echo get_post_meta( get_the_ID(), 'T&C´s link', true ); ?>"><?php _e( 'T&C´s', 'st2' ); ?></a>
                                                                <h6 class="text-center display-5"><?php the_title(); ?></h6>
                                                                <?php the_excerpt( ); ?>
                                                            </figcaption>
                                                        </figure>
                                                    <?php endwhile; ?>
                                                    <?php wp_reset_postdata(); ?>
                                                <?php else : ?>
                                                    <p><?php _e( 'Sorry, no posts matched your criteria.', 'st2' ); ?></p>
                                                <?php endif; ?>
                                                <?php if ( $tag_choice->have_posts() ) : ?>
                                                    <?php $tag_choice_item_number = 0; ?>
                                                    <?php while ( $tag_choice->have_posts() && $tag_choice_item_number++ < 1 ) : $tag_choice->the_post(); ?>
                                                        <figure style="grid-area:1 / 3 / 2 / 5;" <?php post_class( 'imghvr-blur' ); ?> id="post-<?php the_ID(); ?>">
                                                            <?php
                                                                if ( has_post_thumbnail() ) {
                                                                    the_post_thumbnail( 'normal' );
                                                                }
                                                             ?>
                                                            <figcaption>
                                                                <a class="btn active btn-sm d-table btn-warning btn-block" role="button" aria-pressed="true" href="<?php echo get_post_meta( get_the_ID(), 'Link', true ); ?>"><?php _e( 'Play', 'st2' ); ?></a>
                                                                <a class="btn active btn-sm btn-danger d-table" role="button" aria-pressed="true" href="<?php echo get_post_meta( get_the_ID(), 'T&C´s link', true ); ?>"><?php _e( 'T&C´s', 'st2' ); ?></a>
                                                                <h6 class="text-center display-5"><?php the_title(); ?></h6>
                                                                <?php the_excerpt( ); ?>
                                                            </figcaption>
                                                        </figure>
                                                    <?php endwhile; ?>
                                                    <?php wp_reset_postdata(); ?>
                                                <?php else : ?>
                                                    <p><?php _e( 'Sorry, no posts matched your criteria.', 'st2' ); ?></p>
                                                <?php endif; ?>
                                                <?php if ( $tag_choice->have_posts() ) : ?>
                                                    <?php $tag_choice_item_number = 0; ?>
                                                    <?php while ( $tag_choice->have_posts() && $tag_choice_item_number++ < 1 ) : $tag_choice->the_post(); ?>
                                                        <figure style="grid-area:1 / 5 / 2 / 6;" <?php post_class( 'imghvr-blur' ); ?> id="post-<?php the_ID(); ?>">
                                                            <?php
                                                                if ( has_post_thumbnail() ) {
                                                                    the_post_thumbnail( 'normal' );
                                                                }
                                                             ?>
                                                            <figcaption>
                                                                <a class="btn active btn-sm d-table btn-warning btn-block" role="button" aria-pressed="true" href="<?php echo get_post_meta( get_the_ID(), 'Link', true ); ?>"><?php _e( 'Play', 'st2' ); ?></a>
                                                                <a class="btn active btn-sm btn-danger d-table" role="button" aria-pressed="true" href="<?php echo get_post_meta( get_the_ID(), 'T&C´s link', true ); ?>"><?php _e( 'T&C´s', 'st2' ); ?></a>
                                                                <h6 class="text-center display-5"><?php the_title(); ?></h6>
                                                                <?php the_excerpt( ); ?>
                                                            </figcaption>
                                                        </figure>
                                                    <?php endwhile; ?>
                                                    <?php wp_reset_postdata(); ?>
                                                <?php else : ?>
                                                    <p><?php _e( 'Sorry, no posts matched your criteria.', 'st2' ); ?></p>
                                                <?php endif; ?>
                                                <?php if ( $tag_choice->have_posts() ) : ?>
                                                    <?php $tag_choice_item_number = 0; ?>
                                                    <?php while ( $tag_choice->have_posts() && $tag_choice_item_number++ < 1 ) : $tag_choice->the_post(); ?>
                                                        <figure style="grid-area:2 / 1 / 3 / 2;" <?php post_class( 'imghvr-blur' ); ?> id="post-<?php the_ID(); ?>">
                                                            <?php
                                                                if ( has_post_thumbnail() ) {
                                                                    the_post_thumbnail( 'normal' );
                                                                }
                                                             ?>
                                                            <figcaption>
                                                                <a class="btn active btn-sm d-table btn-warning btn-block" role="button" aria-pressed="true" href="<?php echo get_post_meta( get_the_ID(), 'Link', true ); ?>"><?php _e( 'Play', 'st2' ); ?></a>
                                                                <a class="btn active btn-sm btn-danger d-table" role="button" aria-pressed="true" href="<?php echo get_post_meta( get_the_ID(), 'T&C´s link', true ); ?>"><?php _e( 'T&C´s', 'st2' ); ?></a>
                                                                <h6 class="text-center display-5"><?php the_title(); ?></h6>
                                                                <?php the_excerpt( ); ?>
                                                            </figcaption>
                                                        </figure>
                                                    <?php endwhile; ?>
                                                    <?php wp_reset_postdata(); ?>
                                                <?php else : ?>
                                                    <p><?php _e( 'Sorry, no posts matched your criteria.', 'st2' ); ?></p>
                                                <?php endif; ?>
                                                <?php if ( $tag_choice->have_posts() ) : ?>
                                                    <?php $tag_choice_item_number = 0; ?>
                                                    <?php while ( $tag_choice->have_posts() && $tag_choice_item_number++ < 1 ) : $tag_choice->the_post(); ?>
                                                        <figure style="grid-area:2 / 2 / 3 / 4;" <?php post_class( 'imghvr-blur' ); ?> id="post-<?php the_ID(); ?>">
                                                            <?php
                                                                if ( has_post_thumbnail() ) {
                                                                    the_post_thumbnail( 'normal' );
                                                                }
                                                             ?>
                                                            <figcaption>
                                                                <a class="btn active btn-sm d-table btn-warning btn-block" role="button" aria-pressed="true" href="<?php echo get_post_meta( get_the_ID(), 'Link', true ); ?>"><?php _e( 'Play', 'st2' ); ?></a>
                                                                <a class="btn active btn-sm btn-danger d-table" role="button" aria-pressed="true" href="<?php echo get_post_meta( get_the_ID(), 'T&C´s link', true ); ?>"><?php _e( 'T&C´s', 'st2' ); ?></a>
                                                                <h6 class="text-center display-5"><?php the_title(); ?></h6>
                                                                <?php the_excerpt( ); ?>
                                                            </figcaption>
                                                        </figure>
                                                    <?php endwhile; ?>
                                                    <?php wp_reset_postdata(); ?>
                                                <?php else : ?>
                                                    <p><?php _e( 'Sorry, no posts matched your criteria.', 'st2' ); ?></p>
                                                <?php endif; ?>
                                                <?php if ( $tag_choice->have_posts() ) : ?>
                                                    <?php $tag_choice_item_number = 0; ?>
                                                    <?php while ( $tag_choice->have_posts() && $tag_choice_item_number++ < 1 ) : $tag_choice->the_post(); ?>
                                                        <figure style="grid-area:2 / 4 / 3 / 6;" <?php post_class( 'imghvr-blur' ); ?> id="post-<?php the_ID(); ?>">
                                                            <?php
                                                                if ( has_post_thumbnail() ) {
                                                                    the_post_thumbnail( 'normal' );
                                                                }
                                                             ?>
                                                            <figcaption>
                                                                <a class="btn active btn-sm d-table btn-warning btn-block" role="button" aria-pressed="true" href="<?php echo get_post_meta( get_the_ID(), 'Link', true ); ?>"><?php _e( 'Play', 'st2' ); ?></a>
                                                                <a class="btn active btn-sm btn-danger d-table" role="button" aria-pressed="true" href="<?php echo get_post_meta( get_the_ID(), 'T&C´s link', true ); ?>"><?php _e( 'T&C´s', 'st2' ); ?></a>
                                                                <h6 class="text-center display-5"><?php the_title(); ?></h6>
                                                                <?php the_excerpt( ); ?>
                                                            </figcaption>
                                                        </figure>
                                                    <?php endwhile; ?>
                                                    <?php wp_reset_postdata(); ?>
                                                <?php else : ?>
                                                    <p><?php _e( 'Sorry, no posts matched your criteria.', 'st2' ); ?></p>
                                                <?php endif; ?>
                                            </div>
                                        </div>                                                                                  
                                    </div>                                     

                                    <a class="carousel-control-prev" href="#carousel1" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only"><?php _e( 'Previous', 'st2' ); ?></span> </a> 
                                    <a class="carousel-control-next" href="#carousel1" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only"><?php _e( 'Next', 'st2' ); ?></span> </a> 
                                </div>
                            </div>                             
                        </div>                         
                    </div>
                <?php endif; ?> 
                <?php if ( is_active_sidebar( 'hero' ) ) : ?>
                    <div class="wrapper container-fluid" id="wrapper-hero"> 
                        <div id="HeroCarouselControls" class="carousel slide" data-ride="carousel" data-interval="8000" data-pause="hover"> 
                            <div class="carousel-inner"> 
                                <?php if ( is_active_sidebar( 'hero' ) ) : ?>
                                    <?php dynamic_sidebar( 'hero' ); ?>
                                <?php endif; ?>                                  
                            </div>                             
                            <a class="carousel-control-prev" href="#HeroCarouselControls" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only"><?php _e( 'Previous', 'st2' ); ?></span> </a> 
                            <a class="carousel-control-next" href="#HeroCarouselControls" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only"><?php _e( 'Next', 'st2' ); ?></span> </a> 
                        </div>                         
                    </div>
                <?php endif; ?> 
                <?php if ( is_active_sidebar( 'herocanvas' ) ) : ?>
                    <?php if ( is_active_sidebar( 'herocanvas' ) ) : ?>
                        <div class="wrapper container-fluid" id="wrapper-hero">
                            <?php dynamic_sidebar( 'herocanvas' ); ?>
                        </div>
                    <?php endif; ?>
                <?php endif; ?> 
                <?php if ( is_active_sidebar( 'statichero' ) ) : ?>
                    <div class="wrapper" id="wrapper-static-hero"> 
                        <div id="wrapper-static-content" tabindex="-1" class="container"> 
                            <div class="row"> 
                                <?php if ( is_active_sidebar( 'statichero' ) ) : ?>
                                    <?php dynamic_sidebar( 'statichero' ); ?>
                                <?php endif; ?>                                  
                            </div>                             
                        </div>                         
                    </div>
                <?php endif; ?> 
            </header>             
            <div>