<?php 
/*
Template Name: Full Width Template
*/
?>

<?php get_header(); ?>

    <div class="content-area">
        <main>
            <section="middle-area">
                <div class="container">

                
                <div class="general-template">
                    
                    <?php
                    // If there are any posts
                    if ( have_posts() ):
                        // Then while Posts exist, Display the posts
                        while( have_posts() ): the_post();
                    ?>
                    
                    <article>
                    
                        <h2><?php the_title(); ?></h2>
                        <p><?php the_content(); ?></p>

                    </article>
                    
                    <?php
                    
                    // endwhile --- the first if condition is still active
                    endwhile;
                    // now the second condition begins, in case there are no posts
                    else:
                    ?>
                                        
                    <p>There is nothing to display.</p>
                    
                    <?php
                    // if statement ends
                    endif;
                    ?>
                </div>
            
                    </div>
                </div>                
            </section>

        
        </main>
    </div>
<?php get_footer(); ?>