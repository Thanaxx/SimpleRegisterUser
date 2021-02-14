<?php

    function connect(){
        $host = "localhost"; #CALLING ALL THE DATA FROM MY DATABSE
        $username = "root";
        $password = "Developer1207";
        $database = "registration";

        $connection = new mysqli("$host", "$username", "$password", "$database");
        
        if($connection->connect_error){
            echo $connection->connect_error;
        }else{
            return $connection;
        }
    }

?>