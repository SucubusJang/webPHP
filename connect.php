<?php
    define("username", "root");
    define("password","");
    define("host" ,"localhost");
    define("db","iti_shopping");
    $conn = new mysqli(host,username,password,db);
    if($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);
    }else{
        echo "DB Connected";
    }
?>