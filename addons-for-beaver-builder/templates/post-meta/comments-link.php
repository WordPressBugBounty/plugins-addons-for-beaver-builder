<?php

$comments_link = '';

$num_of_comments = intval(get_comments_number());
?>

<span class="labb-comments">
    
    <?php

    if (0 == $num_of_comments && !comments_open() && !pings_open()) {
        echo sprintf(esc_html__('Comments Disabled', 'livemesh-bb-addons'), number_format_i18n($num_of_comments));
    }
    elseif (0 == $num_of_comments)
        echo '<a href="' . get_permalink() . '#respond" title="' . sprintf(esc_html__('Comment on %1$s', 'livemesh-bb-addons'), the_title_attribute('echo=0')) . '">' . sprintf(esc_html__('No Comments', 'livemesh-bb-addons'), number_format_i18n($num_of_comments)) . '</a>';
    elseif (1 == $num_of_comments)
        echo '<a href="' . get_comments_link() . '" title="' . sprintf(esc_html__('Comment on %1$s', 'livemesh-bb-addons'), the_title_attribute('echo=0')) . '">' . sprintf(esc_html__('%1$s Comment', 'livemesh-bb-addons'), number_format_i18n($num_of_comments)) . '</a>';
    elseif (1 < $num_of_comments)
        echo '<a href="' . get_comments_link() . '" title="' . sprintf(esc_html__('Comment on %1$s', 'livemesh-bb-addons'), the_title_attribute('echo=0')) . '">' . sprintf(esc_html__('%1$s Comments', 'livemesh-bb-addons'), number_format_i18n($num_of_comments)) . '</a>';

    ?>

</span>