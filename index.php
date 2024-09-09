<!DOCTYPE html>
<html lang="pt-br">
  <head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>App Help Desk</title>

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <?php include 'navbar.php'; ?>

    <div class="container">    
      <div class="row">

        <div class="card-login">
          <div class="card">
            <div class="card-header">
              Login
            </div>
            <div class="card-body">
              <form id="formLogin" method="post" action="valida_login.php">
                <div class="form-group">
                  <input name="email" type="email" class="form-control" placeholder="E-mail" required>
                </div>
                <div class="form-group">
                  <input name="senha" type="password" class="form-control" placeholder="Senha" required>
                </div>
                <?php if(isset($_POST['email']) && $_POST['senha'] == 'erro') { ?>
                  <div class="text-danger">
                    Usuário ou senha icorreto
                  </div>
                <?php } ?>
                <?php if(isset($_POST['email']) && $_POST['senha'] == 'erro2') { ?>
                  <div class="text-danger">
                    Login necessario
                  </div>
                <?php } ?>   
                <button class="btn btn-lg btn-info btn-block" type="submit">Entrar</button>
              </form>
            </div>
          </div>
        </div>
    </div>
    <script src="script.js"></script>
  </body>
</html>