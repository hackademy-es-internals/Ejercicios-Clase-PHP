<?php

// function elige(){
//     $alumnos = ["Yamila","Julen","Patri","Elena","Fede"];
//     return $alumnos[rand(0,4)];
// }
// sleep(4);
// echo elige();



// 2 * PI * radio

class figura{

    public $longitud;

    function __constructor ($longitud){

        $this -> longitud = $longitud;

    }

}

class triangulo extends figura{

    public $altura;

    function __construct($altura,$longitud)
    {
        $this -> altura = $altura;

        parent::__constructor($longitud);

    }

}

class circulo extends figura{


    function __construct($longitud)
    {

        parent::__constructor($longitud);

    }

}




class Operacion{
    
    static function calculaTriangulo($base,$altura){

        return ($base*$altura);

    }

    static function calculaCirculo($longitud){

        return 2 * 3.14 * $longitud;

    }


}



$Triangulo = new triangulo(5,2);

$Circulo = new circulo(2);

echo Operacion::calculaCirculo($Circulo->longitud);

?>
