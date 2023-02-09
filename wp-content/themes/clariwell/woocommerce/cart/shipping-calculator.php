<?php
/**
 * Shipping Calculator
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.5.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

if ( get_option( 'woocommerce_enable_shipping_calc' ) === 'no' || ! WC()->cart->needs_shipping() ) {
	return;
}

?>

<?php do_action( 'woocommerce_before_shipping_calculator' ); ?>

<form class="shipping_calculator last-paragraph-no-margin" action="<?php echo esc_url( WC()->cart->get_cart_url() ); ?>" method="post">

	<p><a href="#" class="shipping-calculator-button"><?php esc_html_e( 'Calculate Shipping', 'clariwell' ); ?></a></p>

	<section class="shipping-calculator-form" style="display:none;">

		<p class="form-row form-row-wide" id="calc_shipping_country_field">
			<select name="calc_shipping_country" id="calc_shipping_country" class="country_to_state cal_shipping" rel="calc_shipping_state">
				<option value=""><?php esc_html_e( 'Select a country&hellip;', 'clariwell' ); ?></option>
				<?php
					foreach( WC()->countries->get_shipping_countries() as $key => $value ) {
						echo '<option value="' . esc_attr( $key ) . '"' . selected( WC()->customer->get_shipping_country(), esc_attr( $key ), false ) . '>' . esc_html( $value ) . '</option>';
                }
				?>
			</select>
		</p>
<?php if ( apply_filters( 'woocommerce_shipping_calculator_enable_state', true ) ) : ?>
		<p class="form-row form-row-wide" id="calc_shipping_state_field">
			<?php
				$current_cc = WC()->customer->get_shipping_country();
				$current_r  = WC()->customer->get_shipping_state();
				$states     = WC()->countries->get_states( $current_cc );

				// Hidden Input
				if ( is_array( $states ) && empty( $states ) ) {

					?><input type="hidden" name="calc_shipping_state" id="calc_shipping_state" placeholder="<?php echo esc_attr__( 'State / county', 'clariwell' ); ?>" /><?php

				// Dropdown Input
				} elseif ( is_array( $states ) ) {

					?><span>
						<select name="calc_shipping_state" id="calc_shipping_state" class="cal_shipping" placeholder="<?php echo esc_attr__( 'State / county', 'clariwell' ); ?>">
							<option value=""><?php _e( 'Select a state&hellip;', 'clariwell' ); ?></option>
							<?php
								foreach ( $states as $ckey => $cvalue )
									echo '<option value="' . esc_attr( $ckey ) . '" ' . selected( $current_r, $ckey, false ) . '>' .esc_html( $cvalue ) .'</option>';
							?>
						</select>
					</span><?php

				// Standard Input
				} else {

					?><input type="text" class="input-text" value="<?php echo esc_attr( $current_r ); ?>" placeholder="<?php echo esc_attr__( 'State / county', 'clariwell' ); ?>" name="calc_shipping_state" id="calc_shipping_state" /><?php

				}
			?>
		</p>
		<?php endif; ?>
		<?php if ( apply_filters( 'woocommerce_shipping_calculator_enable_city', true ) ) : ?>

			<p class="form-row form-row-wide" id="calc_shipping_city_field">
				<input type="text" class="input-text" value="<?php echo esc_attr( WC()->customer->get_shipping_city() ); ?>" placeholder="<?php echo esc_attr__( 'City', 'clariwell' ); ?>" name="calc_shipping_city" id="calc_shipping_city" />
			</p>

		<?php endif; ?>

		<?php if ( apply_filters( 'woocommerce_shipping_calculator_enable_postcode', true ) ) : ?>

			<p class="form-row form-row-wide" id="calc_shipping_postcode_field">
				<input type="text" class="input-text cal_shipping " value="<?php echo esc_attr( WC()->customer->get_shipping_postcode() ); ?>" placeholder="<?php echo esc_attr__( 'Postcode / Zip', 'clariwell' ); ?>" name="calc_shipping_postcode" id="calc_shipping_postcode" />
			</p>

		<?php endif; ?>

		<p class="margin-15px-top calc-shipping-btn-margin"><button type="submit" name="calc_shipping" value="1" class="button insignia-button"><?php esc_html_e( 'Update Totals', 'clariwell' ); ?></button></p>

		<?php wp_nonce_field( 'woocommerce-shipping-calculator', 'woocommerce-shipping-calculator-nonce' ); ?>
	</section>
</form>

<?php do_action( 'woocommerce_after_shipping_calculator' ); ?> 