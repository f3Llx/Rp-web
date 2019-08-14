<?php
function insertInfo($username_p, $msg) {
    try {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = 'RoleplayZone';
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $sql_insertCurrent_info = "INSERT INTO RP_message (userid, msg, msg_date) VALUES ('$username_p', '$msg', now())";
        $conn->exec($sql_insertCurrent_info);

        }
    catch(PDOException $e)
        {
        echo $sql_insertCurrent_info . "<br>" . $e->getMessage();
        }
    
    $conn = null;


}
function update_my_data($username_id, $new_edited_data,$data_location) {
    try {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = 'RoleplayZone';
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $sql_insertCurrent_info = "UPDATE `RP_user` SET `$data_location` = '$new_edited_data' WHERE `RP_user`.`id` = '$username_id';";
        $conn->exec($sql_insertCurrent_info);

        }
    catch(PDOException $e)
        {
        echo $sql_insertCurrent_info . "<br>" . $e->getMessage();
        }
    
    $conn = null;


}


function register_me($username_r,$email_r,$password_r) {
    try {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = 'RoleplayZone';
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $sql_insertRegister_info = "INSERT INTO RP_user (username,email,password) VALUES ('$username_r','$email_r','$password_r')";
        $conn->exec($sql_insertRegister_info);

        }
    catch(PDOException $e)
        {
        echo $sql_insertCurrent_info . "<br>" . $e->getMessage();
        }
    
    $conn = null;


}

// FUNCIONES
function validate_name($name){
    if(empty($name)){
        return 1;
    }
    elseif(preg_match('/^[a-zA-Z ]*$/', $name)){
        return 0;
    }
    else{
        return 2;
    }
}

function validate_surname($surname){
    if(empty($surname)){
        return 1;
    }elseif(preg_match('/^[a-zA-Z ]*$/',$surname)){
        return 0;
    }else{
        return 2;
    }
}

function validate_email($Email){
    if(empty($Email)){
        return 1;
    }elseif(filter_var($Email, FILTER_VALIDATE_EMAIL)){
        return 0;
    }else{
        return 2;
      
    }
}

function hash_my_thing($hashedPassword){
    $hashedPassword=sha1($hashedPassword);
    return $hashedPassword;
}
    