<?php

// Código espagueti

if ($generar_archivo_para_clientes) {

    // Todo el codigo para generar el Excel para el cliente

} else {

    // Exactamente el MISMO código para generar el Excel para los proveedores

}

// EJEMPLO

class Excel
{

    public function generar($generar_para)
    {
        // TODO el codigo para generar el archivo
    }
}

$excel = new Excel();

if ($generar_archivo_para_clientes) {
    $excel->generar("clientes");
} else {
    $excel->generar("proveedores");
}
