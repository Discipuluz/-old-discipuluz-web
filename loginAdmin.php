<?php
if(!empty($_POST)){
  $login = $_POST["login"];
  $pass = md5($_POST["password"]);
  $profile = "";
  include 'database.php';
  $pdo = Database::connect();
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "SELECT * FROM Admin WHERE login ='".$login."' LIMIT 1";
  foreach ($pdo->query($sql) as $row){
    $profile = $row;
  }
  Database::disconnect();

  if($profile == null || $profile == ''){
    header('Location: admin.php?erro=usuario');
  }
  else if(strcmp($profile['password'],$pass)){ //Strcmp retorno 0 se for igual
    header('Location: admin.php?erro=senha');
  }else{
    session_start();
    $_SESSION["logado"] = true;
    $_SESSION["nome"] = $profile['nome'];
    $_SESSION["level"] = $profile['level'];
    header('Location: painelAdmin.php');
  }

}
?>
