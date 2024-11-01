<?php

       //@@@@@@@@@@@@###################@@@@@@@@@@@@@@@@@
    $carousel_data_slides = $carousel_options['group_option_parallax'];
    
    $output .='    <div id="parallax_071" class="carousel slide ps_indicators_green_line ps_control_green_long thumb_scroll_x swipe_x ps_easeOutQuint" data-ride="carousel" data-pause="hover" data-interval="5000" data-duration="2000">

        <!-- Indicators -->
        <ol class="carousel-indicators">';
        
        $i = 0;
        foreach( $carousel_data_slides as $carousel_data_slide ){ 
            if ($i==0){
                $class = 'active';
            }else{
                $class = '';
            }
            $output .='<li data-target="#parallax_071" data-slide-to="'.$i.'" class="'.$class.'"></li>';
        $i++;
        }    
            
        $output .='</ol>
	
		<!-- Wrapper For Slides -->
		<div class="carousel-inner" role="listbox"> ';

if($uc_parallax_style == 'parallax_071'){
    
    if( ! empty( $carousel_options['group_option_parallax'] ) ) {

        $carousel_groups = $carousel_options['group_option_parallax'];


        foreach( $carousel_groups as $carousel_group ){


        $uc_image_para_src = $carousel_group['uc_image_para'];

        $uc_image_para = wp_get_attachment_image_src( $uc_image_para_src, 'full' );
        $uc_header_para = $carousel_group['uc_header_para'];
        $uc_sub_header_para = $carousel_group['uc_sub_header_para'];
        $uc_desc_para = $carousel_group['uc_desc_para'];
        $uc_buttonn_text_para = $carousel_group['uc_buttonn_text_para'];
        $uc_buttonn_link_para = $carousel_group['uc_buttonn_link_para'];
        $uc_open_link_para = $carousel_group['uc_open_link_para'];



    //print_r($image);

        $output .= '

            	<div class="item prlx_071_bg_img" style="background-image:url('.$uc_image_para[0].');"> <!-- Background Image -->
                <!-- Center Slide Text Layer -->
                <div class="prlx_071_slide prlx_071_slide_center">
                    <h2 class="layer" data-depth="0.15">lets start creating</h2>
                    <h1 class="layer" data-depth="0.25">with<span>paradise</span></h1>
                    <p class="layer" data-depth="0.35">We are creating products with bootstrap</p>
                    <a href="#" class="layer" data-depth="0.45">read more</a>
                </div> <!-- /Center Slide Text Layer -->
            </div>';

     }
    }

}





    $output .='    </div>
    

                    		<!-- Left Control -->
                                <a class="left carousel-control" href="#parallax_071" role="button" data-slide="prev">
                                    <span class="fa fa-long-arrow-left"></span>
                                </a>

                                <!-- Right Control -->
                                <a class="right carousel-control" href="#parallax_071" role="button" data-slide="next">
                                    <span class="fa fa-long-arrow-right"></span>
                                </a>

    </div> <!-- End Haritage Slider -->';