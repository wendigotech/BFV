<?php
get_header(); ?>

<div id="page-wrapper" class="wrapper"> 
    <div class="container" id="content" tabindex="-1">                          
        <div class="container grid-content">
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
                    <figure style="grid-area:2 / 2 / 5 / 6;" <?php post_class( 'imghvr-blur' ); ?> id="post-<?php the_ID(); ?>">
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
            <?php if ( $casino->have_posts() ) : ?>
                <?php $casino_item_number = 0; ?>
                <?php while ( $casino->have_posts() && $casino_item_number++ < 1 ) : $casino->the_post(); ?>
                    <figure style="grid-area:5 / 4 / 7 / 6;" <?php post_class( 'imghvr-blur' ); ?> id="post-<?php the_ID(); ?>">
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
                    <figure style="grid-area:5 / 2 / 9 / 4;" <?php post_class( 'imghvr-blur' ); ?> id="post-<?php the_ID(); ?>">
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
                    <figure style="grid-area:4 / 6 / 7 / 8;" <?php post_class( 'imghvr-blur' ); ?> id="post-<?php the_ID(); ?>">
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
            <ul class="nav nav-pills" role="tablist" style="grid-area:1 / 2 / 2 / 7;"> 
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
    </div>                     
</div>                                 

<?php get_footer(); ?>