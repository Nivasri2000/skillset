<?php
$servername="localhost";
$username="root";
$password="";
$dbname="Assign";

$uname=$_POST["Username"];
$pass=$_POST["Password"];
$contact=$_POST["Contact"];
$address=$_POST["Address"];

$conn = mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
die("connection failed:".mysqli_connect_error());
}
$sql = "INSERT INTO Fun VALUES('$uname', '$pass', '$contact', '$address')";
if(mysqli_query($conn,$sql))
{
echo"new record created";
}else{
echo "Error".$sql."<br>".mysqli_error($conn);
}
mysqli_close($conn);
?>

