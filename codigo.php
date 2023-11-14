<?php
class convertir {
public $tasa = 34.88;
function convertirdolar($montobs) {
    return $montobs / $this->tasa;
}
}

class Operaciones extends convertir {
    public function sumar($cantidad) {
        return $cantidad + 100;
    }
    public function convertirdolar($montobs){
        return "hola soy alejandro rodrigues CI:30478440 T2-inf-1";
    }
}

?>