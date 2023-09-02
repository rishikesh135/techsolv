<?php
$db_server="localhost:3307";
$db_username="root";
$db_password="";
$db_name="contact";

$connect= mysqli_connect($db_server,$db_username,$db_password,$db_name);

if($connect== true)
{
   // echo "Connection Ok";
}
else
{
    echo "connection failed";
}

?>