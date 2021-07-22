<?php
/**
 * Customizer Control: typography.
 *
 */

// Exit if accessed directly.

if ( ! class_exists( 'WP_Customize_Control' ) ) {
	return;
}

/**
 * Typography control.
 */
final class Jot_Shop_Control_Typography extends WP_Customize_Control {

	/**
	 * Used to connect controls to each other.
	 *
	 * @since 1.0.0
	 * @var bool $connect
	 */
	public $connect = false;

	/**
	 * Option name.
	 *
	 * @since 1.0.0
	 * @var string $name
	 */
	public $name = '';

	/**
	 * Option label.
	 *
	 * @since 1.0.0
	 * @var string $label
	 */
	public $label = '';

	/**
	 * Option description.
	 *
	 * @since 1.0.0
	 * @var string $description
	 */
	public $description = '';

	/**
	 * Control type.
	 *
	 * @since 1.0.0
	 * @var string $type
	 */
	public $type = 'bigstr-font';

	/**
	 * Used to connect variant controls to each other.
	 *
	 * @since 1.5.2
	 * @var bool $variant
	 */
	public $variant = false;

	/**
	 * Used to set the mode for code controls.
	 *
	 * @since 1.0.0
	 * @var bool $mode
	 */
	public $mode = 'html';

	/**
	 * Used to set the default font options.
	 *
	 * @since 1.0.8
	 * @var string $ast_inherit
	 */
	public $ast_inherit = '';

	/**
	 * All font weights
	 *
	 * @since 1.0.8
	 * @var string $ast_inherit
	 */
	public $ast_all_font_weight = array();

	/**
	 * If true, the preview button for a control will be rendered.
	 *
	 * @since 1.0.0
	 * @var bool $preview_button
	 */
	public $preview_button = false;

	/**
	 * Set the default font options.
	 *
	 * @since 1.0.8
	 * @param WP_Customize_Manager $manager Customizer bootstrap instance.
	 * @param string               $id      Control ID.
	 * @param array                $args    Default parent's arguments.
	 */
	public function __construct( $manager, $id, $args = array() ) {
		$this->ast_inherit         = __( 'Inherit', 'jot-shop' );
		$this->ast_all_font_weight = array(
			'100'       => __( 'Thin 100', 'jot-shop' ),
			'100italic' => __( '100 Italic', 'jot-shop' ),
			'200'       => __( 'Extra-Light 200', 'jot-shop' ),
			'200italic' => __( '200 Italic', 'jot-shop' ),
			'300'       => __( 'Light 300', 'jot-shop' ),
			'300italic' => __( '300 Italic', 'jot-shop' ),
			'400'       => __( 'Normal 400', 'jot-shop' ),
			'italic'    => __( '400 Italic', 'jot-shop' ),
			'500'       => __( 'Medium 500', 'jot-shop' ),
			'500italic' => __( '500 Italic', 'jot-shop' ),
			'600'       => __( 'Semi-Bold 600', 'jot-shop' ),
			'600italic' => __( '600 Italic', 'jot-shop' ),
			'700'       => __( 'Bold 700', 'jot-shop' ),
			'700italic' => __( '700 Italic', 'jot-shop' ),
			'800'       => __( 'Extra-Bold 800', 'jot-shop' ),
			'800italic' => __( '800 Italic', 'jot-shop' ),
			'900'       => __( 'Ultra-Bold 900', 'jot-shop' ),
			'900italic' => __( '900 Italic', 'jot-shop' ),
		);
		parent::__construct( $manager, $id, $args );
	}

	/**
	 * Renders the content for a control based on the type
	 * of control specified when this class is initialized.
	 *
	 * @since 1.0.0
	 * @access protected
	 * @return void
	 */
	protected function render_content() {

		switch ( $this->type ) {

			case 'bigstr-font-family':
				$this->render_font( $this->ast_inherit );
				break;

			case 'bigstr-font-variant':
				$this->render_font_variant( $this->ast_inherit );
				break;

			case 'bigstr-font-weight':
				$this->render_font_weight( $this->ast_inherit );
				break;
		}
	}

	/**
	 * Enqueue control related scripts/styles.
	 *
	 * @access public
	 */
	public function enqueue() {

		//$js_uri  = JOT_SHOP_THEME_DIR  . 'customizer-front/typography/';
		//$css_uri = JOT_SHOP_THEME_DIR  . 'customizer-front/typography/';
		//$js_uri  = JOT_SHOP_THEME_DIR  . 'customizer-front/typography/';
		
		$js_uri  = JOT_SHOP_THEME_URI  . 'customizer-front/typography/';
		$css_uri = JOT_SHOP_THEME_URI  . 'customizer-front/typography/';
		$js_uri  = JOT_SHOP_THEME_URI  . 'customizer-front/typography/';
		
		wp_enqueue_style( 'jot-shop-select-woo-style', $css_uri . 'selectWoo.css', null, '1.0.0' );
		wp_enqueue_script( 'jot-shop-select-woo-script', $js_uri . 'selectWoo.js', array( 'jquery' ), '1.0.0', true );

		wp_enqueue_script( 'jot-shop-typography', $js_uri . 'typography.js', array( 'jquery', 'customize-base' ), '1.0.0', true );
		$top_store_typo_localize = $this->ast_all_font_weight;

		wp_localize_script( 'jot-shop-typography', 'topstoreTypo', $top_store_typo_localize);
	}
	/**
	 * Renders the title and description for a control.
	 *
	 * @since 1.0.0
	 * @access protected
	 * @return void
	 */
	protected function render_content_title() {
		if ( ! empty( $this->label ) ) {
			echo '<span class="customize-control-title">' . esc_html( $this->label ) . '</span>';
		}
		if ( ! empty( $this->description ) ) {
			echo '<span class="description customize-control-description">' . esc_html( $this->description ) . '</span>';
		}
	}

