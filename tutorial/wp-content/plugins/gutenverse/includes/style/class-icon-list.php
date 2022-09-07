<?php
/**
 * Gutenverse Icon List
 *
 * @author Jegstudio
 * @since 1.0.0
 * @package gutenverse\style
 */

namespace Gutenverse\Style;

/**
 * Class Icon List
 *
 * @package gutenverse\style
 */
class Icon_List extends Style_Abstract {
	/**
	 * Block Name
	 *
	 * @var array
	 */
	protected $name = 'icon-list';

	/**
	 * Constructor
	 *
	 * @param array $attrs Attribute.
	 */
	public function __construct( $attrs ) {
		parent::__construct( $attrs );

		$this->set_feature(
			array(
				'background'  => null,
				'border'      => null,
				'positioning' => null,
				'animation'   => null,
				'advance'     => null,
			)
		);
	}

	/**
	 * Generate style base on attribute.
	 */
	public function generate() {
		if ( isset( $this->attrs['spaceBetween'] ) ) {
			$this->inject_style(
				array(
					'selector'       => ".{$this->element_id}:not(.inline-icon-list) .guten-icon-list-item:not(:first-child)",
					'property'       => function( $value ) {
						return "margin-top: calc({$value}px/2);";
					},
					'value'          => $this->attrs['spaceBetween'],
					'device_control' => true,
				)
			);

			$this->inject_style(
				array(
					'selector'       => ".{$this->element_id}:not(.inline-icon-list) .guten-icon-list-item:not(:last-child)",
					'property'       => function( $value ) {
						return "padding-bottom: calc({$value}px/2);";
					},
					'value'          => $this->attrs['spaceBetween'],
					'device_control' => true,
				)
			);

			$this->inject_style(
				array(
					'selector'       => ".{$this->element_id}.inline-icon-list .guten-icon-list-item:not(:last-child)",
					'property'       => function( $value ) {
						return "margin-right: {$value}px;";
					},
					'value'          => $this->attrs['spaceBetween'],
					'device_control' => true,
				)
			);
		}

		if ( isset( $this->attrs['alignList'] ) ) {
			$this->inject_style(
				array(
					'selector'       => ".{$this->element_id}:not(.inline-icon-list)",
					'property'       => function( $value ) {
						return "text-align: {$this->handle_align( $value )};";
					},
					'value'          => $this->attrs['alignList'],
					'device_control' => true,
				)
			);

			$this->inject_style(
				array(
					'selector'       => ".{$this->element_id}.inline-icon-list",
					'property'       => function( $value ) {
						return "justify-content: {$value};";
					},
					'value'          => $this->attrs['alignList'],
					'device_control' => true,
				)
			);
		}

		if ( isset( $this->attrs['iconColor'] ) ) {
			$this->inject_style(
				array(
					'selector'       => ".{$this->element_id} .guten-icon-list-item i",
					'property'       => function( $value ) {
						return $this->handle_color( $value, 'color' );
					},
					'value'          => $this->attrs['iconColor'],
					'device_control' => false,
				)
			);
		}

		if ( isset( $this->attrs['iconColorHover'] ) ) {
			$this->inject_style(
				array(
					'selector'       => ".{$this->element_id} .guten-icon-list-item:hover i",
					'property'       => function( $value ) {
						return $this->handle_color( $value, 'color' );
					},
					'value'          => $this->attrs['iconColorHover'],
					'device_control' => false,
				)
			);
		}

		if ( isset( $this->attrs['iconSize'] ) ) {
			$this->inject_style(
				array(
					'selector'       => ".{$this->element_id} .guten-icon-list-item i",
					'property'       => function( $value ) {
						return "font-size: {$value}px;";
					},
					'value'          => $this->attrs['iconSize'],
					'device_control' => true,
				)
			);
		}

		if ( isset( $this->attrs['textColor'] ) ) {
			$this->inject_style(
				array(
					'selector'       => ".{$this->element_id} .guten-icon-list-item .list-text",
					'property'       => function( $value ) {
						return $this->handle_color( $value, 'color' );
					},
					'value'          => $this->attrs['textColor'],
					'device_control' => false,
				)
			);
		}

		if ( isset( $this->attrs['textColorHover'] ) ) {
			$this->inject_style(
				array(
					'selector'       => ".{$this->element_id} .guten-icon-list-item:hover .list-text",
					'property'       => function( $value ) {
						return $this->handle_color( $value, 'color' );
					},
					'value'          => $this->attrs['textColorHover'],
					'device_control' => false,
				)
			);
		}

		if ( isset( $this->attrs['textIndent'] ) ) {
			$this->inject_style(
				array(
					'selector'       => ".{$this->element_id} .guten-icon-list-item .list-text",
					'property'       => function( $value ) {
						return "padding-left: {$value}px;";
					},
					'value'          => $this->attrs['textIndent'],
					'device_control' => true,
				)
			);
		}

		if ( isset( $this->attrs['textTypography'] ) ) {
			$this->inject_typography(
				array(
					'selector'       => ".{$this->element_id} .guten-icon-list-item .list-text",
					'property'       => function( $value ) {},
					'value'          => $this->attrs['textTypography'],
					'device_control' => false,
				)
			);
		}
	}
}
