// funciones jquery
$(document).ready(function () {
  $('#ruta').hide();
  $('#radioImg1').click(function () {
    $('#ruta').hide();
    $('#file').show();
  })
  $('#radioImg2').click(function () {
    $('#file').hide();
    $('#ruta').show();
  })
  // para el mensaje de suscripcion
  $('#alerta').fadeOut(6000);
  // para el captcha
  $('#enviar').click(function () {
    grecaptcha.ready(function () {
      grecaptcha.execute('6LcbeUcaAAAAALbTEMH4a3xVY2USMQHWh4d6zeUJ', { action: 'submit' }).then(function (token) {
        $('#form-enviar').prepend('<input type="hidden" name="token" value="' + token + '" >');
        $('#form-enviar').prepend('<input type="hidden" name="action" value="submit" >');
        $('#form-enviar').submit();
      });
    });
  })
})
