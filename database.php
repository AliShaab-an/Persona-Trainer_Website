<?php

    define("server","localhost");
    define("User","root");
    define("password", "");
    define("dbname", "web_project");

    $con = mysqli_connect(server,User,password,dbname);
    if($con)
        echo "Connected";
    else
        echo "Not Connected";





?>