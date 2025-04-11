<?php
class Moto {
    private $codigo;
    private $costo;
    private $anioFab;
    private $desc;
    private $pia;
    private $activa;


    public function __construct($code ,$cost ,$yearF ,$description ,$pai ,$active){
        $this ->codigo =$code;
        $this -> costo =$cost;
        $this ->anioFab =$yearF;
        $this ->desc =$description;
        $this ->pia =$pai;
        $this ->activa =$active;
    }
    public function getCodigo($code){
        return $this ->codigo;
    }
    public function getCosto($cost){
        return $this ->costo;
    }
    public function getAnioFab($yearF){
        return $this ->anioFab;
    }
    public function getDesc($description){
        return $this->desc;
    }
    public function getPia($pai){
        return $this ->pia;
    }
    public function getActiva($active){
        return $this ->activa;
    }
    //setters
    public function setCodigo($newCode){
        $this ->codigo =$newCode;
    }
    public function setCosto($newCost){
        $this ->costo =$newCost;
    }
    public function setAnioFab($newYearF){
        $this ->anioFab = $newYearF;
    }
    public function setDesc($newDesc){
        $this ->descripcion =$newDesc;
    }
    public function setPia($newPai){
        $this ->pia =$newPai;
    }
    public function setActiva($newActive){
        $this ->activa =$newActive;
    }

    public function __tostring(){
        return "codigo: ".$this->getCodigo()."\n"."costo: ".$this->getCosto()."\n"."Año de Fabricacion: ".$this->getAnioFab()."\n"."descripcion: ".$this->getDesc()."\n"."P.I.A(Porcentaje Incremento Anual): ".$this->getPia()."\n"."Activa: ".$this->getActiva()."\n";
    }
    

    public function darPrecioVenta(){
        //dejo el valor de venta como si no estuviera disponible
        $venta=-1;
        $dispo=$this->getActiva();
        $costoMoto=$this->getCosto();
        $anioFabricacion=$this->getAnioFab();
        $porIncAn=$this->getPia();
        $anioAct=date("Y");
        $anioTrans=$anioAct-$anioFabricacion;


        if($dispo){
            $venta= ($costoMoto+$costoMoto*($anioTrans * $porIncAn));

        }else{
            $venta;
        }
        return $venta;
    }

}




?>