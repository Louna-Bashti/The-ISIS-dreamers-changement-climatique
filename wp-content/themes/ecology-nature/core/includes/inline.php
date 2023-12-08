<?php


$ecology_nature_custom_css = '';

	/*---------------------------text-transform-------------------*/

	$ecology_nature_text_transform = get_theme_mod( 'menu_text_transform_ecology_nature','CAPITALISE');

    if($ecology_nature_text_transform == 'CAPITALISE'){

		$ecology_nature_custom_css .='#main-menu ul li a{';

			$ecology_nature_custom_css .='text-transform: capitalize ; font-size: 15px;';

		$ecology_nature_custom_css .='}';

	}else if($ecology_nature_text_transform == 'UPPERCASE'){

		$ecology_nature_custom_css .='#main-menu ul li a{';

			$ecology_nature_custom_css .='text-transform: uppercase ; font-size: 15px;';

		$ecology_nature_custom_css .='}';

	}else if($ecology_nature_text_transform == 'LOWERCASE'){

		$ecology_nature_custom_css .='#main-menu ul li a{';

			$ecology_nature_custom_css .='text-transform: lowercase ; font-size: 15px;';

		$ecology_nature_custom_css .='}';
	}

	/*---------------------------Container Width-------------------*/

$ecology_nature_container_width = get_theme_mod('ecology_nature_container_width');

		$ecology_nature_custom_css .='body{';

			$ecology_nature_custom_css .='width: '.esc_attr($ecology_nature_container_width).'%; margin: auto';

		$ecology_nature_custom_css .='}';

		/*---------------------------Slider-content-alignment-------------------*/


		$ecology_nature_slider_content_alignment = get_theme_mod( 'ecology_nature_slider_content_alignment','LEFT-ALIGN');

		 if($ecology_nature_slider_content_alignment == 'LEFT-ALIGN'){

				$ecology_nature_custom_css .='.blog_box{';

					$ecology_nature_custom_css .='text-align:left;';

				$ecology_nature_custom_css .='}';


			}else if($ecology_nature_slider_content_alignment == 'CENTER-ALIGN'){

				$ecology_nature_custom_css .='.blog_box{';

					$ecology_nature_custom_css .='text-align:center;';

				$ecology_nature_custom_css .='}';


			}else if($ecology_nature_slider_content_alignment == 'RIGHT-ALIGN'){

				$ecology_nature_custom_css .='.blog_box{';

					$ecology_nature_custom_css .='text-align:right;';

				$ecology_nature_custom_css .='}';

			}

			/*---------------------------Copyright Text alignment-------------------*/

$ecology_nature_copyright_text_alignment = get_theme_mod( 'ecology_nature_copyright_text_alignment','LEFT-ALIGN');

 if($ecology_nature_copyright_text_alignment == 'LEFT-ALIGN'){

		$ecology_nature_custom_css .='.copy-text p{';

			$ecology_nature_custom_css .='text-align:left;';

		$ecology_nature_custom_css .='}';


	}else if($ecology_nature_copyright_text_alignment == 'CENTER-ALIGN'){

		$ecology_nature_custom_css .='.copy-text p{';

			$ecology_nature_custom_css .='text-align:center;';

		$ecology_nature_custom_css .='}';


	}else if($ecology_nature_copyright_text_alignment == 'RIGHT-ALIGN'){

		$ecology_nature_custom_css .='.copy-text p{';

			$ecology_nature_custom_css .='text-align:right;';

		$ecology_nature_custom_css .='}';

	}

	/*---------------------------related Product Settings-------------------*/

$ecology_nature_related_product_setting = get_theme_mod('ecology_nature_related_product_setting',true);

	if($ecology_nature_related_product_setting == false){

		$ecology_nature_custom_css .='.related.products, .related h2{';

			$ecology_nature_custom_css .='display: none;';

		$ecology_nature_custom_css .='}';
	}

	/*---------------------------Scroll to Top Alignment Settings-------------------*/

	$ecology_nature_scroll_top_position = get_theme_mod( 'ecology_nature_scroll_top_position','Right');

	if($ecology_nature_scroll_top_position == 'Right'){

		$ecology_nature_custom_css .='.scroll-up{';

			$ecology_nature_custom_css .='right: 20px;';

		$ecology_nature_custom_css .='}';

	}else if($ecology_nature_scroll_top_position == 'Left'){

		$ecology_nature_custom_css .='.scroll-up{';

			$ecology_nature_custom_css .='left: 20px;';

		$ecology_nature_custom_css .='}';

	}else if($ecology_nature_scroll_top_position == 'Center'){

		$ecology_nature_custom_css .='.scroll-up{';

			$ecology_nature_custom_css .='right: 50%;left: 50%;';

		$ecology_nature_custom_css .='}';
	}

		/*---------------------------Pagination Settings-------------------*/


