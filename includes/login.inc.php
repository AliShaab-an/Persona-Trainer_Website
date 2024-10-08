<?php
//check if the user enter the form legitimate way
if($_SERVER["REQUEST_METHOD"] === "POST"){

    $username = $_POST["username"];
    $password = $_POST["password"];

    try {
        require_once 'dbh.inc.php'; //order matter
        require_once 'login_model.inc.php';
        require_once 'login_contr.inc.php';

        // ERROR HANDLERS

        $errors =[];

        if(is_input_empty($username,$password)){  
            $errors["empty_input"] = "Fill in all Fields!";
        }
        
        $result = get_users($pdo,$username,$password);
        if(is_username_wrong($result)){
            $errors["login_incorrect"] = "incorrect login info";
        }
        if(!is_username_wrong($result) && is_password_wrong($password,$result["password"])){
            $errors["login_incorrect"] = "incorrect login info";
        }
        require_once 'config_session.inc.php';
        
            if($errors){
                $_SESSION["errors_login"] = $errors;
                header("location:../index.php");
                die();
        
            }
        
            $newSessionId = session_create_id();
            $sessionId = $newSessionId . "_" . $result["id"];
            session_id($sessionId); //create a session id using the users id

            $_SESSION["user_id"] = $result["id"];
            $_SESSION["user_username"] = htmlspecialchars($result["username"]);
            $_SESSION["last_regeneration"] = time();
            header("location:../index.php?login=success");
            $pdo = null;
            $stmt = null;
            die();
    } catch (PDOException $e) {
        die("Query failed" . $e->getMessage()); 
    }

}else{
    header("location:../index.php");
    die();
}