<?php 
    $FullName=$_POST['FullName'];
    $email=$_POST['email'];
    $phone_no=$_POST['phone_no'];
    $username=$_POST['username'];
    $passwd=$_POST['passwd'];
    $cpasswd=$_POST['cpasswd'];
    $connection=new mysqli('localhost','root','','registration');
    if($connection->connect_error){
        die('Connection failed : '.$connection->connect_error);
    }
    else{
        $stmt=$connection->prepare("insert into registration(FullName,email,phone_no,username,passwd,cpasswd)values(?,?,?,?,?,?)");
        $stmt->bind_param("ssisss",$FullName,$email,$phone_no,$username,$passwd,$cpasswd);
        $stmt->execute();
        if($passwd==$cpasswd)
        {
            header("Location: login.html");
            exit();
        }
        else {
            echo "<script>alert('wrong password.');</script>";
        }
        $stmt->close();
        $connection->close();
    }
?>