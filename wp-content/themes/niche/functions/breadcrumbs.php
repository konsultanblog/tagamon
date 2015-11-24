<?php

/*
 * niche Breadcrumbs
 */
global $niche_options;
function niche_custom_breadcrumbs() {
    $niche_showonhome = 0; // 1 - show breadcrumbs on the homepage, 0 - don't show
    $niche_delimiter = '/'; // niche_delimiter between crumbs
    $niche_home = __('Home', 'niche'); // text for the 'Home' link
    $niche_showcurrent = 1; // 1 - show current post/page title in breadcrumbs, 0 - don't show
    $niche_before = ' '; // tag before the current crumb
    $niche_after = ' '; // tag after the current crumb

    global $post;
    $niche_homelink = esc_url(home_url('/'));

    if (is_home() || is_front_page()) {

        if ($niche_showonhome == 1)
            echo '<ol class="breadcrumb breadcrumb-menubar"><li><a href="' . $niche_homelink . '">' . $niche_home . '</a></li></ol>';
    } else {

        echo '<ol class="breadcrumb breadcrumb-menubar"><li><a href="' . $niche_homelink . '">' . $niche_home . '</a> ' . $niche_delimiter . ' ';
        if (is_category()) {
            $niche_thisCat = get_category(get_query_var('cat'), false);
            if ($niche_thisCat->parent != 0)
                echo get_category_parents($niche_thisCat->parent, TRUE, ' ' . $niche_delimiter . ' ');
            echo $niche_before . __('Archive by category', 'niche') . ' " ' . single_cat_title('', false) . ' "' . $niche_after;
        } elseif (is_search()) {
            echo $niche_before . __('Search Results For ', 'niche') . ' " ' . get_search_query() . ' "' . $niche_after;
        } elseif (is_day()) {
            echo '<a href="' . esc_url(get_year_link(get_the_time('Y'))) . '">' . get_the_time('Y') . '</a> ' . $niche_delimiter . ' ';
            echo '<a href="' . esc_url(get_month_link(get_the_time('Y'), get_the_time('m'))) . '">' . get_the_time('F') . '</a> ' . $niche_delimiter . ' ';
            echo $niche_before . get_the_time('d') . $niche_after;
        } elseif (is_month()) {
            echo '<a href="' . esc_url(get_year_link(get_the_time('Y'))) . '">' . get_the_time('Y') . '</a> ' . $niche_delimiter . ' ';
            echo $niche_before . get_the_time('F') . $niche_after;
        } elseif (is_year()) {
            echo $niche_before . get_the_time('Y') . $niche_after;
        } elseif (is_single() && !is_attachment()) {
            if (get_post_type() != 'post') {
                $niche_post_type = get_post_type_object(get_post_type());
                $niche_slug = $niche_post_type->rewrite;
                echo '<a href="' . $niche_homelink . '/' . $niche_slug['slug'] . '/">' . $niche_post_type->labels->singular_name . '</a>';
                if ($niche_showcurrent == 1)
                    echo ' ' . $niche_delimiter . ' ' . $niche_before . esc_attr(get_the_title()) . $niche_after;
            } else {
                $niche_cat = get_the_category();
                $niche_cat = $niche_cat[0];
                $niche_cats = get_category_parents($niche_cat, TRUE, ' ' . $niche_delimiter . ' ');
                if ($niche_showcurrent == 0)
                    $niche_cats =
                            preg_replace("#^(.+)\s$niche_delimiter\s$#", "$1", $niche_cats);
                echo $niche_cats;
                if ($niche_showcurrent == 1)
                    echo $niche_before . esc_attr(get_the_title()) . $niche_after;
            }
        } elseif (!is_single() && !is_page() && get_post_type() != 'post' && !is_404()) {
            $niche_post_type = get_post_type_object(get_post_type());
            echo $niche_before . $niche_post_type->labels->singular_name . $niche_after;
        } elseif (is_attachment()) {
            $niche_parent = get_post($post->post_parent);
            $niche_cat = get_the_category($niche_parent->ID);
            $niche_cat = $niche_cat[0];
            echo get_category_parents($niche_cat, TRUE, ' ' . $niche_delimiter . ' ');
            echo '<a href="' . get_permalink($niche_parent) . '">' . $niche_parent->post_title . '</a>';
            if ($niche_showcurrent == 1)
                echo ' ' . $niche_delimiter . ' ' . $niche_before . esc_attr(get_the_title()) . $niche_after;
        } elseif (is_page() && !$post->post_parent) {
            if ($niche_showcurrent == 1)
                echo $niche_before . esc_attr(get_the_title()) . $niche_after;
        } elseif (is_page() && $post->post_parent) {
            $niche_parent_id = $post->post_parent;
            $niche_breadcrumbs = array();
            while ($niche_parent_id) {
                $niche_page = get_page($niche_parent_id);
                $niche_breadcrumbs[] = '<a href="' . get_permalink($niche_page->ID) . '">' . esc_attr(get_the_title($niche_page->ID)) . '</a>';
                $niche_parent_id = $niche_page->post_parent;
            }
            $niche_breadcrumbs = array_reverse($niche_breadcrumbs);
            for ($niche_i = 0; $niche_i < count($niche_breadcrumbs); $niche_i++) {
                echo $niche_breadcrumbs[$niche_i];
                if ($niche_i != count($niche_breadcrumbs) - 1)
                    echo ' ' . $niche_delimiter . ' ';
            }
            if ($niche_showcurrent == 1)
                echo ' ' . $niche_delimiter . ' ' . $niche_before . esc_attr(get_the_title()) . $niche_after;
        } elseif (is_tag()) {
            echo $niche_before . _e('Posts tagged', 'niche') . ' " ' . single_tag_title('', false) . ' "' . $niche_after;
        } elseif (is_author()) {
            global $author;
            $niche_userdata = get_userdata($author);
            echo $niche_before . _e('Articles Published by', 'niche') . ' " ' . $niche_userdata->display_name . ' "' . $niche_after;
        } elseif (is_404()) {
            echo $niche_before . _e('Error 404', 'niche') . $niche_after;
        }

        if (get_query_var('paged')) {
            if (is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author())
                echo ' (';
            echo __('Page', 'niche') . ' ' . get_query_var('paged');
            if (is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author())
                echo ')';
        }

        echo '</li></ol>';
    }
}

// end niche_custom_breadcrumbs()
?>
