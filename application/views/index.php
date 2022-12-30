<!-- Intro Slider-->
<header id="Carousel-intro" data-ride="carousel" class="intro carousel carousel-big slide">
	<!-- Indicators-->
	<ol class="carousel-indicators">
		<li data-target="#Carousel-intro" data-slide-to="0" class="active"></li>
		<li data-target="#Carousel-intro" data-slide-to="1"></li>
		<li data-target="#Carousel-intro" data-slide-to="2"></li>
	</ol>
	<div class="carousel-inner">
		<div class="item active">
			<div style="background-image: url('<?= base_url('assets/'); ?>img/header/slider-1.jpg');" class="fill">
				<video src="<?= base_url('assets/video/'); ?>web-banner-r17kelola.webm" autoplay loop muted style="
                position: fixed;
                left: 50%;
                transform: translateX(-50%);
                bottom: 0;
                min-width: 100%;
                min-height: 100%;
              "></video>
				<div class="intro-body">
					<h1 class="wow fadeInDown">
						Managing your <br />
						IT Complexity
					</h1>
					<div data-wow-delay=".6s" class="scroll-btn hidden-xs wow fadeInDown">
						<a href="#about" class="page-scroll"><span class="mouse"><span class="weel"><span></span></span></span></a>
					</div>
				</div>
			</div>
		</div>
		<div class="item">
			<div style="background-image: url('<?= base_url('assets/'); ?>img/header/slider-2.jpg');" class="fill">
				<div class="intro-body">
					<a href="https://www.youtube.com/watch?v=gsVydLMf9XE" data-rel="video" class="swipebox-video"><i class="icon icon-big ion-ios-play-outline wow fadeInUp"></i>
						<h2 class="wow fadeInDown">Our Story</h2>
					</a>
				</div>
			</div>
		</div>
		<div class="item">
			<div style="background-image: url('<?= base_url('assets/'); ?>img/header/slider-3.jpg');" class="fill">
				<div class="intro-body">
					<h2 data-wow-delay=".4s" class="wow fadeInDown">Contact Us</h2>
					<ul class="list-inline lead">
						<li>
							<a data-wow-delay=".4s" href="<?= base_url(''); ?>contact-us" class="btn btn-white btn-lg page-scroll wow fadeInRight">Click Here</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- Controls--><a href="#Carousel-intro" data-slide="prev" class="left carousel-control"><span class="icon-prev"></span></a><a href="#Carousel-intro" data-slide="next" class="right carousel-control"><span class="icon-next"></span></a>
</header>

<!-- About Section-->
<section id="about">
	<div class="container wow fadeIn">
		<div class="row">
			<div class="col-lg-10 col-lg-offset-1 text-center">
				<h3 class="">About R17</h3>
				<p class="no-pad text-justify">
					In a competitive world, we turn challenges into achievements.
					Where we lives, where we heading, it’s through our experiences &
					technology. Through years, we bring hopes into a reality, we
					deliver you the happiness & satisfaction by connecting the best
					expertise, ideas & new technology to onboarding you the
					sustainable future.
				</p>
				<p class="mt-4">
					<a href="<?= base_url(''); ?>about" type="button" class="btn btn-blue">More Detail</a>
				</p>
			</div>
		</div>
	</div>
</section>

<!-- clients -->
<section class="section-small">
	<div class="container">
		<div class="row">
			<div class="col">
				<h3 class="text-center">Clients</h3>
				<div class="owl-carousel owl-theme client-carousel">
					<?php foreach ($clients as $client) : ?>
						<div class="item">
							<img src="<?= base_url('assets'); ?>/<?= $client['filename']; ?>" alt="<?= $client['name']; ?>" />
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Section-->
<section>
	<div class="container text-center" id="solution">
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2">
				<h3>Our Solutions</h3>
			</div>
		</div>
		<div class="row">
			<?php foreach ($solutions as $solution) : ?>
				<div class="col-sm-4 solution-item">
					<img class="mb-4" src="<?= base_url('assets/img/solution/' . $solution['filename']); ?>" alt="<?= $solution['name']; ?>" />
					<h5><?= $solution['name']; ?></h5>
					<a class="btn btn-blue btn-more" href="<?= base_url('' . $solution['url']); ?>">More Detail</a>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<!-- Services 2 Section-->
<section class="section-small text-center portfolio-wide">
	<!-- <div class="overlay"></div> -->
	<div class="container" id="technology">
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2">
				<h3>Technology</h3>
			</div>
		</div>
		<div class="techno-wrap">
			<?php foreach ($technologies as $technology) : ?>
				<div class="techno-item">
					<div class="portfolio-item">
						<a href="<?= base_url('' . $technology['url']); ?>"><img src="<?= base_url('assets/img/techno/' . $technology['filename']); ?>" alt="<?= $technology['name']; ?>" />
							<div class="portfolio-overlay">
								<div class="caption">
									<h5><?= $technology['name']; ?></h5>
								</div>
							</div>
						</a>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<!-- Partners -->
<section class="section-small our-partners">
	<div class="container">
		<div class="row">
			<div class="col">
				<h3 class="text-center">Our Partners</h3>
				<div class="wrapper">
					<?php foreach ($partners as $partner) : ?>
						<img src="<?= base_url('assets'); ?>/img/partners/<?= $partner['filename']; ?>" alt="<?= $partner['name']; ?>" />
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>
</section>