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
						foreach ($pdo->query($sql) as $row) {
				                echo utf8_encode($row['orderId']).") ".utf8_encode($row['question']).'<br />';
								echo "<fieldset id=group".$row['orderId'].">";
				                echo "<input type='radio' name='question". $row['orderId'] . "'value='A'>".utf8_encode($row['alternativeA']).'</input><br />';
				                echo "<input type='radio' name='question". $row['orderId'] . "'value='B'>".utf8_encode($row['alternativeB']).'</input><br /><br />';
				        		echo "</fieldset>";
				        }
				        echo "</div>";
						Database::disconnect();
				?>
			</div>
			<input type="button" onclick="calculateResult()" value="Enviar">
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
