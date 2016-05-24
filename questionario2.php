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
		<script type="text/javascript">
		function calculateResult() {
			var size = $("#questionario > fieldset").length;
			var results = new Array();
			var pos = 0;
			results = [0,0,0,0,0,0,0,0];

			for (var i = 1; i <= 4; i++) {
				for(var j = i; j<=28; j+=4){
					if($("input[name='question"+j+"']:checked").val() == 'A'){
						results[pos]++;
					}else{
						results[pos + 1]++;
					}
				}
				pos += 2;
			}

			var stringResult = '';
			var charsResult = ['E', 'I', 'S', 'N', 'T', 'F', 'J', 'P'];
			for(var i = 0; i <= 3; i++){
				if(results[i*2] > results[i*2 + 1]){
					stringResult += charsResult[i*2];
				}else{
					stringResult += charsResult[i*2 + 1];
				}
			}

			$.ajax({
		       url: 'saveAnswer.php',
		       type: 'POST',
		       data: { 'numbersResult': results, 'stringResult': stringResult} ,
		       success: function (response) {
						 window.location = "http://www.discipuluz.com/jungResult.php?resultado="+stringResult;
		       }
		   });
		}
		</script>
		<link rel="icon" href="images/favicon.png">
	</head>
	<body>
	<?php include_once("analyticstracking.php") ?>
	<?php include 'header.php' ?>

	<!-- Main -->
		<div id="main">
			<div id="content" class="container">
				<?php
					include 'database.php';
				    	$pdo = Database::connect();
						
				        $sql = 'SELECT * FROM Jung_Questions ORDER BY orderId ASC';
				        echo "<div id='questionario'>";
						$cont = 0;
						foreach ($pdo->query($sql) as $row) {
								if($cont % 2 == 0){
									echo "<div class='col-xs-12'>";
									echo "<div class='col-xs-12 col-md-5 form-card'>";
								}else{
									echo "<div class='col-xs-12 col-md-offset-1 col-md-5 form-card'>";
								}
				                echo "<div class='col-xs-12 form-title'>".utf8_encode($row['orderId']).") ".utf8_encode($row['question']).'</div>';
								echo "<div class='col-xs-1 form-field-arrow'></div>";
								echo "<fieldset id=group".utf8_encode($row['orderId'])." class='col-xs-12 form-radio'>";
				                echo "<div class='form-radio-field'><input type='radio' id='question".utf8_encode($row['orderId'])."-1' name='question".utf8_encode($row['orderId'])."'value='A' class='col-xs-1' /><label for='question".utf8_encode($row['orderId'])."-1' class='col-xs-11'>".utf8_encode($row['alternativeA']).'</label></div>';
				                echo "<div class='form-radio-field'><input type='radio' id='question".utf8_encode($row['orderId'])."-2' name='question". utf8_encode($row['orderId']) . "'value='B' class='col-xs-1' /><label for='question".utf8_encode($row['orderId'])."-2' class='col-xs-11'>".utf8_encode($row['alternativeB']).'</label></div>';
				        		echo "</fieldset>";
								echo "</div>";
								if($cont % 2 == 1){
									echo "</div>";
								}
								$cont++;
				        }
				        echo "</div>";
						Database::disconnect();
				?>
				<div class="col-xs-12 form-submit" style="margin-top: 4rem;">
					<div class="col-xs-12 col-md-offset-4 col-md-3">
						<button onclick="calculateResult()" type="submit">Enviar</button>
					</div>
				</div>
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


	</body>
</html>
