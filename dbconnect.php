<?php
$con = new mysqli("localhost","root","","mydata");
 if (mysqli_connect_errno()){
     echo "ผิดผลาด" ,mysqli_connect_error();

 }
?>