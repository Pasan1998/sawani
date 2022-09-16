<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['obcsaid']==0)) {
  header('location:logout.php');
  } else{
    if(isset($_POST['submit']))
  {
    $adminid=$_SESSION['obcsaid'];
    $weare=$_POST['weare'];
    $mission=$_POST['mission'];
    $photographers=$_POST['photographers'];
    $facilities=$_POST['facilities'];
    $team=$_POST['team'];
$sql="update tblabout set WeAre=:weare,Mission=:mission,Photographers=:photographers,Facilities=:facilities,Team=:team where ID=:aid";
     $query = $dbh->prepare($sql);
     $query->bindParam(':weare',$weare,PDO::PARAM_STR);
     $query->bindParam(':mission',$mission,PDO::PARAM_STR);
     $query->bindParam(':photographers',$photographers,PDO::PARAM_STR);
     $query->bindParam(':facilities',$facilities,PDO::PARAM_STR);
     $query->bindParam(':team',$team,PDO::PARAM_STR);
     $query->bindParam(':aid',$adminid,PDO::PARAM_STR);
$query->execute();

        echo '<script>alert("About has been updated")</script>';
         echo "<script>window.location.href ='about.php'</script>";
     

  }
  ?>
<!doctype html>
<html class="no-js" lang="en">

<head>
   
    <title>About | Memory Click</title>
   
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i,800" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/adminpro-custon-icon.css">
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/modals.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/form/all-type-forms.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body class="materialdesign">
  
    <div class="wrapper-pro">
   <?php include_once('includes/sidebar.php');?>
        <?php include_once('includes/header.php');?>
            <div class="breadcome-area mg-b-30 small-dn">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="breadcome-list shadow-reset">
                                <div class="row">
                                   
                                    <div class="col-lg-12">
                                        <ul class="breadcome-menu">
                                            <li><a href="dashboard.php">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">About</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          
            <div class="basic-form-area mg-b-15">
                <div class="container-fluid">
                   
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sparkline12-list shadow-reset mg-t-30">
                                <div class="sparkline12-hd">
                                    <div class="main-sparkline12-hd">
                                        <h1>About Us</h1>
                                    </div>
                                </div>
                                <div class="sparkline12-graph">
                                    <div class="basic-login-form-ad">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="all-form-element-inner">
                                                    
                                                    <form method="post">
                                                    <?php

$sql="SELECT * from  tblabout";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>
                                                       
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <label class="login2 pull-right pull-right-pro">We Are</label>
                                                                </div>
                                                                <div class="col-lg-9">
                                                                <textarea type="text" class="form-control" name="weare" required="true" /><?php  echo $row->WeAre;?></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <label class="login2 pull-right pull-right-pro">Mission</label>
                                                                </div>
                                                                <div class="col-lg-9">
                                                                     <textarea type="text" class="form-control" name="mission" required="true" /><?php  echo $row->Mission;?></textarea>
                                                                </div><?php  ?>
                                                            </div>
                                                        </div>
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <label class="login2 pull-right pull-right-pro">Photographers</label>
                                                                </div>
                                                                <div class="col-lg-9">
                                                                     <textarea type="text" class="form-control" name="photographers" required="true" /><?php  echo $row->Photographers;?></textarea>
                                                                </div><?php  ?>
                                                            </div>
                                                        </div>
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <label class="login2 pull-right pull-right-pro">Facilities</label>
                                                                </div>
                                                                <div class="col-lg-9">
                                                                     <textarea type="text" class="form-control" name="facilities" required="true" /><?php  echo $row->Facilities;?></textarea>
                                                                </div><?php  ?>
                                                            </div>
                                                        </div>
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <label class="login2 pull-right pull-right-pro">Team</label>
                                                                </div>
                                                                <div class="col-lg-9">
                                                                     <textarea type="text" class="form-control" name="team" required="true" /><?php  echo $row->Team;?></textarea>
                                                                </div><?php  ?>
                                                            </div>
                                                        </div>                               
                                               
                                                        <?php $cnt=$cnt+1;}} ?>
                                                        <div class="form-group-inner">
                                                            <div class="login-btn-inner">
                                                                <div class="row">
                                                                    <div class="col-lg-3"></div>
                                                                    <div class="col-lg-9">
                                                                        <div class="login-horizental cancel-wp pull-left">
                                                                            
                                                                            <button class="btn btn-sm btn-primary login-submit-cs" type="submit" name="submit">Save Change</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  <?php include_once('includes/footer.php');?>
  
    <script src="js/vendor/jquery-1.11.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.meanmenu.js"></script>
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/counterup/jquery.counterup.min.js"></script>
    <script src="js/counterup/waypoints.min.js"></script>
    <script src="js/modal-active.js"></script>
    <script src="js/icheck/icheck.min.js"></script>
    <script src="js/icheck/icheck-active.js"></script>
    <script src="js/main.js"></script>
</body>

</html><?php }  ?>