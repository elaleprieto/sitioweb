(function() {
  var camposRellenos, removerClases, removerMensajes;

  jQuery(function() {
    return $('#formulario').on('submit', function(evento) {
      evento.preventDefault();
      removerMensajes();
      removerClases();
      if (camposRellenos()) {
        return $.post(WEBROOT + "users/contactar", $('#formulario').serialize(), function(data) {
          console.info('ok');
          $('#imagen-correo').addClass('imagen-correo-enviado');
          return setTimeout("$('#imagen-correo').removeClass('imagen-correo-enviado')", 4000);
        });
      } else {
        return console.error('error');
      }
    });
  });

  camposRellenos = function() {
    var consulta, correo, nombre, spanHelpInline;
    nombre = $('#nombre').val();
    correo = $('#correo').val();
    consulta = $('#consulta').val();
    if (!(nombre != null) || nombre === '') {
      spanHelpInline = $('<span id="helpInlineNombre"></span>').addClass('help-inline').text('Debe completar el nombre');
      $('#controlGroupNombre').addClass('error');
      $('#controlGroupNombre > div.controls').append(spanHelpInline);
    }
    if (!(correo != null) || correo === '') {
      spanHelpInline = $('<span id="helpInlineCorreo"></span>').addClass('help-inline').text('Debe completar el correo');
      $('#controlGroupCorreo').addClass('error');
      $('#controlGroupCorreo > div.controls').append(spanHelpInline);
    }
    if (!(consulta != null) || consulta === '') {
      spanHelpInline = $('<span id="helpInlineConsulta"></span>').addClass('help-inline').text('Debe completar el mensaje');
      $('#controlGroupConsulta').addClass('error');
      $('#controlGroupConsulta > div.controls').append(spanHelpInline);
    }
    return (nombre != null) && nombre !== '' && (correo != null) && correo !== '' && (consulta != null) && consulta !== '';
  };

  removerMensajes = function() {
    $('#helpInlineNombre').remove();
    $('#helpInlineCorreo').remove();
    return $('#helpInlineConsulta').remove();
  };

  removerClases = function() {
    $('#controlGroupNombre').removeClass('error');
    $('#controlGroupCorreo').removeClass('error');
    return $('#controlGroupConsulta').removeClass('error');
  };

}).call(this);
