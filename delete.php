<?php
$link=mysqli_connect("localhost","root","") or die(mysqli_error($link));
mysqli_select_db($link,"progscendatabase") or die(mysqli_error($link));

$slnum=$_GET["slnum"];
mysqli_query($link, "delete from table1 where slnum=$slnum");
?>
<script type="text/javascript" src="deletejsref.js"></script>