<?php
$servername="localhost";
$username="root";
$password="";
$database="clickdb";

$conn=mysqli_connect($servername,$username,$password,$database);

if(!$conn){
    die("connection Failed :" .mysqli_connect_error());
}

$name=$_POST["name"];
$email=$_POST["email"];
$mobno=$_POST["mobno"];
$message=$_POST["message"];

$sql="INSERT INTO feedback(Name,Email,MobileNumber,Message)
values ('$name','$email','$mobno','$message')";

if(mysqli_query($conn,$sql)==true){
    echo"<script> alert('Your Message has been sent'); window.location.href='contact.php';</script>";
}

else{
    "Error : " ."<br>" .mysqli_error($conn);
}

mysqli_close($conn);

?>