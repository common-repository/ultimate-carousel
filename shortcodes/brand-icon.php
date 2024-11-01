<?php

       //@@@@@@@@@@@@###################@@@@@@@@@@@@@@@@@

    $output .='<div id="x_020_partner" class="carousel slide x_020_partner_control_button four_coloumns swipe_x ps_easeOutInCubic" data-ride="carousel" data-pause="hover" data-interval="8000" data-duration="2000">
	    <style>
    .carousel-control{color:'.$uc_arrow_color.'!important; background:'.$uc_arrow_bg_color.'!important;}
        .carousel-control:hover{color:'.$uc_arrow_color_hvr.'!important; background:'.$uc_arrow_bg_color_hvr.'!important;}
            '.$uc_custom_css.'

            .x_020_partner_image:hover{border-color:'.$uc_header_color_brand.'}
        </style>



		<!-- Wrapper For Slides -->
		<div class="carousel-inner" role="listbox"> ';


if( ! empty( $carousel_options['uc_group_opt_brand'] ) ) {

    $carousel_groups = $carousel_options['uc_group_opt_brand'];


    foreach( $carousel_groups as $carousel_group ){


    $uc_image_brand_src = $carousel_group['uc_image_brand'];
    $uc_text_brand = $carousel_group['uc_text_brand'];
    $uc_link_brand = $carousel_group['uc_link_brand'];
    $uc_link_open_brand = $carousel_group['uc_link_open_brand'];

    $uc_image_brand = wp_get_attachment_image_src( $uc_image_brand_src, 'full' );




    //print_r($image);

        $output .= '

            	<!-- 1st Partner -->
			<div class="item">
				<div class="col-xs-12 col-sm-6 col-md-3">
					<!-- Image -->
					<div class="x_020_partner_image">
						<a href="'.$uc_link_brand.'" target="'.$uc_link_open_brand.'">
							<img src="'.$uc_image_brand[0].'" alt="'.$uc_text_brand.'">
						</a>
					</div>
				</div>
			</div> <!-- /1st Partner -->';

    }
}


    $output .='  </div>
         		<!-- Left Control -->
                    		<a class="left carousel-control" href="#x_020_partner" role="button" data-slide="prev">
                    			<span class="fa fa-angle-left"></span>
                    		</a>

                    		<!-- Right Control -->
                    		<a class="right carousel-control" href="#x_020_partner" role="button" data-slide="next">
                    			<span class="fa fa-angle-right"></span>
                    		</a>

    </div> <!-- End Haritage Slider -->';