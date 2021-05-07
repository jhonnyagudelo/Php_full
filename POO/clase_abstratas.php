<?php 

abstract class Persona {
    public function saludo() {
        return 'hola';
    }
}


class Estudiante extends Persona {

}

$carlos = new Estudiante;

echo  $carlos->saludo();