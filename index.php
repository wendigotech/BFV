<?php
get_header(); ?>

<div class="wrapper" id="index-wrapper"> 
    <?php if ( $casino->have_posts() ) : ?>
        <div class="grid-content container">
            <?php $casino_item_number = 0; ?>
            <?php while ( $casino->have_posts() && $casino_item_number++ < 1 ) : $casino->the_post(); ?>
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
            <?php if ( $casino->have_posts() ) : ?>
                <?php $casino_item_number = 0; ?>
                <?php while ( $casino->have_posts() && $casino_item_number++ < 1 ) : $casino->the_post(); ?>
                    <figure style="grid-area:7 / 1 / 5 / 3;" <?php post_class( 'grid-area:1 / 3 / 4 / 4; imghvr-blur' ); ?>>
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
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php else : ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.', 'st2' ); ?></p>
            <?php endif; ?>
            <?php if ( $casino->have_posts() ) : ?>
                <?php $casino_item_number = 0; ?>
                <?php while ( $casino->have_posts() && $casino_item_number++ < 1 ) : $casino->the_post(); ?>
                    <figure style="grid-area:1 / 3 / 4 / 4;" <?php post_class( 'grid-area:1 / 3 / 4 / 4; imghvr-blur' ); ?>>
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
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php else : ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.', 'st2' ); ?></p>
            <?php endif; ?>
            <?php if ( $casino->have_posts() ) : ?>
                <?php $casino_item_number = 0; ?>
                <?php while ( $casino->have_posts() && $casino_item_number++ < 1 ) : $casino->the_post(); ?>
                    <figure style="grid-area:5 / 3 / 8 / 4;" <?php post_class( 'grid-area:5 / 3 / 8 / 4; imghvr-blur' ); ?>>
                        <img src="https://images.unsplash.com/photo-1518127864129-8d0834d765bc?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&ixid=eyJhcHBfaWQiOjIwOTIyfQ&s=687274d645f07306fb95328c405048c5">
                        <figcaption>
                            <a class="btn active btn-sm d-table btn-warning btn-block" role="button" aria-pressed="true" href="#"><?php _e( 'Play', 'st2' ); ?></a>
                            <a class="btn active btn-sm btn-danger d-table" role="button" aria-pressed="true" href="#"><?php _e( 'T&C´s', 'st2' ); ?></a>
                            <h6 class="text-center display-5"><?php _e( 'Heading 6', 'st2' ); ?></h6>
                            <p class="text-center d-table float-left"><?php _e( 'Paragraph', 'st2' ); ?></p>
                        </figcaption>
                    </figure>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php else : ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.', 'st2' ); ?></p>
            <?php endif; ?>
        </div>
    <?php else : ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.', 'st2' ); ?></p>
    <?php endif; ?> 
</div>                                 

<?php get_footer(); ?>