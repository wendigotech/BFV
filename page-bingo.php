<?php
get_header(); ?>

<div id="page-wrapper" class="wrapper"> 
    <div class="container" id="content" tabindex="-1">
        <div class="row">
            <div class="col-md-12"> 
                <?php the_content(); ?> 
            </div>
        </div>
        <div class="container grid-3">
            <?php
                $Bingo_args = array(
                    'category_name' => 'bingo',
                    'nopaging' => true,
                    'order' => 'DESC',
                    'orderby' => 'date'
                )
            ?>
            <?php $Bingo = new WP_Query( $Bingo_args ); ?>
            <?php if ( $Bingo->have_posts() ) : ?>
                <?php $Bingo_item_number = 0; ?>
                <?php while ( $Bingo->have_posts() && $Bingo_item_number++ < 1 ) : $Bingo->the_post(); ?>
                    <figure style="grid-area:2 / 2 / 5 / 4;" <?php post_class( 'imghvr-blur' ); ?> id="post-<?php the_ID(); ?>">
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
                                        <a class="btn active hvr-sweep-to-left hint--bottom hint--small h-auto w-auto shadow-sm text-light btn-sm border border-light" aria-label="Thank you!" role="button" aria-pressed="true" data-html="false" href="<?php echo get_post_meta( get_the_ID(), 'T&C´s link', true ); ?>" data-toggle="tooltip" data-placement="bottom" data-trigger="hover" title="<?php echo get_post_meta( get_the_ID(), 'Key', true ); ?>"><?php _e( 'T&C´s', 'st2' ); ?></a> 
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
            <?php if ( $Bingo->have_posts() ) : ?>
                <?php $Bingo_item_number = 0; ?>
                <?php while ( $Bingo->have_posts() && $Bingo_item_number++ < 1 ) : $Bingo->the_post(); ?>
                    <figure style="grid-area:2 / 4 / 4 / 8;" <?php post_class( 'imghvr-blur' ); ?> id="post-<?php the_ID(); ?>">
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
                                        <a class="btn active hvr-sweep-to-left hint--bottom hint--small h-auto w-auto shadow-sm text-light btn-sm border border-light" aria-label="Thank you!" role="button" aria-pressed="true" data-html="false" href="<?php echo get_post_meta( get_the_ID(), 'T&C´s link', true ); ?>" data-toggle="tooltip" data-placement="bottom" data-trigger="hover" title="<?php echo get_post_meta( get_the_ID(), 'Key', true ); ?>"><?php _e( 'T&C´s', 'st2' ); ?></a> 
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
            <?php if ( $Bingo->have_posts() ) : ?>
                <?php $Bingo_item_number = 0; ?>
                <?php while ( $Bingo->have_posts() && $Bingo_item_number++ < 1 ) : $Bingo->the_post(); ?>
                    <figure style="grid-area:4 / 4 / 6 / 6;" <?php post_class( 'imghvr-blur' ); ?> id="post-<?php the_ID(); ?>">
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
                                        <a class="btn active hvr-sweep-to-left hint--bottom hint--small h-auto w-auto shadow-sm text-light btn-sm border border-light" aria-label="Thank you!" role="button" aria-pressed="true" data-html="false" href="<?php echo get_post_meta( get_the_ID(), 'T&C´s link', true ); ?>" data-toggle="tooltip" data-placement="bottom" data-trigger="hover" title="<?php echo get_post_meta( get_the_ID(), 'Key', true ); ?>"><?php _e( 'T&C´s', 'st2' ); ?></a> 
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
            <?php if ( $Bingo->have_posts() ) : ?>
                <?php $Bingo_item_number = 0; ?>
                <?php while ( $Bingo->have_posts() && $Bingo_item_number++ < 1 ) : $Bingo->the_post(); ?>
                    <figure style="grid-area:4 / 6 / 8 / 8;" <?php post_class( 'imghvr-blur' ); ?> id="post-<?php the_ID(); ?>">
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
                                        <a class="btn active hvr-sweep-to-left hint--bottom hint--small h-auto w-auto shadow-sm text-light btn-sm border border-light" aria-label="Thank you!" role="button" aria-pressed="true" data-html="false" href="<?php echo get_post_meta( get_the_ID(), 'T&C´s link', true ); ?>" data-toggle="tooltip" data-placement="bottom" data-trigger="hover" title="<?php echo get_post_meta( get_the_ID(), 'Key', true ); ?>"><?php _e( 'T&C´s', 'st2' ); ?></a> 
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
            <?php if ( $Bingo->have_posts() ) : ?>
                <?php $Bingo_item_number = 0; ?>
                <?php while ( $Bingo->have_posts() && $Bingo_item_number++ < 1 ) : $Bingo->the_post(); ?>
                    <figure style="grid-area:6 / 4 / 9 / 6;" <?php post_class( 'imghvr-blur' ); ?> id="post-<?php the_ID(); ?>">
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
                                        <a class="btn active hvr-sweep-to-left hint--bottom hint--small h-auto w-auto shadow-sm text-light btn-sm border border-light" aria-label="Thank you!" role="button" aria-pressed="true" data-html="false" href="<?php echo get_post_meta( get_the_ID(), 'T&C´s link', true ); ?>" data-toggle="tooltip" data-placement="bottom" data-trigger="hover" title="<?php echo get_post_meta( get_the_ID(), 'Key', true ); ?>"><?php _e( 'T&C´s', 'st2' ); ?></a> 
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
            <?php if ( $Bingo->have_posts() ) : ?>
                <?php $Bingo_item_number = 0; ?>
                <?php while ( $Bingo->have_posts() && $Bingo_item_number++ < 1 ) : $Bingo->the_post(); ?>
                    <figure style="grid-area:8 / 6 / 11 / 8;" <?php post_class( 'imghvr-blur' ); ?> id="post-<?php the_ID(); ?>">
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
                                        <a class="btn active hvr-sweep-to-left hint--bottom hint--small h-auto w-auto shadow-sm text-light btn-sm border border-light" aria-label="Thank you!" role="button" aria-pressed="true" data-html="false" href="<?php echo get_post_meta( get_the_ID(), 'T&C´s link', true ); ?>" data-toggle="tooltip" data-placement="bottom" data-trigger="hover" title="<?php echo get_post_meta( get_the_ID(), 'Key', true ); ?>"><?php _e( 'T&C´s', 'st2' ); ?></a> 
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
            <?php if ( $Bingo->have_posts() ) : ?>
                <?php $Bingo_item_number = 0; ?>
                <?php while ( $Bingo->have_posts() && $Bingo_item_number++ < 1 ) : $Bingo->the_post(); ?>
                    <figure style="grid-area:9 / 4 / 11 / 6;" <?php post_class( 'imghvr-blur' ); ?> id="post-<?php the_ID(); ?>">
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
                                        <a class="btn active hvr-sweep-to-left hint--bottom hint--small h-auto w-auto shadow-sm text-light btn-sm border border-light" aria-label="Thank you!" role="button" aria-pressed="true" data-html="false" href="<?php echo get_post_meta( get_the_ID(), 'T&C´s link', true ); ?>" data-toggle="tooltip" data-placement="bottom" data-trigger="hover" title="<?php echo get_post_meta( get_the_ID(), 'Key', true ); ?>"><?php _e( 'T&C´s', 'st2' ); ?></a> 
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
            <?php if ( $Bingo->have_posts() ) : ?>
                <?php $Bingo_item_number = 0; ?>
                <?php while ( $Bingo->have_posts() && $Bingo_item_number++ < 1 ) : $Bingo->the_post(); ?>
                    <figure style="grid-area:8 / 2 / 12 / 4;" <?php post_class( 'imghvr-blur' ); ?> id="post-<?php the_ID(); ?>">
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
                                        <a class="btn active hvr-sweep-to-left hint--bottom hint--small h-auto w-auto shadow-sm text-light btn-sm border border-light" aria-label="Thank you!" role="button" aria-pressed="true" data-html="false" href="<?php echo get_post_meta( get_the_ID(), 'T&C´s link', true ); ?>" data-toggle="tooltip" data-placement="bottom" data-trigger="hover" title="<?php echo get_post_meta( get_the_ID(), 'Key', true ); ?>"><?php _e( 'T&C´s', 'st2' ); ?></a> 
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
            <?php if ( $Bingo->have_posts() ) : ?>
                <?php $Bingo_item_number = 0; ?>
                <?php while ( $Bingo->have_posts() && $Bingo_item_number++ < 1 ) : $Bingo->the_post(); ?>
                    <figure style="grid-area:5 / 2 / 8 / 4;" <?php post_class( 'imghvr-blur' ); ?> id="post-<?php the_ID(); ?>">
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
                                        <a class="btn active hvr-sweep-to-left hint--bottom hint--small h-auto w-auto shadow-sm text-light btn-sm border border-light" aria-label="Thank you!" role="button" aria-pressed="true" data-html="false" href="<?php echo get_post_meta( get_the_ID(), 'T&C´s link', true ); ?>" data-toggle="tooltip" data-placement="bottom" data-trigger="hover" title="<?php echo get_post_meta( get_the_ID(), 'Key', true ); ?>"><?php _e( 'T&C´s', 'st2' ); ?></a> 
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