<?php
get_header(); ?>

<div id="page-wrapper" class="wrapper"> 
    <div class="container" id="content" tabindex="-1"> 
        <div class="container grid-2">
            <?php
                $Sports_args = array(
                    'category_name' => 'sports',
                    'nopaging' => true,
                    'order' => 'ASC',
                    'orderby' => 'date'
                )
            ?>
            <?php $Sports = new WP_Query( $Sports_args ); ?>
            <?php if ( $Sports->have_posts() ) : ?>
                <?php $Sports_item_number = 0; ?>
                <?php while ( $Sports->have_posts() && $Sports_item_number++ < 1 ) : $Sports->the_post(); ?>
                    <figure style="grid-area:2 / 2 / 4 / 5;" <?php post_class( 'imghvr-blur' ); ?> id="post-<?php the_ID(); ?>">
                        <?php
                            if ( has_post_thumbnail() ) {
                                the_post_thumbnail( 'normal' );
                            }
                         ?>
                        <a href="<?php echo get_post_meta( get_the_ID(), 'Link', true ); ?>">
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
            <?php if ( $Sports->have_posts() ) : ?>
                <?php $Sports_item_number = 0; ?>
                <?php while ( $Sports->have_posts() && $Sports_item_number++ < 1 ) : $Sports->the_post(); ?>
                    <figure style="grid-area:2 / 5 / 5 / 8;" <?php post_class( 'imghvr-blur' ); ?> id="post-<?php the_ID(); ?>">
                        <?php
                            if ( has_post_thumbnail() ) {
                                the_post_thumbnail( 'normal' );
                            }
                         ?>
                        <a href="<?php echo get_post_meta( get_the_ID(), 'Link', true ); ?>">
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
            <?php if ( $Sports->have_posts() ) : ?>
                <?php $Sports_item_number = 0; ?>
                <?php while ( $Sports->have_posts() && $Sports_item_number++ < 1 ) : $Sports->the_post(); ?>
                    <figure style="grid-area:5 / 5 / 7 / 8;" <?php post_class( 'imghvr-blur' ); ?> id="post-<?php the_ID(); ?>">
                        <?php
                            if ( has_post_thumbnail() ) {
                                the_post_thumbnail( 'normal' );
                            }
                         ?>
                        <a href="<?php echo get_post_meta( get_the_ID(), 'Link', true ); ?>">
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
            <?php if ( $Sports->have_posts() ) : ?>
                <?php $Sports_item_number = 0; ?>
                <?php while ( $Sports->have_posts() && $Sports_item_number++ < 1 ) : $Sports->the_post(); ?>
                    <figure style="grid-area:4 / 2 / 7 / 5;" <?php post_class( 'imghvr-blur' ); ?> id="post-<?php the_ID(); ?>">
                        <?php
                            if ( has_post_thumbnail() ) {
                                the_post_thumbnail( 'normal' );
                            }
                         ?>
                        <a href="<?php echo get_post_meta( get_the_ID(), 'Link', true ); ?>">
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
            <?php if ( $Sports->have_posts() ) : ?>
                <?php $Sports_item_number = 0; ?>
                <?php while ( $Sports->have_posts() && $Sports_item_number++ < 1 ) : $Sports->the_post(); ?>
                    <figure style="grid-area:7 / 6 / 11 / 8;" <?php post_class( 'imghvr-blur' ); ?> id="post-<?php the_ID(); ?>">
                        <?php
                            if ( has_post_thumbnail() ) {
                                the_post_thumbnail( 'normal' );
                            }
                         ?>
                        <a href="<?php echo get_post_meta( get_the_ID(), 'Link', true ); ?>">
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
            <?php if ( $Sports->have_posts() ) : ?>
                <?php $Sports_item_number = 0; ?>
                <?php while ( $Sports->have_posts() && $Sports_item_number++ < 1 ) : $Sports->the_post(); ?>
                    <figure style="grid-area:7 / 4 / 10 / 6;" <?php post_class( 'imghvr-blur' ); ?> id="post-<?php the_ID(); ?>">
                        <?php
                            if ( has_post_thumbnail() ) {
                                the_post_thumbnail( 'normal' );
                            }
                         ?>
                        <a href="<?php echo get_post_meta( get_the_ID(), 'Link', true ); ?>">
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
            <?php if ( $Sports->have_posts() ) : ?>
                <?php $Sports_item_number = 0; ?>
                <?php while ( $Sports->have_posts() && $Sports_item_number++ < 1 ) : $Sports->the_post(); ?>
                    <figure style="grid-area:7 / 2 / 11 / 4;" <?php post_class( 'imghvr-blur' ); ?> id="post-<?php the_ID(); ?>">
                        <?php
                            if ( has_post_thumbnail() ) {
                                the_post_thumbnail( 'normal' );
                            }
                         ?>
                        <a href="<?php echo get_post_meta( get_the_ID(), 'Link', true ); ?>">
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