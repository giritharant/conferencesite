<?php
$con=mysqli_connect("localhost","root","","bigdata");
//echo $sql="insert into fields set roll_no='$_POST[roll_no]',user_password='$_POST[user_password]'";
$roll_no=$_POST['roll_no'];
$user_password=$_POST['user_password'];
$select="select * from fields where roll_no='$_POST[roll_no]' and user_password='$_POST[user_password]'";
$store=mysqli_query($con,$select);
$log=mysqli_fetch_array($store);
if($roll_no==$log['roll_no']&&($user_password==$log['user_password']))
{
	
	session_start();
	//echo $log['user_name'];
	$_SESSION["u_name"]=$log['user_name'];
	header('location:index2.php');
}
else 
{
	session_start();
	$_SESSION["error"]=1;
	header('location:login.php');
	
}

?>
