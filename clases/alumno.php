<?php
class Alumno extends Persona
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
public function setPersona($persona){ //setter, es un metodo que asigna informacion a un atributo existente
    $this->persona = $persona;
}

public function setCurso($curso){
    $this->curso = $curso;
}

public function setCondicion($condicion){
    $this->condicion = $condicion;
}

public function setEstado($estado){
    $this->estado = $estado;
}
//Getters - Son aquellos metodos que me permiten traer informacion del objeto
public function getPersona(){
    return $this->persona;
}

public function getCurso(){
    return $this->curso;
}

public function getCondicion(){
    return $this->condicion;
}

public function getEstado(){
    return $this->estado;
}

}
?>