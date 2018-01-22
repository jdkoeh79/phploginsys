<?php 

$conn = mysqli_connect("localhost", "root", "blah1234", "logintest");

// Only use mysqli_connect_error() for testing!  When you release your site online you have to remove this function.  Otherwise you are prone to SQL injections.  die() kills the connection.
if (!$conn) {
	die("Connection failed: ".mysqli_connect_error());
}