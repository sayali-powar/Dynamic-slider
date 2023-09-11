<?php
session_start();
$username="";
$Email =" ";
$errors=array();
$db=mysqli_connect('localhost','root', '', 'job_db');
if(isset($_POST['reg_user'])){

$username=mysqli_real_escape_string($db,$_POST['username']);
$Email =mysqli_real_escape_string($db,$_POST['Email']);
$Password=mysqli_real_escape_string($db,$_POST['Password']);
$ConfirmPassword=mysqli_real_escape_string($db,$_POST['Confirmpassword']);
if(empty($username)){
array_push($error,"username is required");
}
if(empty($email)){
array_push($errors," Email Address is required");
}
if(empty($Password)){
array_push($errors," Password is required");
}
if($Password!=$ConfirmPassword){
array_push($errors,"The two passwords do not match");
}
$user_check_query="select * from student1 where username='$username' OR email='$email' Limit 1";
$result=mysqli_query($db,$user_check_query);
$user=mysqli_fetch_assoc($result);
if($user){
exists
if($user['$username']===$username){
array_push($errors,"username already exists");
}

if($user['$Email']===$Email){
array_push($errors,"Email already exists");

}
}
if(count($errors)==0){
$Password=md5($Password);
$query="INSERT INTO student1(username,Email,Password) VALUES('$username','$Email ','$Password')";
mysqli_query($db,$query);
$_SESSION['username']=$username;
$_SESSION['success']="You are logged in";
header('location:index.html');
}
}
if(isset($_POST['login_user']))
{
$Email Address=mysqli_real_escape_string($db,$_POST['Email Address']);
$Password=mysqli_real_escape_string($db,$_POST['Password']);
if(empty($Email )){
array_push($errors,"Email is required");
}
if(empty($Password)){
array_push($errors,"Password is required");
}
if(count($errors)==0){
$Password=md5($Password);
$query="SELECT * FROM student1 where 
Email='$Email' AND 
Password='$Password' ";
$result = mysqli_query($db, $query);
if(mysqli_num_rows($results)==1){
$SESSION['Email']=$Email ;
$SESSION['Success']="You are now logged in";
header(location:index.html);
}
else{
array_push($errors,"wrong Email Address/Password combination");
}
}
}
?>










