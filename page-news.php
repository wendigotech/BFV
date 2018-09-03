<?php
get_header(); ?>

<div id="page-wrapper" class="wrapper"> 
    <div class="container" id="content" tabindex="-1"> 
        <div class="row"> 
            <?php if ( is_active_sidebar( 'a1' ) ) : ?>
                <div class="content-area col-md-6" id="primary">
                    <?php dynamic_sidebar( 'a1' ); ?>
                </div>
            <?php endif; ?>
            <?php if ( is_active_sidebar( 'a2' ) ) : ?>
                <div class="content-area col-md-6" id="primary">
                    <?php dynamic_sidebar( 'a2' ); ?>
                </div>
            <?php endif; ?> 
        </div>                         
    </div>                     
</div>                                 

<?php get_footer(); ?>