<?php 
include"adminheader.php"
?>
<div class="col-md-6">
<h1 class="display-5 text-center mb-5 mt-4">Feedback of volunteers</h1>
<div class="table">
<?php
$query="select * from volunteer";
$result=mysqli_query($con,$query);
echo"<table class='table text-center table-bordered table-striped ms-5'>";
echo"<th>"."id"."</th>";
echo"<th>"."Name"."</th>";
echo"<th>"."Email"."</th>";
echo"<th>"."Contact No."."</th>";
echo"<th>"."Qualification"."</th>";
echo"<th>"."Service Type"."</th>";
echo"<th>"."Area of Interest"."</th>";
while($row=mysqli_fetch_array($result))
{
	echo"<tr>";
	echo"<td>".$row['id']."</td>";
	echo"<td>".$row['name']."</td>";
	echo"<td>".$row['email']."</td>";
	echo"<td>".$row['phone']."</td>";
	echo"<td>".$row['file']."</td>";
	echo"<td>".$row['service']."</td>";
	echo"<td>".$row['location']."</td>";
	echo"</tr>";
}
echo"</table>";
?>
</div>
</div>

</div>
</div>
</body>
</html>

