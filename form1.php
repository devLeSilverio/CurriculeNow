<?php include('./Admin/conexao.php');?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Primeira Página</title>
    <script defer src="./Js/jquery-3.3.1.min.js"></script>
    <script defer src="./Js/script.js"></script>
    <link rel="stylesheet" href="./css/style2.css" />
    <link rel="stylesheet" href="./css/bootstrap.min.css" />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
      integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-12 monte">
          <center><h2>Monte seu Currículo</h2></center>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <h4>1.Dados Pessoais</h4>
        </div>
      </div>

      <form action="form1.php" method="POST"  enctype="multipart/form-data">
        <div class="row">
          <div class="col-md-7">
            <label for="name" class="titleName">Nome Completo:</label>
            <span class="icon2">*</span>
            <input
              type="text"
              class="form-control"
              name="name"
              placeholder="Entre com seu nome"
            />
          </div>

          <div class="col-md-4 foto">
            <label for="name" class="title2">Escolha uma foto:</label>
            <span class="icon2">*</span>
            <input type="file" class="custom-file-inputid=" file" name="foto" alt="Insira uma foto" />
          </div>
        </div>

        <div class="row">
          <div class="col-md-7">
            <label for="email" class="titleEmail">Email:</label>
            <span class="icon2">*</span>
            <input
              type="email"
              class="form-control"
              name="email"
              placeholder="Entre com seu email"
            />
          </div>

          <div class="col-md-4 nacionalidade">
            <label for="nacao" class="nacao">Pais de Origem:</label>
            <span class="icon2">*</span>
            <select class="form-control" name="nacao">
              <option>Brasil</option>
              <option>Argentina</option>
            </select>
          </div>
        </div>

        <div class="row">
          <div class="col-md-2 idade">
            <label for="age" class="idade">Idade :</label>
            <span class="icon2">*</span>
            <input type="number" class="form-control" name="age" />
          </div>

          <div class="col-md-4 genero">
            <label for="genero" class="genero">Gênero:</label>
            <span class="icon2">*</span>
            <select class="form-control" name="genero">
              <option>Feminino</option>
              <option>Masculino</option>
              <option>Não Binário</option>
            </select>
          </div>

          <div class="col-md-2 estadoC">
            <label for="ec" class="ec">Estado Civil:</label>
            <span class="icon2">*</span>
            <select class="form-control" name="ec">
              <option>Casado</option>
              <option>Solteiro</option>
              <option>Divorciado</option>
              <option>Viuvo</option>
            </select>
          </div>

          <div class="col-md-4 telefoneR">
            <label for="telefoneR" class="telefoneR"
              >Telefone residencial:
            </label>
            <input type="number" class="form-control" name="telefoneR" />
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 cidade">
            <label for="cidade" class="cidade">Cidade :</label>
            <span class="icon2">*</span>
            <input type="text" class="form-control" name="cidade" />
          </div>

          <div class="col-md-2 state">
            <label for="estado" class="state">Estado:</label>
            <span class="icon2">*</span>
            <select class="form-control" name="state">
              <option>São Paulo</option>
              <option>Rorraima</option>
              <option>Rio de Janeiro</option>
              <option>Minas Gerais</option>
            </select>
          </div>

          <div class="col-md-4 celular">
            <label for="celular" class="celular">Telefone celular: </label>
            <input type="text" class="form-control" name="celular" />
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 endereco">
            <label for="endereco" class="endereco"
              >Endereço(Bairro) :</label
            >
            <span class="icon2">*</span>
            <input type="text" class="form-control" name="endereco" />
          </div>

          <div class="col-md-6 logradouro">
            <label for="logradouro" class="logradouro"
              >Endereço(Rua e Numero) :</label
            >
            <span class="icon2">*</span>
            <input type="text" class="form-control" name="logradouro" />
          </div>

        </div>

          <div class="row">
          <div class="col-md-4 complemento">
            <label for="complemento" class="complemento">Complemento :</label>
            <span class="icon2">*</span>
            <input type="text" class="form-control" name="complemento" />
          </div>
          <div class="col-md-4 cep">
            <label for="cep" class="cep">CEP :</label>
            <span class="icon2">*</span>
            <input type="text" class="form-control" name="cep" />
          </div>
        </div>


        <br />

        <div class="row">
          <div class="col-md-12 tracinho">
            <h4>2.Objetivo</h4>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <label for="objetivo">Objetivo:</label>
            <textarea class="form-control" name="objetivo" rows="3"></textarea>
          </div>
        </div>

        <br />

        <?php
          $Listar =ListarUsuario();
          while($u=$Listar->fetch_array()){
        echo'

        <div class="row">
          <div class="col-md-12">
           <a href="#form2.html?id='.$u['cd_usuario'].'"> 
         <input
              type="submit"
              class="btn btn-primary btn-block"
              name="next"
              value="Next"
            /></a>
          ';
          }
        
          ?>
          </div>
        </div>
      </form>
    </div>

<?php

if(isset($_POST['next'])){
  ini_set( 'default_charset', 'utf-8');
  if($_FILES){
    $destino = './Imgs/fotos/'.$_FILES['foto']['name'];
    if(move_uploaded_file($_FILES['foto']['tmp_name'], $destino)){
        echo "Foto enviada com sucesso!";
    }
    else{
      echo 'Não foi enviado!!Tente Novamente.';
    }

    CadastrarUsuario($_POST['name'],$destino,$_POST['email'],null,$_POST['nacao'],$_POST['age'],
    $_POST['age'],$_POST['ec'],$_POST['telefoneR'],$_POST['celular'],$_POST['logradouro'],$_POST['endereco'],
    $_POST['complemento'],$_POST['objetivo']);

    //CadastrarLocalizacao($_POST['state'],$_POST['cidade'],$_POST['cep'],);
  }

}

?>

</body>
</html>


