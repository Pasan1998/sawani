<?php
session_start();
error_reporting(0);

include('includes/dbconnection.php');
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Memory Click</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick-theme.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <link href="https://fonts.googleapis.com/css?family=Dosis:500|Raleway:400,600,700&display=swap" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet" />
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body class="sub_page"> 
  <div class="hero_area">

    <div class="main slick_main">
    </div>
    <!-- header section strats -->
    <?php include_once('includes/header.php');?>
  </div>


  <!-- contact section -->
  <section class="contact_section layout_padding">
    <div class="container ">
    <div class="heading_container">
    <?php
$ret=mysqli_query($con,"select * from tblcontactus");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {
?>
  
        <h2 class="">
          Contact Memory Clicks
        </h2>
      </div>
      <p style="color:Black">Email: <?php  echo $row['ConEmail'];?></p>
      <p style="color:Black">Contact No: <?php  echo $row['ConMobNo'];?></p>
      <p style="color:Black"><?php  echo $row['ConAddress'];?></p>
      <h6 style="color:Black"><b><?php  echo $row['ConDes'];?></b></h6>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <form action="feedback.php" method="post">
            <div>
              <input type="text" placeholder="Name" name="name" required/>
            </div>
            <div>
              <input type="email" placeholder="Email" name="email" required/>
            </div>
            <div>
              <input type="text" placeholder="Phone Number" name="mobno" required/>
            </div>
            <div>
              <input type="text" class="message-box" placeholder="Message" name="message" required/>
            </div>
            <div class="d-flex ">
              <button type="submit" >Send Message</button>
            </div>
          </form>
        </div>
        <div class="col-md-6">
          <div class="img-box">
            <img src="images/contact-img.png" alt="">
            <div class="img_overlay">
              <h2>
                Make Colorful Your <br>
                Dream Day ......
              </h2>
            </div>
          </div>
        </div>
      </div>
    </div><?php } ?>
  </section>

  <!-- info section -->
  <?php include_once('includes/special.php');?>

  <!-- footer section -->
  <?php include_once('includes/footer.php');?>
</body>

</html>