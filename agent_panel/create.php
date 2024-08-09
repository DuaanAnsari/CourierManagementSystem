<?php
$connection = mysqli_connect('localhost' , 'root' , '' , 'admin_approval');
if(isset($_POST['reg'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['pass'];
    $cpassword = $_POST['cpass'];
    // $select = "select email from registration where email='$email'";
    //$check_row= mysqli_query($connection,$select);
    if($password == $cpassword){
    //if(mysqli_num_rows($check_row)>0){
       // echo"<script> alert('Email already exist type another email');</script>";
   // }
   // else{
        $insert="insert into registration(username,email,password)
        values('$name' , '$email' , '$password')";
        mysqli_query($connection,$insert);
        echo"<script>alert('Account Created Successsfully');</script>";
    //}
    }
   else{
           echo"
           <style>
           @keyframes jiggle {
            0% { transform: rotate(-2deg); }
            25% { transform: rotate(2deg); }
            50% { transform: rotate(-2deg); }
            75% { transform: rotate(2deg); }
            100% { transform: rotate(0deg); }
        }
        
        .jiggle-element {
            animation: jiggle 0.5s ;
            transform-origin: center;
            
        }
        #box{
            border : 3px solid red;
            border-radius : 5px;
            
           
        }
        #text{
        color:red;
        }
      
           </style>
           ";
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
        .mar{
       margin-right:-10%;
            margin-top:-10%;
        }
        #dis{
           display:none;
        }
        .row{
            width:100%;
        }
    </style>
    <meta charset="utf-8">
    <title>Agent Login</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

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
</head>

<body>
        <nav class="navbar navbar-expand-sm navbar-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"> <img src="delivery-service-logo-for-courier-company-vector-removebg-preview.png"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarID"
                    aria-controls="navbarID" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
            </div>
        </nav>
<div class="row">
<div class="col-xl-6">
       
    </div>
    <div class="col-sm-6">
  


        <!-- Sign In Start -->
        <div class="container-fluid mar">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="rounded my-4 mx-3 text-center jiggle-element mar">
                        <div class=" align-items-center text-center">
                            
                            <div class="text-center align-center justify-content-center">
                           
                                <h2 class="mx-auto">Welcome Agent</h2>
                                <br>
                           
                        </div>
                        </div>
                        <form method="post">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="name" placeholder="name@example.com" >
                            <label for="floatingInput">Name</label>
                        </div>
                        <div class="form-floating mb-3" >
                            <input type="number" class="form-control" name="cnic" placeholder="name@example.com" >
                            <label for="floatingInput">CNIC Number</label>
                        </div>
                        <div class="form-floating mb-3" >
                            <input type="email" class="form-control" name="email" placeholder="name@example.com" >
                            <label for="floatingInput">Email address</label>
                        </div>
                        <div class="form-floating mb-3" >
                            <input type="password" class="form-control" name="pass" placeholder="Password" id="box">
                            <label for="floatingPassword" id="text">Password</label>
                        </div>
                        <div class="form-floating mb-3" >
                            <input type="password" class="form-control" name="cpass" placeholder="Password" id="box">
                            <label for="floatingPassword" id="text">Confirm Password</label>
                        </div>
                        <div>

                        </div>
                    
                        <button type="submit" class="btn btn-primary py-3 w-100 mb-4" name="reg">Create Account</button>
                        <div class="mb-3">
                            Already have an account <a href="agentlogin.php">Sign In</a>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-4" id="dis">
                         ThankYou For willing to be an Agent Your approval is on pending you will be notified shortly.
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign In End -->
    </div>
    </div>




</body>

</html>