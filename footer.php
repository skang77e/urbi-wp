<?php
/**
 * Third party plugins that hijack the theme will call wp_footer() to get the footer template.
 * We use this to end our output buffer (started in header.php) and render into the view/page-plugin.twig template.
 *
 * @package Urbi
 */

$context = $GLOBALS['timberContext'];
if ( ! isset( $context ) ) {
	throw new \Exception( 'Timber context not set in footer.' );
}
$context['content'] = ob_get_contents();
ob_end_clean();
$templates = array( 'page-plugin.twig' );
Timber::render( $templates, $context );
