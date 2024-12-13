<?php

namespace Examen\vistas;

class VistaInsertarCiudad
{
    public function renderInsertarCiudad()
    {
        include "cabecera.php";


        echo '
            <div class="card mb-3 shadow-sm border-0">

            <form action="index.php" method="POST" class="p-4 bg-light shadow-sm rounded">
                <div class="mb-4">
                    <label for="nombre" class="form-label font-weight-bold">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Introduce el nombre de la ciudad" required>
                </div>
            
                <div class="mb-4">
                    <label for="pais" class="form-label font-weight-bold">País</label>
                    <input type="text" class="form-control" id="pais" name="pais" placeholder="Introduce el país" required>
                </div>
            
                <div class="mb-4">
                    <label for="latitud" class="form-label font-weight-bold">Latitud</label>
                    <input type="text" class="form-control" id="latitud" name="latitud" placeholder="Introduce la latitud">
                </div>
            
            <div class="mb-4">
                <label for="longitud" class="form-label font-weight-bold">Longitud</label>
                <input type="text"  class="form-control" id="longitud" name="longitud" placeholder="Introduce la longitud">
            </div>

            
                <input type="submit" class="btn btn-primary btn-block" name="fomulario_insertar" value="Añadir Ciudad">
            </form>';

        include "pie.php";
    }

}
