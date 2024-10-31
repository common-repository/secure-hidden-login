<?php
/**
 * Add function to widgets_init that'll load our widget.
 */
add_action( 'widgets_init', 'securehiddenlogin_load_widgets' );

/**
 * Register our widget.
 * 'SecureHiddenLogin_Widget' is the widget class used below.
 *
 */
function securehiddenlogin_load_widgets() {
	register_widget( 'SecureHiddenLogin_Widget' );
}

/**
 * SecureHiddenLogin Widget class.
 * This class handles everything that needs to be handled with the widget:
 * the settings, form, display, and update.  Nice!
 *
 */
class SecureHiddenLogin_Widget extends WP_Widget {

	/**
	 * Widget setup.
	 */
	function SecureHiddenLogin_Widget() {
		/* Widget settings. */
		$widget_ops = array( 'classname' => 'securehiddenlogin', 'description' => __('A widget that provides a Link (with custom text) to activate the Secure Hidden Login bar', 'securehiddenlogin') );

		/* Widget control settings. */
		$control_ops = array( 'width' => 300, 'height' => 350, 'id_base' => 'securehiddenlogin-widget' );

		/* Create the widget. */
		$this->WP_Widget( 'securehiddenlogin-widget', __('Secure Hidden Login', 'securehiddenlogin'), $widget_ops, $control_ops );
	}

	/**
	 * How to display the widget on the screen.
	 */
	function widget( $args, $instance ) {
		extract( $args );

		/* Our variables from the widget settings. */
		$title = apply_filters('widget_title', $instance['title'] );
		$name = $instance['name'];
		if ( !is_user_logged_in() ) {
			echo $before_widget;

			/* Display the widget title if one was input (before and after defined by themes). */
			if ( $title ) {
				echo $before_title . $title . $after_title;
			}
			/* Display name from widget settings if one was input. */
			if ( $name == '') { $name = 'Log in'; }

			printf(__('<a href="#" onclick="show_loginbar(); return false;">%1$s</a>', 'securehiddenlogin') , $name );

			/* After widget (defined by themes). */
			echo $after_widget;
		}
	}

	/**
	 * Update the widget settings.
	 */
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;

		/* Strip tags for title and name to remove HTML (important for text inputs). */
		$instance['title'] = strip_tags( $new_instance['title'] );
		$instance['name'] = strip_tags( $new_instance['name'] );

		return $instance;
	}

	/**
	 * Displays the widget settings controls on the widget panel.
	 * Make use of the get_field_id() and get_field_name() function
	 * when creating your form elements. This handles the confusing stuff.
	 */
	function form( $instance ) {

		/* Set up some default widget settings. */
		$defaults = array( 'title' => __('SecureHiddenLogin', 'securehiddenlogin'), 'name' => __('John Doe', 'securehiddenlogin'), 'sex' => 'male', 'show_sex' => true );
		$instance = wp_parse_args( (array) $instance, $defaults ); ?>

		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e('Title:', 'hybrid'); ?></label>
			<input id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'name' ); ?>"><?php _e('Link Text:', 'securehiddenlogin'); ?></label>
			<input id="<?php echo $this->get_field_id( 'name' ); ?>" name="<?php echo $this->get_field_name( 'name' ); ?>" value="<?php echo $instance['name']; ?>" style="width:100%;" />
		</p>

	<?php
	}
}

?>
