<?php
/**
 * The main template file.
 *
 * @package Caravel_Web_Theme
 */
?>


<?php
 
  //response generation function
  $response = "";
 
  //function to generate response
  function my_contact_form_generate_response($type, $message){
 
    global $response;
 
    if($type == "success") $response = "<div class='success'>{$message}</div>";
    else $response = "<div class='error'>{$message}</div>";
 
	}
	


	$not_human       = "Human verification incorrect.";
	$missing_content = "Please supply all information.";
	$email_invalid   = "Email Address Invalid.";
	$message_unsent  = "Message was not sent. Try Again.";
	$message_sent    = "Thanks! Your message has been sent.";
	 
	//user posted variables
	$name = $_POST['message_name'];
	$email = $_POST['message_email'];
	$message = $_POST['message_text'];
	$human = $_POST['message_human'];
	 
	//php mailer variables
	$to = "ilya.meerov@gmail.com";
	$subject = "Someone sent a message from caravel";
	$headers = 'From: '. $email . "\r\n" .
		'Reply-To: ' . $email . "\r\n";


		if(!$human == 0){
			if($human != 2) my_contact_form_generate_response("error", $not_human); //not human!
			else {
					if(!filter_var($email, FILTER_VALIDATE_EMAIL))
						my_contact_form_generate_response("error", $email_invalid);
					else //email is valid
					{
						if(empty($name) || empty($message)){
							my_contact_form_generate_response("error", $missing_content);
						}
						else //ready to go!
						{
							$sent = wp_mail($to, $subject, strip_tags($message), $headers);
							if($sent) my_contact_form_generate_response("success", $message_sent); //message sent!
							else my_contact_form_generate_response("error", $message_unsent); //message wasn't sent
						}
					}

			}
		}
		else if ($_POST['submitted']) my_contact_form_generate_response("error", $missing_content);




?>



<?php get_header(); ?>


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
								<p>We specialize in custom Websites built with WordPress. They are designed to be clean, simple
									and future proof. We have helped our clients realize their online voice and increase traffic, conversion and ranking.</p>
								<a href="#contact"><p class="dots-cta-p">Find out how we can help you. </p></a>
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
					<div class="work-carousel">




						<!-- <?php get_template_part('template-parts/carousel'); ?> -->

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







			<!-- FORM SHIT GOES HERE  -->


<style type="text/css">
  .error{
    padding: 5px 9px;
    border: 1px solid red;
    color: red;
    border-radius: 3px;
  }
 
  .success{
    padding: 5px 9px;
    border: 1px solid green;
    color: green;
    border-radius: 3px;
  }
 
  form span{
    color: red;
  }
</style>
 
<div id="respond">
  <?php echo $response; ?>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <p><label for="name">Name: <span>*</span> <br><input type="text" name="message_name" value="<?php echo esc_attr($_POST['message_name']); ?>"></label></p>
    <p><label for="message_email">Email: <span>*</span> <br><input type="text" name="message_email" value="<?php echo esc_attr($_POST['message_email']); ?>"></label></p>
    <p><label for="message_text">Message: <span>*</span> <br><textarea type="text" name="message_text"><?php echo esc_textarea($_POST['message_text']); ?></textarea></label></p>
    <p><label for="message_human">Human Verification: <span>*</span> <br><input type="text" style="width: 60px;" name="message_human"> + 3 = 5</label></p>
    <input type="hidden" name="submitted" value="1">
    <p><input type="submit"></p>
  </form>
</div>






		</main>
		<!-- #main -->
		</div>
		<!-- #primary -->
		<?php get_footer(); ?>