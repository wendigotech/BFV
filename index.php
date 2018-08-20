<?php
get_header(); ?>

<div class="wrapper" id="index-wrapper"> 
    <div class="container">
        <div class="row grid-content">
            <figure style="grid-area:2 / 3 / 5 / 4;" class="imghvr-blur">
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
            <figure style="grid-area:4 / 1 / 6 / 3;" class="imghvr-blur">
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
            <figure style="grid-area:1 / 1 / 4 / 3;" class="imghvr-blur">
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
</div>                                 

<?php get_footer(); ?>