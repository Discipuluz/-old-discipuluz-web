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
		
		<!-- jQuery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
		
		<!-- Bootstrap -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		
		<!-- Other -->
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,700,500,900' rel='stylesheet' type='text/css'>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>
		<link rel="stylesheet" href="css/forms.css" />
		<link rel="stylesheet" href="css/contato.css" />
		<link rel="icon" href="images/favicon.png">
		<script type="text/javascript">
		function validateEmail() {
			var email = document.getElementById("email").value;
		    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		    if(!re.test(email)){
		    	alert("Insira um email válido!");
		   	}
		    return re.test(email);
		}
		</script>
	</head>
	<body>

		<?php include 'header.php' ?>

		<!-- Main -->
		<div id="main">
			<div id="content" class="container">
					<!--iframe src="https://docs.google.com/forms/d/1o2hsOCjYX5jLlsKxkQeB4Dfa0Oumtm4qxMX37tLgyNQ/viewform" width="100%" height="1050" frameborder="0" marginheight="0" marginwidth="0">Carregando…</iframe-->
					<form action="register.php" method="post" onsubmit="return validateEmail()">
						<div class="col-xs-12 col-md-5 form-card">
							<div class="col-xs-12 form-title">
								Fale conosco
							</div>
							<div class="col-xs-12 form-field">
								<div class="col-xs-1 form-field-arrow"></div>
								<div class="col-xs-11 form-field-content">
									<input id="nome" type="text" name="name" required />
									<span class="form-field-bar"></span>
									<label>Qual seu nome?</label>
								</div>
							</div>
							<div class="col-xs-12 form-field">
								<div class="col-xs-1 form-field-arrow"></div>
								<div class="col-xs-11 form-field-content">
									<input id="email" type="email" name="email" required />
									<span class="form-field-bar"></span>
									<label>Email</label>  
								</div>
							</div>
							<div class="col-xs-12 form-field">
								<div class="col-xs-1 form-field-arrow"></div>
								<div class="col-xs-11 form-field-content">
									<input id="comments" type="text" name="comments" />
									<span class="form-field-bar"></span>
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
