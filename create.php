<?php include('./Admin/conexao.php');?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style1.css" /> 
    <script defer src="./js/jquery-3.3.1.min.js"></script>
    <script defer src="./js/script.js"></script>
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
      integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay"
      crossorigin="anonymous"
    />
    <title>Crie sua conta</title>
  </head>
  <body>
    <div class="wrapper">
      <div class="title">
        <h1>Crie sua conta</h1>
      </div>
      <form action="create.php" method="POST">
      <div class="contact-form">
        <div class="input-fields">
          <input type="text" name ="name" class="input" placeholder="Digite seu nome:" />
          <input type="text" name = "email" class="input" placeholder="Digite seu email:" />
          <input type="text" name="telefone" class="input" placeholder="Digite seu telefone:" />
          <input type="password" name="password" class="input" placeholder="Digite sua senha:" />
          <input type="password" name="password2" class="input" placeholder="Repita sua senha:" />
          <input type="submit" name="login" value="Cadastrar" />
         </div>
      </div>
    </div>
</form>

    <?php
    if(isset($_POST['login'])){
      $cadastrado=false;
      $nome = $_POST['name'];
      $email = $_POST['email'];
      $telefone = $_POST['telefone'];
      $password = $_POST['password'];
      $password2 = $_POST['password2'];
      $usuario = ListarUsuario();
      while($s = $usuario->fetch_array()){
         if($email==$s['email_usuario']){
             alert("E-Mail já cadastrado"); 
             $cadastrado=true;
            }
          } 
          if($cadastrado==false){ 
          if($nome !='' && $email !='' && $password !='' && $password2 !=''){
          if(mb_strlen($password) >= 6 && mb_strlen($password2) >= 6 ){
          if($password===$password2){
          CadastrarUsuario($nome,"",$email,$password,null,null,null,null,$telefone,null,null,null,null); 
          echo ("<script>
          window.location.href = 'index.php';
          </script>
          "); 
          }else{
          alert("Confirmação de senha incorreta!"); 
          } 
        }
          else{
             alert("Mínimo
        de 6 caracteres na senha!");
        } 
          }else{ 
        alert("Campos obrigatório sem
         preenchimento!");
         } 
         }
        }else{
        }
       ?>
  </body>
</html>
