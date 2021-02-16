<?php
$con = new mysqli("localhost","root","","mydata");
echo "เชื่อต่อสำเร็จ";
 if (mysqli_connect_errno()){
     echo "ผิดผลาด" ,mysqli_connect_error();

 }
?>