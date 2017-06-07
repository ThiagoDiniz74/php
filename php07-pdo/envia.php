<?php
//conexao com bancos de dados

$conecta = new PDO("mysql:host=localhost;dbname=tec;" , "root" , "");

//dados obtidos pelo fomulario

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha1'];
$repita = $_POST['senha2']; 

 //inserir na tabela

$sql = 'insert into cadastro (id,nome,email,senha,confirma) values(null, "'.$nome.'","'.$email.'","'.$senha.'","'.$repita.'")';

$insere = $conecta->prepare ($sql);
$insere ->execute();

//imprimindo msg de sucesso
echo("cadastro preenchido com sucesso!");



 ?>