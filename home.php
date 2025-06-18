<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      body{
        background-image: url(tower.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
      }
      ul{
        text-align: center;
        margin-right: 20px;
      }
      li{
        display:inline-block;
        margin-left: 30px;
      }
      a{
        color: white;
        text-decoration: none;
      }
      h1{
       color: white;
       font-family: 'merriweather',sans-serif;
       text-align: center;
       margin-top: 150px;
      }
      p{
    
        color: white;
        text-align: center;
        font-family: 'laila',sans serif;
        margin-top: 50px;
      }
      .back{
  
        font-family: 'laila';
       margin-left: 950px;
         position: absolute;
         margin-top: 250px;
         
      }
      .records{
        font-family: 'laila';
         margin-left: 1020px;
         position: absolute;
         margin-top: 250px;
      }

    </style>
</head>
<body>
  <ul>
    <li><a href="home.php">Home</a></li>
    <li><a href="">About</a></li>
    <li><a href="">Contact</a></li>
  </ul>
  <h1>Welcome to Bonnie's travels </h1>
  <p>Get started today and plan your future</p>
  <a href="signup.html" class="back">Logout</a>
  <a href="database.php" class="records">View record from database</a>
</body>
</html>