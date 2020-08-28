<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Style Outlet
 */

?>

<section class="no-results not-found">
	<header class="page-header">
		<h1 class="page-title"><?php esc_html_e( 'Nothing Found', 'style-outlet' ); ?></h1>
	</header><!-- .page-header -->

	<div class="page-content">
		<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
			<p><?php printf('%1$s <a href="%2$s">%3$s</a>',__('Ready to publish your first post?','style-outlet'),esc_url( admin_url( 'post-new.php' ) ), __('Get Started Here','style-outlet'));?></p>
		<?php elseif ( is_search() ) : ?>

			<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'style-outlet' ); ?></p>
			<?php
				get_search_form();

		else : ?>

			<p><?php _e( 'It seems we can\'t find what you\'re looking for. Perhaps searching can help.', 'style-outlet' ); ?></p>
			<?php get_search_form(); 

		endif; ?>
	</div><!-- .page-content -->
</section><!-- .no-results -->
