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

                    <div class="container">
                        <div class="row">

                        <?php 

                            $featured = new WP_Query( 'post_type=post&posts_per_page=1&cat=5' );

                            if ($featured->have_posts() ):
                                while ( $featured->have_posts() ): $featured->the_post();

                        ?>

                                <div class="col-12">
                                    <?php get_template_part( 'components/blog-content', 'featured' ); ?>
                                </div>

                        <?php
                                endwhile;
                                wp_reset_postdata();
                            endif;

                        ?>
                        <?php 
                            $featuredArgs = array (
                                'post_type' => 'post',
                                'posts_per_page' => '2',
                                'category__not_in' => array( 5 ),
                                'category__in' => array ( 6,7 )  
                            );
                            $featuredSecondary = new WP_Query( $featuredArgs );

                            if ($featuredSecondary->have_posts() ):
                                while ( $featuredSecondary->have_posts() ): $featuredSecondary->the_post();

                        ?>

                                <div class="col-sm-6">
                                    <?php get_template_part( 'components/blog-content', 'secondary-featured' ); ?>
                                </div>

                        <?php
                                endwhile;
                                wp_reset_postdata();
                            endif;

                        ?>
                        </div>
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