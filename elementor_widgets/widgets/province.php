<?php

namespace elementorYamnetowrkSliderWidget\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
} // Exit if accessed directly


class Province_Widget extends Widget_Base {

	/**
	 * Retrieve the widget name.
	 *
	 * @return string Widget name.
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 */
	public function get_name() {
		return 'Province';
	}

	/**
	 * Retrieve the widget title.
	 *
	 * @return string Widget title.
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 */
	public function get_title() {
		return __( 'Province Widget', 'elementor-yamnetwork-province-widget' );
	}

	/**
	 * Retrieve the widget icon.
	 *
	 * @return string Widget icon.
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 */
	public function get_icon() {
		return 'eicon-posts-ticker';
	}

	/**
	 * Retrieve the list of categories the widget belongs to.
	 *
	 * Used to determine where to display the widget in the editor.
	 *
	 * Note that currently Elementor supports only one category.
	 * When multiple categories passed, Elementor uses the first one.
	 *
	 * @return array Widget categories.
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 */
	public function get_categories() {
		return [ 'general' ];
	}

	/**
	 * Retrieve the list of scripts the widget depended on.
	 *
	 * Used to set scripts dependencies required to run the widget.
	 *
	 * @return array Widget scripts dependencies.
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 */
	public function get_script_depends() {
		return [ 'HTSV-script-0', 'HTSV-script-1', 'HTSV-script-2' ];
	}

	public function get_style_depends() {
		return [ 'HTSV-style-1' ];
	}

	/**
	 * Register the widget controls.
	 *
	 * Adds different input fields to allow the user to change and customize the widget settings.
	 *
	 * @since 1.0.0
	 *
	 * @access protected
	 */
	protected function register_controls() {
		$this->start_controls_section(
			'section_content',
			[
				'label' => __( 'Content', 'elementor-yamnetwork-province-widget' ),
			]
		);

		$this->add_control(
			'title',
			[
				'label' => __( 'Title', 'elementor-yamnetwork-province-widget' ),
				'type'  => Controls_Manager::TEXT,
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'section_style',
			[
				'label' => __( 'Style', 'elementor-yamnetwork-province-widget' ),
				'tab'   => Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'text_transform',
			[
				'label'     => __( 'Text Transform', 'elementor-yamnetwork-province-widget' ),
				'type'      => Controls_Manager::SELECT,
				'default'   => '',
				'options'   => [
					''           => __( 'None', 'elementor-yamnetwork-province-widget' ),
					'uppercase'  => __( 'UPPERCASE', 'elementor-yamnetwork-province-widget' ),
					'lowercase'  => __( 'lowercase', 'elementor-yamnetwork-province-widget' ),
					'capitalize' => __( 'Capitalize', 'elementor-yamnetwork-province-widget' ),
				],
				'selectors' => [
					'{{WRAPPER}} .title' => 'text-transform: {{VALUE}};',
				],
			]
		);

		$this->end_controls_section();
	}

	/**
	 * Render the widget output on the frontend.
	 *
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @since 1.0.0
	 *
	 * @access protected
	 */
	protected function render() {
		if ( ! isset( $_GET["province"] ) ) {
			echo include( __DIR__ . "/templates/province_template.php" );
		} else {
			echo "<style>#ostan-description{
display:none;
}
#ostan-title{
display:none;
}
</style>";
		}


	}

	/**
	 * Render the widget output in the editor.
	 *
	 * Written as a Backbone JavaScript template and used to generate the live preview.
	 *
	 * @since 1.0.0
	 *
	 * @access protected
	 */
	protected function content_template() {
		?>
        <div>طراحی شده توسط مرتضی مهرداد</div>

		<?php
	}
}
