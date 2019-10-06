<?php 

$con = mysqli_connect("localhost","ADMIN","admin","ecom_store");

if(!$con) {
  die("Connection failed: " . mysqli_connect_error());
}

?>