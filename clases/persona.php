<?php

abstract class Persona {
    private $nombre;
    private $apellido;
    private $edad;
    private $direccion;
    private $telefono;
    private $descripcion;

    public function __constructor($nombre, $apellido, $edad, $direccion, $telefono, $descripcion){
        $this->$nombre = $nombre; 
        $this->$apellido = $apellido; 
        $this->$edad = $edad; 
        $this->$direccion = $direccion; 
        $this->$telefono = $telefono; 
        $this->$descripcion = $descripcion;
    }




}


///public function __constructor(){}