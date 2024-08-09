<?php
 $con = mysqli_connect("localhost" , "root" , "" , "track");

if(isset($_GET['id'])){
    $name = $_GET['id'];
    $sql = "DELETE FROM sender_detail WHERE id = '$name'";
    $sql1 = "DELETE FROM c_detail WHERE order_no = '$name'";
    $sql2 = "DELETE FROM product WHERE orderId = '$name'";

    mysqli_query($con, $sql);
    mysqli_query($con, $sql1);
    mysqli_query($con, $sql2);
    
    // Redirect back to the main page after deletion
    header('Location: agentpanel.php');
    echo"<script>alert('List Deleted');</script>";
    exit();
}
?>
