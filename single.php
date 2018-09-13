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
                                                <div class="row">
                                                <?php $orig_post = $post;   global $post;   $tags = wp_get_post_tags($post->ID);       if ($tags) {   $tag_ids = array();   foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;   $args=array(   'tag__in' => $tag_ids,   'post__not_in' => array($post->ID),   'posts_per_page'=>4, // Number of related posts to display.   'caller_get_posts'=>1   );       $my_query = new wp_query( $args );     while( $my_query->have_posts() ) {   $my_query->the_post(); ?>
                                                    <div class="col-md-4">
                                                        <figure class="imghvr-blur">
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
                                                    </div>
                                                    <div class="col-md-4"> 
</div>
                                                    <div class="col-md-4"> 
</div>
                                            </div>
                                            <?php $post = $orig_post;   wp_reset_query(); ?>
                                        </div>                                         
                                    </div>                                     
                                </main>                                 
                            </div>                             
                        </div>                         
                    </div>                     
                </div>                                 

<?php get_footer(); ?>