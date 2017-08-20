<?php
/**
 * The template used to display Tag Archive pages
 *
 * 
 */
get_header();
?>
<div class="clear"></div>
<div class="page-content single-heading">
    <?php if (have_posts()) : ?>
        <h1 class="page_title">
            <?php printf(__('Tag Archives: %s', 'golden-eagle-lite'), '' . single_cat_title('', false) . ''); ?>
        </h1>
    </h1>
    <div class="eleven columns alpha">
        <div class="content-bar">
            <?php get_template_part('loop', 'index'); ?>
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
<<div class="five columns alpha">
    <!--Start Sidebar-->
    <?php get_sidebar(); ?>
    <!--End Sidebar-->
</div>
</div>
</div>
<?php
get_footer();
