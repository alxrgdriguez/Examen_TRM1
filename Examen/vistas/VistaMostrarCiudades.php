<?php

namespace Examen\vistas;
class VistaMostrarCiudades
{
    public function renderCiudades($ciudades){
        include("cabecera.php");
        echo '
        <div class="album py-5 bg-body-tertiary">
          <div class="container">
       
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            ';

        foreach ($ciudades as $ciudad) {
            ?>
            <div class='col'>
                <div class='card shadow-sm'>
                    <div class='card-body'>
                        <h2 class='card-title'><?= $ciudad->getNombre(); ?></h2>
                        <p class='card-text' ><?="Pais: ". $ciudad->getPais(); ?></p>
                        <p class='card-text'><?="Latitud: " . $ciudad->getLatitud(); ?></p>
                        <p class='card-text'><?="Longitud: " .$ciudad->getLongitud(); ?></p>
                    </div>
                </div>
            </div>
            <?php
        }

        echo '
            </div>
          </div>
        </div>';

        ?>

        <?php
        include "pie.php";



    }

    public function renderBuscarCiudad($ciudades){
        include("cabecera.php");
        echo '
        <div class="album py-5 bg-body-tertiary">
          <div class="container">
       
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            ';

        foreach ($ciudades as $ciudad) {
            ?>
            <div class='col'>
                <div class='card shadow-sm'>
                    <div class='card-body'>
                        <h2 class='card-title'><?= $ciudad->getNombre(); ?></h2>
                        <p class='card-text' ><?="Pais: ". $ciudad->getPais(); ?></p>
                        <p class='card-text'><?="Latitud: " . $ciudad->getLatitud(); ?></p>
                        <p class='card-text'><?="Longitud: " .$ciudad->getLongitud(); ?></p>
                    </div>
                </div>
            </div>
            <?php
        }

        echo '
            </div>
          </div>
        </div>';

        ?>

        <?php
        include "pie.php";

    }

}
