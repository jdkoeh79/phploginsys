<?php
session_start();
include '../dbhandler.php';

$_SESSION['error'] = 0;

$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

$sql = "SELECT * FROM user WHERE uid='$uid' AND pwd='$pwd'";

$result = mysqli_query($conn, $sql);

if (!$row = mysqli_fetch_assoc($result)) {
	$_SESSION['error'] = 1;
	header("Location: ../index.php?error=loginfail");
	exit();
} else {
	$_SESSION['id'] = $row['id'];
	$_SESSION['uid'] = $row['uid'];
}

header("Location: ../index.php");