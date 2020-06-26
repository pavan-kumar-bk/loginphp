<!DOCTYPE html>
<html>
<head>
	<title>My Web Site</title>
</head>
<body>
<header>
<nav>
	<a href="#">
		<img src="img/PKBK.jpg" alt="logo">
	</a>
	<ul>
		<li><a href="index.php">Home</a></li>
		<li><a href="#">Portfollo</a></li>
		<li><a href="#">About Us</a></li>
		<li><a href="#">Contact</a></li>
		</ul>
	</nav>
</header>
<form action="includes/login.inc.php" method="post">
	<input type="text" name="mailuid" placeholder="Username/ E-mail ">
	<input type="password" name="pwd" placeholder="password">
    <button type="submit" name="login-submit">Login</button>
</form>
    <a href="signup.php">Signup</a>
    <form action="includes/logout.inc.php" method="post">
    <button type="submit" name="logout-submit">Logout</button>
</form>
</body>
</html>