
<!DOCTYPE html>
<html lang="en">
  <head>
    <style>
      .for{
       transform: scale();
      }
    </style>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Duaan</title>
    <link rel="stylesheet" href="signin.css"/>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
  </head>
  <body>
 <a href="home.php"><img id="img1" src="delivery-service-logo-for-courier-company-vector-removebg-preview.png"></a>
 <div class="for">
  <div id="done">
    <div class="container" id="container">
      <div class="form-container sign-up-container">
        <form method="post">
          <h1>Create Account</h1>
          <div class="social-container">
            <a href="#" class="social"><i class="bi bi-facebook"></i></a>
            <a href="#" class="social"><i class="bi bi-google"></i></a>
            <a href="#" class="social"><i class="bi bi-linkedin"></i></a>
          </div>
          <span>or use your email for registration</span>
          <input type="text" name="name" placeholder="Name" />
          <input type="email" name="email" placeholder="Email" />
          <input type="password" name="pass" placeholder="Password" />
          <input type="password" name="cpass" placeholder="Confirm Password" />
          <button name="new">Create</button>
        </form>
        </div>
<!-- php code for creating account -->
<?php
$connection =mysqli_connect("localhost" , "root" , "", "registration");
if(isset($_POST['new'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['pass'];
    $cpassword = $_POST['cpass'];
    if($name!="" && $email!="" && $password!="" && $cpassword!="" && $password==$cpassword){
        $sql ="insert into signup (username,email,password,dt)
        values('$name','$email','$password',CURRENT_TIMESTAMP())";
        mysqli_query($connection,$sql);
        echo"<script> alert('account created');</script>";
    
    }
    else
    {
        echo"<script> alert('type valid values');</script>";
   }
}
?>
      
      <div class="form-container sign-in-container">
        <form method="post">
          <h1>Sign in</h1>
          <div class="social-container">
            <a href="#" class="social"><i class="bi bi-facebook"></i></a>
            <a href="#" class="social"><i class="bi bi-google"></i></a>
            <a href="#" class="social"><i class="bi bi-linkedin"></i></a>
          </div>
          <span>or use your account</span>
          <input type="email" name="email1" placeholder="Email">
          <input type="password"  name="pass1" placeholder="Password">
          <a href="#">Forgot your password?</a>
          <button name="old">Sign In</button>
        </form>
        </div>
        
        <!-- php code for signing up -->
        <?php
$connection1 =mysqli_connect("localhost" , "root" , "", "registration");
if(isset($_POST['old'])){
    $email1 = $_POST['email1'];
    $password1 = $_POST['pass1'];
    $sql1="select email,password from signup where email='$email1' and password='$password1'";
    $result = mysqli_query($connection1,$sql1);
    $num=mysqli_num_rows($result);
    if($num==1 && $email1!="" && $password1!=""){
        echo"<script>alert('login Successfully');</script>";
        header('location:trackparcel.php');
    }
    else{
    echo"<script>alert('Login denied');</script>";
}
}
?>
      
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
            <button class="ghost" id="signUp">Create Account</button>
          </div>
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
