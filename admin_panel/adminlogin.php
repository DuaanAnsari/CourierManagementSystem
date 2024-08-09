
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Duaan</title>
    <link rel="stylesheet" href="adminlogin.css"/>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
  </head>
  <body>
 <a href="home.php"><img id="img1" src="delivery-service-logo-for-courier-company-vector-removebg-preview.png"></a>
  <div id="done">
    <div class="container" id="container">
      <div class="form-container sign-up-container">
        <form method="post">
          <h1>Become Admin</h1>
         
        
          <input type="text" name="name" placeholder="Name"/>
          <input type="text" name="reff" placeholder="Referral Code"/>
          <input type="email" name="email" placeholder="Email"/>
          <input type="password" name="pass" placeholder="Password"/>
          <input type="password" name="cpass" placeholder="Confirm Password"/>
          <button name="new" id="cr">Create</button>
        </form>
        </div>
<!-- php code for creating account -->
 <?php
$connection =mysqli_connect("localhost" , "root" , "", "semester_project_duaan");
if(isset($_POST['new'])){
    $name = $_POST['name'];
    $reff = $_POST['reff'];
    $email = $_POST['email'];
    $password = $_POST['pass'];
    $cpassword = $_POST['cpass'];
    if($name!="" && $reff=="74185" && $email!="" && $password!="" && $cpassword!="" && $password==$cpassword){
        $sql ="insert into admin (name,email,password)
        values('$name','$email','$password')";
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
          <h1 id="wel">Welcome <br> Admin</h1>
          
       
          <input type="email" name="email1" placeholder="Email">
          <input type="password"  name="pass1" placeholder="Password">
          <a href="#">Forgot your password?</a>
          <button name="old">Sign In</button>
        </form>
        </div>
        
        <!-- php code for signing up -->
       <?php
$connection1 = mysqli_connect("localhost" , "root" , "", "semester_project_duaan");
if(isset($_POST['old'])){
    $email1 = $_POST['email1'];
    $password1 = $_POST['pass1'];
    $sql1="select email,password from admin where email='$email1' and password='$password1'";
    $result = mysqli_query($connection1,$sql1);
    $num=mysqli_num_rows($result);
    if($num==1 && $email1!="" && $password1!=""){
        header('location:dashboard.php');
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
            <button class="ghost" id="signUp">Become Admin</button>
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
