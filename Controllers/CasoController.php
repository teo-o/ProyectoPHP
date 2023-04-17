<?php
require_once('../Class/Caso.php');
require_once('../Class/BaseDatos.php');

class CasoController
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

    public function mostrarCasos()
    {
        $consulta = "SELECT * FROM casos";
        $resultados = $this->bd->ejecutarConsulta($consulta);

        $casos = array();
        while ($fila = $resultados->fetch_assoc()) {
            $caso = new Caso($fila['id'], $fila['fecha'], $fila['id_empleado_asignado']);
            array_push($casos, $caso);
        }

        return $casos;
    }

    public function eliminarCaso($id)
    {
        $consulta = "DELETE FROM casos WHERE id=$id";
        $this->bd->ejecutarConsulta($consulta);

        header('Location: Casos.php');
    }
}
