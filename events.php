<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>

<head>
    <title>Proyectos</title>
    <?php require_once 'header.php'; ?>
    <style>
        a {
            color: black;
        }

        p {
            color: black;
        }

        /* CSS link color */
    </style>
</head>

<body style="text-align:center">
    <?php

    require_once 'head.php';
    ?>
    <div class="container-fluid">

        <br>
        <br>
        <h2>
            CRONOGRAMA DE EVENTOS
        </h2>
        <br><br>
        <div class="row">
            <div class="col-lg-11 offset-lg-1">
                <div class="row">
                    <div class="col-lg-3 ">

                        <img class="img-fluid" src="Img/event1.jpeg" alt="" />


                        <h4>

                            <br>
                            Evento A </h4>
                        <p>
                            Descripción corta del Evento A <a href="#" style="color:black">... [leer más]</a>
                        </p>
                    </div>



                    <div class="col-lg-3 offset-lg-1">
                        <img class="img-fluid" src="Img/event2.jpeg" alt="" />


                        <h4>

                            <br>
                            Evento B </h4>
                        <p>
                            Descripción corta del Evento B <a href="#" style="color:black">... [leer más]</a>
                        </p>
                    </div>
                    <div class="col-lg-3 offset-lg-1">

                        <img class="img-fluid" src="Img/event3.jpeg" alt="" />


                        <h4>

                            <br>
                            Evento C </h4>
                        <p style="color:black">
                            Descripción corta del Evento C <a href="#" style="color:black">... [leer más]</a>
                        </p>
                    </div>
                </div>


            </div>



        </div>

        <div style="padding-bottom: 200px">

        </div>
        <?php
        require_once 'footer.php';
        ?>
</body>

</html>