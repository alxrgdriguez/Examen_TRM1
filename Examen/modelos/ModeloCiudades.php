<?php

namespace Examen\modelos;

use Examen\controladores\controladorCiudades;
use Examen\modelos\Ciudad;
use Examen\modelos\ConexionBD;

use \PDO;
use \PDOException;
class ModeloCiudades
{

    public static function insertarCiudad($ciudad)
    {
        $conexion = new ConexionBD();

        // Preparar la consulta SQL
        $stmt = $conexion->getConexion()->prepare("INSERT INTO ciudad (nombre, pais, latitud, longitud) VALUES (?, ?, ?, ?)");
        $stmt->bindValue(1, $ciudad->getNombre());
        $stmt->bindValue(2, $ciudad->getPais());
        $stmt->bindValue(3, $ciudad->getLatitud());
        $stmt->bindValue(4, $ciudad->getLongitud());
        // Ejecutar la consulta
        $stmt->execute();

        // Cerrar conexión
        $conexion->cerrarConexion();
    }



    public static function getCiudades()
    {
        $conexion = new ConexionBD();
        $stmt = $conexion->getConexion()->prepare("SELECT * FROM ciudad");
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Examen\modelos\Ciudad');
        $ciudades = $stmt->fetchAll();
        $conexion->cerrarConexion();
        return $ciudades;
    }

    public static function buscarCiudad($texarea_busqueda)
    {
        $conexion = new ConexionBD();
        $stmt = $conexion->getConexion()->prepare("SELECT * FROM ciudad WHERE nombre LIKE ?");
        $stmt->execute(["%" . $texarea_busqueda . "%"]);
        $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Examen\modelos\Ciudad');
        $ciudades = $stmt->fetchAll();
        $conexion->cerrarConexion();

        return $ciudades ;
    }


}
