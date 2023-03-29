<?php 
class Carrera{
    function __construct($nombre){
        $this->carrera = $nombre;
    }
}
    //CREA UN OBJETO
    $info = new Carrera("INFORMATICA INDUSTRIAL");
    echo $info->carrera;               //MUESTRA LA PROPIEDAD DEL OBJETO CARRERA
?>