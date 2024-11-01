<?php


    $output .='    <!-- Haritage Slider -->
    <div id="'.$effect_1.'"  class="'.$uc_extra_class.' carousel slide team_086 team_086_control_button';
          if($effect_1== 'team_086_mov_1_col_2') {
                     $output .=' two_coloumns '     ;
                     }
          if($effect_1== 'team_086_mov_1_col_3') {
                     $output .=' three_coloumns '     ;
                     }
          if($effect_1== 'team_086_mov_1_col_4') {
                     $output .=' four_coloumns '     ;
                     }
          if($effect_1== 'team_086_mov_1_col_5') {
                     $output .=' five_coloumns '     ;
                     }
          if($effect_1== 'team_086_mov_1_col_6') {
                     $output .=' six_coloumns '     ;
                     }
    $output .='swipe_x ps_easeOutInCubic" data-ride="carousel" data-pause="hover" data-interval="5000" data-duration="2000" style="background: '.$section_back_color.'; ">

                       <a herf="" ><div class="team_086_header">

                            <h2  style="color:'.$section_title_color.' ; font-size:'.$uc_team_section_head_size.'px; font-family:'.$uc_team_section_head_font['family'].'; font-weight: '.$uc_team_section_head_font['variant'].'; src:'.$uc_team_section_head_font['font'].'; font-style:'.$uc_team_section_head_style.';  ">'.$heading.'</h2>
                    		</div>
                        </a>

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


if( ! empty( $carousel_options['group_option_86'] ) ) {

    $carousel_groups = $carousel_options['group_option_86'];


    foreach( $carousel_groups as $carousel_group ){


    $image_src_86 = $carousel_group['image_86'];

    $image_86 = wp_get_attachment_image_src( $image_src_86, 'full' );
    $title_86 = $carousel_group['title_86'];
    $desig1_86 = $carousel_group['desig1_86'];
    $image_link_86 = $carousel_group['image_link_86'];
    $open_link_86 = $carousel_group['open_link_86'];




    //print_r($image);

        $output .= '<div class="item" style="">
        
                                              
        
                <div class="';
                              if($effect_1== 'team_086_mov_1_col_2') {
                                         $output .='col-xs-12 col-sm-6 col-md-6'     ;
                                         }
                              if($effect_1== 'team_086_mov_1_col_3') {
                                         $output .='col-xs-12 col-sm-4 col-md-4'     ;
                                         }
                              if($effect_1== 'team_086_mov_1_col_4') {
                                         $output .='col-xs-12 col-sm-6 col-md-3'     ;
                                         }
                              if($effect_1== 'team_086_mov_1_col_5') {
                                         $output .='col-xs-12 col-sm-4 col-md-15'     ;
                                         }
                              if($effect_1== 'team_086_mov_1_col_6') {
                                         $output .='col-xs-12 col-sm-4 col-md-2'     ;
                                         }


            $output .= '  team_086_grid"> <!-- Grid -->
                    <div class="team_086_wrapper"> <!-- Wrapper -->

                        <!-- Image -->
                        <a href="'.$image_link_86.'" target="'.$open_link_86.'"><img style="height: '.$uc_team_image_height.'px; width:'.$uc_team_image_width.'%; " alt="'.$title_86.'" src="'.$image_86[0].'">
                         <!-- Text Content -->
                        <div class="team_086_content ';
                              if($effect_1== 'team_086_mov_1_col_2') {
                                         $output .='team_086_content_col_2'     ;
                                         }
                              if($effect_1== 'team_086_mov_1_col_3') {
                                         $output .='col-xs-12 col-sm-4 col-md-3'     ;
                                         }
                              if($effect_1== 'team_086_mov_1_col_4') {
                                         $output .='col-xs-12 col-sm-6 col-md-4'     ;
                                         }
                              if($effect_1== 'team_086_mov_1_col_5') {
                                         $output .=''     ;
                                         }
                              if($effect_1== 'team_086_mov_1_col_6') {
                                         $output .=''     ;
                                         }


            $output .= ' ">  <h5><a href="" style="color:'.$uc_name_color.' ; font-size:'.$uc_team_name_font_size.'px; font-family:'.$uc_team_name_font['family'].'; font-weight: '.$uc_team_name_font['variant'].'; src:'.$uc_team_name_font['font'].'; font-style:'.$uc_team_name_font_style.';  ">'.$title_86.'</a></h5>


                            <h6><a href="#" style="color:'.$uc_desig_color.' ; font-size:'.$uc_team_desig_font_size.'px; font-family:'.$uc_team_desig_font['family'].'; font-weight: '.$uc_team_desig_font['variant'].'; src:'.$uc_team_desig_font['font'].'; font-style:'.$uc_team_desig_font_style.';  ">'.$desig1_86.'</a></h6>


                        </div> <!-- /Text Content -->

                    </div> <!-- /.team_086_wrapper -->
                </div> <!-- /.team_086_grid -->

                </div>';

    }
}



    $output .='    </div> <!-- End of Wrapper For Slides -->

        <!-- Left Control -->
        <a class="left carousel-control" href="#'.$effect_1.'" role="button" data-slide="prev">
            <span class="fa fa-long-arrow-left"></span>
        </a>

        <!-- Right Control -->
        <a class="right carousel-control" href="#'.$effect_1.'" role="button" data-slide="next">
            <span class="fa fa-long-arrow-right"></span>
        </a>

    </div> <!-- End Haritage Slider -->';