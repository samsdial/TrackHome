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
				<div class="row align-items-md-center">
					<div class="col-12 col-md-6">
						<div class="box box-app box-app-image">
							<figure class="item item-01 " ><img class="img-fluid" src="<?php bloginfo('template_directory') ?>/images/theme/cel-01.png" alt=""></figure>
							<figure class="item item-02" ><img class="img-fluid" src="<?php bloginfo('template_directory') ?>/images/theme/cel-02.png" alt=""></figure>
						</div>
					</div>
					<div class="col-12 col-md-6">
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
									<a href="" class="">
										<img class="img-fluid" src="<?php bloginfo('template_directory') ?>/images/theme/logo-apple-store.png" alt="">
									</a>
								</li>
								<li>
									<a href="" class="">
										<img class="img-fluid" src="<?php bloginfo('template_directory') ?>/images/theme/logo-google-play.png" alt="">
									</a>
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
							<figure class="item item-01"><img class="img-fluid" src="<?php bloginfo('template_directory') ?>/images/theme/cel-03.png" alt=""></figure>
							<figure class="item item-02"><img class="img-fluid" src="<?php bloginfo('template_directory') ?>/images/theme/cel-04.png" alt=""></figure>
						</div>
					</div>
					<div class="col-12 col-lg-6">
						<div class="box box-general box-app text-uppercase">
							<h2>
								<span>
									Gana
									<br>
									premios
								</span>
								<br>
								Diseñada
								conectando los registros de tus actividades de Garmin, Wahoo y Polar.
							</h2>
							<ul class="inline-list-grid my-5">
								<li>
									<a href="" class="">
										<img class="img-fluid" src="<?php bloginfo('template_directory') ?>/images/theme/logo-apple-store.png" alt="">
									</a>
								</li>
								<li>
									<a href="" class="">
										<img class="img-fluid" src="<?php bloginfo('template_directory') ?>/images/theme/logo-google-play.png" alt="">
									</a>
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
							<figure class="item item-01"><img class="img-fluid" src="<?php bloginfo('template_directory') ?>/images/theme/cel-05.png" alt=""></figure>
							<figure class="item item-02"><img class="img-fluid" src="<?php bloginfo('template_directory') ?>/images/theme/cel-06.png" alt=""></figure>
						</div>
					</div>
					<div class="col-12 col-lg-6">
						<div class="box box-general box-app text-uppercase">
							<h2>
							<span class="">
								Participa en la liga virtual,</span>
								sube de nivel y compite con corredores de tu misma categoría.
							</h2>
							<ul class="inline-list-grid my-5">
								<li>
									<a href="" class="">
										<img class="img-fluid" src="<?php bloginfo('template_directory') ?>/images/theme/logo-apple-store.png" alt="">
									</a>
								</li>
								<li>
									<a href="" class="">
										<img class="img-fluid" src="<?php bloginfo('template_directory') ?>/images/theme/logo-google-play.png" alt="">
									</a>
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
							<figure class="item item-01"><img class="img-fluid" src="<?php bloginfo('template_directory') ?>/images/theme/cel-07.png" alt=""></figure>
							<figure class="item item-02"><img class="img-fluid" src="<?php bloginfo('template_directory') ?>/images/theme/cel-08.png" alt=""></figure>
						</div>
					</div>
					<div class="col-12 col-lg-6">
						<div class="box box-general box-app text-uppercase">
							<h2>
								Conviértete en <span class="">el campeón de los Criteriums</span> y el Capo de la temporada.
							</h2>
							<ul class="inline-list-grid my-5">
								<li>
									<a href="" class="">
										<img class="img-fluid" src="<?php bloginfo('template_directory') ?>/images/theme/logo-apple-store.png" alt="">
									</a>
								</li>
								<li>
									<a href="" class="">
										<img class="img-fluid" src="<?php bloginfo('template_directory') ?>/images/theme/logo-google-play.png" alt="">
									</a>
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
							<figure class="item item-01"><img class="img-fluid" src="<?php bloginfo('template_directory') ?>/images/theme/cel-09.png" alt=""></figure>
							<figure class="item item-02"><img class="img-fluid" src="<?php bloginfo('template_directory') ?>/images/theme/cel-010.png" alt=""></figure>
						</div>
					</div>
					<div class="col-12 col-lg-6">
						<div class="box box-general box-app text-uppercase">
							<h2>
								Compite contra ti mismo y gana recompensas por romper tus <span class="">propios récords.</span>
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
			<div class="bgi racer" style="background-image:url('<?php bloginfo('template_directory') ?>/images/banners/bgi-race-04.png')">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-12 col-lg-6"></div>
						<div class="col-12 col-lg-6">
							<div class="box box-general box-racer">
								<div class="deco mb-3">
									<span class="circle">
										<i class="icon icon-cup"></i>
									</span>
								</div>
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
									<p>
										DISEÑADAS en circuitos locales. Gana grandes premios y acumula puntos para ser el capo de la temporada.
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
								<div class="deco mb-3">
									<span class="circle">
										<i class="icon icon-ranking"></i>
									</span>
								</div>
								<div class="title text-uppercase mb-2">
									<h2>
										RANKING
									</h2>
								</div>
								<div class="subtitle mb-3">
									<h2>
										<span>Compite por el maillot general,</span>
									</h2>
								</div>
								<div class="paragraf">
									<p>
										el de montaña, Sprint y el más combativo. Suma puntos para ser el capo de la temporada.
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</li>
		<li>
			<div class="bgi racer" style="background-image:url('<?php bloginfo('template_directory') ?>/images/banners/bgi-race-02.png')">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-12 col-lg-6"></div>
						<div class="col-12 col-lg-6">
							<div class="box box-general box-racer">
								<div class="deco mb-3">
									<span class="circle">
										<i class="icon icon-race"></i>
									</span>
								</div>
								<div class="title text-uppercase mb-2">
									<h2>
										CARRERA
									</h2>
								</div>
								<div class="subtitle mb-3">
									<h2>
										<span>Compite contra ti mismo: </span>
									</h2>
								</div>
								<div class="paragraf">
									<p>
										bate tus propias marcas, escala más, ve más lejos, se más rápido.
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</li>
		<li>
			<div class="bgi racer" style="background-image:url('<?php bloginfo('template_directory') ?>/images/banners/bgi-race-03.png')">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-12 col-lg-6"></div>
						<div class="col-12 col-lg-6">
							<div class="box box-general box-racer">
								<div class="deco mb-3">
									<span class="circle">
										<i class="icon icon-club"></i>
									</span>
								</div>
								<div class="title text-uppercase mb-2">
									<h2>
										CLUB
									</h2>
								</div>
								<div class="subtitle mb-3">
									<h2>
										<span>Crea tus propios eventos </span>
									</h2>
								</div>
								<div class="paragraf">
									<p>
										y compite con tu equipo. Clasifica por distancia, metros escalados, tiempo de recorrido y cantidad de actividades registradas.
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
			<div class="col-12 my-5 py-4">
				<div class="box box-member box-member-intro">
					<div class="title text-center text-uppercase">
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
					<div class="title text-uppercase d-none d-lg-block">
						<h2>
						 	Mem <br>
						 	Bre <br>
						 	Sia
						</h2>
					</div>
					<div class="title text-uppercase text-center d-block d-lg-none">
						<h2>
						 	MemBreSia
						</h2>
					</div>
				</div>
			</div>
			<div class="col-12 col-lg-8 pb-5">
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
								Tener todas las métricas en el App.
							</p>
						</li>
						<li class="text-center"><i class="icon icon-check"></i></li>
						<li class="text-center"><i class="icon icon-check"></i></li>
					</ul>
					<ul class="inline-list-grid content mb-3">
						<li class="w-70">
							<p>
								% de descuento por superar sus personal récords en un periodo especifico (RP)
							</p>
						</li>
						<li class="text-center"><i class="icon icon-check"></i></li>
						<li class="text-center"><i class="icon icon-check"></i></li>
					</ul>
					<ul class="inline-list-grid content mb-3">
						<li class="w-70">
							<p>
								Rankeo en la tabla general (Montaña, distancia, tiempo en movimiento, ranking en tabla general, cantidad de salidas, Avg Pace….)
							</p>
						</li>
						<li class="text-center"><i class="icon icon-check"></i></li>
						<li class="text-center"><i class="icon icon-check"></i></li>
					</ul>
					<ul class="inline-list-grid content mb-3">
						<li class="w-70">
							<p>
								Ganar puntos deEXPERIENCIA para redimir por productos de la tienda oficial.
							</p>
						</li>
						<li class="text-center"><i class="icon icon-check"></i></li>
						<li class="text-center"><i class="icon icon-check"></i></li>
					</ul>
					<ul class="inline-list-grid content mb-3">
						<li class="w-70">
							<p>
								Cupo en los Crits de TRACKITUP.
							</p>
						</li>
						<li class="text-center"><i class="icon icon-check"></i></li>
						<li class="text-center"><i class="icon icon-nocheck"></i></li>
					</ul>
					<ul class="inline-list-grid content mb-3">
						<li class="w-70">
							<p>
								Rank y premiación por categorías
							</p>
						</li>
						<li class="text-center"><i class="icon icon-check"></i></li>
						<li class="text-center"><i class="icon icon-nocheck"></i></li>
					</ul>
					<ul class="inline-list-grid content mb-3">
						<li class="w-70">
							<p>
								Rank y premiación por categorías
							</p>
						</li>
						<li class="text-center"><i class="icon icon-check"></i></li>
						<li class="text-center"><i class="icon icon-nocheck"></i></li>
					</ul>
					<ul class="inline-list-grid content mb-3">
						<li class="w-70">
							<p>
								Premiación retos generales (Montaña, Sprint y combatividad)
							</p>
						</li>
						<li class="text-center"><i class="icon icon-check"></i></li>
						<li class="text-center"><i class="icon icon-nocheck"></i></li>
					</ul>
					<ul class="inline-list-grid content mb-3">
						<li class="w-70">
							<p>
								Creación del CLUB para rankear entre amigos
							</p>
						</li>
						<li class="text-center"><i class="icon icon-check"></i></li>
						<li class="text-center"><i class="icon icon-nocheck"></i></li>
					</ul>
					<ul class="inline-list-grid content mb-3">
						<li class="w-70">
							<p>
								Creación de segmentos para rankear y ganar KOM
							</p>
						</li>
						<li class="text-center"><i class="icon icon-check"></i></li>
						<li class="text-center"><i class="icon icon-nocheck"></i></li>
					</ul>
					<ul class="inline-list-grid content mb-3">
						<li class="w-70">
							<p>
								Descuento con código para miembros del CLUB.
							</p>
						</li>
						<li class="text-center"><i class="icon icon-check"></i></li>
						<li class="text-center"><i class="icon icon-nocheck"></i></li>
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
		<div class="row">
			<div class="col py-5">
			<ul class="js-people w-100">
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
				<li>
					<div class="box box-people">
						<figure><img class="img-fluid " src="<?php bloginfo('template_directory') ?>/images/theme/people-2.png" alt="people"></figure>
						<div class="content">
							<div class="paragraf">
								<p>
									Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quae quisquam rerum ducimus quaerat eaque natus.
								</p>
							</div>
							<div class="title">
								<h2>
									Camila Gomez
								</h2>
							</div>
						</div>
					</div>
				</li>
			</ul>
			</div>
		</div>
	</div>
</section>
<!-- PEOPLE END-->
<!-- PARTNERS -->
<section id="partners" class="partners">
	<div class="container">
		<div class="row py-5">
			<ul class="js-partners w-100">
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
