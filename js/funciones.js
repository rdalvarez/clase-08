function Ingresar(){

	var user = $("#user").val();
	var pass = $("#pass").val();

	alert("Ingresar \n User: "+ user+ "\n Pass: "+pass);

	var pagina = "nexo.php";

	$.ajax({
		type: 'POST',
		url: pagina,
		data: {
			user:user,
			pass:pass
		}
	})
	.then(function bien(respuesta){
		alert(respuesta);
	}
	,function error(jqXHR, textStatus, errorThrown) {
        console.log("ERROR: "+jqXHR.responseText + "\n" + textStatus + "\n" + errorThrown);
    });

}