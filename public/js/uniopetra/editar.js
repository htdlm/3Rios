function editar(id) {
    //Modificar el titulo del modal
    $('.modal-title').text('Editar Registro');
    //Modificar el titulo y color del boton del modal
    $('#btnCrear').val('Editar').removeClass('btn-success').addClass('btn-info');
    //Modificar action del form
    $('#frmAgregar').attr('action', 'UniOpeTra/actualizar/' + id);
    $.get('UniOpeTra/mostrar/' + id, function(data) {
        $('select[name=UniId]').find(":selected").attr("selected", false);
        $("select[name=UniId] option[value='" + data.UniId + "']").attr("selected", true);

        $('select[name=OpeId]').find(":selected").attr("selected", false);
        $("select[name=OpeId] option[value='" + data.OpeId + "']").attr("selected", true);

        $('select[name=TraId]').find(":selected").attr("selected", false);
        $("select[name=TraId] option[value='" + data.TraId + "']").attr("selected", true);

        $('input[name=CosUniOpeTra]').val(data.CosUniOpeTra);


        $('textarea[name=ObsUniOpeTra]').val(data.ObsUniOpeTra);
    });
}