<?php 

class Persona {
    public $nombre;
    public $edad;
    public $pais;

    public function mostrarInformacion(){
        echo $this->nombre . ' tiene ' . $this->edad . ' años de edad y es de ' . $this->pais;
    }
}


$carlos  = new Persona;
$carlos->nombre = 'Carlos arturo';
$carlos->edad = 23;
$carlos->pais = 'Colombia';

$carlos->mostrarInformacion();