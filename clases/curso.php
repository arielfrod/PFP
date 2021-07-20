<?php
class curso  {
    
    private $aula;
    private $turno;
    private $minimo_alumno;
    private $maximo_alumno;
    private $profesor;
    private $alumnos = [];


    public function __constructor($aula, $turno, $minimo_alumno, $maximo_alumno, $profesor, $alumnos ){
        
        $this->$aula = $aula; 
        $this->$turno = $turno; 
        $this->$minimo_alumno = $minimo_alumno;
        $this->$maximo_alumno = $maximo_alumno; 
        $this->$profesor = $profesor;
        $this->$alumnos = $alumnos;
    }


    

}


