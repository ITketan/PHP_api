<?php
include "connection.php";

$unm=$_REQUEST['unm'];
$pass=$_REQUEST['pass'];


$sql = "INSERT INTO reg SET unm='".$unm."',pass='".$pass."'";
if(mysqli_query($conn,$sql))
{
echo "record inserted.";
}
else
{
echo "not inserted.";
}
?>