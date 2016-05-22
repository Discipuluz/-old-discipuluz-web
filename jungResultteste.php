<!DOCTYPE HTML>
<!--
	Linear by TEMPLATED
    templated.co @templatedco
    Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<?php
	$sigla = $_GET['resultado'];
	include 'database.php';
	$pdo = Database::connect();
	$sql = "SELECT * FROM Profile WHERE initial ='".$sigla."'  LIMIT 1";
	foreach ($pdo->query($sql) as $row){
		$profile = $row;
	}
	Database::disconnect();
?>


<html>
	<head>
		<title>Discipuluz - Perfil <?php echo utf8_encode($profile['initial']); ?></title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="Descobra como você se comporta perante situações e atitudes, seus pontos fortes e possíveis áreas de autodesenvolvimento" />
		<meta name="keywords" content="" />

		<!-- Tem usar o nome da pessoa que respondeu como parâmetro para aparecer nessas tags? -->
		<!-- Como alterar essa URL para cada um dos resultados?  <meta property="og:url"                content="http://www.discipuluz.com/indextest.php" />-->
		<meta property="og:url"                content="http://www.discipuluz.com/jungResult.php?resultado=<?php echo utf8_encode($profile['initial']); ?>" />
		<meta property="og:type"               content="article" />
		<meta property="og:title"              content="Resultado do questionário de inclinações pessoais" />
		<meta property="og:description"        content="Descobra como você se comporta perante situações e atitudes, seus pontos fortes e possíveis áreas de autodesenvolvimento" />
		<meta property="og:image"              content="http://www.discipuluz.com/images/fbcover.jpg" />
		<meta property="og:site_name" 				 content="Discipuluz"/>

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
		<link rel="icon" href="../images/favicon.png">
	</head>
	<body class="homepage">

	<?php include 'header.php' ?>


	<!-- Main -->
		<div id="main">
			<div id="content" class="container">
				<p  style="margin-bottom: 5em; font-size: 13pt	">O resultado abaixo apresenta suas tendências de ação frente a novas situações, seu modo de perceber as informações, seu estilo de julgamento e modo de organizar-se para dar conta de um trabalho.
					Estas preferências compõem um perfil psicológico QUE NÃO É IMUTÁVEL.
					Utilizamos em nosso trabalho a referência de Carl Jung, que em sua tipologia de personalidade buscou responder a estas tendências e preferências descritas acima.
					Importante ressaltar que ele dizia que um grupo de funções predominantes define nossa “personalidade” na primeira metade da vida, mas que justamente as funções “menos desenvolvidas” até então serão nosso desafio, para nosso desenvolvimento e amadurecimento para uma vida feliz.  Você encontrará abaixo a descrição de seu conjunto de funções, com dicas sobre seus pontos fortes e fracos, que você terá a responsabilidade de observar e cuidar em sua vida adulta.
				</p>
				<h2>
					<span style="font-size: 40pt; color: #99D353">
						<?php echo utf8_encode($profile['initial']); ?>
					</span></br>
					<span style="font-size: 20pt"><?php echo utf8_encode($profile['extended']); ?></span></h2></br>
				<p style="text-align: left; font-size: 15pt">
					Título:  <?php echo utf8_encode($profile['title']); ?>
				</p>
			</br>
			<p style="text-align: left; font-size: 15pt">
				Palavras-chave: <?php echo utf8_encode($profile['keyword']); ?>
			</p>
			</br>
			<p style="text-align: left; font-size: 15pt; margin-left: 1em">
				<?php echo utf8_encode($profile['description']); ?>
			</p>
			</br>
			<p style="text-align: left; font-size: 15pt;"><span style="color: #99D353">
				<i>Seus pontos fortes:</i></span></br>
				<?php echo utf8_encode($profile['strong']); ?>
			</p>
			</br>
			<p style="text-align: left; font-size: 15pt"><span style="color: #99D353">
				<i>Possíveis áreas de autodesenvolvimento:</i></span></br>
				<?php echo utf8_encode($profile['improvement']); ?>
			</p>
			<a href="./saibamais.php" target="_blank" class="button button-style1" style="margin-top: 2em; ">Se interessou? Saiba mais</a>

			<a class="button-custom" href="http://www.facebook.com/share.php?u=http://www.discipuluz.com/jungResultteste.php?resultado=<?php echo utf8_encode($profile['initial']); ?>"><img src="http://www.discipuluz.com/images/facebookicon.ico" style="width: 40%; margin-top: 1em; margin-left: 1.8em"><p style="color: grey">Compartilhar</p></a> 
			</div>
		</div>
	<!-- /Main -->

	<!-- Tweet -->
		<div id="tweet">
			<div class="container">
				<section>
					<blockquote>&ldquo;Uma decisão só é difícil quando você se esquece de quem é.&rdquo;</blockquote>
				</section>
			</div>
		</div>
	<!-- /Tweet -->

	<?php include 'footer.php' ?>

	</body>
</html>
