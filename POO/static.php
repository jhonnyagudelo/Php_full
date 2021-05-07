<?php 

class Persona {
    public static $dia = '7 de septiembre';

    public static function saludo($nombre = null) {
        if($nombre) {
            return 'Hola, bueno dia ' . $nombre ;
        }else{
            return ' holaaaaaaaaa..';
        }
    }
}

// $carlos = new Persona;
echo Persona::saludo('calor');