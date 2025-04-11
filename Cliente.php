<?php
class Cliente {
    private $nombre;
    private $apellido;
    private $tipoDoc;
    private $numDoc;
    private $estado;



    public function __construct($name ,$surname ,$typeDoc ,$numberDoc ,$state){
        $this ->nombre = $name;
        $this ->apellido = $surname;
        $this ->tipoDoc = $typeDoc;
        $this ->numDoc = $numberDoc;
        $this ->estado = $state;
    }

    public function setNombre($name){
        $this ->nombre =$name;
    }
    public function setApellido($surname){
        $this -> apellido = $surname;
    
    }
    public function setTipoDoc($typeDoc){
        $this -> tipoDoc = $typeDoc;
    
    }
    public function setNumDoc($numberDoc){
        $this -> numDoc =$numberDoc;
    }
    public function setEstado($state){
        $this ->estado = $state;
    }
    
    public function getNombre($name){
        return $this->nombre;

    }
    public function getApellido($surname){
        return $this -> apellido;

    }
    public function getTipoDoc($typeDoc){
        return $this->tipoDoc;
    }
    public function getNumDoc($numberDoc){
        return $this ->numDoc;
    }
    public function getEstado($state){

        return $this->estado;
    }
    public function __tostring(){
        return "Nombre: ".$this -> getNombre()."\n"."Apellido: ".$this -> getApellido()."\n"."Tipo de Documento: ".$this-> getTipoDoc()."\n"."Numero de Documento: ".$this-> getNumDoc()."\n"."Estado: ".$this-> getEstado()."\n";
        


    }

}
?>