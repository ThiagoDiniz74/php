  <meta charset="UTF-8">	
<?php  
if(isset($_POST['n1'])){

	$n1 = $_POST['n1'];
	$r = ($n1 * 1.8) +32;

	if($r){
	echo "A conversao é: " . $r;
	}

}//Fecha isset