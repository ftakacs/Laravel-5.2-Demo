$(document).ready( function() {
	$("#formEvento").validate({
		// Define as regras
		rules:{
			nome:{
				// nome será obrigatório (required) e terá tamanho mínimo (minLength)
				required: true, minlength: 2
			},
			local:{
				// nome será obrigatório (required) e terá tamanho mínimo (minLength)
				required: true, minlength: 2
			},

		},
		// Define as mensagens de erro para cada regra
		messages:{
			nome:{
				required: "Digite o nome do evento",
				minLength: "O nome do evento deve conter no mínimo 2 caracteres"
			},
			local:{
				required: "Digite o local do evento",
				minLength: "O local do evento deve conter no mínimo 2 caracteres"
			},

		}
	});
});