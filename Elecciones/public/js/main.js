function soloLetras(e) {
  var key = e.keyCode || e.which;
  var tecla = String.fromCharCode(key).toLowerCase();
  var letras = "abcdefghijklmnñopqrstuvwxyz";
  var especiales = [8, 32];

  if (letras.indexOf(tecla) == -1 && especiales.indexOf(key) == -1) {
    return false;
  }
}
