<?php 
include"adminheader.php"
?>
<div class="col-md-6 offset-1 text-primary">
<h1 class="display-5 text-center mb-5">feedback</h1>
<div class="table">
<?php
$query="select * from contact";
$result=mysqli_query($con,$query);
echo"<table class='table tewxt-center table-bordered table-striped ms-5'>"
echo"<th>"."1d"."</th.";
echo"<th>"."name"."</th>";
echo"<th>"."email"."</th>";
echo"<th>"."location"."</th>";
echo"<th>"."subject"."</th>";
echo"<th>"."message"."</th>";
while($row=mysqli_fetch_array($result))
{
	echo"<tr>"
	echo"<td>".$row['id']."</td>";
	echo"<td>".$row['name']."</td>";
	echo"<td>".$row['email']."</td>";
	echo"<td>".$row['location']."</td>";
	echo"<td>".$row['subject']."</td>";
	echo"<td>".$row['message']."</td>";
	echo"</tr>";
}
echo"</table>";
/>
</div>
</div>

