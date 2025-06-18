<?php
$host="localhost";
$user="root";
$password="";
$database="student";
$connection=new mysqli($host, $user,$password,$database);
if(!$connection){
    echo "connection failed";
}
else{
    
    echo "connection was succesful";
}
?>