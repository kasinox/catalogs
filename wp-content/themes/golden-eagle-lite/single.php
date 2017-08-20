<?php
/**
 * The Template for displaying all single posts.
 *
 */
get_header();
?>
<div class="clear"></div>
<div class="page-content single_page">
    <div class="eleven columns alpha">
        <div class="content-bar">
            <!-- Start the Loop. -->
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <!--post Start-->
                    <h1 class="post-title">
                        <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf(__('Permanent Link to %s', 'golden-eagle-lite'), the_title_attribute('echo=0')); ?>">
                            <?php the_title(); ?>
                        </a>
                    </h1>
                    <div class="post single">
                        <div class="post_content"> 
                            <?php the_content(); ?>
                            <div class="clear"></div>
                            <?php
                            wp_link_pages(array('before' => '<div class="page-link"><span>' . __('Pages:', 'golden-eagle-lite') . '</span>', 'after' => '</div>'));
                            if (has_tag()) {
                                ?>
                                <div class="tag">
                                    <?php the_tags(__('Post Tagged with&nbsp;', 'golden-eagle-lite'), ', ', ''); ?>
                                </div>
                            <?php } ?>
                        </div>
                        <ul class="post_meta">
                            <li class="posted_by">
                                <span>
                                    <?php _e('By', 'golden-eagle-lite'); ?>&nbsp;<?php the_author_posts_link(); ?>
                                </span>
                            </li>
                            <li class="post_date">
                                <span>
                                    <?php _e('on', 'golden-eagle-lite'); ?>&nbsp;<?php echo get_the_time('M, d, Y') ?>
                                </span>
                            </li>
                            <li class="post_category">
                                <span></span>&nbsp;<?php the_category(', '); ?>
                            </li>
                            <li class="postc_comment">
                                <span>
                                    &nbsp;<?php comments_popup_link(__('No Comments.', 'golden-eagle-lite'), __('1 Comment.', 'golden-eagle-lite'), __('% Comments.', 'golden-eagle-lite')); ?>
                                </span>
                            </li>
                        </ul>
                    </div>
                    <!--post End-->
                    <?php
                endwhile;
            else:
                ?>
                <div class="post">
                    <p>
                        <?php _e('Sorry, no posts matched your criteria.', 'golden-eagle-lite'); ?>
                    </p>
                </div>
            <?php endif; ?>
            <!--End Loop-->
            <nav id="nav-single">
                <span class="nav-previous">
                    <?php previous_post_link('%link', __('<span class="meta-nav">&larr;</span> Previous Post ', 'golden-eagle-lite')); ?>
                </span>
                <span class="nav-next">
                    <?php next_post_link('%link', __('Next Post <span class="meta-nav">&rarr;</span>', 'golden-eagle-lite')); ?>
                </span>
            </nav>
            <!--Start Comment box-->
            <?php comments_template(); ?>
            <!--End Comment box-->
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