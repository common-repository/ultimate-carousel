<?php



    $output .='    <!-- Haritage Slider -->
                        <div id="'.$effect_4.'" class="'.$uc_extra_class.' carousel slide team_089 team_089_control_button ';



                        if ($effect_4 == 'team_089_mov_1_col_2'){
                        $output .='two_coloumns'; }

                        if ($effect_4 == 'team_089_mov_1_col_3'){
                         $output .='three_coloumns'; }

                        if ($effect_4 == 'team_089_mov_1_col_4'){
                         $output .='four_coloumns'; }

                        if ($effect_4 == 'team_089_mov_1_col_5'){
                         $output .='five_coloumns'; }

                        if ($effect_4 == 'team_089_mov_1_col_6'){
                         $output .='six_coloumns'; }

                        $output .=' swipe_x ps_easeOutQuint" data-ride="carousel" data-pause="hover" data-interval="5000" data-duration="2000" style="background: '.$section_back_color.'; ">

                    		<!-- Header of Slider -->
                            <div class="team_089_header">
                    			<h5 style="color:'.$section_title_color.' ; font-size:'.$uc_team_section_head_size.'px; font-family:'.$uc_team_section_head_font['family'].'; font-weight: '.$uc_team_section_head_font['variant'].'; src:'.$uc_team_section_head_font['font'].'; font-style:'.$uc_team_section_head_style.';  ">'.$heading.'</h5>
                    		</div>

        <style>
    .carousel-control{color:'.$uc_arrow_color.'!important; background:'.$uc_arrow_bg_color.'!important;}
        .carousel-control:hover{color:'.$uc_arrow_color_hvr.'!important; background:'.$uc_arrow_bg_color_hvr.'!important;}
            '.$uc_custom_css.'
        </style>

        <!-- Wrapper For Slides -->
        <div class="carousel-inner" role="listbox"> 
                <style>
        
        
                    @media (min-width: 100px) and (max-width: 480px) {.carousel-inner img {height: '.$uc_responsive_480_ht.'px!important;}}
                    @media (min-width: 481px) and (max-width: 600px) {.carousel-inner img {height: '.$uc_responsive_600_ht.'px!important;}}
                    @media (min-width: 601px) and (max-width: 767px) {.carousel-inner img {height: '.$uc_responsive_767_ht.'px!important;}}
                    @media (min-width: 768px) and (max-width: 991px) {.carousel-inner img {height: '.$uc_responsive_991_ht.'px!important;}}
                                            
                </style>        
        
        
        ';

