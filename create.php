<?php
include "connect.php";
if (isset($_POST['submit'])){
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastName'];
    $username=$_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender= $_POST['gender'];
    $sql="INSERT INTO users(Fname,Lname,username,Email,password,gender) VALUES ('$first_name','$last_name','$username','$email','$password','$gender')";
    $result = $connection -> query($sql);
    if($result==true){  
        echo 'New record created sucessfully <br>';
    }
    else{
      echo 'Error:' . $sql . '<br>' . $connection->error;
    }
    
    $connection->close();
}

?>