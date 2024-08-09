

<!DOCTYPE html>
<html lang="en">
<head>

<link rel="stylesheet" href="home.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Site</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>
<body>
<?php
include('header.php');
?>
   
 <br><br>
 
 <div class="row">
  <div class="col-8">  
      <p id="p">We Deliver your</p>
      <p id="p1">parcel with care.</p>
      <p id="p2">Navigate the Journey, Track the Moment: Your Packages, Your Control.</p>
    </div>
    <div class="col-4">
      <img src="12-removebg-preview.png" width="300px" id="tilt">
    </div>
   </div>
    
      <br>
     
      <button type="button" class="btn btn-lg rounded-lg buton" id="button" name="track">Track Your Parcel</button>
    
  
    <br><br>

     
      

     
      <br>
      <div class="text-center container">
         <h2 class="service">Services We Offer</h2>
         <div class="row">
          <div class="col-2">
            <img src="express.png" alt="" width="200px">
          </div>
          <div class="col-10 express">
          
         <p><strong><strong>Express Delivery:</strong></strong> Need urgent delivery? Our express service guarantees swift transit times, 
         ensuring your package arrives at its destination within the shortest possible timeframe. 
         With our extensive network and efficient logistics, we're committed to meeting your tightest deadlines.</p>
         </div>
         </div>
         <br><br><br>
         <div class="row">
          <div class="col-2">
            <img src="international.png" alt="" width="180px">
          </div>
          <div class="col-10 express">
          
         <p><strong><strong>International Shipping:</strong></strong> Going global? We specialize in seamless international shipping. Whether it's a crucial document or a precious package, trust us to navigate the complexities of international logistics, ensuring your shipment reaches any corner of the world with utmost care and efficiency.</p>
          </div>
         </div>
         <br><br><br>
         <div class="row">
          <div class="col-2">
            <img src="trace.png" alt="" width="180px">
          </div>
          <div class="col-10 express">
          
         <p><strong><strong>Track and Trace:</strong></strong> Stay in the loop with our advanced tracking system. Monitor your shipment's progress in real-time, from the moment it leaves your hands until it reaches its final destination. You'll have peace of mind knowing exactly where your package is at all times.</p>
          </div>
         </div>
         <br><br><br>
         <div class="row">
          <div class="col-2">
            <img src="secure.png" alt="" width="170px">
          </div>
          <div class="col-10 express">
          
         <p><strong><strong>Secure Packaging:</strong></strong> We understand the value of your shipments. That's why we offer expert packaging services to safeguard your items during transit. Our team uses high-quality materials and techniques to ensure your parcels arrive in the same pristine condition they left.</p>
          </div>
         </div>
         <br><br><br>
         <div class="row">
          <div class="col-2">
            <img src="bulk.png" alt="" width="180px">
          </div>
          <div class="col-10 express">
          
         <p><strong><strong>Bulk Shipping Solutions:</strong></strong> For businesses with high shipping volumes, we offer tailored bulk shipping solutions. Streamline your logistics with our efficient, cost-effective services designed to handle large quantities of shipments with precision and reliability.</p>
          </div>
         </div>
       
    </div>

    <br><br>
<br><br>

<?php
include('footer.php');
?>
</body>
</html>