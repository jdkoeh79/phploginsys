<?php

	// https://www.youtube.com/watch?v=e8TP2FERKls&list=PL0eyrZgxdwhwBToawjm9faF1ixePexft-&index=39

	include 'header.php';

	$url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

	if(isset($_SESSION['id'])){
		echo "<div class='msg'><h1>Welcome, ".$_SESSION['uid']."!</h1></div>";
	} elseif (strpos($url, 'error=loginfail') !== false) {
		echo "<div class='msg'><h3>Incorrect Username and/or Password</h3></div>";
	} else {
		echo "<div class='msg'><h3>Please Login or Sign Up</h3></div>";
	}

?>

<br><br>


</body>
</html>