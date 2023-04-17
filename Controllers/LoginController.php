<?php

require_once '../Class/BaseDatos.php';
require_once '../Class/Empleado.php';

class LoginController
{

    private $bd;

    public function __construct()
    {
        require_once('../Config/config.php');
        $this->bd = new BaseDatos($host, $user, $password, $dbname);
        $this->bd->conectar();
    }

    public function validarLogin($id, $contrasena)
    {
        if (!empty($_POST['usuario']) && !empty($_POST['contrasena'])) {
            $id= $_POST['usuario'];
            $contrasena = $_POST['contrasena'];

            // Validar los datos de inicio de sesión
            $consulta = "SELECT * FROM empleados WHERE id = '$id' AND contraseña = '$contrasena'";
            $resultados = $this->bd->ejecutarConsulta($consulta);
            echo $resultados->num_rows;
            if ($resultados->num_rows > 0) {
                echo "<script> window.location.href='../Views/menu.php'; </script>";
                exit();
            }
        }

        echo "<script>
            swal.fire({
              icon: 'error',
              title: 'Error!',
              text: 'Los datos de inicio de sesión no son válidos'
            });
        </script>
        ";
    }
}
