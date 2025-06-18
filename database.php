
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Records</title>
    <style>
        table {
            border-collapse: collapse;
            width: 70%;
            margin: 20px auto;
            text-align: center;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
        a {
            text-decoration: none;
            margin: 0 5px;
            color: blue;
        }
        a:hover {
            color: red;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Username</th>
            <th>Email</th>
            <th>Password</th>
            <th>Gender</th>
            <th>Action</th>
        </tr>
        <?php
        include 'connect.php';
        $sql = 'SELECT * FROM users';
        $result = $connection->query($sql);
        if ( $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['Fname'] . "</td>";
                echo "<td>" . $row['Lname'] . "</td>";
                echo "<td>" . $row['username'] . "</td>";
                echo "<td>" . $row['Email'] . "</td>";
                echo "<td>" . $row['password'] . "</td>";
                echo "<td>" . $row['gender'] . "</td>";
                echo "<td>
                <a href='update.php?username=" . $row['username'] . "'>Edit</a>
                <a href='delete.php?username=" . $row['username'] . "'>Delete</a>
                </td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='7'>No records found.</td></tr>";
        }
        ?>
    </table>
</body>
</html>
