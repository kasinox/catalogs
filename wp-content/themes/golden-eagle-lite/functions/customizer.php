<?php

class goldeneagle_Customizer {

    public static function goldeneagle_Register($wp_customize) {

        self::goldeneagle_Sections($wp_customize);

        self::goldeneagle_Controls($wp_customize);
    }

    public static function goldeneagle_Sections($wp_customize) {

        /**
         * Add panel for home page feature area
         */
        $wp_customize->add_panel('general_setting_panel', array(
            'title' => __('General Settings', 'golden-eagle-lite'),
            'description' => __('Allows you to setup home page feature area section for Golden Eagle Lite.', 'golden-eagle-lite'),
            'priority' => '10',
            'capability' => 'edit_theme_options'
        ));

        /**
         * Site Title Section
         */
        $wp_customize->add_section('title_tagline', array(
            'title' => __('Site Title & Tagline', 'golden-eagle-lite'),
            'priority' => '',
            'panel' => 'general_setting_panel'
        ));

        /**
         * Remove control for site icon
         */
        $wp_customize->remove_control('site_icon');

        /**
         * Logo and favicon section
         */
        $wp_customize->add_section('logo_fevi_setting', array(
            'title' => __('Logo & Favicon', 'golden-eagle-lite'),
            'description' => __('Allows you to customize header logo, favicon settings for Golden Eagle Lite.', 'golden-eagle-lite'), //Descriptive tooltip
            'panel' => 'general_setting_panel',
            'priority' => '',
            'capability' => 'edit_theme_options'
                )
        );

        /**
         * Home page slider panel
         */
        $wp_customize->add_panel('home_page_slider_panel', array(
            'title' => __('Slider Settings', 'golden-eagle-lite'),
            'description' => __('Allows you to setup home page slider for Golden Eagle Lite.', 'golden-eagle-lite'),
            'priority' => '11',
            'capability' => 'edit_theme_options'
        ));

        /**
         * First Slider section
         */
        $wp_customize->add_section('home_page_slider_1', array(
            'title' => __('First Slider', 'golden-eagle-lite'),
            'description' => __('Allows you to setup first slider for Golden Eagle Lite.', 'golden-eagle-lite'), //Descriptive tooltip
            'panel' => 'home_page_slider_panel',
            'priority' => '',
            'capability' => 'edit_theme_options'
                )
        );

        /**
         * Second Slider section
         */
        $wp_customize->add_section('home_page_slider_2', array(
            'title' => __('Second Slider', 'golden-eagle-lite'),
            'description' => __('Allows you to setup second slider for Golden Eagle Lite.', 'golden-eagle-lite'), //Descriptive tooltip
            'panel' => 'home_page_slider_panel',
            'priority' => '',
            'capability' => 'edit_theme_options'
                )
        );

        /**
         * Home page main heading
         */
        $wp_customize->add_section('home_page_main_heading', array(
            'title' => __('Main Heading Setting', 'golden-eagle-lite'),
            'description' => __('Allows you to setup mani heading for Golden Eagle Lite.', 'golden-eagle-lite'), //Descriptive tooltip
            'panel' => '',
            'priority' => '12',
            'capability' => 'edit_theme_options'
                )
        );

        /**
         * Home Page Feature area panel
         */
        $wp_customize->add_panel('home_feature_area_panel', array(
            'title' => __('Feature Area Settings', 'golden-eagle-lite'),
            'description' => __('Allows you to setup home page feature area section for Golden Eagle Lite.', 'golden-eagle-lite'),
            'priority' => '13',
            'capability' => 'edit_theme_options'
        ));

        /**
         * Home Page feature area 1
         */
        $wp_customize->add_section('home_feature_area_1', array(
            'title' => __('First Feature Area', 'golden-eagle-lite'),
            'description' => __('Allows you to setup first feature area section for Golden Eagle Lite.', 'golden-eagle-lite'),
            'panel' => 'home_feature_area_panel',
            'priority' => '',
            'capability' => 'edit_theme_options'
                )
        );

        /**
         * Home Page feature area 2
         */
        $wp_customize->add_section('home_feature_area_2', array(
            'title' => __('Second Feature Area', 'golden-eagle-lite'),
            'description' => __('Allows you to setup second feature area section for Golden Eagle Lite.', 'golden-eagle-lite'),
            'panel' => 'home_feature_area_panel',
            'priority' => '',
            'capability' => 'edit_theme_options'
                )
        );

        /**
         * Home Page feature area 3
         */
        $wp_customize->add_section('home_feature_area_3', array(
            'title' => __('Third Feature Area', 'golden-eagle-lite'),
            'description' => __('Allows you to setup third feature area section for Golden Eagle Lite.', 'golden-eagle-lite'),
            'panel' => 'home_feature_area_panel',
            'priority' => '',
            'capability' => 'edit_theme_options'
                )
        );

        /**
         * Home Page feature area 4
         */
        $wp_customize->add_section('home_feature_area_4', array(
            'title' => __('Fourth Feature Area', 'golden-eagle-lite'),
            'description' => __('Allows you to setup fourth feature area section for Golden Eagle Lite.', 'golden-eagle-lite'),
            'panel' => 'home_feature_area_panel',
            'priority' => '',
            'capability' => 'edit_theme_options'
                )
        );

        /*
         * home page middle ad section
         */
        $wp_customize->add_section('home_middle_area_control', array(
            'title' => __('Ad Section Setting', 'golden-eagle-lite'),
            'description' => __('Allows you to setup home page ad section for Golden Eagle Lite.', 'golden-eagle-lite'),
            'panel' => '',
            'priority' => '14',
            'capability' => 'edit_theme_options'
                )
        );
        /*
         * home page middle area left section
         */
//        $wp_customize->add_section('home_middle_area_left', array(
//            'title' => __('Home Page Left Widget Heading', 'golden-eagle-lite'),
//            'description' => __('Allows you to setup home page left widget heading for Golden Eagle Lite.', 'golden-eagle-lite'),
//            'panel' => 'home_middle_area_panel',
//            'priority' => '',
//            'capability' => 'edit_theme_options'
//                )
//        );


        /**
         * Home Page bottom feature section
         */
        $wp_customize->add_panel('home_bottom_area_panel', array(
            'title' => __('Bottom Section Settings', 'golden-eagle-lite'),
            'description' => __('Allows you to setup home page bottom feature section for Golden Eagle Lite.', 'golden-eagle-lite'),
            'priority' => '15',
            'capability' => 'edit_theme_options'
        ));

        /*
         * Home page bottom left section
         */
        $wp_customize->add_section('home_bottom_area_left', array(
            'title' => __('Left Section Settings', 'golden-eagle-lite'),
            'description' => __('Allows you to setup bottom left section for Golden Eagle Lite.', 'golden-eagle-lite'),
            'priority' => '',
            'panel' => 'home_bottom_area_panel'
        ));

        /*
         * Home page bottom middle section
         */
        $wp_customize->add_section('home_bottom_area_middle', array(
            'title' => __('Middle Section Settings', 'golden-eagle-lite'),
            'description' => __('Allows you to setup bottom middle section for Golden Eagle Lite.', 'golden-eagle-lite'),
            'priority' => '',
            'panel' => 'home_bottom_area_panel'
        ));

        /*
         * Home page bottom right section
         */
        $wp_customize->add_section('home_bottom_area_right', array(
            'title' => __('Right Section Settings', 'golden-eagle-lite'),
            'description' => __('Allows you to setup bottom right section for Golden Eagle Lite.', 'golden-eagle-lite'),
            'priority' => '',
            'panel' => 'home_bottom_area_panel'
        ));

        /**
         * Social site section
         */
        $wp_customize->add_section('social_links_section', array(
            'title' => __('Social links Setting', 'golden-eagle-lite'),
            'description' => __('Allows you to setup social icon for Golden Eagle Lite.', 'golden-eagle-lite'),
            'priority' => '16',
            'panel' => ''
        ));

        /**
         * Add panel for styling option
         */
        $wp_customize->add_panel('style_setting', array(
            'title' => __('Style Settings', 'golden-eagle-lite'),
            'description' => __('Allows you to setup Theme text and Background color for Golden Eagle Lite.', 'golden-eagle-lite'),
            'priority' => '17',
            'capability' => 'edit_theme_options'
        ));

        /**
         * Background color Section
         */
        $wp_customize->add_section('colors', array(
            'title' => __('Background color Setting', 'golden-eagle-lite'),
            'description' => __('Allows you to change Background color for Golden Eagle Lite. This only works when no any image set as background image.', 'golden-eagle-lite'),
            'priority' => '',
            'panel' => 'style_setting'
        ));

        /**
         * Background Image Section
         */
        $wp_customize->add_section('background_image', array(
            'title' => __('Background Image setting', 'golden-eagle-lite'),
            'description' => __('Allows you to change background image for Golden Eagle Lite. This will overright the background color property', 'golden-eagle-lite'),
            'priority' => '',
            'panel' => 'style_setting'
        ));

        /**
         * Style Section
         */
        $wp_customize->add_section('style_section', array(
            'title' => __('Custom Style Setting', 'golden-eagle-lite'),
            'description' => __('Allows you to change style using custom css for Golden Eagle Lite.', 'golden-eagle-lite'),
            'panel' => 'style_setting',
            'priority' => '',
            'capability' => 'edit_theme_options'
                )
        );
    }

