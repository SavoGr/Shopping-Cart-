<?php 
session_start();
$conn = mysqli_connect('localhost','root','','artical');
$q  = "SELECT * FROM `artical` ";
$result = mysqli_query($conn,$q);

?>