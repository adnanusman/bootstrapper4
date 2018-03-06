<article <?php post_class( array ('class' => 'secondary-featured' )); ?>>

    <h2><?php the_title(); ?></h2>
        <?php // check if the post has a Post Thumbnail assigned to it.
        if ( has_post_thumbnail() ) {
            the_post_thumbnail( 'large', array( 'class' => 'img-fluid' )  );
        } ?>

    <div class="meta-info">
        <p>
            by <span><?php the_author_posts_link(); ?></span> 
            Categories: <span><?php the_category(' | '); ?></span>
            <?php the_tags( 'Tags: <span>' , ', ', '</span>' ); ?>
        </p>
    </div>
    
        <p><?php the_excerpt(); ?></p>

</article>
