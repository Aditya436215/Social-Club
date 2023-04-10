<?php
session_start();
if(empty($_SESSION['adminid']))
{
	echo"<script>window.location.href='login.php'</script>";
}
include"../connection.php";
?>
<html>
<head> 
<link href="../styles.css"rel="stylesheet" type="text/css"> 
<link href="../bootstrap\css\bootstrap.min.css"rel="stylesheet" type="text/css">
<link href="../bootstrap\css\bootstrap-grid.min.css"rel="stylesheet"type="text/css">
<title>adminpage</title>
</head>
<body> 
<div class="container-fluid">
<div class="row bg-light p-3 border-bottom">
<div class="col-md-9 display-5 ">ADMIN PANEL
</div>
<div class="col-md-3">
<nav>
<a href ="login.php" class="nav-link"><button class="btn btn-danger btn-lg ps-4 pe-4">Login</button></a>
</nav></div>
</div>

<div class="row "id="dash">
<div class="col-md-2 bg-light border-right color222 pt-4 pb-5 mb-5">
<nav>
<h5>
<a href="dashboard.php" class="nav-link">Dashboard</a><br>
<a href="feedback.php" class="nav-link ">Feedback</a><br>
<a href="hirevolunteer.php" class="nav-link ">Voluteer Form</a><br>
<a href="logout.php" class="nav-link ">Logout</a><br></h5>
</nav>
</div>


