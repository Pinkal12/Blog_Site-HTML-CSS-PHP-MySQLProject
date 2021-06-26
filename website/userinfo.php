<?php

$con = mysqli_connect('localhost', 'root');
if($con){
  echo "Conection Successful";

}else{
  echo "No connection";
}

mysqli_select_db($con,'bolgdata');

$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comments = $_POST['comments'];

$query = "INSERT INTO userinfodata(user, email, mobile, comment) VALUES ('$user','$email','$mobile','$comments')";

mysqli_query($con,$query);
header('location:index.php');
?>