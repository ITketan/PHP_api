

<?php
 include "connection.php";

//  $username=$_POST['username'];
$unm = isset($_REQUEST['unm']) ? $_REQUEST['unm'] : '';
//  $username = !empty($_POST['username']) ? $_POST['username'] : '';
$pass = isset($_REQUEST['pass']) ? $_REQUEST['pass'] : '';
//  var_dump($_REQUEST);
//  $password=$_POST['password'];


$sql="SELECT * FROM reg WHERE unm='".$unm."' AND pass='".$pass."'" ;
$rs=mysqli_query($conn,$sql);

    if(mysqli_num_rows($rs)>0){

        echo"successfully";
       
    }else{

        echo "No data";
    }

 


?>