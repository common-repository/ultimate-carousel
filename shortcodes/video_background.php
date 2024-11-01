<?php

       //@@@@@@@@@@@@###################@@@@@@@@@@@@@@@@@
if($video_background_style == 'video_096'){ 
    $output .='
    
     <div id="video_096" class="'.$uc_extra_class.' carousel slide video_096_indicators video_096_control_button thumb_scroll_x swipe_x ps_easeOutInCubic '.$uc_extra_class.'" data-ride="carousel" data-pause="hover" data-interval="5000" data-duration="2000">
	<style>
    .carousel-control{color:'.$uc_arrow_color.'!important; background:'.$uc_arrow_bg_color.'!important;}
        .carousel-control:hover{color:'.$uc_arrow_color_hvr.'!important; background:'.$uc_arrow_bg_color_hvr.'!important;}
            '.$uc_custom_css.'
        </style>
		<!-- Wrapper For Slides -->
		<div class="carousel-inner" role="listbox"> ';


    if( ! empty( $carousel_options['group_option_vid_back'] ) ) {

        $carousel_groups = $carousel_options['group_option_vid_back'];


        foreach( $carousel_groups as $carousel_group ){


        $uc_image_vid_back_src = $carousel_group['uc_image_vid_back'];

        $uc_image_vid_back                  = wp_get_attachment_image_src( $uc_image_vid_back_src, 'full' );
        $uc_video_link                      = $carousel_group['uc_video_link'];
        $uc_video_back_headering            = $carousel_group['uc_video_back_header'];
        $uc_video_back_sub_header           = $carousel_group['uc_video_back_sub_header'];
        $uc_video_back_desc                 = $carousel_group['uc_video_back_desc'];
        $uc_video_back_btn                  = $carousel_group['uc_video_back_btn'];
        $uc_on_click_video_back             = $carousel_group['uc_on_click_video_back'];
        $uc_extra_video_back                = $carousel_group['uc_extra_video_back'];
        $uc_open_video_back                 = $carousel_group['uc_open_video_back'];




        //print_r($image);

            $output .= '

                	<!-- 1st Box -->
    			<div class="item">
                                            <style>
                                                a.uc_btn_sec:hover {
                                                        color: '.$uc_vid_btn_text_hover.'!important;
                                                        background: '.$uc_vid_btn_bg_hover.'!important;
                                                        border-color:'.$uc_vid_btn_border_hover.'!important;
                                                        
                                                    }
                                                   
                                            </style>

    				<!-- Image For Mobiles. HTML Video Tag does not support the mobiles -->
    				<div class="video_096_img">
    					<img src="'.$uc_image_vid_back[0].'" alt="video_096_01">
    				</div>
    				<!-- Video -->
    				<div class="video_096_vid">
    					<video autoplay loop muted>
    						<source src="'.$uc_video_link.'" type="video/mp4" >
    						Your browser does not support HTML5 video.
    					</video>
    				</div>
    				<!-- Text Layer -->
    				<div class="video_096_slide">
    					<h4 data-animation="animated fadeInUp"  style="font-family:'.$uc_video_sub_text['family'].'; font-weight:'.$uc_video_sub_text['variant'].'; font::'.$uc_video_sub_text['font'].'; font-size:'.$uc_video_sub_size.'px; font-style:'.$uc_video_sub_style.' ; color:'.$uc_vid_sub_color.';">'.$uc_video_back_sub_header.'</h4>

    					<h1 data-animation="animated fadeInUp"  style="font-family:'.$uc_video_heading['family'].'; font-weight:'.$uc_video_heading['variant'].'; font::'.$uc_video_heading['font'].'; font-size:'.$uc_video_heading_siz.'px; font-style:'.$uc_video_heading_style.' ; color:'.$uc_vid_heading_color.';">'.$uc_video_back_headering.'</h1>

    					<p data-animation="animated fadeInUp"  style="font-family:'.$uc_video_desc_text['family'].'; font-weight::'.$uc_video_desc_text['variant'].'; font::'.$uc_video_desc_text['font'].'; font-size:'.$uc_video_desc_size.'px; font-style:'.$uc_video_desc_style.' ; color:'.$uc_vid_desc_color.';">'.$uc_video_back_desc.'</p>';

                            if(!empty ($uc_video_back_btn)){
                                
                                    $output .= '<a href="'.$uc_extra_video_back.'" target="'.$uc_open_video_back.'" data-animation="animated fadeInUp" class="uc_btn_sec" style="color:'.$uc_vid_btn_text_color.';background:'.$uc_vid_btn_bg_color.'; border-color:'.$uc_vid_btn_border_color.'; border-width:'.$uc_button_border_width.'px; font-size:'.$uc_btn_font_size.'px;padding: 0;">'.$uc_video_back_btn.'</a>';
                                            }
                                $output .= '
    				</div>

    			</div> <!-- /item -->
    			<!-- End of 1st Box -->';

        }
    }
}// end of a style total MAin if 1

