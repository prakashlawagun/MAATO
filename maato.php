<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="auth.css">
</head>
<body>
     <marquee behavior="scroll" class="move"><h1>"Protect Soil And Make it Strong."</h1></marquee>
     <form action="login.php" method="post">
     	<h2>LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>Email</label>
     	<input type="email" name="email" placeholder="Email"  required><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password"  required><br>

     	<button type="submit">Login</button>
          <a href="signup.php" class="ca">Create an account</a><br>
           <a href="index.php" class="ca">Go back</a>
     </form>
</body>
</html>