<?php
//check if the user enter the form legitimate way
if($_SERVER["REQUEST_METHOD"] === "POST"){

    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    try {
        require_once 'dbh.inc.php';
        require_once 'signup_model.inc.php';
        require_once 'signup_contr.inc.php';

        // ERROR HANDLERS

        $errors =[];

        if(is_input_empty($username,$password,$email)){  
            $errors["empty_input"] = "Fill in all Fields!";
        }
        if(is_email_invalid($email)){  
            $errors["invalid_email"] = "Invalid Email Use"; 
        }
        if(is_username_taken($pdo, $username)){
            $errors["username_taken"] = "Username Already Taken!";   
        }
        if(is_email_registered($pdo, $email)){   
            $errors["empty_used"] = "Email is Already Registered";
        }

        require_once 'config_session.inc.php';

        if($errors){
            $_SESSION["errors_signup"] = $errors;

            $signupData = [
                "username" => $username,
                "email" => $email
            ];
            $_SESSION["signup_data"] = $signupData;

            header("location:../index.php");
            die();

        }

        create_user( $pdo, $username, $password, $email);
        header("location:../index.php?signup=success");

        $pdo = null;
        $stmt = null;

        die();

    }catch (PDOException $e) {
        die("Query failed" . $e->getMessage()); 
    }

}else{
    header("location:../index.php");
    die();
}


