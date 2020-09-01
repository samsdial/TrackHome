<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php if ( is_front_page() && is_home() ) : ?>
	<?php get_template_part( 'global-templates/hero' ); ?>
<?php endif; ?>
<!-- INTRO -->
<section class="bgi intro" style="background-image:url('<?php bloginfo('template_directory') ?>/images/banners/bgi-intro.png')">
	<div class="container">
		<div class="row align-items-center ">
			<div class="col"></div>
			<div class="col">
				<div class="box box-general box-intro">
					<h1>
						PASIÓN
						<br>
						<span>POR</span>
						<br>
						COMPETIR
					</h1>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- INTRO END-->
<!-- APP -->
<section class="bgi app" style="background-image:url('<?php bloginfo('template_directory') ?>/images/banners/bgi-app.png')">
	<div class="container">
		<div class="row align-items-center">
			<div class="col"></div>
			<div class="col">
				<div class="box box-general box-app text-uppercase">
					<h2>
						Diseñada
						<br>
						Pensando
						<br>
						en la
						<br>
						<span>Competencia</span>
					</h2>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- APP END-->
<!-- CRITERIUM -->
<section class="criterium"></section>
<!-- CRITERIUM END-->
<!-- MEMBER -->
<section class="member"></section>
<!-- MEMBER END-->
<!-- PEOPLE -->
<section class="people"></section>
<!-- PEOPLE END-->
<!-- PARTNERS -->
<section class="partners"></section>
<!-- PARTNERS END-->
<?php
get_footer();
