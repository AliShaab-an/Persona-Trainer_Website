<?php

    define("server","localhost");
    define("User","root");
    define("password", "");
    define("dbname", "");

    $con = mysqli_connect(server,User,password,dbname);
    if($con)
        echo "Connected";
    else
        echo "Not Connected";





?>