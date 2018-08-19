 
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <article <?php post_class( 'mb-5' ); ?> id="post-<?php the_ID(); ?>"> 
                <header class="entry-header"> 
                    <?php if ( is_singular() ) : ?>
                        <h2><?php the_title(); ?></h2>
                    <?php else : ?>
                        <h2><a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title(); ?></a></h2>
                    <?php endif; ?> 
                    <div class="entry-meta"> 
                        <p><?php _e( 'Posted on', 'st2' ); ?> <span><?php the_modified_date(); ?></span> <?php _e( 'by', 'st2' ); ?> <span><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php the_author(); ?></a></span></p> 
                    </div>                     
                </header>                 
                <?php
                    if ( has_post_thumbnail() ) {
                        the_post_thumbnail( 'normal', array(
                        'class' => 'mb-4'
                    ) );
                    }
                 ?> 
                <div class="entry-content"> 
                    <?php the_excerpt( ); ?> 
                    <a class="btn btn-secondary" href="<?php echo esc_url( get_permalink() ); ?>"><?php _e( 'Read More', 'st2' ); ?></a> 
                </div>                 
                <footer class="entry-footer"></footer>                 
            </article>
        <?php endwhile; ?>
    <?php else : ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.', 'st2' ); ?></p>
    <?php endif; ?> 
    <nav aria-label="Posts navigation"> 
        <?php posts_nav_link( null, __( '&#xAB; Newer Posts', 'st2' ), __( 'Older Posts &#xBB;', 'st2' ) ); ?> 
    </nav>     
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
