<?php
/**
 * The Footer widget areas
 *
 * @package Urbi
 */

?>
<aside class="footer-sidebar" role="complementary">
	<div class="footer-sidebar__widgets">
<?php
if ( ! function_exists( 'dynamic_sidebar' ) || ! dynamic_sidebar( 'footer-widgets' ) ) {
	echo '';
}
?>
	</div>
</aside>
