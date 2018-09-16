
            </div>             
            <?php if ( is_active_sidebar( 'footerfull' ) ) : ?>
                <div class="wrapper" id="wrapper-footer-full"> 
                    <div id="footer-full-content" tabindex="-1" class="container"> 
                        <div class="row"> 
                            <?php if ( is_active_sidebar( 'footerfull' ) ) : ?>
                                <?php dynamic_sidebar( 'footerfull' ); ?>
                            <?php endif; ?>                                                           
                        </div>                         
                    </div>                     
                </div>
            <?php endif; ?> 
            <div class="wrapper text-light" id="wrapper-footer">
                <div class="container"> 
                    <div class="row"> 
                        <div class="footer-icons col-md-2">                              

                            <img src="<?php echo wp_get_attachment_image_url( get_theme_mod( 'footer_img3', 'http://pinegrow.com/placeholders/img11.jpg' ), 'normal' ) ?>"/>
                        </div>
                        <div class="footer-icons col-md-2">                              

                            <img src="<?php echo wp_get_attachment_image_url( get_theme_mod( 'footer_img4', 'http://pinegrow.com/placeholders/img11.jpg' ), 'normal' ) ?>"/>
                        </div>
                        <div class="col-md-4">                              

                            <img src="<?php echo wp_get_attachment_image_url( get_theme_mod( 'footer_img5', 'http://pinegrow.com/placeholders/img11.jpg' ), 'normal' ) ?>"/>
                            <img src="<?php echo wp_get_attachment_image_url( get_theme_mod( 'footer_img6', 'http://pinegrow.com/placeholders/img11.jpg' ), 'normal' ) ?>"/>
                        </div>
                        <div class="col-md-4">                              

                            <img src="<?php echo wp_get_attachment_image_url( get_theme_mod( 'footer_img7', 'http://pinegrow.com/placeholders/img11.jpg' ), 'normal' ) ?>"/>
                            <img src="<?php echo wp_get_attachment_image_url( get_theme_mod( 'footer_img8', 'http://pinegrow.com/placeholders/img11.jpg' ), 'normal' ) ?>"/>
                        </div>
                        <div class="col-md-6">
                            <?php if ( ! has_custom_logo() ) : ?>
                                <div> 
                                    <a rel="home" class="navbar-brand text-light" href="<?php echo esc_url( home_url() ); ?>"><?php bloginfo( 'name' ); ?></a> 
                                </div>
                            <?php else : ?>
                                <?php the_custom_logo(); ?>
                            <?php endif; ?> 
                        </div>
                        <div class="col-md-6">
                            <?php if ( has_nav_menu( 'social' ) ) : ?>
                                <?php wp_nav_menu( array(
                                        'menu' => 'social',
                                        'menu_class' => 'navbar-nav mt-2 float-left ml-auto flex-row',
                                        'container' => '',
                                        'depth' => '2',
                                        'fallback_cb' => 'wp_bootstrap4_navwalker::fallback',
                                        'walker' => new wp_bootstrap4_navwalker()
                                ) ); ?>
                            <?php endif; ?> 
                        </div>                         
                        <!--col end -->                         
                        <div class="col-md-8">
                            <footer class="site-footer" id="colophon"> 
                                <div class="site-info"> 
                                    <p><?php echo get_theme_mod( 'footer_text', __( '&nbsp;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus pulvinar faucibus neque, nec rhoncus nunc ultrices sit amet. Curabitur ac sagittis neque, vel egestas est', 'st2' ) ); ?></p> 
                                </div>                                 
                                <!-- .site-info -->                                 
                            </footer>                                                          
                        </div>
                        <div class="col-md-2">                              

                            <img src="<?php echo wp_get_attachment_image_url( get_theme_mod( 'footer_img', 'http://pinegrow.com/placeholders/img18.jpg' ), 'normal' ) ?>"/>
                        </div>
                        <div class="col-md-2">                              

                            <img src="<?php echo wp_get_attachment_image_url( get_theme_mod( 'footer_img2', 'http://pinegrow.com/placeholders/img11.jpg' ), 'normal' ) ?>"/>
                        </div>
                    </div>                     
                </div>                 
                <!-- container end -->
            </div>             
        </div>                                    
        <script>
   jQuery(function() {
   jQuery('[data-toggle="tooltip"]').tooltip();
})
</script>
        <?php wp_footer(); ?>
    </body>     
</html>
