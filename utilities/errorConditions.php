<?php
$username_err = $name_err = $surname_err = $dni_err = $email_err = $phone_err = "";

$username_error = validate_name($_POST['Username']);
$email_error = validate_email($_POST['Email']);
$modalScript="<script>

$(document).ready(function() {

    jQuery(document).ready(function(){
        jQuery('#modal2').modal();
        jQuery(document).ready(function(){
            jQuery('#modal2').modal('open');
        });
  });
    
});
$(document).ready(function() {

    jQuery(document).ready(function(){
        jQuery('#Register_Error').modal();
        jQuery(document).ready(function(){
            jQuery('#Register_Error').modal('open');
        });
  });
    
});

</script>";
$modalScript3="<script>

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
        jQuery('#Register_Success').modal();
        jQuery(document).ready(function(){
            jQuery('#Register_Success').modal('open');
        });
  });
    
});

</script>";




    $errorCount = 0; 
// CONDICIONES DE ERRORES

     //condicion username
    if($username_error == 1){
        global $username_err;
        $username_err = 'Username must not be empty';
        global $errorCount;
        $errorCount = $errorCount +1;
    }
     //condicion email
    if($email_error == 1){
        global $email_err;
        $email_err = 'Your e-mail must not be empty';
        global $errorCount;
        $errorCount = $errorCount +1;
    }elseif($email_error == 2){
        global $email_err;
        $email_err = 'This is not my kind of e-mail, try something with at least @something';
        global $errorCount;
        $errorCount = $errorCount +1;
    }
    
    //condicion si todo es correcto
    if($username_err == 0  && $email_error == 0 && $countqgenial['LOG']==0 && $countqgenial2['LOG']==0 ) {
        $username_r =($_POST['Username']);
        $email_r =   ($_POST['Email']);
        $password_r =hash_my_thing(($_POST['password']));
        register_me($username_r,$email_r,$password_r);
        echo $modalScript3; 
    }
    // inyeccion de scripts si existen errores
    if($errorCount>0){
        echo $modalScript;
        
        
    }
    
   if($countqgenial['LOG']==1){
    $username_err = 'This username is in use!';
    echo $modalScript;
    
}
if($countqgenial2['LOG']==1){
    $email_err = 'This Email is in use!';
    echo $modalScript;
    
}


