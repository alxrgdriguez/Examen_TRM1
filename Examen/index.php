<?php

namespace Examen;

use Examen\controladores\controladorCiudades;

session_start();
//session_destroy();

/**
 * AUTOLOAD
 */
spl_autoload_register(function ($class) {
    $ruta = substr($class, strpos($class,"\\")+1);
    $ruta = str_replace("\\", "/", $ruta);
    include_once "./" . $ruta . ".php";
});

// Comprobar enlaces
if (isset($_GET['accion'])) {
    if (strcmp($_GET['accion'], "insertarvistaCiudades") == 0) {
        controladorCiudades::mostrarVistaCrearCiudad();

    }

    if (strcmp($_GET['accion'], "mostrarCiudades") == 0) {
        controladorCiudades::inicioMostrarCiudades();
    }


// Comprobar formularios
}elseif ($_POST){
    if (isset($_POST['fomulario_insertar'])){
        $nombre = $_POST['nombre'];
        $pais = $_POST['pais'];
        $latitud = $_POST['latitud'];
        $longitud = $_POST['longitud'];
        controladorCiudades::insertarCiudad($nombre, $pais, $latitud, $longitud);

    }

    if (isset($_POST['texarea_busqueda'])){
        controladorCiudades::buscarCiudadBoton($_POST['texarea_busqueda']);
    }
}else{
    // Si no volvemos a la pagina de inicio
    controladorCiudades::inicioMostrarCiudades();

}


