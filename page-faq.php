<?php
get_header(); ?>

<div id="page-wrapper" class="wrapper"> 
    <div class="container" id="content" tabindex="-1"> 
        <div class="row"> 
            <div class="content-area col-md-12" id="primary"> 
                <main class="site-main" id="main"> 
                    <div> 
                        <article class=""> 
                            <header class="entry-header"> 
                                <h1 class="text-center text-light"><?php the_title(); ?></h1> 
                            </header>                                             
                            <?php if ( have_posts() ) : ?>
                                <?php while ( have_posts() ) : the_post(); ?>
                                    <div <?php post_class( 'entry-content' ); ?> id="post-<?php the_ID(); ?>"> 
                                        <div id="exampleAccordion" data-children=".item">
                                            <div class="item">
                                                <?php the_content(); ?>
                                            </div>
                                        </div>                                                         
                                    </div>
                                <?php endwhile; ?>
                            <?php else : ?>
                                <p><?php _e( 'Sorry, no posts matched your criteria.', 'st2' ); ?></p>
                            <?php endif; ?> 
                        </article>                                         
                    </div>                                     
                </main>                                 
            </div>                             
        </div>                         
    </div>                     
</div>                                 

<?php get_footer(); ?>