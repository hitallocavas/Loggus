<?php 

$Nome = $_POST['Nome'];
$Latitude = $_POST['Latitude'];
$Longitude = $_POST['Longitude'];
$Municipio = $_POST['Municipio'];

$connect = mysql_connect('localhost','root','hit@sport');
$db = mysql_select_db('login');
$query_select = "SELECT Nome FROM Escola WHERE Nome = '$Nome'";
$select = mysql_query($query_select,$connect);
$array = mysql_fetch_array($select);
$logarray = $array['Nome'];

  if($Nome == "" || $Nome == null){
    echo"<script language='javascript' type='text/javascript'>alert('O campo Nome deve ser preenchido');window.location.href='cadastro.html';</script>";

    }else{
      if($logarray == $Nome){

        echo"<script language='javascript' type='text/javascript'>alert('Essa Escola já existe');window.location.href='index.html';</script>";
        die();

      }else{
        $query = "INSERT INTO Escola(Nome, Latitude, Longitude, Municipio) VALUES ('$Nome', '$Latitude', '$Longitude', '$Municipio')";
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