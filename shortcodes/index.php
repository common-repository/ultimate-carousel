<?php

if ( ! defined( 'ABSPATH' ) ) { die; }

function uhe_circle_shortcode($atts, $content = null){
    extract( shortcode_atts( array(

        'id' => '',

    ), $atts) );


    $q = new WP_Query(
        array('posts_per_page' => -1, 'post_type' => 'ultimate-carousel', 'p' => $id)
    );

    while($q->have_posts()) : $q->the_post();
    $idd = get_the_ID();

    $carousel_options = get_post_meta( $idd, 'carousel_options', true );
    $slider_type = $carousel_options['slider_type'];
    $style_fullwidth = $carousel_options['style_fullwidth'];
    $effect_1 = $carousel_options['effect_1'];
    $effect_2 = $carousel_options['effect_2'];
    $effect_3 = $carousel_options['effect_3'];
    $effect_4 = $carousel_options['effect_4'];
    $effect_5 = $carousel_options['effect_5'];
    $style = $carousel_options['style'];
    $uc_extra_class = $carousel_options['uc_extra_class'];
    $uc_custom_css = $carousel_options['uc_custom_css'];
    
    $heading = $carousel_options['heading'];
    $heading_promo_text = $carousel_options['heading_promo_text'];
    //Arrow Color
    $uc_arrow_color = $carousel_options['uc_arrow_color'];
    $uc_arrow_color_hvr = $carousel_options['uc_arrow_color_hvr'];
    $uc_arrow_bg_color = $carousel_options['uc_arrow_bg_color'];
    $uc_arrow_bg_color_hvr = $carousel_options['uc_arrow_bg_color_hvr'];
    
    //Fullwidth Options height
    $options_fullwidth_height = $carousel_options['options_fuulwidth_height'];
    
    $uc_custom_image_height = $options_fullwidth_height['uc_custom_image_height'];
    $uc_custom_image_width = $options_fullwidth_height['uc_custom_image_width'];
    $uc_text_box_width = $options_fullwidth_height['uc_text_box_width'];
    $uc_responsive_480_ht = $options_fullwidth_height['uc_responsive_480_ht'];
    $uc_responsive_600_ht = $options_fullwidth_height['uc_responsive_600_ht'];
    $uc_responsive_767_ht = $options_fullwidth_height['uc_responsive_767_ht'];
    $uc_responsive_991_ht = $options_fullwidth_height['uc_responsive_991_ht'];
    
    //Fullwidth Options typography
    $options_fullwidth_typography = $carousel_options['options_fullwidth_typography'];
    
    $uc_heading_font = $options_fullwidth_typography['uc_heading_font'];
    $uc_heading_font_size = $options_fullwidth_typography['uc_heading_font_size'];
    $uc_heading_font_style = $options_fullwidth_typography['uc_heading_font_style'];
    $uc_sub_heading_font = $options_fullwidth_typography['uc_sub_heading_font'];
    $uc_sub_heading_font_size = $options_fullwidth_typography['uc_sub_heading_font_size'];
    $uc_sub_heading_font_style = $options_fullwidth_typography['uc_sub_heading_font_style'];
    $uc_desc_font = $options_fullwidth_typography['uc_desc_font'];
    $uc_desc_font_size = $options_fullwidth_typography['uc_desc_font_size'];
    $uc_desc_font_style = $options_fullwidth_typography['uc_desc_font_style'];
    $uc_button_border_width = $options_fullwidth_typography['uc_button_border_width'];
    $uc_btn_font_size = $options_fullwidth_typography['uc_btn_font_size'];
    $uc_btn_font_size = $options_fullwidth_typography['uc_btn_font_size'];
    
    $uc_button_padding_top = $options_fullwidth_typography['uc_button_padding_top'];
    $uc_button_padding_left = $options_fullwidth_typography['uc_button_padding_left'];
    //Fullwidth Options color
    $options_fullwidth_color = $carousel_options['options_fulwidth_color'];
 
    $uc_header_color = $options_fullwidth_color['uc_header_color'];
    $uc_sub_header_color = $options_fullwidth_color['uc_sub_header_color'];
    $uc_desc_header_color = $options_fullwidth_color['uc_desc_header_color'];
    $uc_btn_bg_color = $options_fullwidth_color['uc_btn_bg_color'];
    $uc_btn_text_color = $options_fullwidth_color['uc_btn_text_color'];
    $uc_btn_border_color = $options_fullwidth_color['uc_btn_border_color'];
    $uc_btn_text_hover = $options_fullwidth_color['uc_btn_text_hover'];
    $uc_btn_background_hover = $options_fullwidth_color['uc_btn_background_hover'];
    $uc_btn_border_hover = $options_fullwidth_color['uc_btn_border_hover'];
    $uc_highlite_header_color = $options_fullwidth_color['uc_highlite_header_color'];
    $uc_section_bg_color = $options_fullwidth_color['uc_section_bg_color'];
    
// Team Option typography
    $options_team_typogrphy = $carousel_options['options_team_typogrphy']; 
       
    $uc_team_section_head_font = $options_team_typogrphy['uc_team_section_head_font'];    
    $uc_team_section_head_size = $options_team_typogrphy['uc_team_section_head_size'];    
    $uc_team_section_head_style = $options_team_typogrphy['uc_team_section_head_style'];    
    $uc_team_name_font = $options_team_typogrphy['uc_team_name_font'];    
    $uc_team_name_font_size = $options_team_typogrphy['uc_team_name_font_size'];    
    $uc_team_name_font_style = $options_team_typogrphy['uc_team_name_font_style'];    
    $uc_team_desig_font = $options_team_typogrphy['uc_team_desig_font'];    
    $uc_team_desig_font_size = $options_team_typogrphy['uc_team_desig_font_size'];    
    $uc_team_desig_font_style = $options_team_typogrphy['uc_team_desig_font_style'];    
    $uc_team_dept_font = $options_team_typogrphy['uc_team_dept_font'];    
    $uc_team_dept_font_size = $options_team_typogrphy['uc_team_dept_font_size'];    
    $uc_team_dept_font_style = $options_team_typogrphy['uc_team_dept_font_style'];    
    $uc_team_socil_font_size = $options_team_typogrphy['uc_team_socil_font_size'];
// Team Option typography    
    $options_team_height = $carousel_options['options_team_height']; 
    
       
    $uc_team_image_height = $options_team_height['uc_team_image_height'];    
    $uc_team_image_width = $options_team_height['uc_team_image_width'];  
    $uc_testy_image_width = $options_team_height['uc_testy_image_width'];  
    $uc_responsive_480_ht_tm = $options_team_height['uc_responsive_480_ht_tm'];  
    $uc_responsive_600_ht_tm = $options_team_height['uc_responsive_600_ht_tm'];  
    $uc_responsive_767_ht_tm = $options_team_height['uc_responsive_767_ht_tm'];  
    $uc_responsive_991_ht_tm = $options_team_height['uc_responsive_991_ht_tm'];  
    
// Team Option Color
    $options_team_color = $carousel_options['options_team_color'];
       
    $section_back_color = $options_team_color['section_back_color'];    
    $section_title_color = $options_team_color['section_title_color'];    
    $uc_name_color = $options_team_color['uc_name_color'];    
    $uc_desig_color = $options_team_color['uc_desig_color'];    
    $uc_dept_color = $options_team_color['uc_dept_color'];    
    $uc_social_color = $options_team_color['uc_social_color'];
    $section_back_color = $options_team_color['section_back_color'];
    $uc_innerr_texts_color = $options_team_color['uc_innerr_texts_color'];
    $uc_tm_img_overlay = $options_team_color['uc_tm_img_overlay'];
    
//Testimonial Options
    $uc_testi_column_91 = $carousel_options['uc_testi_column_91'];
    $uc_testimonial_effect = $carousel_options['uc_testimonial_effect'];
    
    $uc_options_testi_typogrphy = $carousel_options['uc_options_testi_typogrphy'];
    //
    $uc_testi_font = $uc_options_testi_typogrphy['uc_testi_font'];
    $uc_testi_font_size = $uc_options_testi_typogrphy['uc_testi_font_size'];
    $uc_testi_font_style = $uc_options_testi_typogrphy['uc_testi_font_style'];
    $uc_testi_desig_font = $uc_options_testi_typogrphy['uc_testi_desig_font'];
    $uc_testi_desig_font_size = $uc_options_testi_typogrphy['uc_testi_desig_font_size'];
    $uc_testi_desig_font_style = $uc_options_testi_typogrphy['uc_testi_desig_font_style'];
    $uc_testi_desc_font = $uc_options_testi_typogrphy['uc_testi_desc_font'];
    $uc_testi_desc_font_size = $uc_options_testi_typogrphy['uc_testi_desc_font_size'];
    $uc_testi_desc_font_style = $uc_options_testi_typogrphy['uc_testi_desc_font_style'];

//Testimonial Options
    //$uc_coming_soon = $carousel_options['uc_coming_soon'];
    
    $uc_options_testi_color = $carousel_options['uc_options_testi_color'];
    //
    $uc_testi_heading_color = $uc_options_testi_color['uc_testi_heading_color'];
    $uc_testi_desig_color   = $uc_options_testi_color['uc_testi_desig_color'];
    $uc_testi_desc_color    = $uc_options_testi_color['uc_testi_desc_color'];
    
    
//Header Section Title Color and font
//Header Section Title Color and font
    $uc_coming_soon_fieldset = $carousel_options['options_subscribe_typogrphy'];
    //
    $uc_section_head_font           = $uc_coming_soon_fieldset['uc_section_head_font'];
    $uc_section_head_font_size      = $uc_coming_soon_fieldset['uc_section_head_font_size'];
    $uc_section_head_font_style     = $uc_coming_soon_fieldset['uc_section_head_font_style'];
    $uc_section_promo_text          = $uc_coming_soon_fieldset['uc_section_promo_text'];
    $uc_section_promo_text_size     = $uc_coming_soon_fieldset['uc_section_promo_text_size'];
    $uc_section_promo_text_style    = $uc_coming_soon_fieldset['uc_section_promo_text_style'];
    
    //Color
    $options_subscribe_color = $carousel_options['options_subscribe_color'];
    //    
    $uc_section_header_color = $options_subscribe_color['uc_section_header_color'];
    $uc_section_promo_color = $options_subscribe_color['uc_section_promo_color'];
    
    
    //Video Background Slider
    $video_background_style = $carousel_options['video_background_style'];
    
    $uc_options_video_back = $carousel_options['uc_options_video_colors'];
        
    $uc_video_heading = $uc_options_video_back['uc_video_heading'];
    $uc_video_heading_siz = $uc_options_video_back['uc_video_heading_siz'];
    $uc_video_heading_style = $uc_options_video_back['uc_video_heading_style'];
    $uc_video_sub_text = $uc_options_video_back['uc_video_sub_text'];
    $uc_video_sub_size = $uc_options_video_back['uc_video_sub_size'];
    $uc_video_sub_style = $uc_options_video_back['uc_video_sub_style'];
    $uc_video_desc_text = $uc_options_video_back['uc_video_desc_text'];
    $uc_video_desc_size = $uc_options_video_back['uc_video_desc_size'];
    $uc_video_desc_style = $uc_options_video_back['uc_video_desc_style'];
    
    $uc_opt_video_color = $carousel_options['uc_opt_video_color'];
    
    $uc_vid_heading_color = $uc_opt_video_color['uc_vid_heading_color'];
    $uc_vid_sub_color = $uc_opt_video_color['uc_vid_sub_color'];
    $uc_vid_desc_color = $uc_opt_video_color['uc_vid_desc_color'];
    $uc_vid_btn_bg_color = $uc_opt_video_color['uc_vid_btn_bg_color'];
    $uc_vid_btn_text_color = $uc_opt_video_color['uc_vid_btn_text_color'];
    $uc_vid_btn_border_color = $uc_opt_video_color['uc_vid_btn_border_color'];
    $uc_vid_btn_bg_hover = $uc_opt_video_color['uc_vid_btn_bg_hover'];
    $uc_vid_btn_text_hover = $uc_opt_video_color['uc_vid_btn_text_hover'];
    $uc_vid_btn_border_hover = $uc_opt_video_color['uc_vid_btn_border_hover'];
    
    
    
    

    //Parrallax Background Slider
    $uc_parallax_style = $carousel_options['uc_parallax_style'];
    
    // Fullwidth List Slider
        //fullwidth List Service
    $uc_list_full_style = $carousel_options['uc_list_full_style'];
    
    $uc_options_list_fw = $carousel_options['uc_options_list_fw'];
    
    $uc_listfw_head_text = $uc_options_list_fw['uc_listfw_head_text'];
    $uc_listfw_heading_siz = $uc_options_list_fw['uc_listfw_heading_siz'];
    $uc_listfw_heading_style = $uc_options_list_fw['uc_listfw_heading_style'];
    $uc_listfw_serv_text = $uc_options_list_fw['uc_listfw_serv_text'];
    $uc_listfw_serv_size = $uc_options_list_fw['uc_listfw_serv_size'];
    $uc_listfw_serv_style = $uc_options_list_fw['uc_listfw_serv_style'];
    $uc_listfw_btn_siz = $uc_options_list_fw['uc_listfw_btn_siz'];
    $uc_listfw_btn_brdrs = $uc_options_list_fw['uc_listfw_btn_brdrs'];
    $uc_listfw_btn_wid = $uc_options_list_fw['uc_listfw_btn_wid'];
    
    $uc_opt_listfw_color = $carousel_options['uc_opt_listfw_color'];
    
    $uc_listfw_heading_color = $uc_opt_listfw_color['uc_listfw_heading_color'];
    $uc_listfw_serv_color    = $uc_opt_listfw_color['uc_listfw_serv_color'];
    $uc_listfw_back_hover    = $uc_opt_listfw_color['uc_listfw_back_hover'];
    $uc_listfw_serv_back = $uc_opt_listfw_color['uc_listfw_serv_back'];
    $uc_listfw_serv_hover = $uc_opt_listfw_color['uc_listfw_serv_hover'];
    $uc_listfw_btn_bg_color = $uc_opt_listfw_color['uc_listfw_btn_bg_color'];
    $uc_listfw_btn_text_color = $uc_opt_listfw_color['uc_listfw_btn_text_color'];
    $uc_listfw_btn_border_color = $uc_opt_listfw_color['uc_listfw_btn_border_color'];
    $uc_listfw_btn_bg_hover = $uc_opt_listfw_color['uc_listfw_btn_bg_hover'];
    $uc_listfw_btn_text_hover = $uc_opt_listfw_color['uc_listfw_btn_text_hover'];
    $uc_listfw_btn_border_hover = $uc_opt_listfw_color['uc_listfw_btn_border_hover'];
    $uc_icon_colr_listfw = $uc_opt_listfw_color['uc_icon_colr_listfw'];
    $uc_icon_bg_listfw = $uc_opt_listfw_color['uc_icon_bg_listfw'];
    $uc_icon_colr_hvr_listfw = $uc_opt_listfw_color['uc_icon_colr_hvr_listfw'];
// Kenburns Effect
    $uc_kenburns_style = $carousel_options['uc_kenburns_style'];
    //typogrphy    
    $uc_typo_kenburns_opt = $carousel_options['uc_typo_kenburns_opt'];
    
    $uc_headeing_ken = $uc_typo_kenburns_opt['uc_headeing_ken'];
    $uc_headeing_ken_brdr = $uc_typo_kenburns_opt['uc_headeing_ken_brdr'];
    $uc_headeing_ken_size = $uc_typo_kenburns_opt['uc_headeing_ken_size'];
    $uc_headeing_ken_style = $uc_typo_kenburns_opt['uc_headeing_ken_style'];
    $uc_sub_head_ken_font = $uc_typo_kenburns_opt['uc_sub_head_ken_font'];
    $uc_sub_head_ken_size = $uc_typo_kenburns_opt['uc_sub_head_ken_size'];
    $uc_sub_head_ken_style = $uc_typo_kenburns_opt['uc_sub_head_ken_style'];
    $uc_desc_ken_font = $uc_typo_kenburns_opt['uc_desc_ken_font'];
    $uc_desc_ken_size = $uc_typo_kenburns_opt['uc_desc_ken_size'];
    $uc_desc_ken_style = $uc_typo_kenburns_opt['uc_desc_ken_style'];
    $uc_btn_wid_ken = $uc_typo_kenburns_opt['uc_btn_wid_ken'];
    $uc_btn_brdr_wid_ken = $uc_typo_kenburns_opt['uc_btn_brdr_wid_ken'];
    //color
    $uc_opt_ken_color = $carousel_options['uc_opt_ken_color'];
    
    $uc_header_color_ken = $uc_opt_ken_color['uc_header_color_ken'];
    $uc_header_brdr_color_ken = $uc_opt_ken_color['uc_header_brdr_color_ken'];
    $uc_sub_header_color_ken = $uc_opt_ken_color['uc_sub_header_color_ken'];
    $uc_sub_header_bgcolor_ken = $uc_opt_ken_color['uc_sub_header_bgcolor_ken'];
    $uc_highlite_header_color_ken = $uc_opt_ken_color['uc_highlite_header_color_ken'];
    $uc_desc_header_color_ken = $uc_opt_ken_color['uc_desc_header_color_ken'];
    $uc_btn_bg_color_ken = $uc_opt_ken_color['uc_btn_bg_color_ken'];
    $uc_btn_text_color_ken = $uc_opt_ken_color['uc_btn_text_color_ken'];
    $uc_btn_border_color_ken = $uc_opt_ken_color['uc_btn_border_color_ken'];
    $uc_btn_bg_hover_ken = $uc_opt_ken_color['uc_btn_bg_hover_ken'];
    $uc_btn_text_hover_ken = $uc_opt_ken_color['uc_btn_text_hover_ken'];
    $uc_btn_border_hover_ken = $uc_opt_ken_color['uc_btn_border_hover_ken'];

    //brand color    
    $uc_opt_brnad_color = $carousel_options['uc_opt_brnad_color'];    
    $uc_header_color_brand = $uc_opt_brnad_color['uc_header_color_brand'];
//Here starts shortcodes
    $output ='';



        if ($slider_type == 'team_style'  && $style == 'team_086_mov' ){
         require_once ('effect86-column.php');
         $output .='<script> jQuery("#'.$effect_1.'").find(".item:first").addClass("active") </script>';
        }

        if ($slider_type == 'team_style'  && $style == 'team_087_mov'){
         require_once ('effect87-column.php');
         $output .='<script> jQuery("#'.$effect_2.'").find(".item:first").addClass("active") </script>';
        }
        if ($slider_type == 'team_style'  && $style == 'team_088_mov'){
         require_once ('effect88-column.php');
         $output .='<script> jQuery("#'.$effect_3.'").find(".item:first").addClass("active") </script>';
        }

        if ($slider_type == 'team_style'  && $style == 'team_089_mov'){
         require_once ('effect89-column.php');
         $output .='<script> jQuery("#'.$effect_4.'").find(".item:first").addClass("active") </script>';
        }

        if ($slider_type == 'team_style'  && $style == 'team_090_mov'){
         require_once ('effect90-column.php');
         $output .='<script> jQuery("#'.$effect_5.'").find(".item:first").addClass("active") </script>';
        }
        if ($slider_type == 'fullwidht_layer'){
         require_once ('fullwitdh.php');
         $output .='<script> jQuery("#'.$style_fullwidth.'").find(".item:first").addClass("active") </script>';
        }
        if ($slider_type == 'uc_list_fullwidth'){
         require_once ('list_fw.php');
         $output .='<script> jQuery("#'.$uc_list_full_style.'").find(".item:first").addClass("active") </script>';
        }
        if ($slider_type == 'uc_kenburns_fw'){
         require_once ('kenburns.php');
         $output .='<script> jQuery("#'.$uc_kenburns_style.'").find(".item:first").addClass("active") </script>';
        }
        if ($slider_type == 'testimonial_slider'){
         require_once ('testimonial.php');
         $output .='<script> jQuery("#'.$uc_testi_column_91.'").find(".item:first").addClass("active") </script>';
        }
        if ($slider_type == 'uc_coming_soon'){
         require_once ('subscribe.php');
         $output .='<script> jQuery("#x_015_subscribe").find(".item:first").addClass("active") </script>';
        }
        if ($slider_type == 'uc_fullwidht_parallax'){
         require_once ('parallax.php');
         $output .='<script> jQuery("#'.$uc_parallax_style.'").find(".item:first").addClass("active") </script>';
        }
        if ($slider_type == 'uc_video_slider'){
         require_once ('video_background.php');
         $output .='<script> jQuery("#'.$video_background_style.'").find(".item:first").addClass("active") </script>';
        }
        if ($slider_type == 'uc_brand_slider'){
         require_once ('brand-icon.php');
         $output .='<script> jQuery("#x_020_partner").find(".item:first").addClass("active") </script>';
        }
    endwhile;
    wp_reset_query();
    wp_reset_postdata();
    return $output;




}
add_shortcode('ultimate-carousel', 'uhe_circle_shortcode');