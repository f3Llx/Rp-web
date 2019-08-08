<?php
// Start the session
session_start();
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>Icsitter</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link type="text/css" rel="stylesheet" href="css/main-primary.css" />
        <link type="text/css" rel="stylesheet" href="css/hover.css" />
        <script type="text/javascript" src="js/main.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

    </head>



    <body>
        <header>




            <nav class="color-primary-3">

                <div class="nav-wrapper">

                    <a href="" class="brand-logo"> <img class="logo-img" src="img/logo2.png" ></a>
                   

                    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>

                    <ul class="right hide-on-med-and-down">

                        <li class="active"><a href="#">Home</a></li>

                        <li><a href="#">About</a></li>

                        <li><a href="#">Contact</a></li>
                        <!-- Dropdown Trigger -->
                        <li><a class="modal-trigger" href="#modal1">LOGIN<i class="material-icons right">arrow_drop_down</i></a></li>





                    </ul>

                    <ul class="side-nav" id="mobile-demo">

                        <li class="active"><a href="#">Home</a></li>

                        <li><a href="#">About</a></li>

                        <li><a href="#">Contact</a></li>
                        <!-- Dropdown Trigger -->
                        <li><a class="modal-trigger" href="#modal1">LOGIN<i class="material-icons right">arrow_drop_down</i></a></li>

                    </ul>

                </div>

            </nav>

        </header>
        <main>





            <div class="row">
                <!-- left -->
                <div class="col s3 ">
                    <div class="leftbg"></div>
                </div>
                <!-- center -->

                <div class="col s6">

                    <div id="back"></div>
                    <div id="front"></div>
                    <center>

                        <div class="center-align">
                            <span class="title letter-blink">R</span>
                            <span class="title letter-2">P</span>
                            <span class="title letter-2">Z</span>
                            <br>
                            <p class="glow">roleplay</p>
                            <span class="title letter-2">z</span>
                            <span class="title letter-1">o</span>
                            <span class="title letter-4">n</span>
                            <span class="title letter-blink">e</span>

                        </div>
                        <p class="flow-text paragrafo">Welcome everyone to RPZ! Here you can create your ultimate characters for roleplaying. Search for interesting settings and dive into writing your story! Make new friends who share the same interests as you and love roleplaying just as much! Don’t forget to follow our rules in order to fully enjoy your stay here!</p>
                        <br> <br> <br> <br> <br> 
                        <img  src="img/thanks.png" height="30%" width="50%" >
                    </center>

                </div>

                <!-- right -->
                <div class="col s3 ">
                    <div class="rightbg"></div>
                </div>
            </div>





        </main>




        <footer class=" color-primary-3 page-footer ">
            <div class="container">
                <div class="row">
                    <div class="col l6 s12">
                        <h5 class="white-text">Footer Content(change me too uwu)</h5>
                        <p class="grey-text text-lighten-4">Some cool text tina will think of :P</p>
                    </div>
                    <div class="col l4 offset-l2 s12">
                        <h5 class="white-text">Contact Us</h5>
                        <ul>
                            <li><a class="grey-text text-lighten-3" href="#!">instagram</a></li>
                            <li><a class="grey-text text-lighten-3" href="#!">twitter</a></li>
                            <li><a class="grey-text text-lighten-3" href="#!">email</a></li>
                            <li><a class="grey-text text-lighten-3" href="#!">git hub</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container">
                    © 2019 Copyright, RPZone all rights reserved
                    <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
                </div>
            </div>
        </footer>



        <!-- Modal Structure -->
        <div id="modal1" class="modal bottom-sheet">
            <div class="modal-content">
                <h4>Welcome!</h4>
                <div class="col s3"></div>
                <div class="col s6">

                    <form class="login-form">
                        <div class="row">
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="material-icons prefix">mail_outline</i>
                                <input class="validate" id="email" type="email">
                                <label for="email" data-error="wrong" data-success="right">Email</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="material-icons prefix">lock_outline</i>
                                <input id="password" type="password">
                                <label for="password">Password</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <center> <a href="#" class="btn waves-effect waves-light col s4">Login</a></center>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s6 m6 l6">
                                <p class="margin medium-small"><a href="#">Register Now!</a></p>
                            </div>
                            <div class="input-field col s6 m6 l6">
                                <p class="margin right-align medium-small"><a href="#">Forgot password?</a></p>
                            </div>
                        </div>

                    </form>
                </div>
                <div class="col s3"></div>
                <div class="modal-footer">
                    <a href="#!" class="modal-close waves-effect waves-green btn-flat">close</a>
                </div>
            </div>
        </div>
    </body>




    <script>
        $(".button-collapse").sideNav();
        $('.dropdown-button').dropdown('open');

        $(document).ready(function() {
            $('#modal1').modal();
        });

    </script>

    </html>
