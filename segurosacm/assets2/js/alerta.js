const boton = document.querySelector('#contact-form');
boton.addEventListener('submit', aplicar);

function aplicar(e){
	e.preventDefault();
	const valor = document.querySelector('#name').value;

	if (valor ==="") {
		//Mostrar la alerta
		Swal.fire({
			title: 'Error',
			text: 'Los campos son obligatorios',
			icon: 'error',
			confirmButtonText: 'Confirmar'
		})
	}else{
		Swal.fire({
			title: 'Muchas Gracias!',
			text: 'Tu consulta fue enviada',
			icon: 'success',
			confirmButtonText: 'Confirmar'
		})
	}
}