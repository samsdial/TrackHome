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
<section id="intro" class="bgi intro" style="background-image:url('<?php bloginfo('template_directory') ?>/images/banners/bgi-intro.png')">
	<div class="container">
		<div class="row align-items-center ">
			<div class="col-12 col-lg-6 order-2 order-lg-1"></div>
			<div class="col-12 col-lg-6 order-1 order-lg-2">
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
<section id="app" class="bgi app" style="background-image:url('<?php bloginfo('template_directory') ?>/images/banners/bgi-app.png')">
	<ul class="js-app slider-app">
		<li>
			<div class="container">
				<div class="row align-items-lg-center">
					<div class="col-12 col-lg-6">
						<div class="box box-app box-app-image">
							<figure class="item item-01"><img class="img-fluid" src="<?php bloginfo('template_directory') ?>/images/theme/cel-01.png" alt=""></figure>
							<figure class="item item-02"><img class="img-fluid" src="<?php bloginfo('template_directory') ?>/images/theme/cel-02.png" alt=""></figure>
						</div>
					</div>
					<div class="col-12 col-lg-6">
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
							<ul class="inline-list-grid my-5">
								<li>
									<img class="img-fluid" src="<?php bloginfo('template_directory') ?>/images/theme/logo-apple-store.png" alt="">
								</li>
								<li>
									<img class="img-fluid" src="<?php bloginfo('template_directory') ?>/images/theme/logo-apple-store.png" alt="">
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</li>
		<li>
			<div class="container">
				<div class="row align-items-lg-center">
					<div class="col-12 col-lg-6">
						<div class="box box-app box-app-image">
							<figure class="item item-01"><img class="img-fluid" src="<?php bloginfo('template_directory') ?>/images/theme/cel-01.png" alt=""></figure>
							<figure class="item item-02"><img class="img-fluid" src="<?php bloginfo('template_directory') ?>/images/theme/cel-02.png" alt=""></figure>
						</div>
					</div>
					<div class="col-12 col-lg-6">
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
							<ul class="inline-list-grid my-5">
								<li>
									<img class="img-fluid" src="<?php bloginfo('template_directory') ?>/images/theme/logo-apple-store.png" alt="">
								</li>
								<li>
									<img class="img-fluid" src="<?php bloginfo('template_directory') ?>/images/theme/logo-apple-store.png" alt="">
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</li>
		<li>
			<div class="container">
				<div class="row align-items-lg-center">
					<div class="col-12 col-lg-6">
						<div class="box box-app box-app-image">
							<figure class="item item-01"><img class="img-fluid" src="<?php bloginfo('template_directory') ?>/images/theme/cel-01.png" alt=""></figure>
							<figure class="item item-02"><img class="img-fluid" src="<?php bloginfo('template_directory') ?>/images/theme/cel-02.png" alt=""></figure>
						</div>
					</div>
					<div class="col-12 col-lg-6">
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
							<ul class="inline-list-grid my-5">
								<li>
									<img class="img-fluid" src="<?php bloginfo('template_directory') ?>/images/theme/logo-apple-store.png" alt="">
								</li>
								<li>
									<img class="img-fluid" src="<?php bloginfo('template_directory') ?>/images/theme/logo-apple-store.png" alt="">
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</li>
	</ul>

</section>
<!-- APP END-->
<!-- RACE -->
<section id="race" class="race">
	<ul class="js-race">
		<li>
			<div class="bgi racer" style="background-image:url('<?php bloginfo('template_directory') ?>/images/banners/bgi-race-01.png')">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-12 col-lg-6"></div>
						<div class="col-12 col-lg-6">
							<div class="box box-general box-racer">
								<div class="title text-uppercase mb-2">
									<h2>
										CRITERIUMS
									</h2>
								</div>
								<div class="subtitle mb-3">
									<h2>
										<span>Compite en grandes carreras</span>
									</h2>
								</div>
								<div class="paragraf">
									<p class="c">
										Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis, eligendi. <b>Enim praesentium eos fuga suscipit!</b>
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</li>
		<li>
			<div class="bgi racer" style="background-image:url('<?php bloginfo('template_directory') ?>/images/banners/bgi-race-01.png')">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-12 col-lg-6"></div>
						<div class="col-12 col-lg-6">
							<div class="box box-general box-racer">
								<div class="title text-uppercase mb-2">
									<h2>
										CRITERIUMS
									</h2>
								</div>
								<div class="subtitle mb-3">
									<h2>
										<span>Compite en grandes carreras</span>
									</h2>
								</div>
								<div class="paragraf">
									<p class="c">
										Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis, eligendi. <b>Enim praesentium eos fuga suscipit!</b>
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</li>
	</ul>
