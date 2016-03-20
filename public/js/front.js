$(document).ready(function(){
	
	var contatoValidate = function(){
		$("#formContato").validate(
				 {
				  rules: {
						nome: {
					      required: true,
					      minlength: 3,
					      maxlength: 100
					    },
					    email: {
					      required: true,
					      email: true
					    },
					    mensagem: {
					      required: true,
						  maxlength: 2000 	
					    }
				  },
				  messages:{
					  	nome:{
					  		required: 'Campo obrigatório',
				            minlength: "Erro: Este campo deve ter no mínimo 3 caracteres",
				            maxlength: "Erro: Este campo deve ter no máximo 100 caracteres"
					  	},
					  	email:{
					  		required: 'Campo obrigatório',
				            email: "Erro: Forneça um e-mail válido"
					  	},
					  	mensagem:{
					  		required: 'Campo obrigatório',
				            maxlength: "Erro: Este campo deve ter no máximo 2000 caracteres"
					  	},
				       
			       },
				  errorClass: "help-block",
				  highlight: function(label) {
				    $(label).closest('.form-group').removeClass('has-success').addClass('has-error');
				  },
				  success: function(label) {
				    label
				      .text('').addClass('valid')
				      .closest('.form-group').addClass('has-success').removeClass('has-error');
				  }
			});//end $('#formContato').validate
	}//end contatoValidate
	
	$("#contato").load("/contato",function(){
		contatoValidate();
	});
	
	$("#evento").load("/eventos");
	
	$.validator.setDefaults({
		submitHandler: function() {
			token = $('input[name=_token]').val();
			dados = $('#formContato').serialize();
			$("#contato").html('<p>enviando</p><img src="img/ajax-loader-5.gif" title="img/ajax-loader-5.gif">');
			$.ajax({
			  type: "POST",
			  headers: {'X-CSRF-TOKEN': token},
			  url: "/contato",
			  data: dados,
			  datatype: 'JSON'
			}).done(function( msg ) {
				$("#contato").html(msg);
				contatoValidate();
			});
		}
	 });//end .validator.setDefaults
	$(".navbar-brand").click(function(e){
		e.preventDefault();
		$('html,body').animate({scrollTop: "0"},2000,'easeInOutElastic');
	})
	
	var links = $('.menu').find('a');
    //on links click
    links.click(function (e) {
        	e.preventDefault();
        	pos = $(e.currentTarget.hash).offset().top;
        	console.log(pos);
        	$('html,body').animate({scrollTop: pos},2000,'easeInOutElastic');
    });//end links.click
	
});//end document.ready