<?php
get_header(); ?>

<div class="wrapper" id="index-wrapper"> 
    <ul class="nav justify-content-center nav-pills" role="tablist"> 
        <li class="nav-item"> 
            <a class="nav-link active" href="#tab1" data-toggle="tab" role="tab" aria-controls="tab1" aria-expanded="true"><?php _e( 'Home', 'st2' ); ?></a> 
        </li>                         

        <li class="nav-item"> 
            <a class="nav-link" href="#tab2" data-toggle="tab" role="tab" aria-controls="tab2" aria-expanded="true"><?php _e( 'Profile', 'st2' ); ?></a> 
        </li>                         

        <li class="nav-item"> 
            <a class="nav-link" href="#tab3" data-toggle="tab" role="tab" aria-controls="tab3" aria-expanded="true"><?php _e( 'Messages', 'st2' ); ?></a> 
        </li>                                                  
    </ul>
    <div class="tab-content">
        <div class="tab-pane active" role="tabpanel" aria-labelledby="tab1-tab" id="tab1">
            <div style="display:grid;grid-template-columns:1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr;grid-template-rows:100px 100px 100px 100px 100px 100px 100px 100px;grid-gap:10px;" class="container">
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
                        <figure style="grid-area:1 / 2 / 4 / 6;" <?php post_class( 'imghvr-blur' ); ?> id="post-<?php the_ID(); ?>">
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
                        <figure style="grid-area:4 / 2 / 8 / 4;" <?php post_class( 'imghvr-blur' ); ?> id="post-<?php the_ID(); ?>">
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
                        <figure style="grid-area:6 / 4 / 8 / 8;" <?php post_class( 'imghvr-blur' ); ?> id="post-<?php the_ID(); ?>">
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
                        <figure style="grid-area:1 / 6 / 3 / 8;" <?php post_class( 'imghvr-blur' ); ?> id="post-<?php the_ID(); ?>">
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
                        <figure style="grid-area:4 / 4 / 6 / 6;" <?php post_class( 'imghvr-blur' ); ?> id="post-<?php the_ID(); ?>">
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
                        <figure style="grid-area:3 / 6 / 6 / 8;" <?php post_class( 'imghvr-blur' ); ?> id="post-<?php the_ID(); ?>">
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
            <p><?php _e( 'Tab 1 content goes here...', 'st2' ); ?></p>
        </div>
        <div class="tab-pane" role="tabpanel" aria-labelledby="tab2-tab" id="tab2">
            <div style="display:grid;grid-template-columns:1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr;grid-template-rows:100px 100px 100px 100px 100px 100px 100px 100px;grid-gap:10px;" class="container">
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
                        <figure style="grid-area:1 / 2 / 4 / 6;" <?php post_class( 'imghvr-blur' ); ?> id="post-<?php the_ID(); ?>">
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
                        <figure style="grid-area:4 / 2 / 8 / 4;" <?php post_class( 'imghvr-blur' ); ?> id="post-<?php the_ID(); ?>">
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
                        <figure style="grid-area:6 / 4 / 8 / 8;" <?php post_class( 'imghvr-blur' ); ?> id="post-<?php the_ID(); ?>">
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
                        <figure style="grid-area:1 / 6 / 3 / 8;" <?php post_class( 'imghvr-blur' ); ?> id="post-<?php the_ID(); ?>">
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
                        <figure style="grid-area:4 / 4 / 6 / 6;" <?php post_class( 'imghvr-blur' ); ?> id="post-<?php the_ID(); ?>">
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
                        <figure style="grid-area:3 / 6 / 6 / 8;" <?php post_class( 'imghvr-blur' ); ?> id="post-<?php the_ID(); ?>">
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
            <p><?php _e( 'Tab 2 content goes here...', 'st2' ); ?></p>
        </div>
        <div class="tab-pane" role="tabpanel" aria-labelledby="tab3-tab" id="tab3">
            <div style="display:grid;grid-template-columns:1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr;grid-template-rows:100px 100px 100px 100px 100px 100px 100px 100px;grid-gap:10px;" class="container">
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
                        <figure style="grid-area:1 / 2 / 4 / 6;" <?php post_class( 'imghvr-blur' ); ?> id="post-<?php the_ID(); ?>">
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
                        <figure style="grid-area:4 / 2 / 8 / 4;" <?php post_class( 'imghvr-blur' ); ?> id="post-<?php the_ID(); ?>">
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
                        <figure style="grid-area:6 / 4 / 8 / 8;" <?php post_class( 'imghvr-blur' ); ?> id="post-<?php the_ID(); ?>">
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
                        <figure style="grid-area:1 / 6 / 3 / 8;" <?php post_class( 'imghvr-blur' ); ?> id="post-<?php the_ID(); ?>">
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
                        <figure style="grid-area:4 / 4 / 6 / 6;" <?php post_class( 'imghvr-blur' ); ?> id="post-<?php the_ID(); ?>">
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
                        <figure style="grid-area:3 / 6 / 6 / 8;" <?php post_class( 'imghvr-blur' ); ?> id="post-<?php the_ID(); ?>">
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
            <p><?php _e( 'Tab 3 content goes here...', 'st2' ); ?></p>
        </div>
    </div>                     
</div>                                 

<?php get_footer(); ?>