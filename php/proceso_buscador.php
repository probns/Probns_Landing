<?php

	$tipoUsuario = 1;
	$nombre = $_POST['txtNombre'];
	$email = $_POST['txtCorreo'];
	$zonaInteres = $_POST['txtArea'];
	$status = 1;
	
	try {
	    $gbd = new PDO('mysql:host=localhost;dbname=probns', 'root', '');

	    $sql = $gbd->prepare("INSERT INTO USUARIOS (idTipoUsuario,Nombre, Email, zonaInteres, Status) 
	    					  VALUES(:tipoUsuario,:nombre, :email, :zonaInteres, :status)");
	    $sql->bindParam(':tipoUsuario', $tipoUsuario);
	    $sql->bindParam(':nombre', $nombre);
	    $sql->bindParam(':email', $email);
	    $sql->bindParam(':zonaInteres', $zonaInteres);
	    $sql->bindParam(':status', $status);

	    $sql->execute();

		header("Location: http://www.probns.com/registro");

	} catch (PDOException $e) {
	    print "¡Error!: " . $e->getMessage() . "<br/>";
	    die();
	}
?>