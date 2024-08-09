<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="contactus.css">
<?php
$con = mysqli_connect('localhost' , 'root' , '' , 'track');
if(isset($_POST['button'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $msg = $_POST['message'];
    $sql = "INSERT INTO contact(name , email , msg)
    VALUES ('$name' , '$email' , '$msg')";
    $result = mysqli_query($con , $sql);
    if($result){
        echo"<script>alert('Message Added')</script>";
    
    }
    else{
        echo"<script>alert(' :/ Error Found please try again later')</script>";
       
    }
    
}
?>
</head>
<body>

<?php
include('header.php');
?>

  <div id="body">
    <div class="container">
        <h1>Contact Us</h1>
        <p>Have a question or feedback? Reach out to us!</p>
        <form method="post">
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Your Email" required>
            <textarea name="message" placeholder="Your Message" rows="6" required></textarea>
            <button type="submit" class="submit-button" name="button">Send Message</button>
        </form>
    </div>
  </div>
  <?php
     include('footer.php');
  exit();

  
  ?>

</body>
</html>
