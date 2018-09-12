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
                                <div class="col-md-4">
                                    <?php function has_tag( $tag = '', $post = null ) {     return has_term( $tag, 'post_tag', $post ); } ?> 
                                </div>
                                <div class="col-md-4"> 
                                    <figure class="imghvr-blur">
                                        <?php
                                            if ( has_post_thumbnail() ) {
                                                the_post_thumbnail( 'normal' );
                                            }
                                         ?>
                                    </figure>
                                </div>
                                <div class="col-md-4"> 
                                    <figure class="imghvr-blur">
                                        <?php
                                            if ( has_post_thumbnail() ) {
                                                the_post_thumbnail( 'normal' );
                                            }
                                         ?>
                                    </figure>
                                </div>
                            </div>
                        </div>                                         
                    </div>                                     
                </main>                                 
            </div>                             
        </div>                         
    </div>                     
</div>                                 

<?php get_footer(); ?>