<?php
class profesor extends Persona
{
    private $persona;

    private $condicion;
    private $titulo;



    public function __constructor($persona, $condicion, $titulo)
    {
        $this->$persona = $persona;
        $this->$condicion = $condicion;
        $this->$titulo = $titulo;
    }
}
