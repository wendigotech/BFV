<?php
get_header(); ?>

<div class="wrapper" id="index-wrapper"> 
    <div class="grid-content container">
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
        <figure style="grid-area:1 / 3 / 4 / 4;" class="imghvr-blur">
            <?php
                if ( has_post_thumbnail() ) {
                    the_post_thumbnail( 'normal' );
                }
             ?>
            <figcaption>
                <a class="btn active btn-sm d-table btn-warning btn-block" role="button" aria-pressed="true" href="#"><?php _e( 'Play', 'st2' ); ?></a>
                <a class="btn active btn-sm btn-danger d-table" role="button" aria-pressed="true" href="#"><?php _e( 'T&C´s', 'st2' ); ?></a>
                <h6 class="text-center display-5"><?php _e( 'Heading 6', 'st2' ); ?></h6>
                <p class="text-center d-table float-left"><?php _e( 'Paragraph', 'st2' ); ?></p>
            </figcaption>
        </figure>
        <figure style="grid-area:6 / 1 / 8 / 3;" class="imghvr-blur">
            <?php
                if ( has_post_thumbnail() ) {
                    the_post_thumbnail( 'normal' );
                }
             ?>
            <figcaption>
                <a class="btn active btn-sm d-table btn-warning btn-block" role="button" aria-pressed="true" href="#"><?php _e( 'Play', 'st2' ); ?></a>
                <a class="btn active btn-sm btn-danger d-table" role="button" aria-pressed="true" href="#"><?php _e( 'T&C´s', 'st2' ); ?></a>
                <h6 class="text-center display-5"><?php _e( 'Heading 6', 'st2' ); ?></h6>
                <p class="text-center d-table float-left"><?php _e( 'Paragraph', 'st2' ); ?></p>
            </figcaption>
        </figure>
    </div>                     
</div>                                 

<?php get_footer(); ?>