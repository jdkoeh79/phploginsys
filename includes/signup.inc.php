<?php
session_start();
include '../dbhandler.php';

// Get signup form input
$first = $_POST['first'];
$last = $_POST['last'];
$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

// Check for empty fields
if(empty($first)){
	header("Location: ../signup.php?error=emptyFirstname");
	exit();
}
if(empty($last)){
	header("Location: ../signup.php?error=emptyLastname");
	exit();
}
if(empty($uid)){
	header("Location: ../signup.php?error=emptyUsername");
	exit();
}
if(empty($pwd)){
	header("Location: ../signup.php?error=emptyPassword");
	exit();
} else {

	// Check if username is available
	$sql = "SELECT uid FROM user WHERE uid='$uid'";
	$result = mysqli_query($conn, $sql);

	// Returns 1 for True (uid already exists), 0 for False
	$uidcheck = mysqli_num_rows($result);

	if ($uidcheck > 0) {
		header("Location: ../signup.php?error=username");
		exit();
	} else {
		// Insert new user into the database user table
		$sql = "INSERT INTO user (first, last, uid, pwd) VALUES ('$first', '$last', '$uid', '$pwd')";

		$result = mysqli_query($conn, $sql);

		header("Location: ../index.php");
	}
}