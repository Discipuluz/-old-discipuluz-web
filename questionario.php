<!DOCTYPE HTML>
<!--
	Linear by TEMPLATED
    templated.co @templatedco
    Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Discipuluz - Questionário</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="Descubra como você se comporta perante situações e atitudes, seus pontos fortes e possíveis áreas de autodesenvolvimento" />
		<meta name="keywords" content="questionário, autoconhecimento, Discipuluz, discipuluz, personalidade" />
		<!-- Facebook -->
		<meta property="og:url"                content="http://www.discipuluz.com/questionario.php" />
		<meta property="og:type"               content="article" />
		<meta property="og:title"              content="Discipuluz - Questionario de inclinações pessoais" />
		<meta property="og:description"        content="Descobra como você se comporta perante situações e atitudes, seus pontos fortes e possíveis áreas de autodesenvolvimento" />
		<meta property="og:image"              content="http://www.discipuluz.com/images/fbcover.jpg" />
		<meta property="og:site_name" 				 content="Discipuluz"/>
		
		<?php include 'styles.php' ?>
	
		<link rel="stylesheet" href="css/forms.css" />
		<script type="text/javascript">
		</script>
		<link rel="stylesheet" href="css/questionario.css" />
		<link rel="icon" href="images/favicon.png">
	</head>
	<body>
	<?php include_once("analyticstracking.php") ?>
	<?php include 'header.php' ?>

	<!-- Main -->
		<div id="main">
			<div id="content" class="container">
				<form id='questionario'>
					
					<?php
						include 'database.php';
							$pdo = Database::connect();
							
							$sql = 'SELECT * FROM Jung_Questions ORDER BY orderId ASC';
							$cont = -1;
							for($i = 0; $i <= 1; $i++){
								if($i == 0)
									echo "<div class='col-xs-12 col-md-5'>";
								else
									echo "<div class='col-xs-12 col-md-offset-1 col-md-5'>";
								foreach ($pdo->query($sql) as $row) {
										$cont++;
										if($cont % 2 != $i){
											continue;
										}
										echo ""
										."<div class='col-xs-12 form-card'>"
											."<span class='question-number'>".$row['orderId']."</span>"
											."<br />"
											."<div class='col-xs-12 form-title'>".$row['question']."</div>"
											."<div class='col-xs-1 form-field-arrow'></div>"
											."<fieldset id=group".$row['orderId']." class='col-xs-12 form-radio'>"
												."<div class='form-radio-field'>"
													."<input type='radio' id='question".$row['orderId']."-1' name='question".$row['orderId']."'value='A' required/>"
													."<label for='question".$row['orderId']."-1' class='col-xs-1 form-radio-button'>a</label>"
													."<label for='question".$row['orderId']."-1' class='col-xs-11 form-radio-label'>".$row['alternativeA']."</label>"
												."</div>"
												."<div class='form-radio-field'>"
													."<input type='radio' id='question".$row['orderId']."-2' name='question".$row['orderId']."'value='B' />"
													."<label for='question".$row['orderId']."-2' class='col-xs-1 form-radio-button'>b</label>"
													."<label for='question".$row['orderId']."-2' class='col-xs-11 form-radio-label'>".$row['alternativeB']."</label>"
												."</div>"
											."</fieldset>"
										."</div>";
								}
								echo "</div>";
							}
							Database::disconnect();
					?>
					<div class="col-xs-12 form-submit" style="margin-top: 4rem;">
						<div class="col-xs-12 col-md-offset-4 col-md-3">
							<button type="submit">Enviar</button>
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
					<blockquote>&ldquo;Se queres prever o futuro, estuda o passado.&rdquo;</br>Confúcio</blockquote>
				</section>
			</div>
		</div>
	<!-- /Tweet -->

	<?php include 'footer.php' ?>
	
	<?php include 'scripts.php' ?>
	<script src="js/questionario.js"></script>
	
	</body>
</html>
