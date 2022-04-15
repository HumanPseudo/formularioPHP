<?php
    $DBuser = 'root';
    $DBpass = $_ENV['MYSQL_ROOT_PASSWORD'];
    $pdo = null;

    $name = $_REQUEST['name'];
    $cc = $_REQUEST['cc'];
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];

    $conn = new mysqli('172.20.0.2',$DBuser, $DBpass, 'registro');
    if ($conn->connect_error) {
        die("Connection failed: " 
            . $conn->connect_error);
    }
    $sqlquery = "INSERT INTO `inscripcion` (`name`, `cc`, `email`, `password`) VALUES ('$name', '$cc', '$email', '$password')";
    // INSERT INTO 'inscripcion' (name,cc,email,password) VALUES ('$name','$cc','$email','$password');";
    if ($conn->query($sqlquery) === TRUE) {
        echo "record inserted successfully";
    } else {
        echo "Error: " . $sqlquery . "<br>" . $conn->error;
    }
?>