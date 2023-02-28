<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Kothur || Admin Login</title>

    <!-- BootStrap CSS Link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <style>
      @import "https://use.fontawesome.com/releases/v5.5.0/css/all.css";
      body{
        margin: 0;
        padding: 0;
        font-family: sans-serif;
        background-image: url(img/adminbg.jpg);
        background-size: cover;
      }
      .login-box{
        width: 280px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        color: white;
      }
      .login-box h1{
        float: left;
        font-size: 40px;
        border-bottom: 6px solid #4caf50;
        margin-bottom: 50px;
        padding: 13px 0;
      }
      .textbox{
        width: 100%;
        overflow: hidden;
        font-size: 20px;
        padding: 8px 0;
        margin: 8px 0;
        border-bottom: 1px solid #4caf50;
      }
      .textbox i{
        width: 26px;
        float: left;
        text-align: center;
      }
      .textbox input{
        border: none;
        outline: none;
        background: none;
        color: white;
        font-size: 18px;
        width: 80%;
        float: left;
        margin: 0 10px;
      }
      .btn{
        width: 100%;
        background: none;
        border: 2px solid #4caf50;
        color: white;
        padding: 5px;
        font-size: 18px;
        cursor: pointer;
        margin: 12px 0;
      }
      .btn:hover {
        background-color: #79e71f;
        border: 5px solid #73fc03;
      }


    </style>
  </head>
  <body>
<div class="login-box">
  <h1>Admin Login</h1>
  <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post" autocomplete="off">
    <div class="textbox">
      <i class="fas fa-user"></i>
      <input type="text" name="user" placeholder="Username" required="">
    </div>

    <div class="textbox">
      <i class="fas fa-lock"></i>
      <input type="password" name="pass" placeholder="Password" required="">
    </div>

    <input type="submit" class="btn" value="Sign in">
    
  </form>
</div>
<?php 

    include "db.php";
    $username = $_POST['user'];  
    $password = $_POST['pass'];
    
    if (isset($username) && isset($password)) {
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($conn, $username);  
        $password = mysqli_real_escape_string($conn, $password);  
        
        $sql = "select * from Login where uname = '$username' and pass = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
        
        if($count == 1){  
            echo "<script> location.href='../admin/home.php'; </script>";
        }  
        else{  
            echo "<script>alert('Invalid Login! Check UserName and Password')</script> ";
        } 
    }
?>  


</body>
</html>