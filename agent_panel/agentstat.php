<?php
 $con = mysqli_connect("localhost" , "root" , "" , "track");

if(isset($_GET['id'])){
    $id = $_GET['id'];
    if(isset($_POST['stat'])){
    $status = $_POST['status'];
    $update = "update product set status='$status' where orderId=$id";
    mysqli_query($con,$update);
   

    
   
    
    // Redirect back to the main page after deletion
    header('Location: agentpanel.php');
    echo"<script>alert('List Deleted');</script>";
    exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Site</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
    <form method="post">
    <input type="text" name="status" placeholder="Pending or Enroute or Delivered">
    
    <br>
    <button name="stat" class="btn btn-primary">Go</button>


</form>
</div>
</body>
</html>