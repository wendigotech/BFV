<?php
get_header(); ?>

<div class="wrapper" id="index-wrapper"> 
    <div class="container">
        <?php
            $casino_args = array(
                'category_name' => 'casino'
            )
         ?>
        <?php $casino = new WP_Query( $casino_args ); ?>
        <?php if ( $casino->have_posts() ) : ?>
            <div <?php post_class( 'row grid-content' ); ?> id="post-<?php the_ID(); ?>">
                <?php while ( $casino->have_posts() ) : $casino->the_post(); ?>
                    <figure1 style="grid-area:1 / 1 / 4 / 3;" class="imghvr-blur">
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
                    </figure1>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
                <figure2 style="grid-area:1 / 3 / 3 / 4;" class="imghvr-blur">
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
                </figure2>
            </div>
        <?php else : ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.', 'st2' ); ?></p>
        <?php endif; ?>
    </div>                     
</div>                                 

<?php get_footer(); ?>