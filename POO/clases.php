<?php
namespace App;

use App\Models\Persona;

class Persona {
    public $nombre;
    public $edad;
    public $pais;



    public function mostrarInformacion(){
        echo 'Hola mundo';
    }
}

$carlos  = new Persona;
$carlos->nombre = 'Carlos arturo';
$carlos->edad = 23;
$carlos->pais = 'Colombia';

$carlos->mostrarInformacion();

echo $carlos->nombre. 'tiene ' . $carlos->edad . ' años de edad';



$alejandra = new Persona;
$alejandra->nombre = 'Alejandra agudelo';
$alejandra->edad = 20;
$alejandra->pais = 'Colombia';