<?php
	if(!empty($_POST)){
		$numbersResult = $_POST["numbersResult"];
		$stringResult = $_POST["stringResult"];

		include 'database.php';
    $pdo = Database::connect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql = "INSERT INTO Jung_Answers (name,email,serie, school, extrovertido, introvertido,
  	    sensorial, intuitivo, racional, emotivo, analitico, perspicaz, result)
		values(?,?,?,?,?,?,?,?,?,?,?,?,?)";
		$q = $pdo->prepare($sql);
		$q->execute(array("Tests Novo","emailTeste","1", "escola",
		$numbersResult[0], $numbersResult[1], $numbersResult[2], $numbersResult[3],
		$numbersResult[4], $numbersResult[5], $numbersResult[6], $numbersResult[7],
		$stringResult));

		$id = $pdo->lastInsertId();
		echo $id;
		Database::disconnect();
	}
	else{
		echo "Resultado: ".$stringResult;
	}
?>
