<?php


// more security when handling session
ini_set('session.use_only_cookies',1);
ini_set('session.use_strict_mode',1);

session_set_cookie_params([
    'lifetime' => 1000,
    'domain' => 'localhost',
    'path' => '/',
    'secure' => true, //allow to use cookie only in https connection
    'httponly' => true
]);
//run an update every 30min take the cookie an regenerate the id for the cookie
//check a  certain session variable exits and create one if its not

session_start();

if(isset($_SESSION["user_id"])){
    //if the user is logged in 
    if (!isset($_SESSION["last_regeneration"] )) {
        regenerate_session_id_loggedin();   // time is the current time in the server
    } else{
        $interval = 60 * 30;  // number of seconds x the number of min
    
        //check if the time is greater than 30min if it is to generate a new id 
        if(time() - $_SESSION["last_regeneration"] >= $interval){
            regenerate_session_id_loggedin();
        }
    }
}else{
    // if the user is not login in the website execute this code
    if (!isset($_SESSION["last_regeneration"] )) {
        regenerate_session_id();   // time is the current time in the server
    } else{
        $interval = 60 * 30;  // number of seconds x the number of min
    
        //check if the time is greater than 30min if it is to generate a new id 
        if(time() - $_SESSION["last_regeneration"] >= $interval){
            regenerate_session_id();
        }
    }
}


function regenerate_session_id(){
    session_regenerate_id(true);
    $_SESSION["last_regeneration"] = time();
}

function regenerate_session_id_loggedin(){
    session_regenerate_id(true);
    $userId = $_SESSION["user_id"]; //grabbing the user id from the session variable if logged in

    $newSessionId = session_create_id(); //creating new session id
    $sessionId = $newSessionId . "_" . $userId;
    session_id($sessionId); //create a session id using the users id
    $_SESSION["last_regeneration"] = time();
}