if($video_background_style == 'video_097'){
    
        /**/ 


    $output .='
    
     <div id="video_097" class="carousel onlinePauseVideo video_097_thumbnails thumb_scroll_y swipe_x" data-ride="carousel" data-pause="hover" data-interval="false">';
            
            $output .=' <!-- 1st Indicator -->
                        <ol class="carousel-indicators">';

    if( ! empty( $carousel_options['group_option_vid_back2'] ) ){
        $carousel_data_images = $carousel_options['group_option_vid_back2'];

        $i = 0;
        foreach( $carousel_data_images as $carousel_data_image ){
            $uc_image_vid_back2_src = $carousel_data_image['uc_image_vid_back2'];

            $uc_image_vid_back2                  = wp_get_attachment_image_src( $uc_image_vid_back2_src, 'full' );
            $uc_video_back_header2 = $carousel_data_image['uc_video_back_header2'];


            if ($i==0){
                $class = 'active';
            }else{
                $class = '';
            }
            $output .='<li data-target="#video_097" data-slide-to="'.$i.'" class="'.$class.'">
                <!-- 1st Indicator Image -->
                <img src="'.$uc_image_vid_back2[0].'" alt="'.$uc_video_back_header2.'">
                <span  style="font-family:'.$uc_video_heading['family'].'; font-weight:'.$uc_video_heading['variant'].'; font:'.$uc_video_heading['font'].'; font-size:'.$uc_video_heading_siz.'px; font-style:'.$uc_video_heading_style.' ; color:'.$uc_vid_heading_color.';">'.$uc_video_back_header2.'</span>
                </li> ';
        $i++;
        }
        }

        $output .='




        </ol>
    <style>
    .carousel-control{color:'.$uc_arrow_color.'!important; background:'.$uc_arrow_bg_color.'!important;}
        .carousel-control:hover{color:'.$uc_arrow_color_hvr.'!important; background:'.$uc_arrow_bg_color_hvr.'!important;}
            '.$uc_custom_css.'
        </style>
        <!-- Wrapper For Slides -->
        <div class="carousel-inner" role="listbox"> ';



    if( ! empty( $carousel_options['group_option_vid_back2'] ) ) {

        $carousel_groups = $carousel_options['group_option_vid_back2'];


        foreach( $carousel_groups as $carousel_group ){


        $uc_video_link2                      = $carousel_group['uc_video_link2'];


            $output .= '

                	<!-- 1st Box -->
    			<div class="item">
                    <div class="video_097_youtube">
                        <iframe src="https://www.youtube.com/embed/'.$uc_video_link2.'?showinfo=0" allowfullscreen></iframe>
                    </div>
                </div> <!-- /item -->
    			<!-- End of 1st Box -->';

        }
    }
}// end of a style total MAin if


