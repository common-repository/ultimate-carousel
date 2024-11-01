<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// METABOX OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options      = array();

// -----------------------------------------
// Page Metabox Options                    -
// -----------------------------------------
$options[]    = array(
    'id'        => 'carousel_options',
    'title'     => 'Slider Effect Options',
    'post_type' => 'ultimate-carousel',
    'context'   => 'normal',
    'priority'  => 'default',
    'sections'  => array(

        // begin: a section
        array(
            'name'  => 'hover_items',
            'title' => 'Slider Items',
            'icon'  => 'fa fa-picture-o',

            // begin: fields
            'fields' => array(

// -----------------------------------------
// Names of Slider Style To find                  -
// -----------------------------------------

//Team Slider
  //- team_086_mov
  //- team_087_mov
  //- team_088_mov
  //- team_089_mov
  //- team_090_mov
//Allsection Number wise

// 3383 Testimonial Groups


                array(
                            'id'       => 'slider_type',
                            'type'     => 'select',
                            'title'    => 'Slider Type',
                            'options'  => array(

                                'fullwidht_layer' => 'Full Width Slider',
                                //*****we are on it

                                //'uc_fullwidht_parallax' => 'Full Width Parallax Slider',
                                'uc_list_fullwidth' => 'Fullwidth Slider with Service List',
                                'uc_kenburns_fw' => 'Fullwidth Slider with Ken Burn Effect',
                                'uc_video_slider' => 'Video Background Fullwidht Slider',
                                'team_style'     => 'Team Slider',
                                'testimonial_slider' => 'Testimonial Slider',
                                'uc_coming_soon' => 'Coming Soon Slider',
                                'uc_brand_slider' => 'Brand Slider',

                            ),
                            'default'  => 'fullwidht_layer',
                        ),
                // ******* Post slider  *******
                array(
                            'id'       => 'uc_post_style',
                            'type'     => 'select',
                            'title'    => 'Select Style',
                            'options'  => array(
                                'post_081_mov_1' => 'Post Slider Style 1',
                            ),
                            'dependency'   => array( 'slider_type', '==', 'uc_post_slider' ),
                        ),


                // ******* Post slider  *******
                // ******* Video Slider Area  *******
                array(
                            'id'       => 'video_background_style',
                            'type'     => 'select',
                            'title'    => 'Select Style',
                            'options'  => array(
                                'video_096' => 'Fullwidth Video Slider Style 1',
                                'video_097' => 'Youtube Video Slider Style 2',
                                'video_098' => 'Vimeo Video Slider Style 3',
                                'video_099' => 'Video Slider Style 4',


                            ),
                            'dependency'   => array( 'slider_type', '==', 'uc_video_slider' ),
                        ),


                // ******* Video Slider Area  *******
                // ******* Fullwidth List Slider Area  ******* //424<br>
                array(
                            'id'       => 'uc_list_full_style',
                            'type'     => 'select',
                            'title'    => 'Select Style(Fullwidth)',
                            'options'  => array(
                                'js_list_051' => 'Service List 1',
                                'js_list_052' => 'Service List 2',
                                'js_list_054' => 'Service List 3',
                         ),
                            'dependency'   => array( 'slider_type', '==', 'uc_list_fullwidth' ),
                     ),
                array(
                            'id'       => 'uc_kenburns_style',
                            'type'     => 'select',
                            'title'    => 'Select Style(Fullwidth)',
                            'options'  => array(
                                'kenburns_061' => 'Kenburns Effect 1',
                                'kenburns_062' => 'Kenburns Effect 2',
                                'kenburns_063' => 'Kenburns Effect 3',
                                'kenburns_064' => 'Kenburns Effect 4',
                                'kenburns_065' => 'Kenburns Effect 5',
                         ),
                            'dependency'   => array( 'slider_type', '==', 'uc_kenburns_fw' ),
                        ),

                // ******* Fullwidth List Slider Area *******

                // ******* Parrallax Slider Area  *******
                        array(
                            'id'       => 'uc_parallax_style',
                            'type'     => 'select',
                            'title'    => 'Select Style',
                            'options'  => array(
                                'parallax_071' => 'Parrallax Background Style 1',
                                'parallax_072' => 'Parrallax Background Style 2',
                                'parallax_073' => 'Parrallax Background Style 3',
                                'parallax_074' => 'Parrallax Background Style 4',
                                'parallax_075' => 'Parrallax Background Style 5',


                            ),
                            'dependency'   => array( 'slider_type', '==', 'uc_fullwidht_parallax' ),
                        ),


                // ******* Parrallax Slider Area  *******

                     // ******* Team Section Slider Area  *******


                array(
                            'id'       => 'style',
                            'type'     => 'select',
                            'title'    => 'Select style',
                            'options'  => array(
                                'team_086_mov' => 'Team style 1',
                                'team_087_mov' => 'Team style 2',
                                'team_088_mov' => 'Team style 3',
                                'team_089_mov' => 'Team style 4',
                                'team_090_mov' => 'Team style 5',


                            ),
                            'dependency'   => array( 'slider_type', '==', 'team_style' ),
                        ),



                    array(                                                                             //   Team Effect
                            'id'       => 'effect_1',                                                   //
                            'type'     => 'select',
                            'title'    => 'Choose Column',
                            'options'  => array(                                                          //
                                'team_086_mov_1_col_2' => 'Team 2 Column',
                                'team_086_mov_1_col_3' => 'Team 3 Column',
                                'team_086_mov_1_col_4' => 'Team 4 Column',                                   //
                                'team_086_mov_1_col_5' => 'Team 5 Column',
                                'team_086_mov_1_col_6' => 'Team 6 Column',                                   //


                            ),                                                                                   //
                            'dependency'   => array( 'slider_type|style', '==', 'team_style|team_086_mov'),
                        ),
                     array(
                            'id'       => 'effect_2',
                            'type'     => 'select',                                                             //
                            'title'    => 'Choose Column',
                            'options'  => array(
                                'team_087_mov_1_col_2' => 'Team-2 Column',
                                'team_087_mov_1_col_3' => 'Team-3 Column',                                       //
                                'team_087_mov_1_col_4' => 'Team-4 Column',
                                'team_087_mov_1_col_5' => 'Team-5 Column',
                                'team_087_mov_1_col_6' => 'Team-6 Column',

                                                                                                                      //
                            ),
                            'default'  => 'team_087_mov_1_col_2',
                            'dependency'   => array( 'slider_type|style', '==', 'team_style|team_087_mov'),       //
                        ),


                     array(
                            'id'       => 'effect_3',
                            'type'     => 'select',
                            'title'    => 'Choose Column',
                            'options'  => array(
                                'team_088_mov_1_col_2' => 'Team 2-Column',                                                //   Team Effect
                                'team_088_mov_1_col_3' => 'Team 3-Column',
                                'team_088_mov_1_col_4' => 'Team 4-Column',
                                'team_088_mov_1_col_5' => 'Team 5-Column',
                                'team_088_mov_1_col_6' => 'Team 6-Column',

                            ),
                            'default'  => 'team_087_mov_1_col_2',
                            'dependency'   => array( 'style', '==', 'team_088_mov' ),
                            'dependency'   => array( 'slider_type|style', '==', 'team_style|team_088_mov'),

                        ),

                     array(                                                                                                //   Team Effect
                            'id'       => 'effect_4',
                            'type'     => 'select',
                            'title'    => 'Choose Column',
                            'options'  => array(
                                'team_089_mov_1_col_2' => 'Team 2 Column',
                                'team_089_mov_1_col_3' => 'Team 3 Column',
                                'team_089_mov_1_col_4' => 'Team 4 Column',                                                        //   Team Effect
                                'team_089_mov_1_col_5' => 'Team 5 Column',
                                'team_089_mov_1_col_6' => 'Team 6 Column',

                            ),
                            'default'  => 'team_087_mov_1_col_2',
                            'dependency'   => array( 'slider_type|style', '==', 'team_style|team_089_mov'),
                        ),

                     array(                                                                                                       //   Team Effect
                            'id'       => 'effect_5',
                            'type'     => 'select',
                            'title'    => 'Choose Column',
                            'options'  => array(
                                'team_090_mov_1_col_2' => 'Team 2 Column',
                                'team_090_mov_1_col_3' => 'Team 3 Column',
                                'team_090_mov_1_col_4' => 'Team 4 Column',                                                        //   Team Effect
                                'team_090_mov_1_col_5' => 'Team 5 Column',
                                'team_090_mov_1_col_6' => 'Team 6 Column',

                            ),
                            'default'  => 'team_090_mov_1_col_2',
                            'dependency'   => array( 'slider_type|style', '==', 'team_style|team_090_mov'),
                        ),

                        // ******* Team Section Slider Area  *******


                        // ******* Fullwidth Section Slider Area  *******



                        array(                                                                                     //   Fullwidth Effect
                            'id'       => 'style_fullwidth',
                            'type'     => 'select',
                            'title'    => 'Select style',
                            'options'  => array(
                                'fw_al_007' => 'Animated FullWidth Slider 1',                                                        //   Fullwidth Effect
                                'fw_al_001' => 'Animated FullWidth Slider 2',
                                'fw_al_003' => 'Animated FullWidth Slider 3',
                                'fw_al_004' => 'Animated FullWidth Slider 4',
                                'fw_al_005' => 'Animated FullWidth Slider 5',
                                'fw_al_006' => 'Animated FullWidth Slider 6',
                                'fw_al_002' => 'Animated FullWidth Slider 7',  
                                'fw_al_008' => 'Animated FullWidth With Product Slider 8 ',
                                'fw_al_009' => 'Animated FullWidth Slider 9 ',
                                'fw_al_010' => 'Animated FullWidth Slider 10 ',
                                'fw_il_011' => 'Animated FullWidth Slider 11 ',
                                'fw_il_012' => 'Animated FullWidth Slider 12 ',
                                'fw_il_013' => 'Animated FullWidth Slider 13 ',
                                'fw_il_014' => 'Animated FullWidth Slider 14 ',
                                'fw_il_015' => 'Animated FullWidth Slider 15 ',
                                'fw_il_016' => 'Animated FullWidth Slider 16 ',
                                'fw_il_017' => 'Animated FullWidth Slider 17 ',
                                'fw_il_018' => 'Animated FullWidth Slider 18 ',
                                'fw_il_019' => 'Animated FullWidth Slider 19 ',
                                'fw_il_020' => 'Animated FullWidth Slider 20 ',


                            ),
                            'dependency'   => array( 'slider_type', '==', 'fullwidht_layer' ),
                            'help'   => 'See All Animated FullWidth Slider demo www.#.com.',

                        ),
                        // ******* Fullwidth Section Slider Area  *******


                        // ******* Testimonial Section Slider Area  *******

                        array(

                            'id'       => 'uc_testimonial_effect',
                            'type'     => 'select',
                            'title'    => 'Slider Style',
                            'options'  => array(
                                'testimonial_091_mov' => 'Testimonial Slider 1',                                //Testimonial Effect


                            ),
                            'default'  => 'testimonial_091_mov_1_col_2',
                            'dependency'   => array( 'slider_type', '==', 'testimonial_slider' ),
                        ),

                        array(                                                                        //   Team Effect

                            'id'       => 'uc_testi_column_91',
                            'type'     => 'select',
                            'title'    => 'Choose Column',
                            'options'  => array(
                                'testimonial_091_mov_1_col_2' => '2 Column',
                                'testimonial_091_mov_1_col_3' => '3 Column',
                                'testimonial_091_mov_1_col_4' => '4 Column',                                //Testimonial Effect
                                'testimonial_091_mov_1_col_5' => '5 Column',                                //Testimonial Effect
                                'testimonial_091_mov_1_col_6' => '6 Column',                                //Testimonial Effect


                            ),
                            'default'  => 'testimonial_091_mov_1_col_2',
                            'dependency'   => array( 'slider_type', '==', 'testimonial_slider' ),
                        ),

                    array(
                            'id'       => 'heading',
                            'type'     => 'text',
                            'title'    => 'Section Header',
                            'default'  => 'Meet Our Team',                                                                     //   Team Section Header
                            'dependency'   => array( 'slider_type', 'any', 'team_style,testimonial_slider,uc_coming_soon'),

                        ),

                    array(
                            'id'       => 'heading_promo_text',
                            'type'     => 'text',
                            'title'    => 'About your team',
                            'default'  => 'The team with full of tallent',                                                          //   Team Section Header
                            'after'  => '<i class="cs-text-muted">Team Style 1 Dont Have This Option</i>',                                                          //   Team Section Header
                            'dependency'   => array( 'slider_type', 'any', 'team_style,uc_coming_soon' ),
                        ),

                        // ******* Testimonial Section Slider Area  *******

                        // ******* Subscribe Slider Groupn all  *******


                    array(
                        'id'              => 'group_option_subscribe',
                        'type'            => 'group',                                                                       //   Fullwidth Slider 3 Group
                        'title'           => '',
                        'dependency'   => array( 'slider_type', '==', 'uc_coming_soon'),
                        'button_title'    => 'Add New Slider Item',
                        'accordion_title' => 'Slider Item',
                        'fields'          => array(

                            array(
                                'id'    => 'uc_image_subscribe',
                                'type'  => 'image',
                                'title' => 'Carousel Background Image',                                     //   Fullwidth Slider 3 Group
                            ),




                    ),

                ),
                        // ******* Subscribe Slider Groupn all  *******

                    // ******* Post Slider Groupn all  *******


                    array(
                        'id'              => 'uc_group_opt_brand',
                        'type'            => 'group',                                                                       //   Fullwidth Slider 3 Group
                        'title'           => '',
                        'dependency'   => array( 'slider_type', '==', 'uc_brand_slider'),
                        'button_title'    => 'Add New Slider Item',
                        'accordion_title' => 'Slider Item',
                        'fields'          => array(

                            array(
                                'id'    => 'uc_text_brand',
                                'type'  => 'text',
                                'title' => 'Brand Title',                                     //   Fullwidth Slider 3 Group
                                'default' => 'Brand',                                     //   Fullwidth Slider 3 Group
                            ),
                            array(
                                'id'    => 'uc_image_brand',
                                'type'  => 'image',
                                'title' => 'Brand Image',                                     //   Fullwidth Slider 3 Group
                            ),
                            array(
                                'id'    => 'uc_link_brand',
                                'type'  => 'text',
                                'title' => 'Brand Link',                                     //   Fullwidth Slider 3 Group
                                'default' => '#',                                     //   Fullwidth Slider 3 Group
                            ),
                            array(
                            'id'       => 'uc_link_open_brand',
                            'type'     => 'select',
                            'title'    => 'Open Link in:',
                            'options'  => array(
                                ''  => 'Same Window',
                                '_blank' => 'New Window',                                                          //   Fullwidth Slider 2 Group
                                ),
                            'default'  => '_blank',
                        ),



                    ),

                ),
                        // ******* Post Slider Groupn all  *******

                        // ******* Kenburns Slider Groupn all  *******


                        array(
                        'id'              => 'uc_group_opt_kenburns',
                        'type'            => 'group',                                                                       //   Fullwidth Slider 3 Group
                        'title'           => '',
                        'dependency'   => array( 'slider_type|uc_kenburns_style', '==|any', 'uc_kenburns_fw|kenburns_061,kenburns_064'),
                        'button_title'    => 'Add New Slider Item',
                        'accordion_title' => 'Slider Item',
                        'fields'          => array(

                        array(
                            'id'    => 'uc_image_ken',
                            'type'  => 'image',
                            'title' => 'Carousel Background Image',                                     //   Fullwidth Slider 3 Group
                            ),

                        array(
                            'id'    => 'uc_header_ken',
                            'type'  => 'text',
                            'title' => 'Header Text',
                            'default' => 'welcom to <span>Wordpress</span>',                                     //   Fullwidth Slider 2 Group
                            'after' => 'text in span tag will be highlighted',                                     //   Fullwidth Slider 2 Group


                        ),
                        array(
                            'id'    => 'uc_sub_header_ken',
                            'type'  => 'text',
                            'title' => 'Sub Header',
                            'default' => 'Best Carousel <span>slider</span>',                                     //   Fullwidth Slider 2 Group
                            'after' => 'Text in span tag will be highlighted',                                     //   Fullwidth Slider 2 Group


                        ),
                        array(
                            'id'    => 'uc_desc_ken',
                            'type'  => 'text',
                            'title' => 'Slider Text',
                            'default' => 'a quality product by szthemes.',
                        ),


                        array(                                                                                           //   Fullwidth Slider 2 Group
                            'id'    => 'uc_btn_text_ken',
                            'type'  => 'text',
                            'title' => 'Button Text',
                            'desc' => 'Insert custom URL including http://',
                            'after' => 'If don&apos;t want button just leave it blank',
                            'default' => 'learn more',

                        ),
                        array(                                                                                           //   Fullwidth Slider 2 Group
                            'id'    => 'uc_btn_link_ken',
                            'type'  => 'text',
                            'title' => 'Button Link',
                            'desc' => 'Insert custom URL including http://',
                            'after' => 'If don&apos;t want button just leave it blank',

                        ),

                        array(
                            'id'       => 'uc_open_link_ken',
                            'type'     => 'select',
                            'title'    => 'Open Link in:',
                            'options'  => array(
                                ''  => 'Same Window',
                                '_blank' => 'New Window',                                                          //   Fullwidth Slider 2 Group
                                ),
                            'default'  => '_blank',
                        ),
                        array(
                            'id'       => 'uc_text_position_ken',
                            'type'     => 'select',
                            'title'    => 'Text Box Posintion(for style 1)',
                            'options'  => array(
                                'kenburns_061_slide_right '  => 'Center',
                                'kenburns_061_slide_center' => 'Right',
                                '' => 'Left',                                                          //   Fullwidth Slider 2 Group
                                ),
                            'default'  => '',
                            'after'  => 'Note: THis field for Style 1 only',
                        ),

                        array(
                            'id'       => 'uc_text_position_ken2',
                            'type'     => 'select',
                            'title'    => 'Text Box Posintion(for style 4)',
                            'options'  => array(
                                'kenburns_064_slide_center kenburns_065_slide_center'  => 'Center',
                                'kenburns_064_slide_right kenburns_065_slide_right' => 'Right',
                                '' => 'Left',                                                          //   Fullwidth Slider 2 Group
                                ),
                            'default'  => 'kenburns_064_slide_center kenburns_065_slide_center',
                            'after'  => 'Note: THis field for Style 4 and 5 only',
                        ),
                        array(
                            'id'       => 'uc_slide_4m_ken',
                            'type'     => 'select',
                            'title'    => 'Text Fade From',
                            'options'  => array(
                                'Right'  => 'Right',
                                'Left' => 'Left',                                                       //   Fullwidth Slider 2 Group
                                ),
                            'default'  => 'Left',
                        ),



                    ),

                ),//end of a group
                array(
                        'id'              => 'uc_group_opt_kenburns_2',
                        'type'            => 'group',                                                                       //   Fullwidth Slider 3 Group
                        'title'           => '',
                        'dependency'   => array( 'slider_type|uc_kenburns_style', '==|any', 'uc_kenburns_fw|kenburns_062,kenburns_063,kenburns_065'),
                        'button_title'    => 'Add New Slider Item',
                        'accordion_title' => 'Slider Item',
                        'fields'          => array(

                        array(
                            'id'    => 'uc_image_ken_2',
                            'type'  => 'image',
                            'title' => 'Carousel Background Image',                                     //   Fullwidth Slider 3 Group
                            ),

                        array(
                            'id'    => 'uc_header_ken_2',
                            'type'  => 'text',
                            'title' => 'Header Text',
                            'default' => 'use Our demo <span>.Highlighted</span>',
                            'after' => 'Text in span tag will be heighlighted',
                        ),
                        array(
                            'id'       => 'uc_head_from_ken_2',
                            'type'     => 'select',
                            'title'    => 'Header Fade In',
                            'options'  => array(
                                'Right'  => 'Right',
                                'Left' => 'Left',                                                       //   Fullwidth Slider 2 Group
                                'Up' => 'Up',                                                       //   Fullwidth Slider 2 Group
                                'Down' => 'Down',                                                       //   Fullwidth Slider 2 Group
                                ),
                            'default'  => 'Left',
                        ),

                        array(
                            'id'    => 'uc_desc_ken_2',
                            'type'  => 'text',
                            'title' => 'Slider Text',
                            'default' => 'Lorem ipsum dolor sit amet consectetuer adipiscing elit nam nibh nunc varius facilisis eros sed erat in in velit quis arcu ornare laoreet.',
                        ),

                        array(
                            'id'       => 'uc_desc_from_ken_2',
                            'type'     => 'select',
                            'title'    => 'Description Fade In',
                            'options'  => array(
                                'Right'  => 'Right',
                                'Left' => 'Left',                                                       //   Fullwidth Slider 2 Group
                                'Up' => 'Up',                                                       //   Fullwidth Slider 2 Group
                                'Down' => 'Down',                                                       //   Fullwidth Slider 2 Group
                                ),
                            'default'  => 'Left',
                        ),


                        array(                                                                                           //   Fullwidth Slider 2 Group
                            'id'    => 'uc_buttonn_text_ken_2',
                            'type'  => 'text',
                            'title' => '1st Button Text',
                            'desc' => 'Insert custom URL including http://',
                            'after' => 'If don&apos;t want button just leave it blank',
                            'default' => 'know more',

                        ),
                        array(                                                                                           //   Fullwidth Slider 2 Group
                            'id'    => 'uc_buttonn_link_ken_2',
                            'type'  => 'text',
                            'title' => '1st Button Link',
                            'desc' => 'Insert custom URL including http://',
                            'after' => 'If don&apos;t want button just leave it blank',
                        ),
                        array(
                            'id'       => 'uc_btn_from_ken_2',
                            'type'     => 'select',
                            'title'    => '1st Button Fade In',
                            'options'  => array(
                                'Right'  => 'Right',
                                'Left' => 'Left',                                                       //   Fullwidth Slider 2 Group
                                'Up' => 'Up',                                                       //   Fullwidth Slider 2 Group
                                'Down' => 'Down',                                                       //   Fullwidth Slider 2 Group
                                ),
                            'default'  => 'Left',
                        ),

                        array(                                                                                           //   Fullwidth Slider 2 Group
                            'id'    => 'uc_buttonn_text_ken_2_2',
                            'type'  => 'text',
                            'title' => '2nd Button Text',
                            'desc' => 'Insert custom URL including http://',
                            'after' => 'If don&apos;t want button just leave it blank',
                            'default' => 'read more',

                        ),
                        array(                                                                                           //   Fullwidth Slider 2 Group
                            'id'    => 'uc_buttonn_link_ken_2_2',
                            'type'  => 'text',
                            'title' => '2nd Button Link',
                            'desc' => 'Insert custom URL including http://',
                            'after' => 'If don&apos;t want button just leave it blank',
                        ),
                        array(
                            'id'       => 'uc_btn_from_ken_2_2',
                            'type'     => 'select',
                            'title'    => '2nd Button Fade In',
                            'options'  => array(
                                'Right'  => 'Right',
                                'Left' => 'Left',                                                       //   Fullwidth Slider 2 Group
                                'Up' => 'Up',                                                       //   Fullwidth Slider 2 Group
                                'Down' => 'Down',                                                       //   Fullwidth Slider 2 Group
                                ),
                            'default'  => 'Left',
                        ),

                        array(
                            'id'       => 'uc_open_link_ken_2',
                            'type'     => 'select',
                            'title'    => 'Open Link in:',
                            'options'  => array(
                                ''  => 'Same Window',
                                '_blank' => 'New Window',                                                          //   Fullwidth Slider 2 Group
                                ),
                            'default'  => '_blank',
                        ),
                        array(
                            'id'       => 'uc_text_position_ken_2',
                            'type'     => 'select',
                            'title'    => 'Text Box position',
                            'options'  => array(
                                'kenburns_061_slide_right kenburns_062_slide_right kenburns_063_slide_right kenburns_065_slide_right'  => 'Center',
                                'kenburns_061_slide_center kenburns_062_slide_center kenburns_063_slide_center kenburns_065_slide_center' => 'Right',
                                '' => 'Left',                                                          //   Fullwidth Slider 2 Group
                                ),
                            'default'  => '',
                        ),





                    ),

                ),//end of a group
                        // ******* Kenburns Slider Groupn all  *******

                        // ******* Parallax Slider Groupn all  *******


                    array(
                        'id'              => 'group_option_parallax',
                        'type'            => 'group',                                                                       //   Fullwidth Slider 3 Group
                        'title'           => '',
                        'dependency'   => array( 'slider_type', '==', 'uc_fullwidht_parallax'),
                        'button_title'    => 'Add New Slider Item',
                        'accordion_title' => 'Slider Item',
                        'fields'          => array(

                        array(
                                'id'    => 'uc_image_para',
                                'type'  => 'image',
                                'title' => 'Carousel Background Image',                                     //   Fullwidth Slider 3 Group
                            ),

                        array(
                            'id'    => 'uc_header_para',
                            'type'  => 'text',
                            'title' => 'Header Text',
                            'default' => 'with<span>haritage</span>',                                     //   Fullwidth Slider 2 Group


                        ),
                        array(
                            'id'    => 'uc_sub_header_para',
                            'type'  => 'text',
                            'title' => 'Sub Header',
                            'default' => 'Cella One 2019',                                     //   Fullwidth Slider 2 Group


                        ),
                        array(
                            'id'    => 'uc_desc_para',
                            'type'  => 'text',
                            'title' => 'Slider Text',
                            'default' => 'Lorem ipsum dolor sit amet consectetuer adipis elitnam nibh nunc varius facilisis eros sed erat in in velit quis arcuornare laoreet.',
                        ),


                        array(                                                                                           //   Fullwidth Slider 2 Group
                            'id'    => 'uc_buttonn_text_para',
                            'type'  => 'text',
                            'title' => 'Button Text',
                            'desc' => 'Insert custom URL including http://',
                            'after' => 'If don&apos;t want button just leave it blank',
                            'default' => 'Button',

                        ),
                        array(                                                                                           //   Fullwidth Slider 2 Group
                            'id'    => 'uc_buttonn_link_para',
                            'type'  => 'text',
                            'title' => 'Button Link',
                            'desc' => 'Insert custom URL including http://',
                            'after' => 'If don&apos;t want button just leave it blank',

                        ),

                        array(
                            'id'       => 'uc_open_link_para',
                            'type'     => 'select',
                            'title'    => 'Open Link in:',
                            'options'  => array(
                                ''  => 'Same Window',
                                '_blank' => 'New Window',                                                          //   Fullwidth Slider 2 Group
                                ),
                            'default'  => '',
                        ),





                    ),

                ),
                        // ******* Parallax Slider Groupn all  *******



                        //  ******* list fullwidth Slider Groupn all   *******  //
                        array(
                        'id'              => 'group_option_fw_list',
                        'type'            => 'group',                                                                       //   Fullwidth Slider 3 Group
                        'title'           => '',
                        'dependency'   => array( 'slider_type|uc_list_full_style', '==', 'uc_list_fullwidth|js_list_051'),
                        'button_title'    => 'Add New Slider Item',
                        'accordion_title' => 'Slider Item',
                        'fields'          => array(

                        array(
                                'id'    => 'uc_image_list',
                                'type'  => 'image',
                                'title' => 'Carousel Background Image',                                     //   Fullwidth Slider 3 Group
                            ),
                        array(
                            'id'    => 'uc_header_list',
                            'type'  => 'text',
                            'title' => 'Title',
                            'default' => 'Cella One 2019',
                        ),
                        array(
                            'id'       => 'uc_header_list_slide',
                            'title'    => 'Title Slide From',
                            'type'    => 'select',
                            'options'  => array(
                                'fadeInLeft'  => 'Left',
                                'fadeInRight' => 'Right',
                                ),
                            'default'  => 'fadeInLeft',
                        ),
                        array(
                            'id'    => 'uc_service_list_0',
                            'type'  => 'text',
                            'title' => 'Service Name 1',
                            'default' => 'Service 1',
                            'after' => 'Fill service name field how many you need or it will be blank. Max 6 is available',
                            'help' => 'if you need more service field then let me know Mail To: themescup@gmail.com',
                        ),
                        array(
                            'id'       => 'uc_slide_list_0',
                            'title'    => 'Service text 1 Slide From',
                            'type'    => 'select',
                            'options'  => array(
                                'fadeInLeft'  => 'Left',
                                'fadeInRight' => 'Right',
                                ),
                            'default'  => 'fadeInLeft',
                        ),
                        array(
                            'id'    => 'uc_service_1_list',
                            'type'  => 'text',
                            'title' => 'Slider Text 2',
                            'default' => 'Service 2',
                        ),
                        array(
                            'id'       => 'uc_slide_list_1',
                            'title'    => 'Service text 2 Slide From',
                            'type'    => 'select',
                            'options'  => array(
                                'fadeInLeft'  => 'Left',
                                'fadeInRight' => 'Right',
                                ),
                            'default'  => 'fadeInLeft',
                        ),

                        array(
                            'id'    => 'uc_service_2_list',
                            'type'  => 'text',
                            'title' => 'Service Name 3',
                            'default' => 'Service 3',
                        ),
                        array(
                            'id'       => 'uc_slide_list_2',
                            'title'    => 'Service text 3 Slide From',
                            'type'    => 'select',
                            'options'  => array(
                                'fadeInLeft'  => 'Left',
                                'fadeInRight' => 'Right',
                                ),
                            'default'  => 'fadeInLeft',
                        ),
                        array(
                            'id'    => 'uc_service_3_list',
                            'type'  => 'text',
                            'title' => 'Service Name 4',
                            'default' => 'Service 4',
                        ),
                        array(
                            'id'       => 'uc_slide_list_3',
                            'title'    => 'Service text 4 Slide From',
                            'type'    => 'select',
                            'options'  => array(
                                'fadeInLeft'  => 'Left',
                                'fadeInRight' => 'Right',
                                ),
                            'default'  => 'fadeInLeft',
                        ),
                        array(
                            'id'    => 'uc_service_4_list',
                            'type'  => 'text',
                            'title' => 'Service Name 5',
                            'default' => 'Service 5',
                        ),
                        array(
                            'id'       => 'uc_slide_list_4',
                            'title'    => 'Service text 5 Slide From',
                            'type'    => 'select',
                            'options'  => array(
                                'fadeInLeft'  => 'Left',
                                'fadeInRight' => 'Right',
                                ),
                            'default'  => 'fadeInLeft',
                        ),
                        array(                                                                                           //   Fullwidth Slider 2 Group
                            'id'    => 'uc_buttonn_text_list',
                            'type'  => 'text',
                            'title' => 'Button Text',
                            'desc' => 'Insert custom URL including http://',
                            'after' => 'If don&apos;t want button just leave it blank',
                            'default' => 'Button',

                        ),
                        array(                                                                                           //   Fullwidth Slider 2 Group
                            'id'    => 'uc_buttonn_link_list',
                            'type'  => 'text',
                            'title' => 'Button Link',
                            'desc' => 'Insert custom URL including http://',
                            'after' => 'If don&apos;t want button just leave it blank',

                        ),

                        array(
                            'id'       => 'uc_open_link_list',
                            'type'     => 'select',
                            'title'    => 'Open Link in:',
                            'options'  => array(
                                ''  => 'Same Window',
                                '_blank' => 'New Window',
                                ),
                            'default'  => '',
                        ),
                        array(
                            'id'       => 'uc_slide_from_list',
                            'title'    => 'Text Box Position:',
                            'type'    => 'select',
                            'options'  => array(
                                ''  => 'Left',
                                'js_list_simple_right'  => 'Right',
                                'js_list_simple_center' => 'Center',
                                ),
                            'default'  => '',
                        ),

                    ),

                ),//end of group

                array(
                        'id'              => 'group_option_fw_list_2',
                        'type'            => 'group',                                                                       //   Fullwidth Slider 3 Group
                        'title'           => '',
                        'dependency'   => array( 'slider_type|uc_list_full_style', '==|any', 'uc_list_fullwidth|js_list_052,js_list_054'),
                        'button_title'    => 'Add New Slider Item',
                        'accordion_title' => 'Slider Item',
                        'fields'          => array(

                        array(
                                'id'    => 'uc_image_list_2',
                                'type'  => 'image',
                                'title' => 'Carousel Background Image',                                     //   Fullwidth Slider 3 Group
                            ),
                        array(
                            'id'    => 'uc_header_list_2',
                            'type'  => 'text',
                            'title' => 'Heading',
                            'default' => 'Cella One 2019',                                     //   Fullwidth Slider 2 Group
                        ),
                        array(
                            'id'       => 'uc_slide_head_list_2',
                            'title'    => 'Service text 1 Slide From',
                            'type'    => 'select',
                            'options'  => array(
                                'rotateInDownLeft'  => 'Rotate Left',
                                'rotateInDownRight' => 'Rotate Right',
                                'fadeInLeft' => 'Fade In Left',
                                'fadeInRight' => 'Fade In Right',
                                ),
                            'default'  => 'rotateInDownRight',
                        ),
                        array(
                            'id'    => 'uc_service_list_2_0',
                            'type'  => 'text',
                            'title' => 'Service Name 1',
                            'default' => 'Service 1',
                            'after' => 'Fill service name field how many you need or it will be blank. Max 6 is available',
                            'help' => 'if you need more service field then let me know Mail To: themescup@gmail.com',
                        ),
                        array(
                            'id'    => 'uc_service_list_ico_2_0',
                            'type'  => 'text',
                            'title' => 'Service Icon 1',
                            'default' => 'fa-star',
                            'after' => '<a href="https://fontawesome.com/icons?d=gallery&m=free" target="_blank">CLICK HERE</a>ere to find icon Name Incluiding fa-',
                        ),
                        array(
                            'id'       => 'uc_slide_list_2_0',
                            'title'    => 'Service text 1 Slide From',
                            'type'    => 'select',
                            'options'  => array(
                                'rotateInDownLeft'  => 'Rotate Left',
                                'rotateInDownRight' => 'Rotate Right',
                                'fadeInLeft' => 'Fade In Left',
                                'fadeInRight' => 'Fade In Right',
                                ),
                            'default'  => 'rotateInDownRight',
                        ),
                        array(
                            'id'    => 'uc_service_list_2_1',
                            'type'  => 'text',
                            'title' => 'Slider Text 2',
                            'default' => 'Service 2',
                        ),
                        array(
                            'id'    => 'uc_service_list_ico_2_1',
                            'type'  => 'text',
                            'title' => 'Service Icon 1',
                            'default' => 'fa-star',
                            'after' => '<a href="https://fontawesome.com/icons?d=gallery&m=free" target="_blank">CLICK HERE</a>ere to find icon Name Incluiding fa-',
                        ),
                        array(
                            'id'       => 'uc_slide_list_2_1',
                            'title'    => 'Service text 2 Slide From',
                            'type'    => 'select',
                            'options'  => array(
                                'rotateInDownLeft'  => 'Rotate Left',
                                'rotateInDownRight' => 'Rotate Right',
                                'fadeInLeft' => 'Fade In Left',
                                'fadeInRight' => 'Fade In Right',
                                ),
                            'default'  => 'rotateInDownRight',
                        ),

                        array(
                            'id'    => 'uc_service_list_2_2',
                            'type'  => 'text',
                            'title' => 'Service Name 3',
                            'default' => 'Service 3',
                        ),
                        array(
                            'id'    => 'uc_service_list_ico_2_2',
                            'type'  => 'text',
                            'title' => 'Service Icon 1',
                            'default' => 'fa-star',
                            'after' => '<a href="https://fontawesome.com/icons?d=gallery&m=free" target="_blank">CLICK HERE</a>ere to find icon Name Incluiding fa-',
                        ),
                        array(
                            'id'       => 'uc_slide_list_2_2',
                            'title'    => 'Service text 3 Slide From',
                            'type'    => 'select',
                            'options'  => array(
                                'rotateInDownLeft'  => 'Rotate Left',
                                'rotateInDownRight' => 'Rotate Right',
                                'fadeInLeft' => 'Fade In Left',
                                'fadeInRight' => 'Fade In Right',
                                ),
                            'default'  => 'rotateInDownRight',
                        ),
                        array(
                            'id'    => 'uc_service_list_2_3',
                            'type'  => 'text',
                            'title' => 'Service Name 4',
                            'default' => 'Service 4',
                        ),
                        array(
                            'id'    => 'uc_service_list_ico_2_3',
                            'type'  => 'text',
                            'title' => 'Service Icon 1',
                            'default' => 'fa-star',
                            'after' => '<a href="https://fontawesome.com/icons?d=gallery&m=free" target="_blank">CLICK HERE</a>ere to find icon Name Incluiding fa-',
                        ),
                        array(
                            'id'       => 'uc_slide_list_2_3',
                            'title'    => 'Service text 4 Slide From',
                            'type'    => 'select',
                            'options'  => array(
                                'rotateInDownLeft'  => 'Rotate Left',
                                'rotateInDownRight' => 'Rotate Right',
                                'fadeInLeft' => 'Fade In Left',
                                'fadeInRight' => 'Fade In Right',
                                ),
                            'default'  => 'rotateInDownRight',
                        ),
                        array(
                            'id'    => 'uc_service_list_2_4',
                            'type'  => 'text',
                            'title' => 'Service Name 5',
                            'default' => 'Service 5',
                        ),
                        array(
                            'id'    => 'uc_service_list_ico_2_4',
                            'type'  => 'text',
                            'title' => 'Service Icon 1',
                            'default' => 'fa-star',
                            'after' => '<a href="https://fontawesome.com/icons?d=gallery&m=free" target="_blank">CLICK HERE</a>ere to find icon Name Incluiding fa-',
                        ),
                        array(
                            'id'       => 'uc_slide_list_2_4',
                            'title'    => 'Service text 5 Slide From',
                            'type'    => 'select',
                            'options'  => array(
                                'rotateInDownLeft'  => 'Rotate Left',
                                'rotateInDownRight' => 'Rotate Right',
                                'fadeInLeft' => 'Fade In Left',
                                'fadeInRight' => 'Fade In Right',
                                ),
                            'default'  => 'rotateInDownRight',
                        ),
                        array(                                                                                           //   Fullwidth Slider 2 Group
                            'id'    => 'uc_buttonn_text_list_2',
                            'type'  => 'text',
                            'title' => 'Button Text',
                            'desc' => 'Insert custom URL including http://',
                            'after' => 'If don&apos;t want button just leave it blank',
                            'default' => 'More',

                        ),
                        array(                                                                                           //   Fullwidth Slider 2 Group
                            'id'    => 'uc_buttonn_link_list_2',
                            'type'  => 'text',
                            'title' => 'Button Link',
                            'desc' => 'Insert custom URL including http://',
                            'after' => 'If don&apos;t want button just leave it blank',
                        ),

                        array(
                            'id'       => 'uc_open_link_list_2',
                            'type'     => 'select',
                            'title'    => 'Open Link in:',
                            'options'  => array(
                                ''  => 'Same Window',
                                '_blank' => 'New Window',
                                ),
                            'default'  => '',
                        ),
                        array(
                            'id'       => 'uc_slide_from_list_2',
                            'title'    => 'Text Box Position:',
                            'type'    => 'select',
                            'options'  => array(
                                ''  => 'Left',
                                'js_list_radius_right js_list_icons_right' => 'Right',
                                'js_list_radius_center js_list_icons_center' => 'Center',
                                ),
                            'default'  => '',
                        ),

                        array(
                            'id'    => 'uc_carousel_icon_list',
                            'type'  => 'text',
                            'title' => 'Font-Awesome Icon Name',
                            'after' => '<a href="fontawesome.com" target="_blank">CLICK HERE</a>ere to find icon Name Incluiding fa-',
                            'default' => 'fa-star',
                            'desc' => 'in style 2 this field will work',
                        ),

                    ),

                ),//end of group


                        //  ******* list Full Widtyh Slider Groupn all   *******


                        //  ******* Fullwidth Slider Groupn all   *******
                array(
                    'id'              => 'group_option_alf1',
                    'type'            => 'group',
                    'title'           => '',
                    'dependency'   => array( 'slider_type|style_fullwidth', '==', 'fullwidht_layer|fw_al_001'),
                    'button_title'    => 'Add New Slider Item',
                    'accordion_title' => 'Slider Item',
                    'fields'          => array(

                        array(
                            'id'    => 'image_alf1',
                            'type'  => 'image',
                            'title' => 'Carousel Background Image',                                                                //   Fullwidth Slider 2 Group
                            'desc' => 'Perfect size 1920*1080',                                                                //   Fullwidth Slider 2 Group
                        ),


                        array(
                            'id'    => 'uc_header_alf1',
                            'type'  => 'text',
                            'title' => 'Header Text',
                            'default' => 'Ultimate carousel with advanced options',                                     //   Fullwidth Slider 2 Group


                        ),
                        array(
                            'id'    => 'uc_sub_header_alf1',
                            'type'  => 'text',
                            'title' => 'Sub Header',
                            'default' => 'Welcome To Slider World',                                     //   Fullwidth Slider 2 Group


                        ),
                        array(
                            'id'    => 'uc_desc_alf1',
                            'type'  => 'text',
                            'title' => 'Slider Text',
                            'default' => 'Lorem ipsum dolor sit amet consectetuer adipis elitnam nibh nunc varius facilisis eros sed erat in in velit quis arcuornare laoreet.',
                        ),


                        array(                                                                                           //   Fullwidth Slider 2 Group
                            'id'    => 'uc_buttonn_text_alf1',
                            'type'  => 'text',
                            'title' => 'Button Text',
                            'desc' => 'Insert custom URL including http://',
                            'after' => 'If don&apos;t want button just leave it blank',
                            'default' => 'Button',

                        ),
                        array(                                                                                           //   Fullwidth Slider 2 Group
                            'id'    => 'uc_buttonn_link_alf1',
                            'type'  => 'text',
                            'title' => 'Button Link',
                            'desc' => 'Insert custom URL including http://',
                            'after' => 'If don&apos;t want button just leave it blank',

                        ),

                        array(
                            'id'       => 'uc_open_link_alf1',
                            'type'     => 'select',
                            'title'    => 'Open Link in:',
                            'options'  => array(
                                ''  => 'Same Window',
                                '_blank' => 'New Window',                                                          //   Fullwidth Slider 2 Group
                                ),
                            'default'  => '',
                        ),



                    ),

                ),

                array(
                    'id'              => 'group_option_al2',
                    'type'            => 'group',
                    'title'           => '',
                    'dependency'   => array( 'slider_type|style_fullwidth', '==', 'fullwidht_layer|fw_al_002'),
                    'button_title'    => 'Add New Slider Item',
                    'accordion_title' => 'Slider Item',
                    'fields'          => array(

                        array(
                            'id'    => 'image_alf2',
                            'type'  => 'image',
                            'title' => 'Carousel Background Image',                                                                //   Fullwidth Slider 2 Group
                        ),


                        array(
                            'id'    => 'title_alf2',
                            'type'  => 'text',
                            'title' => 'Header Text First Half',
                            'default' => 'Ultimate carousel with advanced <span>options</span> ',
                            'after' => 'text in span tag will be highlighted',                                    //   Fullwidth Slider 2 Group


                        ),

                        array(
                            'id'    => 'desc_alf2',
                            'type'  => 'text',
                            'title' => 'Slider Text',
                            'default' => 'Lorem ipsum dolor sit amet consectetuer adipis elitnam nibh nunc varius facilisis eros sed erat in in velit quis arcuornare laoreet.',
                        ),


                        array(                                                                                           //   Fullwidth Slider 2 Group
                            'id'    => 'buttonn_text_alf2',
                            'type'  => 'text',
                            'title' => 'Button Text',
                            'desc' => 'Insert custom URL including http://',
                            'after' => 'If don&apos;t want button just leave it blank',
                            'default' => 'Read More',

                        ),
                        array(                                                                                           //   Fullwidth Slider 2 Group
                            'id'    => 'buttonn_link_alf2',
                            'type'  => 'text',
                            'title' => 'Button Link',
                            'desc' => 'Insert custom URL including http://',
                            'after' => 'If don&apos;t want button just leave it blank',

                        ),

                        array(
                            'id'       => 'open_link_alf2',
                            'type'     => 'select',
                            'title'    => 'Open Link in:',
                            'options'  => array(
                                ''  => 'Same Window',
                                '_blank' => 'New Window',                                                          //   Fullwidth Slider 2 Group
                                ),
                            'default'  => 'same',
                        ),



                    ),

                ),

                array(
                    'id'              => 'group_option_al3',
                    'type'            => 'group',                                                                       //   Fullwidth Slider 3 Group
                    'title'           => '',
                    'dependency'   => array( 'slider_type|style_fullwidth', '==', 'fullwidht_layer|fw_al_003'),
                    'button_title'    => 'Add New Slider Item',
                    'accordion_title' => 'Slider Item',
                    'fields'          => array(

                        array(
                            'id'    => 'image_alf3',
                            'type'  => 'image',
                            'title' => 'Carousel Background Image',                                     //   Fullwidth Slider 3 Group
                        ),


                        array(
                            'id'    => 'title_alf3',
                            'type'  => 'text',
                            'title' => 'Header Text',
                            'default' => 'Ultimate Carousel-The Best Solution',

                        ),

                        array(
                            'id'    => 'desc_alf3',
                            'type'  => 'text',
                            'title' => 'Slider Text',
                            'default' => 'Lorem ipsum dolor sit amet consectetuer adipis elitnam nibh nunc varius facilisis eros sed erat in in velit quis arcuornare laoreet.',
                        ),

                        array(
                            'id'       => 'button_text_alf3',
                            'type'     => 'text',
                            'title'    => 'Button Text:',                                                  //   Fullwidth Slider 3 Group
                            'after' => 'If don&apos;t want button just leave it blank',
                            'default' => 'Learn More',
                        ),
                        array(                                                                                    //   Fullwidth Slider 3 Group
                            'id'    => 'button_link_alf3',
                            'type'  => 'text',
                            'title' => 'Button Link',
                            'desc' => 'Insert custom URL including http://',
                            'after' => 'If don&apos;t want button just leave it blank',

                        ),                                                                                            //   Fullwidth Slider 3 Group
                        array(
                            'id'       => 'open_link_alf3',
                            'type'     => 'select',
                            'title'    => 'Open Link in:',
                            'options'  => array(
                                ''  => 'Same Window',                                                                  //   Fullwidth Slider 3 Group
                                '_blank' => 'New Window',
                                ),
                            'default'  => 'same',
                        ),



                    ),

                ),

             array(
                    'id'              => 'group_option_al4',
                    'type'            => 'group',
                    'title'           => '',
                    'dependency'   => array( 'slider_type|style_fullwidth', '==', 'fullwidht_layer|fw_al_004'),
                    'button_title'    => 'Add New Slider Item',                                                           //   Fullwidth Slider 4 Group
                    'accordion_title' => 'Slider Item',
                    'fields'          => array(

                        array(
                            'id'    => 'image_alf4',
                            'type'  => 'image',
                            'title' => 'Carousel Background Image',                                                      //   Fullwidth Slider 4 Group
                        ),


                        array(
                            'id'    => 'title_alf4',
                            'type'  => 'text',
                            'title' => 'Welcome To Motor World',
                            'default' => 'Do You want A Slider?',

                        ),

                        array(
                            'id'    => 'desc_alf4',
                            'type'  => 'text',
                            'title' => 'Slider Text',
                            'default' => 'Lorem ipsum dolor sit amet consectetuer adipis elitnam nibh nunc varius facilisis eros sed erat in in velit quis arcuornare laoreet.',
                        ),

                        array(
                            'id'       => 'button_text_alf4',
                            'type'     => 'text',
                            'title'    => 'First Button Text:',                                                  //   Fullwidth Slider 4 Group
                            'after' => 'If don&apos;t want button just leave it blank',
                            'default' => 'Learn More',
                        ),


                        array(                                                                                         //   Fullwidth Slider 4 Group
                            'id'    => 'button_link_alf4',
                            'type'  => 'text',
                            'title' => 'First Button Link',
                            'desc' => 'Insert custom URL including http://',
                            'after' => 'If don&apos;t want button just leave it blank',

                        ),

                        array(
                            'id'       => 'button_text_1_alf4',
                            'type'     => 'text',
                            'title'    => ' Seconde Button Text:',
                            'default' => 'Learn More',                                                  //   Fullwidth Slider 4 Group
                            'after' => 'If don&apos;t want button just leave it blank',
                        ),

                        array(                                                                                      //   Fullwidth Slider 4 Group
                            'id'    => 'button_link_1_alf4',
                            'type'  => 'text',
                            'title' => 'Seconde Button Link',
                            'desc' => 'Insert custom URL including http://',
                            'after' => 'If don&apos;t want button just leave it blank',

                        ),

                        array(
                            'id'       => 'open_link_alf4',
                            'type'     => 'select',
                            'title'    => 'Open Link in:',                                                       //   Fullwidth Slider 4 Group
                            'options'  => array(
                                ''  => 'Same Window',
                                '_blank' => 'New Window',
                                ),
                            'default'  => 'same',
                        ),

                        array(
                            'id'       => 'slide_from_left_right_alf4',
                            'type'     => 'select',                                                          //   Fullwidth Slider 4 Group
                            'title'    => 'Slide Form',
                            'options'  => array(
                                'Left'  => 'Left',
                                'Right' => 'Right',
                                ),
                            'default'  => 'Right',
                            'help'  => 'Select one slide with left and another with right for making a varsatile slider',
                        ),



                    ),

                ),

                 array(
                    'id'              => 'group_option_al5',
                    'type'            => 'group',
                    'title'           => '',
                    'dependency'   => array( 'slider_type|style_fullwidth', '==', 'fullwidht_layer|fw_al_005'),
                    'button_title'    => 'Add New Slider Item',                                                           //   Fullwidth Slider 5 Group
                    'accordion_title' => 'Slider Item',
                    'fields'          => array(

                        array(
                            'id'    => 'image_alf5',
                            'type'  => 'image',
                            'title' => 'Carousel Background Image',                                                      //   Fullwidth Slider 5 Group
                        ),


                        array(
                            'id'    => 'title_alf5',
                            'type'  => 'text',
                            'title' => 'Header Text',
                            'default' => 'Welcome To Slider World',

                        ),

                        array(
                            'id'    => 'desc_alf5',
                            'type'  => 'text',
                            'title' => 'Slider Text',
                            'default' => 'Lorem ipsum dolor sit amet consectetuer adipis elitnam nibh nunc varius facilisis eros sed erat in in velit quis arcuornare laoreet.',                                                             //   Fullwidth Slider 5 Group
                            //'dependency'   => array( 'style_circle', '==', 'true' ),
                        ),

                        array(
                            'id'       => 'button_text_alf5',
                            'type'     => 'text',
                            'title'    => 'First Button Text:',                                                  //   Fullwidth Slider 5 Group
                            'after' => 'If don&apos;t want button just leave it blank',
                            'default' => 'Learn More',
                        ),


                        array(                                                                                         //   Fullwidth Slider 5 Group
                            'id'    => 'button_link_alf5',
                            'type'  => 'text',
                            'title' => 'First Button Link',
                            'desc' => 'Insert custom URL including http://',
                            'after' => 'If don&apos;t want button just leave it blank',

                        ),

                        array(
                            'id'       => 'button_text_1_alf5',
                            'type'     => 'text',
                            'title'    => ' Seconde Button Text:',
                            'default' => 'Learn More',                                                 //   Fullwidth Slider 5 Group
                            'after' => 'If don&apos;t want button just leave it blank',
                        ),

                        array(                                                                                      //   Fullwidth Slider 5 Group
                            'id'    => 'button_link_1_alf5',
                            'type'  => 'text',
                            'title' => 'Seconde Button Link',
                            'desc' => 'URL including http://',
                            'after' => 'If don&apos;t want button just leave it blank',

                        ),

                        array(
                            'id'       => 'open_link_alf5',
                            'type'     => 'select',
                            'title'    => 'Open Link in:',                                                       //   Fullwidth Slider 5 Group
                            'options'  => array(
                                ''  => 'Same Window',
                                '_blank' => 'New Window',
                                ),
                            'default'  => 'same',
                        ),

                        array(
                            'id'       => 'slide_from_left_right_alf5',
                            'type'     => 'select',                                                          //   Fullwidth Slider 4 Group
                            'title'    => 'Slide Form',
                            'options'  => array(
                                ''  => 'Left',
                                'fw_al_005_slide_right' => 'Right',
                                ),
                            'default'  => 'Right',
                            'help'  => 'Select one slide with left and another with right for making a varsatile slider',
                        ),




                    ),

                ),

                array(
                    'id'              => 'group_option_al6',
                    'type'            => 'group',
                    'title'           => '',
                    'dependency'   => array( 'slider_type|style_fullwidth', '==', 'fullwidht_layer|fw_al_006'),
                    'button_title'    => 'Add New Slider Item',                                                           //   Fullwidth Slider 6 Group
                    'accordion_title' => 'Slider Item',
                    'fields'          => array(

                        array(
                            'id'    => 'image_alf6',
                            'type'  => 'image',
                            'title' => 'Carousel Background Image',                                                      //   Fullwidth Slider 6 Group
                        ),


                        array(
                            'id'    => 'title_alf6',
                            'type'  => 'text',
                            'title' => 'First Header Text',
                            'default' => 'Are You looking for a Slider?',

                        ),

                        array(
                            'id'    => 'title_1_alf6',
                            'type'  => 'text',
                            'title' => 'Sub Header Text',
                            'default' => 'Slider World',

                        ),
                        array(
                            'id'    => 'desc_alf6',
                            'type'  => 'text',
                            'title' => 'Slider Text',
                            'default' => 'Lorem ipsum dolor sit amet consectetuer adipis elitnam nibh nunc varius facilisis eros sed erat in in velit quis arcuornare laoreet.',                                                             //   Fullwidth Slider 6 Group
                            //'dependency'   => array( 'style_circle', '==', 'true' ),
                        ),

                        array(
                            'id'       => 'button_text_alf6',
                            'type'     => 'text',
                            'title'    => 'Button Text:',                                                  //   Fullwidth Slider 6 Group
                            'after' => 'If don&apos;t want button just leave it blank',
                            'default' => 'Learn More',
                        ),


                        array(                                                                                      //   Fullwidth Slider 6 Group
                            'id'    => 'button_link_alf6',
                            'type'  => 'text',
                            'title' => 'Button Link',
                            'desc' => 'Insert custom URL including http://',
                            'after' => 'If don&apos;t want button just leave it blank',

                        ),

                        array(
                            'id'       => 'open_link_alf6',
                            'type'     => 'select',
                            'title'    => 'Open Link in:',                                                       //   Fullwidth Slider 6 Group
                            'options'  => array(
                                ''  => 'Same Window',
                                '_blank' => 'New Window',
                                ),
                            'default'  => 'same',
                        ),

                        array(
                            'id'       => 'slide_from_left_right_alf6',
                            'type'     => 'select',                                                          //   Fullwidth Slider 6 Group
                            'title'    => 'Slide Form',
                            'options'  => array(
                                ''  => 'Left',
                                'fw_al_006_slide_right' => 'Right',
                                ),
                            'default'  => 'Right',
                            'help'  => 'Select one slide with left and another with right for making a varsatile slider',
                        ),




                    ),

                ),

                array(
                    'id'              => 'group_option_al7',
                    'type'            => 'group',
                    'title'           => '',
                    'dependency'   => array( 'slider_type|style_fullwidth', '==', 'fullwidht_layer|fw_al_007'),
                    'button_title'    => 'Add New Slide',                                                           //   Fullwidth Slider 7 Group
                    'accordion_title' => 'Slider Item',
                    'fields'          => array(

                        array(
                            'id'    => 'image_alf7',
                            'type'  => 'image',
                            'title' => 'Carousel Background Image',                                                      //   Fullwidth Slider 7 Group
                        ),


                        array(
                            'id'    => 'title_alf7',
                            'type'  => 'text',
                            'title' => 'First Header Text',
                            'default' => '<span>2015</span> EDGE SE FWD',
                            'after' => 'text in span tag will be highlighted',

                        ),
                                                                                         //   Fullwidth Slider 7 Group
                        array(
                            'id'    => 'title_1_alf7',
                            'type'  => 'text',
                            'title' => 'Seconde Header Text',
                            'default' => 'Welcome To<span>Motore World</span>',
                            'after' => 'text in span tag will be highlighted',

                        ),

                        array(
                            'id'    => 'desc_alf7',
                            'type'  => 'text',
                            'title' => 'Slider Text',
                            'default' => 'Lorem ipsum dolor sit amet consectetuer adipis elitnam nibh nunc varius facilisis eros sed erat in in velit quis arcuornare laoreet.',                                                             //   Fullwidth Slider 7 Group
                            //'dependency'   => array( 'style_circle', '==', 'true' ),
                        ),

                        array(
                            'id'       => 'button_text_alf7',
                            'type'     => 'text',
                            'title'    => 'Button Text:',                                                  //   Fullwidth Slider 7 Group
                            'after' => 'If don&apos;t want button just leave it blank',
                            'default' => 'Learn More',
                        ),


                        array(                                                                                      //   Fullwidth Slider 7 Group
                            'id'    => 'button_link_alf7',
                            'type'  => 'text',
                            'title' => 'Button Link',
                            'desc' => 'Insert custom URL including http://',
                            'after' => 'If don&apos;t want button just leave it blank',

                        ),

                        array(
                            'id'       => 'open_link_alf7',
                            'type'     => 'select',
                            'title'    => 'Open Link in:',                                                       //   Fullwidth Slider 7 Group
                            'options'  => array(
                                ''  => 'Same Window',
                                '_blank' => 'New Window',
                                ),
                            'default'  => 'same',
                        ),

                         array(
                            'id'       => 'flip_dirrection_alf7',
                            'type'     => 'select',                                                          //   Fullwidth Slider 4 Group
                            'title'    => 'Flip Dirrection',
                            'options'  => array(
                                'X'  => 'X',
                                'Y' => 'Y',
                                ),
                            'default'  => 'Right',
                            'help'  => 'Select one slide with up and another with down for making a varsatile slider',
                        ),




                    ),

                ),

                    array(
                    'id'              => 'group_option_al8',
                    'type'            => 'group',
                    'title'           => '',
                    'dependency'   => array( 'slider_type|style_fullwidth', '==', 'fullwidht_layer|fw_al_008'),
                    'button_title'    => 'Add New Slide',                                                           //   Fullwidth Slider 8 Group
                    'accordion_title' => 'Slider Item',
                    'fields'          => array(

                        array(
                            'id'    => 'image_alf8',
                            'type'  => 'image',
                            'title' => 'Carousel Background Image',                                                      //   Fullwidth Slider 8 Group
                        ),

                        array(
                            'id'    => 'season_alf8',
                            'type'  => 'text',
                            'title' => 'Season',
                            'default' => 'Summer 2087',

                        ),

                        array(
                            'id'    => 'title_alf8',
                            'type'  => 'text',
                            'title' => 'Product Title',
                            'default' => 'Product Title',

                        ),
                                                                                                                           //   Fullwidth Slider 8 Group
                        array(
                            'id'    => 'color_alf8',
                            'type'  => 'text',
                            'title' => 'Colors',
                            'default' => 'black / white',

                        ),
                        array(
                            'id'    => 'desc_alf8',
                            'type'  => 'text',
                            'title' => 'Product Text',
                            'default' => 'Lorem ipsum dolor sit amet consectetuer adipis elitnam nibh nunc varius facilisis eros sed erat in in velit quis arcuornare laoreet.',
                        ),

                        array(
                            'id'    => 'serial_alf8',
                            'type'  => 'text',
                            'title' => 'Product Serial Number',
                            'default' => 'b34543',

                        ),

                        array(
                            'id'    => 'price_alf8',
                            'type'  => 'text',
                            'title' => 'Price',
                            'default' => '22',

                        ),

                        array(
                            'id'       => 'money_sign_alf8',
                            'type'     => 'select',
                            'title'    => 'Select Currency:',                                                       //   Fullwidth Slider 8 Group
                            'options'  => array(
                                'fa-usd'  => 'Dollar',
                                'fa-euro-sign' => 'Euro',
                                'fa-gbp' => 'GBP',
                                ),
                            'default'  => 'euro',
                        ),

                        array(
                            'id'       => 'want_buy_alf8',
                            'type'     => 'select',
                            'title'    => 'Enable Buy Button',
                            'default'  => 'yes',
                            'options'  => array(
                                'yes'  => 'Yes',
                                'no' => 'No',
                                ),

                        ),


                        array(                                                                                      //   Fullwidth Slider 8 Group
                            'id'    => 'button_link_alf8',
                            'type'  => 'text',
                            'title' => 'Product Link To Buy',
                            'desc' => 'Insert custom URL including http://',
                            'after' => 'Paste here product link',
                            'dependency'   => array( 'want_buy', '==', 'yes')

                        ),

                        array(
                            'id'       => 'button_text_1_alf8',
                            'type'     => 'text',
                            'title'    => 'Seconde Button Text:',                                                  //   Fullwidth Slider 8 Group
                            'after' => 'If don&apos;t want button just leave it blank',
                            'default' => 'Learn More',
                        ),

                        array(                                                                                      //   Fullwidth Slider 8 Group
                            'id'    => 'button_link_1_alf8',
                            'type'  => 'text',
                            'title' => 'Seconde Button Link',
                            'desc' => 'Insert custom URL including http://',
                            'after' => 'If don&apos;t want button just leave it blank',

                        ),

                        array(
                            'id'       => 'open_link_alf8',
                            'type'     => 'select',
                            'title'    => 'Open Link in:',                                                       //   Fullwidth Slider 8 Group
                            'options'  => array(
                                ''  => 'Same Window',
                                '_blank' => 'New Window',
                                ),
                            'default'  => 'same',
                        ),

                        array(
                            'id'       => 'slide_from_left_right_alf8',
                            'type'     => 'select',                                                          //   Fullwidth Slider 4 Group
                            'title'    => 'Slide Test Position',
                            'options'  => array(
                                ''  => 'Left',
                                'fw_al_008_right' => 'Right',
                                'fw_al_008_center' => 'Center',
                                ),
                            'default'  => 'Right',
                            'help'  => 'Select one slide with left and another with right and center for making a varsatile slider',
                        ),




                    ),

                ),


                array(
                    'id'              => 'group_option_al9',
                    'type'            => 'group',
                    'title'           => '',
                    'dependency'   => array( 'slider_type|style_fullwidth', '==', 'fullwidht_layer|fw_al_009'),
                    'button_title'    => 'Add New Slider Item',                                                           //   Fullwidth Slider 9 Group
                    'accordion_title' => 'Slider Item',
                    'fields'          => array(

                        array(
                            'id'    => 'image_alf9',
                            'type'  => 'image',
                            'title' => 'Carousel Background Image',                                                      //   Fullwidth Slider 9 Group
                        ),


                        array(
                            'id'    => 'title_alf9',
                            'type'  => 'text',
                            'title' => 'First Header Text',
                            'desc' => 'Learn more how to put text in span tag. <a target="_blank" herf="https://www.w3schools.com/tags/tag_span.asp">Click here</a>',
                            'help' => '<span> Your Highlighted Text </span> Make sure this span tag is closed correctly',
                            'after' => '<span> text into this span tag will be in highlited color</span>',
                            'default' => '<span>Haritage </span>slider & <span>carousel</span>',

                        ),

                        array(
                            'id'    => 'title_1_alf9',
                            'type'  => 'text',
                            'title' => 'Seconde Header Text',
                            'default' => 'pre-made layouts<span> 130+</span>',

                        ),
                        array(
                            'id'    => 'desc_alf9',
                            'type'  => 'text',
                            'title' => 'Slider Text',
                            'default' => 'Lorem ipsum dolor sit amet consectetuer adipis elitnam nibh nunc varius facilisis eros sed erat in in velit quis arcuornare laoreet.',                                                             //   Fullwidth Slider 9 Group
                            //'dependency'   => array( 'style_circle', '==', 'true' ),
                        ),

                        array(
                            'id'       => 'button_text_alf9',
                            'type'     => 'text',
                            'title'    => 'Button Text:',                                                  //   Fullwidth Slider 9 Group
                            'after' => 'If don&apos;t want button just leave it blank',
                            'default' => 'Learn More',
                        ),


                        array(                                                                                      //   Fullwidth Slider 9 Group
                            'id'    => 'button_link_alf9',
                            'type'  => 'text',
                            'title' => 'Button Link',
                            'desc' => 'Insert custom URL including http://',
                            'after' => 'If don&apos;t want button just leave it blank',

                        ),

                        array(
                            'id'       => 'open_link_alf9',
                            'type'     => 'select',
                            'title'    => 'Open Link in:',                                                       //   Fullwidth Slider 9 Group
                            'options'  => array(
                                ''  => 'Same Window',
                                '_blank' => 'New Window',
                                ),
                            'default'  => 'same',
                        ),

                        array(
                            'id'       => 'slide_from_left_right_alf9',
                            'type'     => 'select',                                                          //   Fullwidth Slider 9 Group
                            'title'    => 'Slide Form',
                            'options'  => array(
                                ''  => 'Left',
                                'fw_al_009_center' => 'Center',
                                'fw_al_009_right' => 'Right',
                                ),
                            'default'  => 'Right',
                            'help'  => 'Select one slide with left and another with right for making a varsatile slider',
                        ),




                    ),

                ),

                array(
                    'id'              => 'group_option_al10',
                    'type'            => 'group',
                    'title'           => '',
                    'dependency'   => array( 'slider_type|style_fullwidth', '==', 'fullwidht_layer|fw_al_010'),
                    'button_title'    => 'Add New Slider Item',                                                           //   Fullwidth Slider 10 Group
                    'accordion_title' => 'Slider Item',
                    'fields'          => array(

                        array(
                            'id'    => 'image_alf10',
                            'type'  => 'image',
                            'title' => 'Carousel Background Image',                                                      //   Fullwidth Slider 10 Group
                        ),


                        array(
                            'id'    => 'title_alf10',
                            'type'  => 'text',
                            'title' => 'First Header Text',
                            'default' => 'Haritage ',

                        ),

                        array(
                            'id'    => 'title_1_alf10',
                            'type'  => 'text',
                            'title' => 'Seconde Header Text',
                            'default' => 'pre-made layouts 100+',

                        ),
                        array(
                            'id'    => 'desc_alf10',
                            'type'  => 'text',
                            'title' => 'Slider Text',
                            'default' => 'Lorem ipsum dolor sit amet consectetuer adipis elitnam nibh nunc varius facilisis eros sed erat in in velit quis arcuornare laoreet.',                                                             //   Fullwidth Slider 10 Group

                        ),

                        array(
                            'id'       => 'button_text_alf10',
                            'type'     => 'text',
                            'title'    => 'Button Text:',                                                  //   Fullwidth Slider 10 Group
                            'after' => 'If don&apos;t want button just leave it blank',
                            'default' => 'Learn More',
                        ),


                        array(                                                                                      //   Fullwidth Slider 10 Group
                            'id'    => 'button_link_alf10',
                            'type'  => 'text',
                            'title' => 'Button Link',
                            'desc' => 'Insert custom URL including http://',
                            'after' => 'If don&apos;t want button just leave it blank',

                        ),

                        array(
                            'id'       => 'open_link_alf10',
                            'type'     => 'select',
                            'title'    => 'Open Link in:',                                                       //   Fullwidth Slider 10 Group
                            'options'  => array(
                                ''  => 'Same Window',
                                '_blank' => 'New Window',
                                ),
                            'default'  => 'same',
                        ),






                    ),

                ),

                array(
                    'id'              => 'group_option_il11',
                    'type'            => 'group',
                    'title'           => '',
                    'dependency'   => array( 'slider_type|style_fullwidth', '==', 'fullwidht_layer|fw_il_011'),
                    'button_title'    => 'Add New Slider Item',                                                           //   Fullwidth Slider 11 Group
                    'accordion_title' => 'Slider Item',
                    'fields'          => array(

                        array(
                            'id'    => 'image_il11',
                            'type'  => 'image',
                            'title' => 'Carousel Background Image 1',                                                      //   Fullwidth Slider 11 Group
                        ),
                        array(
                            'id'    => 'image_1_il11',
                            'type'  => 'image',
                            'title' => 'Carousel Background Image 2',                                                      //   Fullwidth Slider 11 Group
                        ),
                        array(
                            'id'    => 'image_2_il11',
                            'type'  => 'image',
                            'title' => 'Carousel Background Image 3',                                                      //   Fullwidth Slider 11 Group
                        ),


                        array(
                            'id'    => 'title_il11',
                            'type'  => 'text',
                            'title' => 'First Header Text',
                            'default' => 'new arrivals<span> 2017</span> ',

                        ),

                        array(
                            'id'    => 'title_1_il11',
                            'type'  => 'text',
                            'title' => 'Seconde Header Text',
                            'default' => '<span>Haritage </span>slider',

                        ),
                        array(
                            'id'    => 'desc_il11',
                            'type'  => 'text',
                            'title' => 'Slider Text',
                            'default' => 'CEO - Apple.Inc',                                                             //   Fullwidth Slider 11 Group
                            //'dependency'   => array( 'style_circle', '==', 'true' ),
                        ),

                        array(
                            'id'       => 'button_text_il11',
                            'type'     => 'text',
                            'title'    => 'Button Text:',                                                  //   Fullwidth Slider 11 Group
                            'after' => 'If don&apos;t want button just leave it blank',
                        ),


                        array(                                                                                      //   Fullwidth Slider 11 Group
                            'id'    => 'button_link_il11',
                            'type'  => 'text',
                            'title' => 'Button Link',
                            'desc' => 'Insert custom URL including http://',
                            'after' => 'If don&apos;t want button just leave it blank',

                        ),

                        array(
                            'id'       => 'open_link_il11',
                            'type'     => 'select',
                            'title'    => 'Open Link in:',                                                       //   Fullwidth Slider 11 Group
                            'options'  => array(
                                ''  => 'Same Window',
                                '_blank' => 'New Window',
                                ),
                            'default'  => 'same',
                        ),

                        array(
                            'id'       => 'slide_from_left_right_il11',
                            'type'     => 'select',                                                          //   Fullwidth Slider 9 Group
                            'title'    => 'Slide Text Position',
                            'options'  => array(
                                ''  => 'Left',
                                'fw_il_011_slide_center' => 'Center',
                                'fw_il_011_slide_right' => 'Right',
                                ),
                            'default'  => 'Right',
                            'help'  => 'Select one slide with left and another with right for making a varsatile slider',
                        ),




                    ),

                ),

                array(
                    'id'              => 'group_option_il12',
                    'type'            => 'group',
                    'title'           => '',
                    'dependency'   => array( 'slider_type|style_fullwidth', '==', 'fullwidht_layer|fw_il_012'),
                    'button_title'    => 'Add New Slider Item',                                                           //   Fullwidth Slider 12 Group
                    'accordion_title' => 'Slider Item',
                    'fields'          => array(

                        array(
                            'id'    => 'image_il12',
                            'type'  => 'image',
                            'title' => 'Carousel 1st Background Image',                                                      //   Fullwidth Slider 12 Group
                        ),


                        array(
                            'id'    => 'title_il12',
                            'type'  => 'text',
                            'title' => 'First Image Text',
                            'default' => 'Haritage ',

                        ),



                        array(
                            'id'       => 'button_text_il12',
                            'type'     => 'text',
                            'title'    => 'First Button Text:',                                                  //   Fullwidth Slider 12 Group
                            'after' => 'If don&apos;t want button just leave it blank',
                            'default' => 'Learn More',
                        ),


                        array(                                                                                      //   Fullwidth Slider 12 Group
                            'id'    => 'button_link_il12',
                            'type'  => 'text',
                            'title' => 'First Button Link',
                            'desc' => 'Insert custom URL including http://',
                            'after' => 'If don&apos;t want button just leave it blank',

                        ),

                        array(
                            'id'    => 'image_1_il12',
                            'type'  => 'image',
                            'title' => 'Carousel 2nd Background Image',                                                      //   Fullwidth Slider 12 Group
                        ),


                        array(
                            'id'    => 'title_1_il12',
                            'type'  => 'text',
                            'title' => '2nd Image Text',
                            'default' => 'Haritage ',

                        ),



                        array(
                            'id'       => 'button_text_1_il12',
                            'type'     => 'text',
                            'title'    => '2nd Button Text:',                                                  //   Fullwidth Slider 12 Group
                            'after' => 'If don&apos;t want button just leave it blank',
                            'default' => 'Learn More',
                        ),


                        array(                                                                                      //   Fullwidth Slider 12 Group
                            'id'    => 'button_link_1_il12',
                            'type'  => 'text',
                            'title' => '2nd Button Link',
                            'desc' => 'Insert custom URL including http://',
                            'after' => 'If don&apos;t want button just leave it blank',

                        ),

                        array(
                            'id'    => 'image_2_il12',
                            'type'  => 'image',
                            'title' => 'Carousel 3rd Background Image',                                                      //   Fullwidth Slider 12 Group
                        ),


                        array(
                            'id'    => 'title_2_il12',
                            'type'  => 'text',
                            'title' => '3rd Image Text',
                            'default' => 'Haritage ',

                        ),



                        array(
                            'id'       => 'button_text_2_il12',
                            'type'     => 'text',
                            'title'    => '3rd Button Text:',                                                  //   Fullwidth Slider 12 Group
                            'after' => 'If don&apos;t want button just leave it blank',
                            'default' => 'Learn More',
                        ),


                        array(                                                                                      //   Fullwidth Slider 12 Group
                            'id'    => 'button_link_2_il12',
                            'type'  => 'text',
                            'title' => '3rd Button Link',
                            'desc' => 'Insert custom URL including http://',
                            'after' => 'If don&apos;t want button just leave it blank',

                        ),

                        array(
                            'id'    => 'image_3_il12',
                            'type'  => 'image',
                            'title' => 'Carousel 4th Background Image',                                                      //   Fullwidth Slider 12 Group
                        ),


                        array(
                            'id'    => 'title_3_il12',
                            'type'  => 'text',
                            'title' => '4th Image Text',
                            'default' => 'Haritage ',

                        ),



                        array(
                            'id'       => 'button_text_3_il12',
                            'type'     => 'text',
                            'title'    => '4th Button Text:',                                                  //   Fullwidth Slider 12 Group
                            'after' => 'If don&apos;t want button just leave it blank',
                            'default' => 'Learn More',
                        ),


                        array(                                                                                      //   Fullwidth Slider 12 Group
                            'id'    => 'button_link_3_il12',
                            'type'  => 'text',
                            'title' => '4th Button Link',
                            'desc' => 'Insert custom URL including http://',
                            'after' => 'If don&apos;t want button just leave it blank',

                        ),



                        array(
                            'id'       => 'open_link_il12',
                            'type'     => 'select',
                            'title'    => 'Open Link in:',                                                       //   Fullwidth Slider 12 Group
                            'options'  => array(
                                ''  => 'Same Window',
                                '_blank' => 'New Window',
                                ),
                            'default'  => 'same',
                        ),






                    ),

                ),

                array(
                    'id'              => 'group_option_il13',
                    'type'            => 'group',
                    'title'           => '',
                    'dependency'   => array( 'slider_type|style_fullwidth', '==', 'fullwidht_layer|fw_il_013'),
                    'button_title'    => 'Add New Slider Item',                                                           //   Fullwidth Slider 13 Group
                    'accordion_title' => 'Slider Item',
                    'fields'          => array(
                    array(
                            'id'    => 'image_il13',
                            'type'  => 'image',
                            'title' => 'Carousel Background Image 1',                                                      //   Fullwidth Slider 13 Group
                    ),

                    array(
                            'id'    => 'image_1_il13',
                            'type'  => 'image',
                            'title' => 'Carousel Background Image 2',                                                      //   Fullwidth Slider 13 Group
                    ),

                    array(
                            'id'    => 'image_2_il13',
                            'type'  => 'image',
                            'title' => 'Carousel Background Image 3',                                                      //   Fullwidth Slider 13 Group
                    ),


                    array(
                            'id'    => 'image_3_il13',
                            'type'  => 'image',
                            'title' => 'Carousel Background Image 4',                                                      //   Fullwidth Slider 13 Group
                    ),

                    array(
                            'id'    => 'image_4_il13',
                            'type'  => 'image',
                            'title' => 'Carousel Background Image 5',                                                      //   Fullwidth Slider 13 Group
                    ),

                    array(
                            'id'    => 'image_5_il13',
                            'type'  => 'image',
                            'title' => 'Carousel Background Image 6',                                                      //   Fullwidth Slider 13 Group
                    ),

                    array(
                            'id'    => 'image_6_il13',
                            'type'  => 'image',
                            'title' => 'Carousel Background Image 7',                                                      //   Fullwidth Slider 13 Group
                    ),

                    array(
                            'id'    => 'image_7_il13',
                            'type'  => 'image',
                            'title' => 'Carousel Background Image 8',                                                      //   Fullwidth Slider 13 Group
                    ),

                    array(
                            'id'    => 'title_il13',
                            'type'  => 'text',
                            'title' => 'Header Text',
                            'default' => 'Haritage ',

                    ),
                    array(
                            'id'    => 'button_text_il13',
                            'type'  => 'text',
                            'title' => 'Button Text',
                            'default' => 'Haritage ',

                    ),

                    array(                                                                                      //   Fullwidth Slider 13 Group
                        'id'    => 'button_link_il13',
                        'type'  => 'text',
                        'title' => 'Button Link',
                        'desc' => 'Insert custom URL including http://',
                        'after' => 'If don&apos;t want button just leave it blank',

                    ),

                    array(
                        'id'       => 'open_link_il13',
                        'type'     => 'select',
                        'title'    => 'Open Link in:',                                                       //   Fullwidth Slider 13 Group
                        'options'  => array(
                            ''  => 'Same Window',
                            '_blank' => 'New Window',
                            ),
                        'default'  => 'same',
                    ),



                    ),

                ),

                array(
                    'id'              => 'group_option_il14',
                    'type'            => 'group',
                    'title'           => '',
                    'dependency'   => array( 'slider_type|style_fullwidth', '==', 'fullwidht_layer|fw_il_014'),
                    'button_title'    => 'Add New Slider Item',                                                           //   Fullwidth Slider 14 Group
                    'accordion_title' => 'Slider Item',
                    'fields'          => array(
                    array(
                            'id'    => 'image_il14',
                            'type'  => 'image',
                            'title' => 'Carousel Background Image 1',
                    ),

                    array(
                            'id'    => 'image_1_il14',
                            'type'  => 'image',
                            'title' => 'Carousel Background Image 2',
                    ),

                    array(
                            'id'    => 'image_2_il14',
                            'type'  => 'image',
                            'title' => 'Carousel Background Image 3',
                    ),


                    array(
                            'id'    => 'image_3_il14',
                            'type'  => 'image',
                            'title' => 'Carousel Background Image 4',
                    ),

                    array(
                            'id'    => 'image_4_il14',
                            'type'  => 'image',
                            'title' => 'Carousel Background Image 5',
                    ),

                    array(
                            'id'    => 'image_5_il14',
                            'type'  => 'image',
                            'title' => 'Carousel Background Image 6',
                    ),



                    array(
                            'id'    => 'title_il14',
                            'type'  => 'text',
                            'title' => 'Header Text 1',
                            'default' => 'Slider Fiction ',

                    ),
                    array(
                            'id'    => 'desc_il14',
                            'type'  => 'text',
                            'title' => 'Header Text 2',
                            'default' => 'They Are Awesome!!! ',

                    ),

                    array(
                            'id'    => 'button_text_il14',
                            'type'  => 'text',
                            'title' => 'Button Text',
                            'default' => 'Button',

                    ),

                    array(
                        'id'    => 'button_link_il14',
                        'type'  => 'text',
                        'title' => 'Button Link',
                        'desc' => 'Insert custom URL including http://',
                        'after' => 'If don&apos;t want button just leave it blank',

                    ),

                    array(
                        'id'       => 'open_link_il14',
                        'type'     => 'select',
                        'title'    => 'Open Link in:',                                                       //   Fullwidth Slider 14 Group
                        'options'  => array(
                            ''  => 'Same Window',
                            '_blank' => 'New Window',
                            ),
                        'default'  => 'same',
                    ),



                    ),

                ),

                array(
                    'id'              => 'group_option_il15',
                    'type'            => 'group',
                    'title'           => '',
                    'dependency'   => array( 'slider_type|style_fullwidth', '==', 'fullwidht_layer|fw_il_015'),
                    'button_title'    => 'Add New Slider Item',                                                           //   Fullwidth Slider 15 Group
                    'accordion_title' => 'Slider Item',
                    'fields'          => array(
                    array(
                            'id'    => 'image_il15',
                            'type'  => 'image',
                            'title' => 'Carousel Background Image 1',
                    ),

                    array(
                            'id'    => 'image_1_il15',
                            'type'  => 'image',
                            'title' => 'Carousel Background Image 2',
                    ),

                    array(
                            'id'    => 'image_2_il15',
                            'type'  => 'image',
                            'title' => 'Carousel Background Image 3',
                    ),


                    array(
                            'id'    => 'image_3_il15',
                            'type'  => 'image',
                            'title' => 'Carousel Background Image 4',
                    ),

                    array(
                            'id'    => 'image_4_il15',
                            'type'  => 'image',
                            'title' => 'Carousel Background Image 5',
                    ),

                    array(
                            'id'    => 'image_5_il15',
                            'type'  => 'image',
                            'title' => 'Carousel Background Image 6',
                    ),

                    array(
                            'id'    => 'image_6_il15',
                            'type'  => 'image',
                            'title' => 'Carousel Background Image 7',
                    ),

                    array(
                            'id'    => 'image_7_il15',
                            'type'  => 'image',
                            'title' => 'Carousel Background Image 8',
                    ),

                    array(
                            'id'    => 'image_8_il15',
                            'type'  => 'image',
                            'title' => 'Carousel Background Image 9',                                                      //   Fullwidth Slider 15 Group
                    ),


                    array(
                            'id'    => 'title_il15',
                            'type'  => 'text',
                            'title' => 'Header Text 1',
                            'default' => 'Slider Fiction ',

                    ),
                    array(
                            'id'    => 'desc_il15',
                            'type'  => 'text',
                            'title' => 'Header Text 2',
                            'default' => 'They Are Awesome!!! ',

                    ),

                    array(
                            'id'    => 'price_il15',
                            'type'  => 'text',
                            'title' => 'Product Price',
                            'default' => '76',

                    ),

                    array(                                                                                      //   Fullwidth Slider 15 Group
                        'id'    => 'button_link_il15',
                        'type'  => 'text',
                        'title' => 'Button Link',
                        'desc' => 'Insert custom URL including http://',
                        'after' => 'If don&apos;t want button just leave it blank',

                    ),

                    array(
                        'id'       => 'open_link_il15',
                        'type'     => 'select',
                        'title'    => 'Open Link in:',                                                       //   Fullwidth Slider 15 Group
                        'options'  => array(
                            ''  => 'Same Window',
                            '_blank' => 'New Window',
                            ),
                        'default'  => 'same',
                    ),

                    ),

                ),





                array(
                    'id'              => 'group_option_il16',
                    'type'            => 'group',
                    'title'           => '',
                    'dependency'   => array( 'slider_type|style_fullwidth', '==', 'fullwidht_layer|fw_il_016'),
                    'button_title'    => 'Add New Slider Item',                                                           //   Fullwidth Slider 16 Group
                    'accordion_title' => 'Slider Item',
                    'fields'          => array(
                    array(
                            'id'    => 'image_il16',
                            'type'  => 'image',
                            'title' => 'Carousel Background Image 1',
                    ),

                    array(
                            'id'    => 'image_1_il16',
                            'type'  => 'image',
                            'title' => 'Carousel Background Image 2',
                    ),


                    array(
                            'id'    => 'title_il16',
                            'type'  => 'text',
                            'title' => 'Header Text 1',
                            'default' => 'Slider Fiction ',

                    ),
                    array(
                            'id'    => 'desc_il16',
                            'type'  => 'text',
                            'title' => 'Header Text 2',
                            'default' => 'They Are Awesome!!! ',

                    ),

                    array(
                            'id'    => 'button_text_il16',
                            'type'  => 'text',
                            'title' => 'Button Text',
                            'default' => 'Button',

                    ),

                    array(
                        'id'    => 'button_link_il16',
                        'type'  => 'text',
                        'title' => 'Button Link',
                        'desc' => 'Insert custom URL including http://',
                        'after' => 'If don&apos;t want button just leave it blank',

                    ),

                    array(
                        'id'       => 'open_link_il16',
                        'type'     => 'select',
                        'title'    => 'Open Link in:',                                                       //   Fullwidth Slider 16 Group
                        'options'  => array(
                            ''  => 'Same Window',
                            '_blank' => 'New Window',
                            ),
                        'default'  => 'same',
                    ),



                    ),

                ),



                array(
                    'id'              => 'group_option_il17',
                    'type'            => 'group',
                    'title'           => '',
                    'dependency'   => array( 'slider_type|style_fullwidth', '==', 'fullwidht_layer|fw_il_017'),
                    'button_title'    => 'Add New Slider Item',                                                           //   Fullwidth Slider 17 Group
                    'accordion_title' => 'Slider Item',
                    'fields'          => array(

                    array(
                            'id'    => 'image_il17',
                            'type'  => 'image',
                            'title' => 'Carousel Background Product Image 1',
                    ),

                    array(
                            'id'    => 'title_il17',
                            'type'  => 'text',
                            'title' => 'Product Category 1',
                            'default' => 'Slider Fiction ',

                    ),
                    array(
                            'id'    => 'desc_il17',
                            'type'  => 'text',
                            'title' => 'Button Text 1',
                            'default' => 'more ',

                    ),



                    array(
                        'id'    => 'button_link_il17',
                        'type'  => 'text',
                        'title' => 'Button Link 1',
                        'desc' => 'Insert custom URL including http://',
                        'after' => 'If don&apos;t want button just leave it blank',

                    ),

                    array(
                            'id'    => 'image_1_il17',
                            'type'  => 'image',
                            'title' => 'Carousel Background Product Image 2',
                    ),

                    array(
                            'id'    => 'title_1_il17',
                            'type'  => 'text',
                            'title' => 'Product Category 2',
                            'default' => 'Slider Fiction ',

                    ),
                    array(
                            'id'    => 'desc_1_il17',
                            'type'  => 'text',
                            'title' => 'Button Text 2',
                            'default' => 'more',

                    ),



                    array(
                        'id'    => 'button_link_1_il17',
                        'type'  => 'text',
                        'title' => 'Button Link 2',
                        'desc' => 'Insert custom URL including http://',
                        'after' => 'If don&apos;t want button just leave it blank',

                    ),

                    array(
                            'id'    => 'image_2_il17',
                            'type'  => 'image',
                            'title' => 'Carousel Background Product Image 3',
                    ),

                    array(
                            'id'    => 'title_2_il17',
                            'type'  => 'text',
                            'title' => 'Product Category 3',
                            'default' => 'Slider Fiction ',

                    ),
                    array(
                            'id'    => 'desc_2_il17',
                            'type'  => 'text',
                            'title' => 'Button Text 3',
                            'default' => 'more',

                    ),



                    array(
                        'id'    => 'button_link_2_il17',
                        'type'  => 'text',
                        'title' => 'Button Link 3',
                        'desc' => 'Insert custom URL including http://',
                        'after' => 'If don&apos;t want button just leave it blank',

                    ),

                    array(
                            'id'    => 'image_3_il17',
                            'type'  => 'image',
                            'title' => 'Carousel Background Product Image 4',
                    ),

                    array(
                            'id'    => 'title_3_il17',
                            'type'  => 'text',
                            'title' => 'Product Category 4',
                            'default' => 'Slider Fiction ',

                    ),
                    array(
                            'id'    => 'desc_3_il17',
                            'type'  => 'text',
                            'title' => 'Button Text 4',
                            'default' => 'more ',

                    ),



                    array(
                        'id'    => 'button_link_3_il17',
                        'type'  => 'text',
                        'title' => 'Button Link 4',
                        'desc' => 'Insert custom URL including http://',
                        'after' => 'If don&apos;t want button just leave it blank',

                    ),


                    array(
                            'id'    => 'image_4_il17',
                            'type'  => 'image',
                            'title' => 'Carousel Background Product Image 5',
                    ),

                    array(
                            'id'    => 'title_4_il17',
                            'type'  => 'text',
                            'title' => 'Product Category 5',
                            'default' => 'Slider Fiction ',

                    ),
                    array(
                            'id'    => 'desc_4_il17',
                            'type'  => 'text',
                            'title' => 'Button Text 5',
                            'default' => 'more',

                    ),



                    array(
                        'id'    => 'button_link_4_il17',
                        'type'  => 'text',
                        'title' => 'Button Link 5',
                        'desc' => 'Insert custom URL including http://',
                        'after' => 'If don&apos;t want button just leave it blank',

                    ),

                    array(
                            'id'    => 'image_5_il17',
                            'type'  => 'image',
                            'title' => 'Carousel Background Product Image 6',
                    ),

                    array(
                            'id'    => 'title_5_il17',
                            'type'  => 'text',
                            'title' => 'Product Category 6',
                            'default' => 'Slider Fiction ',

                    ),
                    array(
                            'id'    => 'desc_5_il17',
                            'type'  => 'text',
                            'title' => 'Button Text 6',
                            'default' => 'more',

                    ),



                    array(
                        'id'    => 'button_link_5_il17',
                        'type'  => 'text',
                        'title' => 'Button Link 6',
                        'desc' => 'Insert custom URL including http://',
                        'after' => 'If don&apos;t want button just leave it blank',

                    ),

                    array(
                            'id'    => 'image_6_il17',
                            'type'  => 'image',
                            'title' => 'Carousel Background Product Image 7',
                    ),

                    array(
                            'id'    => 'title_6_il17',
                            'type'  => 'text',
                            'title' => 'Product Category 7',
                            'default' => 'Slider Fiction ',

                    ),
                    array(
                            'id'    => 'desc_6_il17',
                            'type'  => 'text',
                            'title' => 'Button Text 7',
                            'default' => 'more',

                    ),



                    array(
                        'id'    => 'button_link_6_il17',
                        'type'  => 'text',
                        'title' => 'Button Link 7',
                        'desc' => 'Insert custom URL including http://',
                        'after' => 'If don&apos;t want button just leave it blank',

                    ),

                    array(
                            'id'    => 'image_7_il17',
                            'type'  => 'image',
                            'title' => 'Carousel Background Product Image 8',
                    ),

                    array(
                            'id'    => 'title_7_il17',
                            'type'  => 'text',
                            'title' => 'Product Category 8',
                            'default' => 'Slider Fiction ',

                    ),
                    array(
                            'id'    => 'desc_7_il17',
                            'type'  => 'text',
                            'title' => 'Button Text 8',
                            'default' => 'more',

                    ),



                    array(
                        'id'    => 'button_link_7_il17',
                        'type'  => 'text',
                        'title' => 'Button Link 8',
                        'desc' => 'Insert custom URL including http://',
                        'after' => 'If don&apos;t want button just leave it blank',

                    ),

                    array(
                            'id'    => 'image_8_il17',
                            'type'  => 'image',
                            'title' => 'Carousel Background Product Image 9',
                    ),

                    array(
                            'id'    => 'title_8_il17',
                            'type'  => 'text',
                            'title' => 'Product Category 9',
                            'default' => 'Slider Fiction ',

                    ),
                    array(
                            'id'    => 'desc_8_il17',
                            'type'  => 'text',
                            'title' => 'Button Text 9',
                            'default' => 'more ',

                    ),



                    array(
                        'id'    => 'button_link_8_il17',
                        'type'  => 'text',
                        'title' => 'Button Link 9',
                        'desc' => 'Insert custom URL including http://',
                        'after' => 'If don&apos;t want button just leave it blank',

                    ),

                    array(
                            'id'    => 'image_9_il17',
                            'type'  => 'image',
                            'title' => 'Carousel Background Product Image 10',
                    ),

                    array(
                            'id'    => 'title_9_il17',
                            'type'  => 'text',
                            'title' => 'Product Category 10',
                            'default' => 'Slider Fiction ',

                    ),
                    array(
                            'id'    => 'desc_9_il17',
                            'type'  => 'text',
                            'title' => 'Button Text 10',
                            'default' => 'more',

                    ),



                    array(
                        'id'    => 'button_link_9_il17',
                        'type'  => 'text',
                        'title' => 'Button Link 10',
                        'desc' => 'Insert custom URL including http://',
                        'after' => 'If don&apos;t want button just leave it blank',

                    ),

                    array(
                            'id'    => 'image_10_il17',
                            'type'  => 'image',
                            'title' => 'Carousel Background Product Image 11',
                    ),

                    array(
                            'id'    => 'title_10_il17',
                            'type'  => 'text',
                            'title' => 'Product Category 11',
                            'default' => 'Slider Fiction ',

                    ),
                    array(
                            'id'    => 'desc_10_il17',
                            'type'  => 'text',
                            'title' => 'Button Text 11',
                            'default' => 'more',

                    ),



                    array(
                        'id'    => 'button_link_10_il17',
                        'type'  => 'text',
                        'title' => 'Button Link 11',
                        'desc' => 'Insert custom URL including http://',
                        'after' => 'If don&apos;t want button just leave it blank',

                    ),

                    array(
                            'id'    => 'image_11_il17',
                            'type'  => 'image',
                            'title' => 'Carousel Background Product Image 12',
                    ),

                    array(
                            'id'    => 'title_11_il17',
                            'type'  => 'text',
                            'title' => 'Product Category 12',
                            'default' => 'Slider Fiction ',

                    ),
                    array(
                            'id'    => 'desc_11_il17',
                            'type'  => 'text',
                            'title' => 'Button Text 12',
                            'default' => 'more',

                    ),



                    array(
                        'id'    => 'button_link_11_il17',
                        'type'  => 'text',
                        'title' => 'Button Link 12',
                        'desc' => 'Insert custom URL including http://',
                        'after' => 'If don&apos;t want button just leave it blank',

                    ),

                    array(
                            'id'    => 'image_12_il17',
                            'type'  => 'image',
                            'title' => 'Carousel Background Product Image 13',
                    ),

                    array(
                            'id'    => 'title_12_il17',
                            'type'  => 'text',
                            'title' => 'Product Category 13',
                            'default' => 'Slider Fiction ',

                    ),
                    array(
                            'id'    => 'desc_12_il17',
                            'type'  => 'text',
                            'title' => 'Button Text 13',
                            'default' => 'more',

                    ),



                    array(
                        'id'    => 'button_link_12_il17',
                        'type'  => 'text',
                        'title' => 'Button Link 13',
                        'desc' => 'Insert custom URL including http://',
                        'after' => 'If don&apos;t want button just leave it blank',

                    ),

                    array(
                            'id'    => 'image_13_il17',
                            'type'  => 'image',
                            'title' => 'Carousel Background Product Image 14',
                    ),

                    array(
                            'id'    => 'title_13_il17',
                            'type'  => 'text',
                            'title' => 'Product Category 14',
                            'default' => 'Slider Fiction ',

                    ),
                    array(
                            'id'    => 'desc_13_il17',
                            'type'  => 'text',
                            'title' => 'Button Text 14',
                            'default' => 'more',

                    ),



                    array(
                        'id'    => 'button_link_13_il17',
                        'type'  => 'text',
                        'title' => 'Button Link 14',
                        'desc' => 'Insert custom URL including http://',
                        'after' => 'If don&apos;t want button just leave it blank',

                    ),

                    array(
                            'id'    => 'image_14_il17',
                            'type'  => 'image',
                            'title' => 'Carousel Background Product Image 15',
                    ),

                    array(
                            'id'    => 'title_14_il17',
                            'type'  => 'text',
                            'title' => 'Product Category 15',
                            'default' => 'Slider Fiction ',

                    ),
                    array(
                            'id'    => 'desc_14_il17',
                            'type'  => 'text',
                            'title' => 'Button Text 15',
                            'default' => 'more',

                    ),



                    array(
                        'id'    => 'button_link_14_il17',
                        'type'  => 'text',
                        'title' => 'Button Link 15',
                        'desc' => 'Insert custom URL including http://',
                        'after' => 'If don&apos;t want button just leave it blank',

                    ),

                    array(
                            'id'    => 'image_15_il17',
                            'type'  => 'image',
                            'title' => 'Carousel Background Product Image 16',
                    ),

                    array(
                            'id'    => 'title_15_il17',
                            'type'  => 'text',
                            'title' => 'Product Category 16',
                            'default' => 'Slider Fiction ',

                    ),
                    array(
                            'id'    => 'desc_15_il17',
                            'type'  => 'text',
                            'title' => 'Button Text 16',
                            'default' => 'more',

                    ),



                    array(
                        'id'    => 'button_link_15_il17',
                        'type'  => 'text',
                        'title' => 'Button Link 16',
                        'desc' => 'Insert custom URL including http://',
                        'after' => 'If don&apos;t want button just leave it blank',

                    ),

                    array(
                            'id'    => 'image_16_il17',
                            'type'  => 'image',
                            'title' => 'Carousel Background Product Image 17',
                    ),

                    array(
                            'id'    => 'title_16_il17',
                            'type'  => 'text',
                            'title' => 'Product Category 17',
                            'default' => 'Slider Fiction ',

                    ),
                    array(
                            'id'    => 'desc_16_il17',
                            'type'  => 'text',
                            'title' => 'Button Text 17',
                            'default' => 'more',

                    ),



                    array(
                        'id'    => 'button_link_16_il17',
                        'type'  => 'text',
                        'title' => 'Button Link 17',
                        'desc' => 'Insert custom URL including http://',
                        'after' => 'If don&apos;t want button just leave it blank',

                    ),

                    array(
                            'id'    => 'image_17_il17',
                            'type'  => 'image',
                            'title' => 'Carousel Background Product Image 18',
                    ),

                    array(
                            'id'    => 'title_17_il17',
                            'type'  => 'text',
                            'title' => 'Product Category 18',
                            'default' => 'Slider Fiction ',

                    ),
                    array(
                            'id'    => 'desc_17_il17',
                            'type'  => 'text',
                            'title' => 'Button Text 18',
                            'default' => 'more',

                    ),



                    array(
                        'id'    => 'button_link_17_il17',
                        'type'  => 'text',
                        'title' => 'Button Link 18',
                        'desc' => 'Insert custom URL including http://',
                        'after' => 'If don&apos;t want button just leave it blank',

                    ),






                    array(
                        'id'       => 'open_link_il17',
                        'type'     => 'select',
                        'title'    => 'Open Link in:',                                                       //   Fullwidth Slider 17 Group
                        'options'  => array(
                            ''  => 'Same Window',
                            '_blank' => 'New Window',
                            ),
                        'default'  => 'same',
                    ),



                    ),

                ),


                array(
                    'id'              => 'group_option_il18',
                    'type'            => 'group',
                    'title'           => '',
                    'dependency'   => array( 'slider_type|style_fullwidth', '==', 'fullwidht_layer|fw_il_018'),
                    'button_title'    => 'Add New Slider Item',                                                           //   Fullwidth Slider 18 Group
                    'accordion_title' => 'Slider Item',
                    'fields'          => array(
                    array(
                            'id'    => 'image_il18',
                            'type'  => 'image',
                            'title' => 'Carousel Background Image 1',
                    ),

                    array(
                            'id'    => 'image_1_il18',
                            'type'  => 'image',
                            'title' => 'Carousel Background Image 2',
                    ),

                    array(
                            'id'    => 'image_2_il18',
                            'type'  => 'image',
                            'title' => 'Carousel Background Image 3',
                    ),

                    array(
                            'id'    => 'image_3_il18',
                            'type'  => 'image',
                            'title' => 'Carousel Background Image 4',
                    ),

                    array(
                            'id'    => 'image_4_il18',
                            'type'  => 'image',
                            'title' => 'Carousel Background Image 5',
                    ),

                    array(
                            'id'    => 'image_5_il18',
                            'type'  => 'image',
                            'title' => 'Carousel Background Image 6',
                    ),


                    array(
                            'id'    => 'title_il18',
                            'type'  => 'text',
                            'title' => 'Header Text',
                            'default' => 'Slider Fiction ',

                    ),
                    array(
                            'id'    => 'desc_il18',
                            'type'  => 'text',
                            'title' => 'Button Text',
                            'default' => 'Button',

                    ),


                    array(
                        'id'    => 'button_link_il18',
                        'type'  => 'text',
                        'title' => 'Button Link',
                        'desc' => 'Insert custom URL including http://',
                        'after' => 'If don&apos;t want button just leave it blank',

                    ),

                    array(
                        'id'       => 'open_link_il18',
                        'type'     => 'select',
                        'title'    => 'Open Link in:',                                                       //   Fullwidth Slider 18 Group
                        'options'  => array(
                            ''  => 'Same Window',
                            '_blank' => 'New Window',
                            ),
                        'default'  => 'same',
                    ),



                    ),

                ),

                 array(
                    'id'              => 'group_option_il19',
                    'type'            => 'group',
                    'title'           => '',
                    'dependency'   => array( 'slider_type|style_fullwidth', '==', 'fullwidht_layer|fw_il_019'),
                    'button_title'    => 'Add New Slider Item',                                                           //   Fullwidth Slider 19 Group
                    'accordion_title' => 'Slider Item',
                    'fields'          => array(
                    array(
                            'id'    => 'image_il19',
                            'type'  => 'image',
                            'title' => 'Carousel Background Image 1',
                    ),


                    array(
                            'id'    => 'title_il19',
                            'type'  => 'text',
                            'title' => 'Header  1',
                            'default' => 'Slider Fiction ',

                    ),
                    array(
                            'id'    => 'desc_il19',
                            'type'  => 'text',
                            'title' => 'Header Text 1',
                            'default' => 'They Are Awesome!!! ',

                    ),

                    array(
                            'id'    => 'button_text_il19',
                            'type'  => 'text',
                            'title' => 'Button Text 1',
                            'default' => 'more ',

                    ),

                    array(
                        'id'    => 'button_link_il19',
                        'type'  => 'text',
                        'title' => 'Button Link 1',
                        'desc' => 'Insert custom URL including http://',
                        'after' => 'If don&apos;t want button just leave it blank',

                    ),



                    array(
                        'id'       => 'open_link_il19',
                        'type'     => 'select',
                        'title'    => 'Open Link in:',                                                       //   Fullwidth Slider 19 Group
                        'options'  => array(
                            ''  => 'Same Window',
                            '_blank' => 'New Window',
                            ),
                        'default'  => 'same',
                    ),



                    ),

                ),


                 array(
                    'id'              => 'group_option_il20',
                    'type'            => 'group',
                    'title'           => '',
                    'dependency'   => array( 'slider_type|style_fullwidth', '==', 'fullwidht_layer|fw_il_020'),
                    'button_title'    => 'Add New Slider Item',                                                           //   Fullwidth Slider 20 Group
                    'accordion_title' => 'Slider Item',
                    'fields'          => array(
                    array(
                            'id'    => 'image_il20',
                            'type'  => 'image',
                            'title' => 'Carousel Background Image 1',
                    ),



                    array(
                            'id'    => 'desc_il20',
                            'type'  => 'text',
                            'title' => 'Button Text 1',
                            'default' => 'More ',

                    ),


                    array(
                        'id'    => 'button_link_il20',
                        'type'  => 'text',
                        'title' => 'Button Link 1',
                        'desc' => 'Insert custom URL including http://',
                        'after' => 'If don&apos;t want button just leave it blank',

                    ),

                    array(
                            'id'    => 'image_1_il20',
                            'type'  => 'image',
                            'title' => 'Carousel Background Image 2',
                    ),



                    array(
                            'id'    => 'desc_1_il20',
                            'type'  => 'text',
                            'title' => 'Button Text 2',
                            'default' => 'More',

                    ),


                    array(
                        'id'    => 'button_link_1_il20',
                        'type'  => 'text',
                        'title' => 'Button Link 2',
                        'desc' => 'Insert custom URL including http://',
                        'after' => 'If don&apos;t want button just leave it blank',

                    ),

                    array(
                            'id'    => 'image_2_il20',
                            'type'  => 'image',
                            'title' => 'Carousel Background Image 3',
                    ),



                    array(
                            'id'    => 'desc_2_il20',
                            'type'  => 'text',
                            'title' => 'Button Text 3',
                            'default' => 'More ',

                    ),


                    array(
                        'id'    => 'button_link_2_il20',
                        'type'  => 'text',
                        'title' => 'Button Link 3',
                        'desc' => 'Insert custom URL including http://',
                        'after' => 'If don&apos;t want button just leave it blank',

                    ),

                    array(
                            'id'    => 'image_3_il20',
                            'type'  => 'image',
                            'title' => 'Carousel Background Image 4',
                    ),



                    array(
                            'id'    => 'desc_3_il20',
                            'type'  => 'text',
                            'title' => 'Button Text 4',
                            'default' => 'more ',

                    ),


                    array(
                        'id'    => 'button_link_3_il20',
                        'type'  => 'text',
                        'title' => 'Button Link 4',
                        'desc' => 'Insert custom URL including http://',
                        'after' => 'If don&apos;t want button just leave it blank',

                    ),

                    array(
                            'id'    => 'image_4_il20',
                            'type'  => 'image',
                            'title' => 'Carousel Background Image 5',
                    ),



                    array(
                            'id'    => 'desc_4_il20',
                            'type'  => 'text',
                            'title' => 'Button Text 5',
                            'default' => 'more ',

                    ),


                    array(
                        'id'    => 'button_link_4_il20',
                        'type'  => 'text',
                        'title' => 'Button Link 5',
                        'desc' => 'Insert custom URL including http://',
                        'after' => 'If don&apos;t want button just leave it blank',

                    ),

                    array(
                            'id'    => 'image_5_il20',
                            'type'  => 'image',
                            'title' => 'Carousel Background Image 6',
                    ),



                    array(
                            'id'    => 'desc_5_il20',
                            'type'  => 'text',
                            'title' => 'Button Text 6',
                            'default' => 'more ',

                    ),


                    array(
                        'id'    => 'button_link_5_il20',
                        'type'  => 'text',
                        'title' => 'Button Link 6',
                        'desc' => 'Insert custom URL including http://',
                        'after' => 'If don&apos;t want button just leave it blank',

                    ),

                    array(
                            'id'    => 'image_6_il20',
                            'type'  => 'image',
                            'title' => 'Carousel Background Image 7',
                    ),



                    array(
                            'id'    => 'desc_6_il20',
                            'type'  => 'text',
                            'title' => 'Button Text 7',
                            'default' => 'more ',

                    ),


                    array(
                        'id'    => 'button_link_6_il20',
                        'type'  => 'text',
                        'title' => 'Button Link 7',
                        'desc' => 'Insert custom URL including http://',
                        'after' => 'If don&apos;t want button just leave it blank',

                    ),

                    array(
                            'id'    => 'image_7_il20',
                            'type'  => 'image',
                            'title' => 'Carousel Background Image 8',
                    ),



                    array(
                            'id'    => 'desc_7_il20',
                            'type'  => 'text',
                            'title' => 'Button Text 8',
                            'default' => 'more ',

                    ),


                    array(
                        'id'    => 'button_link_7_il20',
                        'type'  => 'text',
                        'title' => 'Button Link 8',
                        'desc' => 'Insert custom URL including http://',
                        'after' => 'If don&apos;t want button just leave it blank',

                    ),

                    array(
                            'id'    => 'image_8_il20',
                            'type'  => 'image',
                            'title' => 'Carousel Background Image 9',
                    ),



                    array(
                            'id'    => 'desc_8_il20',
                            'type'  => 'text',
                            'title' => 'Button Text 9',
                            'default' => 'more ',

                    ),


                    array(
                        'id'    => 'button_link_8_il20',
                        'type'  => 'text',
                        'title' => 'Button Link 9',
                        'desc' => 'Insert custom URL including http://',
                        'after' => 'If don&apos;t want button just leave it blank',

                    ),

                    array(
                            'id'    => 'image_9_il20',
                            'type'  => 'image',
                            'title' => 'Carousel Background Image 10',
                    ),



                    array(
                            'id'    => 'desc_9_il20',
                            'type'  => 'text',
                            'title' => 'Button Text 10',
                            'default' => 'more ',

                    ),


                    array(
                        'id'    => 'button_link_9_il20',
                        'type'  => 'text',
                        'title' => 'Button Link 10',
                        'desc' => 'Insert custom URL including http://',
                        'after' => 'If don&apos;t want button just leave it blank',

                    ),

                    array(
                            'id'    => 'title_il20',
                            'type'  => 'text',
                            'title' => 'Any Remarks...?',
                            'default' => 'Slider Fiction ',

                    ),

                    array(
                        'id'       => 'open_link_il20',
                        'type'     => 'select',
                        'title'    => 'Open Link in:',                                                       //   Fullwidth Slider 20 Group
                        'options'  => array(
                            ''  => 'Same Window',
                            '_blank' => 'New Window',
                            ),
                        'default'  => 'same',
                    ),



                    ),

                ),

                //  ******* Team Slider GroupsS all   *******

                array(
                    'id'              => 'group_option_86',
                    'type'            => 'group',
                    'title'           => '',
                    'dependency'   => array( 'slider_type|style', '==', 'team_style|team_086_mov'), //team_86
                    'button_title'    => 'Add New Slider Item',
                    'accordion_title' => 'Slider Item',
                    'fields'          => array(

                        array(
                            'id'    => 'image_86',
                            'type'  => 'image',
                            'title' => 'Carousel Image',
                        ),


                        array(
                            'id'    => 'title_86',
                            'type'  => 'text',
                            'title' => 'Team Member Name',
                            'default' => 'Name',
                                                                          //team_86
                        ),
                        array(
                            'id'    => 'desig1_86',
                            'type'  => 'text',
                            'title' => 'Designation',
                            'default' => 'CEO - Apple.Inc',

                        ),

                        array(
                            'id'       => 'on_click_86',
                            'type'     => 'select',
                            'title'    => 'On Click:',
                            //'dependency'   => array( 'circle_effect', 'any', 'effect2' ),
                            'options'  => array(
                                'do_nothing'  => 'Do Nothing',
                                'custom_link'   => 'Custom Link',
                            ),
                            'default'  => 'do_nothing',
                        ),
                        array(
                            'id'    => 'image_link_86',
                            'type'  => 'text',
                            'title' => 'Image Link',
                            'desc' => 'Insert custom URL including http://',
                            'dependency' => array( 'on_click_86', '==', 'custom_link' ),
                        ),
                        array(
                            'id'       => 'open_link_86',
                            'type'     => 'select',
                            'title'    => 'Open Link in:',
                            'options'  => array(
                                ''  => 'Same Window',
                                '_blank' => 'New Window',
                                ),
                            'default'  => 'same',
                            'dependency' => array( 'on_click_86', '==', 'custom_link' ),
                        ),



                    ),

                ),

            array(
                    'id'              => 'group_option_87',
                    'type'            => 'group',
                    'title'           => '',
                    'dependency'   => array( 'slider_type|style', '==', 'team_style|team_087_mov'), //team_87
                    'button_title'    => 'Add New Slider Item',
                    'accordion_title' => 'Slider Item',
                    'fields'          => array(

                        array(
                            'id'    => 'image_t87',
                            'type'  => 'image',
                            'title' => 'Carousel Image',
                        ),


                        array(
                            'id'    => 'title_t87',
                            'type'  => 'text',
                            'title' => 'Team Member Name',
                            'default' => 'Name',
                        ),
                        array(
                            'id'    => 'desig2_t87',
                            'type'  => 'text',
                            'title' => 'Designation',
                            'default' => 'CEO - Apple.Inc',
                        ),

                        array(
                            'id'    => 'dept_t87',
                            'type'  => 'text',
                            'title' => 'Department',
                            'default' => 'HRM',
                        ),

                        array(
                            'id'    => 'desc_t87',
                            'type'  => 'textarea',
                            'title' => 'Some words',
                            'default' => 'Description',
                        ),

                        array(
                            'id'       => 'on_click_t87',
                            'type'     => 'select',
                            'title'    => 'On Click:',
                            'options'  => array(
                                'do_nothing'  => 'Do Nothing',
                                'custom_link'   => 'Custom Link',
                            ),
                            'default'  => 'do_nothing',
                        ),
                        array(
                            'id'    => 'image_link_t87',
                            'type'  => 'text',
                            'title' => 'Image Link',
                            'desc' => 'Insert custom URL including http://',
                            'dependency' => array( 'on_click_t87', '==', 'custom_link' ),
                        ),
                        array(
                            'id'       => 'open_link_t87',
                            'type'     => 'select',
                            'title'    => 'Open Link in:',
                            'options'  => array(
                                ''  => 'Same Window',
                                '_blank' => 'New Window',
                                ),
                            'default'  => 'same',
                            'dependency' => array( 'on_click_t87', '==', 'custom_link' ),
                        ),


                        array(
                            'id'       => 'socio_platform_t87',
                            'type'     => 'checkbox',
                            'title'    => 'Social media link:',
                            'default'  =>'false',
                        ),
                           /* Sociallink Is Here */
                        array(
                            'id'       => 'twitter_uc_t87',
                            'type'     => 'text',
                            'title'    => 'Twitter:',
                            'help'  => '#',
                            'dependency' => array( 'socio_platform_t87', '==', 'true' ),
                        ),

                        array(
                            'id'       => 'facebook_uc_t87',
                            'type'     => 'text',
                            'title'    => 'Facebook:',
                            'help'  => '#',
                            'dependency' => array( 'socio_platform_t87', '==', 'true' ),     //team_87
                        ),

                        array(
                            'id'       => 'linked_in_uc_t87',
                            'type'     => 'text',
                            'title'    => 'Linked in:',
                            'help'  => '#',
                            'dependency' => array( 'socio_platform_t87', '==', 'true' ),
                        ),

                        array(
                            'id'       => 'skype_uc_t87',
                            'type'     => 'text',
                            'title'    => 'Skype:',
                            'help'  => '#',
                            'dependency' => array( 'socio_platform_t87', '==', 'true' ),
                        ),

                        array(
                            'id'       => 'google_uc_t87',
                            'type'     => 'text',
                            'title'    => 'Google Plus:',
                            'help'  => '#',
                            'dependency' => array( 'socio_platform_t87', '==', 'true' ),
                        ),

                        array(
                            'id'       => 'google_uc_t87',
                            'type'     => 'text',
                            'title'    => 'Google Plus:',
                            'help'  => '#',
                            'dependency' => array( 'socio_platform_t87', '==', 'true' ),
                        ),

                        array(
                            'id'       => 'youtube_uc_t87',
                            'type'     => 'text',
                            'title'    => 'Youtube Chanel:',
                            'help'  => '#',
                            'dependency' => array( 'socio_platform_t87', '==', 'true' ),
                        ),
                    ),

                ),
            array(
                    'id'              => 'group_option_88',
                    'type'            => 'group',
                    'title'           => '',
                    'dependency'   => array( 'slider_type|style', '==', 'team_style|team_088_mov'),
                    'button_title'    => 'Add New Slider Item',
                    'accordion_title' => 'Slider Item',
                    'fields'          => array(                                                         //team_88

                        array(
                            'id'    => 'image_t88',
                            'type'  => 'image',
                            'title' => 'Carousel Image',
                        ),


                        array(
                            'id'    => 'title_t88',
                            'type'  => 'text',
                            'title' => 'Team Member Name',
                            'default' => 'Name',

                        ),
                        array(
                            'id'    => 'desig_t88',
                            'type'  => 'text',
                            'title' => 'Designation',
                            'default' => 'CEO - Apple.Inc',

                        ),

                        array(
                            'id'    => 'desc_t88',
                            'type'  => 'textarea',
                            'title' => 'Some words',
                            'default' => 'Say something about',
                        ),

                        array(
                            'id'       => 'on_click_t88',
                            'type'     => 'select',
                            'title'    => 'On Click:',
                            'options'  => array(
                                'do_nothing'  => 'Do Nothing',
                                'custom_link'   => 'Custom Link',
                            ),
                            'default'  => 'do_nothing',
                        ),
                        array(
                            'id'    => 'image_link_t88',
                            'type'  => 'text',
                            'title' => 'Image Link',
                            'desc' => 'Insert custom URL including http://',
                            'dependency' => array( 'on_click_t88', '==', 'custom_link' ),
                        ),
                        array(
                            'id'       => 'open_link_t88',
                            'type'     => 'select',
                            'title'    => 'Open Link in:',
                            'options'  => array(
                                ''  => 'Same Window',
                                '_blank' => 'New Window',
                                ),
                            'default'  => 'same',
                            'dependency' => array( 'on_click_t88', '==', 'custom_link' ),        //team_88
                        ),


                        array(
                            'id'       => 'socio_platform_t88',
                            'type'     => 'checkbox',
                            'title'    => 'Social media link:',
                            'default'  =>'false',

                        ),
                           /* Sociallink Is Here */
                        array(
                            'id'       => 'twitter_uc_t88',
                            'type'     => 'text',
                            'title'    => 'Twitter:',
                            'help'  => '#',
                            'dependency' => array( 'socio_platform_t88', '==', 'true' ),
                        ),

                        array(
                            'id'       => 'facebook_uc_t88',
                            'type'     => 'text',
                            'title'    => 'Facebook:',
                            'help'  => '#',
                            'dependency' => array( 'socio_platform_t88', '==', 'true' ),
                        ),

                        array(
                            'id'       => 'linked_in_uc_t88',
                            'type'     => 'text',
                            'title'    => 'Linked in:',
                            'help'  => '#',
                            'dependency' => array( 'socio_platform_t88', '==', 'true' ),
                        ),

                        array(
                            'id'       => 'skype_uc_t88',
                            'type'     => 'text',
                            'title'    => 'Skype:',
                            'help'  => '#',
                            'dependency' => array( 'socio_platform_t88', '==', 'true' ),
                        ),

                        array(
                            'id'       => 'google_uc_t88',
                            'type'     => 'text',
                            'title'    => 'Google Plus:',
                            'help'  => '#',
                            'dependency' => array( 'socio_platform_t88', '==', 'true' ),
                        ),

                        array(
                            'id'       => 'google_uc_t88',
                            'type'     => 'text',
                            'title'    => 'Google Plus:',
                            'help'  => '#',
                            'dependency' => array( 'socio_platform_t88', '==', 'true' ),
                        ),

                        array(
                            'id'       => 'youtube_uc_t88',
                            'type'     => 'text',
                            'title'    => 'Youtube Chanel:',
                            'help'  => '#',
                            'dependency' => array( 'socio_platform_t88', '==', 'true' ),             //team_88
                        ),
                    ),

                ),
            array(
                    'id'              => 'group_option_89',
                    'type'            => 'group',
                    'title'           => '',
                    'dependency'   => array( 'slider_type|style', '==', 'team_style|team_089_mov'),          //team_89
                    'button_title'    => 'Add New Slider Item',
                    'accordion_title' => 'Slider Item',
                    'fields'          => array(

                        array(
                            'id'    => 'image_t89',
                            'type'  => 'image',
                            'title' => 'Carousel Image',
                        ),


                        array(
                            'id'    => 'title_t89',
                            'type'  => 'text',
                            'title' => 'Team Member Name',
                            'default' => 'Name',

                        ),
                        array(
                            'id'    => 'desig_t89',
                            'type'  => 'text',
                            'title' => 'Designation',
                            'default' => 'CEO - Apple.Inc',

                        ),

                        array(
                            'id'    => 'dept_t89',
                            'type'  => 'text',
                            'title' => 'Department',
                            'default' => 'HRM',

                        ),

                        array(
                            'id'       => 'on_click_t89',
                            'type'     => 'select',
                            'title'    => 'On Click:',

                            'options'  => array(
                                'do_nothing'  => 'Do Nothing',
                                'custom_link'   => 'Custom Link',
                            ),
                            'default'  => 'do_nothing',
                        ),
                        array(
                            'id'    => 'image_link_t89',
                            'type'  => 'text',
                            'title' => 'Image Link',
                            'desc' => 'Insert custom URL including http://',
                            'dependency' => array( 'on_click_t89', '==', 'custom_link' ),
                        ),
                        array(
                            'id'       => 'open_link_t89',
                            'type'     => 'select',
                            'title'    => 'Open Link in:',
                            'options'  => array(
                                ''  => 'Same Window',
                                '_blank' => 'New Window',
                                ),
                            'default'  => 'same',
                            'dependency' => array( 'on_click_t89', '==', 'custom_link' ),                    //team_89
                        ),


                        array(
                            'id'       => 'socio_platform_t89',
                            'type'     => 'checkbox',
                            'title'    => 'Social media link:',
                            'default'  =>'false',
                            //'dependency'   => array( 'style', '==', 'team_087_mov' ),
                        ),
                           /* Sociallink Is Here */
                        array(
                            'id'       => 'twitter_uc_t89',
                            'type'     => 'text',
                            'title'    => 'Twitter:',
                            'help'  => '#',
                            'dependency' => array( 'socio_platform_t89', '==', 'true' ),
                        ),

                        array(
                            'id'       => 'facebook_uc_t89',
                            'type'     => 'text',
                            'title'    => 'Facebook:',
                            'help'  => '#',
                            'dependency' => array( 'socio_platform_t89', '==', 'true' ),
                        ),

                        array(
                            'id'       => 'linked_in_uc_t89',
                            'type'     => 'text',
                            'title'    => 'Linked in:',
                            'help'  => '#',
                            'dependency' => array( 'socio_platform_t89', '==', 'true' ),
                        ),

                        array(
                            'id'       => 'skype_uc_t89',
                            'type'     => 'text',
                            'title'    => 'Skype:',
                            'help'  => '#',
                            'dependency' => array( 'socio_platform_t89', '==', 'true' ),
                        ),

                        array(
                            'id'       => 'google_uc_t89',
                            'type'     => 'text',
                            'title'    => 'Google Plus:',
                            'help'  => '#',
                            'dependency' => array( 'socio_platform_t89', '==', 'true' ),
                        ),

                        array(
                            'id'       => 'google_uc_t89',
                            'type'     => 'text',
                            'title'    => 'Google Plus:',
                            'help'  => '#',
                            'dependency' => array( 'socio_platform_t89', '==', 'true' ),
                        ),

                        array(
                            'id'       => 'youtube_uc_t89',
                            'type'     => 'text',
                            'title'    => 'Youtube Chanel:',                             //team_89
                            'help'  => '#',
                            'dependency' => array( 'socio_platform_t89', '==', 'true' ),
                        ),
                    ),


                ),

            array(
                    'id'              => 'group_option_90',
                    'type'            => 'group',
                    'title'           => '',
                    'dependency'   => array( 'slider_type|style', '==', 'team_style|team_090_mov'), //team_90
                    'button_title'    => 'Add New Slider Item',
                    'accordion_title' => 'Slider Item',
                    'fields'          => array(

                        array(
                            'id'    => 'image_t90',
                            'type'  => 'image',
                            'title' => 'Carousel Image',
                        ),


                        array(
                            'id'    => 'title_t90',
                            'type'  => 'text',
                            'title' => 'Team Member Name',
                            'default' => 'Name',
                        ),
                      /*  array(
                            'id'    => 'desig_t90',
                            'type'  => 'text',
                            'title' => 'Designation',
                            'default' => 'CEO - Apple.Inc',
                        ),*/

                        array(
                            'id'    => 'desig_t90',
                            'type'  => 'text',
                            'title' => 'Department',
                            'default' => 'HRM',
                        ),

                        array(
                            'id'       => 'on_click_t90',
                            'type'     => 'select',
                            'title'    => 'On Click:',
                            'options'  => array(
                                'do_nothing'  => 'Do Nothing',
                                'custom_link'   => 'Custom Link',
                            ),
                            'default'  => 'do_nothing',
                        ),
                        array(
                            'id'    => 'image_link_t90',
                            'type'  => 'text',
                            'title' => 'Image Link',
                            'desc' => 'Insert custom URL including http://',
                            'dependency' => array( 'on_click_t90', '==', 'custom_link' ),
                        ),
                        array(
                            'id'       => 'open_link_t90',
                            'type'     => 'select',
                            'title'    => 'Open Link in:',
                            'options'  => array(
                                ''  => 'Same Window',
                                '_blank' => 'New Window',
                                ),
                            'default'  => 'same',
                            'dependency' => array( 'on_click_t90', '==', 'custom_link' ),
                        ),


                        array(
                            'id'       => 'socio_platform_t90',
                            'type'     => 'checkbox',
                            'title'    => 'Social media link:',
                            'default'  =>'false',
                        ),
                           /* Sociallink Is Here */
                        array(
                            'id'       => 'twitter_uc_t90',
                            'type'     => 'text',
                            'title'    => 'Twitter:',
                            'help'  => '#',
                            'dependency' => array( 'socio_platform_t90', '==', 'true' ),
                        ),

                        array(
                            'id'       => 'facebook_uc_t90',
                            'type'     => 'text',
                            'title'    => 'Facebook:',
                            'help'  => '#',
                            'dependency' => array( 'socio_platform_t90', '==', 'true' ),
                        ),

                        array(
                            'id'       => 'linked_in_uc_t90',
                            'type'     => 'text',
                            'title'    => 'Linked in:',
                            'help'  => '#',
                            'dependency' => array( 'socio_platform_t90', '==', 'true' ),
                        ),

                        array(
                            'id'       => 'skype_uc_t90',
                            'type'     => 'text',
                            'title'    => 'Skype:',
                            'help'  => '#',
                            'dependency' => array( 'socio_platform_t90', '==', 'true' ),
                        ),

                        array(
                            'id'       => 'google_uc_t90',
                            'type'     => 'text',
                            'title'    => 'Google Plus:',
                            'help'  => '#',
                            'dependency' => array( 'socio_platform_t90', '==', 'true' ),
                        ),

                        array(
                            'id'       => 'google_uc_t90',
                            'type'     => 'text',
                            'title'    => 'Google Plus:',
                            'help'  => '#',
                            'dependency' => array( 'socio_platform_t90', '==', 'true' ),
                        ),

                        array(
                            'id'       => 'youtube_uc_t90',
                            'type'     => 'text',
                            'title'    => 'Youtube Chanel:',
                            'help'  => '#',
                            'dependency' => array( 'socio_platform_t90', '==', 'true' ),
                        ),
                    ),


                ),

                //  ******* TEstimonial Slider GroupsS all   *******
                //  ******* TEstimonial Slider GroupsS all   *******

                array(
                    'id'              => 'group_option_testi_91',
                    'type'            => 'group',
                    'title'           => '',
                    'dependency'   => array( 'slider_type|uc_testimonial_effect', '==', 'testimonial_slider|testimonial_091_mov'), //testi
                    'button_title'    => 'Add New Slider Item',
                    'accordion_title' => 'Slider Item',
                    'fields'          => array(

                        array(
                            'id'    => 'uc_image_testi91',
                            'type'  => 'image',
                            'title' => 'Carousel Imagezcas',
                        ),


                        array(
                            'id'    => 'uc_title_testi91',
                            'type'  => 'text',
                            'title' => 'Customer Name',
                            'default' => 'Customer X',

                        ),
                        array(
                            'id'    => 'uc_desig_testi91',
                            'type'  => 'text',
                            'title' => 'Designation',
                            'default' => 'CEO - Apple.Inc',

                        ),
                        array(
                            'id'    => 'uc_desc_testi91',
                            'type'  => 'text',
                            'title' => 'Description',
                            'default' => 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..',

                        ),
                        array(
                            'id'       => 'uc_on_click_testi91',
                            'type'     => 'select',
                            'title'    => 'On Click:',

                            'options'  => array(
                                'do_nothing'  => 'Do Nothing',
                                'custom_link'   => 'Custom Link',
                            ),
                            'default'  => 'do_nothing',
                        ),
                        array(
                            'id'    => 'uc_extra_link_t91',
                            'type'  => 'text',
                            'title' => 'Image Link',
                            'desc' => 'Insert custom URL including http://',
                            'dependency' => array( 'uc_on_click_testi91', '==', 'custom_link' ),
                        ),
                        array(
                            'id'       => 'uc_open_link_t91',
                            'type'     => 'select',
                            'title'    => 'Open Link in:',
                            'options'  => array(
                                ''  => 'Same Window',
                                '_blank' => 'New Window',
                                ),
                            'default'  => 'same',
                            'dependency' => array( 'uc_on_click_testi91', '==', 'custom_link' ),                    //team_89
                        ),


                    ),


                ),// Group end

                                //  ******* Video Slider Groups all   *******

                array(
                    'id'              => 'group_option_vid_back',
                    'type'            => 'group',
                    'title'           => '',
                    'dependency'   => array( 'slider_type|video_background_style', '==', 'uc_video_slider|video_096'), //Video 1
                    'button_title'    => 'Add New Slider Item',
                    'accordion_title' => 'Slider Item',
                    'fields'          => array(

                        array(
                            'id'    => 'uc_image_vid_back',
                            'type'  => 'image',
                            'title' => 'Image',
                        ),

                        array(
                            'id'    => 'uc_video_link',
                            'type'  => 'text',
                            'title' => 'Video Link',
                            'default' => 'http://localhost/ultimate/wp-content/uploads/2018/09/No-Copyright-Video-Drone-City-Footage-Royalty-Free-Video.mp4',
                            'desc' => 'Check https://  is included',
                        ),
                        array(
                            'id'    => 'uc_video_back_header',
                            'type'  => 'text',
                            'title' => 'Video Header',
                            'default' => 'welcome to the Haritage',

                        ),
                        array(
                            'id'    => 'uc_video_back_sub_header',
                            'type'  => 'text',
                            'title' => 'Sub Header Text',
                            'default' => 'we believe in consistency and hard working',

                        ),
                        array(
                            'id'    => 'uc_video_back_desc',
                            'type'  => 'text',
                            'title' => 'Desccription Text',
                            'default' => 'Lorem ipsum dolor sitamet onsectetuer adipiscing elit ibharius facilisis erosanin velit quisarcu ornare laoreet commodo.',

                        ),
                        array(
                            'id'    => 'uc_video_back_btn',
                            'type'  => 'text',
                            'title' => 'Button Text',
                            'default' => 'Button',
                        ),
                        array(
                            'id'       => 'uc_on_click_video_back',
                            'type'     => 'select',
                            'title'    => 'On Click:',

                            'options'  => array(
                                'do_nothing'  => 'Do Nothing',
                                'custom_link'   => 'Custom Link',
                            ),
                            'default'  => 'do_nothing',
                        ),
                        array(
                            'id'    => 'uc_extra_video_back',
                            'type'  => 'text',
                            'title' => 'Image Link',
                            'desc' => 'Insert custom URL including http://',
                            'dependency' => array( 'uc_on_click_video_back', '==', 'custom_link' ),
                        ),
                        array(
                            'id'       => 'uc_open_video_back',
                            'type'     => 'select',
                            'title'    => 'Open Link in:',
                            'options'  => array(
                                ''  => 'Same Window',
                                '_blank' => 'New Window',
                                ),
                            'default'  => 'same',
                            'dependency' => array( 'uc_on_click_video_back', '==', 'custom_link' ),                    //team_89
                        ),


                    ),


                ),// Group end
                array(
                    'id'              => 'group_option_vid_back2',
                    'type'            => 'group',
                    'title'           => '',
                    'dependency'   => array( 'slider_type|video_background_style', 'any', 'uc_video_slider|video_097,video_098'), //Video 1
                    'button_title'    => 'Add New Slider Item',
                    'accordion_title' => 'Slider Item',
                    'fields'          => array(

                        array(
                            'id'    => 'uc_image_vid_back2',
                            'type'  => 'image',
                            'title' => 'Image',
                        ),


                        array(
                            'id'    => 'uc_video_link2',
                            'type'  => 'text',
                            'title' => 'Video Id',
                            'default' => 'MDvmWI6PFCs',
                            'after' => 'Get you youtube video Id. To learn about ID <a href="https://www.youtube.com/watch?v=liJVSwOiiwg" target="_blank">Click Here</a>',

                        ),



                        array(
                            'id'    => 'uc_video_back_header2',
                            'type'  => 'text',
                            'title' => 'Video Header',
                            'default' => 'This is a Video',
                        ),



                    ),


                ),// Group end


                array(
                    'id'              => 'group_option_vid_99',
                    'type'            => 'group',
                    'title'           => '',
                    'dependency'   => array( 'slider_type|video_background_style', '==', 'uc_video_slider|video_099'), //Video 1
                    'button_title'    => 'Add New Slider Item',
                    'accordion_title' => 'Slider Item',
                    'fields'          => array(

                        array(
                            'id'    => 'uc_image_vid_99',
                            'type'  => 'image',
                            'title' => 'Section Background Image',
                        ),
                        array(
                            'id'       => 'uc_video_type_99',
                            'type'     => 'select',
                            'title'    => 'On Click:',

                            'options'  => array(
                                'youtube_vimeo'  => 'Youtube/Vimeo',
                                'self'   => 'Self-Hosted',
                            ),
                            'default'  => 'youtube',
                        ),
                        array(
                            'id'    => 'uc_video_link_99_y',
                            'type'  => 'text',
                            'title' => 'Video Link',
                            'default' => 'http://localhost/ultimate/wp-content/uploads/2018/09/No-Copyright-Video-Drone-City-Footage-Royalty-Free-Video.mp4',
                            'after' => 'Check https://  is included',
                            'dependency' => array( 'uc_video_type_99', '==', 'self' ),
                        ),

                        array(
                            'id'    => 'uc_video_link_99',
                            'type'  => 'text',
                            'title' => 'Video ID',
                            'default' => 'MDvmWI6PFCs',
                            'after' => 'To learn More about Video ID <a href="https://www.youtube.com/watch?v=liJVSwOiiwg" target="_blank">Click Here</a>',
                            'dependency' => array( 'uc_video_type_99', '==', 'youtube_vimeo' ),
                        ),
                        array(
                            'id'    => 'uc_video_99_header',
                            'type'  => 'text',
                            'title' => 'Heading',
                            'default' => 'welcome to the Haritage',

                        ),

                        array(
                            'id'    => 'uc_video_99_desc',
                            'type'  => 'text',
                            'title' => 'Desccription Text',
                            'default' => 'Lorem ipsum dolor sitamet onsectetuer adipiscing elit ibharius facilisis erosanin velit quisarcu ornare laoreet commodo.',

                        ),
                        array(
                            'id'    => 'uc_video_99_sub_header',
                            'type'  => 'text',
                            'title' => 'Video Title',
                            'default' => 'Video Title',

                        ),
                        array(
                            'id'    => 'uc_video_99_btn',
                            'type'  => 'text',
                            'title' => 'Button Text',
                            'default' => 'Button',
                        ),
                        array(
                            'id'       => 'uc_on_click_video_99',
                            'type'     => 'select',
                            'title'    => 'On Click:',

                            'options'  => array(
                                'do_nothing'  => 'Do Nothing',
                                'custom_link'   => 'Custom Link',
                            ),
                            'default'  => 'do_nothing',
                        ),
                        array(
                            'id'    => 'uc_extra_video_99',
                            'type'  => 'text',
                            'title' => 'Image Link',
                            'desc' => 'Insert custom URL including http://',
                            'dependency' => array( 'uc_on_click_video_99', '==', 'custom_link' ),
                        ),
                        array(
                            'id'       => 'uc_open_video_99',
                            'type'     => 'select',
                            'title'    => 'Open Link in:',
                            'options'  => array(
                                ''  => 'Same Window',
                                '_blank' => 'New Window',
                                ),
                            'default'  => 'same',
                            'dependency' => array( 'uc_on_click_video_99', '==', 'custom_link' ),                    //team_89
                        ),


                    ),


                ),// Group end


            ), // end: fields
        ), // end: a section






        // begin: a section
        array(
            'name'  => 'typography',
            'title' => 'Typography',
            'icon'  => 'fa fa-font',

            // begin: fields
            'fields' => array(

                        array(
                        'id'        => 'options_fullwidth_typography',
                        'type'      => 'fieldset',
                        'title'     => 'Options',
                        'dependency' => array( 'slider_type', 'any', 'fullwidht_layer'  ),
                        'fields'    => array(


                        array(
                            'id'        => 'uc_heading_font',
                            'type'      => 'typography',
                            'title'     => 'Slider Header Font',
                            'default'   => array(
                                'family'  => 'Open Sans',
                                'variant' => '800',
                                'font'    => 'google', // this is helper for output
                            ),

                        ),
                        array(
                            'id'        => 'uc_heading_font_size',
                            'type'      => 'number',
                            'title'     => 'Slider Header Font Size',
                            'default'   =>'',
                            'desc'   =>'Default is px',


                        ),
                        array(
                            'id'        => 'uc_heading_font_style',
                            'type'      => 'select',
                            'title'     => 'Slider Header Font Style',
                            'options'        => array(
                                    ''          => 'Normal',
                                    'italic'     => 'Italic',
    ),

                        ),

                        array(
                            'id'        => 'uc_sub_heading_font',
                            'type'      => 'typography',
                            'title'     => 'Slider Sub-Header Font',
                            'default'   => array(
                                'family'  => 'Open Sans',
                                'variant' => '800',
                                'font'    => 'google', // this is helper for output
                            ),
                            'dependency'   => array( 'style_fullwidth', 'any', 'fw_al_001,fw_al_006,fw_al_007,fw_al_008,fw_al_009,fw_al_010,fw_il_011'),
                        ),
                        array(
                            'id'        => 'uc_sub_heading_font_size',
                            'type'      => 'number',
                            'title'     => 'Slider Sub-Header Font Size',
                            'default'   =>'',
                            'desc'   =>'Default is px',
                            'dependency'   => array( 'style_fullwidth', 'any', 'fw_al_001,fw_al_006,fw_al_007,fw_al_008,fw_al_009,fw_al_010,fw_il_011'),


                        ),



                        array(
                            'id'        => 'uc_sub_heading_font_style',
                            'type'      => 'select',
                            'title'     => 'Slider Sub-Header Font Style',
                            'options'        => array(
                                    ''          => 'Normal',
                                    'italic'     => 'Italic',
                                    ),
                            'dependency'   => array( 'style_fullwidth', 'any', 'fw_al_001,fw_al_006,fw_al_007,fw_al_008,fw_al_009,fw_al_010,fw_il_011'),
                        ),

                        array(
                            'id'        => 'uc_desc_font',
                            'type'      => 'typography',
                            'title'     => 'Description Font',
                            'default'   => array(
                                'family'  => 'Open Sans',
                                'variant' => '800',
                                'font'    => 'google', // this is helper for output
                            ),
                            'dependency'   => array( 'style_fullwidth', 'any', 'fw_al_001,fw_al_002,fw_al_003,fw_al_004,fw_al_005,fw_al_006,fw_al_007,fw_al_008,fw_al_009,fw_al_010,fw_il_011,fw_il_014,fw_il_015,fw_il_016,fw_il_019'),

                        ),
                        array(
                            'id'        => 'uc_desc_font_size',
                            'type'      => 'number',
                            'title'     => 'Description Font Size',
                            'default'   =>'',
                            'desc'   =>'Default is px',
                            'dependency'   => array( 'style_fullwidth', 'any', 'fw_al_001,fw_al_002,fw_al_003,fw_al_004,fw_al_005,fw_al_006,fw_al_007,fw_al_008,fw_al_009,fw_al_010,fw_il_011,fw_il_014,fw_il_015,fw_il_016,fw_il_019'),


                        ),
                        array(
                            'id'        => 'uc_desc_font_style',
                            'type'      => 'select',
                            'title'     => 'Description Font Style',
                            'options'        => array(
                                    ''          => 'Normal',
                                    'italic'     => 'Italic',
                                ),
                            'dependency'   => array( 'style_fullwidth', 'any', 'fw_al_001,fw_al_002,fw_al_003,fw_al_004,fw_al_005,fw_al_006,fw_al_007,fw_al_008,fw_al_009,fw_al_010,fw_il_011,fw_il_014,fw_il_015,fw_il_016,fw_il_019'),
                        ),

                        array(
                            'id'        => 'uc_btn_font_size',
                            'type'      => 'text',
                            'title'     => 'Button Font Size',
                            'default'        => '13',
                            'after'        => 'px',

                        ),
                        array(
                            'id'        => 'uc_button_border_width',
                            'type'      => 'text',
                            'title'     => 'Button Border Width',
                            'default'        => '2',
                            'after'        => 'px',

                        ),
                        array(
                            'id'        => 'uc_button_padding_top',
                            'type'      => 'text',
                            'title'     => 'Button Padding Top/Bottom',
                            'default'        => '10',
                            'after'        => 'px',

                        ),
                        array(
                            'id'        => 'uc_button_padding_left',
                            'type'      => 'text',
                            'title'     => 'Button Padding Left/Right',
                            'default'        => '20',
                            'after'        => 'px',

                        ),
                     ),
                    ),  //End of a field set
                    array(
                        'id'        => 'options_team_typogrphy',
                        'type'      => 'fieldset',
                        'title'     => 'Options',
                        'dependency' => array( 'slider_type', '==', 'team_style'  ),
                        'fields'    => array(

                                            array(
                                                'id'        => 'uc_team_section_head_font',
                                                'type'      => 'typography',
                                                'title'     => 'Section Header',
                                                'default'   => array(
                                                    'family'  => 'Open Sans',
                                                    'variant' => '800',
                                                    'font'    => 'google', // this is helper for output
                                                ),

                                            ),
                                            array(
                                                'id'        => 'uc_team_section_head_size',
                                                'type'      => 'number',
                                                'title'     => 'Section Header Font Size',
                                                'default'   =>'',
                                                'desc'   =>'Default is px',


                                            ),
                                            array(
                                                'id'        => 'uc_team_section_head_style',
                                                'type'      => 'select',
                                                'title'     => 'Section Header Font Style',
                                                'options'        => array(
                                                        ''          => 'Normal',
                                                        'italic'     => 'Italic',
                                                        ),

                                            ),

                                            array(
                                                'id'        => 'uc_team_name_font',
                                                'type'      => 'typography',
                                                'title'     => 'Name Font',
                                                'default'   => array(
                                                    'family'  => 'Open Sans',
                                                    'variant' => '800',
                                                    'font'    => 'google', // this is helper for output
                                                ),

                                            ),
                                            array(
                                                'id'        => 'uc_team_name_font_size',
                                                'type'      => 'number',
                                                'title'     => 'Name Font Size',
                                                'default'   =>'',
                                                'desc'   =>'Default is px',


                                            ),
                                            array(
                                                'id'        => 'uc_team_name_font_style',
                                                'type'      => 'select',
                                                'title'     => 'Name Font Style',
                                                'options'        => array(
                                                        ''          => 'Normal',
                                                        'italic'     => 'Italic',
                                                        ),

                                            ),


                                            array(
                                                'id'        => 'uc_team_desig_font',
                                                'type'      => 'typography',
                                                'title'     => 'Designation Font',
                                                'default'   => array(
                                                    'family'  => 'Open Sans',
                                                    'variant' => '800',
                                                    'font'    => 'google', // this is helper for output
                                                ),

                                            ),
                                            array(
                                                'id'        => 'uc_team_desig_font_size',
                                                'type'      => 'number',
                                                'title'     => 'Designation Font Size',
                                                'default'   =>'',
                                                'desc'   =>'Default is px',


                                            ),
                                            array(
                                                'id'        => 'uc_team_desig_font_style',
                                                'type'      => 'select',
                                                'title'     => 'Designation Font Style',
                                                'options'        => array(
                                                        ''          => 'Normal',
                                                        'italic'     => 'Italic',
                                                        ),

                                            ),
                                            array(
                                                'id'        => 'uc_team_dept_font',
                                                'type'      => 'typography',
                                                'title'     => 'Department/Description Font',
                                                'default'   => array(
                                                    'family'  => 'Open Sans',
                                                    'variant' => '800',
                                                    'font'    => 'google', // this is helper for output
                                                ),
                                                'dependency'   => array( 'style', 'any', 'team_087_mov,team_088_mov,team_089_mov'),

                                            ),
                                            array(
                                                'id'        => 'uc_team_dept_font_size',
                                                'type'      => 'number',
                                                'title'     => 'Department/Description Font Size',
                                                'default'   =>'',
                                                'desc'   =>'Default is px',
                                                'dependency'   => array( 'style', 'any', 'team_087_mov,team_088_mov,team_089_mov'),

                                            ),
                                            array(
                                                'id'        => 'uc_team_dept_font_style',
                                                'type'      => 'select',
                                                'title'     => 'Department/Desc Font Style',
                                                'options'        => array(
                                                        ''          => 'Normal',
                                                        'italic'     => 'Italic',
                                                        ),
                                                'dependency'   => array( 'style', 'any', 'team_087_mov,team_088_mov,team_089_mov'),
                                            ),



                                            array(
                                                'id'        => 'uc_team_socil_font_size',
                                                'type'      => 'text',
                                                'title'     => 'Social Icon Size',
                                                'default'        => '12',
                                                'after'        => 'px',
                                                'dependency'   => array( 'style', 'any', 'team_087_mov,team_088_mov,team_089_mov,team_090_mov,'),

                                            ),

                     ),
                    ),  //End of a field set

                       array(
                        'id'        => 'options_subscribe_typogrphy',
                        'type'      => 'fieldset',
                        'title'     => 'Options',
                        'dependency' => array( 'slider_type', 'any', 'uc_coming_soon,testimonial_slider'  ),
                        'fields'    => array(

                                            array(
                                                'id'        => 'uc_section_head_font',
                                                'type'      => 'typography',
                                                'title'     => 'Title/ HeadlineFont',
                                                'default'   => array(
                                                    'family'  => 'Open Sans',
                                                    'variant' => '800',
                                                    'font'    => 'google', // this is helper for output
                                                ),
                                                'dependency' => array( 'slider_type', 'any', 'uc_coming_soon,testimonial_slider'  ),

                                            ),

                                            array(
                                                'id'        => 'uc_section_head_font_size',
                                                'type'      => 'number',
                                                'title'     => 'Title/ Headline Font Size',
                                                'default'   =>'',
                                                'desc'   =>'Default is px',
                                                'dependency' => array( 'slider_type', 'any', 'uc_coming_soon,testimonial_slider'  ),


                                            ),
                                            array(
                                                'id'        => 'uc_section_head_font_style',
                                                'type'      => 'select',
                                                'title'     => 'Title/ Headline Font Style',
                                                'options'        => array(
                                                        ''          => 'Normal',
                                                        'italic'     => 'Italic',
                                                        ),
                                                'dependency' => array( 'slider_type', 'any', 'uc_coming_soon,testimonial_slider'  ),

                                            ),

                                            array(
                                                'id'        => 'uc_section_promo_text',
                                                'type'      => 'typography',
                                                'title'     => 'Section Promo Text Font',
                                                'default'   => array(
                                                    'family'  => 'Open Sans',
                                                    'variant' => '800',
                                                    'font'    => 'google', // this is helper for output
                                                ),
                                                 'dependency' => array( 'slider_type', 'any', 'uc_coming_soon'  ),

                                            ),
                                            array(
                                                'id'        => 'uc_section_promo_text_size',
                                                'type'      => 'number',
                                                'title'     => 'Section Promo Text Size',
                                                'default'   =>'',
                                                'desc'   =>'Default is px',
                                                 'dependency' => array( 'slider_type', 'any', 'uc_coming_soon'  ),


                                            ),
                                            array(
                                                'id'        => 'uc_section_promo_text_style',
                                                'type'      => 'select',
                                                'title'     => 'Section Promo Text Style',
                                                'options'        => array(
                                                        ''          => 'Normal',
                                                        'italic'     => 'Italic',
                                                        ),
                                                 'dependency' => array( 'slider_type', 'any', 'uc_coming_soon'  ),

                                            ),

                     ),
                    ), //End of field set

                       array(
                        'id'        => 'uc_options_video_colors',
                        'type'      => 'fieldset',
                        'title'     => 'Options',
                        'dependency' => array( 'slider_type', '==', 'uc_video_slider'),
                        'fields'    => array(

                                            array(
                                                'id'        => 'uc_video_heading',
                                                'type'      => 'typography',
                                                'title'     => 'Title / HeadlineFont',
                                                'default'   => array(
                                                    'family'  => 'Open Sans',
                                                    'variant' => '800',
                                                    'font'    => 'google', // this is helper for output
                                                ),
                                            ),

                                            array(
                                                'id'        => 'uc_video_heading_siz',
                                                'type'      => 'number',
                                                'title'     => 'Title/ Headline Font Size',
                                                'default'   =>'',
                                                'desc'   =>'Default is px',


                                            ),
                                            array(
                                                'id'        => 'uc_video_heading_style',
                                                'type'      => 'select',
                                                'title'     => 'Title/ Headline Font Style',
                                                'options'        => array(
                                                        ''          => 'Normal',
                                                        'italic'     => 'Italic',
                                                        ),

                                            ),

                                            array(
                                                'id'        => 'uc_video_sub_text',
                                                'type'      => 'typography',
                                                'title'     => 'Subheading Font',
                                                'default'   => array(
                                                    'family'  => 'Open Sans',
                                                    'variant' => '800',
                                                    'font'    => 'google', // this is helper for output
                                                ),
                                                'dependency' => array( 'video_background_style', 'any', 'video_096,video_099'),

                                            ),
                                            array(
                                                'id'        => 'uc_video_sub_size',
                                                'type'      => 'number',
                                                'title'     => 'Sub Heading Font Size',
                                                'default'   =>'',
                                                'after'   =>'px',
                                                'dependency' => array( 'video_background_style', 'any', 'video_096,video_099'),


                                            ),
                                            array(
                                                'id'        => 'uc_video_sub_style',
                                                'type'      => 'select',
                                                'title'     => 'Sub Heading Font Style',
                                                'options'        => array(
                                                        ''          => 'Normal',
                                                        'italic'     => 'Italic',
                                                        ),
                                            'dependency' => array( 'video_background_style', 'any', 'video_096,video_099'),

                                            ),
                                            array(
                                                'id'        => 'uc_video_desc_text',
                                                'type'      => 'typography',
                                                'title'     => 'Description Text Font',
                                                'default'   => array(
                                                    'family'  => 'Open Sans',
                                                    'variant' => '800',
                                                    'font'    => 'google', // this is helper for output
                                                ),
                                                'dependency' => array( 'video_background_style', 'any', 'video_096,video_099'),

                                            ),
                                            array(
                                                'id'        => 'uc_video_desc_size',
                                                'type'      => 'number',
                                                'title'     => 'Description Text Size',
                                                'default'   =>'',
                                                'desc'   =>'Default is px',
                                                'dependency' => array( 'video_background_style', 'any', 'video_096,video_099'),
                                            ),

                                            array(
                                                'id'        => 'uc_video_desc_style',
                                                'type'      => 'select',
                                                'title'     => 'Description Text Style',
                                                'options'        => array(
                                                        ''          => 'Normal',
                                                        'italic'     => 'Italic',
                                                        ),
                                                'dependency' => array( 'video_background_style', 'any', 'video_096,video_099'),

                                            ),





                     ),
                    ), //End of field set
                    array(
                        'id'        => 'uc_options_list_fw',
                        'type'      => 'fieldset',
                        'title'     => 'Options',
                        'dependency' => array( 'slider_type', '==','uc_list_fullwidth'  ),
                        'fields'    => array(

                                            array(
                                                'id'        => 'uc_listfw_head_text',
                                                'type'      => 'typography',
                                                'title'     => 'Title / HeadlineFont',
                                                'default'   => array(
                                                    'family'  => 'Open Sans',
                                                    'variant' => '800',
                                                    'font'    => 'google', // this is helper for output
                                                ),
                                            ),

                                            array(
                                                'id'        => 'uc_listfw_heading_siz',
                                                'type'      => 'number',
                                                'title'     => 'Title/ Headline Font Size',
                                                'default'   =>'',
                                                'desc'   =>'Default is px',


                                            ),
                                            array(
                                                'id'        => 'uc_listfw_heading_style',
                                                'type'      => 'select',
                                                'title'     => 'Title/ Headline Font Style',
                                                'options'        => array(
                                                        ''          => 'Normal',
                                                        'italic'     => 'Italic',
                                                        ),

                                            ),


                                            array(
                                                'id'        => 'uc_listfw_serv_text',
                                                'type'      => 'typography',
                                                'title'     => 'Services Text Font',
                                                'default'   => array(
                                                    'family'  => 'Open Sans',
                                                    'variant' => '800',
                                                    'font'    => 'google', // this is helper for output
                                                ),

                                            ),
                                            array(
                                                'id'        => 'uc_listfw_serv_size',
                                                'type'      => 'number',
                                                'title'     => 'Services Text Size',
                                                'default'   =>'',
                                                'desc'   =>'Default is px',
                                            ),

                                            array(
                                                'id'        => 'uc_listfw_serv_style',
                                                'type'      => 'select',
                                                'title'     => 'Services Text Style',
                                                'options'        => array(
                                                        ''          => 'Normal',
                                                        'italic'     => 'Italic',
                                                        ),

                                            ),
                                            array(
                                                'id'        => 'uc_listfw_btn_siz',
                                                'type'      => 'text',
                                                'title'     => 'Button Font Size',
                                                'default'        => '14',
                                                'after'        => 'px',

                                            ),

                                            array(
                                                'id'        => 'uc_listfw_btn_brdrs',
                                                'type'      => 'text',
                                                'title'     => 'Button Border Width',
                                                'default'        => '0',
                                                'after'        => 'px',
                                            ),
                                            array(
                                                'id'        => 'uc_listfw_btn_wid',
                                                'type'      => 'text',
                                                'title'     => 'Button Border Width',
                                                'default'        => '60',
                                                'after'        => 'px',
                                            ),



                     ),
                    ), //End of field set
                        array(
                        'id'        => 'uc_options_testi_typogrphy',
                        'type'      => 'fieldset',
                        'title'     => 'Options',
                        'dependency' => array( 'slider_type', '==', 'testimonial_slider'  ),
                        'fields'    => array(

                                            array(
                                                'id'        => 'uc_testi_font',
                                                'type'      => 'typography',
                                                'title'     => 'Title Font',
                                                'default'   => array(
                                                    'family'  => 'Open Sans',
                                                    'variant' => '800',
                                                    'font'    => 'google', // this is helper for output
                                                ),

                                            ),
                                            array(
                                                'id'        => 'uc_testi_font_size',
                                                'type'      => 'number',
                                                'title'     => 'Title Font Size',
                                                'default'   =>'',
                                                'desc'   =>'Default is px',


                                            ),
                                            array(
                                                'id'        => 'uc_testi_font_style',
                                                'type'      => 'select',
                                                'title'     => 'Title Font Style',
                                                'options'        => array(
                                                        ''          => 'Normal',
                                                        'italic'     => 'Italic',
                                                        ),

                                            ),

                                            array(
                                                'id'        => 'uc_testi_desig_font',
                                                'type'      => 'typography',
                                                'title'     => 'Designation Text Font',
                                                'default'   => array(
                                                    'family'  => 'Open Sans',
                                                    'variant' => '800',
                                                    'font'    => 'google', // this is helper for output
                                                ),

                                            ),
                                            array(
                                                'id'        => 'uc_testi_desig_font_size',
                                                'type'      => 'number',
                                                'title'     => 'Designation Text Size',
                                                'default'   =>'',
                                                'desc'   =>'Default is px',


                                            ),
                                            array(
                                                'id'        => 'uc_testi_desig_font_style',
                                                'type'      => 'select',
                                                'title'     => 'Designation Text Style',
                                                'options'        => array(
                                                        ''          => 'Normal',
                                                        'italic'     => 'Italic',
                                                        ),

                                            ),

                                            array(
                                                'id'        => 'uc_testi_desc_font',
                                                'type'      => 'typography',
                                                'title'     => 'Description Text Font',
                                                'default'   => array(
                                                    'family'  => 'Open Sans',
                                                    'variant' => '800',
                                                    'font'    => 'google', // this is helper for output
                                                ),

                                            ),
                                            array(
                                                'id'        => 'uc_testi_desc_font_size',
                                                'type'      => 'number',
                                                'title'     => 'Description Text Size',
                                                'default'   =>'',
                                                'desc'   =>'Default is px',


                                            ),
                                            array(
                                                'id'        => 'uc_testi_desc_font_style',
                                                'type'      => 'select',
                                                'title'     => 'Description Text Style',
                                                'options'        => array(
                                                        ''          => 'Normal',
                                                        'italic'     => 'Italic',
                                                        ),

                                            ),
                     ),
                    ), //End of field set

                    array(
                        'id'        => 'uc_typo_kenburns_opt',
                        'type'      => 'fieldset',
                        'title'     => 'Options',
                        'dependency' => array( 'slider_type', 'any', 'uc_kenburns_fw'  ),
                        'fields'    => array(


                        array(
                            'id'        => 'uc_headeing_ken',
                            'type'      => 'typography',
                            'title'     => 'Slider Heading Font',
                            'default'   => array(
                                'family'  => 'Open Sans',
                                'variant' => '800',
                                'font'    => 'google', // this is helper for output
                            ),

                        ),
                        array(
                            'id'        => 'uc_headeing_ken_size',
                            'type'      => 'number',
                            'title'     => 'Slider Heading Font Size',
                            'default'   =>'',
                            'desc'   =>'Default is px',


                        ),
                        array(
                            'id'        => 'uc_headeing_ken_style',
                            'type'      => 'select',
                            'title'     => 'Slider Heading Font Style',
                            'options'        => array(
                                    ''          => 'Normal',
                                    'italic'     => 'Italic',
    ),

                        ),
                        array(
                            'id'        => 'uc_headeing_ken_brdr',
                            'type'      => 'text',
                            'title'     => 'Slider Heading Border Width',
                            'default'     => '6',
                            'after'     => 'px',
                            'dependency' => array( 'uc_kenburns_style', 'any', 'kenburns_062'  ),
                        ),
                        array(
                            'id'        => 'uc_sub_head_ken_font',
                            'type'      => 'typography',
                            'title'     => 'Slider Sub-Header Font',
                            'default'   => array(
                                'family'  => 'Open Sans',
                                'variant' => '800',
                                'font'    => 'google', // this is helper for output
                            ),
                            'dependency' => array( 'uc_kenburns_style', 'any', 'kenburns_061,kenburns_064'  ),
                        ),
                        array(
                            'id'        => 'uc_sub_head_ken_size',
                            'type'      => 'number',
                            'title'     => 'Slider Sub-Header Font Size',
                            'default'   =>'',
                            'desc'   =>'Default is px',
                            'dependency' => array( 'uc_kenburns_style', 'any', 'kenburns_061,kenburns_064'  ),

                        ),
                        array(
                            'id'        => 'uc_sub_head_ken_style',
                            'type'      => 'select',
                            'title'     => 'Slider Sub-Header Font Style',
                            'options'        => array(
                                    ''          => 'Normal',
                                    'italic'     => 'Italic',
                                    ),
                           'dependency' => array( 'uc_kenburns_style', 'any', 'kenburns_061,kenburns_064'  ),
                        ),

                        array(
                            'id'        => 'uc_desc_ken_font',
                            'type'      => 'typography',
                            'title'     => 'Description Font',
                            'default'   => array(
                                'family'  => 'Open Sans',
                                'variant' => '800',
                                'font'    => 'google', // this is helper for output
                            ),

                        ),
                        array(
                            'id'        => 'uc_desc_ken_size',
                            'type'      => 'number',
                            'title'     => 'Description Font Size',
                            'default'   =>'',
                            'desc'   =>'Default is px',


                        ),
                        array(
                            'id'        => 'uc_desc_ken_style',
                            'type'      => 'select',
                            'title'     => 'Description Font Style',
                            'options'        => array(
                                    ''          => 'Normal',
                                    'italic'     => 'Italic',
                                ),
                        ),
                        array(
                            'id'        => 'uc_btn_wid_ken',
                            'type'      => 'text',
                            'title'     => 'Button Width',
                            'default'        => '20',
                            'after'        => '%',

                        ),
                        array(
                            'id'        => 'uc_btn_brdr_wid_ken',
                            'type'      => 'text',
                            'title'     => 'Button Border Width',
                            'default'        => '2',
                            'after'        => 'px',

                        ),
                     ),
                    ),  //End of a field set
            ), // end: fields
        ), // end: a section
            array(
            'name'  => 'heightnwidth',
            'title' => 'Height And Width',
            'icon'  => 'fa fa-th',

            // begin: fields
            'fields' => array(

                    array(
                                'id'        => 'options_fuulwidth_height',
                                'type'      => 'fieldset',
                                'title'     => 'Fieldset Field',
                                'dependency' => array( 'slider_type', 'any', 'fullwidht_layer'  ),
                                'fields'    => array(


                                            array(
                                                'id'       => 'uc_custom_image_height',
                                                'type'     => 'number',
                                                'title'    => 'Image Height:',
                                                'default'  => '100%',
                                                'after'  => 'px',

                                            ),
                                            array(
                                                'id'       => 'uc_custom_image_width',
                                                'type'     => 'number',
                                                'title'    => 'Image Width:',
                                                'default'  => '100%',
                                                'after'  => 'px',

                                            ),

                                            array(
                                                'id'       => 'uc_img_responsive_enable',
                                                'type'     => 'checkbox',
                                                'title'    => 'Image height for defferent screen size',
                                                'default'  => 'false',
                                                'after'  => 'To have different Image height in Mobile/Tablet/Laptop/',

                                            ),
                                            array(
                                                'id'       => 'uc_responsive_480_ht',
                                                'type'     => 'number',
                                                'title'    => 'Image Width:',
                                                'default'  => '300',
                                                'after'  => 'px (Mobile Portrait)',
                                                'bottom'  => 'nakjcdsanc',
                                                'dependency' => array( 'uc_img_responsive_enable', '==', 'true' ),

                                            ),
                                            array(
                                                'id'       => 'uc_responsive_600_ht',
                                                'type'     => 'number',
                                                'title'    => 'Image Width:',
                                                'default'  => '350',
                                                'after'  => 'px (Mobile Landscape)',
                                                'dependency' => array( 'uc_img_responsive_enable', '==', 'true' ),

                                            ),
                                            array(
                                                'id'       => 'uc_responsive_767_ht',
                                                'type'     => 'number',
                                                'title'    => 'Image Width:',
                                                'default'  => '350',
                                                'after'  => 'px (Mobile Landscape Wide)',
                                                'dependency' => array( 'uc_img_responsive_enable', '==', 'true' ),

                                            ),
                                            array(
                                                'id'       => 'uc_responsive_991_ht',
                                                'type'     => 'number',
                                                'title'    => 'Image Width:',
                                                'default'  => '400',
                                                'after'  => 'px  (Tab)',
                                                'dependency' => array( 'uc_img_responsive_enable', '==', 'true' ),

                                            ),

                                            array(
                                                'id'       => 'uc_text_box_width',
                                                'type'     => 'number',
                                                'title'    => 'Slider Text Box Width:',
                                                'default'  => '50%',
                                                'after'  => '%',
                                            ),
                                        ),
                    ),//end of a fieldset
                    array(
                                'id'        => 'options_fuulwidth_height',
                                'type'      => 'fieldset',
                                'title'     => 'Fieldset Field',
                                'dependency' => array( 'slider_type', 'any', 'uc_brand_slider'  ),
                                'fields'    => array(


                                            array(
                                                'id'       => 'uc_img_height_brand',
                                                'type'     => 'number',
                                                'title'    => 'Image Height:',
                                                'default'  => '100%',
                                                'after'  => 'px',

                                            ),
                                            array(
                                                'id'       => 'uc_img_width_brand',
                                                'type'     => 'number',
                                                'title'    => 'Image Width:',
                                                'default'  => '100%',
                                                'after'  => 'px',

                                            ),

                                            array(
                                                'id'       => 'uc_img_brand_enable',
                                                'type'     => 'checkbox',
                                                'title'    => 'Image height for defferent screen size',
                                                'default'  => 'false',
                                                'after'  => 'To have different Image height in Mobile/Tablet/Laptop/',

                                            ),
                                            array(
                                                'id'       => 'uc_responsive_brand_480_ht',
                                                'type'     => 'number',
                                                'title'    => 'Image Width:',
                                                'default'  => '300',
                                                'after'  => 'px (Mobile Portrait)',
                                                'bottom'  => 'nakjcdsanc',
                                                'dependency' => array( 'uc_img_brand_enable', '==', 'true' ),

                                            ),
                                            array(
                                                'id'       => 'uc_responsive_brand_600_ht',
                                                'type'     => 'number',
                                                'title'    => 'Image Width:',
                                                'default'  => '350',
                                                'after'  => 'px (Mobile Landscape)',
                                                'dependency' => array( 'uc_img_brand_enable', '==', 'true' ),

                                            ),
                                            array(
                                                'id'       => 'uc_responsive_brand_767_ht',
                                                'type'     => 'number',
                                                'title'    => 'Image Width:',
                                                'default'  => '350',
                                                'after'  => 'px (Mobile Landscape Wide)',
                                                'dependency' => array( 'uc_img_brand_enable', '==', 'true' ),

                                            ),
                                            array(
                                                'id'       => 'uc_responsive_brand_991_ht',
                                                'type'     => 'number',
                                                'title'    => 'Image Width:',
                                                'default'  => '400',
                                                'after'  => 'px  (Tab)',
                                                'dependency' => array( 'uc_img_brand_enable', '==', 'true' ),
                                            ),
                                        ),
                    ),//end of a fieldset
                        array(
                        'id'        => 'options_team_height',
                        'type'      => 'fieldset',
                        'title'     => 'Options',
                        'dependency' => array( 'slider_type', 'any', 'team_style,testimonial_slider'  ),
                        'fields'    => array(

                                        array(
                                            'id'       => 'uc_team_image_height',
                                            'type'     => 'number',
                                            'title'    => 'Image Height:',
                                            'default'  => '',
                                            'after'  => 'px',

                                        ),
                                        array(
                                            'id'       => 'uc_team_image_width',
                                            'type'     => 'number',
                                            'title'    => 'Image Width:',
                                            'default'  => '100',
                                            'after'  => '%',
                                            'dependency'   => array( 'slider_type', 'any', 'team_style'),

                                        ),

                                        array(
                                            'id'       => 'uc_testy_image_width',
                                            'type'     => 'number',
                                            'title'    => 'Image Width:',
                                            'default'  => '100',
                                            'after'  => 'px',
                                            'dependency'   => array( 'slider_type', 'any', 'testimonial_slider'),

                                        ),
                                        array(
                                                'id'       => 'uc_img_responsive_enable_tm',
                                                'type'     => 'checkbox',
                                                'title'    => 'Image height for defferent screen size',
                                                'default'  => 'false',
                                                'after'  => 'To have different Image height in Mobile/Tablet/Laptop/',

                                            ),
                                            array(
                                                'id'       => 'uc_responsive_480_ht_tm',
                                                'type'     => 'number',
                                                'title'    => 'Image Width:',
                                                'default'  => '',
                                                'after'  => 'px (Mobile Portrait)',
                                                'bottom'  => 'nakjcdsanc',
                                                'dependency' => array( 'uc_img_responsive_enable_tm', '==', 'true' ),

                                            ),
                                            array(
                                                'id'       => 'uc_responsive_600_ht_tm',
                                                'type'     => 'number',
                                                'title'    => 'Image Width:',
                                                'default'  => '',
                                                'after'  => 'px (Mobile Landscape)',
                                                'dependency' => array( 'uc_img_responsive_enable_tm', '==', 'true' ),

                                            ),
                                            array(
                                                'id'       => 'uc_responsive_767_ht_tm',
                                                'type'     => 'number',
                                                'title'    => 'Image Width:',
                                                'default'  => '',
                                                'after'  => 'px (Mobile Landscape Wide)',
                                                'dependency' => array( 'uc_img_responsive_enable_tm', '==', 'true' ),

                                            ),
                                            array(
                                                'id'       => 'uc_responsive_991_ht_tm',
                                                'type'     => 'number',
                                                'title'    => 'Image Width:',
                                                'default'  => '',
                                                'after'  => 'px  (Tab)',
                                                'dependency' => array( 'uc_img_responsive_enable_tm', '==', 'true' ),

                                            ),



                    ),
            ),//end of a field set

            ), // end: fields
        ), // end: a section

        // begin: a section
        array(
            'name'  => 'colors',
            'title' => 'Color',
            'icon'  => 'fa fa-adjust',


            // begin: fields
            'fields' => array(

                        array(
                                'id'        => 'options_fulwidth_color',
                                'type'      => 'fieldset',
                                'title'     => 'Color Option',
                                'dependency' => array( 'slider_type', '==', 'fullwidht_layer'  ),
                                'fields'    => array(

                        array(                                                                             //   Team Effect
                            'id'       => 'uc_section_bg_color',                                                   //
                            'type'     => 'color_picker',
                            'title'    => 'Background Color',
                            'after'    => 'Set the background color of text area',
                            'dependency'   => array( 'style_fullwidth', 'any', 'fw_il_019'),
                        ),
                        array(                                                                             //   Team Effect
                            'id'       => 'uc_header_color',                                                   //
                            'type'     => 'color_picker',
                            'title'    => 'Header Text Color',

                        ),
                        array(                                                                             //   Team Effect
                            'id'       => 'uc_sub_header_color',                                                   //
                            'type'     => 'color_picker',
                            'title'    => 'Sub-Header Text Color',
                            'dependency'   => array( 'style_fullwidth', 'any', 'fw_al_001,fw_al_006,fw_al_007,fw_al_008,fw_al_009,fw_al_010,fw_il_011'),
                        ),
                        array(                                                                             //   Team Effect
                            'id'       => 'uc_highlite_header_color',                                                   //
                            'type'     => 'color_picker',
                            'title'    => 'Highlighted Text Color',
                            'default'    => '#F04D4E',
                            'dependency'   => array( 'style_fullwidth', 'any', 'fw_al_007,fw_al_002,fw_al_009',),
                        ),

                        array(                                                                             //   Team Effect
                            'id'       => 'uc_desc_header_color',                                                   //
                            'type'     => 'color_picker',
                            'title'    => 'Description Text Color',
                            'default'    => '#ffffff',
                            'dependency'   => array( 'style_fullwidth', 'any', 'fw_al_001,fw_al_002,fw_al_003,fw_al_004,fw_al_005,fw_al_006,fw_al_007,fw_al_008,fw_al_009,fw_al_010,fw_il_011,fw_il_014,fw_il_015,fw_il_016,fw_il_019'),
                        ),



                        array(                                                                             //   Team Effect
                            'id'       => 'uc_btn_bg_color',                                                   //
                            'type'     => 'color_picker',
                            'title'    => 'Button Background Color',
                            'default'    => '#F04D4E',
                        ),
                        array(                                                                             //   Team Effect
                            'id'       => 'uc_btn_text_color',                                                   //
                            'type'     => 'color_picker',
                            'title'    => 'Button Text Color',
                            'default'    => '#ffffff',
                        ),

                        array(                                                                             //   Team Effect
                            'id'       => 'uc_btn_border_color',                                                   //
                            'type'     => 'color_picker',
                            'title'    => 'Button Border Color',
                            'default'    => '#ffffff',
                        ),
                        array(                                                                             //   Team Effect
                            'id'       => 'uc_btn_background_hover',                                                   //
                            'type'     => 'color_picker',
                            'title'    => 'Button Background Hover Color',
                            'default'    => '#ef1f1f',
                        ),
                        array(                                                                             //   Team Effect
                            'id'       => 'uc_btn_text_hover',                                                   //
                            'type'     => 'color_picker',
                            'title'    => 'Button Text Hover Color',
                            'default'    => '#f2f2f2',
                        ),

                        array(                                                                             //   Team Effect
                            'id'       => 'uc_btn_border_hover',                                                   //
                            'type'     => 'color_picker',
                            'title'    => 'Button Border Hover Color',
                            'default'    => '#ef1f1f',
                        ),




                        ),
                    ),//end of a fieldset

                    array(
                                'id'        => 'uc_opt_ken_color',
                                'type'      => 'fieldset',
                                'title'     => 'Color Option',
                                'dependency' => array( 'slider_type', '==', 'uc_kenburns_fw'  ),
                                'fields'    => array(

                        array(                                                                             //   Team Effect
                            'id'       => 'uc_header_color_ken',                                                   //
                            'type'     => 'color_picker',
                            'title'    => 'Header Text Color',

                        ),
                        array(                                                                             //   Team Effect
                            'id'       => 'uc_header_brdr_color_ken',                                                   //
                            'type'     => 'color_picker',
                            'title'    => 'Header Border Color',
                            'dependency' => array( 'uc_kenburns_style', 'any', 'kenburns_062'  ),

                        ),
                        array(                                                                             //   Team Effect
                            'id'       => 'uc_sub_header_color_ken',                                                   //
                            'type'     => 'color_picker',
                            'title'    => 'Sub-Header Text Color',
                            'dependency' => array( 'uc_kenburns_style', 'any', 'kenburns_061,kenburns_064'  ),
                        ),
                        array(                                                                             //   Team Effect
                            'id'       => 'uc_sub_header_bgcolor_ken',                                                   //
                            'type'     => 'color_picker',
                            'title'    => 'Sub-Header Background Color',
                            'dependency' => array( 'uc_kenburns_style', 'any', 'kenburns_064'  ),
                        ),
                        array(                                                                             //   Team Effect
                            'id'       => 'uc_highlite_header_color_ken',                                                   //
                            'type'     => 'color_picker',
                            'title'    => 'Highlighted Text Color',
                            'default'    => '#F04D4E',
                        ),

                        array(                                                                             //   Team Effect
                            'id'       => 'uc_desc_header_color_ken',                                                   //
                            'type'     => 'color_picker',
                            'title'    => 'Description Text Color',
                            'default'    => '#ffffff',
                        ),
                        array(                                                                             //   Team Effect
                            'id'       => 'uc_btn_bg_color_ken',                                                   //
                            'type'     => 'color_picker',
                            'title'    => 'Button Background Color',
                            'default'    => '#2E39C9',
                        ),
                        array(                                                                             //   Team Effect
                            'id'       => 'uc_btn_text_color_ken',                                                   //
                            'type'     => 'color_picker',
                            'title'    => 'Button Text Color',
                            'default'    => '#ffffff',
                        ),

                        array(                                                                             //   Team Effect
                            'id'       => 'uc_btn_border_color_ken',                                                   //
                            'type'     => 'color_picker',
                            'title'    => 'Button Border Color',
                            'default'    => 'transparent',
                        ),
                        array(                                                                             //   Team Effect
                            'id'       => 'uc_btn_bg_hover_ken',                                                   //
                            'type'     => 'color_picker',
                            'title'    => 'Button Background Hover Color',
                            'default'    => 'transparent',
                        ),
                        array(                                                                             //   Team Effect
                            'id'       => 'uc_btn_text_hover_ken',                                                   //
                            'type'     => 'color_picker',
                            'title'    => 'Button Text Hover Color',
                            'default'    => '#f2f2f2',
                        ),

                        array(                                                                             //   Team Effect
                            'id'       => 'uc_btn_border_hover_ken',                                                   //
                            'type'     => 'color_picker',
                            'title'    => 'Button Border Hover Color',
                            'default'    => 'transparent',
                        ),




                        ),
                    ),//end of a fieldset

                    array(
                                'id'        => 'uc_opt_brnad_color',
                                'type'      => 'fieldset',
                                'title'     => 'Color Option',
                                'dependency' => array( 'slider_type', '==', 'uc_brand_slider'  ),
                                'fields'    => array(

                        array(                                                                             //   Team Effect
                            'id'       => 'uc_header_color_brand',                                                   //
                            'type'     => 'color_picker',
                            'title'    => 'Border Hover Color',

                            ),
                        ),
                    ),//end of a fieldset

                    array(
                        'id'        => 'options_team_color',
                        'type'      => 'fieldset',
                        'title'     => 'Options',
                        'dependency' => array( 'slider_type', '==', 'team_style'  ),
                        'fields'    => array(

                        array(                                                                             //   Team Effect
                            'id'       => 'section_back_color',                                                   //
                            'type'     => 'color_picker',
                            'title'    => 'Team Section Background Color',
                            'default'    => '#ffffff',
                        ),
                        array(                                                                             //   Team Effect
                            'id'       => 'section_title_color',                                                   //
                            'type'     => 'color_picker',
                            'title'    => 'Team Section Title Color',
                            'default'    => '#ffffff',

                        ),
                        array(                                                                             //   Team Effect
                            'id'       => 'uc_name_color',                                                   //
                            'type'     => 'color_picker',
                            'title'    => 'Name Text Color',
                            'default'    => '#ffffff',
                        ),
                        array(                                                                             //   Team Effect
                            'id'       => 'uc_desig_color',                                                   //
                            'type'     => 'color_picker',
                            'title'    => 'Designation Text Color',
                            'default'    => '#ffffff',
                        ),
                        array(                                                                             //   Team Effect
                            'id'       => 'uc_dept_color',                                                   //
                            'type'     => 'color_picker',
                            'title'    => 'Department/Desc Text Color',
                            'default'    => '#ffffff',
                            'dependency'   => array( 'style', 'any', 'team_087_mov,team_088_mov,team_089_mov'),
                        ),
                        array(                                                                             //   Team Effect
                            'id'       => 'uc_innerr_texts_color',                                                   //
                            'type'     => 'color_picker',
                            'title'    => 'Dept And Desc Background Color',
                            'default'    => '#ffffff',
                            'dependency'   => array( 'style', 'any', 'team_089_mov'),
                        ),

                        array(                                                                             //   Team Effect
                            'id'       => 'uc_social_color',                                                   //
                            'type'     => 'color_picker',
                            'title'    => 'Social Icon Color',
                            'default'    => '#ffffff',
                            'dependency'   => array( 'style', 'any', 'team_088_mov,team_089_mov,team_087_mov,team_090_mov'),
                        ),
                        array(                                                                             //   Team Effect
                            'id'       => 'uc_tm_img_overlay',                                                   //
                            'type'     => 'color_picker',
                            'title'    => 'Image Overlay Color',
                            'default'    => '#ffffff',
                            'dependency'   => array( 'style', 'any', 'team_090_mov'),
                        ),

                    ),
            ),

                    array(
                        'id'        => 'options_subscribe_color',
                        'type'      => 'fieldset',
                        'title'     => 'Options',
                        'dependency' => array( 'slider_type', 'any', 'uc_coming_soon,testimonial_slider'  ),
                        'fields'    => array(

                        array(                                                                             //   Team Effect
                            'id'       => 'uc_section_header_color',                                                   //
                            'type'     => 'color_picker',
                            'title'    => 'Title Color',
                            'default'    => '#ffffff',
                            'dependency' => array( 'slider_type', 'any', 'uc_coming_soon,testimonial_slider'  ),
                        ),
                        array(                                                                             //   Team Effect
                            'id'       => 'uc_section_promo_color',                                                   //
                            'type'     => 'color_picker',
                            'title'    => 'Promo Text',
                            'default'    => '#ffffff',
                            'dependency' => array( 'slider_type', 'any', 'uc_coming_soon'  ),

                        ),

                    ),
            ),//End  of fieldset
                    array(
                        'id'        => 'uc_options_testi_color',
                        'type'      => 'fieldset',
                        'title'     => 'Options',
                        'dependency' => array( 'slider_type', '==', 'testimonial_slider'  ),
                        'fields'    => array(

                        array(                                                                             //   Team Effect
                            'id'       => 'uc_testi_heading_color',                                                   //
                            'type'     => 'color_picker',
                            'title'    => 'Title Color',
                            'default'    => '#ffffff',
                        ),
                        array(                                                                             //   Team Effect
                            'id'       => 'uc_testi_desig_color',                                                   //
                            'type'     => 'color_picker',
                            'title'    => 'Promo Text',
                            'default'    => '#ffffff',

                        ),
                        array(                                                                             //   Team Effect
                            'id'       => 'uc_testi_desc_color',                                                   //
                            'type'     => 'color_picker',
                            'title'    => 'Description Text',
                            'default'    => '#ffffff',

                        ),
                    ),
            ),//End  of fieldset

            array(
                        'id'        => 'uc_opt_video_color',
                        'type'      => 'fieldset',
                        'title'     => 'Options',
                        'dependency' => array( 'slider_type', '==', 'uc_video_slider'  ),
                        'fields'    => array(

                        array(                                                                             //   Team Effect
                            'id'       => 'uc_vid_heading_color',                                                   //
                            'type'     => 'color_picker',
                            'title'    => 'Title Color',
                            'default'    => '#ffffff',

                        ),
                        array(                                                                             //   Team Effect
                            'id'       => 'uc_vid_sub_color',                                                   //
                            'type'     => 'color_picker',
                            'title'    => 'Sub Title Color',
                            'default'    => '#ffffff',
                            'dependency' => array( 'video_background_style', 'any', 'video_096,video_099'),

                        ),
                        array(                                                                             //   Team Effect
                            'id'       => 'uc_vid_desc_color',                                                   //
                            'type'     => 'color_picker',
                            'title'    => 'Description Text Color',
                            'default'    => '#ffffff',
                            'dependency' => array( 'video_background_style', 'any', 'video_096,video_099'),

                        ),

                        array(                                                                             //   Team Effect
                            'id'       => 'uc_vid_btn_bg_color',                                                   //
                            'type'     => 'color_picker',
                            'title'    => 'Button Background Color',
                            'default'    => '#F04D4E',
                            'dependency' => array( 'video_background_style', 'any', 'video_096,video_099'),
                        ),
                        array(                                                                             //   Team Effect
                            'id'       => 'uc_vid_btn_text_color',                                                   //
                            'type'     => 'color_picker',
                            'title'    => 'Button Text Color',
                            'default'    => '#ffffff',
                            'dependency' => array( 'video_background_style', 'any', 'video_096,video_099'),
                        ),

                        array(                                                                             //   Team Effect
                            'id'       => 'uc_vid_btn_border_color',                                                   //
                            'type'     => 'color_picker',
                            'title'    => 'Button Border Color',
                            'default'    => '#ffffff',
                            'dependency' => array( 'video_background_style', 'any', 'video_096,video_099'),
                        ),
                        array(                                                                             //   Team Effect
                            'id'       => 'uc_vid_btn_bg_hover',                                                   //
                            'type'     => 'color_picker',
                            'title'    => 'Button Background Hover Color',
                            'default'    => '#ef1f1f',
                            'dependency' => array( 'video_background_style', 'any', 'video_096,video_099'),
                        ),
                        array(                                                                             //   Team Effect
                            'id'       => 'uc_vid_btn_text_hover',                                                   //
                            'type'     => 'color_picker',
                            'title'    => 'Button Text Hover Color',
                            'default'    => '#f2f2f2',
                            'dependency' => array( 'video_background_style', 'any', 'video_096,video_099'),
                        ),

                        array(                                                                             //   Team Effect
                            'id'       => 'uc_vid_btn_border_hover',                                                   //
                            'type'     => 'color_picker',
                            'title'    => 'Button Border Hover Color',
                            'default'    => '#ef1f1f',
                            'dependency' => array( 'video_background_style', 'any', 'video_096,video_099'),
                        ),
                    ),
            ),//End  of fieldset

            array(
                        'id'        => 'uc_opt_listfw_color',
                        'type'      => 'fieldset',
                        'title'     => 'Options',
                        'dependency' => array( 'slider_type', '==', 'uc_list_fullwidth'  ),
                        'fields'    => array(

                        array(                                                                             //   Team Effect
                            'id'       => 'uc_listfw_heading_color',                                                   //
                            'type'     => 'color_picker',
                            'title'    => 'Title Color',
                            'default'    => '#ffffff',

                        ),
                        array(                                                                             //   Team Effect
                            'id'       => 'uc_listfw_serv_color',                                                   //
                            'type'     => 'color_picker',
                            'title'    => 'Service Text Color',
                            'default'    => '#1b1b1b',

                        ),
                        array(                                                                             //   Team Effect
                            'id'       => 'uc_listfw_serv_hover',                                                   //
                            'type'     => 'color_picker',
                            'title'    => 'Service Text Color on Hover',
                            'default'    => '#EEF2F4',

                        ),
                        array(                                                                             //   Team Effect
                            'id'       => 'uc_listfw_serv_back',                                                   //
                            'type'     => 'color_picker',
                            'title'    => 'Service Text Back Color',
                            'default'    => '#dddddd',

                        ),

                        array(                                                                             //   Team Effect
                            'id'       => 'uc_listfw_back_hover',                                                   //
                            'type'     => 'color_picker',
                            'title'    => 'Service Text Back Color on Hover',
                            'default'    => '#38576D',
                        ),

                        array(                                                                             //   Team Effect
                            'id'       => 'uc_listfw_btn_bg_color',                                                   //
                            'type'     => 'color_picker',
                            'title'    => 'Button Background Color',
                            'default'    => '#F04D4E',
                        ),
                        array(                                                                             //   Team Effect
                            'id'       => 'uc_listfw_btn_text_color',                                                   //
                            'type'     => 'color_picker',
                            'title'    => 'Button Text Color',
                            'default'    => '#ffffff',
                        ),

                        array(                                                                             //   Team Effect
                            'id'       => 'uc_listfw_btn_border_color',                                                   //
                            'type'     => 'color_picker',
                            'title'    => 'Button Border Color',
                            'default'    => '#ffffff',
                        ),
                        array(                                                                             //   Team Effect
                            'id'       => 'uc_listfw_btn_bg_hover',                                                   //
                            'type'     => 'color_picker',
                            'title'    => 'Button Background Hover Color',
                            'default'    => '#ef1f1f',
                        ),
                        array(                                                                             //   Team Effect
                            'id'       => 'uc_listfw_btn_text_hover',                                                   //
                            'type'     => 'color_picker',
                            'title'    => 'Button Text Hover Color',
                            'default'    => '#f2f2f2',
                        ),

                        array(                                                                             //   Team Effect
                            'id'       => 'uc_listfw_btn_border_hover',                                                   //
                            'type'     => 'color_picker',
                            'title'    => 'Button Border Hover Color',
                            'default'    => '#ef1f1f',
                        ),
                        array(                                                                             //   Team Effect
                            'id'       => 'uc_icon_colr_listfw',                                                   //
                            'type'     => 'color_picker',
                            'title'    => 'Icon Color',
                            'default'    => '#ffffff',
                            'dependency'   => array( 'uc_list_full_style', '==', 'js_list_052'),

                        ),
                        array(                                                                             //   Team Effect
                            'id'       => 'uc_icon_bg_listfw',                                                   //
                            'type'     => 'color_picker',
                            'title'    => 'Icon background Color',
                            'default'    => '#F04D4E',
                            'dependency'   => array( 'uc_list_full_style', '==', 'js_list_052'),
                        ),
                        array(                                                                             //   Team Effect
                            'id'       => 'uc_icon_colr_hvr_listfw',                                                   //
                            'type'     => 'color_picker',
                            'title'    => 'Icon Hover Color',
                            'default'    => '#ddd',
                            'dependency'   => array( 'uc_list_full_style', '==', 'js_list_052'),
                        ),

                    ),
            ),//End  of fieldset

            ), // end: fields
        ), // end: a section

        // begin: a section
        array(
            'name'  => 'ucadditional',
            'title' => 'Left And Right Arrow',
            'icon'  => 'fa fa-arrow-right',

            // begin: fields
            'fields' => array(

                        array(
                            'id'    => 'uc_arrow_color',
                            'type'  => 'color_picker',
                            'title' => 'Arrow Icon Color'
                        ),
                        array(
                            'id'    => 'uc_arrow_color_hvr',
                            'type'  => 'color_picker',
                            'title' => 'Arrow Icon Color on Hover',
                        ),
                        array(
                            'id'    => 'uc_arrow_bg_color',
                            'type'  => 'color_picker',
                            'title' => 'Arrow Background Color',
                        ),
                        array(
                            'id'    => 'uc_arrow_bg_color_hvr',
                            'type'  => 'color_picker',
                            'title' => 'Arrow BAckground Color on Hover',
                        ),






            ), // end: fields
        ), // end: a section
 // begin: a section
        array(
            'name'  => 'additional',
            'title' => 'Additional CSS',
            'icon'  => 'fa fa-css3',

            // begin: fields
            'fields' => array(

                        array(
                            'id'    => 'uc_extra_class',
                            'type'  => 'text',
                            'title' => 'Extra CSS Class',
                            'desc' => 'Extra css class for customizing',
                            'default'  => 'uc_themescup',
                        ),
                        array(
                            'id'    => 'uc_custom_css',
                            'type'  => 'textarea',
                            'title' => 'Custom CSS',
                            'desc' => 'You can override css here',
                        ),






            ), // end: fields
        ), // end: a section

    ),
);

CSFramework_Metabox::instance( $options );
