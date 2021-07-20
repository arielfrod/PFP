<?php
 class PerfilProfesional  {
    private $nombre;
    private $resolucion;
    private $cantidad_horas_minima;
    private $funciones;
    



    public function __constructor($nombre, $resolucion, $cantidad_horas_minima, $maximo_alumno, $funciones){
        $this->$nombre = $nombre; 
        $this->$resolucion = $resolucion; 
        $this->$cantidad_horas_minima = $cantidad_horas_minima;
        $this->$maximo_alumno = $maximo_alumno; 
        $this->$funciones = $funciones;
    }


    

}