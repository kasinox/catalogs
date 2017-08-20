<?php
/**
 * The template for displaying Search Results pages.
 *
 * 
 */
get_header();
?>
<div class="clear"></div>
<div class="page-content">
    <div class="eleven columns alpha">
        <div class="content-bar">
            <?php if (have_posts()) : ?>
                <h1 class="page-title">
                    <a href="#">
                        <?php printf(__('Search Results for: %s', 'golden-eagle-lite'), '' . get_search_query() . ''); ?>
                    </a>
                </h1>
                <!--Start Post-->
                <?php get_template_part('loop', 'search'); ?>
                <!--End Post-->
            <?php else : ?>
                <article id="post-0" class="post no-results not-found">
                    <header class="entry-header">
                        <h1 class="entry-title">
                            <?php _e('Nothing Found', 'golden-eagle-lite'); ?>
                        </h1>
                    </header>
                    <!-- .entry-header -->
                    <div class="entry-content">
                        <p>
                            <?php _e('Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'golden-eagle-lite'); ?>
                        </p>
                        <?php get_search_form(); ?>
                    </div>
                    <!-- .entry-content -->
                </article>
            <?php endif; ?>
            <div class="clear"></div>
            <nav id="nav-single"> 
                <span class="nav-previous">
                    <?php next_posts_link(__('&larr; Older posts', 'golden-eagle-lite')); ?>
                </span> 
                <span class="nav-next">
                    <?php previous_posts_link(__('Newer posts &rarr;', 'golden-eagle-lite')); ?>
                </span> 
            </nav>	
        </div>
    </div>
    <div class="five columns alpha">
        <!--Start Sidebar-->
        <?php get_sidebar(); ?>
        <!--End Sidebar-->
    </div>
</div>
</div>
<?php get_footer(); ?>