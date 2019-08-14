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
        <link type="text/css" rel="stylesheet" href="css/main-primary-accessed.css" />
        <!-- Compiled and minified CSS -->
        <!-- Compiled and minified JavaScript -->
    </head>
    <?php
      require_once("main.php");
        $This_user_ID = $_SESSION["email"];
        $iduser_find  = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $user_id      = $iduser_find->query("SELECT id FROM `RP_user` WHERE `email`='$This_user_ID';")->fetch(Pdo::FETCH_COLUMN);
        //user refresh
        $user_username      = $iduser_find->query("SELECT username FROM `RP_user` WHERE `email`='$This_user_ID';")->fetch(Pdo::FETCH_COLUMN);
        $_SESSION["username"] =$user_username ;
        //profile picture
        $user_profileBackground     = $iduser_find->query("SELECT usernameU_background_url FROM `RP_user` WHERE `email`='$This_user_ID';")->fetch(Pdo::FETCH_COLUMN);
        $_SESSION["user_backgroundPIC"] =$user_profileBackground; 
        //profile picture
        $user_profilePIC = $iduser_find->query("SELECT usernameU_img_url FROM `RP_user` WHERE `email`='$This_user_ID';")->fetch(Pdo::FETCH_COLUMN);
        $_SESSION["user_profilePIC"] =$user_profilePIC ;
        //profile biography
        $user_bio     = $iduser_find->query("SELECT userBio FROM `RP_user` WHERE `email`='$This_user_ID';")->fetch(Pdo::FETCH_COLUMN);
        $_SESSION["user_bio"] =$user_bio ;
      
        $backToSettings= " <script>$(document).ready(function() {
        $('.side-nav').sideNav('');
        $('.home').hide('');
        $('.about').show('');
        $('.contact').hide('');
        $('#aboutN').addClass('active');
        $('#homeN').removeClass('active');
        $('#contactN').removeClass('active'); 
    });</script>";
     // SETTINGS   
    // USERNAME
        if (isset($_POST['EDIT_usernameU'])) {
        if (!empty($_POST['usernameU'])) {
            $new_edited_data = $_POST['usernameU'];
            $username_id         = $user_id;
            $data_location="username";
            update_my_data($username_id, $new_edited_data,$data_location);
            echo $backToSettings;
            echo $ModalUpdate_success;
            $update_Success = "Your username  have been succesfully changed to '$new_edited_data' !";
            $update_err="";
           
        } else {
            $update_err = "username must not be empty";
            echo $backToSettings;
            echo $ModalUpdate_error;
            
        }
        
    }
    // PASSWORD
    if (isset($_POST['EDIT_passwordU'])) {
        if (!empty($_POST['passwordU'])) {
            $new_edited_data = $_POST['passwordU'];
            $username_id         = $user_id;
            $data_location="password";
            $new_edited_data=hash_my_thing($new_edited_data);
            update_my_data($username_id, $new_edited_data,$data_location);
            echo $backToSettings;
            echo $ModalUpdate_success;
            $update_Success = "Your password  have been succesfully changed to '$new_edited_data' !";
            $update_err="";
           
        } else {
            $update_err = "password must not be empty";
            echo $backToSettings;
            echo $ModalUpdate_error;
            
        }
        
    }
    if (isset($_POST['EDIT_backgroundU'])) {
        if (!empty($_POST['backgroundU'])) {
            $new_edited_data = $_POST['backgroundU'];
            $username_id         = $user_id;
            $data_location="usernameU_background_url";
            update_my_data($username_id, $new_edited_data,$data_location);
            echo $backToSettings;
            echo $ModalUpdate_success;
            $update_Success = "Your background  have been succesfully changed to '$new_edited_data' !";
            $update_err="";
           
        } else {
            $update_err = "background url must not be empty";
            echo $backToSettings;
            echo $ModalUpdate_error;
            
        }
        
    }
    if (isset($_POST['EDIT_picU'])) {
        if (!empty($_POST['picU'])) {
            $new_edited_data = $_POST['picU'];
            $username_id         = $user_id;
            $data_location="usernameU_img_url";
            update_my_data($username_id, $new_edited_data,$data_location);
            echo $backToSettings;
            echo $ModalUpdate_success;
            $update_Success = "Your profile picture  have been succesfully changed to '$new_edited_data' !";
            $update_err="";
           
        } else {
            $update_err = "profile picture url must not be empty";
            echo $backToSettings;
            echo $ModalUpdate_error;
            
        }
        
    }
    if (isset($_POST['EDIT_bioU'])) {
        if (!empty($_POST['bioU'])) {
            $new_edited_data = $_POST['bioU'];
            $username_id         = $user_id;
            $data_location="userBio";
            update_my_data($username_id, $new_edited_data,$data_location);
            echo $backToSettings;
            echo $ModalUpdate_success;
            $update_Success = "Your biography have been succesfully changed to '$new_edited_data' !";
            $update_err="";
           
        } else {
            $update_err = "Your biography must not be empty";
            echo $backToSettings;
            echo $ModalUpdate_error;
            
        }
        
    }


      
      ?>

        <body>
            <header>
                <nav class="color-primary-3">
                    <div class="nav-wrapper">
                        <a href="" class="brand-logo"> <img class="logo-img" src="img/logo2.png" ></a>
                        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                        <ul class="right hide-on-med-and-down">
                            <li class="active homeN" id="homeN"><a>Chats</a></li>
                            <li class="aboutN" id="aboutN"><a>Settings</a></li>
                            <li class="contactN" id="contactN"><a>Contact</a></li>
                            <!-- Dropdown Trigger -->
                            <li>
                                <a id="scrollme" class="modal-trigger" href="#modal1">
                                    <?php echo $_SESSION["username"];?><i class="material-icons right">arrow_drop_down</i></a>
                            </li>
                        </ul>
                        <ul class="side-nav" id="mobile-demo">
                            <li class="active homeC"><a href="#">Chats</a></li>
                            <li><a class="aboutC">Settings</a></li>
                            <li><a class="contactC">Contact</a></li>
                            <!-- Dropdown Trigger -->
                            <li>
                                <a id="scrollme2" class="modal-trigger" href="#modal1">
                                    <?php echo $_SESSION["username"];?><i class="material-icons right">arrow_drop_down</i></a>
                            </li>
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
                            <!-- Chats -->
                            <div class="home">
                                <div class="center-align escondemeS">
                                    <span class="title letter-blink">R</span>
                                    <span class="title letter-2">P</span>
                                    <span class="title letter-2">Z</span>
                                    <br>
                                    <p class="glow">roleplay</p>
                                    <span class="title letter-2">C</span>
                                    <span class="title letter-1">H</span>
                                    <span class="title letter-4">A</span>
                                    <span class="title letter-blink">T</span>
                                    <span class="title letter-2">S</span>
                                </div>
                                <h3 class=" center-align escondemeN">Chats</h3>
                                <hr>
                                <div class="topChatsmenu row">




                                    <div class="row">
                                        <div class="col l12">
                                            <div class="card blue-grey darken-1">
                                                <div class="card-content white-text">
                                                    <div class="row">
                                                        <div class="col l6">
                                                            <h5>Search</h5>
                                                            <form>
                                                                <div class="input-field">
                                                                    <input id="search" type="search">
                                                                    <label for="search"><i class="material-icons">search</i></label>
                                                                    <!-- I've put "red-text" class to emphasize -->

                                                                </div>
                                                            </form>
                                                        </div>

                                                        <div class="col l6">
                                                            <h5>Create Chat</h5>
                                                            <a class="btn-floating btn-large waves-effect waves-light modal-trigger" href="#CreateChat"><i class="material-icons right">create</i></a></div>

                                                    </div>



                                                </div><br>
                                                <div class="card-action">

                                                </div>
                                            </div>
                                        </div>
                                    </div>






                                    <br>

                                </div>

                            </div>
                            <!-- SETTINGS -->
                            <div class="about" style="display: none;">
                                <h1>Settings</h1>
                                <hr>
                                <div class="row " style="height: 600px;overflow-y: scroll;">
                                    <!--left -->
                                    <div class="col  l6">
                                        <!-- Password -->


                                        <div class="card blue-grey darken-1">
                                            <div class="card-content white-text">
                                                <span class="card-title">Password</span>
                                                <p>"Feeling insecure already?"</p>
                                            </div>
                                            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                                                <h5> Edit, your password!:</h5>
                                                <input style="color:black;background-color:white" type="password" name="passwordU">
                                                <button class="btn w3-button " type="submit" name="EDIT_passwordU">
                                       <span class="glyphicon glyphicon-refresh"></span> ok!
                                       </button>
                                                <hr>
                                            </form>
                                        </div>


                                        <!--End -->
                                    </div>
                                    <!--right -->
                                    <div class="col  l6">
                                        <!-- Username img -->


                                        <div class="card blue-grey darken-1">
                                            <div class="card-content white-text">
                                                <span class="card-title">Username</span>
                                                <p>"Someone stalking you?"</p>
                                            </div>
                                            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                                                <h5> Edit, your username!:</h5>
                                                <input style="color:black;background-color:white" type="text" name="usernameU">
                                                <button class="btn w3-button " type="submit" name="EDIT_usernameU">
                                    <span class="glyphicon glyphicon-refresh"></span> ok!
                                    </button>
                                                <hr>
                                            </form>
                                        </div>



                                    </div>
                                    <!--left -->
                                    <div class="col  l6">
                                        <!-- Password -->


                                        <div class="card blue-grey darken-1">
                                            <div class="card-content white-text" style="padding:0px">
                                                <img src="<?php echo $_SESSION["user_backgroundPIC"];?>" height="110px" width="180px" alt="jofpin" style="border-radius: 10%;" />
                                            </div>
                                            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                                                <h5> Edit, background!:</h5>
                                                <input style="color:black;background-color:white" type="text" name="backgroundU" placeholder="Paste your picture URL">
                                                <button class="btn w3-button " type="submit" name="EDIT_backgroundU">
                                       <span class="glyphicon glyphicon-refresh"></span> ok!
                                       </button>
                                                <hr>
                                            </form>
                                        </div>


                                        <!--End -->
                                    </div>
                                    <!--right -->
                                    <div class="col  l6">
                                        <!-- Username img -->


                                        <div class="card blue-grey darken-1">
                                            <div class="card-content white-text" style="padding:0px">

                                                <img src="<?php echo $_SESSION["user_profilePIC"];?>" height="120px" width="120px" alt="jofpin" style="border-radius: 50%;" />

                                            </div>
                                            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                                                <h5 style="margin-top:0px"> Edit, your picture!:</h5>
                                                <input style="color:black;background-color:white" type="text" name="picU" placeholder="Paste your picture URL">
                                                <button class="btn w3-button " type="submit" name="EDIT_picU">
                                    <span class="glyphicon glyphicon-refresh"></span> ok!
                                    </button>
                                                <hr>
                                            </form>
                                        </div>



                                    </div>
                                    <!-- End -->
                                    <div class="col  l12">
                                        <!-- Password -->


                                        <div class="card blue-grey darken-1">
                                            <div class="card-content white-text">
                                                <span class="card-title">Biography</span>
                                                <p>"Be creative!"</p>
                                            </div>
                                            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                                                <h5> Edit, your Biography!:</h5>
                                                <textarea style="color:black;background-color:white;height:150px" type="text" name="bioU"></textarea>
                                                <button class="btn w3-button " type="submit" name="EDIT_bioU">
                                       <span class="glyphicon glyphicon-refresh"></span> ok!
                                       </button>
                                                <hr>
                                            </form>
                                        </div>

                                    </div>
                                    <!--End -->

                                </div>
                                <br> <br>
                            </div>
                            <hr>
                            <!-- CONTACT -->
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
                                <h3 class=" center-align escondemeN">CONTACT</h3>
                                <hr>
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
            <div id="modal1" class="modal bottom-sheet modalProfileBg">
                <div class="modal-content modalProfileBg" id="profileLogOutModal">
                    <div class="content-profile-page">
                        <div class="profile-user-page card">
                            <div class="img-user-profile">
                                <img class="profile-bgHome" src="<?php echo $_SESSION["user_backgroundPIC"];?>" />
                                <img class="avatar" src="<?php echo $_SESSION["user_profilePIC"];?>" alt="jofpin" />
                            </div>
                            <div class="user-profile-data">
                                <h5 style="color:rgb(102, 95, 95)">
                                    <?php echo $_SESSION["username"];?>
                                </h5>
                                <p>
                                    <?php echo $_SESSION["user_bio"];?>
                                </p>
                            </div>
                            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                                <button class="btn waves-effect waves-light col s4" type="submit" name="Log_me_out">Log out</button>
                            </form>
                            <br>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Modal Structure -->
            <div id="Update_error" class="modal hideScrooll modalUpdate">
                <div class="modal-content" style="color: white">
                    <h4>Errors</h4>
                    <?php
                // errores
                echo "<h5>" . $update_err . "</h5>";
                
            ?>
                </div>
                <div class="o-circle c-container__circle o-circle__sign--failure">
                    <div class="o-circle__sign"></div>
                </div>
                <div class="modal-footer" style="background-color: rgba(71, 71, 71, 0.2) !important;color:white !important;">
                    <a href="" class="modal-action modal-close waves-effect waves-green btn-flat">close</a>
                </div>
            </div>

            <!-- Modal Structure -->
            <div id="Update_Success" class="modal hideScrooll modalUpdate">
                <div class="modal-content" style="color: white">
                    <h4>Congrats</h4>
                    <?php
                // errores
                echo "<h5>" . $update_Success . "</h5>";
                
            ?>
                        <h5>Just wait a bit for the changes to be made on the whole web</h5>



                </div>
                <div class="o-circle c-container__circle o-circle__sign--success">
                    <div class="o-circle__sign"></div>
                </div>
                <div class="progress">
                    <div class="indeterminate"></div>
                </div>

                <div class="modal-footer" style="background-color: rgba(71, 71, 71, 0.2) !important;color:white !important;">
                    <a href="" class="modal-action modal-close waves-effect waves-green btn-flat">close</a>
                </div>
            </div>



            <!-- Modal Structure -->
            <div id="CreateChat" class="modal" >
                <div class="modal-content modalUpdate">
                    <h4>Chat Creator</h4>
                    <form class="col s12" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

                        <div class="row">
                            <div class="input-field col s12">
                                <input id="username" type="text" class="validate" name="Username" required style="color:white !important;">
                                <label for="username">ChatName</label>
                            </div>

                            <div class="input-field col s12">
                                <input id="username" type="text" class="validate" name="Username" required style="color:white !important;">
                                <label for="username">ChatDescription</label>
                            </div>

                            <div class="input-field col s12">
                                <input id="inputIMG" type="text" class="validate" name="Username" required placeholder="Paste background URL" style="color:white !important;">
                                <label for="username">Background</label>
                               <center> <img id="chatBackground" height="200px" width="400px" style="border-radius: 10%;"/></center>
                            </div>

                            <div class="input-field col s12">
                                <input id="" type="hidden" value="<?php echo $_SESSION["email"];?>" class="validate" name="Username" required>
                                
                                
                            </div>

                        </div>

                        <center> <button class="btn waves-effect waves-light col s4" type="submit" name="register">Create Chat<i class="material-icons right">create</i></button></center>
                    </form>
                </div>
                <div class="modal-footer">
                    <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">close</a>
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
                $('#CreateChat').modal();

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



            $("#scrollme").click(function() {
                $("#modal1").animate({
                    scrollTop: $(document).height()
                }, 1000);
            });
            $("#scrollme2").click(function() {
                $("#modal1").animate({
                    scrollTop: $(document).height()
                }, 1000);
            });



            setInterval(function(){ 

                $('#chatBackground').attr('src',$("#inputIMG").val());
                console.log($("#inputIMG").val())
             }, 1000);

        </script>

    </html>
