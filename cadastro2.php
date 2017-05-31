<?php 

$CNPJ = $_POST['CNPJ']; 
$Nome =$_POST['Nome'];
$Rua =$_POST['Rua'];
$Numero= $_POST['Numero'];
$Bairro =$_POST['Bairro'];
$Municipio =$_POST['Municipio'];
$Estado =$_POST['Estado'];
$Representante =$_POST['Representante'];
$Telefone =$_POST['Telefone'];
$Licitacao =$_POST['Licitacao'];
$Contrato =$_POST['Contrato'];
$Inicio_contrato=$_POST['Inicio_contrato'];
$Fim_contrato =$_POST['Fim_contrato'];
$Secretaria_Educacao= $_POST['Secretaria_Educacao'];
$Controlador=$_POST['Controlador'];
$Cpf_Controlador= $_POST['Cpf_Controlador'];
$Fiscal=$_POST['Fiscal'];
$Cpf_Fiscal =$_POST['Cpf_Fiscal'];
$telefone_fiscal=$_POST['telefone_fiscal'];
$email =$_POST['email'];


$connect = mysql_connect('localhost','root','hit@sport');
$db = mysql_select_db('login');
$query_select = "SELECT CNPJ FROM Prefeitura WHERE CNPJ = '$CNPJ'";
$select = mysql_query($query_select,$connect);
$array = mysql_fetch_array($select);
$logarray = $array['CNPJ'];

  if($CNPJ == "" || $CNPJ == null){
    echo"<script language='javascript' type='text/javascript'>alert('O campo login deve ser preenchido');window.location.href='cadastro.html';</script>";

    }else{
      if($logarray == $CNPJ){

        echo"<script language='javascript' type='text/javascript'>alert('Essa prefeitura já existe');window.location.href='index.html';</script>";
        die();

      }else{
        $query = "INSERT INTO Prefeitura(CNPJ,Nome,Rua,Numero,Bairro,Municipio, Estado, Representante, Telefone, Licitacao, Contrato, Inicio_contrato,Fim_contrato, Secretaria_Educacao, Controlador,Cpf_Controlador, Fiscal,Cpf_Fiscal, telefone_fiscal,email) 
        VALUES ('$CNPJ', '$Nome','$Rua','$Numero', '$Bairro','$Municipio', '$Estado', '$Representante', '$Telefone', '$Licitacao', '$Contrato', '$Inicio_contrato','$Fim_contrato', '$Secretaria_Educacao', '$Controlador','$Cpf_Controlador', '$Fiscal','$Cpf_Fiscal','$telefone_fiscal','$email')";
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