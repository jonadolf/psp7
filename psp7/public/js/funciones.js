

$(document).on('ready',function(){
    $("body").on('click', '#asigna', function () {
        console.log("Click")
        var numProyecto = $("#numProyecto").val();
        var estado = $("#estado").val();
        var idEstudiante = $("#idEstudiante").val();
        var ruta = "/Tareas/asignar";
        var token = $("#token").attr('content');
        console.log(numProyecto);
        console.log(estado);
        console.log(idEstudiante);
        console.log(ruta);    
           $.ajax({
            url: ruta,
            headers:{'X-CSRF-TOKEN': token},
            type: 'POST',
            dataType: 'json',
            data:{idEstudiante:idEstudiante,
                    numProyecto:numProyecto, 
                    estado:estado,
                   }
            })
            .done(function(response) {
                console.log(response);
            })

            .fail(function() {
              console.log("error");
            })

            .always(function() {
              console.log("complete");
            })


          
    });

});

