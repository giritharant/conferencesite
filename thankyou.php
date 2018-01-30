<?php
$con=mysqli_connect("localhost","root","","bigdata");
//mysql_select_db("bigdata");
//$query = mysql_query("SELECT user_name FROM fields WHERE roll_no='$_POST['roll_no']'");
$query = "SELECT * FROM fields WHERE roll_no='$_POST[roll_no]'";
$user_password1=$_POST['user_password1'];
$user_password=$_POST['user_password'];
$res=mysqli_query($con,$query);

$row=mysqli_fetch_array($res);

if ($row['roll_no'])
{
	session_start();
	$_SESSION['log']=0;
    header('location:index.php');
}
else
{
	$user_password1=$_POST['user_password1'];
	$user_password=$_POST['user_password'];
	if($user_password!==$user_password1)
	{
		session_start();
		$_SESSION["pass"]=1;
		header('location:registration.php');
	}
	else{
	$w="insert into fields values('$_POST[user_name]','$_POST[roll_no]','$_POST[user_email]','$_POST[user_password]','$_POST[category]','')";
	if(mysqli_query($con,$w))
	{
		session_start();
		$_SESSION['log']=1;
		header('location:index.php');
	}
	}
}
?>
