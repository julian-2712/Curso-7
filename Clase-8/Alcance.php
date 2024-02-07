<?php

// Alcance o encapsulamiento

/* 
El alcance hace referencia al encapsulamiento o principio de ocultación. Esto nos ayuda cuando estamos trabajando con herencia.
*/

class User {
    // public
    // protected
    // private

    public const PAGINATE = 25;

    public $username;
    // protected $username;
    // private  $username;

    public function getUsername() {
        # code...
    }

    // Poner en mayúsculas nos ayuda crear rutas absolutas y no relativas var_dump(__DIR__);
}

/*

Para esconder datos vamos a utilizar los modificadores de acceso:

- Public → Puede ser accedido por todos, o seá por cualquier elemento o clase.
- Protected → Podrá ser accedido a nivel de la clases, paquetes y Subclases (las clases hijas ← clases padres).
- Defaulf → Este nos permite el acceso a nivel de clases y paquetes. O sea, que a nivel de herencia no puede ser accedido.
- Private → Solo puede ser accedido a nivel de clases, esto quiere decir, que solo puedes ser modificado a nivel de la clase, o sea, por ella misma.

*/