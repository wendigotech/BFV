<?php
get_header(); ?>

<div class="wrapper" id="index-wrapper"> 
    <div class="container">
        <div class="row no-gutters grid-content">
            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <figure style="grid-area:1 / 1 / 4 / 3;" <?php post_class( 'imghvr-blur' ); ?> id="post-<?php the_ID(); ?>">
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
            <?php else : ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.', 'st2' ); ?></p>
            <?php endif; ?>
            <figure style="grid-area:1 / 3 / 3 / 4;" class="imghvr-blur">
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
            <figure style="grid-area:3 / 3 / 6 / 4;" class="imghvr-blur">
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
            <figure style="grid-area:4 / 2 / 6 / 3;" class="imghvr-blur">
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
            <figure style="grid-area:8 / 1 / 10 / 3;" class="imghvr-blur">
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
            <figure style="grid-area:6 / 2 / 8 / 4;" class="imghvr-blur">
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
            <figure style="grid-area:4 / 1 / 8 / 2;" class="imghvr-blur">
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
            <figure style="grid-area:8 / 3 / 10 / 4;" class="imghvr-blur">
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
        </div>
    </div>
    <div class="container " id="content" tabindex="-1"> 
        <div class="row"> 
            <?php if ( get_theme_mod( 'show_left_sidebar' ) ) : ?>
                <div class="col-md-4 widget-area" role="complementary" id="left-sidebar"> 
                    <?php if ( is_active_sidebar( 'left-sidebar' ) ) : ?>
                        <?php dynamic_sidebar( 'left-sidebar' ); ?>
                    <?php endif; ?>                                                                           
                </div>
            <?php endif; ?> 
            <div class="content-area col-md-8" id="primary"> 
                <main class="site-main" id="main"> 
                    <?php get_template_part( 'loop-templates/content' ); ?> 
                </main>                                 
            </div>                             
            <?php if ( get_theme_mod( 'show_right_sidebar' ) ) : ?>
                <div class="col-md-4 widget-area" role="complementary" id="right-sidebar"> 
                    <?php if ( is_active_sidebar( 'right-sidebar' ) ) : ?>
                        <?php dynamic_sidebar( 'right-sidebar' ); ?>
                    <?php endif; ?>                                                                           
                </div>
            <?php endif; ?> 
        </div>                         
    </div>                     
</div>                                 

<?php get_footer(); ?>