<article <?php post_class() ?>>

    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <a href="<?php the_permalink(); ?>"><?php // check if the post has a Post Thumbnail assigned to it.
        if ( has_post_thumbnail() ) {
            the_post_thumbnail( 'blog-thumbnail' );
        } ?></a>

    <div class="meta-info">
        <p>Posted on <?php echo get_the_date(); ?> by <?php the_author_posts_link(); ?></p>
        <p>Categories: <?php the_category(' | '); ?></p>
        <p><?php the_tags( 'Tags: ' , ', ' ); ?></p>
    </div>

        <p><?php the_content() ?></p>
</article>
