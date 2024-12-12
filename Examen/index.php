<?php

namespace Examen;


use Examen\modelos\ConexionBD;

session_start();
//session_destroy();

/**
 * AUTOLOAD
 */
spl_autoload_register(function ($class) {
    //echo $class."<br>";
    //echo substr($class, strpos($class,"\\")+1);
    $ruta = substr($class, strpos($class,"\\")+1);
    $ruta = str_replace("\\", "/", $ruta);
    include_once "./" . $ruta . ".php";
});

// Comprobar enlaces
if (isset($_GET['accion'])) {
    if (strcmp($_GET['accion'], "insertar") == 0) {

    }

// Comprobar formularios
}elseif ($_POST){
    if (isset($_POST[''])){

    }
}else{
    // Si no volvemos a la pagina de inicio

}


