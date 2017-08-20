<div class="four columns alpha">  
    <div class="footer-inner first-footer">
        <?php
        if (is_active_sidebar('first-footer-widget-area')) :
            dynamic_sidebar('first-footer-widget-area');
        else :
            ?> 
            <h3>
                <?php _e('Sitemap', 'golden-eagle-lite'); ?> 
            </h3>
            <ul>
                <li>
                    <a href="#">
                        <span>
                            <?php _e('Default template', 'golden-eagle-lite'); ?>
                        </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <?php _e('Full-width template ', 'golden-eagle-lite'); ?>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <?php _e('Home template', 'golden-eagle-lite'); ?> 
                    </a>
                </li>
                <li>
                    <a href="#">
                        <?php _e('Contact template ', 'golden-eagle-lite'); ?>
                    </a>
                </li>
            </ul>
        <?php endif; ?> 	
    </div>      
</div>
<div class="four columns">
    <div class="footer-inner">        
        <?php
        if (is_active_sidebar('second-footer-widget-area')) :
            dynamic_sidebar('second-footer-widget-area');
        else :
            ?> 
            <h3>
                <?php _e('Search', 'golden-eagle-lite'); ?>
            </h3>
            <?php get_search_form(); ?>
            <p>
                <?php _e('Theme from the Themes Area. Press the "Activate"
                Navember 2011 Theme from the Themes Area.', 'golden-eagle-lite'); ?>
            </p>
        <?php endif; ?>
    </div>        
</div>
<div class="four columns">
    <div class="footer-inner">         
        <?php
        if (is_active_sidebar('third-footer-widget-area')) :
            dynamic_sidebar('third-footer-widget-area');
        else :
            ?>
            <h3>
                <?php _e('Setting Up Footer', 'golden-eagle-lite'); ?>
            </h3>
            <p>
                <?php _e('Footer is widgetized. To setup the footer, drag the required Widgets </br>in Appearance -> Widgets Tab in the First, Second, Third or Fourth Footer Widget Areas.', 'golden-eagle-lite'); ?>
            </p>
        <?php endif; ?>
    </div>        
</div>
<div class="four columns omega">
    <div class="footer-inner last-footer">
        <?php
        if (is_active_sidebar('fourth-footer-widget-area')) :
            dynamic_sidebar('fourth-footer-widget-area');
        else :
            ?>
            <h3>
                <?php _e('Contact Us', 'golden-eagle-lite'); ?>
            </h3>
            <p>
                <?php _e('Theme from the Themes Area. Press the "Activate"
                Navember 2011 Theme from the Themes Area. Press the "Activate"
                CategoriesTheme from the Themes Area. Press the "Activate"
                Theme from the Themes Area. Press the "Activate"', 'golden-eagle-lite'); ?>
            </p>
        <?php endif; ?>
    </div>
</div>
