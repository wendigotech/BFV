<?php
get_header(); ?>

<div class="wrapper grid-content" id="index-wrapper"> 
    <div class="container" style="display:grid;grid-template-columns:1fr 1fr 1fr 1fr 1fr 1fr;grid-template-rows:100px 100px 100px 100px;grid-gap:10px;">
        <?php
            $casino_args = array(
                'category_name' => 'casino',
                'nopaging' => true,
                'order' => 'ASC',
                'orderby' => 'date'
            )
        ?>
        <?php $casino = new WP_Query( $casino_args ); ?>
        <?php if ( $casino->have_posts() ) : ?>
            <?php $casino_item_number = 0; ?>
            <?php while ( $casino->have_posts() && $casino_item_number++ < 1 ) : $casino->the_post(); ?>
                <figure style="grid-area:1 / 1 / 2 / 5;" <?php post_class( 'imghvr-blur' ); ?> id="post-<?php the_ID(); ?>">
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
        <?php if ( $casino->have_posts() ) : ?>
            <?php $casino_item_number = 0; ?>
            <?php while ( $casino->have_posts() && $casino_item_number++ < 1 ) : $casino->the_post(); ?>
                <figure style="grid-area:2 / 1 / 5 / 3;" <?php post_class( 'imghvr-blur' ); ?> id="post-<?php the_ID(); ?>">
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
        <?php if ( $casino->have_posts() ) : ?>
            <?php $casino_item_number = 0; ?>
            <?php while ( $casino->have_posts() && $casino_item_number++ < 1 ) : $casino->the_post(); ?>
                <figure style="grid-area:2 / 3 / 4 / 5;" <?php post_class( 'imghvr-blur' ); ?> id="post-<?php the_ID(); ?>">
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

<?php get_footer(); ?>