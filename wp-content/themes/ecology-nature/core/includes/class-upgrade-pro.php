<?php
/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class Ecology_Nature_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	*/
	public function sections( $manager ) {

		// Load custom sections.
		load_template( trailingslashit( get_template_directory() ) . '/core/includes/upgrade-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'Ecology_Nature_Customize_Section_Pro' );

		$manager->add_section(
			new Ecology_Nature_Customize_Section_Pro(
				$manager,
				'ecology_nature_upgrade_pro',
				array(
					'title'       => esc_html( ECOLOGY_NATURE_THEME_NAME , 'ecology-nature' ),
					'description' => esc_html__( 'Unlock premium features: Multiple Homepage, Multiple Sections, Color Pallete, Typography, Premium Support and much more...', 'ecology-nature' ),
					'pro_text'    => esc_html__( 'View PRO Theme', 'ecology-nature' ),
					'pro_url'     => esc_url( ECOLOGY_NATURE_BUY_NOW ),
					'pro_demo_text'    => esc_html__( 'View Demo', 'ecology-nature' ),
					'pro_demo_url'     => esc_url( ECOLOGY_NATURE_DEMO_LINK_URL ),
					'priority'    => 1,
				)
			)
		);
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'ecology-nature-customize-controls', trailingslashit( get_template_directory_uri() ) . '/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'ecology-nature-customize-controls', trailingslashit( get_template_directory_uri() ) . '/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
Ecology_Nature_Customize::get_instance();