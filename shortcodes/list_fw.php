<?php

       //@@@@@@@@@@@@###################@@@@@@@@@@@@@@@@@
 if( $uc_list_full_style == 'js_list_051')    {
    $output .='<div id="js_list_051" class="'.$uc_extra_class.'  carousel slide ps_indicators_square_dots ps_control_square_txt thumb_scroll_x swipe_x ps_slowSpeedy" data-ride="carousel" data-pause="hover" data-interval="3000" data-duration="2000">
                          <style>
                    .carousel-control, .carousel-indicators li {background:'.$uc_arrow_bg_color.'!important;}
                    .carousel-control:hover,.carousel-indicators li:hover{ background:'.$uc_arrow_bg_color_hvr.'!important;}
                    .carousel-control span, .carousel-indicators li{color:'.$uc_arrow_color.'!important}
                    .carousel-control span:hover,  .carousel-indicators li:hover{color:'.$uc_arrow_color_hvr.'!important}

                    </style>

		<ol class="carousel-indicators">  ';
            if( ! empty( $carousel_options['group_option_fw_list'] ) ){
                    $carousel_data_images = $carousel_options['group_option_fw_list'];

                    $i = 0;
                    foreach( $carousel_data_images as $carousel_data_image ){


                        if ($i==0){
                            $class = 'active';
                        }else{
                            $class = '';
                        }
                        $output .='<li data-target="#js_list_051" data-slide-to="'.$i.'" class="'.$class.'"></li> ';
                    $i++;
                    }
                    }

                    $output .='
		</ol>

		<!-- Wrapper For Slides -->
		<div class="carousel-inner" role="listbox"> ';


if( ! empty( $carousel_options['group_option_fw_list'] ) ) {

    $carousel_groups = $carousel_options['group_option_fw_list'];


    foreach( $carousel_groups as $carousel_group ){


    $uc_image_list_src = $carousel_group['uc_image_list'];
    $uc_image_list = wp_get_attachment_image_src( $uc_image_list_src, 'full' );

    $uc_header_list = $carousel_group['uc_header_list'];
    $uc_header_list_slide = $carousel_group['uc_header_list_slide'];
    $uc_service_list_0 = $carousel_group['uc_service_list_0'];
    $uc_slide_list_0 = $carousel_group['uc_slide_list_0'];
    $uc_service_1_list = $carousel_group['uc_service_1_list'];
    $uc_slide_list_1 = $carousel_group['uc_slide_list_1'];
    $uc_service_2_list = $carousel_group['uc_service_2_list'];
    $uc_slide_list_2 = $carousel_group['uc_slide_list_2'];
    $uc_service_3_list = $carousel_group['uc_service_3_list'];
    $uc_slide_list_3 = $carousel_group['uc_slide_list_3'];
    $uc_service_4_list = $carousel_group['uc_service_4_list'];
    $uc_slide_list_4 = $carousel_group['uc_slide_list_4'];
    $uc_buttonn_text_list = $carousel_group['uc_buttonn_text_list'];
    $uc_buttonn_link_list = $carousel_group['uc_buttonn_link_list'];
    $uc_open_link_list = $carousel_group['uc_open_link_list'];
    $uc_slide_from_list = $carousel_group['uc_slide_from_list'];



    //print_r($image);

        $output .= '

            	<!-- First Slide -->
                        <div class="item">
                            <!-- Slide Background -->
                            <img src="'.$uc_image_list[0].'" alt="'.$uc_header_list.'" />
                             <style>
                                .js_list_simple h1{font-family:'.$uc_listfw_head_text['family'].';font-weight:'.$uc_listfw_head_text['variant'].'; font:'.$uc_listfw_head_text['font'].';font-size:'.$uc_listfw_heading_siz.'; font-style:'.$uc_listfw_heading_style.';color:'.$uc_listfw_heading_color.'}
                                .js_list_simple li {font-family:'.$uc_listfw_serv_text['family'].';font-weight:'.$uc_listfw_serv_text['variant'].'; font:'.$uc_listfw_serv_text['font'].';font-size:'.$uc_listfw_serv_size.'; font-style:'.$uc_listfw_serv_style.';color:'.$uc_listfw_serv_color.'; background:'.$uc_listfw_serv_back.';}
                                .js_list_simple li:hover{color:'.$uc_listfw_serv_hover.'; background:'.$uc_listfw_back_hover.';}



                                 a.uc_btn_sec:hover {color: '.$uc_listfw_btn_text_hover.'!important; background: '.$uc_listfw_btn_bg_hover.'!important;border-color:'.$uc_listfw_btn_border_hover.'!important; }

                                '.$uc_custom_css.'
                             </style>



                            <!-- List Layer -->
                            <div class="js_list_simple '.$uc_slide_from_list.'">
                                <h1 data-animation="animated '.$uc_header_list_slide.'">'.$uc_header_list.'</h1> <!-- Heading -->
                                <ul> <!-- List -->
                                    <li data-animation="animated '.$uc_slide_list_0.'">'.$uc_service_list_0.'</li>
                                    <li data-animation="animated '.$uc_slide_list_1.'">'.$uc_service_1_list.'</li>
                                    <li data-animation="animated '.$uc_slide_list_2.'">'.$uc_service_2_list.'</li>
                                    <li data-animation="animated '.$uc_slide_list_3.'">'.$uc_service_3_list.'</li>
                                    <li data-animation="animated '.$uc_slide_list_4.'">'.$uc_service_4_list.'</li>
                                </ul>
                                <a href="'.$uc_buttonn_link_list.'" target="'.$uc_open_link_list.'" data-animation="animated fadeInRight" class="uc_btn_sec" style="color:'.$uc_listfw_btn_text_color.';background:'.$uc_listfw_btn_bg_color.'; border-color:'.$uc_listfw_btn_border_color.'; border-width:'.$uc_button_border_width.'px; font-size:'.$uc_btn_font_size.'px;">'.$uc_buttonn_text_list.'</a>
                            </div><!-- /List Layer -->
                        </div>
                        <!-- /item -->';

        }
    }
}  //End of a style


 if( $uc_list_full_style == 'js_list_052')    {
    $output .='<div id="js_list_052" class="'.$uc_extra_class.' carousel slide ps_indicators_radius_icons ps_control_radius_txt thumb_scroll_x swipe_x ps_slowSpeedy" data-ride="carousel" data-pause="hover" data-interval="4000" data-duration="2000">
                    <style>
                    .carousel-control, .carousel-indicators li {background:'.$uc_arrow_bg_color.'!important;}
                    .carousel-control:hover,.carousel-indicators li:hover{ background:'.$uc_arrow_bg_color_hvr.'!important;}
                    .carousel-control span, .carousel-indicators li span{color:'.$uc_arrow_color.'!important}
                    .carousel-control span:hover,  .carousel-indicators li span:hover{color:'.$uc_arrow_color_hvr.'!important}

                    </style>

        <ol class="carousel-indicators">  ';
            if( ! empty( $carousel_options['group_option_fw_list_2'] ) ){
                    $carousel_data_images = $carousel_options['group_option_fw_list_2'];

                    $i = 0;
                    foreach( $carousel_data_images as $carousel_data_image ){
                    $uc_carousel_icon_list = $carousel_data_image['uc_carousel_icon_list'];

                        if ($i==0){
                            $class = 'active';
                        }else{
                            $class = '';
                        }
                        $output .='<li data-target="#js_list_052" data-slide-to="'.$i.'" class="'.$class.'"><span class="fa '.$uc_carousel_icon_list.'"></span></li> ';
                    $i++;
                    }
                    }

                    $output .='
        </ol>

        <!-- Wrapper For Slides -->
        <div class="carousel-inner" role="listbox"> ';


if( ! empty( $carousel_options['group_option_fw_list_2'] ) ) {

    $carousel_groups = $carousel_options['group_option_fw_list_2'];


    foreach( $carousel_groups as $carousel_group ){


    $uc_image_list_2_src = $carousel_group['uc_image_list_2'];
    $uc_image_list_2 = wp_get_attachment_image_src( $uc_image_list_2_src, 'full' );

    $uc_header_list_2 = $carousel_group['uc_header_list_2'];
    $uc_slide_head_list_2 = $carousel_group['uc_slide_head_list_2'];
    $uc_service_list_2_0 = $carousel_group['uc_service_list_2_0'];
    $uc_service_list_2_1 = $carousel_group['uc_service_list_2_1'];
    $uc_service_list_2_2 = $carousel_group['uc_service_list_2_2'];
    $uc_service_list_2_3 = $carousel_group['uc_service_list_2_3'];
    $uc_service_list_2_4 = $carousel_group['uc_service_list_2_4'];
    $uc_service_list_ico_2_0 = $carousel_group['uc_service_list_ico_2_0'];
    $uc_service_list_ico_2_1 = $carousel_group['uc_service_list_ico_2_1'];
    $uc_service_list_ico_2_2 = $carousel_group['uc_service_list_ico_2_2'];
    $uc_service_list_ico_2_3 = $carousel_group['uc_service_list_ico_2_3'];
    $uc_service_list_ico_2_4 = $carousel_group['uc_service_list_ico_2_4'];
    $uc_slide_list_2_0 = $carousel_group['uc_slide_list_2_0'];
    $uc_slide_list_2_1 = $carousel_group['uc_slide_list_2_1'];
    $uc_slide_list_2_2 = $carousel_group['uc_slide_list_2_2'];
    $uc_slide_list_2_3 = $carousel_group['uc_slide_list_2_3'];
    $uc_slide_list_2_4 = $carousel_group['uc_slide_list_2_4'];

    $uc_buttonn_text_list_2 = $carousel_group['uc_buttonn_text_list_2'];
    $uc_buttonn_link_list_2 = $carousel_group['uc_buttonn_link_list_2'];
    $uc_open_link_list_2 = $carousel_group['uc_open_link_list_2'];
    $uc_slide_from_list_2 = $carousel_group['uc_slide_from_list_2'];



    //print_r($image);

        $output .= '

            	<!-- First Slide -->
                        <div class="item">
                            <!-- Slide Background -->
                            <img src="'.$uc_image_list_2[0].'" alt="'.$uc_header_list_2.'" />
                             <style>
                                .js_list_icons h1{font-family:'.$uc_listfw_head_text['family'].';font-weight:'.$uc_listfw_head_text['variant'].'; font:'.$uc_listfw_head_text['font'].';font-size:'.$uc_listfw_heading_siz.'px; font-style:'.$uc_listfw_heading_style.';color:'.$uc_listfw_heading_color.'}
                                .js_list_icons li {font-family:'.$uc_listfw_serv_text['family'].';font-weight:'.$uc_listfw_serv_text['variant'].'; font:'.$uc_listfw_serv_text['font'].';font-size:'.$uc_listfw_serv_size.'px; font-style:'.$uc_listfw_serv_style.';color:'.$uc_listfw_serv_color.'; }
                                .js_list_icons li:hover{color:'.$uc_listfw_serv_hover.';}


                                .js_list_icons li span.fa{color:'.$uc_icon_colr_listfw.'; background:'.$uc_icon_bg_listfw.';}
                                .js_list_icons li span.fa:hover{color:'.$uc_icon_colr_hvr_listfw.';}
                                 a.uc_btn_sec:hover {color: '.$uc_listfw_btn_text_hover.'!important; background: '.$uc_listfw_btn_bg_hover.'!important;border-color:'.$uc_listfw_btn_border_hover.'!important; }

                                 @media (min-width: 320px) and (max-width: 767px){  a.uc_btn_sec  {font-size: 7px!important;padding: 0!important;}}
                                '.$uc_custom_css.'
                             </style>



                            <!-- List Layer -->
                            <div class="js_list_icons '.$uc_slide_from_list_2.'">
                                <h1 data-animation="animated '.$uc_slide_head_list_2.'">'.$uc_header_list_2.'</h1> <!-- Heading -->
                                <ul> <!-- List -->
                                    <li data-animation="animated '.$uc_slide_list_2_0.'"><span class="fa '.$uc_service_list_ico_2_0.'"></span>'.$uc_service_list_2_0.'</li>
                                    <li data-animation="animated '.$uc_slide_list_2_1.'"><span class="fa '.$uc_service_list_ico_2_1.'"></span>'.$uc_service_list_2_1.'</li>
                                    <li data-animation="animated '.$uc_slide_list_2_2.'"><span class="fa '.$uc_service_list_ico_2_2.'"></span>'.$uc_service_list_2_2.'</li>
                                    <li data-animation="animated '.$uc_slide_list_2_3.'"><span class="fa '.$uc_service_list_ico_2_3.'"></span>'.$uc_service_list_2_3.'</li>
                                    <li data-animation="animated '.$uc_slide_list_2_4.'"><span class="fa '.$uc_service_list_ico_2_4.'"></span>'.$uc_service_list_2_4.'</li>
                                </ul>
                                <a href="'.$uc_buttonn_link_list_2.'" target="'.$uc_slide_from_list_2.'" data-animation="animated fadeInRight" class="uc_btn_sec" style="color:'.$uc_listfw_btn_text_color.';background:'.$uc_listfw_btn_bg_color.'; border-color:'.$uc_listfw_btn_border_color.'; border-width:'.$uc_button_border_width.'px; font-size:'.$uc_btn_font_size.'px;line-height: 26px;padding: 12px 0; text-align: center;border-radius:50px;" >'.$uc_buttonn_text_list_2.'</a>
                            </div><!-- /List Layer -->
                        </div>
                        <!-- /item -->';

        }
    }
}  //End of a style
 if( $uc_list_full_style == 'js_list_054')    {
    $output .='<div id="js_list_054" class="'.$uc_extra_class.' carousel slide ps_indicators_radius_num ps_control_radius_txt_x thumb_scroll_x swipe_x ps_easeOutQuint" data-ride="carousel" data-pause="hover" data-interval="false" data-duration="2000">
                    <style>
                    .carousel-control, .carousel-indicators li {background:'.$uc_arrow_bg_color.'!important;}
                    .carousel-control:hover,.carousel-indicators li:hover{ background:'.$uc_arrow_bg_color_hvr.'!important;}
                    .carousel-control span, .carousel-indicators li{color:'.$uc_arrow_color.'!important}
                    .carousel-control span:hover,  .carousel-indicators li:hover{color:'.$uc_arrow_color_hvr.'!important}

                    </style>

        <ol class="carousel-indicators">  ';
            if( ! empty( $carousel_options['group_option_fw_list_2'] ) ){
                    $carousel_data_images = $carousel_options['group_option_fw_list_2'];

                    $i = 0;
                    $a=1;
                    foreach( $carousel_data_images as $carousel_data_image ){

                        if ($i==0){
                            $class = 'active';
                        }else{
                            $class = '';
                        }
                        $output .='<li data-target="#js_list_054" data-slide-to="'.$i.'" class="'.$class.'">'.$a.'</li> ';
                    $i++;
                    $a++;
                    }
                    }

                    $output .='
        </ol>

        <!-- Wrapper For Slides -->
        <div class="carousel-inner" role="listbox"> ';


if( ! empty( $carousel_options['group_option_fw_list_2'] ) ) {

    $carousel_groups = $carousel_options['group_option_fw_list_2'];


    foreach( $carousel_groups as $carousel_group ){


    $uc_image_list_2_src = $carousel_group['uc_image_list_2'];
    $uc_image_list_2 = wp_get_attachment_image_src( $uc_image_list_2_src, 'full' );

    $uc_header_list_2 = $carousel_group['uc_header_list_2'];
    $uc_slide_head_list_2 = $carousel_group['uc_slide_head_list_2'];
    $uc_service_list_2_0 = $carousel_group['uc_service_list_2_0'];
    $uc_service_list_2_1 = $carousel_group['uc_service_list_2_1'];
    $uc_service_list_2_2 = $carousel_group['uc_service_list_2_2'];
    $uc_service_list_2_3 = $carousel_group['uc_service_list_2_3'];
    $uc_service_list_2_4 = $carousel_group['uc_service_list_2_4'];
    $uc_service_list_ico_2_0 = $carousel_group['uc_service_list_ico_2_0'];
    $uc_service_list_ico_2_1 = $carousel_group['uc_service_list_ico_2_1'];
    $uc_service_list_ico_2_2 = $carousel_group['uc_service_list_ico_2_2'];
    $uc_service_list_ico_2_3 = $carousel_group['uc_service_list_ico_2_3'];
    $uc_service_list_ico_2_4 = $carousel_group['uc_service_list_ico_2_4'];
    $uc_slide_list_2_0 = $carousel_group['uc_slide_list_2_0'];
    $uc_slide_list_2_1 = $carousel_group['uc_slide_list_2_1'];
    $uc_slide_list_2_2 = $carousel_group['uc_slide_list_2_2'];
    $uc_slide_list_2_3 = $carousel_group['uc_slide_list_2_3'];
    $uc_slide_list_2_4 = $carousel_group['uc_slide_list_2_4'];

    $uc_buttonn_text_list_2 = $carousel_group['uc_buttonn_text_list_2'];
    $uc_buttonn_link_list_2 = $carousel_group['uc_buttonn_link_list_2'];
    $uc_open_link_list_2 = $carousel_group['uc_open_link_list_2'];
    $uc_slide_from_list_2 = $carousel_group['uc_slide_from_list_2'];



    //print_r($image);

        $output .= '

            	<!-- First Slide -->
                        <div class="item">
                            <!-- Slide Background -->
                            <img src="'.$uc_image_list_2[0].'" alt="'.$uc_header_list_2.'" />
                             <style>
                                .js_list_radius h1{font-family:'.$uc_listfw_head_text['family'].';font-weight:'.$uc_listfw_head_text['variant'].'; font:'.$uc_listfw_head_text['font'].';font-size:'.$uc_listfw_heading_siz.'; font-style:'.$uc_listfw_heading_style.';color:'.$uc_listfw_heading_color.'}
                                .js_list_radius li {font-family:'.$uc_listfw_serv_text['family'].';font-weight:'.$uc_listfw_serv_text['variant'].'; font:'.$uc_listfw_serv_text['font'].';font-size:'.$uc_listfw_serv_size.'px; font-style:'.$uc_listfw_serv_style.';color:'.$uc_listfw_serv_color.'!important; background:'.$uc_listfw_serv_back.'!important;; }
                                .js_list_radius li:hover{color:'.$uc_listfw_serv_hover.'!important;; background:'.$uc_listfw_back_hover.'!important;;}



                                 a.uc_btn_sec:hover {color: '.$uc_listfw_btn_text_hover.'!important; background: '.$uc_listfw_btn_bg_hover.'!important;border-color:'.$uc_listfw_btn_border_hover.'!important; }

                                 @media (min-width: 320px) and (max-width: 767px){  a.uc_btn_sec  {font-size: 7px!important;padding: 0!important;}}
                                '.$uc_custom_css.'
                             </style>



                            <!-- List Layer -->
                            <div class="js_list_radius '.$uc_slide_from_list_2.'">
                                <h1 data-animation="animated '.$uc_slide_head_list_2.'">'.$uc_header_list_2.'</h1> <!-- Heading -->
                                <ul> <!-- List -->
                                    <li data-animation="animated '.$uc_slide_list_2_0.'">'.$uc_service_list_2_0.'</li>
                                    <li data-animation="animated '.$uc_slide_list_2_1.'">'.$uc_service_list_2_1.'</li>
                                    <li data-animation="animated '.$uc_slide_list_2_2.'">'.$uc_service_list_2_2.'</li>
                                    <li data-animation="animated '.$uc_slide_list_2_3.'">'.$uc_service_list_2_3.'</li>
                                    <li data-animation="animated '.$uc_slide_list_2_4.'">'.$uc_service_list_2_4.'</li>
                                </ul>
                                <a href="'.$uc_buttonn_link_list_2.'" target="'.$uc_slide_from_list_2.'" data-animation="animated fadeInRight" class="uc_btn_sec" style="color:'.$uc_listfw_btn_text_color.';background:'.$uc_listfw_btn_bg_color.'; border-color:'.$uc_listfw_btn_border_color.'; border-width:'.$uc_button_border_width.'px; font-size:'.$uc_btn_font_size.'px;padding: 0px; text-align: center;border-radius:50px;" >'.$uc_buttonn_text_list_2.'</a>
                            </div><!-- /List Layer -->
                        </div>
                        <!-- /item -->';

        }
    }
}  //End of a style
    $output .='    </div>


                    		<!-- Left Control -->
                            <a class="left carousel-control" href="#'.$uc_list_full_style.'" role="button" data-slide="prev">
                                <span class="fa fa-long-arrow-left" aria-hidden="true"><span>pre</span></span>
                                <span class="sr-only">Previous</span>
                            </a>

                            <!-- Right Control -->
                            <a class="right carousel-control" href="#'.$uc_list_full_style.'" role="button" data-slide="next">
                                <span class="fa fa-long-arrow-right" aria-hidden="true"><span>nex</span></span>
                                <span class="sr-only">Next</span>
                            </a>

    </div> <!-- End Haritage Slider -->';