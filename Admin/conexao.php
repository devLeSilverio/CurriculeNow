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






//--------------Complementares

function alert($msg){
      echo '<script> alert("'.$msg.'"); </script>';
}


?>