</section>
<!-- RACE END-->
<!-- MEMBER -->
<section id="member" class="bgi member" style="background-image:url('<?php bloginfo('template_directory') ?>/images/banners/bgi-member.png')">
	<div class="container">
		<div class="row">
			<div class="col-12 my-5">
				<div class="box box-member box-member-intro">
					<div class="title text-center">
						<h2>
						 	Para los deportistas de Fin de semana y para los que dan el todo por el todo.
						</h2>
					</div>
				</div>
			</div>
		</div>
		<div class="row align-items-center min-row pb-5">
			<div class="col-12 col-lg-4">
				<div class="box box-member box-member-max">
					<div class="title text-uppercase">
						<h2>
						 	Mem <br>
						 	Bre <br>
						 	Sia
						</h2>
					</div>
				</div>
			</div>
			<div class="col-12 col-lg-8">
				<div class="box box-member box-member-table">
					<ul class="inline-list-grid intro mb-3">
						<li class="w-70"><span></span></li>
						<li>
							<i class="icon icon-diamon m-2"></i>
							<h2>
								Diamond
							</h2>
						</li>
						<li>
							<i class="icon icon-gold m-2"></i>
							<h2>
								Gold
							</h2>
						</li>
					</ul>
					<ul class="inline-list-grid content mb-3">
						<li class="w-70">
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, dolore?
							</p>
						</li>
						<li class="text-center"><i class="icon icon-check"></i></li>
						<li class="text-center"><i class="icon icon-check"></i></li>
					</ul>
					<ul class="inline-list-grid content mb-3">
						<li class="w-70">
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, dolore?
							</p>
						</li>
						<li class="text-center"><i class="icon icon-check"></i></li>
						<li class="text-center"><i class="icon icon-check"></i></li>
					</ul>
					<ul class="inline-list-grid content mb-3">
						<li class="w-70">
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, dolore?
							</p>
						</li>
						<li class="text-center"><i class="icon icon-check"></i></li>
						<li class="text-center"><i class="icon icon-check"></i></li>
					</ul>
					<ul class="inline-list-grid content mb-3">
						<li class="w-70">
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, dolore?
							</p>
						</li>
						<li class="text-center"><i class="icon icon-check"></i></li>
						<li class="text-center"><i class="icon icon-check"></i></li>
					</ul>
				</div>
			</div>
		</div>
	</div>

</section>
<!-- MEMBER END-->
<!-- PEOPLE -->
<section id="people" class="bgi people" style="background-image:url('<?php bloginfo('template_directory') ?>/images/banners/bgi-people.png')">
	<div class="container">
		<div class="row py-5">
			<ul class="js-list-people">
				<li>
					<div class="box box-people">
						<figure><img class="img-fluid " src="<?php bloginfo('template_directory') ?>/images/theme/people-1.png" alt="people"></figure>
						<div class="content">
							<div class="paragraf">
								<p>
									Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iure sed amet hic cumque voluptate repudiandae, voluptatem, saepe corrupti sequi neque tempora! Quasi pariatur aliquid officia consectetur quam temporibus, a recusandae.
								</p>
							</div>
							<div class="title">
								<h2>
									Martin Gómez
								</h2>
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="box box-people">
						<figure><img class="img-fluid " src="<?php bloginfo('template_directory') ?>/images/theme/people-1.png" alt="people"></figure>
						<div class="content">
							<div class="paragraf">
								<p>
									Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quae quisquam rerum ducimus quaerat eaque natus.
								</p>
							</div>
							<div class="title">
								<h2>
									Martin Gómez
								</h2>
							</div>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</div>
</section>
<!-- PEOPLE END-->
<!-- PARTNERS -->
<section id="partners" class="partners">
	<div class="container">
		<div class="row py-5">
			<ul class="js-list-partners w-100">
				<li class="align-middle">
					<div class="box box-partners px-4">
						<img class="img-fluid " src="<?php bloginfo('template_directory') ?>/images/theme/logo-01.png" alt="people">
					</div>
				</li>
				<li class="align-middle">
					<div class="box box-partners px-4">
						<img class="img-fluid " src="<?php bloginfo('template_directory') ?>/images/theme/logo-02.png" alt="people">
					</div>
				</li>
				<li class="align-middle">
					<div class="box box-partners px-4">
						<img class="img-fluid " src="<?php bloginfo('template_directory') ?>/images/theme/logo-03.png" alt="people">
					</div>
				</li>
				<li class="align-middle">
					<div class="box box-partners px-4">
						<img class="img-fluid" src="<?php bloginfo('template_directory') ?>/images/theme/logo-04.png" alt="people">
					</div>
				</li>
			</ul>
		</div>
	</div>
</section>
<!-- PARTNERS END-->
<?php
get_footer();
