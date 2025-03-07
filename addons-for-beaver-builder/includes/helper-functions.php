<?php

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) {
    exit;
}
function labb_get_terms(  $taxonomy  ) {
    global $wpdb;
    $term_coll = array();
    if ( taxonomy_exists( $taxonomy ) ) {
        $terms = get_terms( $taxonomy );
        // Get all terms of a taxonomy
        if ( $terms && !is_wp_error( $terms ) ) {
            foreach ( $terms as $term ) {
                $term_coll[$term->term_id] = $term->name;
            }
        }
    } else {
        $qt = 'SELECT * FROM ' . $wpdb->terms . ' AS t INNER JOIN ' . $wpdb->term_taxonomy . ' AS tt ON t.term_id = tt.term_id WHERE tt.taxonomy =  "' . $taxonomy . '" AND tt.count > 0 ORDER BY  t.term_id DESC LIMIT 0 , 30';
        $terms = $wpdb->get_results( $qt, ARRAY_A );
        if ( $terms && !is_wp_error( $terms ) ) {
            foreach ( $terms as $term ) {
                $term_coll[$term['term_id']] = $term['name'];
            }
        }
    }
    return $term_coll;
}

function labb_entry_terms_list(
    $taxonomy = 'category',
    $separator = ', ',
    $before = ' ',
    $after = ' '
) {
    global $post;
    $output = '<span class="labb-' . $taxonomy . '-list">';
    $output .= get_the_term_list(
        $post->ID,
        $taxonomy,
        $before,
        $separator,
        $after
    );
    $output .= '</span>';
    return $output;
}

function labb_get_matched_terms(  $query_args, $chosen_taxonomy  ) {
    $included_terms = array();
    $excluded_terms = array();
    if ( !empty( $query_args ) && !empty( $query_args['tax_query'] ) ) {
        $term_queries = $query_args['tax_query'];
        foreach ( $term_queries as $terms_query ) {
            if ( !is_array( $terms_query ) ) {
                continue;
            }
            $field = $terms_query['field'];
            $taxonomy = $terms_query['taxonomy'];
            $terms = $terms_query['terms'];
            $operator = ( isset( $terms_query['operator'] ) ? $terms_query['operator'] : '' );
            // Do not choose a taxonomy other than the one chosen by user
            if ( empty( $taxonomy ) || empty( $terms ) || $field !== 'id' || empty( $operator ) || $taxonomy !== $chosen_taxonomy ) {
                continue;
            }
            // Assume the terms is always a term id or a array of term ids as provided by BB query control
            if ( $operator == 'IN' ) {
                if ( is_array( $terms ) ) {
                    foreach ( $terms as $term_id ) {
                        $included_terms[] = $term_id;
                    }
                } else {
                    $included_terms[] = $terms;
                }
            } elseif ( $operator == 'NOT IN' ) {
                if ( is_array( $terms ) ) {
                    foreach ( $terms as $term_id ) {
                        $excluded_terms[] = $term_id;
                    }
                } else {
                    $excluded_terms[] = $terms;
                }
            }
        }
    }
    $return = array($included_terms, $excluded_terms);
    return apply_filters(
        'labb_matched_taxonomy_terms',
        $return,
        $query_args,
        $chosen_taxonomy
    );
}

function labb_get_taxonomy_info(  $taxonomy  ) {
    $output = '';
    $terms = get_the_terms( get_the_ID(), $taxonomy );
    if ( !empty( $terms ) && !is_wp_error( $terms ) ) {
        $output .= '<span class="labb-terms">';
        $term_count = 0;
        foreach ( $terms as $term ) {
            $term_link = get_term_link( $term->slug, $taxonomy );
            if ( !empty( $term_link ) && !is_wp_error( $term_link ) ) {
                if ( $term_count != 0 ) {
                    $output .= ', ';
                }
                $output .= '<a href="' . get_term_link( $term->slug, $taxonomy ) . '">' . $term->name . '</a>';
                $term_count = $term_count + 1;
            }
        }
        $output .= '</span>';
    }
    return apply_filters( 'labb_taxonomy_info', $output, $taxonomy );
}

function labb_get_info_for_taxonomies(  $taxonomies  ) {
    $output = '';
    foreach ( $taxonomies as $taxonomy ) {
        $output .= labb_get_taxonomy_info( $taxonomy );
    }
    return apply_filters( 'labb_taxonomies_info', $output, $taxonomies );
}

// get all registered taxonomies
function labb_get_taxonomies_map() {
    $map = array();
    $taxonomies = labb_get_all_taxonomies();
    foreach ( $taxonomies as $taxonomy ) {
        $map[$taxonomy] = $taxonomy;
    }
    return apply_filters( 'labb_taxonomies_map', $map );
}

