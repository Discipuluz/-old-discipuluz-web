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
		<meta name="description" content="" />
		<meta name="keywords" content="" />
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
						Qual seu nome? <input id="nome" type="text" name="name" required><br />
						Email: <input id="email" type="text" name="email" required><br />
						Comentários <input id="comments" type="text" name="comments"><br />
						<input type="submit" value="Enviar">
					</form>
			</div>
		</div>
	<!-- /Main -->

	<!-- Tweet -->
		<div id="tweet">
			<div class="container">
				<section>
					<blockquote>&ldquo;In posuere eleifend odio. Quisque semper augue mattis wisi. Maecenas ligula. Pellentesque viverra vulputate enim. Aliquam erat volutpat.&rdquo;</blockquote>
				</section>
			</div>
		</div>
	<!-- /Tweet -->

	<?php include 'footer.php' ?>


	</body>
</html>
