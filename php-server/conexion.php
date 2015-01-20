<?php 

	try {
		$gbd = new PDO('mysql:host=localhost;dbname=probns', 'rodblanco27', 'Kipokipo1');
		echo "conexion exitosa";
	} catch (PDOException $e) {
	    print "¡Error!: " . $e->getMessage() . "<br/>";
	    die();
	}
?>