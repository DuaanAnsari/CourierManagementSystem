



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Site</title>
  <link rel="stylesheet" href="length.css">
      <!-- Favicon -->
      <link href="img/favicon.ico" rel="icon">

<!-- Google Web Fonts -->
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
<style>
    body{
            background: linear-gradient(to right, rgb(225, 170, 68), rgb(236, 212, 168));
        }
    #bor1{
        border: 1px solid rgb(202, 202, 202);
        border-radius: 10px;
        padding: 5px;
    }
    thead {
            border-collapse: collapse;
            width: 100%;
          
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        th, td {
            padding: 12px 15px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #007bff;
            color: #fff;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #tr:hover {
            background-color: #ddd;
        }

        .button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 5px;
            transition-duration: 0.4s;
        }
        .button:hover {
            background-color: #fff;
            color: #007bff;
            border: 1px solid #007bff;
        } 

        .button1 {
            background-color: red;
            color: white;
            border: none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 5px;
            transition-duration: 0.4s;
        }
        .button1:hover {
            background-color: white;
            color: red;
            border: 1px solid red;
        } 
       
</style>
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
                    <a href="dashboard.php" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <a href="approval.php" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Approvals</a>
                    <a href="newcourier.php" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Add Courier</a>
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
<br><br>
<div id="length">
            <div class="row text-center mb-3">
    <div class="col ">
        <div class="rounded-lg bg-light" id="bor1">
          <h5>
            <a href="" class="text-decoration-none text-reset">Active Agents</a>
          </h5>
          <h2>3</h2>
        </div>
    </div>
    <div class="col">
        <div class="rounded-lg bg-light" id="bor1">
        <h5>
            <a href="approval.php" class="text-decoration-none text-reset">Pending Approvals</a>
          </h5>
          <h2>0</h2>
        </div>
    </div>
    <div class="col">
        <div class="rounded-lg bg-light" id="bor1">
        <h5>
            <a href="" class="text-decoration-none text-reset">Register Customers</a>
          </h5>
          <h2>100</h2>
        </div>
    </div>
</div>
<div class="row text-center mb-3">
<div class="col">
        <div class="rounded-lg bg-light" id="bor1">
        <h4>
            <a href="" class="text-decoration-none text-reset">Messages</a>
          </h4>
          <h2>2</h2>
        </div>
    </div>
</div>
<div class="row text-center">
    <div class="col">
        <div class="rouded-lg bg-light" id="bor1">
        <h4>
            <a href="pending.php" class="text-decoration-none text-reset">Pending Deliveries</a>
          </h4>
          <h2>54</h2>
        </div>
    </div>
    <div class="col">
        <div class="rouded-lg bg-light" id="bor1">
        <h4>
            <a href="deliver.php" class="text-decoration-none text-reset">Delivered Parcels</a>
          </h4>
          <h2>50</h2>
        </div>
    </div>
</div>

<br><br>

  
   
<table class="table text-center">
        <thead>
    <tr class="bg-primary">
    <th>Sender Name</th>
    <th>Sender Contact</th>
    <th>Reciever Name</th>
    <th>Delivery Address</th> 
    <th>Product/Tracking Id </th>  
    <th>Product Name </th>  
    <th>Product Price </th>  
    <th>Vehicle No </th>  
    <th>Product Category </th>  
    <th>Status</th>
    <th>Update</th> 
    <th>Delete</th> 
        
        </tr>
</thead>
<tbody class="text-center">
    <?php
    $con = mysqli_connect("localhost" , "root" , "" , "track");
    $sql = "select sender_detail.name , sender_detail.contact , c_detail.c_name , c_detail.c_city ,product.orderId, product.product, product.amount, product.vehicleNo, product.category , product.Status
     from sender_detail,c_detail,product
     
     where c_detail.order_no=product.orderId and sender_detail.id=product.orderId";
    $result =mysqli_query($con,$sql);
    if(mysqli_num_rows($result))
    {
    while($data=mysqli_fetch_array($result))
    {
      ?>
    <tr id="tr"> 
    <td> <?php  echo $data['name']?> </td>
    <td> <?php  echo $data['contact']?> </td>      
    <td> <?php  echo $data['c_name']?> </td> 
    <td> <?php  echo $data['c_city']?> </td> 
    <td> <?php  echo $data['orderId']?> </td> 
    <td> <?php  echo $data['product']?></td> 
    <td><?php  echo $data['amount']?> </td> 
    <td><?php  echo $data['vehicleNo']?> </td> 
    <td><?php  echo $data['category']?> </td> 
    <td class="status fw-bolder"> <a href="agentstat.php?id=<?php echo $data['orderId'];?>" class="text-reset text-decoration-none"><?php  echo $data['Status']?></a></td>
    <td> <a href="updatecourier.php?id=<?php echo $data['orderId'];?>" class="button">Update </a></td>
    <td><a href="delete.php?id=<?php echo $data['orderId'];?>" class="button1">Delete</a></td>


    
</tr>
<?php 
    }}
?>
</tbody>
</div>
</div>
<script>
        document.addEventListener('DOMContentLoaded', function() {
            var statusElements = document.querySelectorAll('.status');

            statusElements.forEach(function(element) {
                var status = element.textContent.trim();

                if (status === 'Delivered') {
                    element.style.color = 'rgb(24, 185, 24)';
                } else if (status === 'Pending') {
                    element.style.color = 'red';
                }
                else if (status === 'Enroute') {
                    element.style.color = 'blue';
                }
            });
        });
    </script>
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