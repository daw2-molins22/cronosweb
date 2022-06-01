const formulario = document.getElementById('formulario'); //id formulario
const inputs = document.querySelectorAll('#formulario input') //Selciona todo los inputs



//Expresiones de validación en los formularios
const expresiones = {
	correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-.]+$/,
	password: /^.{4,12}$/ // 4 a 12 digitos
}


/*const campos{
	correo: false;
	password: false;
}*/


const validarFormulario = (e) => {
	switch(e.target.name){
		case "correo":
			validarCampo(expresiones.correo, e.target, 'correo');
		break;
		case "password":
			validarCampo(expresiones.correo, e.target, 'password');
		break;
	}
}

const validarCampo = (expresiones, input, campo) => {
	if(expresion.test(input.value)){
		document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-incorrecto');
		document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-correcto');
		document.getElementById(`#grupo__${campo}`).classList.add('fa-check-circle');
		document.getElementById(`#grupo__${campo}`).classList.remove('fa-times-circle');
		document.getElementById(`#grupo__${campo} .formulario__input-error`).classList.remove('formulario__input-error');

	}
}


inputs.forEach((input) => {
	input.addEventListener('keyup', validarFormulario);
	input.addEventListener('blur', validarFormulario);


});



/*Es Para no enviar los datos*/
/*Primero de todo queremos que se validen*/
formulario.addEventListener('submit', (e) => {
	e.preventDefault();

	/*Para comprobar que los datos estan correctos*/
	if(correo && password){

	}
});



