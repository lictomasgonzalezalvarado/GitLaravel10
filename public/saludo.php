<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Página de Saludo</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    </head>
    <body>
        <!-- Body -->
        <div id="contenedor" class="ancho100porciento soydivFilas">
            <div id="barrabotones" class="soydivColumnas ancho80porciento">
                <div id="botones" class="ancho60porciento">
                    <caption>Tabla básica</caption>
                </div>
                <div id="botones" class=" ancho20porciento alineacionCentro">
                    &nbsp;
                </div>
                <div id="botones" class=" ancho20porciento alineacionCentro">
                    <button type="button" class="btn btn-primary btn-sm">Agregar</button>
                    &nbsp;
                    <button type="button" class="btn btn-primary btn-sm">Buscar</button>
                </div>
            </div>
            <div id="tabla" class=" ancho80porciento">
                <table class="table wd">
                    <thead>
                        <tr>
                            <th scope="col">Folio</th>
                            <th scope="col">Nombre(s)</th>
                            <th scope="col">Apellidos</th>
                            <th scope="col">Usuario</th>
                            <th scope="col">Operaciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="row">1</td>
                            <td>Tomás</td>
                            <td>González Alvarado</td>
                            <td>tomas.gonzalez</td>
                            <td ><a href="#"><i class="fa-solid fa-trash"></i></a> &nbsp; <a href="#"><i class="fa-solid fa-pen-to-square"></i></a></td>
                        </tr>
                        <?php 
                        for ($i=2; $i<30;$i++)
                        {
                        ?>
                        <tr>
                            <td scope="row"><?=$i?></td>
                            <td>Elia <?=$i?></td>
                            <td>López Linares</td>
                            <td>elia.lopez<?=$i?></td>
                            <td ><a href="#"><i class="fa-solid fa-trash"></i></a> &nbsp; <a href="#"><i class="fa-solid fa-pen-to-square"></i></a></td>
                        </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <div id="pie" class="soydivConFondoGris ancho80porciento soydivColumnas">2 elementos registrados</div>
        </div>
        
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    </body>
</html>