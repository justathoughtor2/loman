<?php get_header(); ?>

<div class="container" id="main">
    <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-12" id="sidebar-holder">
            <?php get_sidebar('sidebar'); ?>
        </div>
        <div class="col-lg-9 col-md-8 col-sm-12" id="content-holder">
            <?php
                if (have_posts()) :
                    // Start the Loop.
                    while (have_posts()) : the_post();

                        /*
                         * Include the post format-specific template for the content. If you want to
                         * use this in a child theme, then include a file called called content-___.php
                         * (where ___ is the post format) and that will be used instead.
                         */
                        get_template_part('content', get_post_format());

                    endwhile;
                    // Previous/next post navigation.
                    // loman_paging_nav();

                else :
                    // If no content, include the "No posts found" template.
                    get_template_part('content', 'none');

                endif;
            ?>
        </div>
    </div>
</div>