<?php
  $con = mysqli_connect("localhost" , "root" , "" , "track");


  if(isset($_POST['update'])){
    $name = $_POST['sname'];
    $contact = $_POST['scon'];
    $product = $_POST['pro'];
    $amount = $_POST['price'];
    $vno = $_POST['v_no'];
    $category = $_POST['cat'];
    $r_name = $_POST['name'];
    $city = $_POST['city'];
    $bdate = $_POST['bu_date'];
    $ddate = $_POST['de_date'];
    $status = $_POST['status'];

    $sql = "UPDATE sender_detail SET name = '$name' , contact = '$contact' WHERE id = '$id'";
    $sql1 = "UPDATE c_detail SET c_name = '$r_name' , c_city = '$city' , d_date = '$ddate' WHERE order_no = '$id'";
    $sql2 = "UPDATE product SET product = '$product' , amount = '$amount' , 
    vehicleNo = '$vno' , category = '$category' , Status = '$status' WHERE orderId = '$id'";
    $result = mysqli_query($con, $sql);
    $result1 = mysqli_query($con, $sql1);
    $result2 = mysqli_query($con, $sql2);

    if($result && $result1 && $result2){
        header('location:agentpanel.php');
    } else {
        echo "Error updating record:/ " . mysqli_error($con);
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <style>
         body{
            background: linear-gradient(to right, rgb(225, 170, 68), rgb(236, 212, 168));
        }
        #image{
    margin-left: 20px;
}
     
           #btn{
           color: white;
           background-color: blue;
        }
        #btn:hover{
           transition: 200ms;
           color: white;
           background-color: green;
        }
       
      
    </style>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="length.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
   <!-- Customized Bootstrap Stylesheet -->
   <link href="css/bootstrap.min.css" rel="stylesheet">

<!-- Template Stylesheet -->
<link href="css/style.css" rel="stylesheet">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
  <title>Bootstrap Site</title>


  



  </head>
<body>


<div class="container-xxl position-relative d-flex p-0">
       <!-- Sidebar Start -->
       <div class="sidebar pe-4 pb-3">
            <nav class="navbar navbar-light">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                <img src="delivery-service-logo-for-courier-company-vector-removebg-preview.png">
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="dp.png" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Duaan</h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="dashboard.php" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <a href="approval.php" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Approvals</a>
                    <a href="newcourier.php" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Add Courier</a>
                    <a href="update.php" class="nav-item nav-link active"><i class="fa fa-table me-2"></i>Update Courier</a>
                    <a href="msg.php" class="nav-item nav-link"><i class="fa fa-table me-2"></i>User Feedback</a>
                    <a href="agentmsg.php" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Agent Feedback</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Status</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="pending.php" class="dropdown-item">Pending Deliveries</a>
                            <a href="enroute.php" class="dropdown-item">Enroute</a>
                            <a href="deliver.php" class="dropdown-item">Delivered</a>
                           
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->
<div class="content">
        <!-- Navbar Start -->
        <nav class="navbar navbar-expand navbar-light sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0 text-decoration-none">
                    <i class="fa fa-bars"></i>
                </a>
               
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                       
                          
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                       
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            
                           
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="dp.png" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">Duaan</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="logout.php" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->
            

<div id="length">
<div class="container my-5">
        <div class="justify-content-center">
          <div class="">
            <div class="">
              <div class="card-body">
                <h1 class="card-title text-center mb-4">Update Courier</h1>
