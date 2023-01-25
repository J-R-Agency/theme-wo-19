<?php
/**
 * Partial template for content in page.php
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$theme_colour = get_field('theme_colour');

?>
<?php
$download_cta_text = get_field('download_cta_text');
$download_file = get_field('download_file');
if( $download_file ): 
	$link_url = $download_file['url'];
	$link_title = $download_cta_text;
	?>
	<a class="wo-btn <?php echo $theme_colour; ?> wo-btn--standard-content" href="<?php echo esc_url($link_url); ?>" target="_blank"><?php echo esc_html($download_cta_text); ?></a>
<?php endif;
unset($download_file);
?>