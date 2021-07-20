<?php
class alumno extends Persona {
    private $curso;
    private $turno;
    private $aula;


    public function __constructor($curso, $turno, $aula){
        $this->$curso = $curso; 
        $this->$turno = $turno; 
        $this->$aula = $aula; 
    }


    

}