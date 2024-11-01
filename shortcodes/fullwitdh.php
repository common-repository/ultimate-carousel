<?php



        $output .=' 
         <!-- Haritage Slider -->';
        
           $output .='<div id="'.$style_fullwidth.'" class="'.$uc_extra_class.' carousel ';
            if($style_fullwidth == 'fw_al_001'){
              $output .=' slide ps_slide_y ps_indicators_y swipe_y ps_easeOutQuint  " data-ride="carousel" data-pause="hover"  data-interval="4000" data-duration="2000"';
             }

            if($style_fullwidth == 'fw_al_002'){
              $output .=' slide swipe_x ps_easeInOutSine  " data-ride="carousel" data-pause="hover"  data-interval="4000" data-duration="2000"';
             }
            if($style_fullwidth == 'fw_al_003'){
              $output .=' ps_fade ps_control_bsquare swipe_x ps_easeOutQuint  " data-ride="carousel" data-pause="hover"  data-interval="4000" data-duration="2000"';
             }
            if($style_fullwidth == 'fw_al_004'){
              $output .=' ps_zoom_i ps_control_bround swipe_x ps_easeInOut  " data-ride="carousel" data-pause="hover"  data-interval="4000" data-duration="2000"';
             }
            if($style_fullwidth == 'fw_al_005'){
              $output .=' ps_spread ps_control_hradius swipe_x ps_easeOutQuint  " data-ride="carousel" data-pause="hover"  data-interval="4000" data-duration="2000"';
             }
            if($style_fullwidth == 'fw_al_006'){
              $output .=' ps_spread_y ps_control_bfradius swipe_x ps_easeOutQuin  " data-ride="carousel" data-pause="hover"  data-interval="4000" data-duration="2000"';
             }
            if($style_fullwidth == 'fw_al_007'){
              $output .=' ps_rotate_scale_c ps_indicators_l ps_control_rotate_f swipe_x ps_easeOutQuint  " data-ride="carousel" data-pause="hover"  data-interval="4000" data-duration="2000"';
             }
            if($style_fullwidth == 'fw_al_008'){
              $output .=' slide ps_slide_y ps_indicators_bx ps_control_l_y swipe_y ps_easeOutQuinty  " data-ride="carousel" data-pause="hover"  data-interval="4000" data-duration="2000"';
                }
            if($style_fullwidth == 'fw_al_009'){
              $output .=' slide ps_control_sbo swipe_x ps_easeOutInCubic  " data-ride="carousel" data-pause="hover"  data-interval="4000" data-duration="2000"';
                }
            if($style_fullwidth == 'fw_al_010'){
              $output .=' ps_rotate_scale_o ps_indicators_ld swipe_x ps_easeOutInCubic  " data-ride="carousel" data-pause="hover"  data-interval="4000" data-duration="2000"';
                }
            if($style_fullwidth == 'fw_il_011'){
              $output .=' slide ps_control_halfr swipe_x ps_easeOutQuint  " data-ride="carousel" data-pause="hover"  data-interval="4000" data-duration="2000"';
                }
            if($style_fullwidth == 'fw_il_012'){
              $output .=' slide ps_control_wflong swipe_x ps_easeOutQuint   " data-ride="carousel" data-pause="hover"  data-interval="4000" data-duration="2000"';
                }

            if($style_fullwidth == 'fw_il_013'){
              $output .=' slide ps_control_halfr swipe_x ps_easeOutQuint  " data-ride="carousel" data-pause="hover"  data-interval="4000" data-duration="2000"';
                }

            if($style_fullwidth == 'fw_il_014'){
              $output .=' slide ps_control_rfsmall swipe_x ps_easeOutQuint  " data-ride="carousel" data-pause="hover"  data-interval="4000" data-duration="2000"';
                }

            if($style_fullwidth == 'fw_il_015'){
                $output .=' slide ps_control_roundsm swipe_x ps_easeOutQuint  " data-ride="carousel" data-pause="hover"  data-interval="4000" data-duration="2000"';
            }

            if($style_fullwidth == 'fw_il_016'){
                $output .=' slide ps_slide_y ps_control_rt_y swipe_y ps_easeOutInCubic  " data-ride="carousel" data-pause="hover"  data-interval="4000" data-duration="2000"';
            }

            if($style_fullwidth == 'fw_il_017'){
                $output .=' slide ps_control_squarefill swipe_x ps_easeOutQuint  " data-ride="carousel" data-pause="hover"  data-interval="4000" data-duration="2000"';
            }

            if($style_fullwidth == 'fw_il_018'){
                $output .=' slide ps_control_rectanlefil swipe_x ps_easeOutQuint  " data-ride="carousel" data-pause="hover"  data-interval="4000" data-duration="2000"';
            }



            if($style_fullwidth == 'fw_il_019'){
                $output .=' slide ps_control_bradiustrans swipe_x ps_easeOutQuint  " data-ride="carousel" data-pause="hover"  data-interval="4000" data-duration="2000"';
            }

            if($style_fullwidth == 'fw_il_020'){
                $output .=' slide ps_control_xlongicon swipe_x ps_easeOutInCubic  " data-ride="carousel" data-pause="hover"  data-interval="4000" data-duration="2000"';
            }
            if($uc_list_full_style == 'js_list_051'){
                $output .=' slide ps_indicators_square_dots ps_control_square_txt thumb_scroll_x swipe_x ps_slowSpeedy" data-ride="carousel" data-pause="hover" data-interval="3000" data-duration="2000" ';
            }
            $output .='';


                $output .='">

        <style>
        .carousel-control{color:'.$uc_arrow_color.'!important; background:'.$uc_arrow_bg_color.'!important;}
        .carousel-control:hover{color:'.$uc_arrow_color_hvr.'!important; background:'.$uc_arrow_bg_color_hvr.'!important;}
        
            '.$uc_custom_css.'
        </style>
        <style>
                                a.uc_btn_sec{padding: '.$uc_button_padding_top.'px '.$uc_button_padding_left.'px!important}
                            </style>
        <ol class="carousel-indicators">
                            ';
        if($style_fullwidth == 'fw_al_001'){
        $carousel_data_slides = $carousel_options['group_option_alf1'];        
        $i = 0;
        foreach( $carousel_data_slides as $carousel_data_slide ){ 
            if ($i==0){
                $class = 'active';
            }else{
                $class = '';
            }
            $output .='<li data-target="#'.$style_fullwidth.'" data-slide-to="'.$i.'" class="'.$class.'"></li>';
        $i++;
        }    
        }
        /*if($style_fullwidth == 'fw_al_007'){
        $carousel_data_slides = $carousel_options['group_option_al7'];        
        $i = 0;
        foreach( $carousel_data_slides as $carousel_data_slide ){ 
            if ($i==0){
                $class = 'active';
            }else{
                $class = '';
            }
            $output .='<li data-target="#'.$style_fullwidth.'" data-slide-to="'.$i.'" class="'.$class.'"></li>';
        $i++;
        }    
        }        
        if($style_fullwidth == 'fw_al_008'){
        $carousel_data_slides = $carousel_options['group_option_al8'];        
        $i = 0;
        foreach( $carousel_data_slides as $carousel_data_slide ){ 
            if ($i==0){
                $class = 'active';
            }else{
                $class = '';
            }
            $output .='<li data-target="#'.$style_fullwidth.'" data-slide-to="'.$i.'" class="'.$class.'"></li>';
        $i++;
        }    
        }        
        if($style_fullwidth == 'fw_al_010'){
        $carousel_data_slides = $carousel_options['group_option_al10'];        
        $i = 0;
        foreach( $carousel_data_slides as $carousel_data_slide ){ 
            if ($i==0){
                $class = 'active';
            }else{
                $class = '';
            }
            $output .='<li data-target="#'.$style_fullwidth.'" data-slide-to="'.$i.'" class="'.$class.'"></li>';
        $i++;
        }    
        }*/ 
        
    
        $output .='</ol>
        
        
        
        


        <!-- Wrapper For Slides -->
        <div class="carousel-inner" role="listbox"> ';

if( ! empty( $carousel_options['group_option_alf1'] ) ) {

    $carousel_groups = $carousel_options['group_option_alf1'];


    foreach( $carousel_groups as $carousel_group ){

    $image_src_alf1 = $carousel_group['image_alf1'];
    $image_alf1 = wp_get_attachment_image_src( $image_src_alf1, 'full' );
    $uc_header_alf1 = $carousel_group['uc_header_alf1'];
    $uc_sub_header_alf1 = $carousel_group['uc_sub_header_alf1'];
    $uc_desc_alf1 = $carousel_group['uc_desc_alf1'];
    $uc_buttonn_text_alf1 = $carousel_group['uc_buttonn_text_alf1'];
    $uc_buttonn_link_alf1 = $carousel_group['uc_buttonn_link_alf1'];
    $uc_open_link_alf1 = $carousel_group['uc_open_link_alf1'];



    //print_r($image);

        if($style_fullwidth == 'fw_al_001' ) {

        $output .= '<!-- First Slide -->
            <div class="item">
                                        <style>
                                            a.uc_btn_sec:hover {
                                                    color: '.$uc_btn_text_hover.'!important;
                                                    background: '.$uc_btn_background_hover.'!important;
                                                    border-color:'.$uc_btn_border_hover.'!important;
                                                }
                                        </style>
                <!-- Slide Background -->
                <img style="height:'.$uc_custom_image_height.'px; width:100%; "  src="'.$image_alf1[0].'" alt="'.$uc_header_alf1.'" />

                <!-- Slide Text Layer -->
                <div class="fw_al_001_slide">
                    <h3 data-animation="animated fadeInUp"  style="margin-top:10px;font-family:'.$uc_sub_heading_font['family'].'; font-weight:'.$uc_sub_heading_font['variant'].'; font::'.$uc_sub_heading_font['font'].'; font-size:'.$uc_sub_heading_font_size.'px; font-style:'.$uc_sub_heading_font_style.' ; color:'.$uc_sub_header_color.';">'.$uc_sub_header_alf1.'</h3>
                    
                    <h1 data-animation="animated fadeInUp"  style="font-family:'.$uc_heading_font['family'].'; font-weight:'.$uc_heading_font['variant'].'; font::'.$uc_heading_font['font'].'; font-size:'.$uc_heading_font_size.'px; font-style:'.$uc_heading_font_style.' ; color:'.$uc_header_color.';">'.$uc_header_alf1.'</h1>

                    <p data-animation="animated fadeInUp"  style="font-family:'.$uc_desc_font['family'].'; font-weight::'.$uc_desc_font['variant'].'; font::'.$uc_desc_font['font'].'; font-size:'.$uc_desc_font_size.'px; font-style:'.$uc_desc_font_style.' ; color:'.$uc_desc_header_color.';  padding:30px 20px">'.$uc_desc_alf1.'</p>';

                        if(!empty ($uc_buttonn_text_alf1)){
                            $output .= '

                            <a href="'.$uc_buttonn_link_alf1.'" target="'.$uc_open_link_alf1.'" data-animation="animated fadeInUP" class="uc_btn_sec" style="color:'.$uc_btn_text_color.';background:'.$uc_btn_bg_color.'; border-color:'.$uc_btn_border_color.'; border-width:'.$uc_button_border_width.'px; font-size:'.$uc_btn_font_size.'px;" >'.$uc_buttonn_text_alf1.'</a>';
                            }
                $output .= '
                    
                    
                    
                    
                </div>
            </div>';
        }
        
    }
}

//end of full 1
if( ! empty( $carousel_options['group_option_al2'] ) ) {

    $carousel_groups = $carousel_options['group_option_al2'];


    foreach( $carousel_groups as $carousel_group ){

    $image_src_alf2 = $carousel_group['image_alf2'];
    $image_alf2 = wp_get_attachment_image_src( $image_src_alf2, 'full' );
    $title_alf2 = $carousel_group['title_alf2'];
    $desc_alf2 = $carousel_group['desc_alf2'];
    $buttonn_text_alf2 = $carousel_group['buttonn_text_alf2'];
    $buttonn_link_alf2 = $carousel_group['buttonn_link_alf2'];
    $open_link_alf2 = $carousel_group['open_link_alf2'];



    //print_r($image);

        if($style_fullwidth == 'fw_al_002' ) {

        $output .= '<div class="item">
<style>.fw_al_005_slide > a:nth-child(4){border:'.$uc_button_border_width.'!important;}</style>
                <!-- Slide Background -->
                <img style="height:'.$uc_custom_image_height.'px; width:'.$uc_custom_image_width.'px; " src="'.$image_alf2[0].'" />

                <!-- Slide Text Layer -->';


                $output .= '<div class="fw_al_002_slide" style="width:'.$uc_text_box_width.'%;">
                                        <style>
                                            a.uc_btn_sec:hover {
                                                    color: '.$uc_btn_text_hover.'!important;
                                                    background: '.$uc_btn_background_hover.'!important;
                                                    border-color:'.$uc_btn_border_hover.'!important;
                                                }
                                                .fw_al_002_slide > h1 > span{color:'.$uc_highlite_header_color.';}
                                        </style>
                
                     <h1 data-animation="animated fadeInRight" style="font-family:'.$uc_heading_font['family'].'; font-weight:'.$uc_heading_font['variant'].'; font::'.$uc_heading_font['font'].'; font-size:'.$uc_heading_font_size.'px; font-style:'.$uc_heading_font_style.' ; color:'.$uc_header_color.';">'.$title_alf2.'</h1>

                    <p data-animation="animated fadeInRight"  style="font-family:'.$uc_desc_font['family'].'; font-weight::'.$uc_desc_font['variant'].'; font::'.$uc_desc_font['font'].'; font-size:'.$uc_desc_font_size.'px; font-style:'.$uc_desc_font_style.' ; color:'.$uc_desc_header_color.'; margin-bottom:20px;width:'.$uc_text_box_width.'%;">'.$desc_alf2.'</p>';

                        if(!empty($buttonn_text_alf2)){
                            $output .= '                            
                            <a href="'.$buttonn_link_alf2.'" target="'.$open_link_alf2.'" data-animation="animated fadeInRight" class="uc_btn_sec" style="color:'.$uc_btn_text_color.';background:'.$uc_btn_bg_color.'; border-color:'.$uc_btn_border_color.'; border-width:'.$uc_button_border_width.'px; font-size:'.$uc_btn_font_size.'px;" >'.$buttonn_text_alf2.'adf</a>';
                            }
                $output .= '


                </div>
            </div>';
        }
        
    }
}
//end of full 2

