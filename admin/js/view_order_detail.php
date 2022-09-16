<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['obcsaid']==0)) {
  header('location:logout.php');
  } else{
if(isset($_POST['submit']))
  {


$vid=$_GET['viewid'];
$status=$_POST['status'];
$remark=$_POST['remark'];
  

$sql= "update tblservice set Status=:status,Remark=:remark where ID=:vid";
$query=$dbh->prepare($sql);
$query->bindParam(':status',$status,PDO::PARAM_STR);
$query->bindParam(':remark',$remark,PDO::PARAM_STR);
$query->bindParam(':vid',$vid,PDO::PARAM_STR);

 $query->execute();

 echo '<script>alert("Remark has been updated")</script>';
 echo "<script>window.location.href ='all_orders.php'</script>";
}


  ?>
<!doctype html>
<html class="no-js" lang="en">

<head>
   
    <title>Manage Application Form | Memory Click</title>
  
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i,800" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/adminpro-custon-icon.css">
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/data-table/bootstrap-table.css">
    <link rel="stylesheet" href="css/data-table/bootstrap-editable.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/c3.min.css">
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
                                            <li><span class="bread-blod">Order</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="data-table-area mg-b-15">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sparkline13-list shadow-reset">
                                <div class="sparkline13-hd">
                                    <div class="main-sparkline13-hd">
                                        <h1>View <span class="table-project-n">Detail of</span> Order</h1>
                                    </div>
                                </div>
                                <div class="sparkline13-graph">
                                    <div class="datatable-dashv1-list custom-datatable-overright">
                                       
                                         <?php
                               $vid=$_GET['viewid'];

$sql="SELECT tblservice.*,tbluser.FirstName,tbluser.LastName from  tblservice join  tbluser on tblservice.UserID=tbluser.ID where tblservice.ID=:vid";
$query = $dbh -> prepare($sql);
$query-> bindParam(':vid', $vid, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);

$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>
<table border="1" class="table table-bordered">
<tr align="center">
<td colspan="4" style="font-size:20px;color:red">
Order Number:   <?php  echo $row->OrderID;?></td></tr>
<tr align="center">
<td colspan="4" style="font-size:20px;color:blue">
 User Details</td></tr>

    <tr>
    <th scope>First Name</th>
    <td><?php  echo $row->FirstName;?></td>
    <th scope>Last Name</th>
    <td><?php  echo $row->LastName;?></td>
  </tr>
  <tr>
    <th scope>Mobile Number</th>
    <td><?php  echo $row->MobileNumber;?></td>
    <th>Email</th>
    <td><?php  echo $row->Email;?></td>
  </tr>
  <tr>
    <th>Address</th>
    <td><?php  echo $row->Address;?></td>
  </tr>
<tr align="center">
<td colspan="4" style="font-size:20px;color:blue">
 Order Details</td></tr>
 <tr>
    <th scope>Function</th>
    <td><?php  echo $row->Function;?></td>
    <th scope>Package</th>
    <td><?php  echo $row->Package;?></td>
  </tr>
  <tr>
    <th scope>Date</th>
    <td><?php  echo $row->Date;?></td>
    <th scope>Venue</th>
    <td><?php  echo $row->Venue;?></td>
  </tr>
  <tr>
    <th scope>STime</th>
    <td><?php  echo $row->STime;?></td>
    <th scope>ETime</th>
    <td><?php  echo $row->ETime;?></td>
  </tr>
  <tr>
    <th scope>Date of apply</th>
    <td><?php  echo $row->Dateofapply;?></td>
  </tr>
  <tr>
<tr align="center">
<td colspan="4" style="font-size:20px;color:blue">
 Order Status</td></tr>
    
     <th>Order Final Status</th>

    <td style="color:red"><b> <?php  $status=$row->Status;
    
if($row->Status=="Verified")
{
  echo "Your order has been verified";
}

if($row->Status=="Rejected")
{
 echo "Your order has been cancelled";
}


if($row->Status=="")
{
  echo "Pending";
}
 

     ;?></td></b>
     <th >Admin Remark</th>
    <?php if($row->Status==""){ ?>

                     <td><?php echo "Your order is still pending"; ?></td>
<?php } else { ?>                  <td><?php  echo htmlentities($row->Status);?>
                  </td>
                  <?php } ?>
  </tr>
 
  <?php $cnt=$cnt+1;}} ?>
</table>
<?php 

if ($status==""){
?> 
<p align="center"  style="padding-top: 20px">                            
 <button class="btn btn-primary waves-effect waves-light w-lg" data-toggle="modal" data-target="#myModal">Take Action</button></p>  

<?php } ?>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
     <div class="modal-content">
      <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Take Action</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                <table class="table table-bordered table-hover data-tables">

                                <form method="post" name="submit">

                                
                               
     <tr>
    <th>Remark :</th>
    <td>
    <textarea name="remark" placeholder="Remark" rows="3" cols="3" class="form-control wd-450" required="true"></textarea></td>
  </tr> 
   
 
  <tr>
    <th>Status :</th>
    <td>

   <select name="status" class="form-control wd-450" required="true" >
     <option value="Verified" selected="true">Verified</option>
     <option value="Rejected">Rejected</option>
   </select></td>
  </tr>
</table>
</div>
<div class="modal-footer">
 <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
 <button type="submit" name="submit" class="btn btn-primary">Update</button>
  
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
  <?php include_once('includes/footer.php');?>
   
    <script src="js/vendor/jquery-1.11.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.meanmenu.js"></script>
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/counterup/jquery.counterup.min.js"></script>
    <script src="js/counterup/waypoints.min.js"></script>
    <script src="js/peity/jquery.peity.min.js"></script>
    <script src="js/peity/peity-active.js"></script>
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/sparkline-active.js"></script>
    <script src="js/data-table/bootstrap-table.js"></script>
    <script src="js/data-table/tableExport.js"></script>
    <script src="js/data-table/data-table-active.js"></script>
    <script src="js/data-table/bootstrap-table-editable.js"></script>
    <script src="js/data-table/bootstrap-editable.js"></script>
    <script src="js/data-table/bootstrap-table-resizable.js"></script>
    <script src="js/data-table/colResizable-1.5.source.js"></script>
    <script src="js/data-table/bootstrap-table-export.js"></script>
    <script src="js/main.js"></script>


</body>

</html><?php }  ?>
