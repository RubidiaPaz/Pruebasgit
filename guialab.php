<?php
include "layouts/header.php";
?>

<div class="container-fluid">
  <div class="row">
    <?php
      include "layouts/navbar.php";
    ?>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Guias de Laboratorio</h1>
      </div>

      <div class="container col-md-9 py-5">
        <table class="table">
            <thead>
                <tr>
                <th scope="row">#</th>
                <th>Link</th>
                <th>Actividad Complementaria</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">Guia 1</th>
                <td><a href="https://github.com/RubidiaPaz/EjemploGit.git">Ejemplo Git</a></td>
                <td><a href="https://github.com/RubidiaPaz/Pruebasgit.git">Pruebas Git</a></td>
                </tr>
                <tr>
                <th scope="row">Guia 2</th>
                <td>Thornton</td>
                </tr>
            </tbody>
        </table> 
            
      </div>
    </main>
  </div>
</div>