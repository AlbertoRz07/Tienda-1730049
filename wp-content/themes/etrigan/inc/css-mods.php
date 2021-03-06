<?php
/* 
**   Custom Modifcations in CSS depending on user settings.
*/

function etrigan_custom_css_mods() {
	
	$custom_css = "";
	
	//If Menu Description is Disabled.
	if ( !has_nav_menu('primary') || get_theme_mod('etrigan_disable_nav_desc', true) ) :
		$custom_css .= "#site-navigation ul li a { padding: 30px 15px; }";
	endif;
	
	
	if ( get_theme_mod('etrigan_title_font') ) :
		$custom_css .= ".title-font, h1, h2, .section-title, .woocommerce ul.products li.product h3 { font-family: ".esc_html( get_theme_mod('etrigan_title_font','Droid Serif') )."; }";
	endif;
	
	if ( get_theme_mod('etrigan_body_font') ) :
		$custom_css .= "body, h2.site-description { font-family: ".esc_html( get_theme_mod('etrigan_body_font','Ubuntu') )."; }";
	endif;
	
	if ( get_theme_mod('etrigan_site_titlecolor') ) :
		$custom_css .= "#header-image h1.site-title a { color: ".esc_html( get_theme_mod('etrigan_site_titlecolor', '#FFFFFF') )."; }";
	endif;
	
	
	if ( get_theme_mod('etrigan_header_desccolor','#FFFFFF') ) :
		$custom_css .= ".site-description { color: ".esc_html( get_theme_mod('etrigan_header_desccolor','#FFFFFF') )."; }";
	endif;
	//Check Jetpack is active
	if ( class_exists( 'Jetpack' ) && Jetpack::is_module_active( 'infinite-scroll' ) )
		$custom_css .= '.pagination { display: none; }';


	if ( get_theme_mod('etrigan_custom_css') ) :
		$custom_css .=  strip_tags( get_theme_mod('etrigan_custom_css') );
	endif;
	
	
	if ( get_theme_mod('etrigan_hide_title_tagline') ) :
		$custom_css .= "#header-image .site-branding #text-title-desc { display: none; }";
	endif;
	

// page & post fontsize
    if(get_theme_mod('etrigan_content_page_post_fontsize_set')):
        $pp_size_val = get_theme_mod('etrigan_content_page_post_fontsize_set');
        if($pp_size_val=='small'):
            $custom_css .= "#primary-mono .entry-content{ font-size:12px;}";
        elseif ($pp_size_val=='medium'):
            $custom_css .= "#primary-mono .entry-content{ font-size:16px;}";
        elseif ($pp_size_val=='large'):
            $custom_css .= "#primary-mono .entry-content{ font-size:18px;}";
        elseif ($pp_size_val=='extra-large'):
            $custom_css .= "#primary-mono .entry-content{ font-size:20px;}";
        endif;
    else:
        $custom_css .= "#primary-mono .entry-content{ font-size:14px;}";
    endif;

    //site title font size
    //var_dump(get_theme_mod('etrigan_content_site_fontsize_set'));
    if(get_theme_mod('etrigan_content_site_title_fontsize_set')):
        $site_title_size_val=get_theme_mod('etrigan_content_site_title_fontsize_set');
        if($site_title_size_val != 'default'):
            $custom_css .= "#header-image .site-title {font-size:".$site_title_size_val."px !important;}";
        else:
            $custom_css .= "#header-image .site-title {font-size:55"."px;}";
        endif;
    endif;

    //site desc font size
    //var_dump(get_theme_mod('etrigan_content_site_desc_fontsize_set'));
    if(get_theme_mod('etrigan_content_site_desc_fontsize_set')):
        $site_desc_size_val=get_theme_mod('etrigan_content_site_desc_fontsize_set');
        if($site_desc_size_val != 'default'):
            $custom_css .= "#header-image .site-description{font-size:".$site_desc_size_val."px !important;}";
        else:
            $custom_css .= "#header-image .site-description {font-size:15"."px;}";
        endif;
    endif;



    //for contact page title.
    if(get_theme_mod('etrigan_contactus_title_disable_set', true)):
        $custom_css .= ".page-template-template-page-contactus .entry-title{display:none;}";
    endif;

    //for contact page title.
    if(get_theme_mod('etrigan_contactus_content_disable_set', true)):
        $custom_css .= ".page-template-template-page-contactus .entry-content{display:none;}";
    endif;



	wp_add_inline_style( 'etrigan-main-theme-style', $custom_css );
	
}

add_action('wp_enqueue_scripts', 'etrigan_custom_css_mods');