    public static function goldeneagle_Section_Content() {

        $section_content = array(
            'logo_fevi_setting' => array(
                'goldeneagle_logo',
                'goldeneagle_favicon'
            ),
            'home_page_slider_1' => array(
                'goldeneagle_slideimage1',
                'goldeneagle_slidelink1'
            ),
            'home_page_slider_2' => array(
                'goldeneagle_slideimage2',
                'goldeneagle_slidelink2'
            ),
            'home_page_main_heading' => array(
                'goldeneagle_page_heading'
            ),
            'home_feature_area_1' => array(
                'goldeneagle_featureimg1',
                'goldeneagle_firsthead',
                'goldeneagle_firstdesc',
                'goldeneagle_link1'
            ),
            'home_feature_area_2' => array(
                'goldeneagle_featureimg2',
                'goldeneagle_secondhead',
                'goldeneagle_seconddesc',
                'goldeneagle_link2'
            ),
            'home_feature_area_3' => array(
                'goldeneagle_featureimg3',
                'goldeneagle_thirdhead',
                'goldeneagle_thirddesc',
                'goldeneagle_link3'
            ),
            'home_feature_area_4' => array(
                'goldeneagle_featureimg4',
                'goldeneagle_fourthhead',
                'goldeneagle_fourthdesc',
                'goldeneagle_link4'
            ),
            'home_middle_area_control' => array(
                'goldeneagle_tagline_text',
                'goldeneagle_tagline_button',
                'goldeneagle_tagline_button_link'
            ),
            'home_bottom_area_left' => array(
                'goldeneagle_bottomleft_heading',
                'goldeneagle_bottomleft_description'
            ),
            'home_bottom_area_middle' => array(
                'goldeneagle_bottom_blog',
                'goldeneagle_blog_posts_count'
            ),
            'home_bottom_area_right' => array(
                'goldeneagle_testimonial',
                'goldeneagle_testimonial_text'
            ),
            'social_links_section' => array(
                'goldeneagle_facebook',
                'goldeneagle_twitter',
                'goldeneagle_rss',
                'goldeneagle_google'
            ),
            'style_section' => array(
                'goldeneagle_customcss'
            ),
        );
        return $section_content;
    }

