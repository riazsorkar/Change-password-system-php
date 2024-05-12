<!DOCTYPE html>
<html>
<head>
	<title>Welcome!!!</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="hero"><h1>Welcome To Login Page</h1></div>
     <form action="login.php" method="post">
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>User Name</label>
     	<input type="text" name="uname" placeholder="User Name"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password"><br>

     	<button type="submit">Login</button>
          <a href="signup.php" class="ca">Create an account</a>
     </form>
</body>
</html>