
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
                        <div class="col-md-12"> 
                            <footer class="site-footer" id="colophon"> 
                                <div class="site-info"> 
                                    <p><?php echo get_theme_mod( 'footer_text', __( '&nbsp;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus pulvinar faucibus neque, nec rhoncus nunc ultrices sit amet. Curabitur ac sagittis neque, vel egestas est', 'st2' ) ); ?></p> 
                                </div>                                 
                                <!-- .site-info -->                                 
                            </footer>                             
                            <!-- #colophon -->                             
                        </div>                         
                        <!--col end -->                         
                    </div>                     
                </div>                 
                <!-- container end -->
            </div>             
        </div>                                    
        <script>
    $('.info').powerTip({
	placement: 'ne' // north-east tooltip position
});
</script>
        <?php wp_footer(); ?>
    </body>     
</html>
