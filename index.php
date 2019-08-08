<?php
// Start the session
session_start();
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>Roleplay zone</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link type="text/css" rel="stylesheet" href="css/main-primary.css" />
        <link type="text/css" rel="stylesheet" href="css/hover.css" />
        <script type="text/javascript" src="js/main.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Compiled and minified CSS -->


        <!-- Compiled and minified JavaScript -->


    </head>


    <?php
require_once("main.php");


?>
    <body>
        <header>




            <nav class="color-primary-3">

                <div class="nav-wrapper">

                    <a href="" class="brand-logo"> <img class="logo-img" src="img/logo2.png" ></a>


                    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>

                    <ul class="right hide-on-med-and-down">

                        <li class="active homeN" id="homeN"><a >Home</a></li>

                        <li class="aboutN"  id="aboutN"><a>About</a></li>

                        <li class="contactN"  id="contactN"><a>Contact</a></li>
                        <!-- Dropdown Trigger -->
                        <li><a class="modal-trigger" href="#modal1">LOGIN<i class="material-icons right">arrow_drop_down</i></a></li>





                    </ul>

                    <ul class="side-nav" id="mobile-demo">

                        <li class="active homeC"><a href="#">Home</a></li>

                        <li><a class="aboutC" >About</a></li>

                        <li><a class="contactC" >Contact</a></li>
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
                        <div class="home">
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
                            <img src="img/thanks.png" height="30%" width="50%">
                        </div>

                        <div class="about" style="display: none;">
                            <div class="center-align escondemeS" >
                                <span class="title letter-blink">R</span>
                                <span class="title letter-2">P</span>
                                <span class="title letter-2">Z</span>
                                <br>
                                <p class="glow">roleplay</p>
                                <span class="title letter-2">A</span>
                                <span class="title letter-1">B</span>
                                <span class="title letter-4">O</span>
                                <span class="title letter-blink">U</span>
                                <span class="title letter-4">T</span>
                            </div>
                            <h1 class="escondemeN" >ABOUT</h1><hr>
                            <p class="flow-text paragrafo">RolePlay Zone is created by two young people that have an interest in roleplay and would like to experience the fun of roleplaying with others The Mission is to provide a good and easy to use platform for all roleplay lovers. The team throughly thought of all features that this website needs, so that you and your friends will find new inspiration and will to roleplay more. We hope we will succeed in this mission. But we won't be able to do that without your participation!</p>
                            <br> <br> 
                            <img src="img/thanks.png" height="30%" width="50%">
                        </div>

                        <div class="contact" style="display: none;">
                            <div class="center-align escondemeS">
                                <span class="title letter-blink">R</span>
                                <span class="title letter-2">P</span>
                                <span class="title letter-2">Z</span>
                                <br>
                                <p class="glow">roleplay</p>
                                <span class="title letter-2">C</span>
                                <span class="title letter-1">O</span>
                                <span class="title letter-4">N</span>
                                <span class="title letter-blink">T</span>
                                <span class="title letter-4">A</span>
                                <span class="title letter-1">C</span>
                                <span class="title letter-blink">T</span>
                                

                            </div>
                            <h3 class=" center-align escondemeN" >CONTACT</h3><hr>
                            <p class="flow-text paragrafo">If you have any questions or suggestions on how to improve our website, you can contact us by <br>email: roleplayzone@yandex.com</p>
                            <br> <br> <br> <br> <br>
                            <img src="img/thanks.png" height="30%" width="50%">
                        </div>
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
                        <a href="" class="brand-logo"> <img class="logo-img" src="img/logo2.png" ></a>
                        <p class="grey-text text-lighten-4">Some cool text tina will think of :P</p>
                    </div>
                    <div class="col l4 offset-l2 s12">
                        <h5 class="white-text">Contact Us</h5>
                        <ul>
                            <li><a class="grey-text text-lighten-3" href="#!">instagram</a></li>
                            <li><a class="grey-text text-lighten-3" href="#!">twitter</a></li>
                            <li><a class="grey-text text-lighten-3" href="#!"><i class="fa fa-envelope-o"></i> email</a></li>
                            <li><a class="grey-text text-lighten-3" href="#!"> git hub</a></li>
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
                <h4 style="color:#595C64">Welcome!</h4>
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
                                <p class="margin medium-small"><a class="modal-trigger" href="#modal2">Register Now!</a></p>
                            </div>
                            <div class="input-field col s6 m6 l6">
                                <p class="margin right-align medium-small"><a href="#">Forgot password?</a></p>
                            </div>
                        </div>

                    </form>
                </div>
                <div class="col s3"></div>
                <div class="modal-footer">
                    <a href="" class="modal-close waves-effect waves-green btn-flat">close</a>
                </div>
            </div>
        </div>
        <!-- Modal Structure -->
  <div id="modal2" class="modal bottom-sheet">
    <div class="modal-content">
      <h4 style="color:#595C64 ">Registration Form</h4>
      <div class="row">
    <form class="col s12" action="<?php echo $_SERVER['PHP_SELF']; ?>"  method="post">
     
      <div class="row">
        <div class="input-field col s12">
        <input id="username" type="text" class="validate" name="Username">
          <label for="username">Username</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="password" type="password" class="validate" name="Password">
          <label for="password">Password</label>
          
        </div>
        <div class="input-field col s12">
        <input id="password" type="password" class="validate" name="Password2">
          <label for="password">Password Confirmation</label>
          </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" name="Email" class="validate">
          <label for="email" >Email</label>
        </div>
      </div>
      <center> <button class="btn waves-effect waves-light col s4" type="submit" name="register">Register</button></center>
    </form>
  </div>
    </div>
    <div class="modal-footer">
      <a href="" class="modal-action modal-close waves-effect waves-green btn-flat">close</a>
    </div>
  </div>
            <!-- Modal Trigger -->


