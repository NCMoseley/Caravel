<?php
/**
 * The main template file.
 *
 * @package Caravel_Web_Theme
 */
?>

	<?php get_header(); ?>


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">


			<div class="fullpage" id="fullpage">

				<section class="hero-container">
					<div name="#" id="#about" class="header-container">
						<h1>Simple, Powerful &
							<br>Efficient Websites.</h1>
						<p>We build modern websites for modern businesses and individuals. No fluff, no over design, no bloat. Fast, elegant,
							and precisely what you need. We will get you where you want to be.
								<a href="#contact"><strong>Set sail!</strong></a>
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
									Find out how we can help you.
								</a>
							</div>
						</div>
					</div>

					<div class="services-container">
						<div class="sliding-background"></div>
						<span class="title-paragraph-container">
							<h2>Services</h2>
							<p>We provide a comprehensive suite of services to build out your online presence. From concept to execution, we can assist with whatever you need.</p>
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
					<div class="work-wrapper">

						<div class="laptop">
							<img src="<?php echo get_template_directory_uri() . '/assets/laptop.png
					'?>" alt="Laptop">
						</div>

						<?php get_template_part('template-parts/carousel'); ?>

					</div>

					<div class="our-work-right">

						<h2>Our Work</h2>

						<div class="our-work-content">

							<?php get_template_part('template-parts/carousel-nav'); ?>

						</div>
					</div>
				</section>

				<div class="team-background">
					<section class="team-wrapper">
						<h2>The Team</h2>
						<p>Our team is a dynamic and varied group, with overlapping experience in several different disciplines. We are four good friends who have been working together for quite a while now, and motivate each other to be the best we can be.
						</p>
						<div class="team-container">
							<div class="team-top-row">
								<div class="team-single">
									<img id="Sean" alt="Sean-photo" src="<?php echo get_template_directory_uri() . '/assets/Sean.jpg'?>" />
									<h3 class="position">Sean Stobo</br> - Founder, Project Manager</h3>
									<p>Sean is an avid outdoorsman who moves between Vancouver and Pemberton, chasing fun and adventure. His specialty is advanced CSS and PHP</p>
								</div>

								<div class="team-single">
									<img id="Nate" alt="Nate-photo" src="<?php echo get_template_directory_uri() . '/assets/Nate.jpg'?>" />
									<h3 class="position">Nathan Moseley</br> - Business Manager and Developer</h3>
									<p>Nathan comes from a technical background, and has grown a passion for putting together exciting and great looking user interfaces. He also enjoys extreme sports and a great Latte.</p>
								</div>
							</div>
							<div class="team-second-row">
								<div class="team-single">
									<img id="Colin" alt="Colin-photo" src="<?php echo get_template_directory_uri() . '/assets/Colin.jpg'?>" />
									<h3 class="position">Colin Matson-Jones</br> - Lead Developer</h3>
									<p>Colin Matson-Jones is a driven front-end developer with a passion for self improvement and learning new things. He loves building beautiful and intuitive user interfaces and is currently doing a deep-dive into the nuances of Javascript with Node, React, and Mongo</p>
								</div>
								<div class="team-single">
									<img id="Ilya" alt="Ilya-photo" src="<?php echo get_template_directory_uri() . '/assets/ilya.jpg'?>" />
									<h3 class="position">Ilya Meerovich</br> - Web Developer</h3>
									<p></p>
								</div>
							</div>
						</div>
					</section>
				</div>

				<section class="dont-hesitate-container">
					<h2 class="dont-hesitate">Don't hesitate to get in touch!</h2>

					<?php echo do_shortcode("[email-form-plugin]"); ?>

					<a id="contact" hfre=""><p>We know you will love working with us</p></a>

				</section>
				</div>

		</main>
		<!-- #main -->
		</div>
		<!-- #primary -->
		<?php get_footer(); ?>