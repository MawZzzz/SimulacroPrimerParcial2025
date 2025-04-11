<?php
class Cliente {
    private $nombre;
    private $apellido;
    private $tipoDoc;
    private $numDoc;
    private $estado;



    public function __construct($nameClient ,$surnameClient ,$typeDocClient ,$numberDocClient ,$stateClient){
        $this ->nombre = $nameClient;
        $this ->apellido = $surnameClient;
        $this ->tipoDoc = $typeDocClient;
        $this ->estado = $stateClient;
    }

 
    
    public function getNombre($nameClient){
        return $this->nombre;

    }
    public function getApellido($surnameClient){
        return $this -> apellido;

    }
    public function getTipoDoc($typeDocClient){
        return $this->tipoDoc;
    }
    public function getNumDoc($numberDocClient){
        return $this ->numDoc;
    }
    public function getEstado($stateClient){

        return $this->estado;
    }
    public function setNombre($newName){
        $this ->nombre =$newName;
    }
    public function setApellido($newSurname){
        $this -> apellido = $newSurname;
    
    }
    public function setTipoDoc($newTypeDoc){
        $this -> tipoDoc = $newTypeDoc;
    
    }
    public function setNumDoc($newNumberDoc){
        $this -> numDoc =$newNumberDoc;
    }
    public function setEstado($newState){
        $this ->estado = $newState;
    }
    public function __tostring(){
        $cadena= 
        "Nombre: ".$this -> getNombre()."\n".
        "Apellido: ".$this -> getApellido()."\n".
        "Tipo de Documento: ".$this-> getTipoDoc()."\n".
        "Numero de Documento: ".$this-> getNumDoc()."\n".
        "Estado del Cliente: ".$this-> getEstado()."\n";
        

        return $cadena;

    }

}
?>