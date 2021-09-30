<?php 
session_start();

include "sql.php";

$user = new query();

if(isset($_POST['submit'])){
	$email = $_POST['email'];
	$pass = $_POST['pass'];

	$auth = $user->login($email, $pass);

	if(!$auth){
    	header('location:plogin.php');
	}
	else{
        setcookie("id", $auth["id"]);
		header('location:hal.php');
	}
}
else{
	header('location:login.php');
}