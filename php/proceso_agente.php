<?php

	$tipoUsuario = 2;
	$nombre = $_POST['txtNombre'];
	$email = $_POST['txtCorreo'];
	$empresa = $_POST['txtEmpresa'];
	$mensaje = $_POST['txtMensaje'];
	$status = 1;
	
	try {
	    $gbd = new PDO('mysql:host=localhost;dbname=probns', 'root', '');

	    $sql = $gbd->prepare("INSERT INTO USUARIOS (idTipoUsuario,Nombre, Email, Empresa, Mensaje, Status) 
	    					  VALUES(:tipoUsuario,:nombre, :email, :empresa, :mensaje, :status)");
	    $sql->bindParam(':tipoUsuario', $tipoUsuario);
	    $sql->bindParam(':nombre', $nombre);
	    $sql->bindParam(':email', $email);
	    $sql->bindParam(':empresa', $empresa);
	    $sql->bindParam(':mensaje', $mensaje);
	    $sql->bindParam(':status', $status);

	    $sql->execute();

		header("Location: http://www.probns.com/registro");

	} catch (PDOException $e) {
	    print "¡Error!: " . $e->getMessage() . "<br/>";
	    die();
	}
?>