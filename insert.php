<?php

include 'dbcon.php';

$fname=$_POST["fname"];
$lname=$POST["lname"];
$city=$_POST["city"];


$insertarsql =
"insert into students(fname,city) values ('$fname','$lname','$city')";


$res = mysqli_query($con1,$insertsql);

?>
