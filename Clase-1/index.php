<?php

// Programación orientada a objetos

/*
1. Clase: User.php --> Creo la clase, el molde que usaremos para crear nuevos objetos
2. Objeto 1: $user1 = new User; --> Usando el molde (clase), puedo crear diferentes objetos, en este caso $user1
3. Objeto 2: $user2 = new User; --> Usando el molde (clase), puedo crear diferentes objetos, en este caso $user2
*/

// Ejemplo 1. Creo un molde User, otro molde que es Admin, y al final lo que estamos haciendo es crear un nuevo usuario, de tipo Admin, al que saludamos con un mensaje.

class User {
    public $type;
}

class Admin {
    public function greet() {
        return "Hola Administrador.<br>";
    }
}

$user = new User;
$user->type = new Admin;
echo $user->type->greet();

// Ejemplo 2. Creamos un molde llamado Estrella, al cual le daremos 2 parámetros, picos y tamaño.

class Estrella {
    public $picos;
    public $tamaño;
    public function definir() {
        return "Estrella $this->tamaño que tiene $this->picos picos.<br>";
    }
}


$estrella1 = new Estrella;
$estrella1->picos = 3;
$estrella1->tamaño = "pequeña";

$estrella2 = new Estrella;
$estrella2->picos = 5;
$estrella2->tamaño = "mediana";

$estrella3 = new Estrella;
$estrella3->picos = 7;
$estrella3->tamaño = "grande";

echo $estrella1->definir();
echo $estrella2->definir();
echo $estrella3->definir();



/*
class Estrella {
	public $picos;
	public $tamanio;
	public function cocinar()
	{
		return "Soy una estrella $tamanio que tiene $picos picos";
	}
}

$estrella1 = new Estrella;
$estrella1->picos = 3;
$estrella1->tamanio = "chica"

$estrella2 = new Estrella;
$estrella2->picos = 5;
$estrella2->tamanio = "grande"

echo $estrella1->cocinar(); //Soy una estrella chica que tiene 3 picos;
echo $estrella2->cocinar(); //Soy una estrella grande que tiene 5 picos;
*/