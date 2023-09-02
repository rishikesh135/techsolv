<?php
$nameError ="";
include('connection.php');
if( $_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['register']))
{
    $Name=$_POST['name'];
    $Mob=$_POST['mob'];
    $Email=$_POST['email'];
    $Sub=$_POST['sub'];
    $Msg=$_POST['msg'];

    if (empty($name)) {
        $nameErr = "Name is required";
    } elseif (!preg_match("/^[a-zA-Z ]*$/", $name)) {
        $nameErr = "Only letters and white space allowed";
    }


$query = "INSERT INTO contact_form(`Name`, `Mobile`, `Email`, `Subject`, `Message`) VALUES ('$Name','$Mob','$Email','$Sub','$Msg');";

$data= mysqli_query($connect,$query);

if($data==true)
{
echo "!!..Success..!!";
}
else{
    echo "Error";
}
}
else{
    echo "Somthing Went Worng";
}
?>
