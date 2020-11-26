<?php include('./Admin/conexao.php'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <div id="login-container">
      <h1>Login</h1>
      <img src="Imgs/logo.png" width="100rem" height="80rem" id="img" />
      <form action="index.php" method="POST">      
        <label for="email">E-mail:</label>
        <input
          type="email"
          name="email"
          id="email"
          placeholder="Digite seu e-email"
          autocomplete="off"
        />
        <label for="password">Senha:</label>
        <input
          type="password"
          name="password"
          id="password"
          placeholder="Digite sua senha"
        />
        <a href="#" id="forgot-pass">Esqueceu a senha?</a>
        <input type="submit" name="login" value="Entrar" />
      </form>
      <div id="register-container">
        <p>Ainda não tem uma conta?</p>
        <a href="create.php">Registrar</a>
      </div>
    </div>
</form>

<?php
      if(isset($_POST['login'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $correct=false;
        $usuario = ListarUsuario();
        while($s = $usuario->fetch_array()){
          if($s['email_usuario'] === $email && $s['senha_user'] === $password){
            $correct=true;
            echo ("<script>
                window.location.href='create.php';
                </script>");
          }
        }
        if($correct!=true){
              alert("Login ou senha incorretos!");
            }
      }
    ?>
  </body>
</html>
