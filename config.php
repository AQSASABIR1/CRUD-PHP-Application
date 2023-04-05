<?php
$username="root";
$password="";
$host="localhost";
$database="db";
$con=mysqli_connect("$host","$username","$password","$database");

if($con==true)
{
    echo "Connected Successfully";
}
else
{
   echo mysqli_connect_error();
}
?>