    public static function goldeneagle_Settings() {

        $theme_settings = array(
            'goldeneagle_logo' => array(
                'id' => 'goldeneagle_options[goldeneagle_logo]',
                'label' => __('Custom Logo', 'golden-eagle-lite'),
                'description' => __('Upload a logo for your Website. The recommended size for the logo is 300px width x 90px height.', 'golden-eagle-lite'),
                'type' => 'option',
                'setting_type' => 'image',
                'default' => ''
            ),
            'goldeneagle_favicon' => array(
                'id' => 'goldeneagle_options[goldeneagle_favicon]',
                'label' => __('Custom Favicon', 'golden-eagle-lite'),
                'description' => __('Here you can upload a Favicon for your Website. Specified size is 16px x 16px.', 'golden-eagle-lite'),
                'type' => 'option',
                'setting_type' => 'image',
                'default' => ''
            ),
            'goldeneagle_slideimage1' => array(
                'id' => 'goldeneagle_options[goldeneagle_slideimage1]',
                'label' => __('First Slider Image', 'golden-eagle-lite'),
                'description' => __('Choose Image for your Home page First Slider. Optimal Size: 950px x 480px', 'golden-eagle-lite'),
                'type' => 'option',
                'setting_type' => 'image',
                'default' => ''
            ),
            'goldeneagle_slidelink1' => array(
                'id' => 'goldeneagle_options[goldeneagle_slidelink1]',
                'label' => __('First Slide Link', 'golden-eagle-lite'),
                'description' => __('Enter the Link URL for Home Page First Slider', 'golden-eagle-lite'),
                'type' => 'option',
                'setting_type' => 'link',
                'default' => ''
            ),
            'goldeneagle_slideimage2' => array(
                'id' => 'goldeneagle_options[goldeneagle_slideimage2]',
                'label' => __('Second Slider Image', 'golden-eagle-lite'),
                'description' => __('Choose Image for your Home page Second Slider. Optimal Size: 950px x 480px', 'golden-eagle-lite'),
                'type' => 'option',
                'setting_type' => 'image',
                'default' => ''
            ),
            'goldeneagle_slidelink2' => array(
                'id' => 'goldeneagle_options[goldeneagle_slidelink2]',
                'label' => __('Second Slide Link', 'golden-eagle-lite'),
                'description' => __('Enter the Link URL for Home Page Second Slider', 'golden-eagle-lite'),
                'type' => 'option',
                'setting_type' => 'link',
                'default' => ''
            ),
            'goldeneagle_page_heading' => array(
                'id' => 'goldeneagle_options[goldeneagle_page_heading]',
                'label' => __('Home Page Main Heading', 'golden-eagle-lite'),
                'description' => __('Enter your heading text for home page', 'golden-eagle-lite'),
                'type' => 'option',
                'setting_type' => 'textarea',
                'default' => ''
            ),
            'goldeneagle_featureimg1' => array(
                'id' => 'goldeneagle_options[goldeneagle_featureimg1]',
                'label' => __('First Feature Image', 'golden-eagle-lite'),
                'description' => __('Choose image for your feature column first.', 'golden-eagle-lite'),
                'type' => 'option',
                'setting_type' => 'image',
                'default' => ''
            ),
            'goldeneagle_firsthead' => array(
                'id' => 'goldeneagle_options[goldeneagle_firsthead]',
                'label' => __('First Feature Heading', 'golden-eagle-lite'),
                'description' => __('Enter text for first feature area heading.', 'golden-eagle-lite'),
                'type' => 'option',
                'setting_type' => 'textarea',
                'default' => ''
            ),
            'goldeneagle_firstdesc' => array(
                'id' => 'goldeneagle_options[goldeneagle_firstdesc]',
                'label' => __('First Feature Description', 'golden-eagle-lite'),
                'description' => __('Enter text for first feature area description.', 'golden-eagle-lite'),
                'type' => 'option',
                'setting_type' => 'textarea',
                'default' => ''
            ),
            'goldeneagle_link1' => array(
                'id' => 'goldeneagle_options[goldeneagle_link1]',
                'label' => __('First feature Link', 'golden-eagle-lite'),
                'description' => __('Enter link url for first feature area.', 'golden-eagle-lite'),
                'type' => 'option',
                'setting_type' => 'link',
                'default' => '#'
            ),
            'goldeneagle_featureimg2' => array(
                'id' => 'goldeneagle_options[goldeneagle_featureimg2]',
                'label' => __('Second Feature Image', 'golden-eagle-lite'),
                'description' => __('Choose image for your feature column second.', 'golden-eagle-lite'),
                'type' => 'option',
                'setting_type' => 'image',
                'default' => ''
            ),
            'goldeneagle_secondhead' => array(
                'id' => 'goldeneagle_options[goldeneagle_secondhead]',
                'label' => __('Second Feature Heading', 'golden-eagle-lite'),
                'description' => __('Enter text for second feature area heading.', 'golden-eagle-lite'),
                'type' => 'option',
                'setting_type' => 'textarea',
                'default' => ''
            ),
            'goldeneagle_seconddesc' => array(
                'id' => 'goldeneagle_options[goldeneagle_seconddesc]',
                'label' => __('Second Feature Description', 'golden-eagle-lite'),
                'description' => __('Enter text for second feature area description.', 'golden-eagle-lite'),
                'type' => 'option',
                'setting_type' => 'textarea',
                'default' => ''
            ),
            'goldeneagle_link2' => array(
                'id' => 'goldeneagle_options[goldeneagle_link2]',
                'label' => __('Second feature Link', 'golden-eagle-lite'),
                'description' => __('Enter link url for second feature area.', 'golden-eagle-lite'),
                'type' => 'option',
                'setting_type' => 'link',
                'default' => '#'
            ),
            'goldeneagle_featureimg3' => array(
                'id' => 'goldeneagle_options[goldeneagle_featureimg3]',
                'label' => __('Third Feature Image', 'golden-eagle-lite'),
                'description' => __('Choose image for your feature column third.', 'golden-eagle-lite'),
                'type' => 'option',
                'setting_type' => 'image',
                'default' => ''
            ),
            'goldeneagle_thirdhead' => array(
                'id' => 'goldeneagle_options[goldeneagle_thirdhead]',
                'label' => __('Third Feature Heading', 'golden-eagle-lite'),
                'description' => __('Enter text for third feature area heading.', 'golden-eagle-lite'),
                'type' => 'option',
                'setting_type' => 'textarea',
                'default' => ''
            ),
            'goldeneagle_thirddesc' => array(
                'id' => 'goldeneagle_options[goldeneagle_thirddesc]',
                'label' => __('Third Feature Description', 'golden-eagle-lite'),
                'description' => __('Enter text for third feature area description.', 'golden-eagle-lite'),
                'type' => 'option',
                'setting_type' => 'textarea',
                'default' => ''
            ),
            'goldeneagle_link3' => array(
                'id' => 'goldeneagle_options[goldeneagle_link3]',
                'label' => __('Third feature Link', 'golden-eagle-lite'),
                'description' => __('Enter link url for third feature area.', 'golden-eagle-lite'),
                'type' => 'option',
                'setting_type' => 'link',
                'default' => '#'
            ),
            'goldeneagle_featureimg4' => array(
                'id' => 'goldeneagle_options[goldeneagle_featureimg4]',
                'label' => __('Fourth Feature Image', 'golden-eagle-lite'),
                'description' => __('Choose image for your feature column fourth.', 'golden-eagle-lite'),
                'type' => 'option',
                'setting_type' => 'image',
                'default' => ''
            ),
            'goldeneagle_fourthhead' => array(
                'id' => 'goldeneagle_options[goldeneagle_fourthhead]',
                'label' => __('Fourth Feature Heading', 'golden-eagle-lite'),
                'description' => __('Enter text for fourth feature area heading.', 'golden-eagle-lite'),
                'type' => 'option',
                'setting_type' => 'textarea',
                'default' => ''
            ),
            'goldeneagle_fourthdesc' => array(
                'id' => 'goldeneagle_options[goldeneagle_fourthdesc]',
                'label' => __('Fourth Feature Description', 'golden-eagle-lite'),
                'description' => __('Enter text for fourth feature area description.', 'golden-eagle-lite'),
                'type' => 'option',
                'setting_type' => 'textarea',
                'default' => ''
            ),
            'goldeneagle_link4' => array(
                'id' => 'goldeneagle_options[goldeneagle_link4]',
                'label' => __('Fourth feature Link', 'golden-eagle-lite'),
                'description' => __('Enter link url for fourth feature area.', 'golden-eagle-lite'),
                'type' => 'option',
                'setting_type' => 'link',
                'default' => '#'
            ),
            'goldeneagle_tagline_text' => array(
                'id' => 'goldeneagle_options[goldeneagle_tagline_text]',
                'label' => __('Ad Section Text', 'golden-eagle-lite'),
                'description' => __('Enter your text home page ad section.', 'golden-eagle-lite'),
                'type' => 'option',
                'setting_type' => 'textarea',
                'default' => ''
            ),
            'goldeneagle_tagline_button' => array(
                'id' => 'goldeneagle_options[goldeneagle_tagline_button]',
                'label' => __('Ad Section Button Text', 'golden-eagle-lite'),
                'description' => __('Enter your text for home Page ad section button', 'golden-eagle-lite'),
                'type' => 'option',
                'setting_type' => 'textarea',
                'default' => ''
            ),
            'goldeneagle_tagline_button_link' => array(
                'id' => 'goldeneagle_options[goldeneagle_tagline_button_link]',
                'label' => __('Ad Section Button Link', 'golden-eagle-lite'),
                'description' => __('Enter your link url for home page ad section button.', 'golden-eagle-lite'),
                'type' => 'option',
                'setting_type' => 'link',
                'default' => ''
            ),
            'goldeneagle_bottomleft_heading' => array(
                'id' => 'goldeneagle_options[goldeneagle_bottomleft_heading]',
                'label' => __('Left Section Heading', 'golden-eagle-lite'),
                'description' => __('Enter your text bottom left section.', 'golden-eagle-lite'),
                'type' => 'option',
                'setting_type' => 'textarea',
                'default' => ''
            ),
            'goldeneagle_bottomleft_description' => array(
                'id' => 'goldeneagle_options[goldeneagle_bottomleft_description]',
                'label' => __('Left Section Text', 'golden-eagle-lite'),
                'description' => __('Here mention the text bottom left section. You can also enter html code here.', 'golden-eagle-lite'),
                'type' => 'option',
                'setting_type' => 'texteditor',
                'default' => ''
            ),
            'goldeneagle_bottom_blog' => array(
                'id' => 'goldeneagle_options[goldeneagle_bottom_blog]',
                'label' => __('Middle Section Heading', 'golden-eagle-lite'),
                'description' => __('Here mention the heading for bottom middle section.', 'golden-eagle-lite'),
                'type' => 'option',
                'setting_type' => 'textarea',
                'default' => ''
            ),
            'goldeneagle_blog_posts_count' => array(
                'id' => 'goldeneagle_options[goldeneagle_blog_posts_count]',
                'label' => __('Middle Section Blog Posts Number', 'golden-eagle-lite'),
                'description' => __('Enter Number of Post you want to show on bottom middle section.', 'golden-eagle-lite'),
                'type' => 'option',
                'setting_type' => 'number',
                'default' => '3'
            ),
            'goldeneagle_testimonial' => array(
                'id' => 'goldeneagle_options[goldeneagle_testimonial]',
                'label' => __('Right Section Heading', 'golden-eagle-lite'),
                'description' => __('Here mention the heading for bottom right section.', 'golden-eagle-lite'),
                'type' => 'option',
                'setting_type' => 'textarea',
                'default' => ''
            ),
            'goldeneagle_testimonial_text' => array(
                'id' => 'goldeneagle_options[goldeneagle_testimonial_text]',
                'label' => __('Right Section Text', 'golden-eagle-lite'),
                'description' => __('Here mention the text for bottom right section. You can also enter html code here.', 'golden-eagle-lite'),
                'type' => 'option',
                'setting_type' => 'texteditor',
                'default' => ''
            ),
            'goldeneagle_facebook' => array(
                'id' => 'goldeneagle_options[goldeneagle_facebook]',
                'label' => __('Facebook URL', 'golden-eagle-lite'),
                'description' => __('Enter your Facebook URL if you have one', 'golden-eagle-lite'),
                'type' => 'option',
                'setting_type' => 'link',
                'default' => ''
            ),
            'goldeneagle_twitter' => array(
                'id' => 'goldeneagle_options[goldeneagle_twitter]',
                'label' => __('Twitter URL', 'golden-eagle-lite'),
                'description' => __('Enter your Twitter URL if you have one', 'golden-eagle-lite'),
                'type' => 'option',
                'setting_type' => 'link',
                'default' => ''
            ),
            'goldeneagle_rss' => array(
                'id' => 'goldeneagle_options[goldeneagle_rss]',
                'label' => __('RSS Feed URL', 'golden-eagle-lite'),
                'description' => __('Enter your RSS Feed URL if you have one', 'golden-eagle-lite'),
                'type' => 'option',
                'setting_type' => 'link',
                'default' => ''
            ),
            'goldeneagle_google' => array(
                'id' => 'goldeneagle_options[goldeneagle_google]',
                'label' => __('Google+ URL', 'golden-eagle-lite'),
                'description' => __('Enter your Google+ URL if you have one', 'golden-eagle-lite'),
                'type' => 'option',
                'setting_type' => 'link',
                'default' => ''
            ),
            'goldeneagle_customcss' => array(
                'id' => 'goldeneagle_options[goldeneagle_customcss]',
                'label' => __('Custom CSS', 'golden-eagle-lite'),
                'description' => __('Quickly add your custom CSS code to your theme by writing the code in this block.', 'golden-eagle-lite'),
                'type' => 'option',
                'setting_type' => 'textarea',
                'default' => ''
            )
        );
        return $theme_settings;
    }

