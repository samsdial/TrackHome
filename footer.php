<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>
<footer id="social" class="py-5">
	<div class="container">
		<div class="row">
			<div class="col-md-8 mx-auto">
				<ul class="list-group list-group-horizontal list-social justify-content-center">
					<li>
						<a href="" class="d-block px-3 px-md-5">
							<span class="icon icon-face"></span>
						</a>
					</li>
					<li>
						<a href="" class="d-block px-3 px-md-5">
							<span class="icon icon-insta"></span>
						</a>
					</li>
					<li>
						<a href="" class="d-block px-3 px-md-5">
							<span class="icon icon-twt"></span>
						</a>
					</li>
				</ul>
				<div class="box box-footer d-block text-center my-5">
					<p>
						© 2020 Copyright made with all right reserved
					</p>
				</div>
			</div>
		</div>
		<div class="col-12 text-center py-4">
			<span class="logo logo_site-gray"></span>
		</div>
	</div>
</footer>


<?php wp_footer(); ?>

</body>

</html>

