<?php
 include('includes/connection.php');
 if(isset($_POST['update'])){
    $query = "update tasks set status = '$_POST[status]' where tid = $_GET[id]";
        $query_run = mysqli_query($connection,$query);
        if($query_run){
            echo"<script type='text/javascript'>
            alert('Status updated successfully...');
            window.location.href = 'user_dashboard.php';
            </script>
            ";
        }
        else{
            echo"<script type='text/javascript'>
            alert('Error...Please try again.');
            window.location.href = 'user_dashboard.php';
            </script>
            ";
        }

        

 }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update Status</title>
    <script src="includes/jquery-3.7.1.min"></script>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
    <div class="row" id="header">
        <div class="col-md-12">
            <h3><i class="fa fa-solid fa-list" style="padding-right: 15px;"></i>Task Management System</h3>

        </div>
    </div>
<div class="row">
    <div class="col-md-4 m-auto" style="color:white;"><br>
        <h3 style="color: white;">Update The Task</h3><br>
        <?php
            $query = "select * from tasks where tid = $_GET[id];"
            $query_run = mysqli_query($connection,$query);
            while($row = mysqli_fetch_assoc($query_run)){
                ?>
            
        <form action="" method="post">
            <div class="form-group">
                <input type="hidden" name="id" class="form-control" value=
                "" required>
</div>
<div class="form-group">
    <select class="form-control" name="status">
        <option>-Select-</option>
        <option>In-Progres</option>
        <option>Complete</option>
      </select>

                 
               
</div>
 
                </div>
                <input type="submit" class="btn btn-warning" name="update
                "value="Update">
</div>

        </form>
        <?php
        }
    ?>
    </div>

</div>
</body>
</html>