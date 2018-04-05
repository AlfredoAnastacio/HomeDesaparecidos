$(document).ready(function()
{
	$('#idNacionalidad').on('change', function(){
        $("#ocupacion").empty();
        var idNacionalidad = $(this).val();
        if(idNacionalidad) {
        	console.log("hola");
            $.ajax({
                url: '/nacionalidad/'+idNacionalidad,
                type:"GET",
                dataType:"json",

                success:function(data) {
                		console.log("adios");

                		$("#ocupacion").empty();

                    $.each(data, function(key, value){
                    	console.log(value);

                        $("#ocupacion").append('<input value="'+ value.id +'">' +  value.lada + '</input>');
                    });

                },
                
            });
        } else {
            $('#ocupacion').empty();
        }
    });
});