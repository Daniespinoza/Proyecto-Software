$(function () {
    $("#link_recuperar_pass").on('click', function () {
        $("#recuperar").show();
        $("#logindiv").hide();
        $(".form-control").val("");
        $('#respuesta_boton').empty();
        $('.code_verificacion').val("");
    });
})

$(function () {
    $("#link_volver").on('click', function () {
        $("#recuperar").hide();
        $("#logindiv").show();
        $("recuperar-pass").val("");
        $('#respuesta_boton').empty();
        $('.code_verificacion').val("");
    });
})

$(document).on('click', '.btn_recuperar_contrasena', function () {
    $('#respuesta_boton').empty();

    url = '/parametro/portada/recuperar';
    $.getJSON(url, {
        rut: $('.recuperar-pass').val(),
        code: $('.code_verificacion').val()
    }, function (data) {

        if (data.estado === false) {
            $('#respuesta_boton').removeClass('infobox-red infobox-blue center').addClass('infobox-red center');
        } else {
            $('#respuesta_boton').removeClass('infobox-red infobox-blue center').addClass('infobox-blue center');
        }
        $('#respuesta_boton').append(data.mensaje);
    });
    $(".form-control").val("");
    $('.code_verificacion').val("");
});
