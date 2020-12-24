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
<body>


<div class="col-kg-12">
	<div class="headercontainer">
		<h2>Hotel Guest Information System</h2>
	</div>
	<div class="container">
		<form action="" name="form1" method="post">
			<div class="form-group">
				<label for="name">Name:</label>
				<input type="text" class="form-control" id="name" placeholder="Enter your Full Name" name="name">
			</div>
	
			<div class="form-group">
				<label for="email">Email:</label>
				<input type="email" class="form-control" id="email" placeholder="Enter your Email" name="email">
			</div>
	
			<div class="form-group">
				<label for="phonenumber">Phone Number:</label>
				<input type="number" class="form-control" id="phone" placeholder="Enter your Phone Number" name="phone">
			</div>
	
			<div class="form-group">
				<label for="city">City:</label>
				<input type="text" class="form-control" id="city" placeholder="Enter your City" name="city">
			</div>
	
			<button type="submit" name="add" class="btn btn-default">Add</button>

		</form>
	</div>
</div>

</body>
<?php
if(isset($_POST["add"]))
{
	mysqli_query($link,"INSERT INTO table1 value(NULL,'$_POST[name]','$_POST[email]','$_POST[phone]','$_POST[city]')");

	?>
	<script type="text/javascript" src="jsinsert.js"></script>
	<?php
	
}
	?>
</html>