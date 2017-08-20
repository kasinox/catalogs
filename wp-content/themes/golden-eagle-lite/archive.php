<?php
/**
 * The template for displaying Archive pages.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 *
 */
get_header();
?>
<div class="clear"></div>
<div class="page-content">
    <div class="eleven columns alpha">
        <div class="content-bar">
            <?php if (have_posts()): ?>
                <h1 class="page_title">
                    <?php
                    if (is_day()) :
                        printf(__('Daily Archives: %s', 'golden-eagle-lite'), get_the_date());
                    elseif (is_month()) :
                        printf(__('Monthly Archives: %s', 'golden-eagle-lite'), get_the_date('F Y'));
                    elseif (is_year()) :
                        printf(__('Yearly Archives: %s', 'golden-eagle-lite'), get_the_date('Y'));
                    else :
                        _e('Blog Archives', 'golden-eagle-lite');
                    endif;
                    ?>
                </h1>
                <?php
                /* Since we called the_post() above, we need to
                 * rewind the loop back to the beginning that way
                 * we can run the loop properly, in full.
                 */
                rewind_posts();
                /* Run the loop for the archives page to output the posts.
                 * If you want to overload this in a child theme then include a file
                 * called loop-archives.php and that will be used instead.
                 */
                get_template_part('loop', 'archive');
                ?>
                <div class="clear"></div>
                <nav id="nav-single">
                    <span class="nav-previous">
                        <?php next_posts_link(__('&larr; Older posts', 'golden-eagle-lite')); ?>
                    </span>
                    <span class="nav-next">
                        <?php previous_posts_link(__('Newer posts &rarr;', 'golden-eagle-lite')); ?>
                    </span>
                </nav>
            <?php endif; ?>
        </div>
    </div>
    <div class="five columns omega">
        <!--Start Sidebar-->
        <?php get_sidebar(); ?>
        <!--End Sidebar-->
    </div>
</div>
</div>
<?php get_footer(); ?>