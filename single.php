<?php get_header(); ?>
<div class="primary"></div>
    <div class="main">
        <div class="container">
            <?php
                while ( have_posts() ):
                    the_post();
                    get_template_part('components/blog-content', 'single');
                endwhile;
            ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>