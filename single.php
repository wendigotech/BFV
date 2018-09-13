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
                        <?php  $orig_post = $post;   global $post;   $tags = wp_get_post_tags($post->ID);       if ($tags) {   $tag_ids = array();   foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;   $args=array(   'tag__in' => $tag_ids,   'post__not_in' => array($post->ID),   'posts_per_page'=>4, // Number of related posts to display.   'caller_get_posts'=>1   );       $my_query = new wp_query( $args );     while( $my_query->have_posts() ) {   $my_query->the_post(); ?>
                            <?php  $post = $orig_post;   wp_reset_query(); ?> 
                    </div>                                     
                </main>                                 
            </div>                             
        </div>                         
    </div>                     
</div>                                 

<?php get_footer(); ?>