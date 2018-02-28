<?php get_header(); ?>
    <div class="content-area">
        <main>
        
            <section class="slider">
                
                <div class="container">
                    <div class="row text-center col-xs-12">
                
                    Slider Area        
                    
                    </div>
                </div>
                
            </section>
            <section class="services">
                
                <div class="container">
                    <div class="row">
                                
                    Services
                
                    </div>
                </div>    
            </section>
            
            <section class="middle-area">
                <div class="container">
                    <div class="row">
                
                <aside class="sidebar col-md-3">
                    Sidebar
                </aside>
                
                <div class="news col-md-9">
                    
                    <?php
                    // If there are any posts
                    if ( have_posts() ):
                        // Then while Posts exist, Display the posts
                        while( have_posts() ): the_post();
                    ?>
                    
                    <article>
                    
                        <h2><?php the_title(); ?></h2>
                    
                        <p>Posted on <?php echo get_the_date(); ?> by <?php the_author_posts_link(); ?></p>
                        <p>Categories: <?php the_category(' | '); ?></p>
                        <p><?php the_tags( 'Tags: ' , ', ' ); ?></p>
                        <p><?php the_content(); ?></p>

                    </article>
                    
                    <?php
                    
                    // endwhile --- the first if condition is still active
                    endwhile;
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