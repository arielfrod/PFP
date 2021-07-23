<?php
class alumno extends Persona
{
    private $persona;
    private $curso = [];
    private $condicion;
    private $estado;


    public function __constructor($persona, $curso, $condicion, $estado)
    {
        $this->$persona = $persona;
        $this->$curso = $curso;
        $this->$condicion = $condicion;
        $this->$estado = $estado;
    }
}
