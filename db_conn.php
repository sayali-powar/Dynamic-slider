<?php

$sname= "localhost";

$unmae= "root";

$password = "";

$db_name = "job_db";

$conn = mysqli_connect($Email Address, $Password, $job_db);

if($conn-> connect_error){
	die("connection failed:". $conn-> connect_error);
}
else{
    die("connection successful");
}