    public static function goldeneagle_Controls($wp_customize) {

        $sections = self::goldeneagle_Section_Content();
        $settings = self::goldeneagle_Settings();

        foreach ($sections as $section_id => $section_content) {

            foreach ($section_content as $section_content_id) {

                switch ($settings[$section_content_id]['setting_type']) {
                    case 'image':
                        self::add_setting($wp_customize, $settings[$section_content_id]['id'], $settings[$section_content_id]['default'], $settings[$section_content_id]['type'], 'goldeneagle_sanitize_url');
                        $wp_customize->add_control(new WP_Customize_Image_Control(
                                $wp_customize, $settings[$section_content_id]['id'], array(
                            'label' => $settings[$section_content_id]['label'],
                            'description' => $settings[$section_content_id]['description'],
                            'section' => $section_id,
                            'settings' => $settings[$section_content_id]['id']
                                )
                        ));
                        break;

                    case 'text':
                        self::add_setting($wp_customize, $settings[$section_content_id]['id'], $settings[$section_content_id]['default'], $settings[$section_content_id]['type'], 'goldeneagle_sanitize_text');

                        $wp_customize->add_control(new WP_Customize_Control(
                                $wp_customize, $settings[$section_content_id]['id'], array(
                            'label' => $settings[$section_content_id]['label'],
                            'description' => $settings[$section_content_id]['description'],
                            'section' => $section_id,
                            'settings' => $settings[$section_content_id]['id'],
                            'type' => 'text'
                                )
                        ));
                        break;

                    case 'textarea':

                        self::add_setting($wp_customize, $settings[$section_content_id]['id'], $settings[$section_content_id]['default'], $settings[$section_content_id]['type'], 'goldeneagle_sanitize_textarea');

                        $wp_customize->add_control(new WP_Customize_Control(
                                $wp_customize, $settings[$section_content_id]['id'], array(
                            'label' => $settings[$section_content_id]['label'],
                            'description' => $settings[$section_content_id]['description'],
                            'section' => $section_id,
                            'settings' => $settings[$section_content_id]['id'],
                            'type' => 'textarea'
                                )
                        ));
                        break;

                    case 'link':

                        self::add_setting($wp_customize, $settings[$section_content_id]['id'], $settings[$section_content_id]['default'], $settings[$section_content_id]['type'], 'goldeneagle_sanitize_url');

                        $wp_customize->add_control(new WP_Customize_Control(
                                $wp_customize, $settings[$section_content_id]['id'], array(
                            'label' => $settings[$section_content_id]['label'],
                            'description' => $settings[$section_content_id]['description'],
                            'section' => $section_id,
                            'settings' => $settings[$section_content_id]['id'],
                            'type' => 'text'
                                )
                        ));
                        break;

                    case 'color':

                        self::add_setting($wp_customize, $settings[$section_content_id]['id'], $settings[$section_content_id]['default'], $settings[$section_content_id]['type'], 'goldeneagle_sanitize_color');

                        $wp_customize->add_control(new WP_Customize_Color_Control(
                                $wp_customize, $settings[$section_content_id]['id'], array(
                            'label' => $settings[$section_content_id]['label'],
                            'description' => $settings[$section_content_id]['description'],
                            'section' => $section_id,
                            'settings' => $settings[$section_content_id]['id']
                                )
                        ));
                        break;

                    case 'number':

                        self::add_setting($wp_customize, $settings[$section_content_id]['id'], $settings[$section_content_id]['default'], $settings[$section_content_id]['type'], 'goldeneagle_sanitize_number');

                        $wp_customize->add_control(new WP_Customize_Control(
                                $wp_customize, $settings[$section_content_id]['id'], array(
                            'label' => $settings[$section_content_id]['label'],
                            'description' => $settings[$section_content_id]['description'],
                            'section' => $section_id,
                            'settings' => $settings[$section_content_id]['id'],
                            'type' => 'text'
                                )
                        ));
                        break;

                    case 'select':

                        self::add_setting($wp_customize, $settings[$section_content_id]['id'], $settings[$section_content_id]['default'], $settings[$section_content_id]['type'], 'goldeneagle_sanitize_select');

                        $wp_customize->add_control(new WP_Customize_Control(
                                $wp_customize, $settings[$section_content_id]['id'], array(
                            'label' => $settings[$section_content_id]['label'],
                            'description' => $settings[$section_content_id]['description'],
                            'section' => $section_id,
                            'settings' => $settings[$section_content_id]['id'],
                            'type' => 'select',
                            'choices' => $settings[$section_content_id]['choices']
                                )
                        ));
                        break;

                    case 'radio':

                        self::add_setting($wp_customize, $settings[$section_content_id]['id'], $settings[$section_content_id]['default'], $settings[$section_content_id]['type'], 'goldeneagle_sanitize_radio');

                        $wp_customize->add_control(new WP_Customize_Control(
                                $wp_customize, $settings[$section_content_id]['id'], array(
                            'label' => $settings[$section_content_id]['label'],
                            'description' => $settings[$section_content_id]['description'],
                            'section' => $section_id,
                            'settings' => $settings[$section_content_id]['id'],
                            'type' => 'radio',
                            'choices' => $settings[$section_content_id]['choices']
                                )
                        ));
                        break;

                    case 'texteditor':

                        self::add_setting($wp_customize, $settings[$section_content_id]['id'], $settings[$section_content_id]['default'], $settings[$section_content_id]['type'], 'goldeneagle_sanitize_html');

                        $wp_customize->add_control(new WP_Customize_Control(
                                $wp_customize, $settings[$section_content_id]['id'], array(
                            'label' => $settings[$section_content_id]['label'],
                            'description' => $settings[$section_content_id]['description'],
                            'section' => $section_id,
                            'settings' => $settings[$section_content_id]['id'],
                            'type' => 'textarea'
                                )
                        ));
                        break;

                    default:
                        break;
                }
            }
        }
    }

