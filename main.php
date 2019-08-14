<?php

// conexión con base de datos
require_once("util/functions.php");  
require_once("util/db_manager.php"); 
$ModalLogin_error="<script>
    $(document).ready(function() {
    
        jQuery(document).ready(function(){
            jQuery('#modal1').modal();
            jQuery(document).ready(function(){
                jQuery('#modal1').modal('open');
            });
      });
        
    });
    $(document).ready(function() {
    
        jQuery(document).ready(function(){
            jQuery('#Login_Error').modal();
            jQuery(document).ready(function(){
                jQuery('#Login_Error').modal('open');
            });
      });
        
    });
    </script>";
    $ModalUpdate_error="<script>
    $(document).ready(function() {
    
        jQuery(document).ready(function(){
            jQuery('#Update_error').modal();
            jQuery(document).ready(function(){
                jQuery('#Update_error').modal('open');
            });
      });
        
    });

    </script>";
    $ModalUpdate_success="<script>
    $(document).ready(function() {
    
        jQuery(document).ready(function(){
            jQuery('#Update_Success').modal();
            jQuery(document).ready(function(){
                jQuery('#Update_Success').modal('open');
            });
      });
        
    });

    </script>";
if (isset($_POST['register'])) {
    
    $errorCount = 0;
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $username_log=($_POST['Username']);
    $email_log=($_POST['Email']);
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $sqlgenial   = "SELECT COUNT(*) AS LOG FROM RP_user WHERE username='$username_log'";
    $sqlgenial2   = "SELECT COUNT(*) AS LOG FROM RP_user WHERE email='$email_log'";
    $querygenial  = $conn->query($sqlgenial);
    $querygenial2  = $conn->query($sqlgenial2);
    $countqgenial = $querygenial->fetch();
    $countqgenial2 = $querygenial2->fetch();
    $querygenial->closeCursor();
    $querygenial2->closeCursor();
    require_once("utilities/errorConditions.php");  
}
if (isset($_POST['Log_me_in'])) {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $username_log = $_POST['username_log'];
    $password_log = hash_my_thing(($_POST['password_log']));
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $sqlgenial   = "SELECT COUNT(*) AS LOG FROM RP_user WHERE email='$username_log' && password='$password_log';";
    $querygenial  = $conn->query($sqlgenial);
    $countqgenial = $querygenial->fetch();
    $querygenial->closeCursor();
    if($countqgenial['LOG']==1) {
        
        $_SESSION["email"]=$username_log;
        header('Location: registered.php');
    } else {
        echo $ModalLogin_error;
    }


}
if (isset($_POST['Log_me_out'])) {
    header('Location: index.php');
    // remove all session variables
    session_unset(); 
    
    // destroy the session 
    session_destroy(); 


}
?>