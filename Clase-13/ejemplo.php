<?php

/*

Compañeros, una interface es un elemento de “Análisis Orientado a Objetros (por cierto, debería haber un curso de esto antes de POO para entender bien este mundo)” 
donde lo que se busca es romper dependencias estrictas de un objeto X con un objeto Y y ser más flexibles. Esto lo van a ver mucho cuando empiecen a trabajar en 
proyectos complejos. Voy a tratar de hacer un ejemplo:

Supongamos que tienes una empresa de transporte y tienes una flota de taxis y personas que solicitan el servicio:


<?php

class Taxi
{
    public $matricula;

    public function __construct($matricula)
    {
        $this->matricula = $matricula;
    }
    
    public function viajar($inicio, $destino)
    {
        return "Se ha trasladado desde $inicio hasta $destino";
    }

}


class Person 
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function solicitarTraslado(Taxi $taxi, $lugarInicio, $lugarDestino)    
    {
        echo "$this->name ha solicitado servicio de traslado del vehículo $taxi->matricula</br>";
        echo $taxi->viajar($lugarInicio, $lugarDestino);
    }
}

$taxi = new Taxi("ABC123");
$persona = new Person("José");
$persona->solicitarTraslado($taxi,"Av Fuerzas Armadas", "Av Baralt");
Ahora imaginen que te fue muy bien en tu negocio y no solo tienes taxis, ahora tienes aviones, trenes, barcos… Bueno deben modificar su sistema porque ahora
el cliente puede solicitar un traslado en cualquier tipo de transporte que tengamos. Si ven, aquí tenemos una dependencia estricta de dos objetos:


class Person 
{
    public $name;

    public function__construct($name)
    {
        $this->name= $name;
    }

    public function solicitarTransporte(Taxi $taxi (AQUÍ!!!!),
 $lugarInicio, $lugarDestino)    
    {
        echo "$this->name he solicitado servicio de traslado del vehículo $taxi->matricula</br>";
        echo $taxi->viajar($lugarInicio, $lugarDestino);
    }
}
La persona solo puede solicitar traslado en taxi y queremos que pueda solicitar traslado en lo que tengamos. Aquí es donde entra la INTERFACE

Quiero que cualquier persona pueda trasladarse en los tipos de vehículos disponibles (taxi, barco y tren). Deberíamos hacer esta implementación:


interface Transporte
{
    public function viajar($inicio, $destino);
}


class Taxi implements Transporte
{
    public $matricula;

    public $type = 'Taxi';

    public function __construct($matricula)
    {
        $this->matricula = $matricula;
    }
    
    public function viajar($inicio, $destino)
    {
        return "Se ha trasladado en el $this->type desde $inicio hasta $destino";
    }
}

class Barco implements Transporte
{
    public $matricula;

    public $type = 'Barco';

    public function __construct($matricula)
    {
        $this->matricula = $matricula;
    }
    
    public function viajar($inicio, $destino)
    {
        return "Se ha trasladado $this->type desde $inicio hasta $destino";
    }
}


class Tren implements Transporte
{
    public $matricula;

    public $type = 'Tren';

    public function __construct($matricula)
    {
        $this->matricula = $matricula;
    }
    
    public function viajar($inicio, $destino)
    {
        return "Se ha trasladado $this->type desde $inicio hasta $destino";
    }
}


class Person 
{
    public $name;

    public function __construct($name)
    {
        $this->name= $name;
    }

    public function solicitarTraslado(Transporte $transporte, $lugarInicio, $lugarDestino)    
    {
        echo "$this->name he solicitado servicio de traslado del vehículo $transporte->matricula</br>";
        echo $transporte->viajar($lugarInicio, $lugarDestino).'<hr>';
    }
}

$taxi = new Taxi("ABC123");
$persona = new Person("José");
$persona->solicitarTraslado($taxi,"Av Fuerzas Armadas", "Av Baralt");

$barco = new Barco("DEF456");
$persona = new Person("María");
$persona->solicitarTraslado($barco,"Av Fuerzas Armadas", "Av Baralt");

$tren = new Tren("XXX654");
$persona = new Person("Pablo");
$persona->solicitarTraslado($tren,"Av Fuerzas Armadas", "Av Baralt");
Si ven ahora lo que se le pasa a la clase Person es un objeto de tipo Transporte. Así rompemos la dependencia estricta de mi sistema que solo podía ofrecer 
traslados en taxi. Ahora a facturar más!!!

Espero este ejemplo haya aclarado el uso de las interfaces.

*/