    public static function add_setting($wp_customize, $setting_id, $default, $type, $sanitize_callback) {
        $wp_customize->add_setting($setting_id, array(
            'default' => $default,
            'capability' => 'edit_theme_options',
            'sanitize_callback' => array('goldeneagle_Customizer', $sanitize_callback),
            'type' => $type
                )
        );
    }

    /**
     * adds sanitization callback funtion : textarea
     * @package goldeneagle
     */
    public static function goldeneagle_sanitize_textarea($value) {
        $array = wp_kses_allowed_html('post');
        $allowedtags = array(
            'iframe' => array(
                'width' => array(),
                'height' => array(),
                'frameborder' => array(),
                'scrolling' => array(),
                'src' => array(),
                'marginwidth' => array(),
                'marginheight' => array()
            )
        );
        $data = array_merge($allowedtags, $array);
        $value = wp_kses($value, $data);
        return $value;
    }

    /**
     * adds sanitization callback funtion : url
     * @package goldeneagle
     */
    public static function goldeneagle_sanitize_url($value) {
        $value = esc_url($value);
        return $value;
    }

    /**
     * adds sanitization callback funtion : text
     * @package goldeneagle
     */
    public static function goldeneagle_sanitize_text($value) {
        $value = sanitize_text_field($value);
        return $value;
    }

