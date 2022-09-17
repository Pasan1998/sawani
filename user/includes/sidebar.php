        <?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['obcsuid']==0)) {
  header('location:logout.php');
  } else{



  ?>
  <div class="left-sidebar-pro">
            <nav id="sidebar">
                <div class="sidebar-header">
                     <?php
$uid=$_SESSION['obcsuid'];
$sql="SELECT FirstName,LastName,MobileNumber from  tbluser where ID=:uid";
$query = $dbh -> prepare($sql);
$query->bindParam(':uid',$uid,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>
                    <a href="#"><img src="img/message/avatar.jpg" alt="" />
                    </a>
                    <h3><?php  echo $row->FirstName;?> </h3> 
                    <h3><?php  echo $row->LastName;?></h3>
                    <p><?php  echo $row->MobileNumber;?></p><?php $cnt=$cnt+1;}} ?>
                   
                </div>
                <div class="left-custom-menu-adp-wrap">
                    <ul class="nav navbar-nav left-sidebar-menu-pro">
                        <li class="nav-item">
                            <a href="dashboard.php" role="button" aria-expanded="false"><i class="fa big-icon fa-home"></i> <span class="mini-dn">Home</span> </a>
                            
                        </li>
                        
                        <li class="nav-item">
                            <a href="apply_for_services.php" role="button" aria-expanded="false"><i class="fa big-icon fa-envelope"></i> <span class="mini-dn">Apply for Service</span> </a>
                            
                        </li>
                        <li class="nav-item">
                            <a href="view_orders.php" role="button" aria-expanded="false"><i class="fa big-icon fa-user"></i> <span class="mini-dn">Orders</span> </a>
                            
                        </li>
                       
                   
                    </ul>
                </div>
            </nav>
        </div><?php }  ?>