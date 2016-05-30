<?php
	if(!empty($_POST)){
		$feedback = $_POST["feedback"];
		$indication = $_POST["indication"];
    $idAnswer= $_POST["id"];

		include '../database.php';
    $pdo = Database::connect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql = "UPDATE Jung_Answers SET  feedback = ?, indicacao = ? WHERE id=".$idAnswer.";";
		$q = $pdo->prepare($sql);
		$q->execute(array($feedback, $indication));

		$id = $pdo->lastInsertId();
		Database::disconnect();
	}
?>
