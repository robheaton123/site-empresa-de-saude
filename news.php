<!DOCTYPE html>
<html lang="pt-br">
<head>
<title>Notícias</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Health medical">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/news.css">
<link rel="stylesheet" type="text/css" href="styles/news_responsive.css">
</head>
<body>

<div class="super_container">

	<?php include_once "view/menu.php"; ?>
	
	<!-- Home -->

	<div class="home">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/news.jpg" data-speed="0.8"></div>

		<?php include_once "view/header.php";?>

		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content">
							<div class="home_title">Notícias</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- News -->

	<div class="news">
		<div class="container">
			<div class="row">
				
				<!-- News Posts -->
				<div class="col-lg-8">
					<div class="news_posts">
						
						<!-- News Post -->
						<div class="news_post">
							<div class="news_post_image"><img src="images/news_1.jpg" alt=""></div>
							<div class="news_post_content">
								<div class="news_post_date"><a href="#">17 April, 2018</a></div>
								<div class="news_post_title"><a href="#">10 dicas para ter uma vida saudável</a></div>
								<div class="news_post_info">
									<ul class="d-flex flex-row align-items-center justify-content-start">
										<li><a href="#">by Jane Smith</a></li>
										<li><a href="#">April 25, 2018</a></li>
									</ul>
								</div>
								<div class="news_post_text">
									<p>Donec lorem maximus malesuada lorem max imus mauris. Proin vitae tortor nec risus tristiq ue efficitur. Aliquam luctus est urna, id aliqu am orci tempus sed. Aenean sit amet leo id enim dapibus eleifend. Phasellus ut erat dapibus, tempor sapien non, porta urna. Cras quis ante nibh. Proin tincidunt gravida interdum. Proin sed urna mauris.</p>
								</div>
								<div class="button news_post_button"><a href="#"><span>Saiba mais</span><span>Saiba mais</span></a></div>
							</div>
						</div>

						<!-- News Post -->
						<div class="news_post">
							<div class="news_post_image"><img src="images/news_2.jpg" alt=""></div>
							<div class="news_post_content">
								<div class="news_post_date"><a href="#">17 April, 2018</a></div>
								<div class="news_post_title"><a href="#">Novidades na área da medicina</a></div>
								<div class="news_post_info">
									<ul class="d-flex flex-row align-items-center justify-content-start">
										<li><a href="#">by Jane Smith</a></li>
										<li><a href="#">April 25, 2018</a></li>
									</ul>
								</div>
								<div class="news_post_text">
									<p>Donec lorem maximus malesuada lorem max imus mauris. Proin vitae tortor nec risus tristiq ue efficitur. Aliquam luctus est urna, id aliqu am orci tempus sed. Aenean sit amet leo id enim dapibus eleifend. Phasellus ut erat dapibus, tempor sapien non, porta urna. Cras quis ante nibh. Proin tincidunt gravida interdum. Proin sed urna mauris.</p>
								</div>
								<div class="button news_post_button"><a href="#"><span>Saiba mais</span><span>Saiba mais</span></a></div>
							</div>
						</div>

						<!-- News Post -->
						<div class="news_post">
							<div class="news_post_image"><img src="images/news_3.jpg" alt=""></div>
							<div class="news_post_content">
								<div class="news_post_date"><a href="#">17 April, 2018</a></div>
								<div class="news_post_title"><a href="#">Tudo o que você precisa saber sobre maternidade</a></div>
								<div class="news_post_info">
									<ul class="d-flex flex-row align-items-center justify-content-start">
										<li><a href="#">by Jane Smith</a></li>
										<li><a href="#">April 25, 2018</a></li>
									</ul>
								</div>
								<div class="news_post_text">
									<p>Donec lorem maximus malesuada lorem max imus mauris. Proin vitae tortor nec risus tristiq ue efficitur. Aliquam luctus est urna, id aliqu am orci tempus sed. Aenean sit amet leo id enim dapibus eleifend. Phasellus ut erat dapibus, tempor sapien non, porta urna. Cras quis ante nibh. Proin tincidunt gravida interdum. Proin sed urna mauris.</p>
								</div>
								<div class="button news_post_button"><a href="#"><span>Saiba mais</span><span>Saiba mais</span></a></div>
							</div>
						</div>
						
						<div class="pagination">
							<ul class="d-flex flex-row align-items-center justify-content-start">
								<li class="active"><a href="#">01.</a></li>
								<li><a href="#">02.</a></li>
								<li><a href="#">03.</a></li>
							</ul>
						</div>
					</div>
				</div>

				<!-- Sidebar -->
				<div class="col-lg-4">
					<div class="news_sidebar">

						<!-- Search -->
						<div class="sidebar_search">
							<form action="#" id="sidebar_search" class="sidebar_search">
								<input type="text" class="sidebar_search_input" placeholder="Buscar" required="required">
								<button class="sidebar_search_button"><i class="fa fa-search" aria-hidden="true"></i></button>
							</form>
						</div>

						<!-- Latest News -->
						<div class="sidebar_latest">
							<div class="sidebar_title">Últimas notícias</div>
							<div class="sidebar_latest_container">

								<!-- Latest News Post -->
								<div class="latest d-flex flex-row align-items-start justify-content-start">
									<div><div class="latest_image"><img src="images/latest_1.jpg" alt=""></div></div>
									<div class="latest_content">
										<div class="latest_title"><a href="news.html">Post do blog</a></div>
										<div class="latest_info">
											<ul class="d-flex flex-row align-items-start justify-content-start">
												<li><a href="#">by Jane Smith</a></li>
												<li><a href="#">April 25, 2018</a></li>
											</ul>
										</div>
										<div class="latest_comments"><a href="#">2 comentários</a></div>
									</div>
								</div>

								<!-- Latest News Post -->
								<div class="latest d-flex flex-row align-items-start justify-content-start">
									<div><div class="latest_image"><img src="images/latest_2.jpg" alt=""></div></div>
									<div class="latest_content">
										<div class="latest_title"><a href="news.html">Medicina Preventiva, qual a importância dessa área da medicina</a></div>
										<div class="latest_info">
											<ul class="d-flex flex-row align-items-start justify-content-start">
												<li><a href="#">by Jane Smith</a></li>
												<li><a href="#">April 25, 2018</a></li>
											</ul>
										</div>
										<div class="latest_comments"><a href="#">2 comentários</a></div>
									</div>
								</div>

								<!-- Latest News Post -->
								<div class="latest d-flex flex-row align-items-start justify-content-start">
									<div><div class="latest_image"><img src="images/latest_3.jpg" alt=""></div></div>
									<div class="latest_content">
										<div class="latest_title"><a href="news.html">Medicina alternativa</a></div>
										<div class="latest_info">
											<ul class="d-flex flex-row align-items-start justify-content-start">
												<li><a href="#">by Jane Smith</a></li>
												<li><a href="#">April 25, 2018</a></li>
											</ul>
										</div>
										<div class="latest_comments"><a href="#">2 comentários</a></div>
									</div>
								</div>

							</div>
						</div>

						<!-- Categories -->
						<div class="sidebar_categories">
							<div class="sidebar_title">Categorias</div>
							<div class="categories">
								<ul>
									<li><a href="#"><div class="d-flex flex-row align-items-center justify-content-start">
										<div>Medicina</div>
										<div class="ml-auto">(11)</div>
									</div></a></li>
									<li><a href="#"><div class="d-flex flex-row align-items-center justify-content-start">
										<div>Farmácia</div>
										<div class="ml-auto">(23)</div>
									</div></a></li>
									<li><a href="#"><div class="d-flex flex-row align-items-center justify-content-start">
										<div>Sem categoria</div>
										<div class="ml-auto">(6)</div>
									</div></a></li>
									<li><a href="#"><div class="d-flex flex-row align-items-center justify-content-start">
										<div>Médicos</div>
										<div class="ml-auto">(9)</div>
									</div></a></li>
									<li><a href="#"><div class="d-flex flex-row align-items-center justify-content-start">
										<div>Inovações</div>
										<div class="ml-auto">(15)</div>
									</div></a></li>
								</ul>
							</div>
						</div>

						<!-- Appointment -->
						<div class="info_form_container">
							<div class="info_form_title">Marque uma consulta</div>
							<form action="#" class="info_form" id="info_form">
								<select name="info_form_dep" id="info_form_dep" class="info_form_dep info_input info_select">
									<option>Departamento</option>
									<option>Departamento</option>
									<option>Departamento</option>
								</select>
								<select name="info_form_doc" id="info_form_doc" class="info_form_doc info_input info_select">
									<option>Médico</option>
									<option>Médico</option>
									<option>Médico</option>
								</select>
								<input type="text" class="info_input" placeholder="Nome" required="required">
								<input type="text" class="info_input" placeholder="Telefone">
								<button class="info_form_button">Enviar</button>
							</form>
						</div>
						
					</div>
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
<script src="js/news.js"></script>
</body>
</html>