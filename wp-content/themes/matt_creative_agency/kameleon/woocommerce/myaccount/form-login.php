<?php
/**
 * Login Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-login.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woothemes.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.6.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>

<?php wc_print_notices(); ?>

<?php do_action( 'woocommerce_before_customer_login_form' ); ?>

<?php if ( get_option( 'woocommerce_enable_myaccount_registration' ) === 'yes' ) : ?>

<div class="col2-set" id="customer_login">

	<div class="col-1 kameleon-accountw kameleon-woo-left-one" id="kameleon-accountw-login">

<?php endif; ?>

		<h2><?php _e( 'Login', 'woocommerce' ); ?></h2>

		<form method="post" class="login">

			<?php do_action( 'woocommerce_login_form_start' ); ?>			
				<input type="text" class="input-text" placeholder="Username or email address" name="username" id="username" value="<?php if ( ! empty( $_POST['username'] ) ) echo esc_attr( $_POST['username'] ); ?>" />
				<input class="input-text" type="password" placeholder="Password" name="password" id="password" />
			
			<?php do_action( 'woocommerce_login_form' ); ?>

			<p class="form-row">
				<?php wp_nonce_field( 'woocommerce-login' ); ?>
				<label for="rememberme" class="inline">
					<input name="rememberme" type="checkbox" id="rememberme" value="forever" /> <?php _e( 'Remember me', 'woocommerce' ); ?>
				</label>
				<input type="submit" class="button" name="login" value="<?php esc_attr_e( 'Login', 'woocommerce' ); ?>" />
			</p>
			<p class="lost_password">
				<a href="<?php echo esc_url( wp_lostpassword_url() ); ?>"><?php _e( 'Lost your password?', 'woocommerce' ); ?></a>
			</p>

			<?php do_action( 'woocommerce_login_form_end' ); ?>

		</form>

<?php if ( get_option( 'woocommerce_enable_myaccount_registration' ) === 'yes' ) : ?>

	</div>

	<div class="col-2 kameleon-accountw kameleon-woo-right-one" id="kameleon-accountw-regsiter">
		<div class="kameleon-accountw-register-insider">
			<h2><?php _e( 'New User', 'woocommerce' ); ?></h2>
			<?php 
			$sy_options = kameleon_get_options_name();
			if(isset($sy_options['w_cc_register_message']) && trim($sy_options['w_cc_register_message'] )!= ""): ?>
				<div class="kameleon-woo-new-message">
					<?php echo $sy_options['w_cc_register_message']; ?>				
				</div>
			<?php endif; ?>	
			
			<form method="post" class="register">

				<?php do_action( 'woocommerce_register_form_start' ); ?>

				<?php if ( 'no' === get_option( 'woocommerce_registration_generate_username' ) ) : ?>						
					<input type="text" class="input-text" name="username" placeholder="Username" id="reg_username" value="<?php if ( ! empty( $_POST['username'] ) ) echo esc_attr( $_POST['username'] ); ?>" />
				<?php endif; ?>
					<input type="email" class="input-text" name="email"  placeholder="Email" id="reg_email" value="<?php if ( ! empty( $_POST['email'] ) ) echo esc_attr( $_POST['email'] ); ?>" />
				<?php if ( 'no' === get_option( 'woocommerce_registration_generate_password' ) ) : ?>
						<input type="password" class="input-text" placeholder="Password" name="password" id="reg_password" />				
				<?php endif; ?>
				
				
				<!-- Spam Trap -->
				<div style="<?php echo ( ( is_rtl() ) ? 'right' : 'left' ); ?>: -999em; position: absolute;"><label for="trap"><?php _e( 'Anti-spam', 'woocommerce' ); ?></label><input type="text" name="email_2" id="trap" tabindex="-1" /></div>

				<?php do_action( 'woocommerce_register_form' ); ?>
				<?php do_action( 'register_form' ); ?>

				<p class="form-row">
					<?php wp_nonce_field( 'woocommerce-register' ); ?>
					<input type="submit" class="button" name="register" value="<?php esc_attr_e( 'Register', 'woocommerce' ); ?>" />
				</p>

				<?php do_action( 'woocommerce_register_form_end' ); ?>

			</form>
		
		</div>

	</div>
</div>
<?php endif; ?>

<?php do_action( 'woocommerce_after_customer_login_form' ); ?>
