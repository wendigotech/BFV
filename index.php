<?php
get_header(); ?>

<?php if ( have_posts() ) : ?>
    <div id="index-wrapper-<?php the_ID(); ?>" <?php post_class( 'wrapper grid-content' ); ?>> 
        <div class="container" style="display:grid;grid-template-columns:1fr 1fr 1fr;grid-template-rows:100px;grid-gap:10px;">
            <?php while ( have_posts() ) : the_post(); ?>
                <figure class="imghvr-blur" style="grid-area:1 / 1 / 2 / 2;">
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
        </div>                         
    </div>
<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.', 'st2' ); ?></p>
<?php endif; ?>                 

<?php get_footer(); ?>