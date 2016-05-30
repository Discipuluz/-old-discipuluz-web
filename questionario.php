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
		
		<?php include 'scripts.php' ?>
		<script src="js/questionario.js"></script>
	
		<?php include 'styles.php' ?>
		<link rel="stylesheet" href="css/forms.css" />
		<script src="js/forms.js"></script>
		
		<link rel="stylesheet" href="css/questionario.css" />
	
		<link rel="icon" href="images/favicon.png">
	</head>
	<body>
	<?php include_once("analyticstracking.php") ?>
	<?php include 'header.php' ?>
	
	<?php
		include 'database.php';
		/*
		 *	OPEN DATABASE
		 */
		$pdo = Database::connect();
		
		$sql = 'SELECT * FROM Jung_Questions ORDER BY orderId ASC';
	?>
	
	<!-- Main -->
		<div id="main">
			<div id="content" class="container">
				<!--
				  -- DESKTOP
				  -->
				<form action="" method="post" id='questionario-desktop' class="hidden-xs">
					
					<?php
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
					?>
					<div class="col-xs-12 form-submit" style="margin-top: 4rem;">
						<div class="col-xs-12 col-md-offset-4 col-md-3">
							<button type="submit">Enviar</button>
						</div>
					</div>
				</form>
				<!--
				  -- MOBILE
				  -->
				<form action="" method="post" id='questionario-mobile' class="visible-xs">
					
					<?php
						foreach ($pdo->query($sql) as $row) {
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
					?>
					<div class="col-xs-12 form-submit" style="margin-top: 4rem;">
						<div class="col-xs-12 col-md-offset-4 col-md-3">
							<button type="submit">Enviar</button>
						</div>
					</div>
				</form>
				<form action="saveAnswer.php" method="post" id="questionario-user" class="hidden">
					<div class="col-xs-12 col-md-5 form-card">
						<div class="col-xs-12 form-title">
							Sobre Você
						</div>
						<div class="col-xs-12 form-text">
							<div class="col-xs-1 form-field-arrow"></div>
							<div class="col-xs-11 form-text-content">
								<input id="user-name" type="text" name="user-name" required />
								<span class="form-text-bar"></span>
								<label for="user-nome">Qual seu nome?</label>
							</div>
						</div>
						<div class="col-xs-12 form-text">
							<div class="col-xs-1 form-field-arrow"></div>
							<div class="col-xs-11 form-text-content">
								<input id="user-school" type="text" name="user-school" required />
								<span class="form-text-bar"></span>
								<label for="user-school">Nome da escola onde estuda</label>  
							</div>
						</div>
						<div class="col-xs-1 form-field-arrow"></div>
						<div class="col-xs-12">
							<div class="col-xs-12 form-subtitle">
								Série em que está
							</div>
							<fieldset class='col-xs-11 form-radio'>
								<div class="form-radio-field col-md-12">
									<input id="user-grade-1" type="radio" name="user-grade" value="1" required/>
									<label for="user-grade-1" class='col-xs-12 form-radio-label'>1° ano</label>
								</div>
								<div class="form-radio-field col-md-12">
									<input id="user-grade-2" type="radio" name="user-grade" value="2" />
									<label for="user-grade-2" class='col-xs-12 form-radio-label'>2° ano</label>
								</div>
								<div class="form-radio-field col-md-12">
									<input id="user-grade-3" type="radio" name="user-grade" value="3" />
									<label for="user-grade-3" class='col-xs-12 form-radio-label'>3° ano</label>
								</div>
								<div class="form-radio-field col-md-12">
									<input id="user-grade-c" type="radio" name="user-grade" value="c" />
									<label for="user-grade-c" class='col-xs-12 form-radio-label'>Cursinho</label>
								</div>
								<div class="form-radio-field col-md-12">
									<input id="user-grade-other" type="radio" name="user-grade" value="o" />
									<label for="user-grade-other" class='col-xs-12 form-radio-label'>
										<div class="col-xs-12 form-text">
											<div class="col-xs-11 form-text-content">
												<input id="user-grade-other-text" type="text" name="user-grade-other"/>
												<span class="form-text-bar"></span>
												<label for="user-grade-other-text">Outro</label>
											</div>
										</div>
									</label>
								</div>
							</fieldset>
						</div>
						<div class="col-xs-12 form-text">
							<div class="col-xs-1 form-field-arrow"></div>
							<div class="col-xs-11 form-text-content">
								<input id="user-email" type="email" name="email" required />
								<span class="form-text-bar"></span>
								<label>Seu Email</label>  
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
	
	<?php
		/*
		 *	CLOSE DATABASE
		 */
		Database::disconnect();	
	?>
	
	
	
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
	
	</body>
</html>
