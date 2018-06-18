<?php
/**
 * The main template file.
 *
 * @package Caravel_Web_Theme
 */

get_header(); ?>


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<!-- FULLPAGE BEGINS HERE  -->


			<!-- <div class="<?php echo wp_is_mobile() ? 'mobilepage' : 'fullpage'; ?>" id="<?php echo wp_is_mobile() ? 'mobilepage' : 'fullpage'; ?>"> -->
			<div class="fullpage" id="fullpage">

				<section class="hero-container">
					<div name="#" id="#about" class="header-container">
						<h1>Simple, Powerful &
							<br>Efficient Websites.</h1>
						<p>We build modern websites for modern businesses and individuals. No fluff, no over design, no bloat. Fast, elegant,
							and precisely what you need. We will get you where you want to be.
							<strong>Set sail!</strong>
						</p>
					</div>
				</section>


				<section class="second-container">
					<div class="dots-container">
						<div class="dots">
							<img src="<?php echo get_template_directory_uri() . '/assets/3dots.png'?>" alt="Three dots">
						</div>
						<div class="specialization-content">
							<div class="specialization-content-wrapper">
								<p>We specialize in custom Websites built with WordPress. They are designed to be clean, simple and future proof. We
									have helped our clients realize their online voice and increase traffic, conversion and ranking.</p>
								<a href="#contact">
									<p class="dots-cta-p">Find out how we can help you. </p>
								</a>
							</div>
						</div>
					</div>

					<div class="services-container">
						<div class="sliding-background"></div>
						<span class="title-paragraph-container">
							<h2>Services</h2>
							<p>archaic history uniqueness biological bombardment individual phase transition interaction genocide apocalyptic causal
								information shaman avalanche matrix impulse </p>
						</span>
						<div class="bullet-container">
							<div class="left">
								<div class="bullet-point">
									<div class="bullet-blue-line"></div>Front and Backend Development</div>
								<div class="bullet-point">
									<div class="bullet-blue-line"></div>Code Audits</div>
								<div class="bullet-point">
									<div class="bullet-blue-line"></div>Wordpress Streamlining</div>
								<div class="bullet-point">
									<div class="bullet-blue-line"></div>Responsive Web design</div>
							</div>
							<div class="right">
								<div class="bullet-point">
									<div class="bullet-blue-line"></div>UX Content and strategy</div>
								<div class="bullet-point">
									<div class="bullet-blue-line"></div>Logos and Visual Identities</div>
								<div class="bullet-point">
									<div class="bullet-blue-line"></div>Custom Apps</div>
								<div>
								</div>
							</div>
						</div>
				</section>




				<section class="our-work-section">
					<div class="our-work-header">
						<h2>Our Work</h2>
					</div>
					<!-- <div class="our-work-content">
						<p>We are a boutique agency that specializes in custom Websites built with WordPress. They are designed to be clean, simple
							and future proof. We have helped our clients realize their online voice and increased traffic, conversion and ranking.
							Find out how we can help you. You can view some of our recent projects below.
						</p>
					</div> -->
				</section>

				<section class="work-wrapper">

					<div class="laptop"><img src="<?php echo get_template_directory_uri() . '/assets/laptop.jpg'?>" alt="Laptop"></div>

					<div class="work-carousel">

						<?php get_template_part('template-parts/carousel'); ?>

					</div>
				</section>

				<div class="team-background">
					<section class="team-wrapper">
						<h2>The Team</h2>
						<p>Don't be fooled by the smiles, these Navy Seals of code are not guys you would want to get stuck with in a dark alley.</p>
						<div class="team-container">
							<div class="team-top-row">
								<div class="team-single">
									<img id="Sean" alt="Sean-photo" src="<?php echo get_template_directory_uri() . '/assets/Sean.jpg'?>" />
									<h3 class="position">Sean Stobo</br> - Founder, Project Manager</h3>
									<p>human dynamics life Buddha LSD DMT mind-blowing topological final dream mushoom technology terminal Christianity
										neoarchaism electromagnetic consequences drumming orbit catalytic psilocybin</p>
								</div>

								<div class="team-single">
									<img id="Nate" alt="Nate-photo" src="<?php echo get_template_directory_uri() . '/assets/Nate.jpg'?>" />
									<h3 class="position">Nathan Moseley</br> - Business Manager and Developer</h3>
									<p>Nathan comes from a diverse background, and has recently learned that he loves to build Apps. He also enjoys extreme
										sports and a great Latte.</p>
								</div>
							</div>
							<div class="team-second-row">
								<div class="team-single">
									<img id="Colin" alt="Colin-photo" src="<?php echo get_template_directory_uri() . '/assets/Colin.jpg'?>" />
									<h3 class="position">Colin Matson-Jones</br> - Lead Developer</h3>
									<p>human dynamics life Buddha LSD DMT mind-blowing topological final dream mushoom technology terminal Christianity
										neoarchaism electromagnetic consequences drumming orbit catalytic psilocybin</p>
								</div>
								<div class="team-single">
									<img id="Ilya" alt="Ilya-photo" src="<?php echo get_template_directory_uri() . '/assets/ilya.jpg'?>" />
									<h3 class="position">Ilya Meerovich</br> - Web Developer</h3>
									<p>human dynamics life Buddha LSD DMT mind-blowing topological final dream mushoom technology terminal Christianity
										neoarchaism electromagnetic consequences drumming orbit catalytic psilocybin</p>
								</div>
							</div>
						</div>
					</section>
				</div>

				<section class="dont-hesitate-container">
					<h2 class="dont-hesitate">Don't Hesitate to get in touch!</h2>
					<a id="contact"></a>
					<p>Seriously though you know you will love working with us.</p>

				</section>
		</main>
		<!-- #main -->
		</div>
		<!-- #primary -->
		<?php get_footer(); ?>