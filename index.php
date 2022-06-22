<?php

// function elige(){
//     $alumnos = ["Yamila","Julen","Patri","Gabri","Elena","Fede"];
//     return $alumnos[rand(0,5)];
// }
// sleep(4);
// echo elige();

class Telefono{

    public $SO;
    public $version;
    static $numeroSerie = 1232412;

    function __construct($SO,$version)
    {
        $this -> SO = $SO; 
        $this -> version = $version;
    }
}

class miTelefono extends Telefono{

    private $configuracion;
    private $tema;
    static $tlf;

    function __construct($configuracion,$tema,$tlf,$SO,$version)
    {
        $this -> configuracion = $configuracion; 
        $this -> tema = $tema;

        miTelefono::$tlf = $tlf;
        
        parent::__construct($SO,$version);
    }

    static function llamar(){
        return "Coge el telefonooo que te esta llamando ". miTelefono::$tlf;
    }

}

$miMovil = new miTelefono("Sencilla","Oscuro",111222333,"Android","Kitkat");


echo miTelefono::llamar()."\n";


$miMovil2 = new miTelefono("Sencilla","Oscuro",111222444,"Android","Kitkat");



echo miTelefono::llamar();
?>
