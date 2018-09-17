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
                                                <a data-toggle="collapse" data-parent="#exampleAccordion" href="#exampleAccordion2" aria-expanded="false" aria-controls="exampleAccordion2"><h3><?php the_content(); ?></h3></a>
                                                <div id="exampleAccordion2" class="collapse" role="tabpanel">
                                                    <p class="mb-3"><?php the_content(); ?></p>
                                                </div>
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