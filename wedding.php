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
      <h2 style="color:#36013F">
          Our Wedding packages
        </h2>
        <p>
          -There are many packages we have-
        </p>
      </div>
      <div class="row">
              <table background="images/p-w.jpg" class="table table-bordered">
                        <thead>
                      <tr>
                      <th>Name</th>
                      <th>Fee</th>
                      <th>Dilivery Time</th>
                      <th>Details</th>
                      <th></th>
                    </tr>
                        </thead>
<?php
$ret=mysqli_query($con,"select * from tblwedding");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {
?>
                        <tbody>
                        
                        <tr data-expanded="true">
                        <td><?php  echo $row['PackageName'];?></td>
                        <td><?php  echo $row['PackageFee'];?></td>
                        <td><?php  echo $row['PackageDiliveryTime'];?></td>
                        <td><?php  echo $row['PackageDetails'];?></td>
                        <td><button class="submit"><a href="user/login.php">Order Now</a></button></td>
                        </tr>
<?php 
$cnt=$cnt+1;
}?>
                        
        
                    </tbody>
                  </table>
              </div>
            </div>
          </div>
        </div>
    </div>
  </section>

  <!-- info section -->
  <?php include_once('includes/special.php');?>

  <!-- footer section -->
  <?php include_once('includes/footer.php');?>

</body>

</html>