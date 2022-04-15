<?php
 echo "<script> console.log('yas'); </script>";
 if(isset($_POST['submit']))
    {    
        $name = $_POST['name'];
        $email = $_POST['email'];
        $cc = $_POST['cc'];
        $password = $_POST['password'];
        $sql = "INSERT INTO registro (name,cc,email,password)
        VALUES ('$name','$cc','$email','$password')";
        if (mysqli_query($sql)) {
        echo "New record has been added successfully !";
        echo "<script> console.log('yas'); </script>";
        } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
        echo "<script> console.log('f'); </script>";
        }
        mysqli_close($conn);
    }
?>