<?php 

class Persona {
    public $nombre;
    public $edad;
    public $pais;

    function __construct($nombre, $edad, $pais) {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->pais = $pais;
    }

    public function mostrarInformacion(){
        return $this->nombre . ' tiene ' . $this->edad . ' años de edad y es de ' . $this->pais;
    }
}


$carlos  = new Persona('jhonny stiven', 23, 'colombia');
// $carlos->nombre = 'Carlos arturo';
// $carlos->edad = 23;
// $carlos->pais = 'Colombia';

$carlos->mostrarInformacion();