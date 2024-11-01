<?php

       //@@@@@@@@@@@@###################@@@@@@@@@@@@@@@@@

    $output .='
    
     <div id="'.$uc_testi_column_91.'"';
    
    
     $output .='class="'.$uc_extra_class.' carousel slide testimonial_091 testimonial_091_control_button ';
          if($uc_testi_column_91 == 'testimonial_091_mov_1_col_2') {
                     $output .=' two_coloumns '     ;
                     }
          if($uc_testi_column_91 == 'testimonial_091_mov_1_col_3') {
                     $output .=' three_coloumns '     ;
                     }
                     
          if($uc_testi_column_91 == 'testimonial_091_mov_1_col_4') {
                     $output .=' four_coloumns '     ;
                     } 
          if($uc_testi_column_91 == 'testimonial_091_mov_1_col_5') {
                     $output .=' five_coloumns '     ;
                     } 
          if($uc_testi_column_91 == 'testimonial_091_mov_1_col_6') {
                     $output .=' six_coloumns '     ;
                     }                      
            $output .=' swipe_x ps_slowSpeedy" data-ride="carousel" data-pause="hover" data-interval="5000" data-duration="2000">

		<!-- Header of Slider -->
		<div class="testimonial_091_header">
			<h5  style="color:'.$uc_section_header_color.' ; font-size:'.$uc_section_head_font_size.'px; font-family:'.$uc_section_head_font['family'].'; font-weight: '.$uc_section_head_font['variant'].'; src:'.$uc_section_head_font['font'].'; font-style:'.$uc_section_head_font_style.';  ">'.$heading.'</h5>
		</div>
		<!-- /Header of Slider -->
	    <style>
        .carousel-control{color:'.$uc_arrow_color.'!important; background:'.$uc_arrow_bg_color.'!important;}
        .carousel-control:hover{color:'.$uc_arrow_color_hvr.'!important; background:'.$uc_arrow_bg_color_hvr.'!important;}
            '.$uc_custom_css.'
        </style>
        
		<!-- Wrapper For Slides -->
		<div class="carousel-inner" role="listbox"> ';


if( ! empty( $carousel_options['group_option_testi_91'] ) ) {

    $carousel_groups = $carousel_options['group_option_testi_91'];


    foreach( $carousel_groups as $carousel_group ){


    $uc_image_testi91_src = $carousel_group['uc_image_testi91'];

    $uc_image_testi91 = wp_get_attachment_image_src( $uc_image_testi91_src, 'full' );
    $uc_title_testi91 = $carousel_group['uc_title_testi91'];
    $uc_desig_testi91 = $carousel_group['uc_desig_testi91'];
    $uc_desc_testi91 = $carousel_group['uc_desc_testi91'];
    $uc_on_click_testi91 = $carousel_group['uc_on_click_testi91'];
    $uc_extra_link_t91 = $carousel_group['uc_extra_link_t91'];
    $uc_open_link_t91 = $carousel_group['uc_open_link_t91'];




    //print_r($image);

        $output .= '

            	<!-- 1st Box -->
			<div class="item">
				<div class="';
                        if($uc_testi_column_91 == 'testimonial_091_mov_1_col_2') {
                                         $output .='col-xs-12 col-sm-6 col-md-6';
                                         }
                        if($uc_testi_column_91 == 'testimonial_091_mov_1_col_3') {
                                         $output .='col-xs-12 col-sm-4 col-md-4';
                                         } 
                        if($uc_testi_column_91 == 'testimonial_091_mov_1_col_4') {
                                         $output .='col-xs-12 col-sm-6 col-md-3';
                                         } 
                        if($uc_testi_column_91 == 'testimonial_091_mov_1_col_5') {
                                         $output .='col-xs-12 col-sm-4 col-md-15';
                                         } 
                        if($uc_testi_column_91 == 'testimonial_091_mov_1_col_6') {
                                         $output .='col-xs-12 col-sm-4 col-md-2';
                                         }
                                                         
                $output .=' testimonial_091_grid"> <!-- Grid -->
					<div class="testimonial_091_wrapper"> <!-- Wrapper -->

						<!-- Image -->
						<div class="testimonial_091_image">
							<img style="height:'.$uc_team_image_height.'px; width:'.$uc_testy_image_width.'px;" src="'.$uc_image_testi91[0].'" alt="'.$uc_title_testi91.'">
						</div>
						 <!-- Text Content -->
						<div class="testimonial_091_content testimonial_091_content_col_2">
							<p style="color:'.$uc_testi_desc_color.' ; font-size:'.$uc_testi_desc_font_size.'px; font-family:'.$uc_testi_desc_font['family'].'; font-weight: '.$uc_testi_desc_font['variant'].'; src:'.$uc_testi_desc_font['font'].'; font-style:'.$uc_testi_desc_font_style.';  ">"'.$uc_desc_testi91.'"</p>

							<h5><a  style="color:'.$uc_testi_heading_color.' ; font-size:'.$uc_testi_font_size.'px; font-family:'.$uc_testi_font['family'].'; font-weight: '.$uc_testi_font['variant'].'; src:'.$uc_testi_font['font'].'; font-style:'.$uc_testi_font_style.'" href="'.$uc_extra_link_t91.'" target="'.$uc_open_link_t91.'">'.$uc_title_testi91.'</a></h5>

							<h6><a  style="color:'.$uc_testi_desig_color.' ; font-size:'.$uc_testi_desig_font_size.'px; font-family:'.$uc_testi_desig_font['family'].'; font-weight: '.$uc_testi_desig_font['variant'].'; src:'.$uc_testi_desig_font['font'].'; font-style:'.$uc_testi_desig_font_style.';" href="'.$uc_extra_link_t91.'" target="'.$uc_open_link_t91.'">'.$uc_desig_testi91.'</a></h6>
						</div> <!-- /Text Content -->

					</div> <!-- /.testimonial_091_wrapper -->
				</div> <!-- /.testimonial_091_grid -->
			</div> <!-- /item -->
			<!-- End of 1st Box -->';

    }
}





    $output .='    </div> <!-- End of Wrapper For Slides -->
<style>.carousel-control{color:'.$uc_arrow_color.'; background:'.$uc_arrow_bg_color.';}.carousel-control:hover{color:'.$uc_arrow_color_hvr.'; background:'.$uc_arrow_bg_color_hvr.';}</style>
        <!-- Left Control -->
        <a class="left carousel-control" href="#'.$uc_testi_column_91.'" role="button" data-slide="prev">
			<span class="fa fa-angle-left"></span>
		</a>

		<!-- Right Control -->
		<a class="right carousel-control" href="#'.$uc_testi_column_91.'" role="button" data-slide="next">
			<span class="fa fa-angle-right"></span>
		</a>

    </div> <!-- End Haritage Slider -->';