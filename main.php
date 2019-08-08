<?php

// conexión con base de datos
require_once("util/functions.php");  
require_once("util/db_manager.php"); 

if (isset($_POST['register'])) {
    
    $errorCount = 0;
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $username_log=($_POST['Username']);
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $sqlgenial   = "SELECT COUNT(*) AS LOG FROM RP_user WHERE username='$username_log'";
    $querygenial  = $conn->query($sqlgenial);
    $countqgenial = $querygenial->fetch();
    $querygenial->closeCursor();
    require_once("utilities/errorConditions.php");  
   
   
    
    
    
 


}
?>