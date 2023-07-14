<?php
/**
 * CUSTOM SHORTCODES
 */

function car_list_shortcode($atts) {
    $args = array(
        'post_type'      => 'car',
        'posts_per_page' => 10,
        'order'          => 'DESC',
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) {
        $output = '<ul class="auto-list">';

        while ($query->have_posts()) {
            $query->the_post();
            $post_id = get_the_ID();
            $image_id = get_post_thumbnail_id($post_id);
            $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);
            $output .= '<li class="auto-list__item">' .
                '<a class="auto-list__item-link" href="' . get_the_permalink() .'">' .
                '<h2 class="auto-list__item-title">' . get_the_title() . '</h2>' .
                '<div class="auto-list__item-overlay">'
                . '</div>' .
                wp_get_attachment_image($image_id, 'about-pumps-images', '', array('alt' => $image_alt, 'class' => 'auto-list__image'))
                . '</a>' . '</li>';
        }

        $output .= '</ul>';

        wp_reset_postdata();

        return $output;
    } else {
        return 'Посты не найдены.';
    }
}
add_shortcode('car_list', 'car_list_shortcode');