<!-- Modal Structure -->
<div id="Register_Error" class="modal">
  <div class="modal-content" style="color: rgba( 89, 92,100,1)">
    <h4>Errors</h4>
    <?php
                // errores
                echo "<h5>" . $username_err . "</h5>";
                echo "<h5>" . $email_err . "</h5>";
            ?>
  </div>
  <div class="o-circle c-container__circle o-circle__sign--failure">
    <div class="o-circle__sign"></div>  
  </div>   
  <div class="modal-footer">
    <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
  </div>
  </div>
    </body>




    <script>
        $(".button-collapse").sideNav();
        $(".aboutC").sideNav('hide');
        $('.dropdown-button').dropdown('open');

        $(document).ready(function() {
            $('#modal1').modal();
            $('#modal2').modal();
            $('#Register_Error').modal();
            
        });



        $(".aboutC").click(function() {
            $(".side-nav").sideNav("hide");
            $(".home").hide("slow");
            $(".about").show("slow");
            $(".contact").hide("slow");

            $("#aboutN").addClass('active');
            $("#homeN").removeClass('active');
            $("#contactN").removeClass('active');

        });
        $(".aboutN").click(function() {
            $(".side-nav").sideNav("hide");
            $(".home").hide("slow");
            $(".about").show("slow");
            $(".contact").hide("slow");
            
            $("#aboutN").addClass('active');
            $("#homeN").removeClass('active');
            $("#contactN").removeClass('active');
            

        });
        $(".homeN").click(function() {
            $(".side-nav").sideNav("hide");
            $(".home").show("slow");
            $(".about").hide("slow");
            $(".contact").hide("slow");

            $("#aboutN").removeClass('active');
            $("#homeN").addClass('active');
            $("#contactN").removeClass('active');

        });
        $(".homeC").click(function() {
            $(".side-nav").sideNav("hide");
            $(".home").show("slow");
            $(".about").hide("slow");
            $(".contact").hide("slow");
            
            $("#aboutN").removeClass('active');
            $("#homeN").addClass('active');
            $("#contactN").removeClass('active');

        });
        $(".contactN").click(function() {
            $(".side-nav").sideNav("hide");
            $(".home").hide("slow");
            $(".about").hide("slow");
            $(".contact").show("slow");

            $("#aboutN").removeClass('active');
            $("#homeN").removeClass('active');
            $("#contactN").addClass('active');

        });
        $(".contactC").click(function() {
            $(".side-nav").sideNav("hide");
            $(".home").hide("slow");
            $(".about").hide("slow");
            $(".contact").show("slow");

            $("#aboutN").removeClass('active');
            $("#homeN").removeClass('active');
            $("#contactN").addClass('active');

        });


    </script>

    </html>
