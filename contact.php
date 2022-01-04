<!DOCTYPE html>
<html lang="pt-br">
<head>
<title>Contato</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Health medical">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/contact.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
</head>
<body>

<div class="super_container">

	<?php include_once "view/menu.php"; ?>
	
	<!-- Home -->

	<div class="home">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/contact.jpg" data-speed="0.8"></div>

		<?php include_once "view/header.php";?>

		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content">
							<div class="home_title">Contato</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Contact -->

	<div class="contact">
		<div class="container">
			<div class="row">

				<!-- Contact form -->
				<div class="col-lg-8 contact_col pb-4">
					<div class="contact_form">
						<div class="contact_title">Formulário de contato</div>
						<div class="contact_form_container">
							<form action="#" id="contact_form" class="contact_form">
								<input type="text" id="contact_input" class="contact_input" placeholder="Seu nome" required="required">
								<input type="email" id="contact_email" class="contact_input" placeholder="Seu E-mail" required="required">
								<input type="text" id="contact_subject" class="contact_input" placeholder="Assunto" required="required">
								<textarea class="contact_input contact_textarea" id="contact_textarea" placeholder="Mensagem" required="required"></textarea>
								<button class="contact_button" id="contact_button">Enviar Mensagem</button>
							</form>
						</div>
					</div>
				</div>

				<!-- Make an Appointment -->
				<div class="col-lg-4 contact_col pb-4">
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
							<input type="text" class="info_input" placeholder="Número de telefone">
							<button class="info_form_button">Enviar</button>
						</form>
					</div>
				</div>

				<!-- contact info -->
				<div class="container">
					<div class="row">
						<div class="col-lg-3 offset-lg-1">
							<div class="contact_info_list">
								<div class="contact_info_title">Contato</div>
								<ul>
									<li><span>Endereço: </span>Rua: teste, N°42 - Campinas/SP</li>
									<li><span>Email: </span>gmail@gmail.com</li>
									<li><span>Telefone: </span>+14 99999-8888</li>
								</ul>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="contact_info_list contact_info_list_2">
								<ul>
									<li><span>Endereço: </span>Rua: teste, N°21 - São Paulo/SP</li>
									<li><span>Email: </span>gmail@gmail.com</li>
									<li><span>Telefone: </span>+14 99999-8888</li>
								</ul>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="contact_info_list">
								<div class="contact_info_title">Financeiro</div>
								<ul>
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div>Segunda a Quinta</div>
										<div class="ml-auto">8.00 - 19.00</div>
									</li>
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div>Sexta-Feira</div>
										<div class="ml-auto">8.00 - 18.30</div>
									</li>
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div>Sábado</div>
										<div class="ml-auto">9.30 - 17.00</div>
									</li>
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div>Domingo</div>
										<div class="ml-auto">08.00 - 13.00</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Google Map -->

	<div class="container">
		<!-- Google Map width="100%" para responsivo-->
		<div class="row py-4">
				<div class="col">
					<iframe class="mx-auto d-block" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d20688.918202838715!2d-46.63604113495097!3d-23.556998660406567!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5854dbd1f945%3A0x21fef367fa9ba978!2sCentro+Cultural+Banco+do+Brasil+-+S%C3%A3o+Paulo!5e0!3m2!1spt-BR!2sbr!4v1546458390899" width="100%" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
		</div>
	</div>

	<?php include_once "view/footer.php";?>
</div>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="js/contact.js"></script>
</body>
</html>