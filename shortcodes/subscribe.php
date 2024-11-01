<?php

       //@@@@@@@@@@@@###################@@@@@@@@@@@@@@@@@

    $output .='<div id="x_015_subscribe" class="'.$uc_extra_class.' carousel slide x_015_subscribe_indicators x_015_subscribe_control_button thumb_scroll_x swipe_x ps_slowSpeedy" data-ride="carousel" data-pause="hover" data-interval="10000" data-duration="2000">
	    <style>
    .carousel-control{color:'.$uc_arrow_color.'!important; background:'.$uc_arrow_bg_color.'!important;}
        .carousel-control:hover{color:'.$uc_arrow_color_hvr.'!important; background:'.$uc_arrow_bg_color_hvr.'!important;}
            '.$uc_custom_css.'
        </style>
		<!-- Indicators --
		<ol class="carousel-indicators">
			<!-- 1st Indicator --
			<li data-target="#x_015_subscribe" data-slide-to="0" class="active"></li>
			<!-- 2nd Indicator --
			<li data-target="#x_015_subscribe" data-slide-to="1"></li>
			<!-- 3rd Indicator --
			<li data-target="#x_015_subscribe" data-slide-to="2"></li>
		</ol>
	
		<!-- Wrapper For Slides -->
		<div class="carousel-inner" role="listbox"> ';


if( ! empty( $carousel_options['group_option_subscribe'] ) ) {

    $carousel_groups = $carousel_options['group_option_subscribe'];


    foreach( $carousel_groups as $carousel_group ){


    $uc_image_subscribe_src = $carousel_group['uc_image_subscribe'];

    $uc_image_subscribe = wp_get_attachment_image_src( $uc_image_subscribe_src, 'full' );




    //print_r($image);

        $output .= '

            	<!-- 1st Box -->
			<div class="item">
				<img src="'.$uc_image_subscribe[0].'" alt="x_015_subscribe_01">
			</div> <!-- /item -->
			<!-- End of 1st Box -->';

    }
}


    $output .='    </div><style>.carousel-control{color:'.$uc_arrow_color.'; background:'.$uc_arrow_bg_color.';}.carousel-control:hover{color:'.$uc_arrow_color_hvr.'; background:'.$uc_arrow_bg_color_hvr.';}</style>
    
                            <div class="x_015_subscribe_form">
                    			<h1 style="color:'.$uc_section_header_color.' ; font-size:'.$uc_section_head_font_size.'px; font-family:'.$uc_section_head_font['family'].'; font-weight: '.$uc_section_head_font['variant'].'; src:'.$uc_section_head_font['font'].'; font-style:'.$uc_section_head_font_style.';  ">'.$heading.'</h1>

                    			<p style="color:'.$uc_section_promo_color.' ; font-size:'.$uc_section_promo_text_size.'px; font-family:'.$uc_section_promo_text['family'].'; font-weight: '.$uc_section_promo_text['variant'].'; src:'.$uc_section_promo_text['font'].'; font-style:'.$uc_section_promo_text_style.';  ">'.$heading_promo_text.'</p>
                    			<!-- form -->
                    			<form action="#">
                    				<input type="email" placeholder="enter your email" required>
                    				<button type="submit"><span class="fa fa-paper-plane"></span></button>
                    			</form> <!-- /form -->
                    		</div> <!-- /x_015_subscribe_form -->

                    		<!-- Left Control -->
                    		<a class="left carousel-control" href="#x_015_subscribe" role="button" data-slide="prev">
                    			<span class="fa fa-angle-left"></span>
                    		</a>

                    		<!-- Right Control -->
                    		<a class="right carousel-control" href="#x_015_subscribe" role="button" data-slide="next">
                    			<span class="fa fa-angle-right"></span>
                    		</a>

    </div> <!-- End Haritage Slider -->';