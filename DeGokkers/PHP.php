<?php
require_once ('dbcon.php');


//        de registratie
if (isset($_POST['insert'])) {
    $email = $_POST['reg_email'];
    $pass = $_POST['reg_password'];
    $hash = password_hash($pass, PASSWORD_DEFAULT);

    $query = $conn->prepare("SELECT email FROM users WHERE email = ?");

    $query->bindValue(1, $email);
    $query->execute();


    if (!empty($email) && !empty($pass)){
        if ($query->rowCount() > 0 && filter_var($email , FILTER_VALIDATE_EMAIL)) {
            if (isset($_POST['insert'])){
                $_SESSION['logmessage'] = "Email already exists";
            }

            die();

        } else {
            if (preg_match("/^(?=.*[A-Z])(?=.*[a-z])[0-9A-Za-z!-\/]{1,}$/", $pass) == 1 && min(7, $pass)) {
                if ($_POST['check'] == true){
                    $pdoQry_users = 'INSERT INTO users(email, password) VALUES (:email, :password)';
                    $pdoResult = $conn->prepare($pdoQry_users);
                    $pdoExec = $pdoResult->execute(array(":email" => $email,":password" => $hash));

                    if ($pdoExec){
                        header('location: index.php');
                    }
                }
            }
        }
    }

}


//        De login
if (isset($_POST['submit']) && !empty($_POST['user'])){

} else{
    $pass = $_POST["log_password"];
    $email = $_POST['log_email'];
    $logincheck = false;


    $query = $conn->prepare("SELECT email FROM users WHERE email = :email");
    $query->bindValue(":email", $email);
    $query->execute();

    if ($query->rowCount() > 0){

        $smt = $conn->prepare("SELECT password FROM users WHERE email = :email");

        $smt->bindValue(":email", $email);

        $smt->execute();

        $hash = $smt->fetch();

        if (password_verify($pass, $hash['password'])){
            $logincheck = true;

            header("location: index.php");
        }
    } else {
        $logincheck = false;
        header("location: index.php");
    }


    if ($logincheck === false){
        $_SESSION['logmessage'] = "your password or email is incorrect";
    } else{
        $_SESSION['logmessage'] = "you are logged in";

    }
}