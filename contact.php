<?php
include "header.php";
?>
<div class="row bg-light p-3">
<div class="col-md-10 offset-1">
<h2>CONTACT US</H2>
</div>
</div>
<div class="row mt-5">
<div class="col-md-8 offset-2 mt-4">
<div class="row">
<div class="col-md-8">
<h2 ><b>Stay in touch</b></h2>
<p>Its today global socity friends away to go to school or start or start families travels all over the world for work and pleasure and settle down in placs  for away from their hometown</p></div>
<div class="col-md-4 mt-4">
<p><b><i>ajit road ,stno.18,bathinda</p>
<p>info@gmail.com</b></p>
</div>
</div>
</div>
</div>
<div class="row text-center  text-primary  mt-5">
<div class="col-md-12">
<h1 class="sing"><b>Contact Us</b></h1>
</div>
</div> 
<div class="row mt-4 text-center">
<div class="col-md-8 offset-2">

<form method="POST"action="">
<div class="form-group">
<div class="row">
<div class="col-md-6">

<input type="text" class="form-control" placeholder="name" name="name"required><br>
</div>
<div class="col-md-6">

<input type="email" class="form-control" placeholder="email"  name="email"><br>
</div>
</div>
<div class="row">

<div class="col-md-6">
<input type="text" class="form-control"placeholder="Type Your Location"name="location"><br>
</div>
<div class="col-md-6">
<input type="text" class="form-control"placeholder="subject" name="subject"><br>
</div>
</div>
<div class="row ">
<div class="col-md-10 text-dark">
<textarea type="message" class="form-control"rows="5" cols="500"placeholder="message" name="message"></textarea><br>
<button name="btnsubmit" class="btn-light  btn-outline-dark btn-lg btn-left mt-5">Send message</button><br><br>
</div>
</div>
</div></form>
</div>
</div>
<div class="row"><div class="col-md-12">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d110335.60484552251!2d74.88864593572828!3d30.208899890664217!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39173297173abbcd%3A0xa00033c0a58a5ac8!2sBathinda%2C%20Punjab!5e0!3m2!1sen!2sin!4v1660464593924!5m2!1sen!2sin" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div></div>
<?php
include "footer.php";
?>
<ul class="pager text-danger">
  <li class="previous"><a href="team.php"><b><i>Previous</b>
 </i></a></li>
  <li class="next"><a href="contact.php">Next</a></li>
</ul>

<?php
if (isset($_POST['btnsubmit']))
{
$name=$_POST['name'];
$email=$_POST['email'];
$location=$_POST['location'];
$subject=$_POST['subject'];
$message=$_POST['message'];
$query="insert into contact(name,email,location,subject,message)
values('$name','$email','$location','$subject','$message')";
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
	


