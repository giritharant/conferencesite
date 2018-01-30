<?php
	session_start();
	if(isset($_SESSION['u_name'])){
		header("location:index2.php");}
?>
<!DOCTYPE html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login</title>
<link rel="stylesheet" href="css/normalize.css">
<link rel="stylesheet" href="css/style.css">
</head>
<body>

<form action="log.php" method="POST" name="form">
  <h1>Login</h1>
  <fieldset>
  
  <label for="name">Roll No:</label>
  <input type="text" id="roll" name="roll_no" onFocus="if(this.value=='') this.value='';" onBlur="if(this.value =='') this.value='';" required />
  
  <label for="password">Password:</label>
  <input type="password" id="password" name="user_password" required />
   
   <a href="forgetpassword.html" style="text-decoration:none;">forget password?</a>
   <label><?php if(isset($_SESSION['error'])) echo "invalid username or password";session_destroy();?></label>
  </fieldset>
  <button type="submit">Submit</button>
  New user <a href="registration.html" style="text-decoration:none;">Register here </a>
</form>

</body>

</html>