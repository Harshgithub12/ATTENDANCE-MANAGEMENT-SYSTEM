<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Admin Registration</title>
  <style>
  body {
      background-image: url('../image/scene.png');
      background-repeat: no-repeat;
      background-size: cover;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      flex-direction: column;
      background:#00FFFF;
      font-size: 30px;
  }

    .form {
      margin-left: 130px;
    }

    .main-content-header {
      text-align: center;
    }
  </style>
</style>
</head>
<body>
  <h2>Admin Registration Form</h2>
<div class="main-content-header">
  <form action="" method="POST">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required><br><br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required><br><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br><br>

    <input type="submit" name="Register" value="Register">
  </form>
</div>
</body>
</html>
<?php
if(isset($_POST['Register']))
{ 
    include('dbcon.php');
    $username=$_POST['username'];
    $password=$_POST['password'];
    $con=mysqli_connect('localhost','root','','sms');
    if($con)
    {
    $sql = "INSERT INTO `admin`(`username`, `password`) VALUES ('$username', '$password')";
    $run=mysqli_query($con,$sql);
    if($run)
    {
        ?>
        <script>
        alert('ADMIN DETAILS ADDED');
        window.open('../login.php', '_self');
        </script>
        <?php
        
    }
    else
    {
        ?>
        <script>
                alert('ERROR');
                window.open('../admin/register.php', '_self');
        </script>
        <?php
    }
}
    else
    {
        ?>
        <script>
        alert('connection error');
        window.open('../login.php', '_self');
        </script>
        <?php
    }
    
}
?>
    


