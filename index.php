<?php
get_header(); ?>

<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <div id="index-wrapper-<?php the_ID(); ?>" <?php post_class( 'wrapper grid-content' ); ?>> 
            <div class="container" style="display:grid;grid-template-columns:1fr 1fr 1fr;grid-template-rows:100px;grid-gap:10px;">
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
                <figure class="imghvr-blur" style="grid-area:1 / 2 / 2 / 3;">
                    <img src="https://images.unsplash.com/photo-1518127864129-8d0834d765bc?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&ixid=eyJhcHBfaWQiOjIwOTIyfQ&s=687274d645f07306fb95328c405048c5">
                    <figcaption>
                        <a class="btn active btn-sm d-table btn-warning btn-block" role="button" aria-pressed="true" href="#"><?php _e( 'Play', 'st2' ); ?></a>
                        <a class="btn active btn-sm btn-danger d-table" role="button" aria-pressed="true" href="#"><?php _e( 'T&C´s', 'st2' ); ?></a>
                        <h6 class="text-center display-5"><?php _e( 'Heading 6', 'st2' ); ?></h6>
                        <p class="text-center d-table float-left"><?php _e( 'Paragraph', 'st2' ); ?></p>
                    </figcaption>
                </figure>
            </div>                             
        </div>
    <?php endwhile; ?>
<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.', 'st2' ); ?></p>
<?php endif; ?>                 

<?php get_footer(); ?>