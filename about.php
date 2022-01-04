<!DOCTYPE html>
<html lang="pt-br">
<head>
<title>Sobre nós</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Health medical">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/about.css">
<link rel="stylesheet" type="text/css" href="styles/about_responsive.css">
</head>
<body>

<div class="super_container">

	<?php include_once "view/menu.php"; ?>

	
	
	<!-- Home -->

	<div class="home">
		<!-- <div class="background_image" style="background-image:url(images/about.jpg)"></div> -->
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/about.jpg" data-speed="0.8"></div>

		<?php include_once "view/header.php";?>

		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content">
							<div class="home_title">Sobre nós</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- About -->

	<div class="about">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title">Algumas palavras sobre nós</div>
					<div class="section_subtitle">Venha conhecer</div>
				</div>
			</div>
			<div class="row about_row row-eq-height">
				<div class="col-lg-4">
					<div class="logo">
						<a href="#">Saúde<span>+</span></a>	
					</div>
					<div class="about_text_highlight">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem maximus malesuada lorem max imus mauris.</div>
					<div class="about_text">
						<p>Aenean sit amet leo id enim dapibus eleifend. Phas ellus ut erat dapibus, tempor sapien non, porta.</p>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="about_text_2">
						<p>Donec lorem maximus malesuada lorem max imus mauris. Proin vitae tortor nec risus tristiq ue efficitur. Aliquam luctus est urna, id aliqu am orci tempus sed. Aenean sit amet leo id enim dapibus eleifend. Phasellus ut erat dapibus, tempor sapien non, porta urna. Cras quis ante nibh. Proin tincidunt gravida interdum. Proin sed urna mauris.</p>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="about_image"><img src="images/about_1.jpg" alt=""></div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="button about_button ml-auto mr-auto"><a href="#"><span>Ligue agora</span><span>Ligue agora</span></a></div>
				</div>
			</div>
		</div>
	</div>

	<!-- Milestones -->

	<div class="milestones">
		<div class="container">
			<div class="row">

				<!-- Milestone -->
				<div class="col-lg-4 milestone_col">
					<div class="milestone d-flex flex-row align-items-center justify-content-start">
						<div class="milestone_icon d-flex flex-column align-items-center justify-content-center"><img src="images/icon_7.svg" alt=""></div>
						<div class="milestone_content">
							<div class="milestone_counter" data-end-value="365">0</div>
							<div class="milestone_text">Dias abertos no ano</div>
						</div>
					</div>
				</div>

				<!-- Milestone -->
				<div class="col-lg-4 milestone_col">
					<div class="milestone d-flex flex-row align-items-center justify-content-start">
						<div class="milestone_icon d-flex flex-column align-items-center justify-content-center"><img src="images/icon_6.svg" alt=""></div>
						<div class="milestone_content">
							<div class="milestone_counter" data-end-value="25" data-sign-after="mil">0</div>
							<div class="milestone_text">Pacientes</div>
						</div>
					</div>
				</div>

				<!-- Milestone -->
				<div class="col-lg-4 milestone_col">
					<div class="milestone d-flex flex-row align-items-center justify-content-start">
						<div class="milestone_icon d-flex flex-column align-items-center justify-content-center"><img src="images/icon_8.svg" alt=""></div>
						<div class="milestone_content">
							<div class="milestone_counter" data-end-value="125">0</div>
							<div class="milestone_text">Ótimos doutores</div>
						</div>
						
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- CTA -->

	<div class="cta">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/cta_1.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="cta_container d-flex flex-xl-row flex-column align-items-xl-start align-items-center justify-content-xl-start justify-content-center">
						<div class="cta_content text-xl-left text-center">
							<div class="cta_title">Excelência no atendimento ao cliente.</div>
							<div class="cta_subtitle">Venha nos conhecer melhor, seja bem-vindo ao nosso mundo!</div>
						</div>
						<div class="button cta_button ml-xl-auto"><a href="#"><span>Ligue agora</span><span>Ligue agora</span></a></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Doctors -->

	<div class="doctors">
		<div class="doctors_image"><img src="images/doctors.jpg" alt="doctors"></div>
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title">Nossos Médicos</div>
					<div class="section_subtitle">escolha um</div>
				</div>
			</div>
			<div class="row doctors_row">
				
				<!-- Doctor -->
				<div class="col-xl-3 col-md-6">
					<div class="doctor">
						<div class="doctor_image"><img src="images/doc_1.jpg" alt=""></div>
						<div class="doctor_content">
							<div class="doctor_name"><a href="#">Adam Warlock</a></div>
							<div class="doctor_title">Cirurgião</div>
							<div class="doctor_link"><a href="#">+</a></div>
						</div>
					</div>
				</div>

				<!-- Doctor -->
				<div class="col-xl-3 col-md-6">
					<div class="doctor">
						<div class="doctor_image"><img src="images/doc_2.jpg" alt=""></div>
						<div class="doctor_content">
							<div class="doctor_name"><a href="#">Christian Bale</a></div>
							<div class="doctor_title">Cirurgião</div>
							<div class="doctor_link"><a href="#">+</a></div>
						</div>
					</div>
				</div>

				<!-- Doctor -->
				<div class="col-xl-3 col-md-6">
					<div class="doctor">
						<div class="doctor_image"><img src="images/doc_3.jpg" alt=""></div>
						<div class="doctor_content">
							<div class="doctor_name"><a href="#">Jessica Walsh</a></div>
							<div class="doctor_title">Cirurgião</div>
							<div class="doctor_link"><a href="#">+</a></div>
						</div>
					</div>
				</div>

				<!-- Doctor -->
				<div class="col-xl-3 col-md-6">
					<div class="doctor">
						<div class="doctor_image"><img src="images/doc_4.jpg" alt=""></div>
						<div class="doctor_content">
							<div class="doctor_name"><a href="#">Martha Jones</a></div>
							<div class="doctor_title">Cirurgião</div>
							<div class="doctor_link"><a href="#">+</a></div>
						</div>
					</div>
				</div>

				<!-- Doctor -->
				<div class="col-xl-3 col-md-6">
					<div class="doctor">
						<div class="doctor_image"><img src="images/doc_5.jpg" alt=""></div>
						<div class="doctor_content">
							<div class="doctor_name"><a href="#">Michael Cornier</a></div>
							<div class="doctor_title">Cirurgião</div>
							<div class="doctor_link"><a href="#">+</a></div>
						</div>
					</div>
				</div>

				<!-- Doctor -->
				<div class="col-xl-3 col-md-6">
					<div class="doctor">
						<div class="doctor_image"><img src="images/doc_6.jpg" alt=""></div>
						<div class="doctor_content">
							<div class="doctor_name"><a href="#">Alana Michael</a></div>
							<div class="doctor_title">Laboratório</div>
							<div class="doctor_link"><a href="#">+</a></div>
						</div>
					</div>
				</div>

				<!-- Doctor -->
				<div class="col-xl-3 col-md-6">
					<div class="doctor">
						<div class="doctor_image"><img src="images/doc_7.jpg" alt=""></div>
						<div class="doctor_content">
							<div class="doctor_name"><a href="#">Jessica Mable</a></div>
							<div class="doctor_title">Pediatra</div>
							<div class="doctor_link"><a href="#">+</a></div>
						</div>
					</div>
				</div>

				<!-- Doctor -->
				<div class="col-xl-3 col-md-6">
					<div class="doctor">
						<div class="doctor_image"><img src="images/doc_8.jpg" alt=""></div>
						<div class="doctor_content">
							<div class="doctor_name"><a href="#">Jhon Wick</a></div>
							<div class="doctor_title">Oftalmologista</div>
							<div class="doctor_link"><a href="#">+</a></div>
						</div>
					</div>
				</div>

			</div>
			<div class="row">
				<div class="col">
					<div class="button doctors_button ml-auto mr-auto"><a href="#"><span>Todos os médicos</span><span>Todos os médicos</span></a></div>
				</div>
			</div>
		</div>
	</div>

	<?php include_once "view/footer.php";?>
</div>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/about.js"></script>
</body>
</html>