function labb_get_all_taxonomies() {
    $taxonomies = get_taxonomies( array(
        'public'   => true,
        '_builtin' => false,
    ) );
    $taxonomies = array_merge( array(
        'category' => 'category',
        'post_tag' => 'post_tag',
    ), $taxonomies );
    return $taxonomies;
}

function labb_entry_published(  $format = null  ) {
    if ( empty( $format ) ) {
        $format = get_option( 'date_format' );
    }
    $published = '<span class="published"><abbr title="' . sprintf( get_the_time( esc_html__( 'l, F, Y, g:i a', 'livemesh-bb-addons' ) ) ) . '">' . sprintf( get_the_time( $format ) ) . '</abbr></span>';
    return apply_filters( 'labb_entry_published', $published, $format );
    $link = '<span class="published">' . '<a href="' . get_day_link( get_the_time( esc_html__( 'Y', 'livemesh-bb-addons' ) ), get_the_time( esc_html__( 'm', 'livemesh-bb-addons' ) ), get_the_time( esc_html__( 'd', 'livemesh-bb-addons' ) ) ) . '" title="' . sprintf( get_the_time( esc_html__( 'l, F, Y, g:i a', 'livemesh-bb-addons' ) ) ) . '">' . '<span class="updated">' . get_the_time( $format ) . '</span>' . '</a></span>';
    return apply_filters( 'labb_entry_published_link', $link, $format );
}

function labb_entry_author() {
    $author = '<span class="author vcard">' . esc_html__( 'By ', 'livemesh-bb-addons' ) . '<a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '" title="' . esc_attr( get_the_author_meta( 'display_name' ) ) . '">' . esc_html( get_the_author_meta( 'display_name' ) ) . '</a></span>';
    return apply_filters( 'labb_entry_author', $author );
}

/* Return the css class name to help achieve the number of columns specified for mobile resolution */
function labb_get_grid_classes(  $settings, $columns_field = 'per_line'  ) {
    $grid_classes = ' labb-grid-desktop-';
    $grid_classes .= $settings->{$columns_field};
    $grid_classes .= ' labb-grid-tablet-';
    $grid_classes .= $settings->{$columns_field . '_tablet'};
    $grid_classes .= ' labb-grid-mobile-';
    $grid_classes .= $settings->{$columns_field . '_mobile'};
    return apply_filters(
        'labb_grid_classes',
        $grid_classes,
        $settings,
        $columns_field
    );
}

/*
* Converting string to boolean is a big one in PHP
*/
function labb_to_boolean(  $value  ) {
    if ( !isset( $value ) ) {
        return false;
    }
    if ( $value == 'true' || $value == '1' ) {
        $value = true;
    } elseif ( $value == 'false' || $value == '0' ) {
        $value = false;
    }
    return (bool) $value;
    // Make sure you do not touch the value if the value is not a string
}

/**
 * Lightens/darkens a given colour (hex format), returning the altered colour in hex format.7
 * @param str $hex Colour as hexadecimal (with or without hash);
 * @percent float $percent Decimal ( 0.2 = lighten by 20%(), -0.4 = darken by 40%() )
 * @return str Lightened/Darkend colour as hexadecimal (with hash);
 */
function labb_color_luminance(  $hex, $percent  ) {
    // validate hex string
    $hex = preg_replace( '/[^0-9a-f]/i', '', $hex );
    $new_hex = '#';
    if ( strlen( $hex ) < 6 ) {
        $hex = $hex[0] + $hex[0] + $hex[1] + $hex[1] + $hex[2] + $hex[2];
    }
    // convert to decimal and change luminosity
    for ($i = 0; $i < 3; $i++) {
        $dec = hexdec( substr( $hex, $i * 2, 2 ) );
        $dec = min( max( 0, $dec + $dec * $percent ), 255 );
        $new_hex .= str_pad(
            dechex( $dec ),
            2,
            0,
            STR_PAD_LEFT
        );
    }
    return $new_hex;
}

function labb_get_option(  $option_name, $default = null  ) {
    $settings = get_option( 'labb_settings' );
    if ( !empty( $settings ) && isset( $settings[$option_name] ) ) {
        $option_value = $settings[$option_name];
    } else {
        $option_value = $default;
    }
    return apply_filters(
        'labb_get_option',
        $option_value,
        $option_name,
        $default
    );
}

function labb_update_option(  $option_name, $option_value  ) {
    $settings = get_option( 'labb_settings' );
    if ( empty( $settings ) ) {
        $settings = array();
    }
    $settings[$option_name] = $option_value;
    update_option( 'labb_settings', $settings );
}

