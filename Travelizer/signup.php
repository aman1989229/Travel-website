<?php

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="mydata"; // Database name 
$tbl_name="signup"; // Table name 

// Connect to server and select database.
$conn=mysqli_connect("$host", "$username", "$password","$db_name")or die("cannot connect"); 
// Get values from form 
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$sex=$_POST['sex'];
$email=$_POST['email'];
$password=$_POST['password'];
$passworden=md5($password);
$add1=$_POST['add1'];
$add2=$_POST['add2'];
$city=$_POST['city'];
$state=$_POST['state'];
$zip=$_POST['zip'];

$query="SELECT email from signup where email='$email'";
$fire=mysqli_query($conn,$query);
$count=mysqli_num_rows($fire);
if($count>0)
{
	echo "email already exist";
}
else{
// Insert data into mysql 
$sql="INSERT INTO $tbl_name(fname,lname,sex,email,password,add1,add2,city,state,zip)VALUES('$fname','$lname','$sex','$email','$passworden','$add1','$add2','$city','$state','$zip')";
$result=mysqli_query($conn,$sql);
// if successfully insert data into database, displays message "Successful". 
if($result){
echo "Successful";
echo "<BR>";
}

/*else {
echo "ERROR";
}
header("refresh:2; url=my.html")*/
}
?>