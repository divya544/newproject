<?php
$bno=$_POST['booknumber'];
$btitle=$_POST['booktitle'];
$bauthor=$_POST['bookauthor'];
$bprice=$_POST['bookprice'];
$sql="INSERT  INTO books VALUES('$booknumber ','$booktitle','$bookauthor','$bookprice)";
$cn=mysqli_connect("localhost","root","","library");
mysqli_query($cn,$sql) or die("unable");
mysqli_close($cn);
echo "done";
?>