if( ! empty( $carousel_options['group_option_al3'] ) ) {

    $carousel_groups = $carousel_options['group_option_al3'];


    foreach( $carousel_groups as $carousel_group ){


        if($style_fullwidth == 'fw_al_003' ) {

        $button_text_alf3 = $carousel_group['button_text_alf3'];
        $image_src_alf3 = $carousel_group['image_alf3'];
        $image_alf3 = wp_get_attachment_image_src( $image_src_alf3, 'full' );
        $title_alf3 = $carousel_group['title_alf3'];
        $desc_alf3 = $carousel_group['desc_alf3'];
        $button_link_alf3 = $carousel_group['button_link_alf3'];
        $open_link_alf3 = $carousel_group['open_link_alf3'];
        
                $output .= ' <div class="item">

                            <!-- Slide Background -->
                            <img src="'.$image_alf3[0].'" />

                            <!-- Slide Text Layer -->
                            <div class="fw_al_003_slide">
                            <style>
                                            a.uc_btn_sec:hover {
                                                    color: '.$uc_btn_text_hover.'!important;
                                                    background: '.$uc_btn_background_hover.'!important;
                                                    border-color:'.$uc_btn_border_hover.'!important;
                                                }
                                        </style>
                                        
                                <h1 data-animation="animated fadeInDown"  style="font-family:'.$uc_heading_font['family'].'; font-weight:'.$uc_heading_font['variant'].'; font::'.$uc_heading_font['font'].'; font-size:'.$uc_heading_font_size.'px; font-style:'.$uc_heading_font_style.' ; color:'.$uc_header_color.';">'.$title_alf3.'</h1>
                                <p data-animation="animated fadeIn"  style="padding:10px 20px;font-family:'.$uc_desc_font['family'].'; font-weight::'.$uc_desc_font['variant'].'; font::'.$uc_desc_font['font'].'; font-size:'.$uc_desc_font_size.'px; font-style:'.$uc_desc_font_style.' ; color:'.$uc_desc_header_color.';">'.$desc_alf3.'</p>';

                        if(!empty ($button_text_alf3)){
                            $output .= '

                            <a href="'.$button_link_alf3.'" target="'.$open_link_alf3.'" data-animation="animated fadeInUP" class="uc_btn_sec" style="color:'.$uc_btn_text_color.';background:'.$uc_btn_bg_color.'; border-color:'.$uc_btn_border_color.'; border-width:'.$uc_button_border_width.'px; font-size:'.$uc_btn_font_size.'px;" >'.$button_text_alf3.'</a>';
                            }
                $output .= '
                            </div>
                       </div>';
        }
        }
}
//end of full 3
        
        
if( ! empty( $carousel_options['group_option_al4'] ) ) {

    $carousel_groups = $carousel_options['group_option_al4'];


    foreach( $carousel_groups as $carousel_group ){        
        

        if($style_fullwidth == 'fw_al_004' ) {
                $image_src_alf4 = $carousel_group['image_alf4'];
                $image_alf4 = wp_get_attachment_image_src( $image_src_alf4, 'full' );
                $title_alf4 = $carousel_group['title_alf4'];
                $desc_alf4 = $carousel_group['desc_alf4'];
                $button_link_alf4 = $carousel_group['button_link_alf4'];
                $open_link_alf4 = $carousel_group['open_link_alf4'];
                $button_text_alf4 = $carousel_group['button_text_alf4'];
                $button_text_1_alf4 = $carousel_group['button_text_1_alf4'];
                $button_link_1_alf4 = $carousel_group['button_link_1_alf4'];
                $slide_from_left_right_alf4 = $carousel_group['slide_from_left_right_alf4'];

                $output .= ' <div class="item">

                            <!-- Slide Background -->
                            <img src="'.$image_alf4[0].'" />

                            <!-- Slide Text Layer -->
                            <div class="fw_al_004_slide">
                            
                                        <style>
                                            a.uc_btn_sec:hover {
                                                    color: '.$uc_btn_text_hover.'!important;
                                                    background: '.$uc_btn_background_hover.'!important;
                                                    border-color:'.$uc_btn_border_hover.'!important;
                                                }
                                        </style>
            					<h1 data-animation="animated zoomIn'.$slide_from_left_right_alf4.'"    style="font-family:'.$uc_heading_font['family'].'; font-weight:'.$uc_heading_font['variant'].'; font::'.$uc_heading_font['font'].'; font-size:'.$uc_heading_font_size.'px; font-style:'.$uc_heading_font_style.' ; color:'.$uc_header_color.';">'.$title_alf4.'</h1>
            					<p data-animation="animated zoomIn'.$slide_from_left_right_alf4.'"  style="font-family:'.$uc_desc_font['family'].'; font-weight::'.$uc_desc_font['variant'].'; font::'.$uc_desc_font['font'].'; font-size:'.$uc_desc_font_size.'px; font-style:'.$uc_desc_font_style.' ; color:'.$uc_desc_header_color.';">'.$desc_alf4.'</p> ';

            if(!empty ($button_text_alf4)){
                $output .= '

                <a href="'.$button_link_alf4.'" target="'.$open_link_alf4.'" data-animation="animated zoomIn'.$slide_from_left_right_alf4.'"    class="uc_btn_sec" style="color:'.$uc_btn_text_color.';background:'.$uc_btn_bg_color.'; border-color:'.$uc_btn_border_color.'; border-width:'.$uc_button_border_width.'px; font-size:'.$uc_btn_font_size.'px;" >'.$button_text_alf4.'</a>';
                                    }
            if(!empty ($button_text_1_alf4)){
                $output .= '

                <a href="'.$button_link_1_alf4.'" target="'.$open_link_alf4.'" data-animation="animated zoomIn'.$slide_from_left_right_alf4.'"   class="uc_btn_sec" style="color:'.$uc_btn_text_color.';background:'.$uc_btn_bg_color.'; border-color:'.$uc_btn_border_color.'; border-width:'.$uc_button_border_width.'px; font-size:'.$uc_btn_font_size.'px;" >'.$button_text_1_alf4.'</a>';
                                    }
                        $output .= '

                            </div>
                       </div>';
        }
        
    }
}
//end of full 4


if( ! empty( $carousel_options['group_option_al5'] ) ) {

    $carousel_groups = $carousel_options['group_option_al5'];


    foreach( $carousel_groups as $carousel_group ){
        if($style_fullwidth == 'fw_al_005' ) {
            
            $image_src_alf5 = $carousel_group['image_alf5'];
            $image_alf5 = wp_get_attachment_image_src( $image_src_alf5, 'full' );
            $title_alf5 = $carousel_group['title_alf5'];
            $desc_alf5 = $carousel_group['desc_alf5'];
            $button_link_alf5 = $carousel_group['button_link_alf5'];
            $open_link_alf5 = $carousel_group['open_link_alf5'];
            $button_text_alf5 = $carousel_group['button_text_alf5'];
            $button_text_1_alf5 = $carousel_group['button_text_1_alf5'];
            $button_link_1_alf5 = $carousel_group['button_link_1_alf5'];
            $slide_from_left_right_alf5 = $carousel_group['slide_from_left_right_alf5'];

                            $output .= ' <div class="item">

                                        <!-- Slide Background -->
                                        <img src="'.$image_alf5[0].'" />
                                        <style>
                                            a.uc_btn_sec:hover {
                                                    color: '.$uc_btn_text_hover.'!important;
                                                    background: '.$uc_btn_background_hover.'!important;
                                                    border-color:'.$uc_btn_border_hover.'!important;
                                                }
                                        </style>
                                        <!-- Slide Text Layer -->
                                        <div class="fw_al_005_slide '.$slide_from_left_right_alf5.'"  style="width:'.$uc_text_box_width.'%;">

                                       
                        					<h1 data-animation="animated zoomIn"  style="font-family:'.$uc_heading_font['family'].'; font-weight:'.$uc_heading_font['variant'].'; font::'.$uc_heading_font['font'].'; font-size:'.$uc_heading_font_size.'px; font-style:'.$uc_heading_font_style.' ; color:'.$uc_header_color.';">'.$title_alf5.'</h1>
                        					<p data-animation="animated zoomIn"  style="font-family:'.$uc_desc_font['family'].'; font-weight::'.$uc_desc_font['variant'].'; font::'.$uc_desc_font['font'].'; font-size:'.$uc_desc_font_size.'px; font-style:'.$uc_desc_font_style.' ; color:'.$uc_desc_header_color.';">'.$desc_alf5.'</p> ';

                            if(!empty ($button_text_alf5)){
                                            $output .= '
                                     
                                            <a class="uc_btn_sec" href="'.$button_link_alf5.'" target="'.$open_link_alf5.'" data-animation="animated zoomIn"  style="color:'.$uc_btn_text_color.';background:'.$uc_btn_bg_color.'; border-color:'.$uc_btn_border_color.'; border-width:'.$uc_button_border_width.'px; font-size:'.$uc_btn_font_size.'px;">'.$button_text_alf5.'</a>';
                                        }
                                        
                                        
                            if(!empty ($button_text_1_alf5)){
                                         $output .= '
                                         
                                         
                                         <a  href="'.$button_link_1_alf5.'" target="'.$open_link_alf5.'" data-animation="animated zoomIn"   class="uc_btn_sec" style="color:'.$uc_btn_text_color.';background:'.$uc_btn_bg_color.'; border-color:'.$uc_btn_border_color.'; border-width:'.$uc_button_border_width.'px; font-size:'.$uc_btn_font_size.'px;" >'.$button_text_1_alf5.'</a>';
                                        }
                            $output .= '

                            </div>
                       </div>';
        }
        
    }
}
//end of full 5

if( ! empty( $carousel_options['group_option_al6'] ) ) {

    $carousel_groups = $carousel_options['group_option_al6'];


    foreach( $carousel_groups as $carousel_group ){

        if($style_fullwidth == 'fw_al_006' ) {
            
            $image_src_alf6 = $carousel_group['image_alf6'];
            $image_alf6 = wp_get_attachment_image_src( $image_src_alf6, 'full' );
            $title_alf6 = $carousel_group['title_alf6'];
            $desc_alf6 = $carousel_group['desc_alf6'];
            $button_link_alf6 = $carousel_group['button_link_alf6'];
            $open_link_alf6 = $carousel_group['open_link_alf6'];
            $button_text_alf6 = $carousel_group['button_text_alf6'];
            $title_1_alf6 = $carousel_group['title_1_alf6'];
            $slide_from_left_right_alf6 = $carousel_group['slide_from_left_right_alf6'];

                            $output .= ' <div class="item">

                                        <!-- Slide Background -->
                                        <img src="'.$image_alf6[0].'" />

                                        <!-- Slide Text Layer -->
                                        <div class="fw_al_006_slide '.$slide_from_left_right_alf6.'">
                                        <style>
                                            a.uc_btn_sec:hover {
                                                    color: '.$uc_btn_text_hover.'!important;
                                                    background: '.$uc_btn_background_hover.'!important;
                                                    border-color:'.$uc_btn_border_hover.'!important;
                                                }
                                        </style>
                                        <div>
                        					<h3 data-animation="animated bounceIn" style="font-family:'.$uc_heading_font['family'].'; font-weight:'.$uc_heading_font['variant'].'; font::'.$uc_heading_font['font'].'; font-size:'.$uc_heading_font_size.'px; font-style:'.$uc_heading_font_style.' ; color:'.$uc_header_color.';">'.$title_alf6.'</h3>

                                            <h1 data-animation="animated bounceIn" style="font-family:'.$uc_sub_heading_font['family'].'; font-weight:'.$uc_sub_heading_font['variant'].'; font::'.$uc_sub_heading_font['font'].'; font-size:'.$uc_sub_heading_font_size.'px; font-style:'.$uc_sub_heading_font_style.' ; color:'.$uc_sub_header_color.';">'.$title_1_alf6.'</h1>
                                            
						                    <h4 data-animation="animated bounceIn" style="font-family:'.$uc_desc_font['family'].'; font-weight::'.$uc_desc_font['variant'].'; font::'.$uc_desc_font['font'].'; font-size:'.$uc_desc_font_size.'px; font-style:'.$uc_desc_font_style.' ; color:'.$uc_desc_header_color.';">'.$desc_alf6.'</h4>

                                        </div>';

                    if(!empty ($button_text_alf6)){
                                $output .= '<a href="'.$button_link_alf6.'" target="'.$open_link_alf6.'" data-animation="animated bounceIn" class="uc_btn_sec" style="color:'.$uc_btn_text_color.';background:'.$uc_btn_bg_color.'; border-color:'.$uc_btn_border_color.'; border-width:'.$uc_button_border_width.'px; font-size:'.$uc_btn_font_size.'px;margin-top:10px" >'.$button_text_alf6.'</a>';
                                        }
                            $output .= '

                            </div>



                       </div>';
        }
     }
}
//end of full 6       
        
    if( ! empty( $carousel_options['group_option_al7'] ) ) {

    $carousel_groups = $carousel_options['group_option_al7'];


    foreach( $carousel_groups as $carousel_group ){


        if($style_fullwidth == 'fw_al_007' ) {
            $image_src_alf7 = $carousel_group['image_alf7'];
            $image_alf7 = wp_get_attachment_image_src( $image_src_alf7, 'full' );
            $title_alf7 = $carousel_group['title_alf7'];
            $desc_alf7 = $carousel_group['desc_alf7'];
            $button_link_alf7 = $carousel_group['button_link_alf7'];
            $open_link_alf7 = $carousel_group['open_link_alf7'];     
            $button_text_alf7 = $carousel_group['button_text_alf7'];
            $title_1_alf7 = $carousel_group['title_1_alf7'];
            $flip_dirrection_alf7 = $carousel_group['flip_dirrection_alf7'];

                            $output .= ' <div class="item">

                                        <!-- Slide Background -->
                                        <img src="'.$image_alf7[0].'" />

                                        <!-- Slide Text Layer -->
                                        <div class="fw_al_007_slide">
                                        <style>
                                            a.uc_btn_sec:hover {
                                                    color: '.$uc_btn_text_hover.'!important;
                                                    background: '.$uc_btn_background_hover.'!important;
                                                    border-color:'.$uc_btn_border_hover.'!important;
                                                }
                                            .fw_al_007_slide > h1 > span,.fw_al_007_slide > h3 > span{color:'.$uc_highlite_header_color.';}
                                        </style>
                                        
                        					<h3 data-animation="animated flipIn'.$flip_dirrection_alf7.'" style="font-family:'.$uc_heading_font['family'].'; font-weight:'.$uc_heading_font['variant'].'; font::'.$uc_heading_font['font'].'; font-size:'.$uc_heading_font_size.'px; font-style:'.$uc_heading_font_style.' ; color:'.$uc_header_color.';">'.$title_alf7.'</h3>

                                            <h1 data-animation="animated flipIn'.$flip_dirrection_alf7.'" style="font-family:'.$uc_sub_heading_font['family'].'; font-weight:'.$uc_sub_heading_font['variant'].'; font::'.$uc_sub_heading_font['font'].'; font-size:'.$uc_sub_heading_font_size.'px; font-style:'.$uc_sub_heading_font_style.' ; color:'.$uc_sub_header_color.';">'.$title_1_alf7.'</h1>

						                    <p data-animation="animated flipIn'.$flip_dirrection_alf7.'" style="padding:10px 100px;font-family:'.$uc_desc_font['family'].'; font-weight::'.$uc_desc_font['variant'].'; font::'.$uc_desc_font['font'].'; font-size:'.$uc_desc_font_size.'px; font-style:'.$uc_desc_font_style.' ; color:'.$uc_desc_header_color.'; margin-bottom:20px;">'.$desc_alf7.'</p>

                                        ';

                    if(!empty ($button_text_alf7)){
                                $output .= '<a href="'.$button_link_alf7.'" target="'.$open_link_alf7.'" data-animation="animated flipIn'.$flip_dirrection_alf7.'"  class="uc_btn_sec" style="color:'.$uc_btn_text_color.';background:'.$uc_btn_bg_color.'; border-color:'.$uc_btn_border_color.'; border-width:'.$uc_button_border_width.'px; font-size:'.$uc_btn_font_size.'px;margin-top:10px;" >'.$button_text_alf7.'</a>';
                                        }
                            $output .= '

                            </div>



                       </div>';
        }
    }
}
//end of full 7        
        
        
    if( ! empty( $carousel_options['group_option_al8'] ) ) {

    $carousel_groups = $carousel_options['group_option_al8'];


    foreach( $carousel_groups as $carousel_group ){

        if($style_fullwidth == 'fw_al_008' ) {

            $image_src_alf8 = $carousel_group['image_alf8'];
            $image_alf8 = wp_get_attachment_image_src( $image_src_alf8, 'full' );
            $title_alf8 = $carousel_group['title_alf8'];
            $desc_alf8 = $carousel_group['desc_alf8'];
            $button_link_alf8 = $carousel_group['button_link_alf8'];
            $open_link_alf8 = $carousel_group['open_link_alf8'];
            $season_alf8 = $carousel_group['season_alf8'];
            $color_alf8 = $carousel_group['color_alf8'];
            $serial_alf8 = $carousel_group['serial_alf8'];
            $money_sign_alf8 = $carousel_group['money_sign_alf8'];
            $price_alf8 = $carousel_group['price_alf8'];
            $want_buy_alf8 = $carousel_group['want_buy_alf8'];
            $button_link_alf8 = $carousel_group['button_link_alf8'];
            $button_text_1_alf8 = $carousel_group['button_text_1_alf8'];
            $button_link_1_alf8 = $carousel_group['button_link_1_alf8'];
            $slide_from_left_right_alf8 = $carousel_group['slide_from_left_right_alf8'];

                            $output .= ' <div class="item">
                                        <style>
                                            a.uc_btn_sec:hover {
                                                    color: '.$uc_btn_text_hover.'!important;
                                                    background: '.$uc_btn_background_hover.'!important;
                                                    border-color:'.$uc_btn_border_hover.'!important;
                                                }
                                        </style>
                                        
                                <!-- Slide Background -->
                                <img src="'.$image_alf8[0].'" />

                                <!-- Slide Text Layer -->
                               <div class="fw_al_008_slide '.$slide_from_left_right_alf8.'">
                					<h6 data-animation="animated fadeInUp"  style="font-family:'.$uc_desc_font['family'].'; font-weight::'.$uc_desc_font['variant'].'; font::'.$uc_desc_font['font'].'; font-size:'.$uc_desc_font_size.'px; font-style:'.$uc_desc_font_style.' ; color:'.$uc_desc_header_color.';">'.$season_alf8.'</h6>
                                    
                					<h2 data-animation="animated fadeInUp"  style="font-family:'.$uc_heading_font['family'].'; font-weight:'.$uc_heading_font['variant'].'; font::'.$uc_heading_font['font'].'; font-size:'.$uc_heading_font_size.'px; font-style:'.$uc_heading_font_style.' ; color:'.$uc_header_color.';">'.$title_alf8.'</h2>

                					<h3 data-animation="animated fadeInUp"  style="margin-top:5px;font-family:'.$uc_heading_font['family'].'; font-weight:'.$uc_heading_font['variant'].'; font::'.$uc_heading_font['font'].'; font-size:'.$uc_heading_font_size.'px; font-style:'.$uc_heading_font_style.' ; color:'.$uc_header_color.';">'.$color_alf8.'</h3>

                					<p data-animation="animated fadeInUp"  style="margin-top:5px;font-family:'.$uc_heading_font['family'].'; font-weight:'.$uc_heading_font['variant'].'; font::'.$uc_heading_font['font'].'; font-size:'.$uc_heading_font_size.'px; font-style:'.$uc_heading_font_style.' ; color:'.$uc_header_color.';">'.$desc_alf8.'</p>

                					<h5 data-animation="animated fadeInUp"  style="margin-top:5px;font-family:'.$uc_desc_font['family'].'; font-weight::'.$uc_desc_font['variant'].'; font::'.$uc_desc_font['font'].'; font-size:'.$uc_desc_font_size.'px; font-style:'.$uc_desc_font_style.' ; color:'.$uc_desc_header_color.';">'.$serial_alf8.'</h5>

                					<h1 data-animation="animated fadeInUp" style="margin-top:5px;font-family:'.$uc_sub_heading_font['family'].'; font-weight:'.$uc_sub_heading_font['variant'].'; font::'.$uc_sub_heading_font['font'].'; font-size:'.$uc_sub_heading_font_size.'px; font-style:'.$uc_sub_heading_font_style.' ; color:'.$uc_sub_header_color.';"><sub></sub><i class="fa '.$money_sign_alf8.'"></i> '.$price_alf8.'</h1>';

                if($want_buy_alf8 == 'yes'){
            			$output .= '<a href="'.$button_link_alf8.'" data-animation="animated fadeInUp"  class="uc_btn_sec" style="color:'.$uc_btn_text_color.';background:'.$uc_btn_bg_color.'; border-color:'.$uc_btn_border_color.'; border-width:'.$uc_button_border_width.'px; font-size:'.$uc_btn_font_size.'px;"><span class="fa fa-shopping-basket"></span> Buy Now</a>';}


                    if(!empty ($button_text_1_alf8)){
                                $output .= '<a href="'.$button_link_1_alf8.'" target="'.$open_link_alf8.'" data-animation="animated fadeInUp"  class="uc_btn_sec" style="color:'.$uc_btn_text_color.';background:'.$uc_btn_bg_color.'; border-color:'.$uc_btn_border_color.'; border-width:'.$uc_button_border_width.'px; font-size:'.$uc_btn_font_size.'px;margin-left:20px">'.$button_text_1_alf8.'</a>';
                                        }
                            $output .= '

                            </div>



                       </div>';
        }
    }
}
//end of full 8       
        
        
    if( ! empty( $carousel_options['group_option_al9'] ) ) {

    $carousel_groups = $carousel_options['group_option_al9'];


    foreach( $carousel_groups as $carousel_group ){

        if($style_fullwidth == 'fw_al_009' ) {

            $image_src_alf9 = $carousel_group['image_alf9'];
            $image_alf9 = wp_get_attachment_image_src( $image_src_alf9, 'full' );
            $title_alf9 = $carousel_group['title_alf9'];
            $desc_alf9 = $carousel_group['desc_alf9'];
            $button_link_alf9 = $carousel_group['button_link_alf9'];
            $open_link_alf9 = $carousel_group['open_link_alf9'];
            $title_1_alf9 = $carousel_group['title_1_alf9'];
            $button_text_alf9 = $carousel_group['button_text_alf9'];
            $slide_from_left_right_alf9 = $carousel_group['slide_from_left_right_alf9'];

                            $output .= ' <div class="item">

                                <!-- Slide Background -->
                                <img src="'.$image_alf9[0].'"  alt="'.$title_alf9.'" />

                                <!-- Slide Text Layer -->
                               <div class="fw_al_009_slide '.$slide_from_left_right_alf9.'">
                                        <style>
                                            a.uc_btn_sec:hover {
                                                    color: '.$uc_btn_text_hover.'!important;
                                                    background: '.$uc_btn_background_hover.'!important;
                                                    border-color:'.$uc_btn_border_hover.'!important;
                                                }
                                            .fw_al_009_slide > h3 > span,.fw_al_009_slide > h2 > span {color: '.$uc_highlite_header_color.';}
                                        </style>                               

                					<h3 data-animation="animated fadeInLeft" style="font-family:'.$uc_heading_font['family'].'; font-weight:'.$uc_heading_font['variant'].'; font::'.$uc_heading_font['font'].'; font-size:'.$uc_heading_font_size.'px; font-style:'.$uc_heading_font_style.' ; color:'.$uc_header_color.';">'.$title_alf9.'</h3>
                					<h2 data-animation="animated fadeInRight" style="font-family:'.$uc_sub_heading_font['family'].'; font-weight:'.$uc_sub_heading_font['variant'].'; font::'.$uc_sub_heading_font['font'].'; font-size:'.$uc_sub_heading_font_size.'px; font-style:'.$uc_sub_heading_font_style.' ; color:'.$uc_sub_header_color.';">'.$title_1_alf9.'</h2>
                					<h4 data-animation="animated fadeInLeft" style="font-family:'.$uc_desc_font['family'].'; font-weight::'.$uc_desc_font['variant'].'; font::'.$uc_desc_font['font'].'; font-size:'.$uc_desc_font_size.'px; font-style:'.$uc_desc_font_style.' ; color:'.$uc_desc_header_color.';">'.$desc_alf9.'</h4>';




                    if(!empty ($button_text_alf9)){
                                $output .= '<a href="'.$button_link_alf9.'"  target="'.$open_link_alf9.'" data-animation="animated fadeInRight"     class="uc_btn_sec" style="color:'.$uc_btn_text_color.';background:'.$uc_btn_bg_color.'; border-color:'.$uc_btn_border_color.'; border-width:'.$uc_button_border_width.'px; font-size:'.$uc_btn_font_size.'px;margin-top:10px" >'.$button_text_alf9.' <span class="fa fa-angle-double-right"></span></a>';
                                        }
                            $output .= '

                            </div>



                       </div>';
        }
    }
}
//end of full 9        
        
    if( ! empty( $carousel_options['group_option_al10'] ) ) {

    $carousel_groups = $carousel_options['group_option_al10'];


    foreach( $carousel_groups as $carousel_group ){

        if($style_fullwidth == 'fw_al_010' ) {

            $image_src_alf10 = $carousel_group['image_alf10'];
            $image_alf10 = wp_get_attachment_image_src( $image_src_alf10, 'full' );
            $title_alf10 = $carousel_group['title_alf10'];
            $desc_alf10 = $carousel_group['desc_alf10'];
            $button_link_alf10 = $carousel_group['button_link_alf10'];
            $open_link_alf10 = $carousel_group['open_link_alf10'];
            $title_1_alf10 = $carousel_group['title_1_alf10'];
            $button_text_alf10 = $carousel_group['button_text_alf10'];

                            $output .= ' <div class="item">

                                <!-- Slide Background -->
                                <img src="'.$image_alf10[0].'"  alt="'.$title_alf10.'" />
                                        <style>
                                            a.uc_btn_sec:hover {
                                                    color: '.$uc_btn_text_hover.'!important;
                                                    background: '.$uc_btn_background_hover.'!important;
                                                    border-color:'.$uc_btn_border_hover.'!important;
                                                }
                                            .fw_al_009_slide > h3 > span,.fw_al_009_slide > h2 > span {color: '.$uc_highlite_header_color.';}
                                        </style>                                

                                <!-- Slide Text Layer -->
                               <div class="fw_al_010_slide ">
                               <h3 data-animation="animated zoomInLeft" style="font-family:'.$uc_heading_font['family'].'; font-weight:'.$uc_heading_font['variant'].'; font::'.$uc_heading_font['font'].'; font-size:'.$uc_heading_font_size.'px; font-style:'.$uc_heading_font_style.' ; color:'.$uc_header_color.';">'.$title_alf10.'</h3>
            					<h1 data-animation="animated zoomInLeft" style="font-family:'.$uc_sub_heading_font['family'].'; font-weight:'.$uc_sub_heading_font['variant'].'; font::'.$uc_sub_heading_font['font'].'; font-size:'.$uc_sub_heading_font_size.'px; font-style:'.$uc_sub_heading_font_style.' ; color:'.$uc_sub_header_color.';">'.$title_1_alf10.'</h1>
            					<p data-animation="animated zoomInLeft" style="font-family:'.$uc_desc_font['family'].'; font-weight::'.$uc_desc_font['variant'].'; font::'.$uc_desc_font['font'].'; font-size:'.$uc_desc_font_size.'px; font-style:'.$uc_desc_font_style.' ; color:'.$uc_desc_header_color.';">'.$desc_alf10.'</p>';




                    if(!empty ($button_text_alf10)){
                                $output .= '<a href="'.$button_link_alf10.'"  target="'.$open_link_alf10.'" data-animation="animated zoomInLeft"  class="uc_btn_sec" style="color:'.$uc_btn_text_color.';background:'.$uc_btn_bg_color.'; border-color:'.$uc_btn_border_color.'; border-width:'.$uc_button_border_width.'px; font-size:'.$uc_btn_font_size.'px;margin-top:10px" >'.$button_text_alf10.' <span class="fa fa-angle-double-right"></span></a>';
                                        }
                            $output .= '

                            </div>



                       </div>';
        }
    }
}
//end of full 10        
        

