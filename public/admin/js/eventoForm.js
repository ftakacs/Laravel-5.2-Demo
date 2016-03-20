 $(document).ready(function (){

	 var carregaCidades = function(){
		 
			if( $(this).val() ) {
				$.getJSON('/ajaxcidades',{estado_id: $(this).val(), ajax: 'true'}, function(j){
					var options = '<option value="">Escolha uma cidade</option>';	
					$.each(j,function( index, value ){
						options += '<option value="' + index + '">' + value + '</option>';
					});
					$('#cod_cidades').html(options).show();
				});
			} else {
				$('#cod_cidades').html('<option value=""> Escolha primeiro um estado </option>');
			}
		};
		$('#cod_estados').change(carregaCidades);
		
});