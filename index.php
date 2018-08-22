<?php
get_header(); ?>

<div class="wrapper" id="index-wrapper"> 
    <?php
        $casino_args = array(
            'category_name' => 'casino'
        )
    ?>
    <?php $casino = new WP_Query( $casino_args ); ?>
    <?php if ( $casino->have_posts() ) : ?>
        <div class="grid-content container">
            <?php while ( $casino->have_posts() ) : $casino->the_post(); ?>
                <figure style="grid-area:1 / 1 / 4 / 3;" <?php post_class( 'grid-area:1 / 1 / 4 / 3; imghvr-blur' ); ?>>
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
        </div>
    <?php else : ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.', 'st2' ); ?></p>
    <?php endif; ?> 
</div>                                 

<?php get_footer(); ?>