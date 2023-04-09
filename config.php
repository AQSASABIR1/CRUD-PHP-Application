<?php
$username="root";
$password="";
$host="localhost";
$database="db";
$con=mysqli_connect("$host","$username","$password");

if($con==true)
{
    echo "Success";
}
else
{
   echo mysqli_connect_error();
}
?>