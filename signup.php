<?php  
	include 'header.php';
?>

<?php

	if(isset($_SESSION['id'])){
		echo $_SESSION['id'];
	} else {
		echo "<div class='msg'><h3>Join us!</h3></div>";
	}
	
?>

<br>

<?php

	if(isset($_SESSION['id'])){
		echo "<div class='msg'>You are already logged in!</div>";
	} else {
		echo "<form id='signup' action='includes/signup.inc.php' method='POST'>
			<input type='text' name='first' placeholder='Firstname'><br>
			<input type='text' name='last' placeholder='Lastname'><br>
			<input type='text' name='uid' placeholder='Username'><br>
			<input type='password' name='pwd' placeholder='Password'><br>
			<button type='submit' class='btn'>SIGN UP</button>
		</form>";
	}

	// Check for empty signup fields error and echo appropriate message
	$url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	
	if (strpos($url, 'error=emptyFirstname') !== false) {
		echo "<div class='msg'><h3>First name required.</h3></div>";
	}
	if (strpos($url, 'error=emptyLastname') !== false) {
		echo "<div class='msg'><h3>Last name required.</h3></div>";
	}
	if (strpos($url, 'error=emptyUsername') !== false) {
		echo "<div class='msg'><h3>Username required.</h3></div>";
	}
	if (strpos($url, 'error=emptyPassword') !== false) {
		echo "<div class='msg'><h3>Password required.</h3></div>";
	}

	// Check for username already exists error
	if (strpos($url, 'error=username') !== false) {
		echo "<div class='msg'><h3>username already exists</h3></div>";
	}
?>

</body>
</html>