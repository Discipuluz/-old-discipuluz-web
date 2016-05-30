<?php
	if(!empty($_POST)){
		$name = $_POST["name"];
		$email = $_POST["email"];
		$comment = $_POST["comments"];

		include '../database.php';
    	$pdo = Database::connect();
    	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO Contacts (name,email,comment) values(?, ?, ?)";
		$q = $pdo->prepare($sql);
		$q->execute(array($name,$email,$comment));
		
		Database::disconnect();
		
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From: equipe@discipuluz.com" . "\r\n";
		
		$body = '<html><body>Nome: '.$name.'<br/>'.
						'Email: '.$email.'<br/>'.
						'Mensagem: '.	$comment.'</body></html>';

		mail("equipe@discipuluz.com", "Contato Site", $body, $headers);
	}else{
		//TODO: Return error message
		echo "Ocorreu um erro, por favor, tente novamente mais tarde.";
	}
?>
