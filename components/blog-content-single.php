<article id="post-<?php the_ID() ?>" <?php post_class(); ?>>

    <header>    
        <h1>
            <?php the_title(); ?>
        </h1>
        <div class="meta-info">
            <p>
                on <?php echo get_the_date();?> 
                by <span><?php the_author_posts_link(); ?></span>
                 | Category: <span><?php the_category(' | '); ?></span>
            </p>
        </div>
    </header>
    
    <div class="content">
        <?php the_content();?>
    </div>
    <div class="post-tags">
        <?php the_tags('Tags: </span>', ', '. '</span>'); ?>
    </div>
</article>
