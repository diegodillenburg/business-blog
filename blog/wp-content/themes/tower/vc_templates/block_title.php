<?php
/**
 * Shortcode attributes
 * @var $atts
 * @var $title
 * @var $style
 * @var $inner_style='simple'
 * @var $second_title
 * @var $padding_desc
 * @var $inner_style_title
 * Shortcode class
 * @var $this WPBakeryShortCode_Block_Title
 */
$output = '';
$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

if($style == 'section_title')
    $inner_style = $inner_style_title;

$output = '<div class="wpb_content_element block_title '.esc_attr($style).' inner-'.esc_attr($inner_style).' ">';
    
    if($inner_style_title == 'two_titles') 
        $output .= '<h5>'.$subtitle.'</h5>';

    if(!empty($title))
        $output .= '<h1>'.$title.'</h1>';
    if($style == 'section_title'){
        if(!empty($content))
            $output .= '<p style="padding:0 '.esc_attr($padding_desc).';">'.do_shortcode($content).'</p>';
        
        if(!empty($title) && $inner_style_title == 'small_border' )
            $output .= '<span class="divider"></span>';
        
    }

$output .= '</div>';

echo  $output;

?>