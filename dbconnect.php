<?php
$con = new mysqli("localhost","root","","mydata");
if($con)
{
echo "MySQL Connected";
}
else
{
echo "MySQL Connect Failed : Error : ".mysqli_connect_error();
}

?>