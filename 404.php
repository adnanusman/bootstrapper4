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

                        <div class="error-404">

                            <header>
                                <h1>Page not found</h1>
                                <p>Unfortunately, the page you tried to reach does not exist on this site!</p>
                            </header>
                            
                            <div class="error">
                                <p>How about doing a search?</p>
                                <p><?php get_search_form(); ?></p>
                                <p><?php the_widget('WP_Widget_Recent_Posts', array( 'title' => 'Recent Posts', 'number' => 3)); ?></p>
                            </div>
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