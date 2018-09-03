<?php
get_header(); ?>

<div class="wrapper" id="single-wrapper"> 
    <div class="container" id="content" tabindex="-1"> 
        <div class="row">                              
            <div class="content-area col-md-8 content-area" id="primary"> 
                <main class="site-main" id="main"> 
                    <div> 
                        <?php if ( have_posts() ) : ?>
                            <?php while ( have_posts() ) : the_post(); ?>
                                <article <?php post_class(); ?> id="post-<?php the_ID(); ?>"> 
                                    <header class="entry-header"> 
                                        <h1 class="text-center"><?php the_title(); ?></h1>                                                          
                                    </header>                                                     
                                    <div class="entry-content"> 
                                        <?php the_content(); ?>                                                          
                                    </div>                                                                                                          
                                </article>
                            <?php endwhile; ?>
                        <?php else : ?>
                            <p><?php _e( 'Sorry, no posts matched your criteria.', 'st2' ); ?></p>
                        <?php endif; ?> 
                        <nav class="container navigation post-navigation pt-3 pb-3"> 
                            <h2 class="sr-only"><?php _e( 'Post navigation', 'st2' ); ?></h2> 
                            <div class="row nav-links justify-content-between"> 
                                <span class="nav-previous"><?php previous_post_link( '%link', __( '&laquo; %title', 'st2' ) ); ?></span> 
                                <span class="nav-next"><?php next_post_link( '%link', __( '%title &raquo;', 'st2' ) ); ?></span> 
                            </div>                                             
                            <!-- .nav-links -->                                             
                        </nav>                                         
                        <?php if ( comments_open() || get_comments_number() || is_single() ) : ?>
                            <?php comments_template( '/comments.php' ); ?>
                        <?php endif; ?> 
                    </div>                                     
                </main>                                 
            </div>                             
            <?php if ( get_theme_mod( 'show_right_sidebar' ) ) : ?>
                <div class="col-md-4 widget-area" role="complementary" id="right-sidebar"> 
                    <?php if ( is_active_sidebar( 'right-sidebar' ) ) : ?>
                        <?php dynamic_sidebar( 'right-sidebar' ); ?>
                    <?php endif; ?>                                                                           
                </div>
            <?php endif; ?> 
        </div>                         
    </div>                     
</div>                                 

<?php get_footer(); ?>