/**
 * Update multiple options in one go
 * @param array $setting_data An collection of settings key value pairs;
 */
function labb_update_options(  $setting_data  ) {
    $settings = get_option( 'labb_settings' );
    if ( empty( $settings ) ) {
        $settings = array();
    }
    foreach ( $setting_data as $setting => $value ) {
        // because of get_magic_quotes_gpc()
        $value = stripslashes( $value );
        $settings[$setting] = $value;
    }
    update_option( 'labb_settings', $settings );
}

/**
 * Get system info
 *
 */
function labb_get_sysinfo() {
    global $wpdb;
    // Get theme info
    $theme_data = wp_get_theme();
    $theme = $theme_data->Name . ' ' . $theme_data->Version;
    $return = '### <strong>Begin System Info</strong> ###' . "\n\n";
    // Start with the basics...
    $return .= '-- Site Info' . "\n\n";
    $return .= 'Site URL:                 ' . site_url() . "\n";
    $return .= 'Home URL:                 ' . home_url() . "\n";
    $return .= 'Multisite:                ' . (( is_multisite() ? 'Yes' : 'No' )) . "\n";
    // Theme info
    $plugin = get_plugin_data( LABB_PLUGIN_FILE );
    // Plugin configuration
    $return .= "\n" . '-- Plugin Configuration' . "\n\n";
    $return .= 'Name:                     ' . $plugin['Name'] . "\n";
    $return .= 'Version:                  ' . $plugin['Version'] . "\n";
    // WordPress configuration
    $return .= "\n" . '-- WordPress Configuration' . "\n\n";
    $return .= 'Version:                  ' . get_bloginfo( 'version' ) . "\n";
    $return .= 'Language:                 ' . (( defined( 'WPLANG' ) && WPLANG ? WPLANG : 'en_US' )) . "\n";
    $return .= 'Permalink Structure:      ' . (( get_option( 'permalink_structure' ) ? get_option( 'permalink_structure' ) : 'Default' )) . "\n";
    $return .= 'Active Theme:             ' . $theme . "\n";
    $return .= 'Show On Front:            ' . get_option( 'show_on_front' ) . "\n";
    // Only show page specs if frontpage is set to 'page'
    if ( get_option( 'show_on_front' ) == 'page' ) {
        $front_page_id = get_option( 'page_on_front' );
        $blog_page_id = get_option( 'page_for_posts' );
        $return .= 'Page On Front:            ' . (( $front_page_id != 0 ? get_the_title( $front_page_id ) . ' (#' . $front_page_id . ')' : 'Unset' )) . "\n";
        $return .= 'Page For Posts:           ' . (( $blog_page_id != 0 ? get_the_title( $blog_page_id ) . ' (#' . $blog_page_id . ')' : 'Unset' )) . "\n";
    }
    $return .= 'ABSPATH:                  ' . ABSPATH . "\n";
    $return .= 'WP_DEBUG:                 ' . (( defined( 'WP_DEBUG' ) ? ( WP_DEBUG ? 'Enabled' : 'Disabled' ) : 'Not set' )) . "\n";
    $return .= 'Memory Limit:             ' . WP_MEMORY_LIMIT . "\n";
    $return .= 'Registered Post Stati:    ' . implode( ', ', get_post_stati() ) . "\n";
    // Get plugins that have an update
    $updates = get_plugin_updates();
    // WordPress active plugins
    $return .= "\n" . '-- WordPress Active Plugins' . "\n\n";
    $plugins = get_plugins();
    $active_plugins = get_option( 'active_plugins', array() );
    foreach ( $plugins as $plugin_path => $plugin ) {
        if ( !in_array( $plugin_path, $active_plugins ) ) {
            continue;
        }
        $update = ( array_key_exists( $plugin_path, $updates ) ? ' (needs update - ' . $updates[$plugin_path]->update->new_version . ')' : '' );
        $return .= $plugin['Name'] . ': ' . $plugin['Version'] . $update . "\n";
    }
    // WordPress inactive plugins
    $return .= "\n" . '-- WordPress Inactive Plugins' . "\n\n";
    foreach ( $plugins as $plugin_path => $plugin ) {
        if ( in_array( $plugin_path, $active_plugins ) ) {
            continue;
        }
        $update = ( array_key_exists( $plugin_path, $updates ) ? ' (needs update - ' . $updates[$plugin_path]->update->new_version . ')' : '' );
        $return .= $plugin['Name'] . ': ' . $plugin['Version'] . $update . "\n";
    }
    if ( is_multisite() ) {
        // WordPress Multisite active plugins
        $return .= "\n" . '-- Network Active Plugins' . "\n\n";
        $plugins = wp_get_active_network_plugins();
        $active_plugins = get_site_option( 'active_sitewide_plugins', array() );
        foreach ( $plugins as $plugin_path ) {
            $plugin_base = plugin_basename( $plugin_path );
            if ( !array_key_exists( $plugin_base, $active_plugins ) ) {
                continue;
            }
            $update = ( array_key_exists( $plugin_path, $updates ) ? ' (needs update - ' . $updates[$plugin_path]->update->new_version . ')' : '' );
            $plugin = get_plugin_data( $plugin_path );
            $return .= $plugin['Name'] . ': ' . $plugin['Version'] . $update . "\n";
        }
    }
    // Server configuration (really just versioning)
    $return .= "\n" . '-- Webserver Configuration' . "\n\n";
    $return .= 'PHP Version:              ' . PHP_VERSION . "\n";
    $return .= 'MySQL Version:            ' . $wpdb->db_version() . "\n";
    $return .= 'Webserver Info:           ' . $_SERVER['SERVER_SOFTWARE'] . "\n";
    // PHP configs... now we're getting to the important stuff
    $return .= "\n" . '-- PHP Configuration' . "\n\n";
    $return .= 'Memory Limit:             ' . ini_get( 'memory_limit' ) . "\n";
    $return .= 'Upload Max Size:          ' . ini_get( 'upload_max_filesize' ) . "\n";
    $return .= 'Post Max Size:            ' . ini_get( 'post_max_size' ) . "\n";
    $return .= 'Upload Max Filesize:      ' . ini_get( 'upload_max_filesize' ) . "\n";
    $return .= 'Time Limit:               ' . ini_get( 'max_execution_time' ) . "\n";
    $return .= 'Max Input Vars:           ' . ini_get( 'max_input_vars' ) . "\n";
    $return .= 'Display Errors:           ' . (( ini_get( 'display_errors' ) ? 'On (' . ini_get( 'display_errors' ) . ')' : 'N/A' )) . "\n";
    $return = apply_filters( 'edd_sysinfo_after_php_config', $return );
    // PHP extensions and such
    $return .= "\n" . '-- PHP Extensions' . "\n\n";
    $return .= 'cURL:                     ' . (( function_exists( 'curl_init' ) ? 'Supported' : 'Not Supported' )) . "\n";
    $return .= 'fsockopen:                ' . (( function_exists( 'fsockopen' ) ? 'Supported' : 'Not Supported' )) . "\n";
    $return .= 'SOAP Client:              ' . (( class_exists( 'SoapClient' ) ? 'Installed' : 'Not Installed' )) . "\n";
    $return .= 'Suhosin:                  ' . (( extension_loaded( 'suhosin' ) ? 'Installed' : 'Not Installed' )) . "\n";
    $return .= "\n" . '### End System Info ###';
    return $return;
}

