<?php
class BaseDatos {
    private $servidor;
    private $usuario;
    private $contrasena;
    private $nombreBD;
    private $conexion;

    public function __construct($servidor, $usuario, $contrasena, $nombreBD) {
        $this->servidor = $servidor;
        $this->usuario = $usuario;
        $this->contrasena = $contrasena;
        $this->nombreBD = $nombreBD;
    }

    public function conectar() {
        $this->conexion = new mysqli($this->servidor, $this->usuario, $this->contrasena, $this->nombreBD);

        if ($this->conexion->connect_errno) {
            echo "Falló la conexión a MySQL: " . $this->conexion->connect_error;
            exit();
        }
    }

    public function desconectar() {
        $this->conexion->close();
    }

    public function ejecutarConsulta($consulta) {
        $resultado = $this->conexion->query($consulta);
        return $resultado;
    }
}
