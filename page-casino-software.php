<?php
get_header(); ?>

<div id="page-wrapper" class="wrapper"> 
    <div class="container" id="content" tabindex="-1"> 
        <div class="container grid-4">
            <?php
                $Software_args = array(
                    'category_name' => 'software',
                    'nopaging' => true,
                    'order' => 'ASC',
                    'orderby' => 'date'
                )
            ?>
            <?php $Software = new WP_Query( $Software_args ); ?>
            <?php if ( $Software->have_posts() ) : ?>
                <?php $Software_item_number = 0; ?>
                <?php while ( $Software->have_posts() && $Software_item_number++ < 1 ) : $Software->the_post(); ?>
                    <figure style="grid-area:2 / 2 / 4 / 4;" <?php post_class( 'imghvr-blur' ); ?> id="post-<?php the_ID(); ?>">
                        <?php
                            if ( has_post_thumbnail() ) {
                                the_post_thumbnail( 'normal' );
                            }
                         ?>
                        <a href="<?php echo esc_url( get_permalink() ); ?>">
                            <?php _e( 'Link', 'st2' ); ?>
                            <figcaption>
                                <div class="row pg-empty-placeholder">
                                    <div class="col-md-6 col-sm-6">
                                        <a class="btn active hvr-sweep-to-left hint--bottom hint--small h-auto w-auto shadow-sm text-light btn-sm border border-light" aria-label="<?php echo get_post_meta( get_the_ID(), 'Key', true ); ?>" role="button" aria-pressed="true" data-html="false" href="<?php echo get_post_meta( get_the_ID(), 'T&C´s link', true ); ?>"><?php _e( 'T&C´s', 'st2' ); ?></a> 
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <a class="btn active hvr-sweep-to-top btn-light shadow-sm bg-light float-right text-uppercase font-weight-bold text-success btn-sm" role="button" aria-pressed="true" data-html="true" href="<?php echo get_post_meta( get_the_ID(), 'Link', true ); ?>"><?php _e( 'Play', 'st2' ); ?></a> 
                                    </div>
                                </div>
                                <div class="col-md-12"> 
                                    <h6 class="text-center display-5 "><?php the_title(); ?></h6>
                                    <?php the_excerpt( ); ?>
                                </div>
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
                    <figure style="grid-area:2 / 4 / 4 / 8;" <?php post_class( 'imghvr-blur' ); ?> id="post-<?php the_ID(); ?>">
                        <?php
                            if ( has_post_thumbnail() ) {
                                the_post_thumbnail( 'normal' );
                            }
                         ?>
                        <a href="<?php echo esc_url( get_permalink() ); ?>">
                            <?php _e( 'Link', 'st2' ); ?>
                            <figcaption>
                                <div class="row pg-empty-placeholder">
                                    <div class="col-md-6 col-sm">
                                        <a class="btn active hvr-sweep-to-left hint--bottom hint--small h-auto w-auto shadow-sm text-light btn-sm border border-light" aria-label="<?php echo get_post_meta( get_the_ID(), 'Key', true ); ?>" role="button" aria-pressed="true" data-html="false" href="<?php echo get_post_meta( get_the_ID(), 'T&C´s link', true ); ?>"><?php _e( 'T&C´s', 'st2' ); ?></a> 
                                    </div>
                                    <div class="col-md-6 col-sm">
                                        <a class="btn active hvr-sweep-to-top btn-light shadow-sm bg-light float-right text-uppercase font-weight-bold text-success btn-sm" role="button" aria-pressed="true" data-html="true" href="<?php echo get_post_meta( get_the_ID(), 'Link', true ); ?>"><?php _e( 'Play', 'st2' ); ?></a> 
                                    </div>
                                </div>
                                <div class="col-md-12"> 
                                    <h6 class="text-center display-5 "><?php the_title(); ?></h6>
                                    <?php the_excerpt( ); ?>
                                </div>
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
                    <figure style="grid-area:4 / 5 / 8 / 8;" <?php post_class( 'imghvr-blur' ); ?> id="post-<?php the_ID(); ?>">
                        <?php
                            if ( has_post_thumbnail() ) {
                                the_post_thumbnail( 'normal' );
                            }
                         ?>
                        <a href="<?php echo esc_url( get_permalink() ); ?>">
                            <?php _e( 'Link', 'st2' ); ?>
                            <figcaption>
                                <div class="row pg-empty-placeholder">
                                    <div class="col-md-6">
                                        <a class="btn active hvr-sweep-to-left hint--bottom hint--small h-auto w-auto shadow-sm text-light btn-sm border border-light" aria-label="<?php echo get_post_meta( get_the_ID(), 'Key', true ); ?>" role="button" aria-pressed="true" data-html="false" href="<?php echo get_post_meta( get_the_ID(), 'T&C´s link', true ); ?>"><?php _e( 'T&C´s', 'st2' ); ?></a> 
                                    </div>
                                    <div class="col-md-6">
                                        <a class="btn active hvr-sweep-to-top btn-light shadow-sm bg-light float-right text-uppercase font-weight-bold text-success btn-sm" role="button" aria-pressed="true" data-html="true" href="<?php echo get_post_meta( get_the_ID(), 'Link', true ); ?>"><?php _e( 'Play', 'st2' ); ?></a> 
                                    </div>
                                </div>
                                <div class="col-md-12"> 
                                    <h6 class="text-center display-5 "><?php the_title(); ?></h6>
                                    <?php the_excerpt( ); ?>
                                </div>
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
                    <figure style="grid-area:4 / 2 / 7 / 5;" <?php post_class( 'imghvr-blur' ); ?> id="post-<?php the_ID(); ?>">
                        <?php
                            if ( has_post_thumbnail() ) {
                                the_post_thumbnail( 'normal' );
                            }
                         ?>
                        <a href="<?php echo esc_url( get_permalink() ); ?>">
                            <?php _e( 'Link', 'st2' ); ?>
                            <figcaption>
                                <div class="row pg-empty-placeholder">
                                    <div class="col-md-6">
                                        <a class="btn active hvr-sweep-to-left hint--bottom hint--small h-auto w-auto shadow-sm text-light btn-sm border border-light" aria-label="<?php echo get_post_meta( get_the_ID(), 'Key', true ); ?>" role="button" aria-pressed="true" data-html="false" href="<?php echo get_post_meta( get_the_ID(), 'T&C´s link', true ); ?>"><?php _e( 'T&C´s', 'st2' ); ?></a> 
                                    </div>
                                    <div class="col-md-6">
                                        <a class="btn active hvr-sweep-to-top btn-light shadow-sm bg-light float-right text-uppercase font-weight-bold text-success btn-sm" role="button" aria-pressed="true" data-html="true" href="<?php echo get_post_meta( get_the_ID(), 'Link', true ); ?>"><?php _e( 'Play', 'st2' ); ?></a> 
                                    </div>
                                </div>
                                <div class="col-md-12"> 
                                    <h6 class="text-center display-5 "><?php the_title(); ?></h6>
                                    <?php the_excerpt( ); ?>
                                </div>
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
                    <figure style="grid-area:8 / 6 / 11 / 8;" <?php post_class( 'imghvr-blur' ); ?> id="post-<?php the_ID(); ?>">
                        <?php
                            if ( has_post_thumbnail() ) {
                                the_post_thumbnail( 'normal' );
                            }
                         ?>
                        <a href="<?php echo esc_url( get_permalink() ); ?>">
                            <?php _e( 'Link', 'st2' ); ?>
                            <figcaption>
                                <div class="row pg-empty-placeholder">
                                    <div class="col-md-6">
                                        <a class="btn active hvr-sweep-to-left hint--bottom hint--small h-auto w-auto shadow-sm text-light btn-sm border border-light" aria-label="<?php echo get_post_meta( get_the_ID(), 'Key', true ); ?>" role="button" aria-pressed="true" data-html="false" href="<?php echo get_post_meta( get_the_ID(), 'T&C´s link', true ); ?>"><?php _e( 'T&C´s', 'st2' ); ?></a> 
                                    </div>
                                    <div class="col-md-6">
                                        <a class="btn active hvr-sweep-to-top btn-light shadow-sm bg-light float-right text-uppercase font-weight-bold text-success btn-sm" role="button" aria-pressed="true" data-html="true" href="<?php echo get_post_meta( get_the_ID(), 'Link', true ); ?>"><?php _e( 'Play', 'st2' ); ?></a> 
                                    </div>
                                </div>
                                <div class="col-md-12"> 
                                    <h6 class="text-center display-5 "><?php the_title(); ?></h6>
                                    <?php the_excerpt( ); ?>
                                </div>
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
                    <figure style="grid-area:8 / 5 / 11 / 6;" <?php post_class( 'imghvr-blur' ); ?> id="post-<?php the_ID(); ?>">
                        <?php
                            if ( has_post_thumbnail() ) {
                                the_post_thumbnail( 'normal' );
                            }
                         ?>
                        <a href="<?php echo esc_url( get_permalink() ); ?>">
                            <?php _e( 'Link', 'st2' ); ?>
                            <figcaption>
                                <div class="row pg-empty-placeholder">
                                    <div class="col-md-6">
                                        <a class="btn active hvr-sweep-to-left hint--bottom hint--small h-auto w-auto shadow-sm text-light btn-sm border border-light" aria-label="<?php echo get_post_meta( get_the_ID(), 'Key', true ); ?>" role="button" aria-pressed="true" data-html="false" href="<?php echo get_post_meta( get_the_ID(), 'T&C´s link', true ); ?>"><?php _e( 'T&C´s', 'st2' ); ?></a> 
                                    </div>
                                    <div class="col-md-6">
                                        <a class="btn active hvr-sweep-to-top btn-light shadow-sm bg-light float-right text-uppercase font-weight-bold text-success btn-sm" role="button" aria-pressed="true" data-html="true" href="<?php echo get_post_meta( get_the_ID(), 'Link', true ); ?>"><?php _e( 'Play', 'st2' ); ?></a> 
                                    </div>
                                </div>
                                <div class="col-md-12"> 
                                    <h6 class="text-center display-5 "><?php the_title(); ?></h6>
                                    <?php the_excerpt( ); ?>
                                </div>
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
                    <figure style="grid-area:11 / 4 / 14 / 8;" <?php post_class( 'imghvr-blur' ); ?> id="post-<?php the_ID(); ?>">
                        <?php
                            if ( has_post_thumbnail() ) {
                                the_post_thumbnail( 'normal' );
                            }
                         ?>
                        <a href="<?php echo esc_url( get_permalink() ); ?>">
                            <?php _e( 'Link', 'st2' ); ?>
                            <figcaption>
                                <div class="row pg-empty-placeholder">
                                    <div class="col-md-6">
                                        <a class="btn active hvr-sweep-to-left hint--bottom hint--small h-auto w-auto shadow-sm text-light btn-sm border border-light" aria-label="<?php echo get_post_meta( get_the_ID(), 'Key', true ); ?>" role="button" aria-pressed="true" data-html="false" href="<?php echo get_post_meta( get_the_ID(), 'T&C´s link', true ); ?>"><?php _e( 'T&C´s', 'st2' ); ?></a> 
                                    </div>
                                    <div class="col-md-6">
                                        <a class="btn active hvr-sweep-to-top btn-light shadow-sm bg-light float-right text-uppercase font-weight-bold text-success btn-sm" role="button" aria-pressed="true" data-html="true" href="<?php echo get_post_meta( get_the_ID(), 'Link', true ); ?>"><?php _e( 'Play', 'st2' ); ?></a> 
                                    </div>
                                </div>
                                <div class="col-md-12"> 
                                    <h6 class="text-center display-5 "><?php the_title(); ?></h6>
                                    <?php the_excerpt( ); ?>
                                </div>
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
                    <figure style="grid-area:11 / 2 / 14 / 4;" <?php post_class( 'imghvr-blur' ); ?> id="post-<?php the_ID(); ?>">
                        <?php
                            if ( has_post_thumbnail() ) {
                                the_post_thumbnail( 'normal' );
                            }
                         ?>
                        <a href="<?php echo esc_url( get_permalink() ); ?>">
                            <?php _e( 'Link', 'st2' ); ?>
                            <figcaption>
                                <div class="row pg-empty-placeholder">
                                    <div class="col-md-6">
                                        <a class="btn active hvr-sweep-to-left hint--bottom hint--small h-auto w-auto shadow-sm text-light btn-sm border border-light" aria-label="<?php echo get_post_meta( get_the_ID(), 'Key', true ); ?>" role="button" aria-pressed="true" data-html="false" href="<?php echo get_post_meta( get_the_ID(), 'T&C´s link', true ); ?>"><?php _e( 'T&C´s', 'st2' ); ?></a> 
                                    </div>
                                    <div class="col-md-6">
                                        <a class="btn active hvr-sweep-to-top btn-light shadow-sm bg-light float-right text-uppercase font-weight-bold text-success btn-sm" role="button" aria-pressed="true" data-html="true" href="<?php echo get_post_meta( get_the_ID(), 'Link', true ); ?>"><?php _e( 'Play', 'st2' ); ?></a> 
                                    </div>
                                </div>
                                <div class="col-md-12"> 
                                    <h6 class="text-center display-5 "><?php the_title(); ?></h6>
                                    <?php the_excerpt( ); ?>
                                </div>
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
                    <figure style="grid-area:7 / 2 / 11 / 5;" <?php post_class( 'imghvr-blur' ); ?> id="post-<?php the_ID(); ?>">
                        <?php
                            if ( has_post_thumbnail() ) {
                                the_post_thumbnail( 'normal' );
                            }
                         ?>
                        <a href="<?php echo esc_url( get_permalink() ); ?>">
                            <?php _e( 'Link', 'st2' ); ?>
                            <figcaption>
                                <div class="row pg-empty-placeholder">
                                    <div class="col-md-6">
                                        <a class="btn active hvr-sweep-to-left hint--bottom hint--small h-auto w-auto shadow-sm text-light btn-sm border border-light" aria-label="<?php echo get_post_meta( get_the_ID(), 'Key', true ); ?>" role="button" aria-pressed="true" data-html="false" href="<?php echo get_post_meta( get_the_ID(), 'T&C´s link', true ); ?>"><?php _e( 'T&C´s', 'st2' ); ?></a> 
                                    </div>
                                    <div class="col-md-6">
                                        <a class="btn active hvr-sweep-to-top btn-light shadow-sm bg-light float-right text-uppercase font-weight-bold text-success btn-sm" role="button" aria-pressed="true" data-html="true" href="<?php echo get_post_meta( get_the_ID(), 'Link', true ); ?>"><?php _e( 'Play', 'st2' ); ?></a> 
                                    </div>
                                </div>
                                <div class="col-md-12"> 
                                    <h6 class="text-center display-5 "><?php the_title(); ?></h6>
                                    <?php the_excerpt( ); ?>
                                </div>
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