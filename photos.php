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
    <link rel="stylesheet" href="https://rawgit.com/LeshikJanz/libraries/master/Bootstrap/baguetteBox.min.css">
</head>

<body style="text-align:center">
<?php 
require_once'head.php';
?>

<br> <br>
    <h2>
        GALERÍA
    </h2>

    
    <br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="tz-gallery">

                    <div class="row">
                        <div class="col-lg-4">
                            <a class="lightbox" href="Img/Gallery1.jpeg">
                                <img class="imgPhotos" src="Img/Gallery1b.jpg" alt="">
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <a class="lightbox" href="Img/Gallery2.jpeg">
                                <img class="imgPhotos" src="Img/Gallery2b.jpg" alt="">
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <a class="lightbox" href="Img/Gallery3.jpeg">
                                <img class="imgPhotos" src="Img/Gallery3b.jpg" alt="">
                            </a>
                        </div>

                    </div>

                    <br>
                     
                    <div class="row">
                        <div class="col-lg-4">
                            <a class="lightbox" href="Img/Gallery4.jpeg">
                                <img class="imgPhotos" src="Img/Gallery4b.jpg" alt="">
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <a class="lightbox" href="Img/Gallery5.jpeg">
                                <img class="imgPhotos" src="Img/Gallery5b.jpg" alt="">
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <a class="lightbox" href="Img/Gallery6.jpeg">
                                <img class="imgPhotos" src="Img/Gallery6b.jpg" alt="">
                            </a>
                        </div>

                    </div>

                    <br>

                    <div class="row">
                        <div class="col-lg-4">
                            <a class="lightbox " href="Img/Gallery7.jpeg">
                                <img class="imgPhotos" src="Img/Gallery7b.jpg" alt="">
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <a class="lightbox" href="Img/Gallery8.jpeg">
                                <img class="imgPhotos" src="Img/Gallery8b.jpg" alt="">
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <a class="lightbox" href="Img/Gallery9.jpeg">
                                <img class="imgPhotos" src="Img/Gallery9b.jpg" alt="">
                            </a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
    </div>

    <div style="padding-bottom: 50px">

    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
    <script>
        baguetteBox.run('.tz-gallery');
    </script>
    <?php
    require_once 'footer.php';
    ?>
</body>

</html>