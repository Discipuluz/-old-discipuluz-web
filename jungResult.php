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
		<meta name="description" content="Descubra como você se comporta perante situações e atitudes, seus pontos fortes e possíveis áreas de autodesenvolvimento" />
		<meta name="keywords" content="Discipuluz, discipuluz, faculdade, vestibular, vestibulares, universidade, Enem, graduação, universidades, faculdades, profissões, enem, engenharia civil, profissão, melhor faculdade em, estudante, escolher, orientação profissional, escolha, aprovação" />
		<!-- Facebook -->
		<meta property="og:url"                content="http://www.discipuluz.com/jungResultShare.php" />
		<meta property="og:type"               content="article" />
		<meta property="og:title"              content="Resultado de Inclinações Pessoais" />
		<meta property="og:description"        content="Descubra como você se comporta perante situações e atitudes, seus pontos fortes e possíveis áreas de autodesenvolvimento" />
		<meta property="og:image"              content="http://www.discipuluz.com/images/fbcover.jpg" />
		<meta property="og:site_name" 				 content="Discipuluz"/>

		<?php include 'scripts.php' ?>
		<?php include 'styles.php' ?>
		
		<link rel="stylesheet" href="css/forms.css" />
		<script src="js/forms.js"></script>
		
		<script src="js/jungResult.js"></script>
		<link rel="stylesheet" href="css/jungResult.css" />
		
		<link rel="icon" href="images/favicon.png" />
	</head>
	<body class="homepage">

	<?php include 'header.php' ?>


	<!-- Main -->
		<div id="main">
			<div id="content" class="container" style="margin-bottom: 1.5em">
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
				<br />
			
				<!-- 
				  -- Feedback de resposta
				  -->
				  
				<div class="col-xs-12 col-md-offset-3 col-md-6 form-card-container">
					<form id="form-feedback" action="register.php" method="post">
						<div class="col-xs-12 form-card">
							<div class="col-xs-12 form-title">
								O que achou?
							</div>
							<div class="col-xs-12 form-text">
								<div class="col-xs-1 form-field-arrow"></div>
								<div class="col-xs-11 form-text-content">
									<textarea id="user-feedback" name="comments" rows="1"></textarea>
									<span class="form-text-bar"></span>
									<label>Escreva aqui seu feedback</label>
								</div>
							</div>
							<div class="col-xs-1 form-field-arrow"></div>
							<div class="col-xs-12">
								<div class="col-xs-12 form-subtitle">
									<span class="form-range-meter">
										5
									</span>
									Uma nota para nós
								</div>
								<div class="col-xs-offset-1 col-xs-11">
									<input type="range" id="user-indication" class="form-range" min="0" max="10" step="1" value="5" required/>
								</div>
							</div>
							<div class="col-xs-12 form-submit">
								<div class="col-xs-12 col-md-offset-8 col-md-4">
									<button type="submit">
										<p>Enviar Feedback</p>
										<img src="images/loading.svg" />
									</button>
								</div>
							</div>
						</div>
					</form>
					<div class="col-xs-12 form-card form-card-back" style="margin-top: -22rem;">
						<div class="col-xs-12 form-title">
							Obrigado pelo feedback
						</div>
						<div class="col-xs-12 form-message">
							A Discipuluz agradece pelo feedback :) 
						</div>
					</div>
				</div>
			</div>
			<div class="button-custom" style="margin: 0 auto">
				<a href="http://www.facebook.com/share.php?u=http://www.discipuluz.com/jungResultShare.php?resultado=<?php echo utf8_encode($profile['initial']); ?>" style="text-decoration: none">
					<img src="http://www.discipuluz.com/images/facebookicon.ico" style="width: 25%">
					<p style="color: grey">Compartilhar</p>
				</a>
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
