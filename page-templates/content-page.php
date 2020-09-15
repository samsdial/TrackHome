<?php
/**
 * Template Name: Contenido de pagina
 *
 * Template for displaying a page just with the header and footer area and a "naked" content area in between.
 * Good for landingpages and other types of pages where you want to add a lot of custom markup.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );

if ( is_front_page() ) {
	get_template_part( 'global-templates/hero' );
}
?>
<!-- INTRO -->
<!-- PARTNERS -->
<section id="people" class="bgi entry" style="background-image:url('<?php the_sub_field('img_bg_entry'); ?>')">
	<div class="container">
		<div class="row py-5">
			<div class="col align-self-end">
				<div class="title title-entry">
					<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- PARTNERS -->
<section id="people" class="" >
	<div class="container">
		<div class="row py-5 justify-content-center">
			<?php
				while ( have_posts() ) {
					the_post();
					get_template_part( 'loop-templates/content', 'page' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) {
						comments_template();
					}
				}
			?>
		</div>
	</div>
</section>
<!-- PARTNERS END-->
<?php
get_footer();
