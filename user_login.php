<?php
    session_start();
    includes('includes/connection.php');
    if(isset($_POST['userLogin'])){
       $query = "select email,password,name,uid from users where email = '$_POST[email]'
        AND password= '$POST[password]'";
        $query_run = mysqli_query($connection,$query);
        if(mysqli_num_rows($query_run)){
            while($row = mysqli_fetch_assoc($query_run)){
                $_SESSION['email'] = $row['email'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['uid'] = $row['uid'];
            }
            echo"<script type='text/javascript'>
            window.location.href = 'user_dashboard.php';
            </script>
            ";

        }
        else{
            echo"<script type='text/javascript'>
            alert('Please enter correct details.');
            window.location.href = 'user_login.php';
            </script>
            ";

        }
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale">
        <title>ETMS | Login Page</title>
        
        <script src="includes/jquery-3.7.1.min"></script>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
   <div class="row">
    <div class="col-md-3 m-auto" id="login_home_page">
        <center><h3 style=" background-color: #5A8F7B;">User Login</h3></center>
        <form action= "" method="post">
            <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="
                Enter Email" required>
         </div>
         <div class="form-group">
                <input type="Password" name="password" class="form-control" placeholder="
                Enter Password" required>
         </div>
         <div class="form-group">
            <input type="submit" name="userLogin" value="Login" class="btn btn-warning">
        
         </div>
     </form>
    <center> <a href="index.php" class="btn btn-danger">Go to Home</a></center>
 </div>
</div>
</body>
</html>