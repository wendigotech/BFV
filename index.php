<?php
get_header(); ?>

<div class="wrapper grid-content" id="index-wrapper">
    <div class="container grid-carousel"> 
        <h2 class="text-center" data-html="false" style="color:<?php echo get_theme_mod( 'jumbotron_heading_color' ); ?> !important;"><?php _e( 'Editor´s choice', 'st2' ); ?></h2> 
        <div id="carousel1" class="carousel slide carousel-fade" data-ride="carousel" data-pause="hover" data-interval="3000"> 
            <a class="carousel-control-prev position-relative float-left mb-2 bg-info shadow-sm" href="#carousel1" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only"><?php _e( 'Previous', 'st2' ); ?></span> </a>
            <a class="carousel-control-next position-relative float-right mb-2 bg-info shadow-sm" href="#carousel1" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only"><?php _e( 'Next', 'st2' ); ?></span> </a> 
            <div class="carousel-inner" style="grid-gap: 10px;"> 
                <div class="carousel-item active" style="grid-area:1 / 1 / 3 / 4;"> 
                    <div class="row grid-slide1">
                        <?php
                            $tag_choice_args = array(
                                'tag' => 'choice',
                                'nopaging' => true,
                                'order' => 'DESC',
                                'orderby' => 'date'
                            )
                        ?>
                        <?php $tag_choice = new WP_Query( $tag_choice_args ); ?>
                        <?php if ( $tag_choice->have_posts() ) : ?>
                            <?php $tag_choice_item_number = 0; ?>
                            <?php while ( $tag_choice->have_posts() && $tag_choice_item_number++ < 1 ) : $tag_choice->the_post(); ?>
                                <figure style="grid-area:2 / 2 / 3 / 3;" <?php post_class( 'imghvr-blur' ); ?> id="post-<?php the_ID(); ?>">
                                    <?php
                                        if ( has_post_thumbnail() ) {
                                            the_post_thumbnail( 'normal' );
                                        }
                                     ?>
                                    <a href="<?php echo get_post_meta( get_the_ID(), 'Link', true ); ?>">
                                        <?php _e( 'Link', 'st2' ); ?>
                                        <figcaption>
                                            <div class="row">
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
                        <?php if ( $tag_choice->have_posts() ) : ?>
                            <?php $tag_choice_item_number = 0; ?>
                            <?php while ( $tag_choice->have_posts() && $tag_choice_item_number++ < 1 ) : $tag_choice->the_post(); ?>
                                <figure style="grid-area:2 / 3 / 3 / 6;" <?php post_class( 'imghvr-blur' ); ?> id="post-<?php the_ID(); ?>">
                                    <?php
                                        if ( has_post_thumbnail() ) {
                                            the_post_thumbnail( 'normal' );
                                        }
                                     ?>
                                    <a href="<?php echo get_post_meta( get_the_ID(), 'Link', true ); ?>">
                                        <?php _e( 'Link', 'st2' ); ?>
                                        <figcaption>
                                            <div class="row">
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
                        <?php if ( $tag_choice->have_posts() ) : ?>
                            <?php $tag_choice_item_number = 0; ?>
                            <?php while ( $tag_choice->have_posts() && $tag_choice_item_number++ < 1 ) : $tag_choice->the_post(); ?>
                                <figure style="grid-area:2 / 6 / 3 / 8;" <?php post_class( 'imghvr-blur' ); ?> id="post-<?php the_ID(); ?>">
                                    <?php
                                        if ( has_post_thumbnail() ) {
                                            the_post_thumbnail( 'normal' );
                                        }
                                     ?>
                                    <a href="<?php echo get_post_meta( get_the_ID(), 'Link', true ); ?>">
                                        <?php _e( 'Link', 'st2' ); ?>
                                        <figcaption>
                                            <div class="row">
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
                        <?php if ( $tag_choice->have_posts() ) : ?>
                            <?php $tag_choice_item_number = 0; ?>
                            <?php while ( $tag_choice->have_posts() && $tag_choice_item_number++ < 1 ) : $tag_choice->the_post(); ?>
                                <figure style="grid-area:3 / 7 / 4 / 8;" <?php post_class( 'imghvr-blur' ); ?> id="post-<?php the_ID(); ?>">
                                    <?php
                                        if ( has_post_thumbnail() ) {
                                            the_post_thumbnail( 'normal' );
                                        }
                                     ?>
                                    <a href="<?php echo get_post_meta( get_the_ID(), 'Link', true ); ?>">
                                        <?php _e( 'Link', 'st2' ); ?>
                                        <figcaption>
                                            <div class="row">
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
                        <?php if ( $tag_choice->have_posts() ) : ?>
                            <?php $tag_choice_item_number = 0; ?>
                            <?php while ( $tag_choice->have_posts() && $tag_choice_item_number++ < 1 ) : $tag_choice->the_post(); ?>
                                <figure style="grid-area:3 / 4 / 4 / 7;" <?php post_class( 'imghvr-blur' ); ?> id="post-<?php the_ID(); ?>">
                                    <?php
                                        if ( has_post_thumbnail() ) {
                                            the_post_thumbnail( 'normal' );
                                        }
                                     ?>
                                    <a href="<?php echo get_post_meta( get_the_ID(), 'Link', true ); ?>">
                                        <?php _e( 'Link', 'st2' ); ?>
                                        <figcaption>
                                            <div class="row">
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
                        <?php if ( $tag_choice->have_posts() ) : ?>
                            <?php $tag_choice_item_number = 0; ?>
                            <?php while ( $tag_choice->have_posts() && $tag_choice_item_number++ < 1 ) : $tag_choice->the_post(); ?>
                                <figure style="grid-area:3 / 2 / 4 / 4;" <?php post_class( 'imghvr-blur' ); ?> id="post-<?php the_ID(); ?>">
                                    <?php
                                        if ( has_post_thumbnail() ) {
                                            the_post_thumbnail( 'normal' );
                                        }
                                     ?>
                                    <a href="<?php echo get_post_meta( get_the_ID(), 'Link', true ); ?>">
                                        <?php _e( 'Link', 'st2' ); ?>
                                        <figcaption>
                                            <div class="row">
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
                <div class="carousel-item" style="grid-area:1 / 1 / 2 / 4;"> 
                    <div class="row grid-slide2">
                        <?php if ( $tag_choice->have_posts() ) : ?>
                            <?php $tag_choice_item_number = 0; ?>
                            <?php while ( $tag_choice->have_posts() && $tag_choice_item_number++ < 1 ) : $tag_choice->the_post(); ?>
                                <figure style="grid-area:2 / 2 / 3 / 4;" <?php post_class( 'imghvr-blur' ); ?> id="post-<?php the_ID(); ?>">
                                    <?php
                                        if ( has_post_thumbnail() ) {
                                            the_post_thumbnail( 'normal' );
                                        }
                                     ?>
                                    <a href="<?php echo get_post_meta( get_the_ID(), 'Link', true ); ?>">
                                        <?php _e( 'Link', 'st2' ); ?>
                                        <figcaption>
                                            <div class="row">
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
                        <?php if ( $tag_choice->have_posts() ) : ?>
                            <?php $tag_choice_item_number = 0; ?>
                            <?php while ( $tag_choice->have_posts() && $tag_choice_item_number++ < 1 ) : $tag_choice->the_post(); ?>
                                <figure style="grid-area:2 / 4 / 3 / 7;" <?php post_class( 'imghvr-blur' ); ?> id="post-<?php the_ID(); ?>">
                                    <?php
                                        if ( has_post_thumbnail() ) {
                                            the_post_thumbnail( 'normal' );
                                        }
                                     ?>
                                    <a href="<?php echo get_post_meta( get_the_ID(), 'Link', true ); ?>">
                                        <?php _e( 'Link', 'st2' ); ?>
                                        <figcaption>
                                            <div class="row">
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
                        <?php if ( $tag_choice->have_posts() ) : ?>
                            <?php $tag_choice_item_number = 0; ?>
                            <?php while ( $tag_choice->have_posts() && $tag_choice_item_number++ < 1 ) : $tag_choice->the_post(); ?>
                                <figure style="grid-area:2 / 7 / 3 / 8;" <?php post_class( 'imghvr-blur' ); ?> id="post-<?php the_ID(); ?>">
                                    <?php
                                        if ( has_post_thumbnail() ) {
                                            the_post_thumbnail( 'normal' );
                                        }
                                     ?>
                                    <a href="<?php echo get_post_meta( get_the_ID(), 'Link', true ); ?>">
                                        <?php _e( 'Link', 'st2' ); ?>
                                        <figcaption>
                                            <div class="row">
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
                        <?php if ( $tag_choice->have_posts() ) : ?>
                            <?php $tag_choice_item_number = 0; ?>
                            <?php while ( $tag_choice->have_posts() && $tag_choice_item_number++ < 1 ) : $tag_choice->the_post(); ?>
                                <figure style="grid-area:3 / 6 / 4 / 8;" <?php post_class( 'imghvr-blur' ); ?> id="post-<?php the_ID(); ?>">
                                    <?php
                                        if ( has_post_thumbnail() ) {
                                            the_post_thumbnail( 'normal' );
                                        }
                                     ?>
                                    <a href="<?php echo get_post_meta( get_the_ID(), 'Link', true ); ?>">
                                        <?php _e( 'Link', 'st2' ); ?>
                                        <figcaption>
                                            <div class="row">
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
                        <?php if ( $tag_choice->have_posts() ) : ?>
                            <?php $tag_choice_item_number = 0; ?>
                            <?php while ( $tag_choice->have_posts() && $tag_choice_item_number++ < 1 ) : $tag_choice->the_post(); ?>
                                <figure style="grid-area:3 / 3 / 4 / 6;" <?php post_class( 'imghvr-blur' ); ?> id="post-<?php the_ID(); ?>">
                                    <?php
                                        if ( has_post_thumbnail() ) {
                                            the_post_thumbnail( 'normal' );
                                        }
                                     ?>
                                    <a href="<?php echo get_post_meta( get_the_ID(), 'Link', true ); ?>">
                                        <?php _e( 'Link', 'st2' ); ?>
                                        <figcaption>
                                            <div class="row">
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
                        <?php if ( $tag_choice->have_posts() ) : ?>
                            <?php $tag_choice_item_number = 0; ?>
                            <?php while ( $tag_choice->have_posts() && $tag_choice_item_number++ < 1 ) : $tag_choice->the_post(); ?>
                                <figure style="grid-area:3 / 2 / 4 / 3;" <?php post_class( 'imghvr-blur' ); ?> id="post-<?php the_ID(); ?>">
                                    <?php
                                        if ( has_post_thumbnail() ) {
                                            the_post_thumbnail( 'normal' );
                                        }
                                     ?>
                                    <a href="<?php echo get_post_meta( get_the_ID(), 'Link', true ); ?>">
                                        <?php _e( 'Link', 'st2' ); ?>
                                        <figcaption>
                                            <div class="row">
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
                <div class="carousel-item" style="grid-area:1 / 1 / 2 / 4;">
                    <div class="row grid-slide3">
                        <?php if ( $tag_choice->have_posts() ) : ?>
                            <?php $tag_choice_item_number = 0; ?>
                            <?php while ( $tag_choice->have_posts() && $tag_choice_item_number++ < 1 ) : $tag_choice->the_post(); ?>
                                <figure style="grid-area:2 / 2 / 3 / 4;" <?php post_class( 'imghvr-blur' ); ?> id="post-<?php the_ID(); ?>">
                                    <?php
                                        if ( has_post_thumbnail() ) {
                                            the_post_thumbnail( 'normal' );
                                        }
                                     ?>
                                    <a href="<?php echo get_post_meta( get_the_ID(), 'Link', true ); ?>">
                                        <?php _e( 'Link', 'st2' ); ?>
                                        <figcaption>
                                            <div class="row">
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
                        <?php if ( $tag_choice->have_posts() ) : ?>
                            <?php $tag_choice_item_number = 0; ?>
                            <?php while ( $tag_choice->have_posts() && $tag_choice_item_number++ < 1 ) : $tag_choice->the_post(); ?>
                                <figure style="grid-area:3 / 7 / 4 / 8;" <?php post_class( 'imghvr-blur' ); ?> id="post-<?php the_ID(); ?>">
                                    <?php
                                        if ( has_post_thumbnail() ) {
                                            the_post_thumbnail( 'normal' );
                                        }
                                     ?>
                                    <a href="<?php echo get_post_meta( get_the_ID(), 'Link', true ); ?>">
                                        <?php _e( 'Link', 'st2' ); ?>
                                        <figcaption>
                                            <div class="row">
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
                        <?php if ( $tag_choice->have_posts() ) : ?>
                            <?php $tag_choice_item_number = 0; ?>
                            <?php while ( $tag_choice->have_posts() && $tag_choice_item_number++ < 1 ) : $tag_choice->the_post(); ?>
                                <figure style="grid-area:2 / 6 / 3 / 8;" <?php post_class( 'imghvr-blur' ); ?> id="post-<?php the_ID(); ?>">
                                    <?php
                                        if ( has_post_thumbnail() ) {
                                            the_post_thumbnail( 'normal' );
                                        }
                                     ?>
                                    <a href="<?php echo get_post_meta( get_the_ID(), 'Link', true ); ?>">
                                        <?php _e( 'Link', 'st2' ); ?>
                                        <figcaption>
                                            <div class="row">
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
                        <?php if ( $tag_choice->have_posts() ) : ?>
                            <?php $tag_choice_item_number = 0; ?>
                            <?php while ( $tag_choice->have_posts() && $tag_choice_item_number++ < 1 ) : $tag_choice->the_post(); ?>
                                <figure style="grid-area:2 / 4 / 3 / 6;" <?php post_class( 'imghvr-blur' ); ?> id="post-<?php the_ID(); ?>">
                                    <?php
                                        if ( has_post_thumbnail() ) {
                                            the_post_thumbnail( 'normal' );
                                        }
                                     ?>
                                    <a href="<?php echo get_post_meta( get_the_ID(), 'Link', true ); ?>">
                                        <?php _e( 'Link', 'st2' ); ?>
                                        <figcaption>
                                            <div class="row">
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
                        <?php if ( $tag_choice->have_posts() ) : ?>
                            <?php $tag_choice_item_number = 0; ?>
                            <?php while ( $tag_choice->have_posts() && $tag_choice_item_number++ < 1 ) : $tag_choice->the_post(); ?>
                                <figure style="grid-area:3 / 4 / 4 / 7;" <?php post_class( 'imghvr-blur' ); ?> id="post-<?php the_ID(); ?>">
                                    <?php
                                        if ( has_post_thumbnail() ) {
                                            the_post_thumbnail( 'normal' );
                                        }
                                     ?>
                                    <a href="<?php echo get_post_meta( get_the_ID(), 'Link', true ); ?>">
                                        <?php _e( 'Link', 'st2' ); ?>
                                        <figcaption>
                                            <div class="row">
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
                        <?php if ( $tag_choice->have_posts() ) : ?>
                            <?php $tag_choice_item_number = 0; ?>
                            <?php while ( $tag_choice->have_posts() && $tag_choice_item_number++ < 1 ) : $tag_choice->the_post(); ?>
                                <figure style="grid-area:3 / 2 / 4 / 4;" <?php post_class( 'imghvr-blur' ); ?> id="post-<?php the_ID(); ?>">
                                    <?php
                                        if ( has_post_thumbnail() ) {
                                            the_post_thumbnail( 'normal' );
                                        }
                                     ?>
                                    <a href="<?php echo get_post_meta( get_the_ID(), 'Link', true ); ?>">
                                        <?php _e( 'Link', 'st2' ); ?>
                                        <figcaption>
                                            <div class="row">
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
            <ol class="carousel-indicators position-relative mt-4"> 
                <li data-target="#carousel1" data-slide-to="0" class="active border border-primary"></li>                                 
                <li data-target="#carousel1" data-slide-to="1" class="border border-primary"></li>                                 
                <li data-target="#carousel1" data-slide-to="2" class="border border-primary"></li>                                 
            </ol>                             
        </div>
    </div>                     
    <div class="tab-content" style="grid-area:6 / 1 / 14 / 9;">
        <div class="tab-pane active" role="tabpanel" aria-labelledby="tab1-tab" id="tab1">
            <div class="container grid-content">
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
                        <figure style="grid-area:2 / 2 / 4 / 3;" <?php post_class( 'imghvr-blur' ); ?> id="post-<?php the_ID(); ?>">
                            <?php
                                if ( has_post_thumbnail() ) {
                                    the_post_thumbnail( 'normal' );
                                }
                             ?>
                            <a href="<?php echo get_post_meta( get_the_ID(), 'Link', true ); ?>">
                                <?php _e( 'Link', 'st2' ); ?>
                                <figcaption>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <a class="btn active hvr-sweep-to-left h-auto w-auto shadow-sm text-light btn-sm border border-light" role="button" href="#" data-toggle="tooltip" title="I`m a tooltip" data-placement="bottom"><?php _e( 'T&C´s', 'st2' ); ?></a> 
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
                        <figure style="grid-area:5 / 6 / 9 / 8;" <?php post_class( 'imghvr-blur bkg6' ); ?> id="post-<?php the_ID(); ?>">
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
                <?php if ( $casino->have_posts() ) : ?>
                    <?php $casino_item_number = 0; ?>
                    <?php while ( $casino->have_posts() && $casino_item_number++ < 1 ) : $casino->the_post(); ?>
                        <figure style="grid-area:7 / 3 / 9 / 6;" <?php post_class( 'imghvr-blur bkg8' ); ?> id="post-<?php the_ID(); ?>">
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
                <?php if ( $casino->have_posts() ) : ?>
                    <?php $casino_item_number = 0; ?>
                    <?php while ( $casino->have_posts() && $casino_item_number++ < 1 ) : $casino->the_post(); ?>
                        <figure style="grid-area:7 / 2 / 9 / 3;" <?php post_class( 'imghvr-blur bkg7' ); ?> id="post-<?php the_ID(); ?>">
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
                <?php if ( $casino->have_posts() ) : ?>
                    <?php $casino_item_number = 0; ?>
                    <?php while ( $casino->have_posts() && $casino_item_number++ < 1 ) : $casino->the_post(); ?>
                        <figure style="grid-area:4 / 4 / 7 / 6;" <?php post_class( 'imghvr-blur bkg5' ); ?> id="post-<?php the_ID(); ?>">
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
                <?php if ( $casino->have_posts() ) : ?>
                    <?php $casino_item_number = 0; ?>
                    <?php while ( $casino->have_posts() && $casino_item_number++ < 1 ) : $casino->the_post(); ?>
                        <figure style="grid-area:4 / 2 / 7 / 4;" <?php post_class( 'imghvr-blur bkg4' ); ?> id="post-<?php the_ID(); ?>">
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
                <?php if ( $casino->have_posts() ) : ?>
                    <?php $casino_item_number = 0; ?>
                    <?php while ( $casino->have_posts() && $casino_item_number++ < 1 ) : $casino->the_post(); ?>
                        <figure style="grid-area:2 / 6 / 5 / 8;" <?php post_class( 'imghvr-blur bkg3' ); ?> id="post-<?php the_ID(); ?>">
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
                                            <a class="btn active hvr-sweep-to-left hint--bottom hint--small h-auto w-auto shadow-sm text-light btn-sm border border-light" aria-label="<?php echo get_post_meta( get_the_ID(), 'Key', true ); ?>" role="button" aria-pressed="true" data-html="false" href="<?php echo get_post_meta( get_the_ID(), 'T&C´s link', true ); ?>" title="a"><?php _e( 'T&C´s', 'st2' ); ?></a> 
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
                        <figure style="grid-area:2 / 3 / 4 / 6;" <?php post_class( 'imghvr-blur bkg2' ); ?> id="post-<?php the_ID(); ?>">
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
        <div class="tab-pane" role="tabpanel" aria-labelledby="tab2-tab" id="tab2">
            <div class="container grid-content">
                <?php
                    $Sports_args = array(
                        'category_name' => 'sports',
                        'nopaging' => true,
                        'order' => 'DESC',
                        'orderby' => 'date'
                    )
                ?>
                <?php $Sports = new WP_Query( $Sports_args ); ?>
                <?php if ( $Sports->have_posts() ) : ?>
                    <?php $Sports_item_number = 0; ?>
                    <?php while ( $Sports->have_posts() && $Sports_item_number++ < 1 ) : $Sports->the_post(); ?>
                        <figure style="grid-area:2 / 2 / 5 / 5;" <?php post_class( 'imghvr-blur' ); ?> id="post-<?php the_ID(); ?>">
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
                        <figure style="grid-area:2 / 5 / 4 / 8;" <?php post_class( 'imghvr-blur' ); ?> id="post-<?php the_ID(); ?>">
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
                        <figure style="grid-area:4 / 5 / 6 / 8;" <?php post_class( 'imghvr-blur' ); ?> id="post-<?php the_ID(); ?>">
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
                        <figure style="grid-area:5 / 2 / 9 / 3;" <?php post_class( 'imghvr-blur' ); ?> id="post-<?php the_ID(); ?>">
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
                        <figure style="grid-area:6 / 5 / 9 / 8;" <?php post_class( 'imghvr-blur' ); ?> id="post-<?php the_ID(); ?>">
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
                        <figure style="grid-area:5 / 3 / 9 / 5;" <?php post_class( 'imghvr-blur' ); ?> id="post-<?php the_ID(); ?>">
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
        <div class="tab-pane" role="tabpanel" aria-labelledby="tab3-tab" id="tab3">
            <div class="container grid-content">
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
                        <figure style="grid-area:2 / 2 / 4 / 3;" <?php post_class( 'imghvr-blur' ); ?> id="post-<?php the_ID(); ?>">
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
                <?php if ( $Bingo->have_posts() ) : ?>
                    <?php $Bingo_item_number = 0; ?>
                    <?php while ( $Bingo->have_posts() && $Bingo_item_number++ < 1 ) : $Bingo->the_post(); ?>
                        <figure style="grid-area:2 / 3 / 4 / 6;" <?php post_class( 'imghvr-blur' ); ?> id="post-<?php the_ID(); ?>">
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
                <?php if ( $Bingo->have_posts() ) : ?>
                    <?php $Bingo_item_number = 0; ?>
                    <?php while ( $Bingo->have_posts() && $Bingo_item_number++ < 1 ) : $Bingo->the_post(); ?>
                        <figure style="grid-area:2 / 6 / 4 / 8;" <?php post_class( 'imghvr-blur' ); ?> id="post-<?php the_ID(); ?>">
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
                <?php if ( $Bingo->have_posts() ) : ?>
                    <?php $Bingo_item_number = 0; ?>
                    <?php while ( $Bingo->have_posts() && $Bingo_item_number++ < 1 ) : $Bingo->the_post(); ?>
                        <figure style="grid-area:4 / 5 / 7 / 8;" <?php post_class( 'imghvr-blur' ); ?> id="post-<?php the_ID(); ?>">
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
                <?php if ( $Bingo->have_posts() ) : ?>
                    <?php $Bingo_item_number = 0; ?>
                    <?php while ( $Bingo->have_posts() && $Bingo_item_number++ < 1 ) : $Bingo->the_post(); ?>
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
                <?php if ( $Bingo->have_posts() ) : ?>
                    <?php $Bingo_item_number = 0; ?>
                    <?php while ( $Bingo->have_posts() && $Bingo_item_number++ < 1 ) : $Bingo->the_post(); ?>
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
                <?php if ( $Bingo->have_posts() ) : ?>
                    <?php $Bingo_item_number = 0; ?>
                    <?php while ( $Bingo->have_posts() && $Bingo_item_number++ < 1 ) : $Bingo->the_post(); ?>
                        <figure style="grid-area:7 / 2 / 9 / 4;" <?php post_class( 'imghvr-blur' ); ?> id="post-<?php the_ID(); ?>">
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
    <ul class="nav nav-pills" role="tablist" style="grid-area:5 / 3 / 6 / 7;"> 
        <li class="nav-item align-self-center"> 
            <a class="nav-link active pills shadow-sm" href="#tab1" data-toggle="tab" role="tab" aria-controls="tab1" aria-expanded="true"><?php _e( 'Casino', 'st2' ); ?></a> 
        </li>                         
        <li class="nav-item align-self-center"> 
            <a class="nav-link pills shadow-sm" href="#tab2" data-toggle="tab" role="tab" aria-controls="tab2" aria-expanded="true"><?php _e( 'Sports', 'st2' ); ?></a> 
        </li>                         
        <li class="nav-item align-self-center"> 
            <a class="nav-link pills shadow-sm" href="#tab3" data-toggle="tab" role="tab" aria-controls="tab3" aria-expanded="true"><?php _e( 'Bingo', 'st2' ); ?></a> 
        </li>                         
    </ul>
</div>                                 

<?php get_footer(); ?>