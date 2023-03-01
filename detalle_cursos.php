<!DOCTYPE html>
<?php
    $curso = $_GET['curso'];

?>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 20</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
        
    </head>
    <body>
        <section class="container">
            <h3>DETALLE DEL PRODUCTO</h3>
            <?php
                if ($curso == 1) {
            ?>
                <div class="row mt3">
                    <div class="col-sm-12">
                        <div class="cards">
                            <div class="card-body">
                                <img class="img-fluid" src="https://www.idt.com.py/wp-content/uploads/2017/06/Destacado-Java-1-260x170.png" alt="Marketing">
                                <h3 class='text-primary'>Curso de Java</h3>
                                <h4 class='text-primary'>200.000 Gs.</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam nostrum quibusdam harum enim. Autem ipsa tenetur debitis iure, sed corrupti quam! Praesentium dolorum odio assumenda tempore laboriosam beatae voluptates voluptas?</p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
                }
            ?>
            <?php
                if ($curso == 2) {
            ?>
                <div class="row mt3">
                    <div class="col-sm-12">
                        <div class="cards">
                            <div class="card-body">
                                <img class="img-fluid" src="https://www.idt.com.py/wp-content/uploads/2016/09/Destacado-Programacion-Web-260x170.png" alt="Marketing">
                                <h3 class='text-primary'>Curso de programacion con PHP</h3>
                                <h4 class='text-primary'>300.000 Gs.</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam nostrum quibusdam harum enim. Autem ipsa tenetur debitis iure, sed corrupti quam! Praesentium dolorum odio assumenda tempore laboriosam beatae voluptates voluptas?</p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
                }
            ?>
            <?php
                if ($curso == 3) {
            ?>
                <div class="row mt3">
                    <div class="col-sm-12">
                        <div class="cards">
                            <div class="card-body">
                                <img class="img-fluid" src="https://www.idt.com.py/wp-content/uploads/2017/08/Destacado-Arquitectura-Web-Con-enfasis-en-PHP-260x170.png" alt="Marketing">
                                <h3 class='text-primary'>Curso intensivo de introduccion a la Programación (Curso de Verano)</h3>
                                <h4 class='text-primary'>100.000 Gs.</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam nostrum quibusdam harum enim. Autem ipsa tenetur debitis iure, sed corrupti quam! Praesentium dolorum odio assumenda tempore laboriosam beatae voluptates voluptas?</p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
                }
            ?>
            <?php
                if ($curso == 4) {
            ?>
                <div class="row mt3">
                    <div class="col-sm-12">
                        <div class="cards">
                            <div class="card-body">
                                <img class="img-fluid" src="https://www.idt.com.py/wp-content/uploads/2019/06/1124px-Interna-Introduccion-a-la-programacion-260x170.png" alt="Marketing">
                                <h3 class='text-primary'>Curso de Web Master</h3>
                                <h4 class='text-primary'>1.200.000 Gs.</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam nostrum quibusdam harum enim. Autem ipsa tenetur debitis iure, sed corrupti quam! Praesentium dolorum odio assumenda tempore laboriosam beatae voluptates voluptas?</p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
                }
            ?>
        </section>
    </body>
</html>