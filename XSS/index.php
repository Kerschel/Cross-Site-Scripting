<?php
if(isset($_COOKIE['PHPLOGIN'])){
  header("location:validate.php");
}
    // $_SESSION['name'] = "hi";
    // // echo "<script>alert('hey there')</script>";
    // $time = time();
// echo $time;
   session_start();
   session_get_cookie_params();

?>


<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>Cookie Monster</title>

    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="js/prefixfree.min.js"></script>

</head>

<body>

  <div class="body"></div>
		<div class="grad"></div>
		<div class="header">
			<div>RBC<span>Bank</span></div>
		</div>
		<br>
		<div class="login">
			<form method='post' action ='validate.php'>
            	<input id = "name" type="text" placeholder="username" name="user"><br>
				<input id="pw" type="password" placeholder="password" name="password"><br>
				<input type="submit" value="Login">
            </form>
		</div>

  <script src='http://codepen.io/assets/libs/fullpage/jquery.js'></script>
<script>


</script>
</body>

</html>