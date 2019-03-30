<?php

$con = mysql_connect('127.0.0.1','root','');
if (!$con)
{
	echo 'Not connected to server';
}
if(!mysql_select_db($con,'signup'))
{
	echo 'Database not selected';
}

$name=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];

$sql="INSERT INTO signup (username,email,password) values('$name','$email','$password')";

if (!mysqli_query($con,$sql))
{
	echo'not inserted';
}
else
{
	echo 'inserted';
}


mysqli_close($con);



?>