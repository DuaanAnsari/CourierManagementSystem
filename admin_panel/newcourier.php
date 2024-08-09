

<?php
$connection = mysqli_connect("localhost" , "root" , "" , "track");

if(isset($_POST['sub'])){
  $sname = $_POST['s_name'];
  $scontact = $_POST['s_con'];
  $product = $_POST['pro'];
  $amount = $_POST['amount'];
  $vno = $_POST['v_no'];
  $category = $_POST['category'];
  $rname = $_POST['r_name'];
  
  $city = $_POST['city'];
  $bdate = $_POST['b_date'];
  $ddate = $_POST['d_date'];

  $sql_sender = "INSERT INTO sender_detail (name, contact) VALUES ('$sname', '$scontact')";
  $sql_product = "INSERT INTO product (product, amount, vehicleNo, category) VALUES ('$product', '$amount', '$vno', '$category')";
  $sql_c_detail = "INSERT INTO c_detail (c_name, c_city, b_date, d_date) VALUES ('$rname', '$city', '$bdate', '$ddate')";
    mysqli_query($connection, $sql_sender);
    mysqli_query($connection, $sql_product);
    mysqli_query($connection, $sql_c_detail);
    echo "<script>alert('Parcel Added');</script>";
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
        #arrow{
          padding-left: 40px;
        }
       
        .size{
          padding-left:293px;
        }
      .mar{
        background-color: #fff;
        padding: 30px;
            border-radius: 10px;
        margin-left: 200px;
      }
      .padding{
        padding-left: 50px;
        padding-right: 50px;

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
            <nav class="navbar  navbar-light">
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
                    <a href="newcourier.php" class="nav-item nav-link active"><i class="fa fa-keyboard me-2"></i>Add Courier</a>
                    <a href="update.php" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Update Courier</a>
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

    <div class=" my-5">
        <div class="justify-content-center">
         
            <div class="padding">
            
                <h1 class="card-title text-center mb-4">Add New Courier</h1>
                <form method="post">
                  <div class="row">
                  <div class="col mb-3">
                    <label class="form-label">Sender Name</label>
                    <input type="text" class="form-control"  name="s_name" >
                  </div>
                  <div class="col mb-3">
                    <label class="form-label">Sender Contact Details</label>
                    <input type="number" class="form-control"  name="s_con" >
                  </div>
                 </div>
                 <div class="row">
                  <div class="col mb-3">
                    <label  class="form-label">Parcel Detail</label>
                    <input type="text" class="form-control"  name="pro" >
                  </div>
                  
                  <div class="col mb-3">
                    <label  class="form-label">Estimated Worth of Parcel</label>
                    <input type="text" class="form-control"  name="amount" >
                  </div>
                  </div>
                  <div class="mb-3 justify-content-center text-center">
                    <label><h5>Parcel Type</h5></label><br>
                    <input type="text" name="category" class="form-control" placeholder="Fragile or Resilient">
                  </div>
                  <div class="row">
                  <div class="col mb-3">
                    <label class="form-label">Reciever Name</label>
                    <input type="text" class="form-control" name="r_name" >
                  </div>
                  <div class="col mb-3">
                    <label class="form-label">Reciever Contact Details</label>
                    <input type="number" class="form-control" >
                  </div>
                  </div>
                  <div class="row">
                  <div class="col mb-3">
                    <label class="form-label">Delivery Location</label>
                    <input type="text" class="form-control" name="city" >
                  </div>
                  <div class="col mb-3">
                    <label class="form-label">Vehicle Number</label>
                    <input type="number" class="form-control" name="v_no"  placeholder="1-25" min="1" max="25">
                  </div>
                  </div>
                  <div class="row">
                  <div class="col">
                    <label class="form-label">Recieved On</label><br>
                    <input type="date" class="form-control" name="b_date" id="date" value="" min="2023-01-01" max="2030-12-31">
                  </div>
                  <div class="col">
                    <label class="form-label">Expected Delivery Date</label>
                    <input type="date" class="form-control" name="d_date" >
                  </div>
                </div>
                <br>
                 
                  <div class="text-center">
                    <button type="submit" class="btn form-control rounded-lg" id="btn" name="sub">Submit</button>
                  </div>
            
                </form>
              </div>
            </div>
          </div>
</div>
</div>

</div>
   
      <script>
        document.getElementById('date').valueAsDate = new Date();
      </script>
     

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