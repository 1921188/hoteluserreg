<?php
$link=mysqli_connect("localhost","root","") or die(mysqli_error($link));
mysqli_select_db($link,"progscendatabase") or die(mysqli_error($link));
?>

<html lang="en">
<head>
  <title>User Regitration Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css1.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
  

 <div class="headercontainer">
		<h2>Hotel Guest Information System</h2>
</div>
<div class="container">
	<br>
	<p>
		This system allows you to record all the necessary information of the guest.
	</p>
	<br>
	<p>
		All data inserted will be shown below. If there is nothing shown, that means you have
		yet to insert all the information of the guest. 
		<a href="Adddata.php"><button type="button" class="btn btn-primary">Add</button></a>
		Data to record the all the guest's necessary information.
	</p>
	<br>

	</div>
 
<div class="col-kg-12">
	<table class="table table-striped">
		<thead>
			<tr>
				<th>SL NO</th>
				<th>Name</th>
				<th>Email</th>
				<th>Phone Number</th>
				<th>City</th>
				<th></th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<?php
			$res=mysqli_query($link,"select * from table1");
			while($row=mysqli_fetch_array($res))
			{
				echo "<tr>";
				echo "<td>"; echo $row["slnum"]; echo "</td>";
				echo "<td>"; echo $row["name"]; echo "</td>";
				echo "<td>"; echo $row["email"]; echo "</td>";
				echo "<td>"; echo $row["phone"]; echo "</td>";
				echo "<td>"; echo $row["city"]; echo "</td>";
				echo "<td>"; ?> <a href="edit.php?slnum=<?php echo $row["slnum"]; ?>"><button type="button" class="btn btn-success">Edit</button></a> <?php echo "</td>";
				echo "<td>"; ?>	<a href="delete.php?slnum=<?php echo $row["slnum"]; ?>"><button type="button" class="btn btn-danger">Delete</button></a> <?php echo "</td>";
				echo "</tr>";
			}
			?>
		</tbody>
  </table>
</div>
</body>

</html>