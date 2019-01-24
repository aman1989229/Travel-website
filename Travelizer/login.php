<?php
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="mydata"; // Database name 
$tbl_name="signup"; // Table name 

// Create connection
$conn=mysqli_connect("$host", "$username", "$password","$db_name")or die("cannot connect");
// Check connection
if (isset($_POST['submit'])) {
  $email=$_POST['email'];
  $password=$_POST['password'];
  $passworden=md5($password);
$sql="SELECT * FROM $tbl_name WHERE email='$email' and password='$passworden'";
}
$result=mysqli_query($conn,$sql);
echo $passworden;
// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row

if($count==1){
session_start();
// Register $myusername, $mypassword and redirect to file "login_success.php"
$_SESSION['email']="$email";
$_SESSION['password']="$passworden"; 
header("location:login_success.php");
}
else {
echo "Wrong Username or Password";
}
?>