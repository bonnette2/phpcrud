<?php
include "connect.php";

if (isset($_GET['username'])) {
    $username = $_GET['username'];
    
    $sql = "DELETE FROM users WHERE username='$username'";
    $result = $connection->query($sql);

    if ($result === TRUE) {
        echo "User deleted successfully!";
        header("Location: database.php"); 
        exit;
    } else {
        echo "Error deleting user: " . $connection->error;
    }
}
?>
