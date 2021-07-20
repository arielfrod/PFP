<?php
class profesor extends Persona {
    private $curso;
    private $turno;
    private $aula;
    private $titulo;



    public function __constructor($curso, $turno, $aula, $titulo){
        $this->$curso = $curso; 
        $this->$turno = $turno; 
        $this->$aula = $aula; 
        $this->$titulo = $titulo;
    }


    

}