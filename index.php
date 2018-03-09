<?php get_header(); ?>
    <div class="content-area">
        <main>
        
            <!-- <section class="slider">
                
                <div class="container">
                    <div class="row text-center col-xs-12">
                
                    Slider Area        
                    
                    </div>
                </div>
                
            </section> -->
           
            <section class="middle-area">
                <div class="container">
                    <div class="row">
                
                        <aside class="sidebar col-md-3">
                            <?php get_sidebar('blog'); ?>
                        </aside>
                        
                        <div class="news col-md-9">
                            
                            <?php
                                // If there are any posts
                                if ( have_posts() ):
                                    // Then while Posts exist, Display the posts
                                    while( have_posts() ): the_post();
                                    
                                    get_template_part( 'components/blog-content', get_post_format() );
                                
                                // endwhile --- the first if condition is still active
                                endwhile;
                            ?>

                            <div class="row">
                                <div class="pages col-6 text-left"><?php previous_posts_link("<< Newer Posts"); ?></div>
                                <div class="pages col-6 text-right"><?php next_posts_link(">> Previous Posts"); ?></div>
                            </div>

                            <?php
                                // now the second condition begins, in case there are no posts
                                else:
                            ?>
                                                
                            <p>There are no posts to be displayed</p>
                            
                            <?php
                                // if statement ends
                                endif;
                            ?>
                        </div>
            
                    </div>
                </div>                
            </section>
            
            <section class="map">
                <div class="container">
                    <div class="row">
                    
                        Map Area
                
                    </div>
                </div>
            </section>
        
        </main>
    </div>
<?php get_footer(); ?>