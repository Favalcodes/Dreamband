<?php
    $email = filter_input(INPUT_POST, 'email');
    if (!empty($email)){
        $host = "localhost";
        $dbusername = "root";
        $dbpassword = "";
        $dbname = "DreamBand";

        // Create connection
        $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

        if (mysqli_connect_error()){
            die('Connect Error ('. mysqli_connect_error() .')'
            . mysqli_connect_error());
        }
        else{
            $sql = "INSERT INTO subscription (email) values ('$email')";
            if ($conn->query($sql)){
                echo "Subscribed successfully";
            }
            else{
                echo "Error: ". $sql . "<br>". $conn->error;           
            }
            $conn->close();
        }
    }
    else{
        echo "email should not be empty";
        die();
    }
?>