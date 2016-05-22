<?php
	if(!empty($_POST)){
		$name = $_POST["name"];
		$email = $_POST["email"];
		$comment = $_POST["comments"];

		include 'database.php';
    	$pdo = Database::connect();
    	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO Contacts (name,email,comment) values(?, ?, ?)";
		$q = $pdo->prepare($sql);
		$q->execute(array($name,$email,$comment));
		Database::disconnect();
		header("Location: index.php");
	}else{
		//TODO: Return error message
		echo "Ocorreu um erro, por favor, tente novamente mais tarde.";
	}
?>