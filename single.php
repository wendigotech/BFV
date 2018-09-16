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
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="d-flex justify-content-center align-items-center col-md-6"> 
                                                                <?php
                                                                    if ( has_post_thumbnail() ) {
                                                                        the_post_thumbnail( 'large' );
                                                                    }
                                                                 ?>
                                                            </div>
                                                            <div class="col-md-6 d-flex justify-content-center align-items-center flex-column">
                                                                <header class="entry-header"> 
                                                                    <h1 class="text-center text-light"><?php the_title(); ?></h1> 
                                                                </header>
                                                                <div class="entry-content"> 
                                                                    <?php the_content(); ?> 
                                                                </div>                                                                 
                                                            </div>
                                                            <div class="col-md-12"> 
</div>
                                                        </div>
                                                    </div>                                                     
                                                </article>
                                            <?php endwhile; ?>
                                        <?php else : ?>
                                            <p><?php _e( 'Sorry, no posts matched your criteria.', 'st2' ); ?></p>
                                        <?php endif; ?>
                                        <div class="text-light text-center">
                                            <?php the_excerpt( ); ?>
                                        </div>
                                        <?php echo wcr_related_posts(array(    'taxonomy' => 'post_tag',    'limit' => 3 )); ?>
                                        <div class="row pg-empty-placeholder"></div>                                         
                                    </div>                                     
                                </main>                                 
                            </div>                             
                        </div>                         
                    </div>                     
                </div>                                 

<?php get_footer(); ?>