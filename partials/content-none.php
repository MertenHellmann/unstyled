<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link    https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Unstyled
 */

?>

<section class="no-results not-found">

	<header class="archive-header">
		<h1 class="archive-title"><?php esc_html_e( 'Nothing Found', 'unstyled' ); ?></h1>
	</header><!-- .archive-header -->

	<div class="page-content">
		<?php
		if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			<p><?php
				printf(
					wp_kses(
					/* translators: 1: link to WP admin new post page. */
						__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'unstyled' ),
						array(
							'a' => array(
								'href' => array(),
							),
						)
					),
					esc_url( admin_url( 'post-new.php' ) )
				);
				?></p>

		<?php elseif ( is_search() ) : ?>

			<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'unstyled' ); ?></p>
			<?php
			get_search_form();

		else : ?>

			<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'unstyled' ); ?></p>
			<?php
			get_search_form();

		endif; ?>
	</div><!-- .page-content -->
	
</section><!-- .no-results -->
