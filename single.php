<?php get_header(); ?>
<div class="primary"></div>
    <div class="main">
        <div class="container">
            <?php
                while ( have_posts() ):
                    the_post();
                    get_template_part('components/blog-content', 'single');
            ?>

                    <div class="row">
                        <div class="pages col-6 text-left"><?php previous_post_link( '&laquo; %link' ); ?></div>
                        <div class="pages col-6 text-right"><?php next_post_link( '%link &raquo;' ); ?></div>
                    </div>
                    <br>
            <?php

                    if( comments_open() || get_comments_number() ):
                        comments_template();
                    endif;

                endwhile;

            ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>