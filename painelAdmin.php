<?php
  session_start();
  if(!$_SESSION["logado"]){
    header("location: admin.php");
  }
?>
<!DOCTYPE HTML>
<html>
  <head>
    <title>Discipuluz - Login de Admin</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />

    <?php include 'styles.php' ?>
    <link rel="stylesheet" href="css/forms.css" />
    <link rel="stylesheet" href="css/contato.css" />
    <link rel="icon" href="images/favicon.png">
  </head>
  <body>
    <!-- Header -->
      <div id="header">
        <div id="nav-wrapper">
          <!-- Nav -->
          <nav id="nav">
            <ul>
              <li class="active"><a href="index.php">Principal</a></li>
              <li><a href="index.php#featured">Estatísticas</a></li>
              <li><a href="logoutAdmin.php">Sair</a></li>
            </ul>
          </nav>
        </div>
      </div>

    <!-- Main -->
    <div id="main">
      <div id="content" class="container">
        <div class="col-xs-12 col-md-5 form-card">
          <div class="col-xs-12 form-title">
            <?php echo "Bem-vindo, ".$_SESSION["nome"]."!"?>
          </div>
        </div>
      </div>
    </div>
    <!-- /Main -->

    <?php include 'footer.php' ?>

    <?php include 'scripts.php' ?>

  </body>
</html>
