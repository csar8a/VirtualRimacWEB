function RegistrarLugar() {
    /* DATOS SOLICITANTE */
    var nombre      = $('#nombre').val();
    var descripcion = $('#descripcion').val();
    console.log(1);
    console.log(nombre);
    console.log(descripcion);
    if (nombre.length == 0)         { alert('No debe dejar vacío el campo de nombre'); return; }
    if (descripcion.length == 0)    { alert('No debe dejar vacío el campo descripcion'); return; }

    var formData = new FormData();
    
    formData.append('nombre', nombre);
    formData.append('descripcion', descripcion);
    formData.append('archivo', $('input[type=file]')[0].files[0]); 
    
    $.ajax({
        url: 'C_dashboard/insertarNorma',
        data: formData,
        type: 'POST',
        contentType: false, // NEEDED, DON'T OMIT THIS (requires jQuery 1.6+)
        processData: false, // NEEDED, DON'T OMIT THIS
    }).done(function (response) {
        let data = JSON.parse(response);
        if (data.error == 0) {
            alert('Se registró la norma correctamente');
            location.reload();
        } else {
            alert(data.msj);
        }
    }).fail(function () {
        alert("error");
    });
}