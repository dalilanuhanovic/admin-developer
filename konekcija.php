<?php 
	$servername = "Projekat";
	$user = "root";
	$password = "";
	$dbname = "sifrarnici";

	// Kreiranje konekcije
	$conn = new mysqli($servername, $user, $password, $dbname);
 


	if($conn) {
		echo "konekcija je uspjela";
	}
	else{
		echo "konekcija nije uslpjela";
	}

?>