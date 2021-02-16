<?php
$con = new mysqli("localhost2","root","","mydata");
 if (mysqli_connect_errno()){
     echo "ผิดผลาด" ,mysqli_connect_error();

 }
?>