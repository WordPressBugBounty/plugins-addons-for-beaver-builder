<?php
/**
 * @var $module
 * @var $settings
 * @var $id
 */

global $wp_embed;

$settings = apply_filters('labb_testimonials_' . esc_attr($id) . '_settings', $settings);

$output = '<div class="labb-testimonials labb-grid-container ' . esc_attr(labb_get_grid_classes($settings)) . '">';

foreach ($settings->testimonials as $testimonial) :

    if (!is_object($testimonial))
        continue;

    list($animate_class, $animation_attr) = labb_get_animation_atts($testimonial->testimonial_animation);

    $child_output = '<div class="labb-grid-item labb-testimonial ' . esc_attr($animate_class) . '" ' . esc_attr($animation_attr) . '>';

    $child_output .= '<div class="labb-testimonial-text">';

    $child_output .= wpautop($wp_embed->autoembed(do_shortcode(wp_kses_post($testimonial->author_text))));

    $child_output .= '</div>';

    $child_output .= '<div class="labb-testimonial-user">';

    $child_output .= '<div class="labb-image-wrapper">';

    $author_image = $testimonial->author_image;

    if (!empty($author_image)) {

        $child_output .= wp_get_attachment_image($author_image, 'thumbnail', false, array('class' => 'labb-image full'));

    }

    $child_output .= '</div>';

    $child_output .= '<div class="labb-text">';

    $child_output .= '<' . esc_html($settings->title_tag) . ' class="labb-author-name">' . esc_html($testimonial->author_name) . '</' . esc_html($settings->title_tag) . '>';

    $child_output .= '<div class="labb-author-credentials">' . wp_kses_post($testimonial->credentials) . '</div>';

    $child_output .= '</div><!-- .labb-text -->';

    $child_output .= '</div><!-- .labb-testimonial-user -->';

    $child_output .= '</div><!-- .labb-testimonial -->';

    $output .= apply_filters('labb_testimonial_output', $child_output, $testimonial, $settings);

endforeach;

$output .= '</div><!-- .labb-testimonials -->';

$output .= '<div class="labb-clear"></div>';

echo apply_filters('labb_testimonials_output', $output, $settings);