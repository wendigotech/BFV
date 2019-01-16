<?php
get_header(); ?>

<div id="page-wrapper" class="wrapper"> 
    <div class="container" id="content" tabindex="-1"> 
        <div class="row mt-5 mb-5">
            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <div <?php post_class( 'text-light col-md-12 mt-5' ); ?> id="post-<?php the_ID(); ?>"> 
                        <?php the_content(); ?> 
                    </div>
                <?php endwhile; ?>
            <?php else : ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.', 'st2' ); ?></p>
            <?php endif; ?>
        </div>
        <div class="container grid-1">
            <?php
                $casino_args = array(
                    'category_name' => 'casino',
                    'nopaging' => true,
                    'order' => 'DESC',
                    'orderby' => 'date'
                )
            ?>
            <?php $casino = new WP_Query( $casino_args ); ?>
            <?php if ( $casino->have_posts() ) : ?>
                <?php $casino_item_number = 0; ?>
                <?php while ( $casino->have_posts() && $casino_item_number++ < 1 ) : $casino->the_post(); ?>
                    <figure style="grid-area:1 / 1 / 5 / 4;" <?php post_class( 'imghvr-blur' ); ?> id="post-<?php the_ID(); ?>">
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
                                        <a class="btn active hvr-sweep-to-left h-auto w-auto shadow-sm text-light btn-sm border border-light" aria-label="Thank you!" role="button" aria-pressed="true" data-html="false" href="<?php echo get_post_meta( get_the_ID(), 'T&C´s link', true ); ?>" data-toggle="tooltip" data-placement="bottom" data-trigger="hover" title="<?php echo get_post_meta( get_the_ID(), 'Key', true ); ?>"><?php _e( 'T&C´s', 'st2' ); ?></a> 
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
            <?php if ( $casino->have_posts() ) : ?>
                <?php $casino_item_number = 0; ?>
                <?php while ( $casino->have_posts() && $casino_item_number++ < 1 ) : $casino->the_post(); ?>
                    <figure style="grid-area:5 / 6 / 7 / 9;" <?php post_class( 'imghvr-blur' ); ?> id="post-<?php the_ID(); ?>">
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
            <?php if ( $casino->have_posts() ) : ?>
                <?php $casino_item_number = 0; ?>
                <?php while ( $casino->have_posts() && $casino_item_number++ < 1 ) : $casino->the_post(); ?>
                    <figure style="grid-area:4 / 4 / 7 / 6;" <?php post_class( 'imghvr-blur' ); ?> id="post-<?php the_ID(); ?>">
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
                                        <a class="btn active hvr-sweep-to-left hint--bottom h-auto w-auto shadow-sm text-light btn-sm border border-light" aria-label="Thank you!" role="button" aria-pressed="true" data-html="false" href="<?php echo get_post_meta( get_the_ID(), 'T&C´s link', true ); ?>" data-toggle="tooltip" data-placement="bottom" data-trigger="hover" title="<?php echo get_post_meta( get_the_ID(), 'Key', true ); ?>"><?php _e( 'T&C´s', 'st2' ); ?></a> 
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
            <?php if ( $casino->have_posts() ) : ?>
                <?php $casino_item_number = 0; ?>
                <?php while ( $casino->have_posts() && $casino_item_number++ < 1 ) : $casino->the_post(); ?>
                    <figure style="grid-area:7 / 4 / 9 / 8;" <?php post_class( 'imghvr-blur' ); ?> id="post-<?php the_ID(); ?>">
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
                                        <a class="btn active hvr-sweep-to-left h-auto w-auto shadow-sm text-light btn-sm border border-light" role="button" aria-pressed="true" data-html="false" href="<?php echo get_post_meta( get_the_ID(), 'T&C´s link', true ); ?>" data-toggle="tooltip" data-placement="bottom" data-trigger="hover" title="<?php echo get_post_meta( get_the_ID(), 'Key', true ); ?>"><?php _e( 'T&C´s', 'st2' ); ?></a> 
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
            <?php if ( $casino->have_posts() ) : ?>
                <?php $casino_item_number = 0; ?>
                <?php while ( $casino->have_posts() && $casino_item_number++ < 1 ) : $casino->the_post(); ?>
                    <figure style="grid-area:9 / 2 / 12 / 6;" <?php post_class( 'imghvr-blur' ); ?> id="post-<?php the_ID(); ?>">
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
                                        <a class="btn active hvr-sweep-to-left h-auto w-auto shadow-sm text-light btn-sm border border-light" aria-label="Thank you!" role="button" aria-pressed="true" data-html="false" href="<?php echo get_post_meta( get_the_ID(), 'T&C´s link', true ); ?>" data-toggle="tooltip" data-placement="bottom" data-trigger="hover" title="<?php echo get_post_meta( get_the_ID(), 'Key', true ); ?>"><?php _e( 'T&C´s', 'st2' ); ?></a> 
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
            <?php if ( $casino->have_posts() ) : ?>
                <?php $casino_item_number = 0; ?>
                <?php while ( $casino->have_posts() && $casino_item_number++ < 1 ) : $casino->the_post(); ?>
                    <figure style="grid-area:9 / 6 / 12 / 8;" <?php post_class( 'imghvr-blur' ); ?> id="post-<?php the_ID(); ?>">
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
                                        <a class="btn active hvr-sweep-to-left h-auto w-auto shadow-sm text-light btn-sm border border-light" aria-label="Thank you!" role="button" aria-pressed="true" data-html="false" href="<?php echo get_post_meta( get_the_ID(), 'T&C´s link', true ); ?>" data-toggle="tooltip" data-placement="bottom" data-trigger="hover" title="<?php echo get_post_meta( get_the_ID(), 'Key', true ); ?>"><?php _e( 'T&C´s', 'st2' ); ?></a> 
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
            <?php if ( $casino->have_posts() ) : ?>
                <?php $casino_item_number = 0; ?>
                <?php while ( $casino->have_posts() && $casino_item_number++ < 1 ) : $casino->the_post(); ?>
                    <figure style="grid-area:12 / 5 / 15 / 8;" <?php post_class( 'imghvr-blur' ); ?> id="post-<?php the_ID(); ?>">
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
                                        <a class="btn active hvr-sweep-to-left h-auto w-auto shadow-sm text-light btn-sm border border-light" aria-label="Thank you!" role="button" aria-pressed="true" data-html="false" href="<?php echo get_post_meta( get_the_ID(), 'T&C´s link', true ); ?>" data-toggle="tooltip" data-placement="bottom" data-trigger="hover" title="<?php echo get_post_meta( get_the_ID(), 'Key', true ); ?>"><?php _e( 'T&C´s', 'st2' ); ?></a> 
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
            <?php if ( $casino->have_posts() ) : ?>
                <?php $casino_item_number = 0; ?>
                <?php while ( $casino->have_posts() && $casino_item_number++ < 1 ) : $casino->the_post(); ?>
                    <figure style="grid-area:12 / 1 / 15 / 5;" <?php post_class( 'imghvr-blur' ); ?> id="post-<?php the_ID(); ?>">
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
                                        <a class="btn active hvr-sweep-to-left h-auto w-auto shadow-sm text-light btn-sm border border-light" aria-label="Thank you!" role="button" aria-pressed="true" data-html="false" href="<?php echo get_post_meta( get_the_ID(), 'T&C´s link', true ); ?>" data-toggle="tooltip" data-placement="bottom" data-trigger="hover" title="<?php echo get_post_meta( get_the_ID(), 'Key', true ); ?>"><?php _e( 'T&C´s', 'st2' ); ?></a> 
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
            <?php if ( $casino->have_posts() ) : ?>
                <?php $casino_item_number = 0; ?>
                <?php while ( $casino->have_posts() && $casino_item_number++ < 1 ) : $casino->the_post(); ?>
                    <figure style="grid-area:5 / 1 / 9 / 4;" <?php post_class( 'imghvr-blur' ); ?> id="post-<?php the_ID(); ?>">
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
                                        <a class="btn active hvr-sweep-to-left h-auto w-auto shadow-sm text-light btn-sm border border-light" aria-label="Thank you!" role="button" aria-pressed="true" data-html="false" href="<?php echo get_post_meta( get_the_ID(), 'T&C´s link', true ); ?>" data-toggle="tooltip" data-placement="bottom" data-trigger="hover" title="<?php echo get_post_meta( get_the_ID(), 'Key', true ); ?>"><?php _e( 'T&C´s', 'st2' ); ?></a> 
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
            <?php if ( $casino->have_posts() ) : ?>
                <?php $casino_item_number = 0; ?>
                <?php while ( $casino->have_posts() && $casino_item_number++ < 1 ) : $casino->the_post(); ?>
                    <figure style="grid-area:1 / 6 / 5 / 9;" <?php post_class( 'imghvr-blur' ); ?> id="post-<?php the_ID(); ?>">
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
                                        <a class="btn active hvr-sweep-to-left h-auto w-auto shadow-sm text-light btn-sm border border-light" aria-label="Thank you!" role="button" aria-pressed="true" data-html="false" href="<?php echo get_post_meta( get_the_ID(), 'T&C´s link', true ); ?>" data-placement="bottom" data-toggle="tooltip" data-trigger="hover" title="<?php echo get_post_meta( get_the_ID(), 'Key', true ); ?>"><?php _e( 'T&C´s', 'st2' ); ?></a> 
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
            <?php if ( $casino->have_posts() ) : ?>
                <?php $casino_item_number = 0; ?>
                <?php while ( $casino->have_posts() && $casino_item_number++ < 1 ) : $casino->the_post(); ?>
                    <figure style="grid-area:1 / 4 / 4 / 6;" <?php post_class( 'imghvr-blur' ); ?> id="post-<?php the_ID(); ?>">
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
                                        <a class="btn active hvr-sweep-to-left h-auto w-auto shadow-sm text-light btn-sm border border-light" aria-label="Thank you!" role="button" aria-pressed="true" data-html="false" href="<?php echo get_post_meta( get_the_ID(), 'T&C´s link', true ); ?>" data-toggle="tooltip" data-placement="bottom" data-trigger="hover" title="<?php echo get_post_meta( get_the_ID(), 'Key', true ); ?>"><?php _e( 'T&C´s', 'st2' ); ?></a> 
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