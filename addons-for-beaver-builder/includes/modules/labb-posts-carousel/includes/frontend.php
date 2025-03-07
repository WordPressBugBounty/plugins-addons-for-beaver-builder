<?php
/**
 * @var $module
 * @var $settings
 * @var $id
 */

$output = '';

$settings = apply_filters('labb_posts_carousel_' . esc_attr($id) . '_settings', $settings);

$carousel_settings = [
    'arrows' => ('yes' === $settings->arrows),
    'dots' => ('yes' === $settings->dots),
    'autoplay' => ('yes' === $settings->autoplay),
    'autoplay_speed' => absint($settings->autoplay_speed),
    'animation_speed' => absint($settings->animation_speed),
    'pause_on_hover' => ('yes' === $settings->pause_on_hover),
];

$responsive_settings = [
    'display_columns' => absint($settings->display_columns),
    'scroll_columns' => absint($settings->scroll_columns),
    'gutter' => absint($settings->gutter),
    'tablet_width' => absint($settings->tablet_width),
    'tablet_display_columns' => absint($settings->tablet_display_columns),
    'tablet_scroll_columns' => absint($settings->tablet_scroll_columns),
    'tablet_gutter' => absint($settings->tablet_gutter),
    'mobile_width' => absint($settings->mobile_width),
    'mobile_display_columns' => absint($settings->mobile_display_columns),
    'mobile_scroll_columns' => absint($settings->mobile_scroll_columns),
    'mobile_gutter' => absint($settings->mobile_gutter),
];

$carousel_settings = array_merge($carousel_settings, $responsive_settings);

$taxonomies = [];

$loop = FLBuilderLoop::query($settings);

// Loop through the posts and do something with them.
if ($loop->have_posts()) :

    $output .= '<div id="labb-posts-carousel-' . esc_attr(uniqid()) . '" class="labb-posts-carousel labb-container" data-settings=\'' . esc_attr(wp_json_encode($carousel_settings)) . '\'>';

    $taxonomies[] = esc_attr($settings->taxonomy_chosen);

    $target = ($settings->post_link_new_window == 'yes') ? ' target="_blank"' : '';

    while ($loop->have_posts()) : $loop->the_post();

        $post_id = get_the_ID();

        $entry_output = '<div data-id="id-' . esc_attr($post_id) . '" class="labb-posts-carousel-item">';

        $entry_output .= '<article id="post-' . esc_attr($post_id) . '" class="' . esc_attr(join(' ', get_post_class('', $post_id))) . '">';

        if ($thumbnail_exists = has_post_thumbnail()):

            $entry_image = '<div class="labb-project-image">';

            $thumbnail_html = $module->get_img(get_the_ID());

            $entry_image .= apply_filters('labb_posts_carousel_thumbnail_html', $thumbnail_html, $post_id, $settings);

            if (($settings->display_title_on_thumbnail == 'yes') || ($settings->display_taxonomy_on_thumbnail == 'yes')):

                $image_info = '<div class="labb-image-info">';

                $image_info .= '<div class="labb-entry-info">';

                if ($settings->display_title_on_thumbnail == 'yes'):

                    $image_info .= '<' . esc_html($settings->thumbnail_info_title_tag) . ' class="labb-post-title">'
                        . '<a href="' . esc_url(get_permalink()) . '" title="' . esc_attr(get_the_title()) . '" rel="bookmark"' . $target . '>' . esc_html(get_the_title()) . '</a>'
                        . '</' . esc_html($settings->thumbnail_info_title_tag) . '>';

                endif;

                if ($settings->display_taxonomy_on_thumbnail == 'yes'):

                    $image_info .= labb_get_info_for_taxonomies($taxonomies);

                endif;

                $image_info .= '</div>';

                $image_info .= '</div><!-- .labb-image-info -->';

                $entry_image .= apply_filters('labb_posts_carousel_image_info', $image_info, $post_id, $settings);

            endif;

            $entry_image .= '</div>';

            $entry_output .= apply_filters('labb_posts_carousel_entry_image', $entry_image, $post_id, $settings);

        endif;

        if (($settings->display_title == 'yes') || ($settings->display_summary == 'yes')) :

            $entry_output .= '<div class="labb-entry-text-wrap ' . ($thumbnail_exists ? '' : ' nothumbnail') . '">';

            if ($settings->display_title == 'yes') :

                $entry_title = '<' . esc_html($settings->entry_title_tag) . ' class="entry-title"><a href="' . esc_url(get_permalink()) . '" title="' . esc_attr(get_the_title()) . '" rel="bookmark"' . $target . '>' . esc_html(get_the_title()) . '</a></' . esc_html($settings->entry_title_tag) . '>';

                $entry_output .= apply_filters('labb_posts_carousel_entry_title', $entry_title, $post_id, $settings);

            endif;

            if (($settings->display_post_date == 'yes') || ($settings->display_author == 'yes') || ($settings->display_taxonomy == 'yes')) :

                $entry_meta = '<div class="labb-entry-meta">';

                if ($settings->display_author == 'yes'):

                    $entry_meta .= labb_entry_author();

                endif;

                if ($settings->display_post_date == 'yes'):

                    $entry_meta .= labb_entry_published();

                endif;

                if ($settings->display_taxonomy == 'yes'):

                    $entry_meta .= labb_get_info_for_taxonomies($taxonomies);

                endif;

                $entry_meta .= '</div>';

                $entry_output .= apply_filters('labb_posts_carousel_entry_meta', $entry_meta, $post_id, $settings);

            endif;

            if ($settings->display_summary == 'yes') :

                $excerpt = '<div class="entry-summary">';

                $excerpt .= wp_kses_post(get_the_excerpt());

                $excerpt .= '</div>';

                $entry_output .= apply_filters('labb_posts_carousel_entry_excerpt', $excerpt, $post_id, $settings);

            endif;

            if ($settings->display_read_more == 'yes') :

                $read_more_text = esc_html($settings->read_more_text);

                $read_more = '<div class="labb-read-more">';

                $read_more .= '<a href="' . esc_url(get_the_permalink()) . '"' . $target . '>' . $read_more_text . '</a>';

                $read_more .= '</div>';

                $entry_output .= apply_filters('labb_posts_carousel_read_more_link', $read_more, $post_id, $settings);

            endif;

            $entry_output .= '</div>';

        endif;

        $entry_output .= '</article><!-- .hentry -->';

        $entry_output .= '</div><!-- .labb-posts-carousel-item -->';

        $output .= apply_filters('labb_posts_carousel_entry_output', $entry_output, $post_id, $settings);

    endwhile;

    wp_reset_postdata();

    $output .= '</div><!-- .labb-posts-carousel -->';

endif;

echo apply_filters('labb_posts_carousel_output', $output, $module, $settings);

