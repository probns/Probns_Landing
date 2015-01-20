<?php 

	try {
		$gbd = new PDO('mysql:host=localhost;dbname=probns', 'root', '');
		echo "conexion exitosa";
	} catch (PDOException $e) {
	    print "¡YOLO!: " . $e->getMessage() . "<br/>";
	    die();
	}
?>