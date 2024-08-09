<!-- Sign in code -->
<?php
$connection = mysqli_connect('localhost' , 'root' , '' , 'admin_approval');
if(isset($_POST['old'])){
    $email = $_POST['email1'];
    $password = $_POST['pass1'];
    $check_status ="select email,status from registration where email ='$email'";
    $result=mysqli_query($connection,$check_status);
    $data = mysqli_fetch_array($result);
    $status = $data['status'];
    $select="select email , password , status from registration where email='$email' and password='$password' and status='$status'";
    $result1 = mysqli_query($connection,$select);
    if(mysqli_num_rows($result1) > 0 && $status == 'Approved'){
        header('location:agentpanel.php');
    }
    elseif(mysqli_num_rows($result1) > 0 && $status == 'Pending'){
        echo"<script>alert('Account approval on pending');</script>";
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
            border : 2px solid red;
            border-radius : 5px;
            
           
        }
        
           </style>
           ";
       }
    }
    ?>


<!-- create account code -->
<?php
$connection = mysqli_connect('localhost' , 'root' , '' , 'admin_approval');
if(isset($_POST['new'])){
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
            border : 2px solid red;
            border-radius : 5px;
            
           
        }
        
      
           </style>
           ";
       }
    }
    ?>
        



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Agent Login</title>
    <link rel="stylesheet" href="agentlogin.css"/>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
  </head>
  <body>
 <a href="home.php"><img id="img1" src="delivery-service-logo-for-courier-company-vector-removebg-preview.png"></a>
  <div id="done">
    <div class="container jiggle-element" id="container">
      <div class="form-container sign-up-container ">
        <form method="post">
          <h1>Become Agent</h1>
         
        
          <input type="text" name="name" placeholder="Name" />
          <input type="email" name="email" placeholder="Email" />
          <input type="password" name="pass" placeholder="Password" id="box"/>
          <input type="password" name="cpass" placeholder="Confirm Password" id="box"/>
          <button name="new" id="cr">Create</button>
        </form>
        </div>

       
      <div class="form-container sign-in-container ">
        <form method="post">
          <h1 id="wel">Welcome <br> Agent</h1>
          
       
          <input type="email" name="email1" placeholder="Email" id="box">
          <input type="password"  name="pass1" placeholder="Password" id="box">
          <a href="#">Forgot your password?</a>
          <button name="old">Sign In</button>
        </form>
        </div>
        

      
      <div class="overlay-container">
        <div class="overlay">
          <div class="overlay-panel overlay-left">
            <h1>Already Have an Account!</h1>
            <p>
              To keep connected with us please login with your personal info
            </p>
            <button class="ghost" id="signIn">Login</button>
          </div>
          <div class="overlay-panel overlay-right">
            <h1>Don't Have an Account?</h1>
            <p>Enter your details and start journey with us</p>
            <button class="ghost" id="signUp">Become Agent</button>
          </div>
        </div>
      </div>
    </div>
</div>

    
    <script>
        const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});
    </script> 
  </body>
</html>
