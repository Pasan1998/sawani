<section class="info_section layout_padding2">
    <div class="container">
      <div class="row">
        <div class="col-lg-2 col-md-3 offset-lg-1">
          <div class="info-nav">
            <h4>
              Navigation
            </h4>
            <ul>
              <li class="active">
                <a href="index.php">
                  Home
                </a>
              </li>
              <li>
                <a href="about.php">
                  About
                </a>
              </li>
              <li>
                <a href="gallery.php">
                  Gallery
                </a>
              </li>
              <li>
                <a href="packages.php">
                  Packages
                </a>
              </li>
              <li>
                <a href="contact.php">
                  Contact Us
                </a>
              </li>
              </ul>
          </div>
        </div>  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;
        <div class="col-md-3">
          <div class="info-contact">
            <h4>
              Contact Info
            </h4>
            <?php 
 $query=mysqli_query($con,"select * from  tblcontactus");
 while ($row=mysqli_fetch_array($query)) {


 ?>
            
            
            
                <span>
                <h6>
                Customer Service:
              </h6>
               </span>
               <div class="call">  
              <a href="">
                <img src="images/call.png" alt="">
                <span>
                <?php  echo $row['ConMobNo'];?>
               </span>
              </a>
            </div>
            <div class="call">
              <a href="">
                <img src="images/mail.png" alt="">
                <span>
                <?php  echo $row['ConEmail'];?>
                </span>
              </a>
            </div>
            <div class="call">
              <a href="">
                <img src="images/location.png" alt="">
                <span>
                <?php  echo $row['ConAddress'];?>
                </span>
              </a>
            </div>
          </div>
        </div>  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;
        <?php } ?>
        <div class="col-md-3">
          <div class="discover">
            <h4>
              Social Media
            </h4>
            <ul>
              <li>
              <a href="">
                <img src="images/fb.png" alt="">
              </a>
                <a href="">
                  Facebook
                </a>
              </li>
              <li>
              <a href="">
                <img src="images/twitter.png" alt="">
              </a>
                <a href="">
                Twitter
                </a>
              </li>
              <li> 
              <a href="">
                <img src="images/insta.png" alt="">
              </a>
                <a href="">
                  Instagram
                </a>
              </li>
            </ul>
            </div>
        </div>
      </div>
      
    </div>
  </section>