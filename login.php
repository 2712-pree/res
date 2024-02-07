<?php

    $username = $_POST['username'];
    $passwd = $_POST['passwd'];
    $connection = new mysqli('localhost', 'root', '', 'registration');
    if($connection->connect_error){
        die('Connection failed : '.$connection->connect_error);
    }
    else{
        $stmt = $connection->prepare("select * from registration where username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt_result = $stmt->get_result();
        if($stmt_result->num_rows > 0){
            $data = $stmt_result->fetch_assoc();
            if($data['passwd'] === $passwd){
                header("Location: final.html");
            }else{
                echo "<script>alert('Invalid Credentials. please try again');</script>";
            }
        } else{
            echo "<script>alert('Invalid Credentials.Please try again');</script>";
        }
        exit();
    }
?>