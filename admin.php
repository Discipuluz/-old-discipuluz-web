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

    <?php include 'header.php' ?>

    <!-- Main -->
    <div id="main">
      <div id="content" class="container">
          <form action="loginAdmin.php" method="post">
            <div class="col-xs-12 col-md-5 form-card">
              <div class="col-xs-12 form-title">
                Login Administração
              </div>
              <div class="col-xs-12 form-text">
                <div class="col-xs-1 form-field-arrow"></div>
                <div class="col-xs-11 form-text-content">
                  <input id="login" type="text" name="login" required />
                  <span class="form-text-bar"></span>
                  <label>Login<label>
                </div>
              </div>
              <div class="col-xs-12 form-text">
                <div class="col-xs-1 form-field-arrow"></div>
                <div class="col-xs-11 form-text-content">
                  <input id="password" type="password" name="password" required />
                  <span class="form-text-bar"></span>
                  <label>Senha</label>
                </div>
              </div>
              <div class="col-xs-12 form-submit">
                <div class="col-xs-12 col-md-offset-8 col-md-4">
                  <button type="submit">Logar</button>
                </div>
              </div>
            </div>
          </form>
      </div>
    </div>
    <!-- /Main -->

    <?php include 'footer.php' ?>

    <?php include 'scripts.php' ?>

  </body>
</html>