$ecology_nature_pagination_setting = get_theme_mod('ecology_nature_pagination_setting',true);

	if($ecology_nature_pagination_setting == false){

		$ecology_nature_custom_css .='.nav-links{';

			$ecology_nature_custom_css .='display: none;';

		$ecology_nature_custom_css .='}';
	}

	/*--------------------------- Slider Opacity -------------------*/

	$ecology_nature_slider_opacity_color = get_theme_mod( 'ecology_nature_slider_opacity_color','0.7');

	if($ecology_nature_slider_opacity_color == '0'){

		$ecology_nature_custom_css .='.blog_inner_box img{';

			$ecology_nature_custom_css .='opacity:0';

		$ecology_nature_custom_css .='}';

		}else if($ecology_nature_slider_opacity_color == '0.1'){

		$ecology_nature_custom_css .='.blog_inner_box img{';

			$ecology_nature_custom_css .='opacity:0.1';

		$ecology_nature_custom_css .='}';

		}else if($ecology_nature_slider_opacity_color == '0.2'){

		$ecology_nature_custom_css .='.blog_inner_box img{';

			$ecology_nature_custom_css .='opacity:0.2';

		$ecology_nature_custom_css .='}';

		}else if($ecology_nature_slider_opacity_color == '0.3'){

		$ecology_nature_custom_css .='.blog_inner_box img{';

			$ecology_nature_custom_css .='opacity:0.3';

		$ecology_nature_custom_css .='}';

		}else if($ecology_nature_slider_opacity_color == '0.4'){

		$ecology_nature_custom_css .='.blog_inner_box img{';

			$ecology_nature_custom_css .='opacity:0.4';

		$ecology_nature_custom_css .='}';

		}else if($ecology_nature_slider_opacity_color == '0.5'){

		$ecology_nature_custom_css .='.blog_inner_box img{';

			$ecology_nature_custom_css .='opacity:0.5';

		$ecology_nature_custom_css .='}';

		}else if($ecology_nature_slider_opacity_color == '0.6'){

		$ecology_nature_custom_css .='.blog_inner_box img{';

			$ecology_nature_custom_css .='opacity:0.6';

		$ecology_nature_custom_css .='}';

		}else if($ecology_nature_slider_opacity_color == '0.7'){

		$ecology_nature_custom_css .='.blog_inner_box img{';

			$ecology_nature_custom_css .='opacity:0.7';

		$ecology_nature_custom_css .='}';

		}else if($ecology_nature_slider_opacity_color == '0.8'){

		$ecology_nature_custom_css .='.blog_inner_box img{';

			$ecology_nature_custom_css .='opacity:0.8';

		$ecology_nature_custom_css .='}';

		}else if($ecology_nature_slider_opacity_color == '0.9'){

		$ecology_nature_custom_css .='.blog_inner_box img{';

			$ecology_nature_custom_css .='opacity:0.9';

		$ecology_nature_custom_css .='}';

		}else if($ecology_nature_slider_opacity_color == '1.0'){

		$ecology_nature_custom_css .='.blog_inner_box img{';

			$ecology_nature_custom_css .='opacity:0.9';

		$ecology_nature_custom_css .='}';

		}

	/*---------------------- Slider Image Overlay ------------------------*/

	$ecology_nature_overlay_option = get_theme_mod('ecology_nature_overlay_option', true);

	if($ecology_nature_overlay_option == false){

		$ecology_nature_custom_css .='.blog_inner_box img{';

			$ecology_nature_custom_css .='opacity:0.6;';

		$ecology_nature_custom_css .='}';
	}

	$ecology_nature_slider_image_overlay_color = get_theme_mod('ecology_nature_slider_image_overlay_color', true);

	if($ecology_nature_slider_image_overlay_color != false){

		$ecology_nature_custom_css .='.blog_inner_box{';

			$ecology_nature_custom_css .='background-color: '.esc_attr($ecology_nature_slider_image_overlay_color).';';

		$ecology_nature_custom_css .='}';
	}

