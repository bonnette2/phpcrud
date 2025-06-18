<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Laila:wght@300;400;500;600;700&family=Merriweather:ital,opsz,wght@0,18..144,300..900;1,18..144,300..900&family=Oleo+Script:wght@400;700&family=Vollkorn:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
   
    <style>
        body{
            background-image: url(lake.jpg);
            background-repeat: no-repeat;
            background-size: cover;
        }
        form{
            position: absolute;
            margin-left: 620px;
            margin-top: 150px;
            border: 1px solid black;
            width:320px;
            height: 300px;
            border-radius: 10px; 
            border:1px solid purple;
        }
        h1{
            font-size:20px;
            color:purple;
            font-family: 'merriweather';
        }
        .content{
            margin-left: 60px;
            margin-top: 70px;
            font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-size: 16px;
        }
        a{
            color:black;
            text-decoration: none;
            position: absolute;
            margin-left: 80px;
            font-family: 'laila',sans serif;
        }
        a:hover{
         color:blue
        }
        .left-content{
            position: absolute;
            border-radius: 10px;
            height: 302px;
            width:320px;
            background-image: url(download.jpg);
            background-repeat: no-repeat;
            margin-top: 150px;
            margin-left:330px ;
            z-index: 1;
           
        }
        .first{
            position: absolute;
            color: white;
            margin-top: 140px;
            margin-left: 60px;
            font-family: 'laila',serif
            
        }
        .second{
            font-family:'merriweather', sans serif ;
            position: absolute;
            color: white;
            margin-top: 180px;
            margin-left: 80px;
            font-size: 12px;
           
        }
        .field{
            width:200px;
            height:22px;
        }
        .buttona{
            background-color: pink;
            border-color: antiquewhite;
            height:25px;
            font-family: 'laila';
        }

    </style>
</head>
<body>
    <div class="left-content">
      <p class="first">Welcome back to bonnie's travel</p>
      <p class="second">Let us resume our adventure</p>
    </div>
    <form action="" method="post">
        <h1 style="margin-left:140px;margin-top:30px;position:absolute;">Login</h1>  
        <div class="content">
 <label>Username</label><br>
 <input type="text" name="username" class="field"><br><br>
 <label>Password</label><br>
 <input type="password" name="password" class="field"><br><br>
 <input type="checkbox"><label for="">I Agree to the terms and policies</label><br><br>
 <button name="submit" style="width:150px;position:absolute;margin-left:30px;background-color:pink;" class="buttona"  >LOGIN</button><br><br>
  </div>
        </form>
        <?php
        include 'connect.php';
if (isset($_POST['submit'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = $connection->query($sql);
    if ($result->num_rows > 0) {
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['password']=$password;
        header('location:home.php');
    }
    else{
        echo 'INVALID USERNAME/PASSWORD';
    }
}
      ?>
</body>
</html>