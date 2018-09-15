<?php if (!empty($related_posts)) { ?>
    <div class="related-posts">
        <h3 class="widget-title"><?php _e('Related articles', 'st2'); ?></h3>
        <ul class="related-posts-list">
            <?php
            foreach ($related_posts as $post) {
                setup_postdata($post);
            ?>
                <div class="row">
    <div class="col-md-4">
        <figure class="imghvr-blur">
            <?php
                if ( has_post_thumbnail() ) {
                    the_post_thumbnail( 'normal' );
                }
             ?>
            <a href="<?php echo get_post_meta( get_the_ID(), 'Link', true ); ?>">
                <?php _e( 'Link', 'st2' ); ?>
                <figcaption>
                    <div class="row pg-empty-placeholder">
                        <div class="col-md-6">
                            <a class="btn active hvr-sweep-to-left h-auto w-auto shadow-sm text-light btn-sm border border-light" role="button" aria-pressed="true" data-html="false" href="<?php echo get_post_meta( get_the_ID(), 'T&C´s link', true ); ?>" data-toggle="tooltip" data-placement="bottom" data-trigger="hover" title="<?php echo get_post_meta( get_the_ID(), 'Key', true ); ?>"><?php _e( 'T&C´s', 'st2' ); ?></a> 
                        </div>
                        <div class="col-md-6">
                            <a class="btn active hvr-sweep-to-top btn-light shadow-sm bg-light float-right text-uppercase font-weight-bold text-success btn-sm" role="button" aria-pressed="true" data-html="true" href="<?php echo get_post_meta( get_the_ID(), 'Link', true ); ?>"><?php _e( 'Play', 'st2' ); ?></a> 
                        </div>
                    </div>
                    <div class="col-md-12"> 
                        <h6 class="text-center display-5 "><?php the_title(); ?></h6>
                        <?php the_excerpt( ); ?>
                    </div>
                </figcaption>
            </a>
        </figure>         
    </div>
    <div class="col-md-4"> 
        <figure class="imghvr-blur">
            <img src="https://images.unsplash.com/photo-1518127864129-8d0834d765bc?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&ixid=eyJhcHBfaWQiOjIwOTIyfQ&s=687274d645f07306fb95328c405048c5">
            <a href="">
                <?php _e( 'Link', 'st2' ); ?>
                <figcaption>
                    <div class="row pg-empty-placeholder">
                        <div class="col-md-6">
                            <a class="btn active hvr-sweep-to-left h-auto w-auto shadow-sm text-light btn-sm border border-light" role="button" aria-pressed="true" data-html="false" href="#" data-toggle="tooltip" data-placement="bottom" data-trigger="hover"><?php _e( 'T&C´s', 'st2' ); ?></a> 
                        </div>
                        <div class="col-md-6">
                            <a class="btn active hvr-sweep-to-top btn-light shadow-sm bg-light float-right text-uppercase font-weight-bold text-success btn-sm" role="button" aria-pressed="true" data-html="true" href="#"><?php _e( 'Play', 'st2' ); ?></a> 
                        </div>
                    </div>
                    <div class="col-md-12"> 
                        <h6 class="text-center display-5 "><?php _e( 'Heading 6', 'st2' ); ?></h6>
                        <p class="text-center"><?php _e( 'Paragraph', 'st2' ); ?></p>
                    </div>
                </figcaption>
            </a>
        </figure>
    </div>
    <div class="col-md-4"> 
        <figure class="imghvr-blur">
            <img src="https://images.unsplash.com/photo-1518127864129-8d0834d765bc?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&ixid=eyJhcHBfaWQiOjIwOTIyfQ&s=687274d645f07306fb95328c405048c5">
            <a href="">
                <?php _e( 'Link', 'st2' ); ?>
                <figcaption>
                    <div class="row pg-empty-placeholder">
                        <div class="col-md-6">
                            <a class="btn active hvr-sweep-to-left h-auto w-auto shadow-sm text-light btn-sm border border-light" role="button" aria-pressed="true" data-html="false" href="#" data-toggle="tooltip" data-placement="bottom" data-trigger="hover"><?php _e( 'T&C´s', 'st2' ); ?></a> 
                        </div>
                        <div class="col-md-6">
                            <a class="btn active hvr-sweep-to-top btn-light shadow-sm bg-light float-right text-uppercase font-weight-bold text-success btn-sm" role="button" aria-pressed="true" data-html="true" href="#"><?php _e( 'Play', 'st2' ); ?></a> 
                        </div>
                    </div>
                    <div class="col-md-12"> 
                        <h6 class="text-center display-5 "><?php _e( 'Heading 6', 'st2' ); ?></h6>
                        <p class="text-center"><?php _e( 'Paragraph', 'st2' ); ?></p>
                    </div>
                </figcaption>
            </a>
        </figure>
    </div>
</div>
            <?php } ?>
        </ul>
        <div class="clearfix"></div>
    </div>
<?php
}