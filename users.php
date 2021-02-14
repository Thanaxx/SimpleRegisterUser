<?php

    include_once("./connectionFolder/connections.php");
    $connected = connect();

    $sql = "SELECT * FROM useraccount ORDER BY id DESC";
    $users = $connected->query($sql) or die($connected->error);
    $row = $users->fetch_assoc();

    // do{
    //     echo $row['Username']."</br>".$row['Email']."</br>".$row['Password'];
    // }while($row = $users->fetch_assoc());

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
    <title>Document</title>
</head>
<body>
    <div class="userInfos">
        <button class="back"><a href="index.php">Back</a></button>
        <h1>REGISTERED USERS</h1> <br>

        <table>
            <tr>
                <th>Account Name</th>
                <th>Your Password</th>
                <th>Your Email</th>
            </tr>

            <tbody>
            
            <?php do{ ?>
                <tr>
                    <td><?php echo $row['Username']; ?> </td>
                    <td><?php echo $row['Email']; ?> </td>
                    <td><?php echo $row['Password']; ?> </td>
                </tr>
            <?php } while($row = $users->fetch_assoc());?>

            </tbody>
        </table>
    </div>
</body>
</html>