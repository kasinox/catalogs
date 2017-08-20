<?php
/**
 * The template for displaying all Parallax Templates.
 *
 * @package accesspress_parallax
 */
?>
<?php
$contact_title = of_get_option('contact_title');
$contact_phone = of_get_option('contact_phone');
$contact_email = of_get_option('contact_email');
$contact_website = of_get_option('contact_website');
$contact_address = of_get_option('contact_address');
$contact_detail = of_get_option('contact_detail');
?>
<div class="content-area googlemap-section">
    <div class="googlemap-content">
        <?php echo $page->post_content; ?>
        <div id="ap-map-canvas"></div>

        <?php if (!empty($contact_title) || !empty($contact_phone) || !empty($contact_email) || !empty($contact_website) || !empty($contact_address) || !empty($contact_detail)): ?>
            <div class="googlemap-contact">
                <div class="googlemap-contact-wrap wow fadeInRight">
                    <?php if (!empty($contact_title)): ?>
                        <h2><?php _e($contact_title,'accesspress_parallax'); ?></h2>
                    <?php endif; ?>
                    <ul>
                        <?php if (!empty($contact_phone)): ?>
                            <li><i class="fa fa-phone"></i><?php _e($contact_phone,'accesspress_parallax'); ?></li>
                        <?php endif; ?>
                        <?php if (!empty($contact_email)): ?>
                            <li><i class="fa fa-envelope"></i><?php _e($contact_email,'accesspress_parallax'); ?></li>
                        <?php endif; ?>
                        <?php if (!empty($contact_website)): ?>
                            <li><i class="fa fa-globe"></i><?php _e($contact_website,'accesspress_parallax'); ?></li>
                        <?php endif; ?>
                        <?php if (!empty($contact_address)): ?>
                            <li><i class="fa fa-map-marker"></i><?php _e(wpautop($contact_address),'accesspress_parallax'); ?></li>
                            <?php endif; ?>
                            <?php if (!empty($contact_detail)): ?>
                            <li><?php _e(wpautop($contact_detail),'accesspress_parallax'); ?></li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>