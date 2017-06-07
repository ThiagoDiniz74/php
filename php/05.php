  <meta charset="UTF-8">	
<?php  
if(isset($_POST['n1'])){

	$n1 = $_POST['n1'];
	if($n1 > 10){
		echo "Marior que 10 ";
	}
	elseif($n1 < 9){
		echo "Menor que 10 ";
	}


}//Fecha isset