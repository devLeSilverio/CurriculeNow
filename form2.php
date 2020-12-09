<?php include('./Admin/conexao.php');
session_start();
?>
<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Formação Academica</title>
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
        <div class="col-md-6 offset-4">
          <h2 class="monte">Monte seu Currículo</h2>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12 rowDados">
          <h4 class="monte">3.Formação Academica</h4>
        </div>
      </div>

      <form action="form2.php" method="POST">
        <div class="row">
          <div class="col-md-9">
            <label for="nm_curso" class="campo">Curso:</label>
            <input
              type="text"
              class="form-control"
              name="nm_curso"
              placeholder="Ex.Ensino Técnico Integardo ao Médio"
            />
          </div>
          <div class="col-md-3">
            <label for="dt_ano_conclusao" class="campo"
              >Ano de Conclusão:</label
            >
            <input
              type="date"
              class="form-control"
              name="dt_ano_conclusao"
              placeholder="Ex.2020"
            />
          </div>
        </div>

        <div class="row">
          <div class="col-md-9">
            <label for="nm_instituicao" class="campo">Instituição:</label>
            <input
              type="text"
              class="form-control"
              name="nm_instituicao"
              placeholder="Ex: ETEC de Peruíbe"
            />
          </div>
          <div class="col-md-3 mt-4">
            <button type="button" class="btn btn-success" id="addCurso">
              + Add outro curso
            </button>
          </div>
        </div>

        <hr />
        <div class="row">
          <div class="col-md-12 rowDados">
            <h4 class="monte">Experiência</h4>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <label for="nm_empresa" class="campo">Empresa:</label>
            <input
              type="text"
              class="form-control"
              name="nm_empresa"
              placeholder="Ex.:Bradesco"
            />
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <label for="cargo" class="campo">Cargo:</label>
            <input
              type="text"
              class="form-control"
              name="cargo"
              placeholder="Ex.:Professor..."
            />
          </div>
          <div class="col-md-3">
            <label for="dt_inicio" class="campo">Início em: </label>
            <input
              type="date"
              class="form-control"
              name="dt_inicio"
              placeholder="Ex.:2019"
            />
          </div>
          <div class="col-md-3">
            <label for="dt_fim" class="campo">Fim em: </label>
            <input
              type="date"
              class="form-control"
              name="dt_fim"
              placeholder="Ex.:2020"
            />
          </div>
        </div>

        <div class="row">
          <div class="col-md-9">
            <label for="funcao_cargo" class="campo"
              >Descrição das suas principais funções na empresa:
            </label>
            <input
              type="text"
              class="form-control"
              name="funcao_cargo"
              placeholder="Ex.:Lavava,cozinhava..."
            />
          </div>
          <div class="col-md-3 mt-4">
            <button type="button" class="btn btn-success" id="addExperiencia">
              + Add outra Experiência
            </button>
          </div>
        </div>

        <br />
        <div class="row">
          <div class="col-md-4 offset-8">
            <input
              type="submit"
              class="btn btn-primary btn-block"
              name="next"
              value="Finalizar ➤"
              id="next2"
            />
          </div>
        </div>
      </form>
    </div>

    <?php
    
if(isset($_POST['next'])){
  ini_set( 'default_charset', 'utf-8');

CadastrarFormacao (
  $_POST['nm_curso'],
  $_POST['nm_instituicao'],
  $_POST['dt_ano_conclusao'],
  $_SESSION['codigo']
);

CadastrarExperencia(
  $_POST['nm_empresa'],
  $_POST['dt_inicio'],
  $_POST['dt_fim'],
  $_POST['cargo'],
  $_POST['funcao_cargo'],
  $_SESSION['codigo']

);

echo ("<script>window.location.href='./templatess/index.html';</script>");


}else{
 
}

    ?>
  </body>
</html>
