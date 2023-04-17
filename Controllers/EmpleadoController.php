<?php
require_once('../Class/Empleado.php');
require_once('../Class/BaseDatos.php');

class EmpleadoController
{
    private $bd;

    public function __construct()
    {
        require_once('../Config/config.php');
        $this->bd = new BaseDatos($host, $user, $password, $dbname);
        $this->bd->conectar();
    }

    public function __destruct()
    {
        $this->bd->desconectar();
    }

    public function mostrarEmpleados()
    {
        $consulta = "SELECT * FROM empleados";
        $resultados = $this->bd->ejecutarConsulta($consulta);

        $empleados = array();
        while ($fila = $resultados->fetch_assoc()) {
            $empleado = new Empleado($fila['id'], $fila['nombre'], $fila['apellido'], $fila['telefono'], $fila['contraseña']);
            array_push($empleados, $empleado);
        }

        return $empleados;
    }

    public function registrarCaso($id, $fecha, $id_empleado_asignado)
    {
        $consulta = "INSERT INTO casos (id, fecha, id_empleado_asignado) VALUES ('$id', '$fecha', '$id_empleado_asignado')";
        $this->bd->ejecutarConsulta($consulta);
    }

    public function eliminarEmpleado($id)
    {
        $consulta = "DELETE FROM empleados WHERE id=$id";
        $this->bd->ejecutarConsulta($consulta);
    }
}