if($video_background_style == 'video_098'){
    
        /**/ 


    $output .='
    
     <div id="video_098" class="carousel onlinePauseVideo video_098_thumbnails video_098_control_button thumb_scroll_x swipe_x" data-ride="carousel" data-pause="hover" data-interval="false">';
            
            $output .=' <!-- 1st Indicator -->
                        <ol class="carousel-indicators">';

    if( ! empty( $carousel_options['group_option_vid_back2'] ) ){
        $carousel_data_images = $carousel_options['group_option_vid_back2']; 
              
        $i = 0;
        foreach( $carousel_data_images as $carousel_data_image ){ 
            $uc_image_vid_back2_src = $carousel_data_image['uc_image_vid_back2'];

            $uc_image_vid_back2                  = wp_get_attachment_image_src( $uc_image_vid_back2_src, 'full' );
            $uc_video_back_header2 = $carousel_data_image['uc_video_back_header2'];
        
        
            if ($i==0){
                $class = 'active';
            }else{
                $class = '';
            }
            $output .='<li data-target="#video_098" data-slide-to="'.$i.'" class="'.$class.'">
                <!-- 1st Indicator Image -->
                <img src="'.$uc_image_vid_back2[0].'" alt="'.$uc_video_back_header2.'">
                <span  style="font-family:'.$uc_video_heading['family'].'; font-weight:'.$uc_video_heading['variant'].'; font::'.$uc_video_heading['font'].'; font-size:'.$uc_video_heading_siz.'px; font-style:'.$uc_video_heading_style.' ; color:'.$uc_vid_heading_color.';">'.$uc_video_back_header2.'</span>
                </li> ';
        $i++;
        }    
        }

        $output .='
        
            
            
            
        </ol>
    <style>
    .carousel-control{color:'.$uc_arrow_color.'!important; background:'.$uc_arrow_bg_color.'!important;}
        .carousel-control:hover{color:'.$uc_arrow_color_hvr.'!important; background:'.$uc_arrow_bg_color_hvr.'!important;}
            '.$uc_custom_css.'
        </style>
        <!-- Wrapper For Slides -->
        <div class="carousel-inner" role="listbox"> ';
        


    if( ! empty( $carousel_options['group_option_vid_back2'] ) ) {

        $carousel_groups = $carousel_options['group_option_vid_back2'];


        foreach( $carousel_groups as $carousel_group ){


        $uc_video_link2                      = $carousel_group['uc_video_link2'];


            $output .= '

                	<!-- 1st Box -->
    			<div class="item">
                    <div class="video_098_vimeo">
                        <iframe src="https://player.vimeo.com/video/'.$uc_video_link2.'?title=0&byline=0&portrait=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </div>
                </div> <!-- /item -->
    			<!-- End of 1st Box -->';

        }
    }
}// end of a style total MAin if