function labb_get_theme_color() {
    $color = '#f94213';
    $options = get_option( 'labb_settings' );
    if ( $options && isset( $options['labb_theme_color'] ) ) {
        $color = $options['labb_theme_color'];
    }
    return $color;
}

function labb_get_image_html(  $photo_settings  ) {
    ob_start();
    // render image
    FLBuilder::render_module_html( 'photo', $photo_settings );
    $image_html = ob_get_clean();
    return apply_filters( 'labb_image_html', $image_html, $photo_settings );
}

function labb_get_image_alt(  $attachment_id  ) {
    if ( empty( $attachment_id ) ) {
        return '';
    }
    if ( !$attachment_id ) {
        return '';
    }
    $attachment = get_post( $attachment_id );
    if ( !$attachment ) {
        return '';
    }
    $alt = get_post_meta( $attachment_id, '_wp_attachment_image_alt', true );
    if ( !$alt ) {
        $alt = $attachment->post_excerpt;
        if ( !$alt ) {
            $alt = $attachment->post_title;
        }
    }
    $alt = trim( strip_tags( $alt ) );
    return apply_filters( 'labb_image_alt', $alt, $attachment_id );
}

/** Isotope filtering support for Portfolio pages **/
function labb_get_taxonomy_terms_filter(  $query_args, $taxonomies  ) {
    $output = '';
    // Check if any taxonomy filter has been applied
    list( $included_terms, $excluded_terms ) = labb_get_matched_terms( $query_args, $taxonomies[0] );
    $terms = get_terms( array(
        'taxonomy'   => $taxonomies,
        'hide_empty' => true,
        'include'    => $included_terms,
        'exclude'    => $excluded_terms,
    ) );
    $terms = apply_filters(
        'labb_taxonomy_filter_terms',
        $terms,
        $taxonomies,
        $query_args
    );
    if ( !empty( $terms ) && !is_wp_error( $terms ) ) {
        $output .= '<div class="labb-taxonomy-filter">';
        $output .= '<div class="labb-filter-item segment-0 labb-active"><a data-value="*" href="#">' . esc_html__( 'All', 'livemesh-bb-addons' ) . '</a></div>';
        $segment_count = 1;
        foreach ( $terms as $term ) {
            $output .= '<div class="labb-filter-item segment-' . intval( $segment_count ) . '"><a href="#" data-value=".term-' . intval( $term->term_id ) . '" title="' . esc_html__( 'View all items filed under ', 'livemesh-bb-addons' ) . esc_attr( $term->name ) . '">' . esc_html( $term->name ) . '</a></div>';
            $segment_count++;
        }
        $output .= '</div>';
    }
    return apply_filters(
        'labb_taxonomy_terms_filter',
        $output,
        $terms,
        $taxonomies,
        $query_args
    );
}