<form method="post">
<h5 class="text-center">Tracking Id</h5>    
<div class="row text-center">

    
    <div class="col-9">
    <input type="number" class="form-control" name="oid" placeholder="Insert Tracking Id" value="<?php echo $id; ?>">
    </div>
    <div class="col-3">
        <button type="submit" class="btn" name="search"><i class="bi bi-search"></i></button>
    </div>
   
    <?php
    if(isset($_POST['search'])){
    $id = $_POST['oid'];


    
    $sql = "SELECT sender_detail.name AS s_name, sender_detail.contact AS s_contact, 
    c_detail.c_name AS r_name, c_detail.c_city AS r_city, c_detail.b_date AS b_date , c_detail.d_date AS d_date,
    product.product AS p_name, product.amount AS p_amount, 
    product.vehicleNo AS p_vehicleNo, product.category AS p_category , product.orderId AS PID
FROM sender_detail
JOIN product ON sender_detail.id = product.orderId
JOIN c_detail ON c_detail.order_no = product.orderId
WHERE product.orderId = $id";
       $result = mysqli_query($con, $sql);
       if(($result)){
           $data = mysqli_fetch_array($result);
           $sender_name = $data['s_name'];
           $sender_contact = $data['s_contact'];
           $parcel_product = $data['p_name'];
           $reciver_name = $data['r_name'];
           $reciver_city = $data['r_city'];
           $parcel_amount = $data['p_amount'];
           $vehicleNo = $data['p_vehicleNo'];
           $parcel_category = $data['p_category'];
           $buy_date = $data['b_date'];
           $delivery_date = $data['d_date'];
           $PID = $data['PID'];
       } 
       ?>
    
  
    </div>
    <br>
 
    <div class="  text-center mb-2">
    <label class=""><h3>Showing results for tracking Id <?php echo $PID;?></h3></label>
    </div>
    <div class="mb-2">
        <h5>Status</h5>
    <select name="status">
  <option value="Pending">Pending</option>
  <option value="Delivered">Delivered</option>
  <option value="Enroute">Enroute</option>
</select>

    </div>
    <div class="row">
    <div class="col mb-3">
        <label class="form-label">Sender Name</label>
        <input type="text" class="form-control" name="sname" value="<?php echo $sender_name; ?>">
    </div>
    <div class="col mb-3">
        <label class="form-label">Sender Contact Details</label>
        <input type="number" class="form-control" name="scon" value="<?php echo $sender_contact; ?>">
    </div>
    </div>
    <div class="row">
    <div class="col mb-3">
        <label class="form-label">Parcel Details</label>
        <input type="text" class="form-control" name="pro" value="<?php echo $parcel_product; ?>">
    </div>
    <div class="col mb-3">
        <label class="form-label">Estimated Worth of Parcel</label>
        <input type="number" class="form-control" name="price" value="<?php echo $parcel_amount; ?>">
    </div>
    </div>
    <div class="row">
    <div class="col mb-3">
        <label class="form-label">Parcel Type</label>
        <input type="text" class="form-control" name="cat" value="<?php echo $parcel_category; ?>">
    </div>
    <div class="col mb-3">
        <label class="form-label">Reciever Name</label>
        <input type="text" class="form-control" name="name" value="<?php echo $reciver_name; ?>">
    </div>
    </div>
    <div class="row">
    <div class="col mb-3">
        <label class="form-label">Delivery Location</label>
        <input type="text" class="form-control" name="city" value="<?php echo $reciver_city; ?>">
    </div>
    <div class="col mb-3">
        <label class="form-label">Vehicle Number</label>
        <input type="text" class="form-control" name="v_no" value="<?php echo $vehicleNo; ?>">
    </div>
    </div>
    <div class="row">
    <div class="col">
        <label class="form-label">Recieved On</label>
        <input type="date" class="form-control" name="bu_date" value="<?php echo $buy_date; ?>" disabled>
    </div>
    <div class="col">
        <label class="form-label">Expected Delivery Date</label>
        <input type="date" class="form-control" name="de_date" value="<?php echo $delivery_date; ?>">
    </div>
    </div>
    <br>
    <div class="text-center">
    <button type="submit" class="btn" id="btn" name="update">Update</button>
    </div>
</form>
</div>
            </div>
          </div>
        </div>
      </div>
      <?php
        }
    ?>
    </div>
</div>
</div>
        

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

      
</body>
</html>