<article <?php post_class() ?>>

    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <div class="meta-info">
        <p>Posted on <?php echo get_the_date(); ?> by <?php the_author_posts_link(); ?></p>
    </div>

        <p><?php the_excerpt() ?></p>
    <div class="meta-info">
    
    <?php 
    if(has_category() ):
    ?>
        
        <p>Categories: <span>
    
    <?php
     the_category(' | ');
    ?>  
    
        </span>
    
    <?php 
    endif;
    ?> 
    
    <?php the_tags( 'Tags: <span>' , ', ', '</span>' ); ?></p>
    </div>
</article>
<hr>
