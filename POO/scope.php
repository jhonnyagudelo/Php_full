<?php

class Usuario {
    protected $nombre;
    protected $correo;

    function __construct($nombre, $correo)
    {
        $this->nombre = $nombre;
        $this->correo = $correo;

    }

    public function mostrarInfo() {
        return $this->correo;
    }
}

$carlos = new Usuario('jhonny', 'jhonny@gmail.com');
echo $carlos -> mostrarInfo();