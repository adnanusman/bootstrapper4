<?php get_header(); ?>
<img class="img-fluid" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
    <div class="content-area">
        <main>
        
            <!-- <section class="slider">
                
                <div class="container">
                    <div class="row text-center col-xs-12">
                
                    Slider Area        
                    
                    </div>
                </div>
                
            </section> -->
            <section class="services">
                
                <div class="container">
                    <div class="row">
                                
                    <div class="col-sm-4">
                        <div class="services-item">
                        <?php
                            if(is_active_sidebar('service-area-1')) {
                                dynamic_sidebar('service-area-1');
                            }
                        ?>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="services-item">
                        <?php
                            if(is_active_sidebar('service-area-2')) {
                                dynamic_sidebar('service-area-2');
                            }
                        ?>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="services-item">
                        <?php
                            if(is_active_sidebar('service-area-3')) {
                                dynamic_sidebar('service-area-3');
                            }
                        ?>
                        </div>
                    </div>
                
                    </div>
                </div>    
            </section>
            
            <section class="middle-area">
                <div class="container">
                    <div class="row">
                
                <aside class="sidebar col-md-3">
                    <?php get_sidebar('home'); ?>
                </aside>
                
                <div class="news col-md-9">

                    This is the homepage news section.

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