<?php 
// Divya
$empid=$_POST['empid'];
$sql="SELECT * FROM employee WHERE empid='$empid'";
$cn=mysqli_connect("localhost","root","","demodb");
$result=mysqli_query($cn,$sql);
$count=mysqli_num_rows($result);

if($count!=0){
    $row=mysqli_fetch_array($result);
    $obj=(object)[];
    $obj->name=$row["name"];
    $obj->designation=$row["designation"];
    $obj->salary=$row["salary"];
    $data=json_encode($obj);
    echo $data;
}
else{
echo "no reacord";
}
mysqli_close($cn);
// Divya
?>
