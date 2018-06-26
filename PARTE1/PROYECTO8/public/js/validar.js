function validar() {
  var valor=document.getElementById('nombre').value;
  var valor2=document.getElementById('participantes').value;
  
  if (valor == "") {
    alert("Rellene porfavor todos los campos");
    return false;
  } else if (valor2 == "") {
    alert("Rellene porfavor todos los campos");
    return false;
  } else if ((valor2>=1)&&(valor2<=5)) {
    return true;
  } else {
    alert("El campo curso tiene que ser entre el 1 y el 5");
    return false;
  }
}