	/**
	 * Renders the connect attribute for a connected control.
	 *
	 * @since 1.0.0
	 * @access protected
	 * @return void
	 */
	protected function render_connect_attribute() {
		if ( $this->connect ) {
			echo ' data-connected-control="' . esc_attr( $this->connect ) . '"';
			echo ' data-inherit="' . esc_attr( $this->ast_inherit ) . '"';
		}
		if ( $this->variant ) {
			echo ' data-connected-variant="' . esc_attr( $this->variant ) . '"';
			echo ' data-inherit="' . esc_attr( $this->ast_inherit ) . '"';
		}

		echo ' data-value="' . esc_attr( $this->value() ) . '"';
		echo ' data-name="' . esc_attr( $this->name ) . '"';
	}

	/**
	 * Renders a font control.
	 *
	 * @since 1.0.16 Added the action 'topstore_pro_customizer_font_list' to support custom fonts.
	 * @since 1.0.0
	 * @param  string $default Inherit/Default.
	 * @access protected
	 * @return void
	 */
	protected function render_font( $default ) {
		echo '<label>';
		$this->render_content_title();
		echo '</label>';
		echo '<select ';
		$this->link();
		$this->render_connect_attribute();
		echo '>';

		echo '</select>';
	}

	/**
	 * Renders a font weight control.
	 *
	 * @since 1.0.0
	 * @param  string $default Inherit/Default.
	 * @access protected
	 * @return void
	 */
	protected function render_font_weight( $default ) {
		echo '<label>';
		$this->render_content_title();
		echo '</label>';
		echo '<select ';
		$this->link();
		$this->render_connect_attribute();
		echo '>';
		if ( 'normal' == $this->value() ) {
			echo '<option value="normal" ' . selected( 'normal', $this->value(), false ) . '>' . esc_attr( $default ) . '</option>';
		} else {
			echo '<option value="inherit" ' . selected( 'inherit', $this->value(), false ) . '>' . esc_attr( $default ) . '</option>';
		}
		$selected       = '';
		$selected_value = $this->value();
		$all_fonts      = $this->ast_all_font_weight;

		foreach ( $all_fonts as $key => $value ) {
			if ( $key == $selected_value ) {
				$selected = ' selected = "selected" ';
			} else {
				$selected = '';
			}
			// Exclude all italic values.
			if ( strpos( $key, 'italic' ) === false ) {
				echo '<option value="' . esc_attr( $key ) . '"' . esc_attr( $selected ) . '>' . esc_attr( $value ) . '</option>';
			}
		}
		echo '</select>';
	}

	/**
	 * Renders a font variant control.
	 *
	 * @since 1.5.2
	 * @param  string $default Inherit/Default.
	 * @access protected
	 * @return void
	 */
	protected function render_font_variant( $default ) {
		echo '<label>';
		$this->render_content_title();
		echo '</label>';
		echo '<select ';
		$this->link();
		$this->render_connect_attribute();
		echo ' multiple >';
		$values = explode( ',', $this->value() );
		foreach ( $values as $key => $value ) {
			echo '<option value="' . esc_attr( $value ) . '" selected="selected" >' . esc_html( $value ) . '</option>';
		}
		echo '<input class="bigstr-font-variant-hidden-value" type="hidden" value="' . esc_attr( $this->value() ) . '">';
		echo '</select>';
		echo '<span class="ast-control-tooltip dashicons dashicons-editor-help ast-variant-description" title="Only selected Font Variants will be loaded from Google Fonts."></span>';
	}

	/**
	 * Refresh the parameters passed to the JavaScript via JSON.
	 *
	 * @see WP_Customize_Control::to_json()
	 */
	public function to_json() {
		parent::to_json();

		$this->json['label']       = esc_html( $this->label );
		$this->json['description'] = $this->description;
		$this->json['name']        = $this->name;
		$this->json['value']       = $this->value();
	}

	/**
	 * An Underscore (JS) template for this control's content (but not its container).
	 *
	 * Class variables for this control class are available in the `data` JS object;
	 * export custom variables by overriding {@see WP_Customize_Control::to_json()}.
	 *
	 * @see WP_Customize_Control::print_template()
	 *
	 * @access protected
	 */
	protected function content_template() {

		?>

		<label>
		<# if ( data.label ) { #>
			<span class="customize-control-title">{{{data.label}}}</span>
		<# } #>

		</label>
		<select data-inherit="<?php echo $this->ast_inherit; ?>" <?php $this->link(); ?> class={{ data.font_type }} data-name={{ data.name }}
		data-value="{{data.value}}" 

		<# if ( data.connect ) { #>
			data-connected-control={{ data.connect }}
		<# } #>
		<# if ( data.variant ) { #>
			data-connected-variant="{{data.variant}}"; 
		<# } #>

		>
		</select>

		<?php
	}
}
