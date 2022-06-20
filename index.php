<?php

//Atributos que son los datos que vamos a utilizar

//Metodos que son las acciones o operaciones que vamos a realizar con el objetos 


class Persona{

    public $pelo;
    public $altura;
    public $peso;
    
    function __construct($p,$altura,$peso){

        $this->pelo = $p;
        
        $this->altura = $altura;

        $this->peso = $peso;

    }

    function __toString()
    {
        return "Pelo: $this->pelo Altura: $this->altura Peso: $this->peso";
    }

    function cambiaAltura(){

        $this -> altura = $this -> altura / 100;

    }

    function caminar($kilometros){

        $this -> peso = $this -> peso - $kilometros;

    }

}

$Persona1 = new Persona("Castaño",180,80);

echo $Persona1 -> pelo;

$Persona1 -> pelo = "Negro";

echo "\n";

echo $Persona1 -> pelo;

// $Persona1 -> caminar(10);

// echo "\n";

// echo $Persona1 -> __toString();



?>