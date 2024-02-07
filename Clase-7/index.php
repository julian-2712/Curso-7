<?php

// Abstracción

/*
Significa aislar, separar o sacar, y es básicamente lo que nos ayuda a abstraer, a pensar en el resultado final antes de que hagamos una programación.

Formas de realizar la abstracción:
    · Interface.
        - Creamos el archivo StoreInterface.php y declaramos lo que queremos como resultado.
            interface StoreInterface
            {
                public function get();
            }
        - Aquel archivo o clase que implemente esta interfaz está en la oblicación de desarrollar el método get().
        - Eso es abstracción, estamos pensando en el resultado final y lo estamos describiendo (interface).
            class Database implements StoreInterface
            {
                ...
            }  

    · Abstract.
        - La abstracción se le puede realizar con las interfaces o directamente con los métodos abstract.
        - Un método abstracto no se define, sólo se declara.
        - Cualquier clase que extienda de Base deberá implementar el método store().
            abstract class Base
            {  
                public function get()
                {
                    // ...
                }

                abstract public function store();
            }      

    · Class.
            - Definiendo cada una de las cosas que requiero a nivel de autenticación.
            - Esto también es abstracción, es definir en esencia lo que yo requiero para mi clase.
                class Auth
                {
                    protected $email;
                    protected $password;

                    public function login()
                    {
                        // ...
                    }

                    public function validate()
                    {
                        // ...
                    }
                }

Resumen: Abstraer es aislar, separar u organizar, pensando siempre en el resultado final.
*/