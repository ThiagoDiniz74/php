<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP01</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>
<body>
	<form class="form-horizontal" name="form1" id="form1" method="post" action="">
<fieldset>

<!-- Form Name -->
<legend class="text-center">PHP01</legend>
<p class="text-center text-uppercase">Programa: Soma de 2 números:</p>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="n1">N1</label>  
  <div class="col-md-4">
  <input id="n1" name="n1" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="n2">N2</label>  
  <div class="col-md-4">
  <input id="n2" name="n2" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="enviar"></label>
  <div class="col-md-4">
    <button id="enviar" name="enviar" class="btn btn-warning">Enviar</button>
  </div>
</div>

</fieldset>
</form>
<?php 

  //criando variavel para receber n1 e n2
  $n1 = $_POST['n1'];
  $n2 = $_POST['n2'];
  $soma = $n1 + $n2;
  echo $soma;

?>

</body>
</html>