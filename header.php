<?php  
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PHP Login System</title>
	<!-- echo time() prevents using cached styling -->
	<link rel="stylesheet" type="text/css" href="styles/style.css?<?php echo time(); ?>">
</head>
<body>

<header>
	<nav>
		<ul>
			<li><a href="index.php">Home</a></li>
			<?php

				if(isset($_SESSION['id'])){
					echo "<form action='includes/logout.inc.php'>
						<button>LOGOUT</button>
					</form>";
				} else {
					echo "<form action='includes/login.inc.php' method='POST'>
					<input type='text' name='uid' placeholder='Username'>
					<input type='password' name='pwd' placeholder='Password'>
					<button type='submit'>LOGIN</button>
					</form>
					<li><a href='signup.php'>Sign Up</a></li>";
				}

			?>
		</ul>
	</nav>
</header>