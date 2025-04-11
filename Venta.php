<?php
include_once "Moto.php";
class venta{
    //atributos 
    private $numero;
    private $fecha;
    private $refCliente;
    private $refColecM;
    private $precioFinal;

    //metodos
    public function __construct($number,$date,$refClient,$priceF){
        $this->numero = $number;
        $this ->fecha =$date;
        $this ->refCliente =$refClient;
        $this ->refColecM =[];
        $this ->precioFinal = $priceF;
    }

    //metodos get´s
    public function getNumero($number){
        return $this->numero;

    }
    public function getFecha($date){
        return $this->fecha;
    }
    public function getRefCliente($refClient){
        return $this ->refCliente;
    }
    public function getRefColecM($refColM){
        return $this ->refColecM;
    }
    public function getPrecioFinal($priceF){
        return $this ->precioFinal;

    }

    //metodos set´s

    public function setNumero($newNumber){
        $this->numero =$newNumber;
    }
    public function setFecha($newDate){
        $this->fecha = $newDate;
    }
    public function setRefCliente($newRefClient){
        $this ->refCliente =$newRefClient;
    }
    public function setRefColecM($newRefcolM){
        $this -> refColecM =[];
    }
    public function setPrecioFinal($newPrecioFinal){
        $this ->precioFinal= $newPrecioFinal;
    }



 //incorporar motos
    public function incorporarMoto($objMoto){
        $retorno=false;
        $activa=$objMoto->getActiva();

        if($activa){
            $coleccion=$this->getRefColecM();//obtengo
            $coleccion[]=$objMoto;//almaceno
            $this-> setRefColecM($coleccion);
            $costoMoto=$objMoto->darPrecioVenta();

        }
    }
}
?>