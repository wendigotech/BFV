<?php
get_header(); ?>

<div id="page-wrapper" class="wrapper"> 
    <div class="container" id="content" tabindex="-1" style="margin-top: 100px;"> 
        <div class="container grid-4">
            <?php
                $Software_args = array(
                    'category_name' => 'software',
                    'nopaging' => true,
                    'order' => 'DESC',
                    'orderby' => 'date'
                )
            ?>
            <?php $Software = new WP_Query( $Software_args ); ?>
            <?php if ( $Software->have_posts() ) : ?>
                <?php $Software_item_number = 0; ?>
                <?php while ( $Software->have_posts() && $Software_item_number++ < 1 ) : $Software->the_post(); ?>
                    <figure style="grid-area:1 / 1 / 4 / 5;" <?php post_class( 'imghvr-blur' ); ?> id="post-<?php the_ID(); ?>">
                        <?php
                            if ( has_post_thumbnail() ) {
                                the_post_thumbnail( 'normal' );
                            }
                         ?>
                        <a href="<?php echo esc_url( get_permalink() ); ?>">
                            <?php _e( 'Link', 'st2' ); ?>
                            <figcaption class="d-flex flex-column justify-content-center align-items-center align-content-center">
                                <h3><?php _e( 'Read full review', 'st2' ); ?></h3>
                            </figcaption>
                        </a>
                    </figure>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php else : ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.', 'st2' ); ?></p>
            <?php endif; ?>
            <?php if ( $Software->have_posts() ) : ?>
                <?php $Software_item_number = 0; ?>
                <?php while ( $Software->have_posts() && $Software_item_number++ < 1 ) : $Software->the_post(); ?>
                    <figure style="grid-area:1 / 5 / 4 / 8;" <?php post_class( 'imghvr-blur' ); ?> id="post-<?php the_ID(); ?>">
                        <?php
                            if ( has_post_thumbnail() ) {
                                the_post_thumbnail( 'normal' );
                            }
                         ?>
                        <a href="<?php echo esc_url( get_permalink() ); ?>">
                            <?php _e( 'Link', 'st2' ); ?>
                            <figcaption class="d-flex flex-column justify-content-center align-items-center align-content-center">
                                <h3><?php _e( 'Read full review', 'st2' ); ?></h3>
                            </figcaption>
                        </a>
                    </figure>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php else : ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.', 'st2' ); ?></p>
            <?php endif; ?>
            <?php if ( $Software->have_posts() ) : ?>
                <?php $Software_item_number = 0; ?>
                <?php while ( $Software->have_posts() && $Software_item_number++ < 1 ) : $Software->the_post(); ?>
                    <figure style="grid-area:4 / 6 / 8 / 8;" <?php post_class( 'imghvr-blur' ); ?> id="post-<?php the_ID(); ?>">
                        <?php
                            if ( has_post_thumbnail() ) {
                                the_post_thumbnail( 'normal' );
                            }
                         ?>
                        <a href="<?php echo esc_url( get_permalink() ); ?>">
                            <?php _e( 'Link', 'st2' ); ?>
                            <figcaption class="d-flex flex-column justify-content-center align-items-center align-content-center">
                                <h3><?php _e( 'Read full review', 'st2' ); ?></h3>
                            </figcaption>
                        </a>
                    </figure>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php else : ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.', 'st2' ); ?></p>
            <?php endif; ?>
            <?php if ( $Software->have_posts() ) : ?>
                <?php $Software_item_number = 0; ?>
                <?php while ( $Software->have_posts() && $Software_item_number++ < 1 ) : $Software->the_post(); ?>
                    <figure style="grid-area:4 / 1 / 8 / 4;" <?php post_class( 'imghvr-blur' ); ?> id="post-<?php the_ID(); ?>">
                        <?php
                            if ( has_post_thumbnail() ) {
                                the_post_thumbnail( 'normal' );
                            }
                         ?>
                        <a href="<?php echo esc_url( get_permalink() ); ?>">
                            <?php _e( 'Link', 'st2' ); ?>
                            <figcaption class="d-flex flex-column justify-content-center align-items-center align-content-center">
                                <h3><?php _e( 'Read full review', 'st2' ); ?></h3>
                            </figcaption>
                        </a>
                    </figure>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php else : ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.', 'st2' ); ?></p>
            <?php endif; ?>
            <?php if ( $Software->have_posts() ) : ?>
                <?php $Software_item_number = 0; ?>
                <?php while ( $Software->have_posts() && $Software_item_number++ < 1 ) : $Software->the_post(); ?>
                    <figure style="grid-area:4 / 4 / 8 / 6;" <?php post_class( 'imghvr-blur' ); ?> id="post-<?php the_ID(); ?>">
                        <?php
                            if ( has_post_thumbnail() ) {
                                the_post_thumbnail( 'normal' );
                            }
                         ?>
                        <a href="<?php echo esc_url( get_permalink() ); ?>">
                            <?php _e( 'Link', 'st2' ); ?>
                            <figcaption class="d-flex flex-column justify-content-center align-items-center align-content-center">
                                <h3><?php _e( 'Read full review', 'st2' ); ?></h3>
                            </figcaption>
                        </a>
                    </figure>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php else : ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.', 'st2' ); ?></p>
            <?php endif; ?>
        </div>
    </div>                     
</div>                                 

<?php get_footer(); ?>