function labb_get_animation_atts(  $animation  ) {
    $animate_class = "";
    $animation_attr = "";
    if ( $animation != "none" ) {
        $animate_class = ' labb-animate-on-scroll';
        if ( in_array( $animation, array(
            'bounceIn',
            'bounceInUp',
            'bounceInDown',
            'bounceInLeft',
            'bounceInRight',
            'fadeIn',
            'fadeInLeft',
            'fadeInRight',
            'fadeInUp',
            'fadeInDown',
            'fadeInLeftBig',
            'fadeInRightBig',
            'fadeInUpBig',
            'fadeInDownBig',
            'flipInX',
            'flipInY',
            'lightSpeedIn',
            'rotateIn',
            'rotateInDownLeft',
            'rotateInDownRight',
            'rotateInUpLeft',
            'rotateInUpRight',
            'slideInUp',
            'slideInDown',
            'slideInLeft',
            'slideInRight',
            'zoomIn',
            'zoomInUp',
            'zoomInDown',
            'zoomInLeft',
            'zoomInRight',
            'rollIn'
        ) ) ) {
            $animate_class .= ' labb-visible-on-scroll';
        }
        $animation_attr = ' data-animation="' . esc_attr( $animation ) . '"';
    }
    $return = array($animate_class, $animation_attr);
    return apply_filters( 'labb_animation_attributes', $return, $animation );
}

function labb_get_animation_options() {
    return apply_filters( 'labb_animation_options', array(
        'none'        => __( 'None', 'livemesh-bb-addons' ),
        'fadeIn'      => __( 'Fade In', 'livemesh-bb-addons' ),
        'fadeInLeft'  => __( 'Fade In Left', 'livemesh-bb-addons' ),
        'fadeInRight' => __( 'Fade In Right', 'livemesh-bb-addons' ),
    ) );
}

function labb_get_legacy_template_part(  $template_name, $settings  ) {
    // Allow the user to place the templates in a different folder
    $templates_folder = apply_filters( 'labb_templates_folder', 'beaver-builder-addons' );
    $template = locate_template( $templates_folder . '/' . $template_name . '.php' );
    /* If template is found */
    if ( '' !== $template ) {
        ob_start();
        include $template;
        return ob_get_clean();
    }
    return null;
}

function labb_get_module_template_part(  $template_name, $module  ) {
    // Allow the user to place the templates in a different folder
    $templates_folder = apply_filters( 'labb_templates_folder', 'beaver-builder-addons/modules' );
    $template = locate_template( $templates_folder . '/' . $template_name . '.php' );
    /* If template is found */
    if ( '' !== $template ) {
        ob_start();
        include $template;
        return ob_get_clean();
    }
    return null;
}

function labb_get_template_part(  $template_name, $args = null, $return = false  ) {
    $template_file = $template_name . '.php';
    $default_folder = LABB_PLUGIN_DIR . 'templates/';
    // Allow the user to place the templates in a different folder than the default addons-for-beaver-builder/ folder
    $theme_folder = apply_filters( 'labb_addons_templates_folder', LABB_PLUGIN_SLUG );
    /* Look for the file in the theme */
    $template = locate_template( $theme_folder . '/' . $template_file );
    if ( !$template ) {
        $template = $default_folder . $template_file;
    }
    if ( $args && is_array( $args ) ) {
        extract( $args );
    }
    if ( $return ) {
        ob_start();
    }
    if ( file_exists( $template ) ) {
        include $template;
    }
    if ( $return ) {
        return ob_get_clean();
    }
    return null;
}
