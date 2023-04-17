<?php
class Caso {
    private $id;
    private $fecha;
    private $empleado;

    public function __construct($id, $fecha, $empleado) {
        $this->id = $id;
        $this->fecha = $fecha;
        $this->empleado = $empleado;
    }

    public function getId() {
        return $this->id;
    }

    public function getFecha() {
        return $this->fecha;
    }

    public function getEmpleado() {
        return $this->empleado;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setFecha($fecha) {
        $this->fecha = $fecha;
    }

    public function setEmpleado($empleado) {
        $this->empleado = $empleado;
    }
}
