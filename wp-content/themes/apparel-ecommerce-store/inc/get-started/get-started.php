<?php
add_action( 'admin_menu', 'apparel_ecommerce_store_getting_started' );
function apparel_ecommerce_store_getting_started() {
	add_theme_page( esc_html__('Get Started', 'apparel-ecommerce-store'), esc_html__('Get Started', 'apparel-ecommerce-store'), 'edit_theme_options', 'apparel-ecommerce-store-guide-page', 'apparel_ecommerce_store_test_guide');
}

// Add a Custom CSS file to WP Admin Area
function apparel_ecommerce_store_admin_theme_style() {
   wp_enqueue_style('custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/get-started/get-started.css');
}
add_action('admin_enqueue_scripts', 'apparel_ecommerce_store_admin_theme_style');

//guidline for about theme
function apparel_ecommerce_store_test_guide() { 
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( 'apparel-ecommerce-store' );
?>
<div class="wrapper-info">
	<div class="intro">
			<h3><?php esc_html_e( 'Welcome to Apparel Ecommerce WordPress Theme', 'apparel-ecommerce-store' ); ?></h3>
			<p>Version: <?php echo esc_html($theme['Version']);?></p>
		</div>
	<div class="col-left">
		<div class="started">
			<hr>
			<div class="centerbold">
				<h4><?php esc_html_e('Pro version of our theme', 'apparel-ecommerce-store'); ?></h4>
				<p><?php esc_html_e('Are you exited for our theme? Then we will proceed for pro version of theme.', 'apparel-ecommerce-store'); ?></p>
				<a class="bg-color" href="<?php echo esc_url( APPAREL_ECOMMERCE_STORE_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Buy Now', 'apparel-ecommerce-store'); ?></a>
				<hr>
				<h4><?php esc_html_e('Check Our Demo', 'apparel-ecommerce-store'); ?></h4>
				<p><?php esc_html_e('Here, you can view a live demonstration of our theme.', 'apparel-ecommerce-store'); ?></p>
				<a class="bg-color" href="<?php echo esc_url( APPAREL_ECOMMERCE_STORE_PRO_DEMO ); ?>" target="_blank"><?php esc_html_e('Theme Demo', 'apparel-ecommerce-store'); ?></a>
				<hr>
				<h4><?php esc_html_e('Theme Documentation', 'apparel-ecommerce-store'); ?></h4>
				<p><?php esc_html_e('Need more details? Please check our full documentation for detailed theme setup.', 'apparel-ecommerce-store'); ?></p>
				<a href="<?php echo esc_url( APPAREL_ECOMMERCE_STORE_THEME_DOC ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'apparel-ecommerce-store'); ?></a>
				<hr>
				<h4><?php esc_html_e('Need Help?', 'apparel-ecommerce-store'); ?></h4>
				<p><?php esc_html_e('Go to our support forum to help you out in case of queries and doubts regarding our theme.', 'apparel-ecommerce-store'); ?></p>
				<a href="<?php echo esc_url( APPAREL_ECOMMERCE_STORE_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Support', 'apparel-ecommerce-store'); ?></a>
				<hr>
				<h4><?php esc_html_e('Leave us a review', 'apparel-ecommerce-store'); ?></h4>
				<p><?php esc_html_e('Are you enjoying our theme? We would love to hear your feedback.', 'apparel-ecommerce-store'); ?></p>
				<a href="<?php echo esc_url( APPAREL_ECOMMERCE_STORE_REVIEW ); ?>" target="_blank"><?php esc_html_e('Review', 'apparel-ecommerce-store'); ?></a>
			</div>
		</div>
	</div>
	<div class="col-right">
		<div class="col-left-inner"> 
			<img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/get-started/images/screenshot.png" alt="" />
		</div>
	</div>
</div>
<?php } ?>