<!-- 
#############################################################################################################################                                  

88b           d88  88888888ba                88b           d88  888888888888  I8,        8        ,8I    ,ad8888ba,       88  
888b         d888  88      "8b               888b         d888       88       `8b       d8b       d8'   d8"'    `"8b      ""  
88`8b       d8'88  88      ,8P               88`8b       d8'88       88        "8,     ,8"8,     ,8"   d8'        `8b         
88 `8b     d8' 88  88aaaaaa8P'               88 `8b     d8' 88       88         Y8     8P Y8     8P    88          88     88  
88  `8b   d8'  88  88""""88'                 88  `8b   d8'  88       88         `8b   d8' `8b   d8'    88          88     88  
88   `8b d8'   88  88    `8b                 88   `8b d8'   88       88          `8a a8'   `8a a8'     Y8,        ,8P     88  
88    `888'    88  88     `8b       888      88    `888'    88       88           `8a8'     `8a8'       Y8a.    .a8P      88  
88     `8'     88  88      `8b      888      88     `8'     88       88            `8'       `8'         `"Y8888Y"'       88  
                                                                                                                         ,88  
                                                                                                                       888P"  
##############################################################################################################################
 #   twitter.com/MrMtwoj
 #   linkedin.com/in/joshani
 #   youtube.com/channel/UCWFLKi_xJDjg2kWQNYEXRhQ
 #   github.com/mrmtwoj
###############################################################################################################################
 -->
<?php
session_start();
 $lifetime=600;
 session_set_cookie_params($lifetime);
if(isset($_SESSION['usr_id'])!="") {
	header("Location: index.php");
}

include_once 'dbconnect.php';

//check if form is submitted
if (isset($_POST['login'])) {

	$email = mysqli_real_escape_string($con, $_POST['email']);
	$password = mysqli_real_escape_string($con, $_POST['password']);
	$result = mysqli_query($con, "SELECT * FROM users WHERE email = '" . $email. "' and password = '" . md5($password) . "'");

	if ($row = mysqli_fetch_array($result)) {
		$_SESSION['usr_id'] = $row['id'];
		$_SESSION['usr_name'] = $row['name'];
		header("Location: index.php");
	} else {
		$errormsg = "Incorrect Email or Password!!!";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Session Check Login</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" >
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
</head>
<body>

<nav class="navbar navbar-default" role="navigation">
	<div class="container-fluid">
		<!-- add header -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.php">Home Pages</a>
		</div>
		<!-- menu items -->
		<div class="collapse navbar-collapse" id="navbar1">
			<ul class="nav navbar-nav navbar-right">
				<li class="active"><a href="login.php">Login</a></li>
				<li><a href="register.php">Sign Up</a></li>
			</ul>
		</div>
	</div>
</nav>

<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4 well">
			<form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="loginform">
				<fieldset>
					<legend>Login</legend>
					
					<div class="form-group">
						<label for="name">Email (Default : mr.mtwoj@gmail.com)</label>
						<input type="text" name="email" placeholder="Your Email" required class="form-control" />
					</div>

					<div class="form-group">
						<label for="name">Password (Default : admin)</label>
						<input type="password" name="password" placeholder="Your Password" required class="form-control" />
						<p style="margin-top:2%;">e10adc3949ba59abbe56e057f20f883e</p>
					</div>

					<div class="form-group">
						<input type="submit" name="login" value="Login" class="btn btn-primary" />
					</div>
				</fieldset>
			</form>
			<span class="text-danger"><?php if (isset($errormsg)) { echo $errormsg; } ?></span>
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-4 col-md-offset-4 text-center">	
		New User? <a href="register.php">Sign Up Here</a>
		</div>
	</div>
</div>

<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
