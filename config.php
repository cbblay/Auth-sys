<?php

    //host
    $host= "localhost";

    //dbname
    $dbname ="auth-system";

    //user
    $user="root";

    //password
    $pass="";

    $conn = new PDO("mysql:host=$host;dbname=$dbname;",$user, $pass);

    if($conn == true)
    {
        echo "👌🏽";
    }else{
        echo "bad connection: error";
    }






?>