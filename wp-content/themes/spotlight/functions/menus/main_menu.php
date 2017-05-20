<?php

class Main_Menu extends Walker_Nav_Menu  {
    
    public function start_el(&$output, $item, $depth, $args) {
        $output     .= '<li>';
        $attributes = '';
        
        ! empty ( $item->attr_title )
			// Avoid redundant titles
			and $item->attr_title !== $item->title
			and $attributes .= ' title="' . esc_attr( $item->attr_title ) .'"';
			
		! empty ( $item->url )
			and $attributes .= ' href="' . esc_attr( $item->url ) .'"';
			
		$attributes  = trim( $attributes );
		$title       = apply_filters( 'the_title', $item->title, $item->ID );
		$item_output = "$args->before<a $attributes>$args->link_before$title</a>"."$args->link_after$args->after";
		// Since $output is called by reference we don't need to return anything.
		$output .= apply_filters(
			'walker_nav_menu_start_el'
			,   $item_output
			,   $item
			,   $depth
			,   $args
		);
    }
    
    public function start_lvl(&$output) {
        $output .= '<ul id="nav-mobile" class="right hide-on-med-and-down">';
    }
    
    public function end_lvl(&$output) {
        $output .= '</ul>';
    }
    
    public function end_el(&$output) {
        $output .= '</li>';
    }
}

?>