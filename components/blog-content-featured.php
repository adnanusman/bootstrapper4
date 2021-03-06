<article <?php post_class( array ('class' => 'featured' )); ?>>


    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

    <a href="<?php the_permalink(); ?>"><?php // check if the post has a Post Thumbnail assigned to it.
        if ( has_post_thumbnail() ) {
            the_post_thumbnail( 'large', array( 'class' => 'img-fluid' )  );
        } ?></a>

    <div class="meta-info">
        <p>
            by <span><?php the_author_posts_link(); ?></span> 
            Categories: <span><?php the_category(' | '); ?></span>
            <?php the_tags( 'Tags: <span>' , ', ', '</span>' ); ?>
        </p>

        <p><span><?php echo get_the_date(); ?></span></p>
    </div>
    
        <p><?php the_excerpt(); ?></p>

</article>
