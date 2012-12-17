jQuery ->
  $('#formulario').on 'submit', (evento) ->
    evento.preventDefault()
    removerMensajes()
    removerClases()
    if(camposRellenos())
      $('#div-enviando').addClass('div-enviando-show');
      $.post WEBROOT + "users/contactar", $('#formulario').serialize(), (data) ->
        console.info 'ok'
        $('#imagen-correo').addClass('imagen-correo-enviado')
        setTimeout "$('#imagen-correo').removeClass('imagen-correo-enviado')", 4000
        $('#div-enviando').removeClass('div-enviando-show')
        $('#mensaje').show()
        $('#nombre,#correo,#consulta').val('')

camposRellenos = ->
  nombre = $('#nombre').val()
  correo = $('#correo').val()
  consulta = $('#consulta').val()
  if not nombre? or nombre is ''
    spanHelpInline = $('<span id="helpInlineNombre"></span>').addClass('help-inline').text('Debe completar el nombre');
    $('#controlGroupNombre').addClass('error')
    $('#controlGroupNombre > div.controls').append spanHelpInline
  if not correo? or correo is ''
    spanHelpInline = $('<span id="helpInlineCorreo"></span>').addClass('help-inline').text('Debe completar el correo');
    $('#controlGroupCorreo').addClass('error')
    $('#controlGroupCorreo > div.controls').append spanHelpInline
  if not consulta? or consulta is ''
    spanHelpInline = $('<span id="helpInlineConsulta"></span>').addClass('help-inline').text('Debe completar el mensaje');
    $('#controlGroupConsulta').addClass('error')
    $('#controlGroupConsulta > div.controls').append spanHelpInline
  nombre? and nombre isnt '' and correo? and correo isnt '' and consulta? and consulta isnt ''

removerMensajes = ->
  $('#helpInlineNombre').remove()
  $('#helpInlineCorreo').remove()
  $('#helpInlineConsulta').remove()

removerClases = ->
  $('#controlGroupNombre').removeClass('error')
  $('#controlGroupCorreo').removeClass('error')
  $('#controlGroupConsulta').removeClass('error')
