<?php
get_header(); ?>

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
    <?php while ( $casino->have_posts() ) : $casino->the_post(); ?>
        <div id="post-<?php the_ID(); ?>" <?php post_class( 'wrapper' ); ?>> 
            <div class="grid-content container">
                <figure style="grid-area:1 / 1 / 4 / 3;" class="imghvr-blur">
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
                <figure style="grid-area:4 / 1 / 6 / 3;" class="imghvr-blur">
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
    <?php wp_reset_postdata(); ?>
<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.', 'st2' ); ?></p>
<?php endif; ?>                 

<?php get_footer(); ?>