if( ! empty( $carousel_options['group_option_il11'] ) ) {

    $carousel_groups = $carousel_options['group_option_il11'];


    foreach( $carousel_groups as $carousel_group ){
        if($style_fullwidth == 'fw_il_011' ) {
            $image_src_il11 = $carousel_group['image_1_il11'];
            $image_il11 = wp_get_attachment_image_src( $image_src_il11, 'full' );
            
            $image_src_1_il11 = $carousel_group['image_1_il11'];
            $image_1_il11 = wp_get_attachment_image_src( $image_src_1_il11, 'full' );

            $image_src_2_il11 = $carousel_group['image_2_il12'];
            $image_2_il11 = wp_get_attachment_image_src( $image_src_2_il11, 'full' );

            $title_1_il11 = $carousel_group['title_1_il11'];
            $title_il11 = $carousel_group['title_il11'];
            $desc_il11 = $carousel_group['desc_il11'];
            $button_text_il11 = $carousel_group['button_text_il11'];
            $button_link_il11 = $carousel_group['button_link_il11'];
            $open_link_il11 = $carousel_group['open_link_il11'];
            $slide_from_left_right_il11 = $carousel_group['slide_from_left_right_il11'];

            $output .= '  <div class="item" style="transition-duration: 2000ms;"> <div class="row">
                                        <style>
                                            a.uc_btn_sec:hover {
                                                    color: '.$uc_btn_text_hover.'!important;
                                                    background: '.$uc_btn_background_hover.'!important;
                                                    border-color:'.$uc_btn_border_hover.'!important;
                                                }
                                            .fw_al_009_slide > h3 > span,.fw_al_009_slide > h2 > span {color: '.$uc_highlite_header_color.';}
                                            @media (min-width: 100px) and (max-width: 480px) {.carousel-inner img {height: '.$uc_responsive_480_ht.'px!important;}}
                                            @media (min-width: 481px) and (max-width: 600px) {.carousel-inner img {height: '.$uc_responsive_600_ht.'px!important;}}
                                            @media (min-width: 601px) and (max-width: 767px) {.carousel-inner img {height: '.$uc_responsive_767_ht.'px!important;}}
                                            @media (min-width: 768px) and (max-width: 991px) {.carousel-inner img {height: '.$uc_responsive_991_ht.'px!important;}}
                                            
                                        </style>

                    <!-- 1st Image -->
                    <div class="col-xs-4">
                        <img style="height:'.$uc_custom_image_height.'px; width:'.$uc_custom_image_width.'px; " src="'.$image_il11[0].'" alt="'.$title_il11.'" />
                    </div>
                    <!-- 2nd Image -->
                    <div class="col-xs-4">
                        <img style="height:'.$uc_custom_image_height.'px; width:'.$uc_custom_image_width.'px; " src="'.$image_1_il11[0].'" alt="'.$title_il11.'" />
                    </div>
                    <!-- 3rd Image -->
                    <div class="col-xs-4">
                        <img style="height:'.$uc_custom_image_height.'px; width:'.$uc_custom_image_width.'px; " src="'.$image_2_il11[0].'" alt="'.$title_il11.'"/>
                    </div>
                </div> <!-- /row -->

                <!-- Slide Text Layer -->
                <div class="fw_il_011_slide '.$slide_from_left_right_il11.'"  style="width:'.$uc_text_box_width.'%; height:100%">

                                        
                    <h2  style="font-family:'.$uc_heading_font['family'].'; font-weight:'.$uc_heading_font['variant'].'; font::'.$uc_heading_font['font'].'; font-size:'.$uc_heading_font_size.'px; font-style:'.$uc_heading_font_style.' ; color:'.$uc_header_color.';">'.$title_1_il11.'</h2>
                    <h1  style="font-family:'.$uc_sub_heading_font['family'].'; font-weight:'.$uc_sub_heading_font['variant'].'; font::'.$uc_sub_heading_font['font'].'; font-size:'.$uc_sub_heading_font_size.'px; font-style:'.$uc_sub_heading_font_style.' ; color:'.$uc_sub_header_color.';">'.$title_il11.'</h1>
                    <p  style="font-family:'.$uc_desc_font['family'].'; font-weight::'.$uc_desc_font['variant'].'; font::'.$uc_desc_font['font'].'; font-size:'.$uc_desc_font_size.'px; font-style:'.$uc_desc_font_style.' ; color:'.$uc_desc_header_color.';width:'.$uc_text_box_width.'%;">'.$desc_il11.'</p>';

                    if(!empty ($button_text_il11)){
                                $output .= '<a href="'.$button_link_il11.'"  target="'.$open_link_il11.'"  class="uc_btn_sec" style="color:'.$uc_btn_text_color.';background:'.$uc_btn_bg_color.'; border-color:'.$uc_btn_border_color.'; border-width:'.$uc_button_border_width.'px; font-size:'.$uc_btn_font_size.'px;margin-top:40px" >'.$button_text_il11.'</a>';
                                        }
                            $output .= '

                </div>
                </div>
                ';
        }
    }
}
//end of full 11

    if( ! empty( $carousel_options['group_option_il12'] ) ) {

    $carousel_groups = $carousel_options['group_option_il12'];


    foreach( $carousel_groups as $carousel_group ){
        
        if($style_fullwidth == 'fw_il_012' ) {

                $image_src_il12 = $carousel_group['image_il12'];
                $image_il12 = wp_get_attachment_image_src( $image_src_il12, 'full' );
                $title_il12 = $carousel_group['title_il12'];
                $button_text_il12 = $carousel_group['button_text_il12'];
                $button_link_il12 = $carousel_group['button_link_il12'];
                $open_link_il12 = $carousel_group['open_link_il12'];
                $image_src_1_il12 = $carousel_group['image_1_il12'];
                $image_1_il12 = wp_get_attachment_image_src( $image_src_1_il12, 'full' );
                $image_src_2_il12 = $carousel_group['image_2_il12'];
                $image_2_il12 = wp_get_attachment_image_src( $image_src_2_il12, 'full' );
                $image_src_3_il12 = $carousel_group['image_3_il12'];
                $image_3_il12 = wp_get_attachment_image_src( $image_src_3_il12, 'full' );
                $title_1_il12 = $carousel_group['title_1_il12'];
                $title_2_il12 = $carousel_group['title_2_il12'];
                $title_3_il12 = $carousel_group['title_3_il12'];
                $button_text_il12 = $carousel_group['button_text_il12'];
                $button_text_1_il12 = $carousel_group['button_text_1_il12'];
                $button_text_2_il12 = $carousel_group['button_text_2_il12'];
                $button_text_3_il12 = $carousel_group['button_text_3_il12'];
                $button_link_1_il12 = $carousel_group['button_link_1_il12'];
                $button_link_2_il12 = $carousel_group['button_link_2_il12'];
                $button_link_3_il12 = $carousel_group['button_link_3_il12'];



                            $output .= ' <div class="item">
                                        <style>
                                            a.uc_btn_sec:hover {
                                                    color: '.$uc_btn_text_hover.'!important;
                                                    background: '.$uc_btn_background_hover.'!important;
                                                    border-color:'.$uc_btn_border_hover.'!important;
                                                }
                                                @media (min-width: 100px) and (max-width: 480px) {.carousel-inner img {height: '.$uc_responsive_480_ht.'px!important;}}
                                            @media (min-width: 481px) and (max-width: 600px) {.carousel-inner img {height: '.$uc_responsive_600_ht.'px!important;}}
                                            @media (min-width: 601px) and (max-width: 767px) {.carousel-inner img {height: '.$uc_responsive_767_ht.'px!important;}}
                                            @media (min-width: 768px) and (max-width: 991px) {.carousel-inner img {height: '.$uc_responsive_991_ht.'px!important;}}
                                            
                                        </style>
                                        
                            				<!-- 1st row -->
                            				<div class="row">
                            					<!-- 1st Image -->
                            					<div class="col-xs-6">
                            						<img style="height:'.$uc_custom_image_height.'px; width:'.$uc_custom_image_width.'px; " src="'.$image_il12[0].'"  alt="'.$title_il12.'" data-animation="animated fadeIn" />
                            						<!-- Slide Text Layer -->
                            						<div class="fw_il_012_slide">
                            							<span  style="font-family:'.$uc_heading_font['family'].'; font-weight:'.$uc_heading_font['variant'].'; font::'.$uc_heading_font['font'].'; font-size:'.$uc_heading_font_size.'px; font-style:'.$uc_heading_font_style.' ; color:'.$uc_header_color.';">- '.$title_il12.'</span>';

                                                        if(!empty($button_text_il12)){

                            						   $output .= '	<a href="'.$button_link_il12.'" target="'.$open_link_il12.'" class="uc_btn_sec" style="color:'.$uc_btn_text_color.';background:'.$uc_btn_bg_color.'; border-color:'.$uc_btn_border_color.'; border-width:'.$uc_button_border_width.'px; font-size:'.$uc_btn_font_size.'px;" >'.$button_text_il12.'</a>';
                                                       }


                            						$output .= '</div> <!-- /fw_il_012_slide -->
                            					</div>
                            					<!-- 2nd Image -->
                            					<div class="col-xs-6">
                            						<img style="height:'.$uc_custom_image_height.'px; width:'.$uc_custom_image_width.'px; " src="'.$image_1_il12[0].'" alt="fw_il_012_02" data-animation="animated fadeIn" />
                            						<!-- Slide Text Layer -->
                            						<div class="fw_il_012_slide">
                            							<span  style="font-family:'.$uc_heading_font['family'].'; font-weight:'.$uc_heading_font['variant'].'; font::'.$uc_heading_font['font'].'; font-size:'.$uc_heading_font_size.'px; font-style:'.$uc_heading_font_style.' ; color:'.$uc_header_color.';">- '.$title_1_il12.'</span>';

                                                        if(!empty($button_text_1_il12)){

                            						   $output .= '	<a href="'.$button_link_1_il12.'" target="'.$open_link_il12 .'" class="uc_btn_sec" style="color:'.$uc_btn_text_color.';background:'.$uc_btn_bg_color.'; border-color:'.$uc_btn_border_color.'; border-width:'.$uc_button_border_width.'px; font-size:'.$uc_btn_font_size.'px;" >'.$button_text_1_il12.'</a>';
                                                       }


                            						$output .= '</div> <!-- /fw_il_012_slide -->
                            					</div>
                            				</div> <!-- /row -->

                            				<!-- 2nd row -->
                            				<div class="row">
                            					<!-- 1st Image -->
                            					<div class="col-xs-6">
                            						<img style="height:'.$uc_custom_image_height.'px; width:'.$uc_custom_image_width.'px; " src="'.$image_2_il12[0].'" alt="fw_il_012_03" data-animation="animated fadeIn" />
                            						<!-- Slide Text Layer -->
                            						<div class="fw_il_012_slide">
                                                    
                            							<span  style="font-family:'.$uc_heading_font['family'].'; font-weight:'.$uc_heading_font['variant'].'; font::'.$uc_heading_font['font'].'; font-size:'.$uc_heading_font_size.'px; font-style:'.$uc_heading_font_style.' ; color:'.$uc_header_color.';">- '.$title_2_il12.'</span>';

                                                        if(!empty($button_text_2_il12)){

                            						   $output .= '	<a href="'.$button_link_2_il12.'" target="'.$open_link_il12.'" class="uc_btn_sec" style="color:'.$uc_btn_text_color.';background:'.$uc_btn_bg_color.'; border-color:'.$uc_btn_border_color.'; border-width:'.$uc_button_border_width.'px; font-size:'.$uc_btn_font_size.'px;" >'.$button_text_2_il12.'</a>';
                                                       }


                            						$output .= '</div> <!-- /fw_il_012_slide -->
                            					</div>
                            					<!-- 2nd Image -->
                            					<div class="col-xs-6">
                            						<img style="height:'.$uc_custom_image_height.'px; width:'.$uc_custom_image_width.'px; " src="'.$image_3_il12[0].'" alt="fw_il_012_04" data-animation="animated fadeIn" />
                            						<!-- Slide Text Layer -->
                            						<div class="fw_il_012_slide">
                                                    
                            							<span  style="font-family:'.$uc_heading_font['family'].'; font-weight:'.$uc_heading_font['variant'].'; font::'.$uc_heading_font['font'].'; font-size:'.$uc_heading_font_size.'px; font-style:'.$uc_heading_font_style.' ; color:'.$uc_header_color.';">- '.$title_3_il12.'</span>';

                                                        if(!empty($button_text_3_il12)){

                            						   $output .= '	<a href="'.$button_link_3_il12.'" target="'.$open_link_il12.'" class="uc_btn_sec" style="color:'.$uc_btn_text_color.';background:'.$uc_btn_bg_color.'; border-color:'.$uc_btn_border_color.'; border-width:'.$uc_button_border_width.'px; font-size:'.$uc_btn_font_size.'px;" >'.$button_text_3_il12.'</a>';
                                                       }


                            						$output .= '</div> <!-- /fw_il_012_slide -->
                            					</div>
                            				</div> <!-- /row -->
                            			</div>';
        }
    }
}
//end of full 12

    if( ! empty( $carousel_options['group_option_il13'] ) ) {

    $carousel_groups = $carousel_options['group_option_il13'];


    foreach( $carousel_groups as $carousel_group ){
        
            if($style_fullwidth == 'fw_il_013' ) {
            
            $image_src_il13 = $carousel_group['image_il13'];
            $image_il13 = wp_get_attachment_image_src( $image_src_il13, 'full' );
            $title_il13 = $carousel_group['title_il13'];
            $button_text_il13 = $carousel_group['button_text_il13'];
            $button_link_il13 = $carousel_group['button_link_il13'];
            $open_link_il13 = $carousel_group['open_link_il13'];
            $image_src_1_il13= $carousel_group['image_1_il13'];    
            $image_1_il13= wp_get_attachment_image_src( $image_src_1_il13, 'full' );

            $image_src_2_il13= $carousel_group['image_2_il13'];
            $image_2_il13= wp_get_attachment_image_src( $image_src_2_il13, 'full' );

            $image_src_3_il13= $carousel_group['image_3_il13'];
            $image_3_il13= wp_get_attachment_image_src( $image_src_3_il13, 'full' );

            $image_src_4_il13= $carousel_group['image_4_il13'];
            $image_4_il13= wp_get_attachment_image_src( $image_src_4_il13, 'full' );

            $image_src_5_il13= $carousel_group['image_5_il13'];
            $image_5_il13= wp_get_attachment_image_src( $image_src_5_il13, 'full' );

            $image_src_6_il13= $carousel_group['image_6_il13'];
            $image_6_il13= wp_get_attachment_image_src( $image_src_6_il13, 'full' );

            $image_src_7_il13= $carousel_group['image_7_il13'];
            $image_7_il13= wp_get_attachment_image_src( $image_src_7_il13, 'full' );

                            $output .= ' <div class="item">
                                        <style>
                                            a.uc_btn_sec:hover {
                                                    color: '.$uc_btn_text_hover.'!important;
                                                    background: '.$uc_btn_background_hover.'!important;
                                                    border-color:'.$uc_btn_border_hover.'!important;
                                                }
                                                @media (min-width: 100px) and (max-width: 480px) {.carousel-inner img {height: '.$uc_responsive_480_ht.'px!important;}}
                                            @media (min-width: 481px) and (max-width: 600px) {.carousel-inner img {height: '.$uc_responsive_600_ht.'px!important;}}
                                            @media (min-width: 601px) and (max-width: 767px) {.carousel-inner img {height: '.$uc_responsive_767_ht.'px!important;}}
                                            @media (min-width: 768px) and (max-width: 991px) {.carousel-inner img {height: '.$uc_responsive_991_ht.'px!important;}}
                                            
                                        </style>                           

                <!-- 1st row -->
                    				<div class="row">
                    					<!-- 1st Image -->
                    					<div class="col-xs-3">
                    						<img style="height:'.$uc_custom_image_height.'px; width:'.$uc_custom_image_width.'px; "  src="'.$image_il13[0].'" data-animation="animated rotateInDownLeft" />
                    					</div>
                    					<!-- 2nd Image -->
                    					<div class="col-xs-3">
                    						<img style="height:'.$uc_custom_image_height.'px; width:'.$uc_custom_image_width.'px; "  src="'.$image_il13[0].'" alt="fw_il_013_02" data-animation="animated rotateInDownLeft" />
                    						<!-- Slide Text Layer -->
                    						<div class="fw_il_013_slide">
                    							<h1  style="font-family:'.$uc_heading_font['family'].'; font-weight:'.$uc_heading_font['variant'].'; font::'.$uc_heading_font['font'].'; font-size:'.$uc_heading_font_size.'px; font-style:'.$uc_heading_font_style.' ; color:'.$uc_header_color.';">'.$title_il13.'</h1>';

                                                        if(!empty($button_text_il13)){

                            						   $output .= '	<a href="'.$button_link_il13.'" target="'.$open_link_il13.'"  class="uc_btn_sec" style="color:'.$uc_btn_text_color.';background:'.$uc_btn_bg_color.'; border-color:'.$uc_btn_border_color.'; border-width:'.$uc_button_border_width.'px; font-size:'.$uc_btn_font_size.'px;">'.$button_text_il13.'</a>';
                                                       }


                            						$output .= '</div> <!-- /fw_il_013_slide -->
                    					</div>
                    					<!-- 3rd Image -->
                    					<div class="col-xs-3">
                    						<img style="height:'.$uc_custom_image_height.'px; width:'.$uc_custom_image_width.'px; "  src="'.$image_2_il13[0].'" alt="fw_il_013_03" data-animation="animated rotateInDownLeft" />
                    					</div>
                    					<!-- 4th Image -->
                    					<div class="col-xs-3">
                    						<img style="height:'.$uc_custom_image_height.'px; width:'.$uc_custom_image_width.'px; "  src="'.$image_3_il13[0].'" alt="fw_il_013_04" data-animation="animated rotateInDownLeft" />
                    					</div>
                    				</div> <!-- /row -->

                            				<!-- 2nd row -->
                    				<div class="row">
                    					<!-- 1st Image -->
                    					<div class="col-xs-3">
                    						<img style="height:'.$uc_custom_image_height.'px; width:'.$uc_custom_image_width.'px; "  src="'.$image_4_il13[0].'" alt="fw_il_013_05" data-animation="animated rotateInDownLeft" />
                    					</div>
                    					<!-- 2nd Image -->
                    					<div class="col-xs-3">
                    						<img style="height:'.$uc_custom_image_height.'px; width:'.$uc_custom_image_width.'px; "  src="'.$image_5_il13[0].'" alt="fw_il_013_06" data-animation="animated rotateInDownLeft" />
                    					</div>
                    					<!-- 3rd Image -->
                    					<div class="col-xs-3">
                    						<img style="height:'.$uc_custom_image_height.'px; width:'.$uc_custom_image_width.'px; "  src="'.$image_6_il13[0].'" alt="fw_il_013_07" data-animation="animated rotateInDownLeft" />
                    					</div>
                    					<!-- 2nd Image -->
                    					<div class="col-xs-3">
                    						<img style="height:'.$uc_custom_image_height.'px; width:'.$uc_custom_image_width.'px; "  src="'.$image_7_il13[0].'" alt="fw_il_013_08" data-animation="animated rotateInDownLeft" />
                    					</div>
                    			   <!-- /row -->
                            			<!-- /item ent --> ';

                            $output .= '

                            </div>



                       </div>';
        }
        
    }
}
//end of full 13
        
    if( ! empty( $carousel_options['group_option_il14'] ) ) {

    $carousel_groups = $carousel_options['group_option_il14'];


    foreach( $carousel_groups as $carousel_group ){
        
        if($style_fullwidth == 'fw_il_014' ) {

            $image_src_il14 = $carousel_group['image_il14'];
            $image_il14 = wp_get_attachment_image_src( $image_src_il14, 'full' );
            $title_il14 = $carousel_group['title_il14'];
            $desc_il14 = $carousel_group['desc_il14'];
            $button_link_il14 = $carousel_group['button_link_il14'];
            $open_link_il14 = $carousel_group['open_link_il14'];
            
            $image_src_1_il14 = $carousel_group['image_1_il14'];
            $image_1_il14 = wp_get_attachment_image_src( $image_src_1_il14, 'full' );

            $image_src_2_il14 = $carousel_group['image_2_il14'];
            $image_2_il14 = wp_get_attachment_image_src( $image_src_2_il14, 'full' );

            $image_src_3_il14 = $carousel_group['image_3_il14'];
            $image_3_il14 = wp_get_attachment_image_src( $image_src_3_il14, 'full' );

            $image_src_4_il14 = $carousel_group['image_4_il14'];
            $image_4_il14 = wp_get_attachment_image_src( $image_src_4_il14, 'full' );

            $image_src_5_il14 = $carousel_group['image_5_il14'];
            $image_5_il14 = wp_get_attachment_image_src( $image_src_5_il14, 'full' );

            $button_text_il14 = $carousel_group['button_text_il14'];

                            $output .= ' <div class="item">
                                        <style>
                                            a.uc_btn_sec:hover {
                                                    color: '.$uc_btn_text_hover.'!important;
                                                    background: '.$uc_btn_background_hover.'!important;
                                                    border-color:'.$uc_btn_border_hover.'!important;
                                                }
                                            @media (min-width: 100px) and (max-width: 480px) {.carousel-inner img {height: '.$uc_responsive_480_ht.'px!important;}}
                                            @media (min-width: 481px) and (max-width: 600px) {.carousel-inner img {height: '.$uc_responsive_600_ht.'px!important;}}
                                            @media (min-width: 601px) and (max-width: 767px) {.carousel-inner img {height: '.$uc_responsive_767_ht.'px!important;}}
                                            @media (min-width: 768px) and (max-width: 991px) {.carousel-inner img {height: '.$uc_responsive_991_ht.'px!important;}}
                                            
                                        </style>
                                        
                                				<!-- 1st row -->
                                				<div class="row">
                                					<!-- 1st Image -->
                                					<div class="col-xs-6 col-md-4">
                                						<img style="height:'.$uc_custom_image_height.'px; width:'.$uc_custom_image_width.'px; " src="'.$image_il14[0].'" alt="" data-animation="animated slideInRight" />
                                					</div>
                                					<!-- 2nd Image -->
                                					<div class="col-xs-6 col-md-8">
                                						<img style="height:'.$uc_custom_image_height.'px; width:'.$uc_custom_image_width.'px; " src="'.$image_1_il14[0].'" alt="" data-animation="animated slideInLeft" />
                                					</div>
                                				</div> <!-- /row -->
                                				<!-- 2nd row -->
                                				<div class="row">
                                					<!-- 1st Image -->
                                					<div class="col-xs-6 col-md-8">
                                						<img style="height:'.$uc_custom_image_height.'px; width:'.$uc_custom_image_width.'px; " src="'.$image_2_il14[0].'" alt="" data-animation="animated slideInLeft" />
                                						<!-- Slide Text Layer -->
                                						<div class="fw_il_014_slide fw_il_014_slide_small"  style="margin-top:15px;">
                                							<h2  style="font-family:'.$uc_heading_font['family'].'; font-weight:'.$uc_heading_font['variant'].'; font::'.$uc_heading_font['font'].'; font-size:'.$uc_heading_font_size.'px; font-style:'.$uc_heading_font_style.' ; color:'.$uc_header_color.';">'.$title_il14.'</h2>
                                							<h1  style="font-family:'.$uc_desc_font['family'].'; font-weight::'.$uc_desc_font['variant'].'; font::'.$uc_desc_font['font'].'; font-size:'.$uc_desc_font_size.'px; font-style:'.$uc_desc_font_style.' ; color:'.$uc_desc_header_color.';">'.$desc_il14.'</h1>';

                                                        if(!empty($button_text_il14)){

                            						   $output .= '	<a href="'.$button_link_il14.'" target="'.$open_link_il14.'"  class="uc_btn_sec" style="color:'.$uc_btn_text_color.';background:'.$uc_btn_bg_color.'; border-color:'.$uc_btn_border_color.'; border-width:'.$uc_button_border_width.'px; font-size:'.$uc_btn_font_size.'px;">'.$button_text_il14.'</a>';
                                                       }


                            						$output .= '</div> <!-- /fw_il_014_slide -->
                                					</div>
                                					<!-- 2nd Image -->
                                					<div class="col-xs-6 col-md-4">
                                						<img style="height:'.$uc_custom_image_height.'px; width:'.$uc_custom_image_width.'px; " src="'.$image_3_il14[0].'" alt="" data-animation="animated slideInRight" />
                                					</div>
                                				</div> <!-- /row -->
                                				<!-- 3rd row -->
                                				<div class="row">
                                					<!-- 1st Image -->
                                					<div class="col-xs-6 col-md-4">
                                						<img style="height:'.$uc_custom_image_height.'px; width:'.$uc_custom_image_width.'px; " src="'.$image_4_il14[0].'" alt="" data-animation="animated slideInRight" />
                                					</div>
                                					<!-- 2nd Image -->
                                					<div class="col-xs-6 col-md-8">
                                						<img style="height:'.$uc_custom_image_height.'px; width:'.$uc_custom_image_width.'px; " src="'.$image_5_il14[0].'" alt="" data-animation="animated slideInLeft" />
                                					</div>
                                				</div> <!-- /row -->
                                			</div>';
        }
    }
}
//end of full 14

    if( ! empty( $carousel_options['group_option_il15'] ) ) {

    $carousel_groups = $carousel_options['group_option_il15'];


    foreach( $carousel_groups as $carousel_group ){
        
        if($style_fullwidth == 'fw_il_015' ) {
            
            $image_src_il15 = $carousel_group['image_il15'];
            $image_il15 = wp_get_attachment_image_src( $image_src_il15, 'full' );
            $title_il15 = $carousel_group['title_il15'];
            $desc_il15 = $carousel_group['desc_il15'];
            $button_link_il15 = $carousel_group['button_link_il15'];
            $open_link_il15 = $carousel_group['open_link_il15'];
            $image_src_1_il15 = $carousel_group['image_1_il15'];
            $image_src_2_il15 = $carousel_group['image_2_il15'];
            $image_src_3_il15 = $carousel_group['image_3_il15'];
            $image_src_4_il15 = $carousel_group['image_4_il15'];
            $image_src_5_il15 = $carousel_group['image_5_il15'];
            $image_src_6_il15 = $carousel_group['image_6_il15'];
            $image_src_7_il15 = $carousel_group['image_7_il15'];
            $image_src_8_il15 = $carousel_group['image_8_il15'];
            $image_1_il15 = wp_get_attachment_image_src( $image_src_1_il15, 'full' );
            $image_2_il15 = wp_get_attachment_image_src( $image_src_2_il15, 'full' );
            $image_3_il15 = wp_get_attachment_image_src( $image_src_3_il15, 'full' );
            $image_4_il15 = wp_get_attachment_image_src( $image_src_4_il15, 'full' );
            $image_5_il15 = wp_get_attachment_image_src( $image_src_5_il15, 'full' );
            $image_6_il15 = wp_get_attachment_image_src( $image_src_6_il15, 'full' );
            $image_7_il15 = wp_get_attachment_image_src( $image_src_7_il15, 'full' );
            $image_8_il15 = wp_get_attachment_image_src( $image_src_8_il15, 'full' );

            $price_il15 = $carousel_group['price_il15'];

                            $output .= ' <div class="item">
                                        <style>
                                            a.uc_btn_sec:hover {
                                                    color: '.$uc_btn_text_hover.'!important;
                                                    background: '.$uc_btn_background_hover.'!important;
                                                    border-color:'.$uc_btn_border_hover.'!important;
                                                }
                                                @media (min-width: 100px) and (max-width: 480px) {.carousel-inner img {height: '.$uc_responsive_480_ht.'px!important;}}
                                            @media (min-width: 481px) and (max-width: 600px) {.carousel-inner img {height: '.$uc_responsive_600_ht.'px!important;}}
                                            @media (min-width: 601px) and (max-width: 767px) {.carousel-inner img {height: '.$uc_responsive_767_ht.'px!important;}}
                                            @media (min-width: 768px) and (max-width: 991px) {.carousel-inner img {height: '.$uc_responsive_991_ht.'px!important;}}
                                            
                                        </style>
                                        
                                            <!-- 1st row -->
                                            <div class="row">
                                                <!-- 1st Image -->
                                                <div class="col-xs-4">
                                                    <img style="height:'.$uc_custom_image_height.'px; width:'.$uc_custom_image_width.'px; " src="'.$image_il15[0].'" data-animation="animated slideInLeft" />
                                                </div>
                                                <!-- 2nd Image -->
                                                <div class="col-xs-4">
                                                    <img style="height:'.$uc_custom_image_height.'px; width:'.$uc_custom_image_width.'px; " src="'.$image_1_il15[0].'" alt="fw_il_015_02" data-animation="animated slideInLeft" />
                                                </div>
                                                <!-- 3rd Image -->
                                                <div class="col-xs-4">
                                                    <img style="height:'.$uc_custom_image_height.'px; width:'.$uc_custom_image_width.'px; " src="'.$image_2_il15[0].'" alt="fw_il_015_02" data-animation="animated slideInLeft" />
                                                </div>
                                            </div> <!-- /row -->
                                            <!-- 2nd row -->
                                            <div class="row">
                                                <!-- 1st Image -->
                                                <div class="col-xs-4">
                                                    <img style="height:'.$uc_custom_image_height.'px; width:'.$uc_custom_image_width.'px; " src="'.$image_3_il15[0].'" alt="fw_il_015_01" data-animation="animated slideInRight" />
                                                </div>
                                                <!-- 2nd Image -->
                                                <div class="col-xs-4">
                                                    <img style="height:'.$uc_custom_image_height.'px; width:'.$uc_custom_image_width.'px; " src="'.$image_4_il15[0].'" alt="fw_il_015_02" data-animation="animated slideInRight" />
                                                    <!-- Slide Text Layer -->
                                                    <div class="fw_il_015_slide">
                                                        <a href=""  class="uc_btn_sec" style="color:'.$uc_btn_text_color.';background:'.$uc_btn_bg_color.'; border-color:'.$uc_btn_border_color.'; border-width:'.$uc_button_border_width.'px; font-size:'.$uc_btn_font_size.'px;border-radius:50%; height:60px;width:60px;padding:0;">$'.$price_il15.'</a>
                                                        <h6  style="font-family:'.$uc_heading_font['family'].'; font-weight:'.$uc_heading_font['variant'].'; font::'.$uc_heading_font['font'].'; font-size:'.$uc_heading_font_size.'px; font-style:'.$uc_heading_font_style.' ; color:'.$uc_header_color.';">'.$title_il15.'</h6>
                                                        <h1  style="font-family:'.$uc_desc_font['family'].'; font-weight::'.$uc_desc_font['variant'].'; font::'.$uc_desc_font['font'].'; font-size:'.$uc_desc_font_size.'px; font-style:'.$uc_desc_font_style.' ; color:'.$uc_desc_header_color.';">'.$desc_il15.'</h1>
                                                    </div> <!-- /fw_il_015_slide -->
                                                </div>
                                                <!-- 3rd Image -->
                                                <div class="col-xs-4">
                                                    <img style="height:'.$uc_custom_image_height.'px; width:'.$uc_custom_image_width.'px; " src="'.$image_5_il15[0].'" alt="fw_il_015_06" data-animation="animated slideInRight" />
                                                </div>
                                            </div> <!-- /row -->
                                            <!-- 3rd row -->
                                            <div class="row">
                                                <!-- 1st Image -->
                                                <div class="col-xs-4">
                                                    <img style="height:'.$uc_custom_image_height.'px; width:'.$uc_custom_image_width.'px; " src="'.$image_6_il15[0].'" alt="fw_il_015_07" data-animation="animated slideInLeft" />
                                                </div>
                                                <!-- 2nd Image -->
                                                <div class="col-xs-4">
                                                    <img style="height:'.$uc_custom_image_height.'px; width:'.$uc_custom_image_width.'px; " src="'.$image_7_il15[0].'" alt="fw_il_015_08" data-animation="animated slideInLeft" />
                                                </div>
                                                <!-- 3rd Image -->
                                                <div class="col-xs-4">
                                                    <img style="height:'.$uc_custom_image_height.'px; width:'.$uc_custom_image_width.'px; " src="'.$image_8_il15[0].'" alt="fw_il_015_09" data-animation="animated slideInLeft" />
                                                </div>
                                            </div> <!-- /row -->
                                        </div>';
        }
    }
}
//end of full 15    

    if( ! empty( $carousel_options['group_option_il16'] ) ) {

    $carousel_groups = $carousel_options['group_option_il16'];


    foreach( $carousel_groups as $carousel_group ){
        
        if($style_fullwidth == 'fw_il_016' ) {

            $image_src_il16 = $carousel_group['image_il16'];
            $image_il16 = wp_get_attachment_image_src( $image_src_il16, 'full' );
            $title_il16 = $carousel_group['title_il16'];
            $desc_il16 = $carousel_group['desc_il16'];
            $button_link_il16 = $carousel_group['button_link_il16'];
            $open_link_il16 = $carousel_group['open_link_il16'];
            $image_src_1_il16 = $carousel_group['image_1_il16'];
            $image_1_il16 = wp_get_attachment_image_src( $image_src_1_il16, 'full' );
            $button_text_il16 = $carousel_group['button_text_il16'];

                            $output .= '<div class="item">
                                        <style>
                                            a.uc_btn_sec:hover {
                                                    color: '.$uc_btn_text_hover.'!important;
                                                    background: '.$uc_btn_background_hover.'!important;
                                                    border-color:'.$uc_btn_border_hover.'!important;
                                                }
                                                @media (min-width: 100px) and (max-width: 480px) {.carousel-inner img {height: '.$uc_responsive_480_ht.'px!important;}}
                                            @media (min-width: 481px) and (max-width: 600px) {.carousel-inner img {height: '.$uc_responsive_600_ht.'px!important;}}
                                            @media (min-width: 601px) and (max-width: 767px) {.carousel-inner img {height: '.$uc_responsive_767_ht.'px!important;}}
                                            @media (min-width: 768px) and (max-width: 991px) {.carousel-inner img {height: '.$uc_responsive_991_ht.'px!important;}}
                                            
                                        </style>
                <!-- row -->
                                            <div class="row">
                                                <!-- 1st Image -->
                                                <div class="col-xs-6">
                                                    <img style="height:'.$uc_custom_image_height.'px; width:'.$uc_custom_image_width.'px; " src="'.$image_il16[0].'" data-animation="animated fadeInDown" />
                                                    <!-- Slide Text Layer -->
                                                    <div class="fw_il_016_slide fw_il_016_slide_center">
                                                        <h1 style="font-family:'.$uc_heading_font['family'].'; font-weight:'.$uc_heading_font['variant'].'; font::'.$uc_heading_font['font'].'; font-size:'.$uc_heading_font_size.'px; font-style:'.$uc_heading_font_style.' ; color:'.$uc_header_color.';">'.$title_il16.'</h1>
                                                        <h6    style="font-family:'.$uc_desc_font['family'].'; font-weight::'.$uc_desc_font['variant'].'; font::'.$uc_desc_font['font'].'; font-size:'.$uc_desc_font_size.'px; font-style:'.$uc_desc_font_style.' ; color:'.$uc_desc_header_color.';">'.$desc_il16.'</h6>';

                                                        if(!empty($button_text_il16)){

                            						   $output .= '	<a href="'.$button_link_il16.'" target="'.$open_link_il16.'"  class="uc_btn_sec" style="color:'.$uc_btn_text_color.';background:'.$uc_btn_bg_color.'; border-color:'.$uc_btn_border_color.'; border-width:'.$uc_button_border_width.'px; font-size:'.$uc_btn_font_size.'px;">'.$button_text_il16.'</a>';
                                                       }


                            						$output .= '</div> <!-- /fw_il_016_slide -->
                                                </div>
                                                <!-- 2nd Image -->
                                                <div class="col-xs-6">
                                                    <img style="height:'.$uc_custom_image_height.'px; width:'.$uc_custom_image_width.'px; " src="'.$image_1_il16[0].'" data-animation="animated fadeInUp" />
                                                </div>
                                            </div> <!-- /row -->
                                        </div>';
        }

    }
}
//end of full 16
    
    if( ! empty( $carousel_options['group_option_il17'] ) ) {

    $carousel_groups = $carousel_options['group_option_il17'];


    foreach( $carousel_groups as $carousel_group ){
        
        if($style_fullwidth == 'fw_il_017' ) {
            
            $image_src_il17 = $carousel_group['image_il17'];
            $image_il17 = wp_get_attachment_image_src( $image_src_il17, 'full' );
            $title_il17 = $carousel_group['title_il17'];
            $desc_il17 = $carousel_group['desc_il17'];
            $button_link_il17 = $carousel_group['button_link_il17'];
            $open_link_il17 = $carousel_group['open_link_il17'];
            $image_src_1_il17 = $carousel_group['image_1_il17'];
            $image_src_2_il17 = $carousel_group['image_2_il17'];
            $image_src_3_il17 = $carousel_group['image_3_il17'];
            $image_src_4_il17 = $carousel_group['image_4_il17'];
            $image_src_5_il17 = $carousel_group['image_5_il17'];
            $image_src_6_il17 = $carousel_group['image_6_il17'];
            $image_src_7_il17 = $carousel_group['image_7_il17'];
            $image_src_8_il17 = $carousel_group['image_8_il17'];
            $image_src_9_il17 = $carousel_group['image_9_il17'];
            $image_src_10_il17 = $carousel_group['image_10_il17'];
            $image_src_11_il17 = $carousel_group['image_11_il17'];
            $image_src_12_il17 = $carousel_group['image_12_il17'];
            $image_src_13_il17 = $carousel_group['image_13_il17'];
            $image_src_14_il17 = $carousel_group['image_14_il17'];
            $image_src_15_il17 = $carousel_group['image_15_il17'];
            $image_src_16_il17 = $carousel_group['image_16_il17'];
            $image_src_17_il17 = $carousel_group['image_17_il17'];
            $image_1_il17 = wp_get_attachment_image_src( $image_src_1_il17, 'full' );
            $image_2_il17 = wp_get_attachment_image_src( $image_src_2_il17, 'full' );
            $image_3_il17 = wp_get_attachment_image_src( $image_src_3_il17, 'full' );
            $image_4_il17 = wp_get_attachment_image_src( $image_src_4_il17, 'full' );
            $image_5_il17 = wp_get_attachment_image_src( $image_src_5_il17, 'full' );
            $image_6_il17 = wp_get_attachment_image_src( $image_src_6_il17, 'full' );
            $image_7_il17 = wp_get_attachment_image_src( $image_src_7_il17, 'full' );
            $image_8_il17 = wp_get_attachment_image_src( $image_src_8_il17, 'full' );
            $image_9_il17 = wp_get_attachment_image_src( $image_src_9_il17, 'full' );
            $image_10_il17 = wp_get_attachment_image_src( $image_src_10_il17, 'full' );
            $image_11_il17 = wp_get_attachment_image_src( $image_src_11_il17, 'full' );
            $image_12_il17 = wp_get_attachment_image_src( $image_src_12_il17, 'full' );
            $image_13_il17 = wp_get_attachment_image_src( $image_src_13_il17, 'full' );
            $image_14_il17 = wp_get_attachment_image_src( $image_src_14_il17, 'full' );
            $image_15_il17 = wp_get_attachment_image_src( $image_src_15_il17, 'full' );
            $image_16_il17 = wp_get_attachment_image_src( $image_src_16_il17, 'full' );
            $image_17_il17 = wp_get_attachment_image_src( $image_src_17_il17, 'full' );

            $title_1_il17 = $carousel_group['title_1_il17'];
            $title_2_il17 = $carousel_group['title_2_il17'];
            $title_3_il17 = $carousel_group['title_3_il17'];
            $title_4_il17 = $carousel_group['title_4_il17'];
            $title_5_il17 = $carousel_group['title_5_il17'];
            $title_6_il17 = $carousel_group['title_6_il17'];
            $title_7_il17 = $carousel_group['title_7_il17'];
            $title_8_il17 = $carousel_group['title_8_il17'];
            $title_9_il17 = $carousel_group['title_9_il17'];
            $title_10_il17 = $carousel_group['title_10_il17'];
            $title_11_il17 = $carousel_group['title_11_il17'];
            $title_12_il17 = $carousel_group['title_12_il17'];
            $title_13_il17 = $carousel_group['title_13_il17'];
            $title_14_il17 = $carousel_group['title_14_il17'];
            $title_15_il17 = $carousel_group['title_15_il17'];
            $title_16_il17 = $carousel_group['title_16_il17'];
            $title_17_il17 = $carousel_group['title_17_il17'];

            $desc_1_il17 = $carousel_group['desc_1_il17'];
            $desc_2_il17 = $carousel_group['desc_2_il17'];
            $desc_3_il17 = $carousel_group['desc_3_il17'];
            $desc_4_il17 = $carousel_group['desc_4_il17'];
            $desc_5_il17 = $carousel_group['desc_5_il17'];
            $desc_6_il17 = $carousel_group['desc_6_il17'];
            $desc_7_il17 = $carousel_group['desc_7_il17'];
            $desc_8_il17 = $carousel_group['desc_8_il17'];
            $desc_9_il17 = $carousel_group['desc_9_il17'];
            $desc_10_il17 = $carousel_group['desc_10_il17'];
            $desc_11_il17 = $carousel_group['desc_11_il17'];
            $desc_12_il17 = $carousel_group['desc_12_il17'];
            $desc_13_il17 = $carousel_group['desc_13_il17'];
            $desc_14_il17 = $carousel_group['desc_14_il17'];
            $desc_15_il17 = $carousel_group['desc_15_il17'];
            $desc_16_il17 = $carousel_group['desc_16_il17'];
            $desc_17_il17 = $carousel_group['desc_17_il17'];
            $button_link_1_il17 = $carousel_group['button_link_1_il17'];
            $button_link_2_il17 = $carousel_group['button_link_2_il17'];
            $button_link_3_il17 = $carousel_group['button_link_3_il17'];
            $button_link_4_il17 = $carousel_group['button_link_4_il17'];
            $button_link_5_il17 = $carousel_group['button_link_5_il17'];
            $button_link_6_il17 = $carousel_group['button_link_6_il17'];
            $button_link_7_il17 = $carousel_group['button_link_7_il17'];
            $button_link_8_il17 = $carousel_group['button_link_8_il17'];
            $button_link_9_il17 = $carousel_group['button_link_9_il17'];
            $button_link_10_il17 = $carousel_group['button_link_10_il17'];
            $button_link_11_il17 = $carousel_group['button_link_11_il17'];
            $button_link_12_il17 = $carousel_group['button_link_12_il17'];
            $button_link_13_il17 = $carousel_group['button_link_13_il17'];
            $button_link_14_il17 = $carousel_group['button_link_14_il17'];
            $button_link_15_il17 = $carousel_group['button_link_15_il17'];
            $button_link_16_il17 = $carousel_group['button_link_16_il17'];
            $button_link_17_il17 = $carousel_group['button_link_17_il17'];

                            $output .= '<div class="item">
                                        <style>
                                            a.uc_btn_sec:hover {
                                                    color: '.$uc_btn_text_hover.'!important;
                                                    background: '.$uc_btn_background_hover.'!important;
                                                    border-color:'.$uc_btn_border_hover.'!important;
                                                }
                                                @media (min-width: 100px) and (max-width: 480px) {.carousel-inner img {height: '.$uc_responsive_480_ht.'px!important;}}
                                            @media (min-width: 481px) and (max-width: 600px) {.carousel-inner img {height: '.$uc_responsive_600_ht.'px!important;}}
                                            @media (min-width: 601px) and (max-width: 767px) {.carousel-inner img {height: '.$uc_responsive_767_ht.'px!important;}}
                                            @media (min-width: 768px) and (max-width: 991px) {.carousel-inner img {height: '.$uc_responsive_991_ht.'px!important;}}
                                            
                                        </style>
                                                <!-- 1st row -->
                                                <div class="row">
                                                    <!-- 1st Image -->
                                                    <div class="col-xs-2">
                                                        <img style="height:'.$uc_custom_image_height.'px; width:'.$uc_custom_image_width.'px; " src="'.$image_il17[0].'" data-animation="animated fadeInDown" />
                                                        <!-- Slide Text Layer -->
                                                        <div class="fw_il_017_slide">
                                                            <h5 style="font-family:'.$uc_heading_font['family'].'; font-weight:'.$uc_heading_font['variant'].'; font::'.$uc_heading_font['font'].'; font-size:'.$uc_heading_font_size.'px; font-style:'.$uc_heading_font_style.' ; color:'.$uc_header_color.';">'.$title_il17.'</h5>';

                                                        if(!empty($desc_il17)){

                            						   $output .= '	<a href="'.$button_link_il17.'" target="'.$open_link_il17.'"    class="uc_btn_sec" style="color:'.$uc_btn_text_color.';background:'.$uc_btn_bg_color.'; border-color:'.$uc_btn_border_color.'; border-width:'.$uc_button_border_width.'px; font-size:'.$uc_btn_font_size.'px;">'.$desc_il17.'</a>';
                                                       }


                            						$output .= '</div> <!-- /fw_il_017_slide -->
                                                    </div>
                                                    <!-- 2nd Image -->
                                                    <div class="col-xs-2">
                                                        <img style="height:'.$uc_custom_image_height.'px; width:'.$uc_custom_image_width.'px; " src="'.$image_1_il17[0].'" alt="fw_il_017_02" data-animation="animated fadeInUp" />
                                                        <!-- Slide Text Layer -->
                                                        <div class="fw_il_017_slide">
                                                            <h5 style="font-family:'.$uc_heading_font['family'].'; font-weight:'.$uc_heading_font['variant'].'; font::'.$uc_heading_font['font'].'; font-size:'.$uc_heading_font_size.'px; font-style:'.$uc_heading_font_style.' ; color:'.$uc_header_color.';">'.$title_1_il17.'</h5>';

                                                        if(!empty($desc_1_il17)){

                            						   $output .= '	<a href="'.$button_link_1_il17.'" target="'.$open_link_il17.'"    class="uc_btn_sec" style="color:'.$uc_btn_text_color.';background:'.$uc_btn_bg_color.'; border-color:'.$uc_btn_border_color.'; border-width:'.$uc_button_border_width.'px; font-size:'.$uc_btn_font_size.'px;">'.$desc_1_il17.'</a>';
                                                       }


                            						$output .= '</div> <!-- /fw_il_017_slide -->
                                                    </div>
                                                    <!-- 3rd Image -->
                                                    <div class="col-xs-2">
                                                        <img style="height:'.$uc_custom_image_height.'px; width:'.$uc_custom_image_width.'px; " src="'.$image_2_il17[0].'" alt="fw_il_017_03" data-animation="animated fadeInDown" />
                                                        <!-- Slide Text Layer -->
                                                        <div class="fw_il_017_slide">
                                                            <h5 style="font-family:'.$uc_heading_font['family'].'; font-weight:'.$uc_heading_font['variant'].'; font::'.$uc_heading_font['font'].'; font-size:'.$uc_heading_font_size.'px; font-style:'.$uc_heading_font_style.' ; color:'.$uc_header_color.';">'.$title_2_il17.'</h5>';

                                                        if(!empty($desc_2_il17)){

                            						   $output .= '	<a href="'.$button_link_2_il17.'" target="'.$open_link_il17.'"    class="uc_btn_sec" style="color:'.$uc_btn_text_color.';background:'.$uc_btn_bg_color.'; border-color:'.$uc_btn_border_color.'; border-width:'.$uc_button_border_width.'px; font-size:'.$uc_btn_font_size.'px;">'.$desc_2_il17.'</a>';
                                                       }


                            						$output .= '</div> <!-- /fw_il_017_slide -->
                                                    </div>
                                                    <!-- 4th Image -->
                                                    <div class="col-xs-2">
                                                        <img style="height:'.$uc_custom_image_height.'px; width:'.$uc_custom_image_width.'px; " src="'.$image_3_il17[0].'" alt="fw_il_017_04" data-animation="animated fadeInUp" />
                                                        <!-- Slide Text Layer -->
                                                        <div class="fw_il_017_slide">
                                                            <h5 style="font-family:'.$uc_heading_font['family'].'; font-weight:'.$uc_heading_font['variant'].'; font::'.$uc_heading_font['font'].'; font-size:'.$uc_heading_font_size.'px; font-style:'.$uc_heading_font_style.' ; color:'.$uc_header_color.';">'.$title_3_il17.'</h5>';

                                                        if(!empty($desc_3_il17)){

                            						   $output .= '	<a href="'.$button_link_3_il17.'" target="'.$open_link_il17.'"    class="uc_btn_sec" style="color:'.$uc_btn_text_color.';background:'.$uc_btn_bg_color.'; border-color:'.$uc_btn_border_color.'; border-width:'.$uc_button_border_width.'px; font-size:'.$uc_btn_font_size.'px;">'.$desc_3_il17.'</a>';
                                                       }


                            						$output .= '</div> <!-- /fw_il_017_slide -->
                                                    </div>
                                                    <!-- 5th Image -->
                                                    <div class="col-xs-2">
                                                        <img style="height:'.$uc_custom_image_height.'px; width:'.$uc_custom_image_width.'px; " src="'.$image_4_il17[0].'" alt="fw_il_017_05" data-animation="animated fadeInDown" />
                                                        <!-- Slide Text Layer -->
                                                        <div class="fw_il_017_slide">
                                                            <h5 style="font-family:'.$uc_heading_font['family'].'; font-weight:'.$uc_heading_font['variant'].'; font::'.$uc_heading_font['font'].'; font-size:'.$uc_heading_font_size.'px; font-style:'.$uc_heading_font_style.' ; color:'.$uc_header_color.';">'.$title_4_il17.'</h5>';

                                                        if(!empty($desc_4_il17)){

                            						   $output .= '	<a href="'.$button_link_4_il17.'" target="'.$open_link_il17.'"    class="uc_btn_sec" style="color:'.$uc_btn_text_color.';background:'.$uc_btn_bg_color.'; border-color:'.$uc_btn_border_color.'; border-width:'.$uc_button_border_width.'px; font-size:'.$uc_btn_font_size.'px;">'.$desc_4_il17.'</a>';
                                                       }


                            						$output .= '</div> <!-- /fw_il_017_slide -->
                                                    </div>
                                                    <!-- 6th Image -->
                                                    <div class="col-xs-2">
                                                        <img style="height:'.$uc_custom_image_height.'px; width:'.$uc_custom_image_width.'px; " src="'.$image_5_il17[0].'" data-animation="animated fadeInUp" />
                                                        <!-- Slide Text Layer -->
                                                        <div class="fw_il_017_slide">
                                                            <h5 style="font-family:'.$uc_heading_font['family'].'; font-weight:'.$uc_heading_font['variant'].'; font::'.$uc_heading_font['font'].'; font-size:'.$uc_heading_font_size.'px; font-style:'.$uc_heading_font_style.' ; color:'.$uc_header_color.';">'.$title_5_il17.'</h5>';

                                                        if(!empty($desc_5_il17)){

                            						   $output .= '	<a href="'.$button_link_5_il17.'" target="'.$open_link_il17.'"    class="uc_btn_sec" style="color:'.$uc_btn_text_color.';background:'.$uc_btn_bg_color.'; border-color:'.$uc_btn_border_color.'; border-width:'.$uc_button_border_width.'px; font-size:'.$uc_btn_font_size.'px;">'.$desc_5_il17.'</a>';
                                                       }


                            						$output .= '</div> <!-- /fw_il_017_slide -->
                                                    </div>
                                                </div> <!-- /1st row -->

                                                <!-- 2nd row -->
                                                <div class="row">
                                                    <!-- 1st Image -->
                                                    <div class="col-xs-2">
                                                        <img style="height:'.$uc_custom_image_height.'px; width:'.$uc_custom_image_width.'px; " src="'.$image_6_il17[0].'" alt="fw_il_017_07" data-animation="animated fadeInUp" />
                                                        <!-- Slide Text Layer -->
                                                        <div class="fw_il_017_slide fw_il_017_slide_right">
                                                            <h5 style="font-family:'.$uc_heading_font['family'].'; font-weight:'.$uc_heading_font['variant'].'; font::'.$uc_heading_font['font'].'; font-size:'.$uc_heading_font_size.'px; font-style:'.$uc_heading_font_style.' ; color:'.$uc_header_color.';">'.$title_6_il17.'</h5>';

                                                        if(!empty($desc_6_il17)){

                            						   $output .= '	<a href="'.$button_link_6_il17.'" target="'.$open_link_il17.'"    class="uc_btn_sec" style="color:'.$uc_btn_text_color.';background:'.$uc_btn_bg_color.'; border-color:'.$uc_btn_border_color.'; border-width:'.$uc_button_border_width.'px; font-size:'.$uc_btn_font_size.'px;">'.$desc_6_il17.'</a>';
                                                       }


                            						$output .= '</div> <!-- /fw_il_017_slide -->
                                                    </div>
                                                    <!-- 2nd Image -->
                                                    <div class="col-xs-2">
                                                        <img style="height:'.$uc_custom_image_height.'px; width:'.$uc_custom_image_width.'px; " src="'.$image_7_il17[0].'" alt="fw_il_017_08" data-animation="animated fadeInDown" />
                                                        <!-- Slide Text Layer -->
                                                        <div class="fw_il_017_slide fw_il_017_slide_right">
                                                            <h5 style="font-family:'.$uc_heading_font['family'].'; font-weight:'.$uc_heading_font['variant'].'; font::'.$uc_heading_font['font'].'; font-size:'.$uc_heading_font_size.'px; font-style:'.$uc_heading_font_style.' ; color:'.$uc_header_color.';">'.$title_7_il17.'</h5>';

                                                        if(!empty($desc_7_il17)){

                            						   $output .= '	<a href="'.$button_link_7_il17.'" target="'.$open_link_il17.'"    class="uc_btn_sec" style="color:'.$uc_btn_text_color.';background:'.$uc_btn_bg_color.'; border-color:'.$uc_btn_border_color.'; border-width:'.$uc_button_border_width.'px; font-size:'.$uc_btn_font_size.'px;">'.$desc_7_il17.'</a>';
                                                       }


                            						$output .= '</div> <!-- /fw_il_017_slide -->
                                                    </div>
                                                    <!-- 3rd Image -->
                                                    <div class="col-xs-2">
                                                        <img style="height:'.$uc_custom_image_height.'px; width:'.$uc_custom_image_width.'px; " src="'.$image_8_il17[0].'" alt="fw_il_017_08" data-animation="animated fadeInUp" />
                                                        <!-- Slide Text Layer -->
                                                        <div class="fw_il_017_slide fw_il_017_slide_right">
                                                            <h5 style="font-family:'.$uc_heading_font['family'].'; font-weight:'.$uc_heading_font['variant'].'; font::'.$uc_heading_font['font'].'; font-size:'.$uc_heading_font_size.'px; font-style:'.$uc_heading_font_style.' ; color:'.$uc_header_color.';">'.$title_8_il17.'</h5>';

                                                        if(!empty($desc_8_il17)){

                            						   $output .= '	<a href="'.$button_link_8_il17.'" target="'.$open_link_il17.'"    class="uc_btn_sec" style="color:'.$uc_btn_text_color.';background:'.$uc_btn_bg_color.'; border-color:'.$uc_btn_border_color.'; border-width:'.$uc_button_border_width.'px; font-size:'.$uc_btn_font_size.'px;">'.$desc_8_il17.'</a>';
                                                       }


                            						$output .= '</div> <!-- /fw_il_017_slide -->
                                                    </div>
                                                    <!-- 4th Image -->
                                                    <div class="col-xs-2">
                                                        <img style="height:'.$uc_custom_image_height.'px; width:'.$uc_custom_image_width.'px; " src="'.$image_9_il17[0].'" alt="fw_il_017_10" data-animation="animated fadeInDown" />
                                                        <!-- Slide Text Layer -->
                                                        <div class="fw_il_017_slide fw_il_017_slide_right">
                                                            <h5 style="font-family:'.$uc_heading_font['family'].'; font-weight:'.$uc_heading_font['variant'].'; font::'.$uc_heading_font['font'].'; font-size:'.$uc_heading_font_size.'px; font-style:'.$uc_heading_font_style.' ; color:'.$uc_header_color.';">'.$title_9_il17.'</h5>';

                                                        if(!empty($desc_9_il17)){

                            						   $output .= '	<a href="'.$button_link_9_il17.'" target="'.$open_link_il17.'"    class="uc_btn_sec" style="color:'.$uc_btn_text_color.';background:'.$uc_btn_bg_color.'; border-color:'.$uc_btn_border_color.'; border-width:'.$uc_button_border_width.'px; font-size:'.$uc_btn_font_size.'px;">'.$desc_9_il17.'</a>';
                                                       }


                            						$output .= '</div> <!-- /fw_il_017_slide -->
                                                    </div>
                                                    <!-- 5th Image -->
                                                    <div class="col-xs-2">
                                                        <img style="height:'.$uc_custom_image_height.'px; width:'.$uc_custom_image_width.'px; " src="'.$image_10_il17[0].'" alt="fw_il_017_11" data-animation="animated fadeInUp" />
                                                        <!-- Slide Text Layer -->
                                                        <div class="fw_il_017_slide fw_il_017_slide_right">
                                                            <h5 style="font-family:'.$uc_heading_font['family'].'; font-weight:'.$uc_heading_font['variant'].'; font::'.$uc_heading_font['font'].'; font-size:'.$uc_heading_font_size.'px; font-style:'.$uc_heading_font_style.' ; color:'.$uc_header_color.';">'.$title_10_il17.'</h5>';

                                                        if(!empty($desc_il17)){

                            						   $output .= '	<a href="'.$button_link_10_il17.'" target="'.$open_link_il17.'"    class="uc_btn_sec" style="color:'.$uc_btn_text_color.';background:'.$uc_btn_bg_color.'; border-color:'.$uc_btn_border_color.'; border-width:'.$uc_button_border_width.'px; font-size:'.$uc_btn_font_size.'px;">'.$desc_10_il17.'</a>';
                                                       }


                            						$output .= '</div> <!-- /fw_il_017_slide -->
                                                    </div>
                                                    <!-- 6th Image -->
                                                    <div class="col-xs-2">
                                                        <img style="height:'.$uc_custom_image_height.'px; width:'.$uc_custom_image_width.'px; " src="'.$image_11_il17[0].'" alt="fw_il_017_12" data-animation="animated fadeInDown" />
                                                        <!-- Slide Text Layer -->
                                                        <div class="fw_il_017_slide fw_il_017_slide_right">
                                                            <h5 style="font-family:'.$uc_heading_font['family'].'; font-weight:'.$uc_heading_font['variant'].'; font::'.$uc_heading_font['font'].'; font-size:'.$uc_heading_font_size.'px; font-style:'.$uc_heading_font_style.' ; color:'.$uc_header_color.';">'.$title_11_il17.'</h5>';

                                                        if(!empty($desc_11_il17)){

                            						   $output .= '	<a href="'.$button_link_11_il17.'" target="'.$open_link_il17.'"    class="uc_btn_sec" style="color:'.$uc_btn_text_color.';background:'.$uc_btn_bg_color.'; border-color:'.$uc_btn_border_color.'; border-width:'.$uc_button_border_width.'px; font-size:'.$uc_btn_font_size.'px;">'.$desc_11_il17.'</a>';
                                                       }


                            						$output .= '</div> <!-- /fw_il_017_slide -->
                                                    </div>
                                                </div> <!-- /2nd row -->

                                                <!-- 3rd row -->
                                                <div class="row">
                                                    <!-- 1st Image -->
                                                    <div class="col-xs-2">
                                                        <img style="height:'.$uc_custom_image_height.'px; width:'.$uc_custom_image_width.'px; " src="'.$image_12_il17[0].'" alt="fw_il_017_13" data-animation="animated fadeInDown" />
                                                        <!-- Slide Text Layer -->
                                                        <div class="fw_il_017_slide">
                                                            <h5 style="font-family:'.$uc_heading_font['family'].'; font-weight:'.$uc_heading_font['variant'].'; font::'.$uc_heading_font['font'].'; font-size:'.$uc_heading_font_size.'px; font-style:'.$uc_heading_font_style.' ; color:'.$uc_header_color.';">'.$title_12_il17.'</h5>';

                                                        if(!empty($desc_12_il17)){

                            						   $output .= '	<a href="'.$button_link_12_il17.'" target="'.$open_link_il17.'"    class="uc_btn_sec" style="color:'.$uc_btn_text_color.';background:'.$uc_btn_bg_color.'; border-color:'.$uc_btn_border_color.'; border-width:'.$uc_button_border_width.'px; font-size:'.$uc_btn_font_size.'px;">'.$desc_12_il17.'</a>';
                                                       }


                            						$output .= '</div> <!-- /fw_il_017_slide -->
                                                    </div>
                                                    <!-- 2nd Image -->
                                                    <div class="col-xs-2">
                                                        <img style="height:'.$uc_custom_image_height.'px; width:'.$uc_custom_image_width.'px; " src="'.$image_13_il17[0].'" alt="fw_il_017_14" data-animation="animated fadeInUp" />
                                                        <!-- Slide Text Layer -->
                                                        <div class="fw_il_017_slide">
                                                            <h5 style="font-family:'.$uc_heading_font['family'].'; font-weight:'.$uc_heading_font['variant'].'; font::'.$uc_heading_font['font'].'; font-size:'.$uc_heading_font_size.'px; font-style:'.$uc_heading_font_style.' ; color:'.$uc_header_color.';">'.$title_13_il17.'</h5>';

                                                        if(!empty($desc_13_il17)){

                            						   $output .= '	<a href="'.$button_link_13_il17.'" target="'.$open_link_il17.'"    class="uc_btn_sec" style="color:'.$uc_btn_text_color.';background:'.$uc_btn_bg_color.'; border-color:'.$uc_btn_border_color.'; border-width:'.$uc_button_border_width.'px; font-size:'.$uc_btn_font_size.'px;">'.$desc_13_il17.'</a>';
                                                       }


                            						$output .= '</div> <!-- /fw_il_017_slide -->
                                                    </div>
                                                    <!-- 3rd Image -->
                                                    <div class="col-xs-2">
                                                        <img style="height:'.$uc_custom_image_height.'px; width:'.$uc_custom_image_width.'px; " src="'.$image_14_il17[0].'" alt="fw_il_017_15" data-animation="animated fadeInDown" />
                                                        <!-- Slide Text Layer -->
                                                        <div class="fw_il_017_slide">
                                                            <h5 style="font-family:'.$uc_heading_font['family'].'; font-weight:'.$uc_heading_font['variant'].'; font::'.$uc_heading_font['font'].'; font-size:'.$uc_heading_font_size.'px; font-style:'.$uc_heading_font_style.' ; color:'.$uc_header_color.';">'.$title_14_il17.'</h5>';

                                                        if(!empty($desc_14_il17)){

                            						   $output .= '	<a href="'.$button_link_14_il17.'" target="'.$open_link_il17.'"    class="uc_btn_sec" style="color:'.$uc_btn_text_color.';background:'.$uc_btn_bg_color.'; border-color:'.$uc_btn_border_color.'; border-width:'.$uc_button_border_width.'px; font-size:'.$uc_btn_font_size.'px;">'.$desc_14_il17.'</a>';
                                                       }


                            						$output .= '</div> <!-- /fw_il_017_slide -->
                                                    </div>
                                                    <!-- 4th Image -->
                                                    <div class="col-xs-2">
                                                        <img style="height:'.$uc_custom_image_height.'px; width:'.$uc_custom_image_width.'px; " src="'.$image_15_il17[0].'" alt="fw_il_017_16" data-animation="animated fadeInUp" />
                                                        <!-- Slide Text Layer -->
                                                        <div class="fw_il_017_slide">
                                                            <h5 style="font-family:'.$uc_heading_font['family'].'; font-weight:'.$uc_heading_font['variant'].'; font::'.$uc_heading_font['font'].'; font-size:'.$uc_heading_font_size.'px; font-style:'.$uc_heading_font_style.' ; color:'.$uc_header_color.';">'.$title_15_il17.'</h5>';

                                                        if(!empty($desc_15_il17)){

                            						   $output .= '	<a href="'.$button_link_15_il17.'" target="'.$open_link_il17.'"    class="uc_btn_sec" style="color:'.$uc_btn_text_color.';background:'.$uc_btn_bg_color.'; border-color:'.$uc_btn_border_color.'; border-width:'.$uc_button_border_width.'px; font-size:'.$uc_btn_font_size.'px;">'.$desc_15_il17.'</a>';
                                                       }


                            						$output .= '</div> <!-- /fw_il_017_slide -->
                                                    </div>
                                                    <!-- 5th Image -->
                                                    <div class="col-xs-2">
                                                        <img style="height:'.$uc_custom_image_height.'px; width:'.$uc_custom_image_width.'px; " src="'.$image_16_il17[0].'" alt="fw_il_017_17" data-animation="animated fadeInDown" />
                                                        <!-- Slide Text Layer -->
                                                        <div class="fw_il_017_slide">
                                                            <h5 style="font-family:'.$uc_heading_font['family'].'; font-weight:'.$uc_heading_font['variant'].'; font::'.$uc_heading_font['font'].'; font-size:'.$uc_heading_font_size.'px; font-style:'.$uc_heading_font_style.' ; color:'.$uc_header_color.';">'.$title_16_il17.'</h5>';

                                                        if(!empty($desc_16_il17)){

                            						   $output .= '	<a href="'.$button_link_16_il17.'" target="'.$open_link_il17.'"    class="uc_btn_sec" style="color:'.$uc_btn_text_color.';background:'.$uc_btn_bg_color.'; border-color:'.$uc_btn_border_color.'; border-width:'.$uc_button_border_width.'px; font-size:'.$uc_btn_font_size.'px;">'.$desc_16_il17.'</a>';
                                                       }


                            						$output .= '</div> <!-- /fw_il_017_slide -->
                                                    </div>
                                                    <!-- 6th Image -->
                                                    <div class="col-xs-2">
                                                        <img style="height:'.$uc_custom_image_height.'px; width:'.$uc_custom_image_width.'px;" src="'.$image_17_il17[0].'" alt="fw_il_017_18" data-animation="animated fadeInUp" />
                                                        <!-- Slide Text Layer -->
                                                        <div class="fw_il_017_slide">
                                                            <h5 style="font-family:'.$uc_heading_font['family'].'; font-weight:'.$uc_heading_font['variant'].'; font::'.$uc_heading_font['font'].'; font-size:'.$uc_heading_font_size.'px; font-style:'.$uc_heading_font_style.' ; color:'.$uc_header_color.';">'.$title_17_il17.'</h5>';

                                                        if(!empty($desc_17_il17)){

                            						   $output .= '	<a href="'.$button_link_17_il17.'" target="'.$open_link_il17.'"     class="uc_btn_sec" style="color:'.$uc_btn_text_color.';background:'.$uc_btn_bg_color.'; border-color:'.$uc_btn_border_color.'; border-width:'.$uc_button_border_width.'px; font-size:'.$uc_btn_font_size.'px;">'.$desc_17_il17.'</a>';
                                                       }


                            						$output .= '</div> <!-- /fw_il_017_slide -->
                                                    </div>
                                                </div> <!-- /3rd row -->
                                            </div>';
        }

    }
}
//end of full 17
    
    if( ! empty( $carousel_options['group_option_il18'] ) ) {

    $carousel_groups = $carousel_options['group_option_il18'];


    foreach( $carousel_groups as $carousel_group ){
        
        if($style_fullwidth == 'fw_il_018' ) {

            $image_src_il18 = $carousel_group['image_il18'];
            $image_il18 = wp_get_attachment_image_src( $image_src_il18, 'full' );
            $title_il18 = $carousel_group['title_il18'];
            $desc_il18 = $carousel_group['desc_il18'];
            $button_link_il18 = $carousel_group['button_link_il18'];
            $open_link_il18 = $carousel_group['open_link_il18'];
            $image_src_1_il18 = $carousel_group['image_1_il18'];
            $image_src_2_il18 = $carousel_group['image_2_il18'];
            $image_src_3_il18 = $carousel_group['image_3_il18'];
            $image_src_4_il18 = $carousel_group['image_4_il18'];
            $image_src_5_il18 = $carousel_group['image_5_il18'];
            $image_1_il18 = wp_get_attachment_image_src( $image_src_1_il18, 'full' );
            $image_2_il18 = wp_get_attachment_image_src( $image_src_2_il18, 'full' );
            $image_3_il18 = wp_get_attachment_image_src( $image_src_3_il18, 'full' );
            $image_4_il18 = wp_get_attachment_image_src( $image_src_4_il18, 'full' );
            $image_5_il18 = wp_get_attachment_image_src( $image_src_5_il18, 'full' );


                            $output .= '<div class="item">
                                        <style>
                                            a.uc_btn_sec:hover {
                                                    color: '.$uc_btn_text_hover.'!important;
                                                    background: '.$uc_btn_background_hover.'!important;
                                                    border-color:'.$uc_btn_border_hover.'!important;
                                                }
                                                @media (min-width: 100px) and (max-width: 480px) {.carousel-inner img {height: '.$uc_responsive_480_ht.'px!important;}}
                                            @media (min-width: 481px) and (max-width: 600px) {.carousel-inner img {height: '.$uc_responsive_600_ht.'px!important;}}
                                            @media (min-width: 601px) and (max-width: 767px) {.carousel-inner img {height: '.$uc_responsive_767_ht.'px!important;}}
                                            @media (min-width: 768px) and (max-width: 991px) {.carousel-inner img {height: '.$uc_responsive_991_ht.'px!important;}}
                                            
                                        </style>
                                                <!-- 1st row -->
                                                <div class="row">
                                                    <!-- 1st Image -->
                                                    <div class="col-xs-2">
                                                        <img style="height:'.$uc_custom_image_height.'px; width:'.$uc_custom_image_width.'px;"  src="'.$image_il18[0].'" alt="fw_il_018_01" data-animation="animated fadeInDown" />
                                                    </div>
                                                    <!-- 2nd Image -->
                                                    <div class="col-xs-2">
                                                        <img style="height:'.$uc_custom_image_height.'px; width:'.$uc_custom_image_width.'px;"  src="'.$image_1_il18[0].'" alt="fw_il_018_02" data-animation="animated fadeInUp" />
                                                    </div>
                                                    <!-- 3rd Image -->
                                                    <div class="col-xs-2">
                                                        <img style="height:'.$uc_custom_image_height.'px; width:'.$uc_custom_image_width.'px;"  src="'.$image_2_il18[0].'" alt="fw_il_018_03" data-animation="animated fadeInDown" />
                                                        <!-- Slide Text Layer -->
                                                        <div class="fw_il_018_slide">
                                                            <h5   style="font-family:'.$uc_heading_font['family'].'; font-weight:'.$uc_heading_font['variant'].'; font::'.$uc_heading_font['font'].'; font-size:'.$uc_heading_font_size.'px; font-style:'.$uc_heading_font_style.' ; color:'.$uc_header_color.';" >'.$title_il18.'</h5>';

                                                        if(!empty($desc_il18)){

                            						   $output .= '	<a href="'.$button_link_il18.'" target="'.$open_link_il18.'" class="uc_btn_sec" style="color:'.$uc_btn_text_color.';background:'.$uc_btn_bg_color.'; border-color:'.$uc_btn_border_color.'; border-width:'.$uc_button_border_width.'px; font-size:'.$uc_btn_font_size.'px;margin-left:10px;">'.$desc_il18.'</a>';
                                                       }


                            						$output .= '</div> <!-- /fw_il_018_slide -->
                                                    </div>
                                                    <!-- 4th Image -->
                                                    <div class="col-xs-2">
                                                        <img style="height:'.$uc_custom_image_height.'px; width:'.$uc_custom_image_width.'px;"  src="'.$image_3_il18[0].'" alt="fw_il_018_04" data-animation="animated fadeInUp" />
                                                    </div>
                                                    <!-- 5th Image -->
                                                    <div class="col-xs-2">
                                                        <img style="height:'.$uc_custom_image_height.'px; width:'.$uc_custom_image_width.'px;"  src="'.$image_4_il18[0].'" alt="fw_il_018_05" data-animation="animated fadeInDown" />
                                                    </div>
                                                    <!-- 6th Image -->
                                                    <div class="col-xs-2">
                                                        <img style="height:'.$uc_custom_image_height.'px; width:'.$uc_custom_image_width.'px;"  src="'.$image_5_il18[0].'" alt="fw_il_018_06" data-animation="animated fadeInUp" />
                                                    </div>
                                                </div> <!-- /1st row -->
                                            </div>';
        }
    }
}
//end of full 18    
    if( ! empty( $carousel_options['group_option_il19'] ) ) {

    $carousel_groups = $carousel_options['group_option_il19'];


    foreach( $carousel_groups as $carousel_group ){
        
         if($style_fullwidth == 'fw_il_019' ) {

            $image_src_il19 = $carousel_group['image_il19'];
            $image_il19 = wp_get_attachment_image_src( $image_src_il19, 'full' );
            $title_il19 = $carousel_group['title_il19'];
            $desc_il19 = $carousel_group['desc_il19'];
            $button_link_il19 = $carousel_group['button_link_il19'];
            $open_link_il19 = $carousel_group['open_link_il19'];
            $button_text_il19 = $carousel_group['button_text_il19'];

                            $output .= '<div class="item">
                                        <style>
                                            a.uc_btn_sec:hover {
                                                    color: '.$uc_btn_text_hover.'!important;
                                                    background: '.$uc_btn_background_hover.'!important;
                                                    border-color:'.$uc_btn_border_hover.'!important;
                                                }
                                                @media (min-width: 100px) and (max-width: 480px) {.carousel-inner img {height: '.$uc_responsive_480_ht.'px!important;}}
                                            @media (min-width: 481px) and (max-width: 600px) {.carousel-inner img {height: '.$uc_responsive_600_ht.'px!important;}}
                                            @media (min-width: 601px) and (max-width: 767px) {.carousel-inner img {height: '.$uc_responsive_767_ht.'px!important;}}
                                            @media (min-width: 768px) and (max-width: 991px) {.carousel-inner img {height: '.$uc_responsive_991_ht.'px!important;}}
                                            
                                        </style>
                                            <!-- row -->
                                            <div class="row">
                                                <!-- Image -->
                                                <div class="col-xs-6">
                                                    <img style="height:'.$uc_custom_image_height.'px; width:'.$uc_custom_image_width.'px;"    src="'.$image_il19[0].'" alt="fw_il_019_01" data-animation="animated fadeIn" />
                                                </div>
                                                <!-- Text -->
                                                <div class="col-xs-6"style="background:'.$uc_section_bg_color.';height:'.$uc_custom_image_height.'px;">
                                                    <!-- Slide Text Layer -->
                                                    <div class="fw_il_019_slide" >
                                                        <h1     style="font-family:'.$uc_heading_font['family'].'; font-weight:'.$uc_heading_font['variant'].'; font::'.$uc_heading_font['font'].'; font-size:'.$uc_heading_font_size.'px; font-style:'.$uc_heading_font_style.' ; color:'.$uc_header_color.';">'.$title_il19.'</h1>
                                                        <p style="font-family:'.$uc_desc_font['family'].'; font-weight::'.$uc_desc_font['variant'].'; font::'.$uc_desc_font['font'].'; font-size:'.$uc_desc_font_size.'px; font-style:'.$uc_desc_font_style.' ; color:'.$uc_desc_header_color.';">'.$desc_il19.'</p>';

                                                        if(!empty($button_text_il19)){

                            						   $output .= '	<a href="'.$button_link_il19.'" target="'.$open_link_il19.'" class="uc_btn_sec" style="color:'.$uc_btn_text_color.';background:'.$uc_btn_bg_color.'; border-color:'.$uc_btn_border_color.'; border-width:'.$uc_button_border_width.'px; font-size:'.$uc_btn_font_size.'px;">'.$button_text_il19.'</a>';
                                                       }


                            						$output .= '</div> <!-- /fw_il_019_slide -->
                                                </div>
                                            </div> <!-- /row -->

                                        </div>';
        }


    }
}
//end of full 19
        
    if( ! empty( $carousel_options['group_option_il20'] ) ) {

    $carousel_groups = $carousel_options['group_option_il20'];


    foreach( $carousel_groups as $carousel_group ){

        if($style_fullwidth == 'fw_il_020' ) {
            $image_src_il20 = $carousel_group['image_il20'];
            $image_il20 = wp_get_attachment_image_src( $image_src_il20, 'full' );
            $title_il20 = $carousel_group['title_il20'];
            $desc_il20 = $carousel_group['desc_il20'];
            $button_link_il20 = $carousel_group['button_link_il20'];
            $open_link_il20 = $carousel_group['open_link_il20'];
            $image_src_1_il20 = $carousel_group['image_1_il20'];
            $image_src_2_il20 = $carousel_group['image_2_il20'];
            $image_src_3_il20 = $carousel_group['image_3_il20'];
            $image_src_4_il20 = $carousel_group['image_4_il20'];
            $image_src_5_il20 = $carousel_group['image_5_il20'];
            $image_src_6_il20 = $carousel_group['image_6_il20'];
            $image_src_7_il20 = $carousel_group['image_7_il20'];
            $image_src_8_il20 = $carousel_group['image_8_il20'];
            $image_src_9_il20 = $carousel_group['image_9_il20'];
            $image_1_il20 = wp_get_attachment_image_src( $image_src_1_il20, 'full' );
            $image_2_il20 = wp_get_attachment_image_src( $image_src_2_il20, 'full' );
            $image_3_il20 = wp_get_attachment_image_src( $image_src_3_il20, 'full' );
            $image_4_il20 = wp_get_attachment_image_src( $image_src_4_il20, 'full' );
            $image_5_il20 = wp_get_attachment_image_src( $image_src_5_il20, 'full' );
            $image_6_il20 = wp_get_attachment_image_src( $image_src_6_il20, 'full' );
            $image_7_il20 = wp_get_attachment_image_src( $image_src_7_il20, 'full' );
            $image_8_il20 = wp_get_attachment_image_src( $image_src_8_il20, 'full' );
            $image_9_il20 = wp_get_attachment_image_src( $image_src_9_il20, 'full' );
            $desc_1_il20 = $carousel_group['desc_1_il20'];
            $desc_2_il20 = $carousel_group['desc_2_il20'];
            $desc_3_il20 = $carousel_group['desc_3_il20'];
            $desc_4_il20 = $carousel_group['desc_4_il20'];
            $desc_5_il20 = $carousel_group['desc_5_il20'];
            $desc_6_il20 = $carousel_group['desc_6_il20'];
            $desc_7_il20 = $carousel_group['desc_7_il20'];
            $desc_8_il20 = $carousel_group['desc_8_il20'];
            $desc_9_il20 = $carousel_group['desc_9_il20'];
            $button_link_1_il20 = $carousel_group['button_link_1_il20'];
            $button_link_2_il20 = $carousel_group['button_link_2_il20'];
            $button_link_3_il20 = $carousel_group['button_link_3_il20'];
            $button_link_4_il20 = $carousel_group['button_link_4_il20'];
            $button_link_5_il20 = $carousel_group['button_link_5_il20'];
            $button_link_6_il20 = $carousel_group['button_link_6_il20'];
            $button_link_7_il20 = $carousel_group['button_link_7_il20'];
            $button_link_8_il20 = $carousel_group['button_link_8_il20'];
            $button_link_9_il20 = $carousel_group['button_link_9_il20'];

                            $output .= '<div class="item">
                                        <style>
                                            a.uc_btn_sec:hover {
                                                    color: '.$uc_btn_text_hover.'!important;
                                                    background: '.$uc_btn_background_hover.'!important;
                                                    border-color:'.$uc_btn_border_hover.'!important;
                                                }
                                                @media (min-width: 100px) and (max-width: 480px) {.carousel-inner img {height: '.$uc_responsive_480_ht.'px!important;}}
                                            @media (min-width: 481px) and (max-width: 600px) {.carousel-inner img {height: '.$uc_responsive_600_ht.'px!important;}}
                                            @media (min-width: 601px) and (max-width: 767px) {.carousel-inner img {height: '.$uc_responsive_767_ht.'px!important;}}
                                            @media (min-width: 768px) and (max-width: 991px) {.carousel-inner img {height: '.$uc_responsive_991_ht.'px!important;}}
                                            
                                        </style>
                                            <!-- 1st row -->
                                            <div class="row">
                                                <!-- 1st Image -->
                                                <div class="col-xs-15">
                                                    <img style="height:'.$uc_custom_image_height.'px; width:'.$uc_custom_image_width.'px;"  style="height:200px" src="'.$image_il20[0].'" alt="fw_il_020_01" data-animation="animated fadeInLeft" />
                                                    <!-- Slide Text Layer -->
                                                    <div class="fw_il_020_slide">';

                                                        if(!empty($desc_il20)){

                            						   $output .= '	<a href="'.$button_link_il20.'" target="'.$open_link_il20.'" class="uc_btn_sec" style="color:'.$uc_btn_text_color.';background:'.$uc_btn_bg_color.'; border-color:'.$uc_btn_border_color.'; border-width:'.$uc_button_border_width.'px; font-size:'.$uc_btn_font_size.'px;">'.$desc_il20.'</a>';
                                                       }


                            						$output .= '</div> <!-- /fw_il_020_slide -->
                                                </div>
                                                <!-- 2nd Image -->
                                                <div class="col-xs-15">
                                                    <img style="height:'.$uc_custom_image_height.'px; width:'.$uc_custom_image_width.'px;"  src="'.$image_1_il20[0].'" alt="fw_il_020_02" data-animation="animated fadeInLeft" />
                                                    <!-- Slide Text Layer -->
                                                    <div class="fw_il_020_slide fw_il_020_slide_colored">';

                                                        if(!empty($desc_1_il20)){

                            						   $output .= '	<a href="'.$button_link_1_il20.'" target="'.$open_link_il20.'" class="uc_btn_sec" style="color:'.$uc_btn_text_color.';background:'.$uc_btn_bg_color.'; border-color:'.$uc_btn_border_color.'; border-width:'.$uc_button_border_width.'px; font-size:'.$uc_btn_font_size.'px;">'.$desc_1_il20.'</a>';
                                                       }


                            						$output .= '</div> <!-- /fw_il_020_slide -->
                                                </div>
                                                <!-- 3rd Image -->
                                                <div class="col-xs-15">
                                                    <img style="height:'.$uc_custom_image_height.'px; width:'.$uc_custom_image_width.'px;"  src="'.$image_2_il20[0].'" alt="fw_il_020_03" data-animation="animated fadeInLeft" />
                                                    <!-- Slide Text Layer -->
                                                    <div class="fw_il_020_slide">';

                                                        if(!empty($desc_2_il20)){

                            						   $output .= '	<a href="'.$button_link_2_il20.'" target="'.$open_link_il20.'" class="uc_btn_sec" style="color:'.$uc_btn_text_color.';background:'.$uc_btn_bg_color.'; border-color:'.$uc_btn_border_color.'; border-width:'.$uc_button_border_width.'px; font-size:'.$uc_btn_font_size.'px;">'.$desc_2_il20.'</a>';
                                                       }


                            						$output .= '</div> <!-- /fw_il_020_slide -->
                                                </div>
                                                <!-- 4th Image -->
                                                <div class="col-xs-15">
                                                    <img style="height:'.$uc_custom_image_height.'px; width:'.$uc_custom_image_width.'px;"  src="'.$image_3_il20[0].'" alt="fw_il_020_04" data-animation="animated fadeInLeft" />
                                                    <!-- Slide Text Layer -->
                                                    <div class="fw_il_020_slide fw_il_020_slide_colored">';

                                                        if(!empty($desc_3_il20)){

                            						   $output .= '	<a href="'.$button_link_3_il20.'" target="'.$open_link_il20.'" class="uc_btn_sec" style="color:'.$uc_btn_text_color.';background:'.$uc_btn_bg_color.'; border-color:'.$uc_btn_border_color.'; border-width:'.$uc_button_border_width.'px; font-size:'.$uc_btn_font_size.'px;">'.$desc_3_il20.'</a>';
                                                       }


                            						$output .= '</div> <!-- /fw_il_020_slide -->
                                                </div>
                                                <!-- 5th Image -->
                                                <div class="col-xs-15">
                                                    <img style="height:'.$uc_custom_image_height.'px; width:'.$uc_custom_image_width.'px;"  src="'.$image_4_il20[0].'" alt="fw_il_020_05" data-animation="animated fadeInLeft" />
                                                    <!-- Slide Text Layer -->
                                                    <div class="fw_il_020_slide">';

                                                        if(!empty($desc_4_il20)){

                            						   $output .= '	<a href="'.$button_link_4_il20.'" target="'.$open_link_il20.'" class="uc_btn_sec" style="color:'.$uc_btn_text_color.';background:'.$uc_btn_bg_color.'; border-color:'.$uc_btn_border_color.'; border-width:'.$uc_button_border_width.'px; font-size:'.$uc_btn_font_size.'px;">'.$desc_4_il20.'</a>';
                                                       }


                            						$output .= '</div> <!-- /fw_il_020_slide -->
                                                </div>
                                            </div> <!-- /1st row -->

                                             <!-- 2nd row -->
                                            <div class="row">
                                                <!-- 1st Image -->
                                                <div class="col-xs-15">
                                                    <img style="height:'.$uc_custom_image_height.'px; width:'.$uc_custom_image_width.'px;"  src="'.$image_5_il20[0].'" alt="fw_il_020_06" data-animation="animated fadeInLeft" />
                                                    <!-- Slide Text Layer -->
                                                    <div class="fw_il_020_slide fw_il_020_slide_colored">';

                                                        if(!empty($desc_5_il20)){

                            						   $output .= '	<a href="'.$button_link_5_il20.'" target="'.$open_link_il20.'" class="uc_btn_sec" style="color:'.$uc_btn_text_color.';background:'.$uc_btn_bg_color.'; border-color:'.$uc_btn_border_color.'; border-width:'.$uc_button_border_width.'px; font-size:'.$uc_btn_font_size.'px;">'.$desc_5_il20.'</a>';
                                                       }


                            						$output .= '</div> <!-- /fw_il_020_slide -->
                                                </div>
                                                <!-- 2nd Image -->
                                                <div class="col-xs-15">
                                                    <img style="height:'.$uc_custom_image_height.'px; width:'.$uc_custom_image_width.'px;"  src="'.$image_6_il20[0].'" alt="fw_il_020_07" data-animation="animated fadeInLeft" />
                                                    <!-- Slide Text Layer -->
                                                    <div class="fw_il_020_slide">';

                                                        if(!empty($desc_6_il20)){

                            						   $output .= '	<a href="'.$button_link_6_il20.'" target="'.$open_link_il20.'" class="uc_btn_sec" style="color:'.$uc_btn_text_color.';background:'.$uc_btn_bg_color.'; border-color:'.$uc_btn_border_color.'; border-width:'.$uc_button_border_width.'px; font-size:'.$uc_btn_font_size.'px;">'.$desc_6_il20.'</a>';
                                                       }


                            						$output .= '</div> <!-- /fw_il_020_slide -->
                                                </div>
                                                <!-- 3rd Image -->
                                                <div class="col-xs-15">
                                                    <img style="height:'.$uc_custom_image_height.'px; width:'.$uc_custom_image_width.'px;"  src="'.$image_7_il20[0].'" alt="fw_il_020_08" data-animation="animated fadeInLeft" />
                                                    <!-- Slide Text Layer -->
                                                    <div class="fw_il_020_slide fw_il_020_slide_colored">';

                                                        if(!empty($desc_7_il20)){

                            						   $output .= '	<a href="'.$button_link_7_il20.'" target="'.$open_link_il20.'" class="uc_btn_sec" style="color:'.$uc_btn_text_color.';background:'.$uc_btn_bg_color.'; border-color:'.$uc_btn_border_color.'; border-width:'.$uc_button_border_width.'px; font-size:'.$uc_btn_font_size.'px;">'.$desc_7_il20.'</a>';
                                                       }


                            						$output .= '</div> <!-- /fw_il_020_slide -->
                                                </div>
                                                <!-- 4th Image -->
                                                <div class="col-xs-15">
                                                    <img style="height:'.$uc_custom_image_height.'px; width:'.$uc_custom_image_width.'px;"  src="'.$image_8_il20[0].'" alt="fw_il_020_09" data-animation="animated fadeInLeft" />
                                                    <!-- Slide Text Layer -->
                                                    <div class="fw_il_020_slide">';

                                                        if(!empty($desc_8_il20)){

                            						   $output .= '	<a href="'.$button_link_8_il20.'" target="'.$open_link_il20.'" class="uc_btn_sec" style="color:'.$uc_btn_text_color.';background:'.$uc_btn_bg_color.'; border-color:'.$uc_btn_border_color.'; border-width:'.$uc_button_border_width.'px; font-size:'.$uc_btn_font_size.'px;">'.$desc_8_il20.'</a>';
                                                       }


                            						$output .= '</div> <!-- /fw_il_020_slide -->
                                                </div>
                                                <!-- 5th Image -->
                                                <div class="col-xs-15">
                                                    <img style="height:'.$uc_custom_image_height.'px; width:'.$uc_custom_image_width.'px;"  src="'.$image_9_il20[0].'" alt="fw_il_020_10" data-animation="animated fadeInLeft" />
                                                    <!-- Slide Text Layer -->
                                                    <div class="fw_il_020_slide fw_il_020_slide_colored">';

                                                        if(!empty($desc_9_il20)){

                            						   $output .= '	<a href="'.$button_link_9_il20.'" target="'.$open_link_il20.'" class="uc_btn_sec" style="color:'.$uc_btn_text_color.';background:'.$uc_btn_bg_color.'; border-color:'.$uc_btn_border_color.'; border-width:'.$uc_button_border_width.'px; font-size:'.$uc_btn_font_size.'px;">'.$desc_9_il20.'</a>';
                                                       }


                            						$output .= '/div> <!-- /fw_il_020_slide -->
                                                </div>
                                            </div> <!-- /2nd row -->

                                        </div>
                                        </div>';
        }
    }
}
//end of full 20



