<?php namespace Models;

  class Conexion {

    private $datos = array(
      "host"  => "localhost",
      "user"  => "root",
      "pass"  => "",
      "db"    => "Estudiantes"
    );

    private $con;

    public function __construct(){
      $this->con = new \mysqli($this->datos['host'], $this->datos['user'], $this->datos['pass'], $this->datos['db']);
    }

    public function consultaSimple($sql){
      $this->con->query($sql);
    }

    public function consultarRetorno($sql){
      $res = $this->con->query($sql);
      return $res;
    }

  }


?>
