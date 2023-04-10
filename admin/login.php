<?php
session_start();
include"..\connection.php"
?>
<html>
<head> 
<link href="../styles.css"rel="stylesheet" type="text/css"> 
<link href="../bootstrap\css\bootstrap.min.css"rel="stylesheet" type="text/css">
<link href="../bootstrap\css\bootstrap-grid.min.css"rel="stylesheet"type="text/css">
<title>logins</title>
</head> 
<?php
if(isset($_POST['btnlogin']))
{
	$username=$_POST['username'];
	$password=$_POST['password'];
	$q="select * from login
	where username='$username' and password='$password'";
	$r=mysqli_query($con,$q);
	if(mysqli_num_rows($r)>0)
	{
		$row=mysqli_fetch_array($r);
		$_SESSION['adminid']=$row['id'];
		$_SESSION['adminuser']=$username;
		echo "<script>window.location.href='dashboard.php';</script>";
	}
	else
	{
		echo "<p>Invalid Username or Password</p>";
	}
}
?>
<body id="adminbody">
<div class="container-fluid">
<div class="row text-center mt-5">
<div class="col-md-4 offset-4 bg-light card p-3">
<h6 class="text-center heading text-danger display-5"><b>Login</b></h6>	
<form method="post"action="">
<div class="form-group">
<input type="text" class="form-control" placeholder="username" name="username"required><br>
<br>
<input type="password" class="form-control" placeholder="password"  name="password"><br><br>
<button class="btn btn-danger  btn-xs btn-block btn-border-secondary" name="btnlogin">Login</button></div></form>
</div>
</div>