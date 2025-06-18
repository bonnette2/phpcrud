
<?php
include 'connect.php';

if (isset($_GET['username'])) {
    $username = $_GET['username'];
    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = $connection->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "User not found!";
        exit;
    }
} 
if (isset($_POST['update'])) {
    $new_fname = $_POST['fname'];
    $new_lname = $_POST['lname'];
    $new_email = $_POST['email'];
    $new_gender = $_POST['gender'];

   
    $sql = "UPDATE users SET Fname='$new_fname', Lname='$new_lname', Email='$new_email', gender='$new_gender' WHERE username='$username'";
    if ($connection->query($sql) === TRUE) {
        echo "User updated successfully!";
        header("Location: database.php");
        exit;
    } else {
        echo "Error updating user: " . $connection->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
    <style>

    </style>
</head>
<body>
    <h2>Edit User Details</h2>
        
    <form method="post">
        <label>First Name:</label><br>
        <input type="text" name="fname" value="<?php echo $row['Fname']; ?>"><br>
        
        <label>Last Name:</label><br>
        <input type="text" name="lname" value="<?php echo $row['Lname']; ?>"><br>
        
        <label>Email:</label><br>
        <input type="email" name="email" value="<?php echo $row['Email']; ?>"><br>
        
        <label>Gender:</label><br>
        <input type="text" name="gender" value="<?php echo $row['gender']; ?>"><br><br>

        <button type="submit" name="update">Update</button>
        <a href="database.php">Cancel</a>
    </form>
</body>
</html>
