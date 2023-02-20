<?php
require_once 'header.php';

?>
<style>
    @import url(https://fonts.googleapis.com/css?family=Lato);
    @import url(https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css);

    .aaaa {

        background-color: #bf8123;
    }

    body {
        font-family: "Lato", sans-serif;
        -webkit-font-smoothing: antialiased;
    }

    a {
        text-decoration: none;
        color: #fff;
    }

    p>a:hover {
        color: #d9d9d9;
        text-decoration: underline;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        margin: 1% 0 1% 0;
    }

    ._12 {
        font-size: 1.2em;
    }

    ._14 {
        font-size: 1.4em;
    }

    ul {
        padding: 0;
        list-style: none;
    }

    .footer-social-icons {
        width: 350px;
        display: block;
        margin: 0 auto;
    }

    .social-icon {
        color: #fff;
    }

    ul.social-icons {
        margin-top: 10px;
    }

    .social-icons li {
        vertical-align: top;
        display: inline;
        /* height: 100px;*/
    }

    .social-icons a {
        color: #fff;
        text-decoration: none;
    }

    .fa-facebook {
        padding: 10px 14px;
        -o-transition: 0.5s;
        -ms-transition: 0.5s;
        -moz-transition: 0.5s;
        -webkit-transition: 0.5s;
        transition: 0.5s;
        background-color: black;
        /*#322f30;*/
    }

    .fa-facebook:hover {
        background-color: #3d5b99;
    }

    .fa-twitter {
        padding: 10px 12px;
        -o-transition: 0.5s;
        -ms-transition: 0.5s;
        -moz-transition: 0.5s;
        -webkit-transition: 0.5s;
        transition: 0.5s;
        background-color: black;
        /*#322f30;*/
    }

    .fa-twitter:hover {
        background-color: #00aced;
    }

    .fa-instagram {
        padding: 10px 14px;
        -o-transition: 0.5s;
        -ms-transition: 0.5s;
        -moz-transition: 0.5s;
        -webkit-transition: 0.5s;
        transition: 0.5s;
        background-color: black;
        /*#322f30;*/
    }

    .fa-instagram:hover {
        background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%, #d6249f 60%, #285AEB 90%);
    }

    .fa-youtube {
        padding: 10px 14px;
        -o-transition: 0.5s;
        -ms-transition: 0.5s;
        -moz-transition: 0.5s;
        -webkit-transition: 0.5s;
        transition: 0.5s;
        background-color: black;
        /*#322f30;*/
    }

    .fa-youtube:hover {
        background-color: #e64a41;
    }

    .fa-linkedin {
        padding: 10px 14px;
        -o-transition: 0.5s;
        -ms-transition: 0.5s;
        -moz-transition: 0.5s;
        -webkit-transition: 0.5s;
        transition: 0.5s;
        background-color: black;
        /*#322f30;*/
    }

    .fa-linkedin:hover {
        background-color: #0073a4;
    }

    .fa-github {
        padding: 10px 14px;
        -o-transition: 0.5s;
        -ms-transition: 0.5s;
        -moz-transition: 0.5s;
        -webkit-transition: 0.5s;
        transition: 0.5s;
        background-color: black;
        /*#322f30;*/
    }

    .fa-github:hover {
        background-color: #5a32a3;
    }

    .input {
        width: 250px;
        border-radius: 5px;
        border: 1px solid black;
    }


    /* CSS link color */
</style>
<br> <br>
<div class="row aaaa">
    <div class="col-lg-12 aaaa ">
        <div class="row footer aaaa" style="padding-top: 30px">
            <div class="col-lg-4  aaaa">
                <p style="font-size: 20px">
                    <b>
                        <a href="" style="text-decoration: none  ; padding-top: 40px; color:black">
                            SUSCRÍBETE
                        </a>
                        <div id='wrapper'>
                            <form action=''>
                                <input class='input' id='name' name='name' required type='text' placeholder="Nombre">
                                <br>
                                <div style="padding-top: 5px">

                                </div>
                                <input class='input' id='email' name='email' required type='email' placeholder="E-mail">
                                <br>
                                <div style="padding-top: 5px">

                                </div>
                                <input class="button" style="color:white; background:black ; border: none; border-radius:5px" type='submit' value='Suscribir'>

                            </form>
                        </div>
                    </b>
                </p>
            </div>
            <div class="col-lg-4 aaaa ">
                <p style="font-size: 14px; color:black">
                    <div class="footer-social-icons">
                        <ul class="social-icons">
                            <li><a href="https://www.facebook.com/kevsaint1/" class="social-icon"> <i class="fa fa-facebook"></i></a></li>
                            <li><a href="" class="social-icon"> <i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://www.instagram.com/kevsaint1" class="social-icon"> <i class="fa fa-instagram"></i></a></li>
                            <li><a href=" https://www.youtube.com/user/grpmelanina" class="social-icon"> <i class="fa fa-youtube"></i></a></li>
                            <li><a href="" class="social-icon"> <i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                    <b style="color:black">
                        +593 93 952 9216 - kev_saint@hotmail.com
                    </b>
                </p>
            </div>
            <div class="col-lg-4  aaaa">
                <img src="Img/logo1.png" alt="" width="84px" />
                <p style="font-size: 12px; padding-top:30px;">
                    <b style="color:black">
                        &copy; 2020, Todos los derechos reservados - | Kevin Santos |.
                    </b>
                </p>
            </div>
        </div>
    </div>
</div>