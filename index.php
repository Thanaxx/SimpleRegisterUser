<?php

    include_once("./connectionFolder/connections.php");
    $connected = connect();

    if(isset($_POST['register'])){
        // echo 'Submitted';

        
        $name = $_POST['username'];
        $mail = $_POST['email'];
        $pass = $_POST['password'];

        $sql = "INSERT INTO `useraccount`(`Username`, `Email`, `Password`)
        VALUES ('$name', '$mail', '$pass')";
        $connected->query($sql) or die($connected->error);


        if($name == "" || $mail == "" || $pass == ""){
            echo "invalid input";
        }else{
            echo header("Location: users.php");
        }
    }

    if(isset($_POST['reset'])){
        echo header("Location: index.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <title>Registration Form</title>
</head>
<body>

    <div class="regForm">

        <div class="img">
            <img src="./images/sample.png" alt="" width="100%" height="100%">
        </div>

        <form action="" method="post" class="register">
            <h1>REGISTER NEW ACCOUNT</h1>
            <br>

            <label for="username">Username</label>
            <input type="text" name="username" id="username">

            <label for="email">Email</label>
            <input type="email" name="email" id="email">

            <label for="password">Password</label>
            <input type="password" name="password" id="password">

            <div class="btn">
                <button type="submit" name="register">REGISTER</button>
                <button type="submit" name="reset">RESET</button>
            </div>
        </form>
    </div>
</body>
</html>