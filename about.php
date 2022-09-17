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

    <!-- header section strats -->
    <?php include_once('includes/header.php');?>
  </div>

  <!-- about section -->
  <section class="news_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          About Memory Click<br/>
          ***********************
        </h2>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="box">
            <div class="img-box">
              <img src="images/n-1.jpg" alt="">
              <div class="date">
              <?php
$ret=mysqli_query($con,"select * from tblabout");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {
?>
                <h5>
                  We are...<br/>
                </h5>
                <p>
                <?php  echo $row['WeAre'];?> 
                </p>
                <h6 style= "color:#800c2e;font-size: 20px;font-weight: bold;">Our Mission...</h6>
              
                <p>
                <?php  echo $row['Mission'];?>
                </p>
                <h5>
                Our Professional Photographers
              </h5>
              <p>
              <?php  echo $row['Photographers'];?>
              </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="box">
            <div class="img-box">
              <img src="images/n-2.jpg" alt="">
              <div class="date">
                <h5>
                  We are offering you a range of facilities,
                </h5>
                <p>
                <?php  echo $row['Facilities'];?>  
                </p>
                <h5>
               Our Team 
              </h5>
              <p>
              <?php  echo $row['Team'];?>  
              </p>
              </div>
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