    /**
     * adds sanitization callback funtion : email
     * @package goldeneagle
     */
    public static function goldeneagle_sanitize_email($value) {
        $value = sanitize_email($value);
        return $value;
    }

    /**
     * adds sanitization callback funtion : number
     * @package goldeneagle
     */
    public static function goldeneagle_sanitize_number($value) {
        $value = preg_replace("/[^0-9+ ]/", "", $value);
        return $value;
    }

    /**
     * adds sanitization callback funtion : number
     * @package goldeneagle
     */
    public static function goldeneagle_sanitize_color($value) {
        $value = sanitize_hex_color($value);
        return $value;
    }

    /**
     * adds sanitization callback funtion : select
     * @package goldeneagle
     */
    public static function goldeneagle_sanitize_select($value, $setting) {
        global $wp_customize;
        $control = $wp_customize->get_control($setting->id);
        if (array_key_exists($value, $control->choices)) {
            return $value;
        } else {
            return $setting->default;
        }
    }

    /**
     * adds sanitization callback funtion : radio
     * @package goldeneagle
     */
    public static function goldeneagle_sanitize_radio($value, $setting) {
        global $wp_customize;
        $control = $wp_customize->get_control($setting->id);
        if (array_key_exists($value, $control->choices)) {
            return $value;
        } else {
            return $setting->default;
        }
    }

