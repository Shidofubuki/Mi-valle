// Chiphysi programación suscribete 
// V 0.1 original 
// Autor: Chiphysi   Autor: Jhonatan Cardona  
// Derechos de autor(Suscribete)  


$(function(){
	var ENV_WEBROOT = "../";
	
	$(".btn-agregar-").off("click");
	$(".btn-agregar-").on("click", function(e) {
		var cantidad = $("#txt_cantidad").val();
		var _id = $("#cbo_").val();
		if(_id!=0){
			if(cantidad!=''){
				$.ajax({
					url: 'Controller/Controller.php?page=1',
					type: 'post',
					data: {'_id':_id, 'cantidad':cantidad},
					dataType: 'json',
					success: function(data) {
						if(data.success==true){
							$("#txt_cantidad").val('');
							alertify.success(data.msj);
							$(".detalle-").load('detalle.php');
						}else{
							alertify.error(data.msj);
						}
					},
					error: function(jqXHR, textStatus, error) {
						alertify.error(error);
					}
				});				
			}else{
				alertify.error('Ingrese una cantidad');
			}
		}else{
			alertify.error('Seleccione un ');
		}
	});
	
	$(".eliminar-").off("click");
	$(".eliminar-").on("click", function(e) {
		var id = $(this).attr("id");
		$.ajax({
			url: 'Controller/Controller.php?page=2',
			type: 'post',
			data: {'id':id},
			dataType: 'json'
		}).done(function(data){
			if(data.success==true){
				alertify.success(data.msj);
				$(".detalle-").load('detalle.php');
			}else{
				alertify.error(data.msj);
			}
		})
	});
	
});