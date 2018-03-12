<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Test</h1>
</body>
</html>

<?php
$email = $_POST['email'];
$password = $_POST['password'];

if (preg_match("/^(?=.*\d)(?=.*[A-Z])(?=.*[a-z])[0-9A-Za-z!-\/]{1,}$/", $password)==1){

}
else{
    header('location: index.php');
    echo "This password is not correct";
};

if (! $_SERVER['REQUEST_METHOD'] == 'POST' ){
    header('location: index.php');
    exit;
}

if (! filter_var( $email, FILTER_VALIDATE_EMAIL )){
    header('location: index.php');
    exit;
}


?>