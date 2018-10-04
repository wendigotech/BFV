
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
                    <div class="row no-gutters d-flex justify-content-center"> 
                        <div class="col-sm-2 col-4 col-md-1"> 
                            <img src="<?php echo wp_get_attachment_image_url( get_theme_mod( 'footer_img3', 'pay-pal.png' ), 'normal' ) ?>" class="footer-icons"/>
                        </div>
                        <div class="footer-icons col-sm-2 col-4 col-md-1"> 
                            <img src="<?php echo wp_get_attachment_image_url( get_theme_mod( 'footer_img4', 'pay-pal.png' ), 'normal' ) ?>" class="footer-icons"/>
                        </div>
                        <div class="footer-icons col-sm-2 col-4 col-md-1"> 
                            <img src="<?php echo wp_get_attachment_image_url( get_theme_mod( 'footer_img5', 'pay-pal.png' ), 'normal' ) ?>" class="footer-icons"/>
                        </div>
                        <div class="footer-icons col-sm-2 col-4 col-md-1"> 
                            <img src="<?php echo wp_get_attachment_image_url( get_theme_mod( 'footer_img6', 'pay-pal.png' ), 'normal' ) ?>" class="footer-icons"/>
                        </div>
                        <div class="footer-icons col-sm-2 col-4 col-md-1"> 
                            <img src="<?php echo wp_get_attachment_image_url( get_theme_mod( 'footer_img7', 'pay-pal.png' ), 'normal' ) ?>" class="footer-icons"/>
                        </div>
                        <div class="footer-icons col-sm-2 col-4 col-md-1"> 
                            <img src="<?php echo wp_get_attachment_image_url( get_theme_mod( 'footer_img8', 'pay-pal.png' ), 'normal' ) ?>" class="footer-icons"/>
                        </div>                         
                        <!--col end -->                         
                    </div>                     
                    <div class="row">
                        <div class="d-flex flex-row justify-content-center align-items-center align-content-center col-md-12 mb-5 mt-5">
                            <?php if ( has_nav_menu( 'social' ) ) : ?>
                                <?php wp_nav_menu( array(
                                        'menu' => 'social',
                                        'menu_class' => 'navbar-nav text-center d-inline-flex justify-content-center align-items-center align-content-center flex-wrap flex-row border border-light',
                                        'container' => '',
                                        'depth' => '2',
                                        'fallback_cb' => 'wp_bootstrap4_navwalker::fallback',
                                        'walker' => new wp_bootstrap4_navwalker()
                                ) ); ?>
                            <?php endif; ?> 
                        </div>
                        <div class="col-md-8">
                            <footer class="site-footer" id="colophon"> 
                                <div class="site-info"> 
                                    <p><?php echo get_theme_mod( 'footer_text', __( '&nbsp;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus pulvinar faucibus neque, nec rhoncus nunc ultrices sit amet. Curabitur ac sagittis neque, vel egestas est', 'st2' ) ); ?></p> 
                                </div>                                 
                                <!-- .site-info -->                                 
                            </footer>                             
                        </div>
                        <div class="col-md-2 col-sm-6" href="https://www.begambleaware.org/"> 
                            <a href="https://www.begambleaware.org/">
                                <img src="<?php echo wp_get_attachment_image_url( get_theme_mod( 'footer_img', 'http://pinegrow.com/placeholders/img18.jpg' ), 'normal' ) ?>" href="https://www.begambleaware.org/"/>
                            </a>
                        </div>
                        <div class="col-md-2 col-sm-6"> 
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