if( ! empty( $carousel_options['group_option_89'] ) ) {

    $carousel_groups = $carousel_options['group_option_89'];


    foreach( $carousel_groups as $carousel_group ){

    $image_src_t89 = $carousel_group['image_t89'];

    $image_t89 = wp_get_attachment_image_src( $image_src_t89, 'full' );
    $title_t89 = $carousel_group['title_t89'];
    $desig_t89 = $carousel_group['desig_t89'];
    $dept_t89 = $carousel_group['dept_t89'];
    $image_link_t89 = $carousel_group['image_link_t89'];
    $open_link_t89 = $carousel_group['open_link_t89'];
    $twitter_uc_t89 = $carousel_group['twitter_uc_t89'];
    $facebook_uc_t89 = $carousel_group['facebook_uc_t89'];
    $linked_in_uc_t89 = $carousel_group['linked_in_uc_t89'];
    $google_uc_t89 = $carousel_group['google_uc_t89'];
    $youtube_uc_t89 = $carousel_group['youtube_uc_t89'];
    $skype_uc_t89 = $carousel_group['skype_uc_t89'];


    //print_r($image);

        $output .= '<div class="item">
                                           
        
                <div class=" ';

                    if($effect_4 == 'team_089_mov_1_col_2'){
                        $output .= 'col-xs-12 col-sm-6 col-md-6'; }

                    if($effect_4 == 'team_089_mov_1_col_3'){
                        $output .= 'col-xs-12 col-sm-4 col-md-4'; }

                    if($effect_4 == 'team_089_mov_1_col_4'){
                        $output .= 'col-xs-12 col-sm-6 col-md-3'; }

                    if($effect_4 == 'team_089_mov_1_col_5'){
                        $output .= 'col-xs-12 col-sm-4 col-md-15'; }

                    if($effect_4 == 'team_089_mov_1_col_6'){
                        $output .= 'col-xs-12 col-sm-4 col-md-2'; }

        $output .= ' team_089_grid"> <!-- Grid -->

                             <div class="team_089_wrapper"> <!-- Wrapper -->

						<!-- Image -->
						<div class="team_089_image">
							<a href="'.$image_link_t89.'" target="'.$open_link_t89.'" ><img style="height: '.$uc_team_image_height.'px; width:'.$uc_team_image_width.'%; " src="'.$image_t89[0].'" alt="'.$title_t89.'" ></a>
							<ul>';


                                 if(!empty($twitter_uc_t89) ) {
                                    $output .= '<li><a  href="'.$twitter_uc_t89.'" target="_blank" ><span class="fa fa-facebook" class="fa fa-facebook" style="color:'.$uc_social_color.';font-size:'.$uc_team_socil_font_size.'px;"></span></a></li>';
                                 }
                                 if(!empty($facebook_uc_t89) ) {
                                    $output .= '<li><a href="'.$facebook_uc_t89.'" target="_blank" ><span class="fa fa-twitter" class="fa fa-facebook" style="color:'.$uc_social_color.';font-size:'.$uc_team_socil_font_size.'px;"></span></a></li>';
                                 }
                                 if(!empty($linked_in_uc_t89) ) {
                                    $output .= '<li><a href="'.$linked_in_uc_t89.'" target="_blank" ><span class="fa fa-linkedin" class="fa fa-facebook" style="color:'.$uc_social_color.';font-size:'.$uc_team_socil_font_size.'px;"></span></a></li> ';
                                 }
                                 if(!empty($google_uc) ) {
                                    $output .= '<li><a href="'.$google_uc.'" target="_blank" ><span class="fa fa-google-plus" class="fa fa-facebook" style="color:'.$uc_social_color.';font-size:'.$uc_team_socil_font_size.'px;"></span></a></li> ';
                                 }
                                 if(!empty($skype_uc_t89) ) {
                                    $output .= '<li><a href="'.$skype_uc.'" target="_blank" ><span class="fa fa-skype" class="fa fa-facebook" style="color:'.$uc_social_color.';font-size:'.$uc_team_socil_font_size.'px;"></span></a></li>';
                                 }
                                 if(!empty($youtube_uc_t89) ) {
                                    $output .= '<li><a href="'.$youtube_uc_t89.' target="_blank" ><span class="fa fa-youtube" class="fa fa-facebook" style="color:'.$uc_social_color.';font-size:'.$uc_team_socil_font_size.'px;"></span></a></li>';
                                 }



                $output .= '
                            </ul>
						</div>
						 <!-- Text Content -->
						<div class="team_089_content team_089_content_col_2">
							<h5><a href="'.$image_link_t89.'" target="'.$open_link_t89.'"   style="color:'.$uc_name_color.' ; font-size:'.$uc_team_name_font_size.'px; font-family:'.$uc_team_name_font['family'].'; font-weight: '.$uc_team_name_font['variant'].'; src:'.$uc_team_name_font['font'].'; font-style:'.$uc_team_name_font_style.';">'.$title_t89.'</a></h5>

                            <h6><a  href="'.$image_link_t89.'" target="'.$open_link_t89.'"  style="color:'.$uc_desig_color.' ; font-size:'.$uc_team_desig_font_size.'px; font-family:'.$uc_team_desig_font['family'].'; font-weight: '.$uc_team_desig_font['variant'].'; src:'.$uc_team_desig_font['font'].'; font-style:'.$uc_team_desig_font_style.';background:'.$uc_innerr_texts_color.'  ">'.$desig_t89.'</a></h6>

                            <h6><a  href="'.$image_link_t89.'" target="'.$open_link_t89.'"   style="color:'.$uc_dept_color.' ; font-size:'.$uc_team_dept_font_size.'px; font-family:'.$uc_team_dept_font['family'].'; font-weight: '.$uc_team_dept_font['variant'].'; src:'.$uc_team_dept_font['font'].'; font-style:'.$uc_team_dept_font_style.';background:'.$uc_innerr_texts_color.'  ">'.$dept_t89.'</a></h6>
						</div> <!-- /Text Content -->

					</div> <!-- /.team_089_wrapper -->


                </div> <!-- /.team_089_grid -->
            </div>';

    }
}



    $output .='    </div> <!-- End of Wrapper For Slides -->

        <!-- Left Control -->
        <a class="left carousel-control" href="#'.$effect_4.'" role="button" data-slide="prev">
            <span class="fa fa-caret-left"></span>
        </a>

        <!-- Right Control -->
        <a class="right carousel-control" href="#'.$effect_4.'" role="button" data-slide="next">
            <span class="fa fa-caret-right"></span>
        </a>

    </div> <!-- End Haritage Slider -->';