//end of full 1
     /* Write Itemo Code above of this comment */




    $output .='    </div> <!-- End of Wrapper For Slides --><style>.carousel-control{color:'.$uc_arrow_color.'; background:'.$uc_arrow_bg_color.';}.carousel-control:hover{color:'.$uc_arrow_color_hvr.'; background:'.$uc_arrow_bg_color_hvr.';}</style>';

        /* all Navigation arrow will be here */


        if ($style_fullwidth == 'fw_al_003' ||$style_fullwidth == 'fw_al_002' || $style_fullwidth ==  'fw_al_004' || $style_fullwidth ==  'fw_al_005' || $style_fullwidth == 'fw_al_006' || $style_fullwidth == 'fw_al_007' || $style_fullwidth ==  'fw_al_009' || $style_fullwidth ==  'fw_al_008' || $style_fullwidth ==  'fw_al_009' || $style_fullwidth ==  'fw_il_011' || $style_fullwidth ==  'fw_il_012' || $style_fullwidth ==  'fw_il_013' || $style_fullwidth ==  'fw_il_014' || $style_fullwidth ==  'fw_il_015' || $style_fullwidth ==  'fw_il_016'  || $style_fullwidth ==  'fw_il_017' || $style_fullwidth ==  'fw_il_018'  || $style_fullwidth ==  'fw_il_019'  || $style_fullwidth ==  'fw_il_020' || $style_fullwidth ==  'uc_list_fullwidth'  ) {

                $output .='     <a class="left carousel-control" href="#'.$style_fullwidth.'" role="button" data-slide="prev">
                        			<span class="fa fa-angle-left" aria-hidden="true"></span>
                        			<span class="sr-only">Previous</span>
                        		</a>

                        		<!-- Right Control -->
                        		<a class="right carousel-control" href="#'.$style_fullwidth.'" role="button" data-slide="next">
                        			<span class="fa fa-angle-right" aria-hidden="true"></span>
                        			<span class="sr-only">Next</span>
                        		</a>';
        }

        if ($style_fullwidth == 'fw_il_012') {

                $output .='      <a class="left carousel-control" href="#fw_il_012" role="button" data-slide="prev">
                                        <span class="fa fa-long-arrow-down" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>

                                    <!-- Right Control -->
                                    <a class="right carousel-control" href="#fw_il_012" role="button" data-slide="next">
                                        <span class="fa fa-long-arrow-up" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>';
        }





       $output .='


    </div> <!-- End Haritage Slider -->';
    