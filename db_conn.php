<?php
$hostName="localhost";
$userName="root";
$password=" ";
$databaseName="Employee1";
$conn=new mysqli($hostName,$userName,$password,$databaseName);
if($conn-> connect_error){
	die("connection failed:". $conn-> connect_error);
}
else{
    die("connection successful");
}
