<?php

// Code smell

/*
Hace referencia al mal olor del código. Este concepto no se refiere a errores técnicos, 
sino a errores de orden y diseño. Esto sucede mucho cuando intentamos crear soluciones a partir de otras soluciones.

La solución a estos casos es crear una abstracción.

Cómo evitarlo: 
Para esto debemos hacer una programación más limpia, y reusable. Tenemos que evitar crear grandes métodos, 
o sea, programación estructura dentro de clases. También evitar crear grandes clases o superclases.

Y sin duda, nosotros debemos evitar a toda costa copiar y pegar código.

🙃 Recuerda: el sistema va a funcionar pero a futuro va a ser horrible de mantener, hasta imposible.
*/