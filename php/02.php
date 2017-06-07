  <meta charset="UTF-8">	
<?php  
if(isset($_POST['n1'])){

	$n1 = $_POST['n1'];
	$resultado = $n1 % 2;
		if ($resultado == 0) {
			echo "O numero é par";
		}else{
			echo "O numero é impar";
		}//Fecha if

}//Fecha isset