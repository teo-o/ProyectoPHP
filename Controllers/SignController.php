<?php
require_once '../Class/BaseDatos.php';
require_once '../Class/Empleado.php';

class SignController
{
  private $bd;

  public function __construct()
  {
    require_once('../Config/config.php');
    $this->bd = new BaseDatos($host, $user, $password, $dbname);
    $this->bd->conectar();
  }

  public function registrarEmpleado($id, $nombre, $apellido, $telefono, $password)
  {
    // Validación de datos
    if (empty($nombre) || empty($apellido) || empty($telefono) || empty($password)) {
      // Mostrar mensaje de error en caso de datos faltantes
      echo "<script>
                    Swal.fire({
                      icon: 'error',
                      title: 'Error!',
                      text: 'Por favor, complete todos los campos'
                    });
                  </script>";
    } else {

      // Verificar si el correo electrónico ya existe en la base de datos
      $consulta = "SELECT * FROM empleados WHERE telefono='$telefono'";
      $resultados = $this->bd->ejecutarConsulta($consulta);

      if ($resultados->num_rows > 0) {
        // Mostrar mensaje de error en caso de que el correo electrónico ya exista
        echo "<script>
                        Swal.fire({
                          icon: 'error',
                          title: 'Error!',
                          text: 'El correo electrónico ya está registrado'
                        });
                      </script>";
      } else {

        $consulta = "INSERT INTO empleados (id, nombre, apellido, telefono, contraseña) VALUES ('$id','$nombre', '$apellido', '$telefono', '$password')";
        $this->bd->ejecutarConsulta($consulta);

        // Mostrar mensaje de éxito
        echo "<script>
                        swal.fire({
                          icon: 'success',
                          title: 'Éxito!',
                          text: 'Empleado registrado satisfactoriamente'
                        });
                      </script>";
        echo "<script> window.location.href='../Views/Login.php'; </script>";
      }
    }
  }

  public function __destruct()
  {
    $this->bd->desconectar();
  }
}
