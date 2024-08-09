<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="trackparcel.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>

    <title>Document</title>
</head>
<body>
  <?php
  include('header.php');
  ?>
  <br><br><br><br>
 
  <br><br>
  <div id="body">
    
    <div class="container" id="container">
    <form method="post">
    <div class="row text-center">
        <div class="col-11">
      <input type="text" placeholder="Insert tracking Id here" name="id" class="form-control">
      </div>  
      <div class="col">
      <button class="btn btn-primary" name="reg"><i class="bi bi-search"></i></button>
      </div>
</div>
</form>
<br><br><br><br>
<?php
$con = mysqli_connect('localhost' , 'root' , '' , 'track');
if(isset($_POST['reg'])){
  $id = $_POST['id'];
  $sql = "SELECT product.Status , product.product , c_detail.d_date  FROM product , c_detail WHERE product.orderId = $id";
  $result = mysqli_query($con , $sql);
  if(($result)){
    $data = mysqli_fetch_array($result);
    $stat = $data['Status'];
    $pro = $data['product'];
    $date = $data['d_date'];

  
  if($stat == 'Pending'){
     echo"
     <style>
     #progress::before{
      content:'';
      position: absolute;
      top: 20px;
      width: 0%;
      margin-left: 35px;
      height: 10px;
      background: var(--line);
      z-index: 111;
      }
     </style>
     ";
  }
  elseif($stat == 'Enroute'){
    echo"
    <style>
    #progress::before{
     content:'';
     position: absolute;
     top: 20px;
     width: 40%;
     margin-left: 35px;
     height: 10px;
     background: var(--line);
     z-index: 111;
 }
    </style>
    ";
  }
  elseif($stat == 'Delivered'){
    echo"
    <style>
    #progress::before{
     content:'';
     position: absolute;
     top: 20px;
     width: 80%;
     margin-left: 35px;
     height: 10px;
     background: var(--line);
     z-index: 111;
 }
    </style>
    ";
  }

?>
        <div class="details">
            <div class="order">
               <h1>Parcel Id <span><?php echo $id;?></span></h1> 
            </div>
            <div class="date">
                <p>Expected Arrival: <b><?php echo $date;?></b></p>
                <p>Product Name: <b><?php echo $pro;?></b></p>
            </div>
        </div>
        <div class="track">
            <ul  id="progress" class="text-center">
            
              <li class="active" id="progress0"></li>
              <li class="" id="progress1"></li>
              <li class=""></li>
            </ul>
        </div>
        <div class="lists ">
           
             <div class="list mar">
                <img src="upload images/process.png" alt="">
                <h4>In Branch</h4>
             </div>  
              <div class="list mar1">
                <img src="upload images/enroute.png" alt="">
                <h4>Enroute</h4>
             </div>  
              <div class="list mar2">
                <img src="upload images/delivered.png" alt="">
                <h4>Delivered</h4>
             </div>
        </div>
    
        <?php
}}?>  </div>

  </div>
 
<br><br><br><br>
  <?php
  include('footer.php');
  ?>
  
</body>
</html>