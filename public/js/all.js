$(document).ready(function(){
	checkToast();
	$("#selCategoria").change(function(){
		getSubcategoria();
	});
});

//MENSAJE DE ALERTA
function checkToast(){
	$toastText = $('body').attr('toast');
	if($toastText!=='') Materialize.toast($toastText, 3000);
	$('body').attr('toast', '');
}

//GET SUBCATEGORIAS
function getSubcategoria(){
	var selectedCategoria = $("#selCategoria").val();
	var url="../../api/subcategoria/"+selectedCategoria;
		$.ajax({
			url: url,
			dataType: 'json',
			contentType: 'application/json',
			error: function(error){
				console.log(error);
			},
			success: function(data){
				llenarCombo(data);
				$("#cmbdistrito").html("<option value= disabled selected>Seleccionar</option>");
				$('select').material_select();
			}
		});
}

function llenarCombo(data){
	 $("#selSubcategoria").html("<option value= disabled selected>Seleccionar subcategoria</option>");
    for(var x=0; x<data.length; x++){
    	$("#selSubcategoria").append(
    		"<option value='"+data[x].id+"'>"+data[x].nombre+"</option>"
    		);
    }
    $('select').material_select();
}
//# sourceMappingURL=all.js.map
