<?php
if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
    die('Please do not load this page directly. Thanks!');
if (post_password_required()) {
    ?>
    <p class="nocomments">
        <?php _e('This post is password protected. Enter the password to view comments.', 'golden-eagle-lite'); ?>
    </p>
    <?php
    return;
}
?>
<!-- You can start editing here. -->
<div id="commentsbox">
    <?php if (have_comments()) : ?>
        <h3 id="comments">
            <?php
            comments_number(__('No Responses', 'golden-eagle-lite'), __('One Response', 'golden-eagle-lite'), __('% Responses', 'golden-eagle-lite'));
            _e('so far.', 'golden-eagle-lite');
            ?>
        </h3>
        <ol class="commentlist">
            <?php wp_list_comments(); ?>
        </ol>
        <div class="comment-nav">
            <div class="alignleft">
                <?php previous_comments_link() ?>
            </div>
            <div class="alignright">
                <?php next_comments_link() ?>
            </div>
        </div>
        <?php
    else : // this is displayed if there are no comments so far 
        if (comments_open()) :
            ?>
            <!-- If comments are open, but there are no comments. -->
        <?php elseif (!is_page() && comments_open()) : // comments are closed      ?>
            <!-- If comments are closed. -->
            <p class="nocomments">
                <?php _e('Comments are closed.', 'golden-eagle-lite'); ?>
            </p>
            <?php
        endif;
    endif;
    if (comments_open()) :
        ?>
        <div class="post-info">
            <?php _e('Leave a Comment', 'golden-eagle-lite'); ?>
        </div>
        <div id="comment-form">
            <div id="respond" class="rounded">
                <div class="cancel-comment-reply">
                    <small>
                        <?php cancel_comment_reply_link(); ?>
                    </small>
                </div>
                <?php if (get_option('comment_registration') && !is_user_logged_in()) : ?>
                    <p>
                        <?php _e('You must be', 'golden-eagle-lite'); ?> 
                        <a href="<?php echo wp_login_url(get_permalink()); ?>">
                            <?php _e('logged in', 'golden-eagle-lite'); ?>
                        </a> 
                        <?php _e('to post a comment.', 'golden-eagle-lite'); ?>
                    </p>
                <?php else : ?>
                    <div id="comment-form">
                        <?php comment_form(); ?>
                    </div>
                <?php endif; // If registration required and not logged in       ?>
            </div>
        </div>
    <?php endif; // if you delete this the sky will fall on your head       ?>
</div>
