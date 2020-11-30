<?php

//variaveis de configuração da conexão com o banco de dados 
    $serv = "localhost";
    $user = "root";
    $senha = "usbw";
    $banco = "db_curriculo";

    $conexao = new mysqli($serv,$user,$senha,$banco);
    $conexao->query("SET NAMES 'utf8'");
    $conexao->query('SET character_set_connection=utf8');  
    $conexao->query('SET character_set_client=utf8');
    $conexao->query('SET character_set_results=utf8');


    if(!$conexao){
      echo"Erro ao conectar com o banco".$conexao->error;
  }

 // -----------------------------------------User-----------------------------------
 function CadastrarUsuario($nm_user,$foto,$email,$senha,$nacionalidade,$idade,$estado_civil,
 $telefone_residencial,$telefone_celular,$logradouro,$endereco,$complemento,$objetivo){
  $sql = 'INSERT INTO tb_usuario VALUES(null,"'.$nm_user.'","'.$foto.'","'.$email.'","'.$senha.'","'.$nacionalidade.'","'.$idade.'","'.$estado_civil.'","'.$telefone_residencial.'","'.$telefone_celular.'","'.$logradouro.'","'.$endereco.'","'.$complemento.'","'.$objetivo.'")';
  $res = $GLOBALS['conexao']->query($sql);
  if($res){
      alert("Usuario Cadastrado com sucesso");
  }
  else{
      alert("Usuario não cadastrado".$GLOBALS['conexao']->error);
  }
}

function ListarUsuario(){
  $sql = 'SELECT * FROM tb_usuario';
  $res = $GLOBALS['conexao']->query($sql);
  return $res;
}

//---------------------------tb_info_adicionais--------------------------

function ListarInfoAdicionais(){
  $sql = 'SELECT * from tb_info_adicionais';
  $res = $GLOBALS['conexao']->query($sql);
  return $res;
}

//------------------------------------tb_formacao_academica 

function CadastrarFormacao($nm_curso,$nm_instituicao,$dt_ano_conclusao,$id_usuario){
  $sql = 'INSERT INTO tb_info_adicionais VALUES(null,"'.$nm_curso.'","'.$nm_instituicao.'","'.$dt_ano_conclusao.'",'.$id_usuario.')';
  $res = $GLOBALS['conexao']->query($sql);
  if($res){
    alert("Informações cadastradas com sucesso!");
  }
  else{
     alert("Informações não cadastradas".$GLOBALS['conexao']->error);
  }
}

function ListarFormacao(){
  $sql = 'SELECT * FROM tb_formacao_academica';
  $res= $GLOBALS['conexao']->query($sql);
  return $res;


}

//--------------------tb_localizacao
function CadastrarLocalizacao($estado,$cidade,$cep,$id_usuario){
  $sql = 'INSERT INTO tb_localizacao VALUES(null, "'.$estado.'","'.$cidade.'","'.$cep.'",'.$id_usuario.')';
  $res = $GLOBALS['conexao']->query($sql);
  if($res){
    alert("Informações cadastradas com sucesso!");
  }
  else{
     alert("Informações não cadastradas".$GLOBALS['conexao']->error);
  }
}

function ListarLocalizaca(){
  $sql = 'SELECT * FROM tb_localizacao';
  $res= $GLOBALS['conexao']->query($sql);
  return $res;
}

//---------------------tb_experiencia
function CadastrarExperencia($nm_empresa,$dt_inicio,$dt_fim,$cargo,$funcao_cargo,$atividades_complementares,$id_usuario){
$sql = 'INSERT INTO tb_experiencia VALUES(null,"'.$nm_empresa.'","'.$dt_inicio.'","'.$dt_fim.'","'.$cargo.'","'.$funcao_cargo.'","'.$atividades_complementares.'",'.$id_usuario.')';
if($res){
  alert("Informações cadastradas com sucesso!");
}
else{
   alert("Informações não cadastradas".$GLOBALS['conexao']->error);
}
}

function ListarExperiencia (){
  $sql = 'SELECT * FROM tb_experiencia';
  $res= $GLOBALS['conexao']->query($sql);
  return $res;
}

//--------------Complementares

function alert($msg){
      echo '<script> alert("'.$msg.'"); </script>';
}


?>

