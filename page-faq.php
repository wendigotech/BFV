<?php
get_header(); ?>

<div id="page-wrapper" class="wrapper"> 
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
                                        <div id="exampleAccordion" data-children=".item">
                                            <div class="item">
                                                <?php the_content(); ?>
                                                <div id="exampleAccordion1" class="collapse show d-flex justify-content-center align-items-center" role="tabpanel">
                                                    <?php the_excerpt( ); ?>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <a data-toggle="collapse" data-parent="#exampleAccordion" href="#exampleAccordion2" aria-expanded="false" aria-controls="exampleAccordion2"> <?php _e( 'Toggle item 2', 'st2' ); ?> </a>
                                                <div id="exampleAccordion2" class="collapse" role="tabpanel">
                                                    <p class="mb-3"> <?php _e( 'Donec at ipsum dignissim, rutrum turpis scelerisque, tristique lectus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus nec dui turpis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.', 'st2' ); ?> </p>
                                                </div>
                                            </div>
                                        </div>
                                        <?php the_content(); ?> 
                                    </div>                                                     
                                </article>
                            <?php endwhile; ?>
                        <?php else : ?>
                            <p><?php _e( 'Sorry, no posts matched your criteria.', 'st2' ); ?></p>
                        <?php endif; ?> 
                    </div>                                     
                </main>                                 
            </div>                             
        </div>                         
    </div>                     
</div>                                 

<?php get_footer(); ?>