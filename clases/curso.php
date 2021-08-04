<?php
class Curso
{
    private $pfp;
    private $aula;
    private $turno;
    private $minimo_alumno;
    private $maximo_alumno;
    private $profesor;
    private $alumnos = [];


    public function __constructor($pfp, $aula, $turno, $minimo_alumno, $maximo_alumno, $profesor, $alumnos)
    {
        $this->$pfp = $pfp;
        $this->$aula = $aula;
        $this->$turno = $turno;
        $this->$minimo_alumno = $minimo_alumno;
        $this->$maximo_alumno = $maximo_alumno;
        $this->$profesor = $profesor;
        $this->$alumnos = $alumnos;
    }
 public function setPfp($pfp){ //setter, es un metodo que asigna informacion a un atributo existente
    $this->pfp = $pfp;
  }
   
 public function setAula($aula){
    $this->aula = $aula;
  }
    
 public function setTurno($turno){
    $this->turno = $turno;
  }
    
 public function setMinimo_alumno($minimo_alumno){
    $this->minimo_alumno = $minimo_alumno;
  }
 public function setMaximo_alumno($maximo_alumno){
    $this->maximo_alumno = $maximo_alumno;
}
public function setProfesor($profesor){
    $this->profesor = $profesor;
}
public function setAlumnos($alumnos){
    $this->alumnos = $alumnos;
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

/*
CREATE TABLE `pfpdb`.`alumno` (
    `id` INT(11) NOT NULL AUTO_INCREMENT , 
    `persona_id` INT(11) NOT NULL , 
    `condicion` VARCHAR(150) NOT NULL , 
    `estado` VARCHAR(150) NOT NULL , PRIMARY KEY (`id`),
   FOREIGN KEY (persona_id) REFERENCES persona(id)
) 
    
    ENGINE = InnoDB CHARSET=utf8 COLLATE utf8_unicode_ci;
CREATE TABLE `pfpdb`.`profesor` (
    `id` INT(11) NOT NULL AUTO_INCREMENT , 
    `persona_id` INT(11) NOT NULL ,
    `condicion` VARCHAR(150) NOT NULL,
    `titulo` VARCHAR(150) NOT NULL ,     
    PRIMARY KEY (`id`),
   FOREIGN KEY (persona_id) REFERENCES persona(id)
) 
    
    ENGINE = InnoDB CHARSET=utf8 COLLATE utf8_unicode_ci;

CREATE TABLE `pfpdb`.`curso` (
    `id` INT(11) NOT NULL AUTO_INCREMENT , 
    `perfilprofesional_id` INT(11) NOT NULL ,
    `profesor_id` INT(11) NOT NULL ,
    `aula` VARCHAR(3) NOT NULL , 
    `turno` VARCHAR(25) NOT NULL , 
    `minimo_alumno` INT(2) NOT NULL , 
    `maximo_alumno` INT(2) NOT NULL ,     
    PRIMARY KEY (`id`),
   FOREIGN KEY (profesor_id) REFERENCES profesor(id),
     FOREIGN KEY (perfilprofesional_id) REFERENCES perfilprofesional(id)
) 
    
    ENGINE = InnoDB CHARSET=utf8 COLLATE utf8_unicode_ci;



    */