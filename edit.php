<?php
$link=mysqli_connect("localhost","root","") or die(mysqli_error($link));
mysqli_select_db($link,"progscendatabase") or die(mysqli_error($link));
$slnum=$_GET["slnum"];

$name="";
$email="";
$phone="";
$city="";

$res=mysqli_query($link, "select * from table1 where slnum=$slnum");
while($row=mysqli_fetch_array($res))
{
	$name=$row["name"];
	$email=$row["email"];
	$phone=$row["phone"];
	$city=$row["city"];

}
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

<div class="container">
<div class="col-kg-4">
<div class="headercontainer">
  <h2>Hotel Guest Information System</h2>
</div>
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
	
    <button type="submit" name="update" class="btn btn-default">Update</button>

  </form>
</div>
</div>
</body>

<?php
if(isset($_POST["update"]))
{
	mysqli_query($link,"update table1 set name='$_POST[name]',email='$_POST[email]',phone='$_POST[phone]',city='$_POST[city]' where slnum=$slnum");
	
	?>
	<script type="text/javascript" src="editjsref.js"></script>
	<?php
}
	?>

</html>