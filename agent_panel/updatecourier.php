<?php
  $con = mysqli_connect("localhost" , "root" , "" , "track");


    $id = $_GET['id'];
    $sql = "SELECT sender_detail.name AS s_name, sender_detail.contact AS s_contact, 
    c_detail.c_name AS r_name, c_detail.c_city AS r_city, c_detail.b_date AS b_date , c_detail.d_date AS d_date,
    product.product AS p_name, product.amount AS p_amount, product.Status,
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
           $stat = $data['Status'];
       } 
  

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
        #image{
    margin-left: 20px;
}
           body{
        background: linear-gradient(to right, rgb(225, 170, 68), rgb(236, 212, 168));
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
        .mar{
       
       padding: 30px;
           border-radius: 10px;
       margin-left: 200px;
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
  <title>Bootstrap Site</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>
<body>

        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar ">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                <img src="delivery-service-logo-for-courier-company-vector-removebg-preview.png">
                </a>
         
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                    <a href="#"><img src="dp.png" width="50px"></a>
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Duaan</h6>
                        <span>Agent</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="agentpanel.php" class="nav-item nav-link "><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <a href="newcourier.php" class="nav-item nav-link "><i class="fa fa-th me-2"></i>A New Parcel</a>
                    <a href="updatecourier1.php" class="nav-item nav-link active"><i class="bi bi-arrow-up-circle-fill me-2"></i>Update Parcel</a>
                    <a href="contact.php" class="nav-item nav-link"><i class="bi bi-question-octagon me-2"></i>Contact Admin</a>
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
        </div>
        <!-- Sidebar End -->
      
<div id="length">

        <div class="container my-5">
        <div class="row justify-content-center">
         
            <div class=" mar">
                <h1 class="card-title text-center mb-4">Update Courier</h1>
<form method="post">
<div id="center">    
<div class="row">
<div class="col">
<h5 class="">Tracking Id</h5>
    <h5 class="text-center border rounded-lg"><?php echo $PID; ?></h5>
    </div>
    <div class="col">
        <h5>Status</h5>
    <select name="status">
  <option value="Pending">Pending</option>
  <option value="Delivered">Delivered</option>
  <option value="Enroute">Enroute</option>
</select>

    </div>
    </div>
    <div class="row">
    <div class="mb-3 col">
        <label class="form-label">Sender Name</label>
        <input type="text" class="form-control" name="sname" value="<?php echo $sender_name; ?>">
    </div>
    <div class="mb-3 col">
        <label class="form-label">Sender Contact Details</label>
        <input type="number" class="form-control" name="scon" value="<?php echo $sender_contact; ?>">
    </div>
</div>
    <div class="row">
    <div class="mb-3 col">
        <label class="form-label">Parcel Details</label>
        <input type="text" class="form-control" name="pro" value="<?php echo $parcel_product; ?>">
    </div>
    <div class="mb-3 col">
        <label class="form-label">Estimated Worth of Parcel</label>
        <input type="number" class="form-control" name="price" value="<?php echo $parcel_amount; ?>">
    </div>
</div>
    <div class="row">
    <div class="mb-3 col">
        <label class="form-label">Parcel Type</label>
        <input type="text" class="form-control" name="cat" value="<?php echo $parcel_category; ?>">
    </div>
    <div class="mb-3 col">
        <label class="form-label">Reciever Name</label>
        <input type="text" class="form-control" name="name" value="<?php echo $reciver_name; ?>">
    </div>
</div>
    <div class="row">
    <div class="mb-3 col">
        <label class="form-label">Delivery Location</label>
        <input type="text" class="form-control" name="city" value="<?php echo $reciver_city; ?>">
    </div>
    <div class="mb-3 col">
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