<?php

class Social_Widget_SP extends WP_Widget {
    
    public function __construct() {
        $widget_ops = array(
            'classname' => 'social_widget_sp',
            'description' => 'Social Widget with popular icons'
        );
        parent::__construct('social_widget_sp', 'Social Widget SP', $widget_ops);
    }
    
    public function widget( $args, $instance ) {

	}
	
	public function form( $instance ) {
		// outputs the options form on admin
	}
	
	public function update( $new_instance, $old_instance ) {
		// processes widget options to be saved
	}
}

?>