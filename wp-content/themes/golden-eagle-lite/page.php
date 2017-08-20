<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the wordpress construct of pages
 * and that other 'pages' on your wordpress site will use a
 * different template.
 *
 */
get_header();
?>
<div class="clear"></div>
<div class="page-content">                
    <div class="eleven columns alpha">
        <div class="content-bar">  
            <h1 class="page-title">
                <a>
                    <?php the_title(); ?>
                </a>
            </h1>
            <?php
            if (have_posts()) : the_post();
                the_content();
            endif;
            ?>
            <!--Start Comment box-->
            <?php comments_template(); ?>
            <!--End Comment box-->
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