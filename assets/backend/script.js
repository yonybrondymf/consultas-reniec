$(document).ready(function(){
	$("#form-search").submit(function(e){
		e.preventDefault();
		var url = $(this).attr("action");
		var type = $(this).attr("method");
		var data = $(this).serialize();
		$.ajax({
			url: url,
			type: type,
			data: data,
			dataType: "json",
			success: function(response){
				if (response.success) {
					$("#info-persona").show();
					$("#dni").val(response.result.dni);
					$("#ape_materno").val(response.result.materno);
					$("#ape_paterno").val(response.result.paterno);
					$("#sexo").val(response.result.sexo);
					$("#fecnac").val(response.result.nacimiento);
					$("#nombres").val(response.result.nombre);
				}else{
					$("#info-persona").hide();
					swal("Error!", response.message+ "...intentalo nuevamente", "error");

				}
			}
		});
	});	
});