    /**
     * adds sanitization callback funtion : html content
     * @package goldeneagle
     */
    public static function goldeneagle_sanitize_html($value) {
        $value = wp_kses_post($value);
        return $value;
    }

}

// Setup the Theme Customizer settings and controls...
add_action('customize_register', array('goldeneagle_Customizer', 'goldeneagle_Register'));

function goldeneagle_registers() {
    wp_register_script('goldeneagle_jquery_ui', '//code.jquery.com/ui/1.11.0/jquery-ui.js', array("jquery"), true);
    wp_register_script('goldeneagle_customizer_script', get_template_directory_uri() . '/functions/js/inkthemes_customizer.js', array("jquery", "goldeneagle_jquery_ui"), true);
    wp_enqueue_script('goldeneagle_customizer_script');
    wp_localize_script('goldeneagle_customizer_script', 'ink_advert', array(
        'pro' => __('View PRO version', 'golden-eagle-lite'),
        'url' => esc_url('http://www.inkthemes.com/wp-themes/wordpress-church-theme/'),
        'support_text' => __('Need Help!', 'golden-eagle-lite'),
        'support_url' => esc_url('http://www.inkthemes.com/lets-connect/')
    ));
}

add_action('customize_controls_enqueue_scripts', 'goldeneagle_registers');
