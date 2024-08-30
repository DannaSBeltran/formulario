<?php

$sever= "sql.freedb.tech";

$user="freedb_dannab";
$pass="pXh8%u#!Yw9fGHM";
$dbname="freedb_programacion";
$db_port="3306";


$con1=mysqli_connect ($sever,$user,$pass,$dbname);

if(!$con1){
    echo("failed");
}


?>
