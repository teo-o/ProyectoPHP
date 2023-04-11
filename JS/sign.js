
function validatePassword() {
  var password1 = document.getElementById("password").value;
  var password2 = document.getElementById("password2").value;
  if (password1 != password2) {
    swal("Error", "Las contraseñas no coinciden", "error");
    return false; // evitar que el formulario se envíe
  }
  return true; // permitir el envío del formulario
}