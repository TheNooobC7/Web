<?php
session_start();
$username = "";
$email = "";
$errors = array();


$db = mysqli_connect('localhost','root','','loginsystemtut');

if(isset($_POST['register'])) {
	$username = mysqli_real_escape_string($db,$_POST['username']);
	$email = mysqli_real_escape_string($db,$_POST['email']);
	$password_1 = mysqli_real_escape_string($db,$_POST['password_1']);
	$password_2 = mysqli_real_escape_string($db,$_POST['password_2']);


if (empty($username)) {
	array_push($errors, "Username is required");	
}
if (empty($email)) {
	array_push($errors, "Email is required");	
}
if (empty($password_1)) {
	array_push($errors, "Password is required");	
}

if ($password_1!= $password_2) {
	array_push($errors, "The two passwords don't match");

}

if (count($errors)==0) {
	$password = md5($password_1);
	$sql="insert into users(uidUsers,emailUsers,pwdUsers) values('$username','$email','$password')";
	mysqli_query($db,$sql);
	$_session['username']= $username;
	$_session['success'] = "you are logged in";
	header('location: home.php');  


	}
}

	if(isset($_POST['login'])){
		$username = mysqli_real_escape_string($db,$_POST['username']);
	
	$password = mysqli_real_escape_string($db,$_POST['password']);


if (empty($username)) {
	array_push($errors, "Username is required");	
}
if (empty($password)) {
	array_push($errors, "password is required");	
}
if (count($errors) == 0) 
{
	$password = md5($password);
	$query = "SELECT * FROM users WHERE uidUsers='$username' AND pwdUsers='$password'";
	$result = mysqli_query($db,$query);
	
	if(mysqli_num_rows($result) ==1)
	{
	$_session['username']= $username;
	$_session['success'] = "you are logged in";
	header('location: home.php');

	}
	else{
		array_push($errors,"wrong password/wrong username");
	header('location: login.php'); }
}
}








if(isset($_Get['logout']))
{
	session_destroy();
	unset($_session['username']);
	header('location:login.php');
	
}





 ?> 