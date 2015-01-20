$(document).ready(function() {

	//variables a utilizar
	var txtNombre = $('#txtNombre');
	var txtTelefono = $('#txtTelefono');
	var txtCorreo = $('#txtCorreo');
	var txtArea = $('#txtArea');

	//funciones de validación
	function validarNombre() {
		if(txtNombre.val().length < 3) {
			txtNombre.addClass("error");
			return false;
			console.log("nombre muy pequeño");
		}
		else if (txtNombre.val().match(/^[a-zA-Z]+$/)) {
			txtNombre.addClass("error");
			return false;
			console.log("nombre con números");
		}
		else {
			txtNombre.removeClass("error");
			return true;
			console.log("estamos ready");
		}
	}

	function validarTelefono() {
		if(txtTelefono.val().length < 1) || (txtTelefono.val().length > 8)  {
			txtTelefono.addClass("error");
			return false;
		}

		else if (isNaN(txtTelefono.val())) {
			txtTelefono.addClass("error");
			return false;
		}

		else {
			txtTelefono.removeClass("error");
			return true;
		}
	}

	function validarCorreo() {
		if (txtCorreo.val().length == 0) {
			txtCorreo.addClass("error");
			return false;
		}

		else if (txtCorreo.val().match(/^[^\s()<>@,;:\/]+@\w[\w\.-]+\.[a-z]{2,}$/i)) {
			txtCorreo.addClass("error");
			return false;
		}

		else {
			txtCorreo.removeClass("error");
			return true;
		}
	}

	function validarArea() {
		if (txtArea.val().length == 0) {
			txtArea.addClass("error");
			return false;
		}

		else {
			txtArea.removeClass("error");
			return true;
		}
	}

	//eventos de Validación

	//blur ** Focus **
	txtNombre.blur(validarNombre);
	txtTelefono.blur(validarTelefono);
	txtCorreo.blur(validarCorreo);
	txtArea.blur(validarArea);

	//keyUp
	txtNombre.keyup(validarNombre);
	txtCorreo.keyup(validarCorreo);
	txtTelefono.keyup(validarTelefono);

	//validación de formulario

	$('.compradorForm').submit(function() {
		if (validarNombre() & validarTelefono() & validarCorreo() & validarArea()) {
			return true;
		}
		else {
			return false;
		}
	});
});