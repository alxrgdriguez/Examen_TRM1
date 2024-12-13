<?php

namespace Examen\controladores;

use Examen\modelos\ModeloCiudades;
use Examen\modelos\Ciudad;
use Examen\vistas\VistaInsertarCiudad;
use Examen\vistas\VistaMostrarCiudades;

class controladorCiudades
{


    public static function mostrarVistaCrearCiudad()
    {
        $vista = new VistaInsertarCiudad();
        $vista->renderInsertarCiudad();
    }

    public static function inicioMostrarCiudades()
    {
        $ciudades = ModeloCiudades::getCiudades();
        $vista = new VistaMostrarCiudades();
        $vista->renderCiudades($ciudades);
    }

    public static function insertarCiudad($nombre, $pais, $latitud, $longitud)
    {
        $ciudad = new Ciudad(0,$nombre, $pais, $latitud, $longitud);
        ModeloCiudades::insertarCiudad($ciudad);
        header("location: index.php?accion=mostrarCiudades");
    }

    public static function buscarCiudadBoton($texarea_busqueda)
    {
        $ciudades = ModeloCiudades::buscarCiudad($texarea_busqueda);
        $skins = ModeloCiudades::buscarCiudad($texarea_busqueda);
        (new \Examen\vistas\VistaMostrarCiudades)->renderBuscarCiudad($ciudades);
    }
}