if($video_background_style == 'video_099'){
    
        /**/ 


    $output .='
    
     <div id="video_099" class="carousel onlinePauseVideo pauseVideo video_099_indicators video_099_control_button thumb_scroll_x swipe_x" data-ride="carousel" data-pause="hover" data-interval="false">';
            
            $output .=' <!-- 1st Indicator -->
                        <ol class="carousel-indicators">';

    if( ! empty( $carousel_options['group_option_vid_99'] ) ){
        $carousel_data_images = $carousel_options['group_option_vid_99']; 
              
        $i = 0;
        foreach( $carousel_data_images as $carousel_data_image ){
            
             

            
            $uc_video_99_sub_header = $carousel_data_image['uc_video_99_sub_header'];
        
        
            if ($i==0){
                $class = 'active';
            }else{
                $class = '';
            }
            $output .='<li data-target="#video_099" data-slide-to="'.$i.'" class="'.$class.'"     style="font-family:'.$uc_video_sub_text['family'].'; font-weight:'.$uc_video_sub_text['variant'].'; font::'.$uc_video_sub_text['font'].'; font-size:'.$uc_video_sub_size.'px; font-style:'.$uc_video_sub_style.' ; color:'.$uc_vid_sub_color.';">'.$uc_video_99_sub_header.'</li> ';
        $i++;
        }    
        }

        $output .='
        
            
            
            
        </ol>
    <style>
    .carousel-control{color:'.$uc_arrow_color.'!important; background:'.$uc_arrow_bg_color.'!important;}
        .carousel-control:hover{color:'.$uc_arrow_color_hvr.'!important; background:'.$uc_arrow_bg_color_hvr.'!important;}
            '.$uc_custom_css.'
        </style>
        <!-- Wrapper For Slides -->
        <div class="carousel-inner" role="listbox">
                                            <style>
                                                a.uc_btn_sec:hover {
                                                        color: '.$uc_vid_btn_text_hover.'!important;
                                                        background: '.$uc_vid_btn_bg_hover.'!important;
                                                        border-color:'.$uc_vid_btn_border_hover.'!important;
                                                        
                                                    }
                                                   
                                            </style> ';
        


    if( ! empty( $carousel_options['group_option_vid_99'] ) ) {

        $carousel_groups = $carousel_options['group_option_vid_99'];


        foreach( $carousel_groups as $carousel_group ){

            $uc_image_vid_99_src = $carousel_group['uc_image_vid_99'];
            $uc_image_vid_99                  = wp_get_attachment_image_src( $uc_image_vid_99_src, 'full' );
            $uc_video_link_99_y                      = $carousel_group['uc_video_link_99_y'];
            $uc_video_link_99                      = $carousel_group['uc_video_link_99'];
            $uc_video_99_header                      = $carousel_group['uc_video_99_header'];
            $uc_video_99_desc                      = $carousel_group['uc_video_99_desc'];
            $uc_video_99_sub_header                      = $carousel_group['uc_video_99_sub_header'];
            $uc_video_99_btn                      = $carousel_group['uc_video_99_btn'];
            $uc_extra_video_99                      = $carousel_group['uc_extra_video_99'];
            $uc_open_video_99                     = $carousel_group['uc_open_video_99'];


            $output .= '

                	<!-- 1st Box -->
                        <div class="item">
                        
                        
                        
                            <!-- Image -->
                            <div class="video_099_img">
                                <img src="'.$uc_image_vid_99[0].'" alt="'.$uc_video_99_sub_header.'">
                            </div>
                            <!-- Youtube Video -->
                            <div class="video_099_youtube">
                                <iframe src="https://www.youtube.com/embed/'.$uc_video_link_99_y.'?showinfo=0" allowfullscreen></iframe>
                            </div>
                            <!-- Video Description -->
                            <div class="video_099_slide">
                                <h1  style="font-family:'.$uc_video_heading['family'].'; font-weight:'.$uc_video_heading['variant'].'; font::'.$uc_video_heading['font'].'; font-size:'.$uc_video_heading_siz.'px; font-style:'.$uc_video_heading_style.' ; color:'.$uc_vid_heading_color.';">'.$uc_video_99_header.'</h1>
                                <p   style="font-family:'.$uc_video_desc_text['family'].'; font-weight::'.$uc_video_desc_text['variant'].'; font::'.$uc_video_desc_text['font'].'; font-size:'.$uc_video_desc_size.'px; font-style:'.$uc_video_desc_style.' ; color:'.$uc_vid_desc_color.';">'.$uc_video_99_desc.'</p>
';

                            if(!empty ($uc_video_99_btn)){
                                
                                    $output .= '<a href="'.$uc_extra_video_99.'" target="'.$uc_open_video_99.'" data-animation="animated fadeInLeft" class="uc_btn_sec" style="color:'.$uc_vid_btn_text_color.';background:'.$uc_vid_btn_bg_color.'; border-color:'.$uc_vid_btn_border_color.'; border-width:'.$uc_button_border_width.'px; font-size:'.$uc_btn_font_size.'px;padding: 0;">'.$uc_video_99_btn.'</a>';
                                            }
                                $output .= '

                            </div>
                        </div> <!-- /item -->
    			<!-- End of 1st Box -->';

        }
    }
}// end of a style total MAin if




    $output .='    </div> <!-- End of Wrapper For Slides --><style>.carousel-control{color:'.$uc_arrow_color.'; background:'.$uc_arrow_bg_color.';}.carousel-control:hover{color:'.$uc_arrow_color_hvr.'; background:'.$uc_arrow_bg_color_hvr.';}</style>';
    
        if($video_background_style == 'video_096' | $video_background_style == 'video_098'| $video_background_style == 'video_099'){

         $output .=' <!-- Left Control -->
           	<a class="left carousel-control" href="#'.$video_background_style.'" role="button" data-slide="prev">
    			<span class="fa fa-angle-left"></span>
    		</a>

    	<!-- Right Control -->
    		<a class="right carousel-control" href="#'.$video_background_style.'" role="button" data-slide="next">
    			<span class="fa fa-angle-right"></span>
    		</a>';
            
            }
            
    $output .='
    </div> <!-- End Haritage Slider -->';