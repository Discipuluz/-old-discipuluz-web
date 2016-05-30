<!DOCTYPE HTML>
<!--
	Linear by TEMPLATED
    templated.co @templatedco
    Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Discipuluz - Contato</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="Elogios, dúvidas, pedidos, críticas, feedbacks em geral. Conversem com a gente!" />
		<meta name="keywords" content="Discipuluz, discipuluz, faculdade, vestibular, vestibulares, universidade, Enem, graduação, universidades, faculdades, profissões, enem, engenharia civil, profissão, melhor faculdade em, estudante, escolher, orientação profissional, escolha, aprovação" />
		<!-- Facebook -->
		<meta property="og:url"                content="http://www.discipuluz.com/contato.php" />
		<meta property="og:type"               content="article" />
		<meta property="og:title"              content="Discipuluz - Fale com a gente" />
		<meta property="og:description"        content="Elogios, dúvidas, pedidos, críticas, feedbacks em geral. Conversem com a gente!" />
		<meta property="og:image"              content="http://www.discipuluz.com/images/fbcover.jpg" />
		<meta property="og:site_name" 				 content="Discipuluz"/>

		<?php include 'scripts.php' ?>
		<?php include 'styles.php' ?>

		<link rel="stylesheet" href="css/forms.css" />
		<link rel="stylesheet" href="css/contato.css" />
		<script src="js/forms.js"></script>
		<script src="js/contato.js"></script>
		<link rel="icon" href="images/favicon.png" />
	</head>
	<body>

		<?php include 'header.php' ?>

		<!-- Main -->
		<div id="main">
			<div id="content" class="container">
				<div id="content" class="col-xs-12 col-md-6 form-card-container">
					<!--iframe src="https://docs.google.com/forms/d/1o2hsOCjYX5jLlsKxkQeB4Dfa0Oumtm4qxMX37tLgyNQ/viewform" width="100%" height="1050" frameborder="0" marginheight="0" marginwidth="0">Carregando…</iframe-->
					<form id="form-contato" action="register.php" method="post">
						<div class="col-xs-12 form-card">
							<div class="col-xs-12 form-title">
								Fale conosco
							</div>
							<div class="col-xs-12 form-text">
								<div class="col-xs-1 form-field-arrow"></div>
								<div class="col-xs-11 form-text-content">
									<input id="user-name" type="text" name="name" required />
									<span class="form-text-bar"></span>
									<label>Qual seu nome?</label>
								</div>
							</div>
							<div class="col-xs-12 form-text">
								<div class="col-xs-1 form-field-arrow"></div>
								<div class="col-xs-11 form-text-content">
									<input id="user-email" type="email" name="email" required />
									<span class="form-text-bar"></span>
									<label>Email</label>  
								</div>
							</div>
							<div class="col-xs-12 form-text">
								<div class="col-xs-1 form-field-arrow"></div>
								<div class="col-xs-11 form-text-content">
									<textarea id="user-comments" name="comments" rows="1"></textarea>
									<span class="form-text-bar"></span>
									<label>Comentários</label>
								</div>
							</div>
							<div class="col-xs-12 form-submit">
								<div class="col-xs-12 col-md-offset-8 col-md-4">
									<button type="submit">Enviar</button>
								</div>
							</div>
						</div>
					</form>
					<div class="col-xs-12 form-card form-card-back" style="margin-top: -22rem;">
						<div class="col-xs-12 form-title">
							Obrigado por sua mensagem.
						</div>
						<div class="col-xs-12 form-message">
							A Discipuluz entrará em contato em breve
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Main -->

		<!-- Tweet -->
		<div id="tweet">
			<div class="container">
				<section>
					<blockquote>&ldquo;Os nossos maiores problemas não estão nos obstáculos do caminho, mas na escolha da direção errada.&rdquo; </br>Augusto Cury</blockquote>
				</section>
			</div>
		</div>
		<!-- /Tweet -->

		<?php include 'footer.php' ?>

	</body>
</html>
