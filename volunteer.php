<?php
include"header.php"
?>
<div class="row bg-light p-3">
<div class="col-md-10 offset-1">

<h2>JOIN US</H2>
</div>
</div>
<div class="row">
<div class="col-md-10 offset-1">
<h1 class="sing"><br><br><i class="fa fa-yelp me-2" aria-hidden="true"></i>Add yourself as a volunteer</h1>
</div>
</div>
<div class="row p-5">
<div class="col-md-7 text-center">
<form method="POST"action="#">
<div class="form-group">
<div class="row">
<div class="col-md-6">

<input type="text" class="form-control" placeholder="Name" name="name"required><br>
</div>
<div class="col-md-6">
<input type="email" class="form-control" placeholder="Email"  name="email"><br>
</div>
</div>
<div class="row">
<div class="col-md-6">
<input type="tel" class="form-control" placeholder="Contact No."  name="phone"><br>
</div>
<div class="col-md-6">
<input type="text" class="form-control"placeholder="Your Highest Qualification?" name="file"><br>
</div>
</div>

<div class="row ">
<div class="col-md-6">
<label><b>Select Service you are intersted in:-</b></label>
<select name="service" >
<option>-Choose-</option>
<option>Looking after Needy</option>
<option>Elderly Care</option>
<option>Child CAre</option>
<option>Hygenic Environment</option>
<option>Fund Rising</option>
<option>Food Feeding</option>
</select><br>
</div>
<div class="col-md-6">
<label><b>City You want to work as a Volunteer: -</b></label><br>
<select name="location" >
<option>-Choose-</option>
<option>Bathinda</option>
<option>Jalandhar</option>
<option>Moga</option>
<option>Ludhiana</option>
<option>Muktsar</option>
<option>Amritsar</option>
</select><br>
</div>
</div><br><br><br>
<button class="btn btn-danger btn-lg"name="btnsubmit">Submit<button>
</div></form>
</div>
<div class="col-md-4">
<img src="images\act.jpg"height="400px"width="100%">
</div>
</div>


<?php
include "footer.php";
?>
<ul class="pager">
  <li class="previous"><a href="team.php"><b><i>Previous</b>
 </i></a></li>
  <li class="next"><a href="contact.php">Next</a></li>
</ul>
<?php
if(isset($_POST['btnsubmit']))
{
$name=$_POST['name'];
$email=$_POST['email'];
$location=$_POST['location'];
$service=$_POST['service'];
$phone=$_POST['phone'];
$file=$_POST['file'];
$query="insert into volunteer(name,email,phone,file,location,service)
values('$name','$email','$phone','$file','$location','$service')";
if (mysqli_query($con,$query))
{
	echo"<script>alert('your form is submitted')</script>";
}
else
{
	echo mysqli_error($con);
}
}
?>