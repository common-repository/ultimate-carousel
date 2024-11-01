<?php

       //@@@@@@@@@@@@###################@@@@@@@@@@@@@@@@@
 if( $uc_kenburns_style == 'kenburns_061')    {
    $output .='<div id="kenburns_061" class="'.$uc_extra_class.'  carousel slide ps_indicators_txt_icon ps_control_txt_icon kbrns_zoomInOut thumb_scroll_x swipe_x ps_easeOutQuart" data-ride="carousel" data-pause="hover" data-interval="10000" data-duration="2000">
                          <style>
                    .carousel-control, .carousel-indicators li {background:'.$uc_arrow_bg_color.'!important;}
                    .carousel-control:hover,.carousel-indicators li:hover{ background:'.$uc_arrow_bg_color_hvr.'!important;}
                    .carousel-control span, .carousel-indicators li{color:'.$uc_arrow_color.'!important}
                    .carousel-control span:hover,  .carousel-indicators li:hover{color:'.$uc_arrow_color_hvr.'!important}

                    a.uc_btn_sec:hover {color: '.$uc_btn_text_hover_ken.'!important; background: '.$uc_btn_bg_hover_ken.'!important;border-color:'.$uc_btn_border_hover_ken.'!important; }
                    .kenburns_061_slide > a::after{top:12px}
                    .kenburns_061_slide > h2 > span,.kenburns_061_slide > h1 > span{color:'.$uc_highlite_header_color_ken.'}
                    .kenburns_061_slide_right a {margin: 15px 15% 0 auto;}
                      @media (min-width: 320px) and (max-width: 767px){  a.uc_btn_sec  {font-size: 7px!important;padding: 0!important;}}
                    '.$uc_custom_css.'

                    </style>

		<ol class="carousel-indicators">  ';
            if( ! empty( $carousel_options['uc_group_opt_kenburns'] ) ){
                    $carousel_data_images = $carousel_options['uc_group_opt_kenburns'];

                    $i = 0;
                    $a = 1;
                    foreach( $carousel_data_images as $carousel_data_image ){


                        if ($i==0){
                            $class = 'active';
                        }else{
                            $class = '';
                        }
                        $output .='<li data-target="#kenburns_061" data-slide-to="'.$i.'" class="'.$class.'">'.$a.'</li> ';
                    $i++;
                    $a++;
                    }
                    }

                    $output .='
		</ol>

		<!-- Wrapper For Slides -->
		<div class="carousel-inner" role="listbox"> ';


if( ! empty( $carousel_options['uc_group_opt_kenburns'] ) ) {

    $carousel_groups = $carousel_options['uc_group_opt_kenburns'];


    foreach( $carousel_groups as $carousel_group ){


    $uc_image_ken_src = $carousel_group['uc_image_ken'];
    $uc_image_ken = wp_get_attachment_image_src( $uc_image_ken_src, 'full' );

    $uc_header_ken = $carousel_group['uc_header_ken'];
    $uc_sub_header_ken = $carousel_group['uc_sub_header_ken'];
    $uc_desc_ken = $carousel_group['uc_desc_ken'];
    $uc_btn_text_ken = $carousel_group['uc_btn_text_ken'];
    $uc_btn_link_ken = $carousel_group['uc_btn_link_ken'];
    $uc_open_link_ken = $carousel_group['uc_open_link_ken'];
    $uc_text_position_ken = $carousel_group['uc_text_position_ken'];
    $uc_text_position_ken2 = $carousel_group['uc_text_position_ken2'];
    $uc_slide_4m_ken = $carousel_group['uc_slide_4m_ken'];



    //print_r($image);

        $output .= '

            	<!-- First Slide -->
                        <div class="item">
                            <!-- Slide Background -->
                            <img src="'.$uc_image_ken[0].'" alt="'.$uc_header_ken.'" />


                            <!-- Left Slide Text Layer -->
                            <div class="kenburns_061_slide '.$uc_text_position_ken.'" data-animation="animated fadeIn'.$uc_slide_4m_ken.'">

                                <h2 style="font-family:'.$uc_headeing_ken['family'].';font-weight:'.$uc_headeing_ken['variant'].'; font:'.$uc_headeing_ken['font'].';font-size:'.$uc_headeing_ken_size.'px; font-style:'.$uc_headeing_ken_style.';color:'.$uc_header_color_ken.';">'.$uc_header_ken.'</h2>

                                <h1 style="font-family:'.$uc_sub_head_ken_font['family'].';font-weight:'.$uc_sub_head_ken_font['variant'].'; font:'.$uc_sub_head_ken_font['font'].';font-size:'.$uc_sub_head_ken_size.'px; font-style:'.$uc_sub_head_ken_style.';color:'.$uc_sub_header_color_ken.';">'.$uc_sub_header_ken.'</h1>
                                <h3  style="font-family:'.$uc_desc_ken_font['family'].';font-weight:'.$uc_desc_ken_font['variant'].'; font:'.$uc_desc_ken_font['font'].';font-size:'.$uc_desc_ken_size.'px; font-style:'.$uc_desc_ken_style.';color:'.$uc_desc_header_color_ken.';">'.$uc_desc_ken.'</h3>

                                <a href="'.$uc_btn_link_ken.'" target="'.$uc_open_link_ken.'" class="uc_btn_sec" style="color:'.$uc_btn_text_color_ken.';background:'.$uc_btn_bg_color_ken.'; border-color:'.$uc_btn_border_color_ken.'; border-width:'.$uc_btn_brdr_wid_ken.'px; width:'.$uc_btn_wid_ken.'%;">'.$uc_btn_text_ken.'</a>

                            </div><!-- /Left Slide Text Layer -->
                        </div><!-- /item -->';

        }
    }
}  //End of a style

 if( $uc_kenburns_style == 'kenburns_062')    {
    $output .='<div id="kenburns_062" class="'.$uc_extra_class.'  carousel slide ps_indicators_cs_icon ps_control_cs_icon kbrns_zoomOutIn thumb_scroll_x swipe_x ps_easeOutInCubic" data-ride="carousel" data-pause="hover" data-interval="7000" data-duration="2000">
                          <style>
                    .carousel-control, .carousel-indicators li {background:'.$uc_arrow_bg_color.'!important;}
                    .carousel-control:hover,.carousel-indicators li:hover{ background:'.$uc_arrow_bg_color_hvr.'!important;}
                    .carousel-control span, .carousel-indicators li{color:'.$uc_arrow_color.'!important}
                    .carousel-control span:hover,  .carousel-indicators li:hover{color:'.$uc_arrow_color_hvr.'!important}
                    a.uc_btn_sec{padding: 0px 0px}
                    a.uc_btn_sec:hover {color: '.$uc_btn_text_hover_ken.'!important; background: '.$uc_btn_bg_hover_ken.'!important;border-color:'.$uc_btn_border_hover_ken.'!important; }
                    .kenburns_062_slide_right h1,.kenburns_062_slide_right h2,.kenburns_062_slide_right p{text-align:right}
                    .kenburns_062_slide_right a {margin: 15px 15% 0 auto;}
                    @media (min-width: 320px) and (max-width: 767px){  a.uc_btn_sec  {font-size: 7px!important;padding: 0!important;}}
                    '.$uc_custom_css.'

                    </style>

        <ol class="carousel-indicators">  ';
            if( ! empty( $carousel_options['uc_group_opt_kenburns_2'] ) ){
                    $carousel_data_images = $carousel_options['uc_group_opt_kenburns_2'];

                    $i = 0;
                    $a = 1;
                    foreach( $carousel_data_images as $carousel_data_image ){


                        if ($i==0){
                            $class = 'active';
                        }else{
                            $class = '';
                        }
                        $output .='<li data-target="#kenburns_062" data-slide-to="'.$i.'" class="'.$class.'"></li> ';
                    $i++;
                    $a++;
                    }
                    }

                    $output .='
        </ol>

        <!-- Wrapper For Slides -->
        <div class="carousel-inner" role="listbox"> ';


if( ! empty( $carousel_options['uc_group_opt_kenburns_2'] ) ) {

    $carousel_groups = $carousel_options['uc_group_opt_kenburns_2'];


    foreach( $carousel_groups as $carousel_group ){


    $uc_image_ken_2_src = $carousel_group['uc_image_ken_2'];
    $uc_image_ken_2 = wp_get_attachment_image_src( $uc_image_ken_2_src, 'full' );

    $uc_header_ken_2 = $carousel_group['uc_header_ken_2'];
    $uc_head_from_ken_2 = $carousel_group['uc_head_from_ken_2'];
    $uc_desc_ken_2 = $carousel_group['uc_desc_ken_2'];
    $uc_desc_from_ken_2 = $carousel_group['uc_desc_from_ken_2'];
    $uc_buttonn_text_ken_2 = $carousel_group['uc_buttonn_text_ken_2'];
    $uc_buttonn_link_ken_2 = $carousel_group['uc_buttonn_link_ken_2'];
    $uc_btn_from_ken_2 = $carousel_group['uc_btn_from_ken_2'];
    $uc_buttonn_text_ken_2_2 = $carousel_group['uc_buttonn_text_ken_2_2'];
    $uc_buttonn_link_ken_2_2 = $carousel_group['uc_buttonn_link_ken_2_2'];
    $uc_btn_from_ken_2_2 = $carousel_group['uc_btn_from_ken_2_2'];
    $uc_open_link_ken_2 = $carousel_group['uc_open_link_ken_2'];
    $uc_text_position_ken_2 = $carousel_group['uc_text_position_ken_2'];



    //print_r($image);

        $output .= '

            	<!-- First Slide -->
                    <div class="item">
                        <!-- Slide Background -->
                        <img src="'.$uc_image_ken_2[0].'" alt="'.$uc_header_ken_2.'" />
                        <!-- Left Slide Text Layer -->
                        <div class="kenburns_062_slide '.$uc_text_position_ken_2.'">

                            <h1 data-animation="animated fadeIn'.$uc_head_from_ken_2.'"  style="font-family:'.$uc_headeing_ken['family'].';font-weight:'.$uc_headeing_ken['variant'].'; font:'.$uc_headeing_ken['font'].';font-size:'.$uc_headeing_ken_size.'px; font-style:'.$uc_headeing_ken_style.';color:'.$uc_header_color_ken.'; border-width:'.$uc_headeing_ken_brdr.'px;border-color:'.$uc_header_brdr_color_ken.';">'.$uc_header_ken_2.'</h1>

                            <p data-animation="animated fadeIn'.$uc_desc_from_ken_2.'"  style="font-family:'.$uc_desc_ken_font['family'].';font-weight:'.$uc_desc_ken_font['variant'].'; font:'.$uc_desc_ken_font['font'].';font-size:'.$uc_desc_ken_size.'px; font-style:'.$uc_desc_ken_style.';color:'.$uc_desc_header_color_ken.';">'.$uc_desc_ken_2.'</p>

                            <a href="'.$uc_buttonn_link_ken_2.'" target="'.$uc_open_link_ken_2.'" data-animation="animated fadeIn'.$uc_btn_from_ken_2.'"  class="uc_btn_sec" style="color:'.$uc_btn_text_color_ken.';background:'.$uc_btn_bg_color_ken.'; border-color:'.$uc_btn_border_color_ken.'; border-width:'.$uc_btn_brdr_wid_ken.'px; width:'.$uc_btn_wid_ken.'%;">'.$uc_desc_from_ken_2.'</a>

                            <a href="'.$uc_buttonn_link_ken_2.'" target="'.$uc_open_link_ken_2.'"  data-animation="animated fadeIn'.$uc_btn_from_ken_2_2.'"  class="uc_btn_sec" style="color:'.$uc_btn_text_color_ken.';background:'.$uc_btn_bg_color_ken.'; border-color:'.$uc_btn_border_color_ken.'; border-width:'.$uc_btn_brdr_wid_ken.'px; width:'.$uc_btn_wid_ken.'%;">'.$uc_buttonn_text_ken_2_2.'</a>

                        </div><!-- /Left Slide Text Layer -->
                    </div><!-- /item -->';

        }
    }
}  //End of a style

 if( $uc_kenburns_style == 'kenburns_063')    {
    $output .='<div id="kenburns_063" class="'.$uc_extra_class.' carousel slide ps_indicators_blue ps_control_blue kbrns_zoomIn thumb_scroll_x swipe_x ps_easeOutQuart" data-ride="carousel" data-pause="hover" data-interval="7000" data-duration="2000">
                          <style>
                    .carousel-control, .carousel-indicators li {background:'.$uc_arrow_bg_color.'!important;}
                    .carousel-control:hover,.carousel-indicators li:hover{ background:'.$uc_arrow_bg_color_hvr.'!important;}
                    .carousel-control span, .carousel-indicators li{color:'.$uc_arrow_color.'!important}
                    .carousel-control span:hover,  .carousel-indicators li:hover{color:'.$uc_arrow_color_hvr.'!important}
                    a.uc_btn_sec{padding: 0px 0px}
                    .kenburns_063_slide h1 span {color:'.$uc_highlite_header_color_ken.'}
                    a.uc_btn_sec:hover {color: '.$uc_btn_text_hover_ken.'!important; background: '.$uc_btn_bg_hover_ken.'!important;border-color:'.$uc_btn_border_hover_ken.'!important; }
                    .kenburns_063_slide_right h1,.kenburns_063_slide_right p{text-align:right}
                   .kenburns_063_slide_right :last-child {margin-right: 170px;}

                     @media (min-width: 320px) and (max-width: 599px){  a.uc_btn_sec  {font-size: 7px!important;padding: 0!important;}.kenburns_063_slide_right :last-child {margin-right: 80px!important;}}

                    @media (min-width: 600px) and (max-width: 767px){  a.uc_btn_sec  {font-size: 8px!important;padding: 0!important;}.kenburns_063_slide_right :last-child {margin-right: 120px!important;}}
                    '.$uc_custom_css.'

                    </style>

        <ol class="carousel-indicators">  ';
            if( ! empty( $carousel_options['uc_group_opt_kenburns_2'] ) ){
                    $carousel_data_images = $carousel_options['uc_group_opt_kenburns_2'];

                    $i = 0;
                    $a = 1;
                    foreach( $carousel_data_images as $carousel_data_image ){


                        if ($i==0){
                            $class = 'active';
                        }else{
                            $class = '';
                        }
                        $output .='<li data-target="#kenburns_063" data-slide-to="'.$i.'" class="'.$class.'"></li> ';
                    $i++;
                    $a++;
                    }
                    }

                    $output .='
        </ol>

        <!-- Wrapper For Slides -->
        <div class="carousel-inner" role="listbox"> ';


if( ! empty( $carousel_options['uc_group_opt_kenburns_2'] ) ) {

    $carousel_groups = $carousel_options['uc_group_opt_kenburns_2'];


    foreach( $carousel_groups as $carousel_group ){


    $uc_image_ken_2_src = $carousel_group['uc_image_ken_2'];
    $uc_image_ken_2 = wp_get_attachment_image_src( $uc_image_ken_2_src, 'full' );

    $uc_header_ken_2 = $carousel_group['uc_header_ken_2'];
    $uc_head_from_ken_2 = $carousel_group['uc_head_from_ken_2'];
    $uc_desc_ken_2 = $carousel_group['uc_desc_ken_2'];
    $uc_desc_from_ken_2 = $carousel_group['uc_desc_from_ken_2'];
    $uc_buttonn_text_ken_2 = $carousel_group['uc_buttonn_text_ken_2'];
    $uc_buttonn_link_ken_2 = $carousel_group['uc_buttonn_link_ken_2'];
    $uc_btn_from_ken_2 = $carousel_group['uc_btn_from_ken_2'];
    $uc_buttonn_text_ken_2_2 = $carousel_group['uc_buttonn_text_ken_2_2'];
    $uc_buttonn_link_ken_2_2 = $carousel_group['uc_buttonn_link_ken_2_2'];
    $uc_btn_from_ken_2_2 = $carousel_group['uc_btn_from_ken_2_2'];
    $uc_open_link_ken_2 = $carousel_group['uc_open_link_ken_2'];
    $uc_text_position_ken_2 = $carousel_group['uc_text_position_ken_2'];



    //print_r($image);

        $output .= '

            	<!-- First Slide -->
                    <div class="item">
                        <!-- Slide Background -->
                        <img src="'.$uc_image_ken_2[0].'" alt="'.$uc_header_ken_2.'" />
                        <!-- Left Slide Text Layer -->
                        <div class="kenburns_063_slide '.$uc_text_position_ken_2.'">

                            <h1 data-animation="animated fadeIn'.$uc_head_from_ken_2.'"  style="font-family:'.$uc_headeing_ken['family'].';font-weight:'.$uc_headeing_ken['variant'].'; font:'.$uc_headeing_ken['font'].';font-size:'.$uc_headeing_ken_size.'px; font-style:'.$uc_headeing_ken_style.';color:'.$uc_header_color_ken.'; border-width:'.$uc_headeing_ken_brdr.'px;border-color:'.$uc_header_brdr_color_ken.';">'.$uc_header_ken_2.'</h1>

                            <p data-animation="animated fadeIn'.$uc_desc_from_ken_2.'"  style="font-family:'.$uc_desc_ken_font['family'].';font-weight:'.$uc_desc_ken_font['variant'].'; font:'.$uc_desc_ken_font['font'].';font-size:'.$uc_desc_ken_size.'px; font-style:'.$uc_desc_ken_style.';color:'.$uc_desc_header_color_ken.';">'.$uc_desc_ken_2.'</p>

                            <a href="'.$uc_buttonn_link_ken_2.'" target="'.$uc_open_link_ken_2.'" data-animation="animated fadeIn'.$uc_btn_from_ken_2.'"  class="uc_btn_sec" style="color:'.$uc_btn_text_color_ken.';background:'.$uc_btn_bg_color_ken.'; border-color:'.$uc_btn_border_color_ken.'; border-width:'.$uc_btn_brdr_wid_ken.'px; width:'.$uc_btn_wid_ken.'%;">'.$uc_desc_from_ken_2.'</a>

                            <a href="'.$uc_buttonn_link_ken_2.'" target="'.$uc_open_link_ken_2.'"  data-animation="animated fadeIn'.$uc_btn_from_ken_2_2.'"  class="uc_btn_sec" style="color:'.$uc_btn_text_color_ken.';background:'.$uc_btn_bg_color_ken.'; border-color:'.$uc_btn_border_color_ken.'; border-width:'.$uc_btn_brdr_wid_ken.'px; width:'.$uc_btn_wid_ken.'%;">'.$uc_buttonn_text_ken_2_2.'</a>

                        </div><!-- /Left Slide Text Layer -->
                    </div><!-- /item -->';

        }
    }
}  //End of a style

 if( $uc_kenburns_style == 'kenburns_064')    {
    $output .='<div id="kenburns_064" class="'.$uc_extra_class.' carousel slide ps_indicators_orange ps_control_orange kbrns_ltr thumb_scroll_x swipe_x ps_easeOutExpo" data-ride="carousel" data-pause="hover" data-interval="15000" data-duration="2000">
                    <style>
                    .carousel-control, .carousel-indicators li {background:'.$uc_arrow_bg_color.'!important;}
                    .carousel-control:hover,.carousel-indicators li:hover{ background:'.$uc_arrow_bg_color_hvr.'!important;}
                    .carousel-control span, .carousel-indicators li{color:'.$uc_arrow_color.'!important}
                    .carousel-control span:hover,  .carousel-indicators li:hover{color:'.$uc_arrow_color_hvr.'!important}

                    a.uc_btn_sec:hover {color: '.$uc_btn_text_hover_ken.'!important; background: '.$uc_btn_bg_hover_ken.'!important;border-color:'.$uc_btn_border_hover_ken.'!important; }
                    .kenburns_064_slide > a::after{top:12px}
                    .kenburns_064_slide > h2 > span,.kenburns_064_slide > h1 > span{color:'.$uc_highlite_header_color_ken.'}
                    .kenburns_064_slide_right h1,.kenburns_064_slide_right h2,.kenburns_064_slide_right p{text-align:right}
                      a.uc_btn_sec{padding: 0px 0px}
                      .kenburns_064_slide_right a {margin: 15px 15% 0 auto;}
                     @media (min-width: 320px) and (max-width: 767px){  a.uc_btn_sec  {font-size: 7px!important;padding: 0!important;}}
                    '.$uc_custom_css.'

                    </style>

        <ol class="carousel-indicators">  ';
            if( ! empty( $carousel_options['uc_group_opt_kenburns'] ) ){
                    $carousel_data_images = $carousel_options['uc_group_opt_kenburns'];

                    $i = 0;
                    $a = 1;
                    foreach( $carousel_data_images as $carousel_data_image ){


                        if ($i==0){
                            $class = 'active';
                        }else{
                            $class = '';
                        }
                        $output .='<li data-target="#kenburns_064" data-slide-to="'.$i.'" class="'.$class.'"></li> ';
                    $i++;
                    $a++;
                    }
                    }

                    $output .='
        </ol>

        <!-- Wrapper For Slides -->
        <div class="carousel-inner" role="listbox"> ';


if( ! empty( $carousel_options['uc_group_opt_kenburns'] ) ) {

    $carousel_groups = $carousel_options['uc_group_opt_kenburns'];


    foreach( $carousel_groups as $carousel_group ){


    $uc_image_ken_src = $carousel_group['uc_image_ken'];
    $uc_image_ken = wp_get_attachment_image_src( $uc_image_ken_src, 'full' );

    $uc_header_ken = $carousel_group['uc_header_ken'];
    $uc_sub_header_ken = $carousel_group['uc_sub_header_ken'];
    $uc_desc_ken = $carousel_group['uc_desc_ken'];
    $uc_btn_text_ken = $carousel_group['uc_btn_text_ken'];
    $uc_btn_link_ken = $carousel_group['uc_btn_link_ken'];
    $uc_open_link_ken = $carousel_group['uc_open_link_ken'];
    $uc_text_position_ken = $carousel_group['uc_text_position_ken'];
    $uc_text_position_ken2 = $carousel_group['uc_text_position_ken2'];
    $uc_slide_4m_ken = $carousel_group['uc_slide_4m_ken'];



    //print_r($image);

        $output .= '

            	<!-- First Slide -->
                        <div class="item"  style="background-image:url(paradise/images/kenburns_064_01.jpg);">


                            <!-- Left Slide Text Layer -->
                            <div class="kenburns_064_slide '.$uc_text_position_ken2.'" data-animation="animated fadeIn'.$uc_slide_4m_ken.'">

                                <h1 style="font-family:'.$uc_headeing_ken['family'].';font-weight:'.$uc_headeing_ken['variant'].'; font:'.$uc_headeing_ken['font'].';font-size:'.$uc_headeing_ken_size.'px; font-style:'.$uc_headeing_ken_style.';color:'.$uc_header_color_ken.';">'.$uc_header_ken.'</h1>

                                <h2 style="font-family:'.$uc_sub_head_ken_font['family'].';font-weight:'.$uc_sub_head_ken_font['variant'].'; font:'.$uc_sub_head_ken_font['font'].';font-size:'.$uc_sub_head_ken_size.'px; font-style:'.$uc_sub_head_ken_style.';color:'.$uc_sub_header_color_ken.';background-color:'.$uc_sub_header_bgcolor_ken.';">'.$uc_sub_header_ken.'</h2>
                                <p  style="font-family:'.$uc_desc_ken_font['family'].';font-weight:'.$uc_desc_ken_font['variant'].'; font:'.$uc_desc_ken_font['font'].';font-size:'.$uc_desc_ken_size.'px; font-style:'.$uc_desc_ken_style.';color:'.$uc_desc_header_color_ken.';">'.$uc_desc_ken.'</p>

                                <a href="'.$uc_btn_link_ken.'" target="'.$uc_open_link_ken.'" class="uc_btn_sec" style="color:'.$uc_btn_text_color_ken.';background:'.$uc_btn_bg_color_ken.'; border-color:'.$uc_btn_border_color_ken.'; border-width:'.$uc_btn_brdr_wid_ken.'px; width:'.$uc_btn_wid_ken.'%;">'.$uc_btn_text_ken.'</a>

                            </div><!-- /Left Slide Text Layer -->
                        </div><!-- /item -->';

        }
    }
}  //End of a style

 if( $uc_kenburns_style == 'kenburns_065')    {
    $output .='<div id="kenburns_065" class="'.$uc_extra_class.' carousel slide ps_indicators_gray ps_control_gray kbrns_rtl thumb_scroll_x swipe_x ps_easeOutInCubic" data-ride="carousel" data-pause="hover" data-interval="15000" data-duration="2000">
                          <style>
                    .carousel-control, .carousel-indicators li {background:'.$uc_arrow_bg_color.'!important;}
                    .carousel-control:hover,.carousel-indicators li:hover{ background:'.$uc_arrow_bg_color_hvr.'!important;}
                    .carousel-control span, .carousel-indicators li{color:'.$uc_arrow_color.'!important}
                    .carousel-control span:hover,  .carousel-indicators li:hover{color:'.$uc_arrow_color_hvr.'!important}
                    a.uc_btn_sec{padding: 0px 0px}
                    .kenburns_065_slide h1 span {color:'.$uc_highlite_header_color_ken.'}

                    a.uc_btn_sec:hover {color: '.$uc_btn_text_hover_ken.'!important; background: '.$uc_btn_bg_hover_ken.'!important;border-color:'.$uc_btn_border_hover_ken.'!important; }
                    .kenburns_065_slide_right h1,.kenburns_065_slide_right h2,.kenburns_065_slide_right p{text-align:right}
                      .kenburns_065_slide_right a {margin: 15px 15% 0 auto;}
                     @media (min-width: 320px) and (max-width: 767px){  a.uc_btn_sec  {font-size: 7px!important;padding: 0!important;}}
                    '.$uc_custom_css.'

                    </style>

        <ol class="carousel-indicators">  ';
            if( ! empty( $carousel_options['uc_group_opt_kenburns_2'] ) ){
                    $carousel_data_images = $carousel_options['uc_group_opt_kenburns_2'];

                    $i = 0;
                    $a = 1;
                    foreach( $carousel_data_images as $carousel_data_image ){


                        if ($i==0){
                            $class = 'active';
                        }else{
                            $class = '';
                        }
                        $output .='<li data-target="#kenburns_065" data-slide-to="'.$i.'" class="'.$class.'"></li> ';
                    $i++;
                    $a++;
                    }
                    }

                    $output .='
        </ol>

        <!-- Wrapper For Slides -->
        <div class="carousel-inner" role="listbox"> ';


if( ! empty( $carousel_options['uc_group_opt_kenburns_2'] ) ) {

    $carousel_groups = $carousel_options['uc_group_opt_kenburns_2'];


    foreach( $carousel_groups as $carousel_group ){


    $uc_image_ken_2_src = $carousel_group['uc_image_ken_2'];
    $uc_image_ken_2 = wp_get_attachment_image_src( $uc_image_ken_2_src, 'full' );

    $uc_header_ken_2 = $carousel_group['uc_header_ken_2'];
    $uc_head_from_ken_2 = $carousel_group['uc_head_from_ken_2'];
    $uc_desc_ken_2 = $carousel_group['uc_desc_ken_2'];
    $uc_desc_from_ken_2 = $carousel_group['uc_desc_from_ken_2'];
    $uc_buttonn_text_ken_2 = $carousel_group['uc_buttonn_text_ken_2'];
    $uc_buttonn_link_ken_2 = $carousel_group['uc_buttonn_link_ken_2'];
    $uc_btn_from_ken_2 = $carousel_group['uc_btn_from_ken_2'];
    $uc_buttonn_text_ken_2_2 = $carousel_group['uc_buttonn_text_ken_2_2'];
    $uc_buttonn_link_ken_2_2 = $carousel_group['uc_buttonn_link_ken_2_2'];
    $uc_btn_from_ken_2_2 = $carousel_group['uc_btn_from_ken_2_2'];
    $uc_open_link_ken_2 = $carousel_group['uc_open_link_ken_2'];
    $uc_text_position_ken_2 = $carousel_group['uc_text_position_ken_2'];



    //print_r($image);

        $output .= '

            	<!-- First Slide -->
                    <div class="item" style="background-image:url('.$uc_image_ken_2[0].');"> <!-- Please Enter Background Image URL Here -->
                        <!-- Left Slide Text Layer -->
                        <div class="kenburns_065_slide '.$uc_text_position_ken_2.'">

                            <h2 data-animation="animated fadeIn'.$uc_head_from_ken_2.'"  style="font-family:'.$uc_headeing_ken['family'].';font-weight:'.$uc_headeing_ken['variant'].'; font:'.$uc_headeing_ken['font'].';font-size:'.$uc_headeing_ken_size.'px; font-style:'.$uc_headeing_ken_style.';color:'.$uc_header_color_ken.'; border-width:'.$uc_headeing_ken_brdr.'px;border-color:'.$uc_header_brdr_color_ken.';">'.$uc_header_ken_2.'</h2>

                            <h1 data-animation="animated fadeIn'.$uc_desc_from_ken_2.'"  style="font-family:'.$uc_desc_ken_font['family'].';font-weight:'.$uc_desc_ken_font['variant'].'; font:'.$uc_desc_ken_font['font'].';font-size:'.$uc_desc_ken_size.'px; font-style:'.$uc_desc_ken_style.';color:'.$uc_desc_header_color_ken.';">'.$uc_desc_ken_2.'</h1>

                            <a href="'.$uc_buttonn_link_ken_2.'" target="'.$uc_open_link_ken_2.'" data-animation="animated fadeIn'.$uc_btn_from_ken_2.'"  class="uc_btn_sec" style="color:'.$uc_btn_text_color_ken.';background:'.$uc_btn_bg_color_ken.'; border-color:'.$uc_btn_border_color_ken.'; border-width:'.$uc_btn_brdr_wid_ken.'px; width:'.$uc_btn_wid_ken.'%;">'.$uc_desc_from_ken_2.'</a>


                        </div><!-- /Left Slide Text Layer -->
                    </div><!-- /item -->';

        }
    }
}  //End of a style


    $output .='    </div>  ';
                        if($uc_kenburns_style == 'kenburns_061'){

                    	    $output .=' 	<!-- Left Control -->
                            <a class="left carousel-control" href="#'.$uc_kenburns_style.'" role="button" data-slide="prev">
                                <span>prev</span>
                                <span class="sr-only">Previous</span>
                            </a>

                            <!-- Right Control -->
                            <a class="right carousel-control" href="#'.$uc_kenburns_style.'" role="button" data-slide="next">
                                <span>next</span>
                                <span class="sr-only">Next</span>
                            </a>  ';

                        }
                        if($uc_kenburns_style == 'kenburns_062'){

                    	    $output .='
                            <!-- Left Control -->
                            <a class="left carousel-control" href="#kenburns_062" role="button" data-slide="prev">
                                <span></span>
                                <span class="sr-only">Previous</span>
                            </a>

                            <!-- Right Control -->
                            <a class="right carousel-control" href="#kenburns_062" role="button" data-slide="next">
                                <span></span>
                                <span class="sr-only">Next</span>
                            </a>';

                        }
                        if($uc_kenburns_style == 'kenburns_063'){

                    	    $output .='
                            <!-- Left Control -->
                            <a class="left carousel-control" href="#kenburns_063" role="button" data-slide="prev">
                                <span class="fa fa-angle-left"></span>
                                <span class="sr-only">Previous</span>
                            </a>

                            <!-- Right Control -->
                            <a class="right carousel-control" href="#kenburns_063" role="button" data-slide="next">
                                <span class="fa fa-angle-right"></span>
                                <span class="sr-only">Next</span>
                            </a>';

                        }
                        if($uc_kenburns_style == 'kenburns_064'){

                    	    $output .='
                            <!-- Left Control -->
                            <a class="left carousel-control" href="#kenburns_064" role="button" data-slide="prev">
                                <span class="fa fa-angle-left"></span>
                                <span class="sr-only">Previous</span>
                            </a>

                            <!-- Right Control -->
                            <a class="right carousel-control" href="#kenburns_064" role="button" data-slide="next">
                                <span class="fa fa-angle-right"></span>
                                <span class="sr-only">Next</span>
                            </a>';

                        }
                        if($uc_kenburns_style == 'kenburns_065'){

                    	    $output .='
                            <!-- Left Control -->
                            <a class="left carousel-control" href="#kenburns_065" role="button" data-slide="prev">
                                <span class="fa fa-long-arrow-left"></span>
                                <span class="sr-only">Previous</span>
                            </a>

                            <!-- Right Control -->
                            <a class="right carousel-control" href="#kenburns_065" role="button" data-slide="next">
                                <span class="fa fa-long-arrow-right"></span>
                                <span class="sr-only">Next</span>
                            </a>';

                        }

                            $output .='

    </div> <!-- End Haritage Slider -->';