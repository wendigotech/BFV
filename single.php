<?php
get_header(); ?>

<div class="wrapper" id="single-wrapper"> 
    <div class="container" id="content" tabindex="-1"> 
        <div class="row"> 
            <div class="content-area col-md-12" id="primary"> 
                <main class="site-main" id="main"> 
                    <div> 
                        <?php if ( have_posts() ) : ?>
                            <?php while ( have_posts() ) : the_post(); ?>
                                <article <?php post_class(); ?> id="post-<?php the_ID(); ?>"> 
                                    <header class="entry-header"> 
                                        <h1 class="text-center text-light"><?php the_title(); ?></h1> 
                                    </header>                                                     
                                    <div class="entry-content"> 
                                        <?php the_content(); ?> 
                                    </div>                                                     
                                </article>
                            <?php endwhile; ?>
                        <?php else : ?>
                            <p><?php _e( 'Sorry, no posts matched your criteria.', 'st2' ); ?></p>
                        <?php endif; ?> 
                        <div class="container">
                            <?php if ( ($tags) { echo 'Related Posts' ) : ?>
                                <?php
                                    $related_args = array(
                                        'tag__in' => 'term_id',
                                        'nopaging' => true,
                                        'order' => 'ASC',
                                        'orderby' => 'date'
                                    )
                                ?>
                                <?php $related = new WP_Query( $related_args ); ?>
                                <?php if ( $related->have_posts() ) : ?>
                                    <div <?php post_class( 'row' ); ?> id="post-<?php the_ID(); ?>">
                                        <?php echo $tags = wp_get_post_tags($post->ID); ?>
                                    </div>
                                <?php else : ?>
                                    <p><?php _e( 'Sorry, no posts matched your criteria.', 'st2' ); ?></p>
                                <?php endif; ?>
                            <?php endif; ?>
                        </div>                                         
                    </div>                                     
                </main>                                 
            </div>                             
        </div>                         
    </div>                     
</div>                                 

<?php get_footer(); ?>