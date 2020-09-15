<?php
/**
 * Template Name: Inicio
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
<section id="intro" class="bgi intro" style="background-image:url('<?php the_field( 'img_intro' ); ?>')">
	<div class="container">
		<div class="row align-items-center ">
			<div class="col-12 col-lg-6 order-2 order-lg-1"></div>
			<div class="col-12 col-lg-6 order-1 order-lg-2">
				<div class="box box-general box-intro" data-aos="fade-left" >
					<?php the_field( 'titulo_intro' ); ?>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- INTRO END-->
<!-- APP -->
<section id="app" class="bgi app" style="background-image:url('<?php the_field( 'img_fondo' ); ?>')">
<?php if( have_rows('slider_app') ): ?>
<ul class="js-app slider-app">
<?php while( have_rows('slider_app') ): the_row();?>
<li>
	<div class="container">
		<div class="row align-items-md-center">
			<div class="col-12 col-md-6">
				<div class="box box-app box-app-image">
					<div class="figure animate__animated animate__bounceIn animate__delay-2s">
						<figure class="item item-01 animate__animated animate__pulse infinite bounce" ><img class="img-fluid" src="<?php the_sub_field('iphone_img'); ?>" alt="iphone"></figure>
						<figure class="item item-02 animate__animated animate__pulse infinite bounce" ><img class="img-fluid" src="<?php the_sub_field('samsung_img'); ?>" alt="samsung"></figure>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-6">
				<div class="box box-general box-app text-uppercase">
					<div class="animate__animated animate__fadeIn animate__delay-2s animate__slower">
						<?php the_sub_field('info_app'); ?>
					</div>
					<ul class="inline-list-grid my-5">
						<li>
							<a href="<?php the_field('app_store', 'option'); ?>" class="">
								<img class="img-fluid mx-auto" data-anijs="if: mouseover, do: pulse animated" src="<?php bloginfo('template_directory') ?>/images/theme/logo-apple-store.png" alt="">
							</a>
						</li>
						<li>
							<a href="<?php the_field('store_google', 'option'); ?>" class="" >
								<img class="img-fluid" data-anijs="if: mouseover, do: pulse animated" src="<?php bloginfo('template_directory') ?>/images/theme/logo-google-play.png" alt="">
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</li>
<?php endwhile; ?>
</ul>
<?php endif; ?>
</section>
<!-- APP END-->
<!-- RACE -->
<section id="race" class="race">
<?php if( have_rows('slider_race') ): ?>
	<ul class="js-race">
		<?php while( have_rows('slider_race') ): the_row();?>
			<li>
				<div class="bgi racer" style="background-image:url('<?php the_sub_field('img_bg_race'); ?>')">
					<div class="container">
						<div class="row align-items-center">
							<div class="col-12 col-lg-6"></div>
							<div class="col-12 col-lg-6">
								<div class="box box-general box-racer">
									<div class="deco mb-3">
										<span class="circle">
											<i class="icon icon-<?php the_sub_field('icon'); ?>"></i>
										</span>
									</div>
									<div class="title text-uppercase mb-2 animate__animated animate__fadeIn animate__delay-2s">
										<h2>
											<?php the_sub_field('title'); ?>
										</h2>
									</div>
									<div class="subtitle mb-3 animate__animated animate__fadeIn animate__delay-3s">
										<h2>
											<span><?php the_sub_field('subtitle'); ?></span>
										</h2>
									</div>
									<div class="paragraf animate__animated animate__fadeIn animate__delay-4s">
										<?php the_sub_field('parrafo'); ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</li>
		<?php endwhile; ?>
	</ul>
<?php endif; ?>
</section>
<!-- RACE END-->
<!-- MEMBER -->
<section id="member" class="bgi member" style="background-image:url('<?php bloginfo('template_directory') ?>/images/banners/bgi-member.png')">
	<div class="container">
		<div class="row">
			<div class="col-12 my-5 py-4">
				<div class="box box-member box-member-intro">
					<!-- <div class="title text-center text-uppercase animate__animated animate__fadeInDown animate__delay-4s" data-anijs="if: mouseover, do: zoomInUp animated"> -->
					<div class="title text-center text-uppercase animate__animated animate__fadeInDown animate__delay-5s animate__slow">
						<?php the_field( 'titulo_member' ); ?>
					</div>
				</div>
			</div>
		</div>
		<div class="row align-items-center min-row pb-5">
			<div class="col-12 col-lg-4">
				<div class="box box-member box-member-max">
					<div class="title text-uppercase d-none d-lg-block animate__animated animate__bounceInLeft animate__delay-5s">
						<h2>
						 	Mem <br>
						 	Bre <br>
						 	Sía
						</h2>
					</div>
					<div class="title text-uppercase text-center d-block d-lg-none">
						<h2>
						 	MemBreSía
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
					<?php if( have_rows('table_member') ): ?>
						<?php while( have_rows('table_member') ): the_row();?>
							<ul class="inline-list-grid content mb-3 animate__animated animate__fadeIn animate__delay-4s">
								<li class="w-70">
									<p>
										<?php the_sub_field('item_tabla'); ?>
									</p>
								</li>
								<li class="text-center"><i class="icon icon-<?php the_sub_field('diamon'); ?>"></i></li>
								<li class="text-center"><i class="icon icon-<?php the_sub_field('gold'); ?>"></i></li>
							</ul>
						<?php endwhile; ?>
					<?php endif; ?>
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
			<div class="col py-5 mb-3">
				<?php if( have_rows('people') ): ?>
					<ul class="js-people w-100">
					<?php while( have_rows('people') ): the_row();?>
						<li>
							<div class="box box-people"  data-anijs="if: mouseover, do: pulse animated" >
								<figure><img class="img-fluid " src="<?php the_sub_field('img_people'); ?>" alt="people"></figure>
								<div class="content">
									<div class="paragraf">
										<p>
											<?php the_sub_field('text-comment'); ?>
										</p>
									</div>
									<div class="title">
										<h2>
											<?php the_sub_field('autor'); ?>
										</h2>
									</div>
								</div>
							</div>
						</li>
					<?php endwhile; ?>
					</ul>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>
<!-- PEOPLE END-->
<!-- PARTNERS -->
<section id="partners" class="partners">
	<div class="container">
		<div class="row py-5">
			<?php if( have_rows('lista_partners') ): ?>
				<ul class="js-partners w-100">
					<?php while( have_rows('lista_partners') ): the_row();?>
						<div class="box box-partners px-4">
							<img class="img-fluid " src="<?php the_sub_field('logo'); ?>" alt="partner">
						</div>
					<?php endwhile; ?>
				</ul>
			<?php endif; ?>
		</div>
	</div>
</section>
<!-- PARTNERS END-->
<?php
get_footer();
