<?php
 /**
 *
 * @package   Montessori-Functionality
 * @author    Your Name <your_email@email.com>
 * @license   GPL-2.0+
 * @copyright 2015 Your Name or Company
 *
 * @wordpress-plugin
 * Plugin Name: Montessori Schedule
 * Description: This very important plugin contains all of the core functionality for this website so that it remains theme-independent.
 * Version:     1.0.0
 * Author:      Your Name
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

 // Prevent direct file access
  if ( ! defined ( 'ABSPATH' ) ) {
  	exit;
  }
  class Montessori_Schedule_Widget extends WP_Widget {
      /**
       *
       *
       * Unique identifier for your widget.
       *
       * @since    1.0.0
       *
       * @var      string
       */
      protected $widget_slug = 'Montessori_Schedule';
  	/*--------------------------------------------------*/
  	/* Constructor
  	/*--------------------------------------------------*/
  	/**
  	 * Specifies the classname and description, and instantiates the widget.
  	 */
  	public function __construct() {

  		parent::__construct(
  			$this->get_widget_slug(),
  			'Montessori Schedule',
  			array(
  				'classname'  => $this->get_widget_slug().'-class',
  				'description' => 'Add Montessori Schedule '
  			)
  		);
  	} // end constructor
      /**
       * Return the widget slug.
       *
       * @since    1.0.0
       *
       * @return    Plugin slug variable.
       */
      public function get_widget_slug() {
          return $this->widget_slug;
      }
  	/*--------------------------------------------------*/
  	/* Widget API Functions
  	/*--------------------------------------------------*/
  	/**
  	 * Outputs the content of the widget.
  	 *
  	 * @param array $args     The array of form elements
  	 * @param array $instance The current instance of the widget
  	 */
  	public function widget( $args, $instance ) {
  		if ( ! isset ( $args['widget_id'] ) ) {
           $args['widget_id'] = $this->id;
        }
  		// go on with your widget logic, put everything into a string and …
  		extract( $args, EXTR_SKIP );
  		$widget_string = $before_widget;
  		// Manipulate the widget's values based on their input fields
  		$title = empty( $instance['title'] ) ? '' : apply_filters( 'widget_title', $instance['title'] );
  		$greeting = empty( $instance['8:20am'] ) ? '' : apply_filters( 'widget_title', $instance['8:20am'] );
  		$circleTime = empty( $instance['8:30am'] ) ? '' : apply_filters( 'widget_title', $instance['8:30am'] );
  		$leconses = empty( $instance['8:45am'] ) ? '' : apply_filters( 'widget_title', $instance['8:45am'] );
      $lunch = empty( $instance['11:00am'] ) ? '' : apply_filters( 'widget_title', $instance['11:00am'] );

  		ob_start();
  		if ( $title ){
  			$widget_string .= $before_title;
  			$widget_string .= $title;
  			$widget_string .= $after_title;
  		}
  		include( plugin_dir_path( __FILE__ ) . 'views/widget.php' );
  		$widget_string .= ob_get_clean();
  		$widget_string .= $after_widget;
  		print $widget_string;
  	} // end widget
  	/**
  	 * Processes the widget's options to be saved.
  	 *
  	 * @param array $new_instance The new instance of values to be generated via the update.
  	 * @param array $old_instance The previous instance of values before the update.
  	 */
  	public function update( $new_instance, $old_instance ) {
  		$instance = $old_instance;
  		$instance['title'] = strip_tags( $new_instance['title'] );
  		$instance['8:20am'] = strip_tags( $new_instance['8:20am'] );
  		$instance['8:30am'] = strip_tags( $new_instance['8:30am'] );
  		$instance['8:45am'] = strip_tags( $new_instance['8:45am'] );
      $instance['11:00am'] = strip_tags( $new_instance['11:00am'] );

  		return $instance;
  	} // end widget
  	/**
  	 * Generates the administration form for the widget.
  	 *
  	 * @param array $instance The array of keys and values for the widget.
  	 */
  	public function form( $instance ) {

  		$instance = wp_parse_args(
  			(array) $instance,
  			array(
  				'title' => 'morning',
  				'8:20am' => '',
         '8:30am' => '',
  				'8:45am' => '',
  				'11:00am' => ''
  			)
  		);
  		$title = strip_tags( $instance['title'] );
  		$greeting = strip_tags( $instance['8:20am'] );
  		$circleTime = strip_tags( $instance['8:30am'] );
  		$leconses = strip_tags( $instance['8:45am'] );
      $lunch = strip_tags( $instance['11:00am'] );

  		// Display the admin form
  		include( plugin_dir_path( __FILE__ ) . 'views/admin.php' );
  	} // end form
  } // end class
  // TODO: Remember to change 'Widget_Name' to match the class name definition
  add_action( 'widgets_init', function(){
       register_widget( 'Montessori_Schedule_Widget' );
  });
