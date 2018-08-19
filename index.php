<?php
get_header(); ?>

<div class="wrapper" id="index-wrapper"> 
    <div id="carousel1" class="carousel slide" data-ride="carousel"> 
        <ol class="carousel-indicators"> 
            <li data-target="#carousel1" data-slide-to="0" class="active"></li>                             
            <li data-target="#carousel1" data-slide-to="1"></li>                             
            <li data-target="#carousel1" data-slide-to="2"></li>                             
        </ol>                         
        <a class="carousel-control-prev" href="#carousel1" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only"><?php _e( 'Previous', 'st2' ); ?></span> </a>
        <a class="carousel-control-next" href="#carousel1" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only"><?php _e( 'Next', 'st2' ); ?></span> </a>
        <div class="carousel-inner"> 
            <div class="carousel-item active" style="display:grid;grid-template-columns:2fr 2fr 1fr 2fr 2fr 2fr 1fr 1fr;grid-auto-rows:150px;grid-gap:20px;"> 
                <figure class="imghvr-fade" style="grid-area:1 / 1 / auto / 3;">
                    <img src="https://images.unsplash.com/photo-1518127864129-8d0834d765bc?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&ixid=eyJhcHBfaWQiOjIwOTIyfQ&s=687274d645f07306fb95328c405048c5">
                    <figcaption>
                        <h6><?php _e( 'Heading 6', 'st2' ); ?></h6>
                        <p><?php _e( 'Paragraph', 'st2' ); ?></p>
                        <button class="btn btn-primary active btn-sm" role="button" aria-pressed="true" type="button">
                            <?php _e( 'Play', 'st2' ); ?>
                        </button>
                    </figcaption>
                </figure>
                <figure class="imghvr-fade" style="grid-area:1 / 3 / auto / 5;">
                    <img src="https://images.unsplash.com/photo-1518127864129-8d0834d765bc?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&ixid=eyJhcHBfaWQiOjIwOTIyfQ&s=687274d645f07306fb95328c405048c5">
                    <figcaption>
                        <h6><?php _e( 'Heading 6', 'st2' ); ?></h6>
                        <p><?php _e( 'Paragraph', 'st2' ); ?></p>
                        <button class="btn btn-primary active btn-sm" role="button" aria-pressed="true" type="button">
                            <?php _e( 'Play', 'st2' ); ?>
                        </button>
                    </figcaption>
                </figure>
                <figure class="imghvr-fade" style="grid-area:1 / 5 / auto / 7;">
                    <img src="https://images.unsplash.com/photo-1518127864129-8d0834d765bc?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&ixid=eyJhcHBfaWQiOjIwOTIyfQ&s=687274d645f07306fb95328c405048c5">
                    <figcaption>
                        <h6><?php _e( 'Heading 6', 'st2' ); ?></h6>
                        <p><?php _e( 'Paragraph', 'st2' ); ?></p>
                        <button class="btn btn-primary active btn-sm" role="button" aria-pressed="true" type="button">
                            <?php _e( 'Play', 'st2' ); ?>
                        </button>
                    </figcaption>
                </figure>
                <figure class="imghvr-fade" style="grid-area:1 / 7 / auto / 9;">
                    <img src="https://images.unsplash.com/photo-1518127864129-8d0834d765bc?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&ixid=eyJhcHBfaWQiOjIwOTIyfQ&s=687274d645f07306fb95328c405048c5">
                    <figcaption>
                        <h6><?php _e( 'Heading 6', 'st2' ); ?></h6>
                        <p><?php _e( 'Paragraph', 'st2' ); ?></p>
                        <button class="btn btn-primary active btn-sm" role="button" aria-pressed="true" type="button">
                            <?php _e( 'Play', 'st2' ); ?>
                        </button>
                    </figcaption>
                </figure>
            </div>                             
        </div>                         
    </div>
    <div class="container " id="content" tabindex="-1"> 
        <div class="row"> 
            <?php if ( get_theme_mod( 'show_left_sidebar' ) ) : ?>
                <div class="col-md-4 widget-area" role="complementary" id="left-sidebar"> 
                    <?php if ( is_active_sidebar( 'left-sidebar' ) ) : ?>
                        <?php dynamic_sidebar( 'left-sidebar' ); ?>
                    <?php endif; ?>                                                                           
                </div>
            <?php endif; ?> 
            <div class="col-md-8 content-area" id="primary"> 
                <main class="site-main" id="main"> 
                    <?php get_template_part( 'loop-templates/content' ); ?> 
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