<?php
/**
 * Custom Navigation Walker for Modern Header
 * Note: This walker is currently not used in the new header design
 * but kept for compatibility with existing menus
 * 
 * @package tempusbelgravia
 */

class Custom_Walker_Nav_Menu extends Walker_Nav_Menu {

    /**
     * Start Level - Starts the list before the elements are added.
     */
    public function start_lvl(&$output, $depth = 0, $args = null) {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<ul class=\"sub-menu-v2\">\n";
    }

    /**
     * End Level - Ends the list after the elements are added.
     */
    public function end_lvl(&$output, $depth = 0, $args = null) {
        $indent = str_repeat("\t", $depth);
        $output .= "$indent</ul>\n";
    }

    /**
     * Start Element - Starts the list item before the element is added.
     */
    public function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        $indent = ($depth) ? str_repeat("\t", $depth) : '';

        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $classes[] = 'menu-item-' . $item->ID;

        // Add classes for items with children
        $children = get_posts(array(
            'post_type'   => 'nav_menu_item',
            'nopaging'    => true,
            'numberposts' => 1,
            'meta_key'    => '_menu_item_menu_item_parent',
            'meta_value'  => $item->ID
        ));

        if (!empty($children)) {
            $classes[] = 'menu-item-has-children-v2';
        }

        /**
         * Filters the arguments for a single nav menu item.
         */
        $args = apply_filters('nav_menu_item_args', $args, $item, $depth);

        /**
         * Filters the CSS class(es) applied to a menu item's list item element.
         */
        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
        $class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';

        /**
         * Filters the ID applied to a menu item's list item element.
         */
        $id = apply_filters('nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args);
        $id = $id ? ' id="' . esc_attr($id) . '"' : '';

        $output .= $indent . '<li' . $id . $class_names .'>';

        $atts = array();
        $atts['title']  = !empty($item->attr_title) ? $item->attr_title : '';
        $atts['target'] = !empty($item->target)     ? $item->target     : '';
        $atts['rel']    = !empty($item->xfn)        ? $item->xfn        : '';
        $atts['href']   = !empty($item->url)        ? $item->url        : '';

        /**
         * Filters the HTML attributes applied to a menu item's anchor element.
         */
        $atts = apply_filters('nav_menu_link_attributes', $atts, $item, $args);

        $attributes = '';
        foreach ($atts as $attr => $value) {
            if (!empty($value)) {
                $value = ('href' === $attr) ? esc_url($value) : esc_attr($value);
                $attributes .= ' ' . $attr . '="' . $value . '"';
            }
        }

        $title = apply_filters('the_title', $item->title, $item->ID);

        /**
         * Filters a menu item's title.
         */
        $title = apply_filters('nav_menu_item_title', $title, $item, $args, $depth);

        // Add arrow for items with children
        $arrow = '';
        if (!empty($children)) {
            $arrow = ' <i class="fas fa-chevron-down menu-arrow" aria-hidden="true"></i>';
        }

        $item_output = isset($args->before) ? $args->before : '';
        $item_output .= '<a' . $attributes .'>';
        $item_output .= (isset($args->link_before) ? $args->link_before : '') . $title . (isset($args->link_after) ? $args->link_after : '');
        $item_output .= $arrow;
        $item_output .= '</a>';
        $item_output .= isset($args->after) ? $args->after : '';

        /**
         * Filters a menu item's starting output.
         */
        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }

    /**
     * End Element - Ends the list item after the element is added.
     */
    public function end_el(&$output, $item, $depth = 0, $args = null) {
        $output .= "</li>\n";
    }
}