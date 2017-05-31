<?php 

$nome = $_POST['name'];
$senha = $_POST['senha'];
$usuario = $_POST['usuario'];
$endereco = $_POST['endereco'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];
$nivel = $_POST['nivel'];

$connect = mysql_connect('localhost','root','hit@sport');
$db = mysql_select_db('login');
$query_select = "SELECT usuario FROM usuarios WHERE usuario = '$usuario'";
$select = mysql_query($query_select,$connect);
$array = mysql_fetch_array($select);
$logarray = $array['usuario'];

  if($usuario == "" || $usuario == null){
    echo"<script language='javascript' type='text/javascript'>alert('O campo login deve ser preenchido');window.location.href='cadastro.html';</script>";

    }else{
      if($logarray == $usuario){

        echo"<script language='javascript' type='text/javascript'>alert('Esse login já existe');window.location.href='index.html';</script>";
        die();

      }else{
        $query = "INSERT INTO usuarios(nome,usuario,senha,email,nivel,ativo,cadastro,endereco,cpf,rg) VALUES ('$nome','$usuario','$senha','$usuario','$nivel',1,Now( ),'$endereco','$cpf','$rg')";
        $insert = mysql_query($query,$connect);
        
        if($insert){
          echo"<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');window.location.href='login.html'</script>";
        }else{
          echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário');
          window.location.href='area_restrita.html'</script>";
        }
      }
    }
?>