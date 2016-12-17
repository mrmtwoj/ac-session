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
include_once 'dbconnect.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home | This Page Detail Session</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" >
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
	<link rel="stylesheet" href="font-awesome/css/font-awesome.css" type="text/css" />
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css" />
</head>
<body>

<nav class="navbar navbar-default" role="navigation">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.php">Home Pages</a>
		</div>
		<div class="collapse navbar-collapse" id="navbar1">
			<ul class="nav navbar-nav navbar-right">
				<?php if (isset($_SESSION['usr_id'])) { ?>
				<li><p class="navbar-text">Signed in as <?php echo $_SESSION['usr_name']; ?></p></li>
				<li><a href="logout.php">Log Out</a></li>
				<?php } else { ?>
				<li><a href="login.php">Login</a></li>
				<li><a href="register.php">Sign Up</a></li>
				<?php } ?>
			</ul>
		</div>
	</div>
</nav>
<div class="container">
<div class="well well-sm">
<h3>Session Script Information</h3>
  <p>
  <b>programmer :</b> Mr.mtwoj
  </p>
  <p>
  <b>Project Detail : </b> View all information on the user's system by the browsers 
</p>
    <a target="_black" href="https://twitter.com/MrMtwoj"><f class="fa fa-twitter-square fa-2x" aria-hidden="true"></f></a>
    <a target="_black" href="https://ir.linkedin.com/in/joshani"><f class="fa fa-linkedin-square fa-2x" aria-hidden="true"></f></a>
    <a target="_black" href="https://www.youtube.com/channel/UCWFLKi_xJDjg2kWQNYEXRhQ"><f class="fa fa-youtube-square fa-2x" aria-hidden="true"></f></a>
    <a target="_black" href="https://github.com/mrmtwoj/"><f class="fa fa-github-square fa-2x" aria-hidden="true"></f></a>
</div>
<div class="well well-sm">
<p><b>How Using ?? </b><br> Copy Address On the url Browser :D</p>
<p><b> Show All Dns Settings </b></p>
chrome://net-internals/#dns
<p><b> Setting Plugins </b></p>
chrome://plugins
<p><b> Show cashe Site "Information "</b></p>
chrome://view-http-cache/
<p><b> Show Event Information </b> <b>//Commands :</b> type:SOCKET</p>
chrome://net-internals/#events
<p><b> Show All ID and URL Type by User</b></p>
chrome://net-internals/#waterfall
  </div>
  <div class="well well-sm">
<table class="table table-striped table-inverse">
  <thead>
    <tr>
      <th>Name Service (Privacy)</th>
      <th>Information</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Detail Session Login User</th>
      <td><?php echo $_SESSION['usr_name']; ?></td>
    </tr>
    <tr>
      <th scope="row">Your IP</th>
      <td><?php echo $_SERVER['SERVER_NAME'];?></td>
    </tr>
    <tr>
      <th scope="row">previous session name</th>
      <td><?php
$previous_name = session_name("WebsiteID");
echo "$previous_name";
?></td>
      
      
    </tr>    
	<tr>
      <th scope="row">Time And Show Location</th>
      <td>
	 <time id="demo">
	<script>
    d = new Date();
    document.getElementById("demo").innerHTML = d.toString();
    </script>
	  </td>
      
      
    </tr>
	<tr>
      <th scope="row">PHP List All Session Variables</th>
      <td>
	 <?php
    session_start();
    foreach ($_SESSION as $key=>$val)
    echo $key." <b>and</b> ".$val."";
?>
    </script>
	  </td>
    </tr>

	<tr>
      <th scope="row">Browser CodeName</th>
      <td>
	  <time id="BrowserCodeName">
	  <script>
var txt = "";
txt += "" + navigator.appCodeName + "";
document.getElementById("BrowserCodeName").innerHTML = txt;
</script>
	  </td>
      
      
    </tr>
	<tr>
      <th scope="row">Browser Name</th>
      <td>
	  	  <time id="BrowserName">
	  <script>
var txt = "";
txt += "" + navigator.appName + "";
document.getElementById("BrowserName").innerHTML = txt;
</script>
	  </td>
      
      
    </tr>
	<tr>
      <th scope="row">Browser Version</th>
      <td>
	  		  	  <time id="BrowserVersion">
	  <script>
var txt = "";
txt += "" + navigator.appVersion + "";
document.getElementById("BrowserVersion").innerHTML = txt;
</script>
	  </td>
      
      
    </tr>
	<tr>
      <th scope="row">Cookies Enabled</th>
      <td>
	  	  		  	  <time id="CookiesEnabled">
	  <script>
var txt = "";
txt += "" + navigator.cookieEnabled + "";
document.getElementById("CookiesEnabled").innerHTML = txt;
</script>
	  </td>
      
      
    </tr>
	<tr>
      <th scope="row">Browser Language</th>
      <td>
	  	  	  		  	  <time id="BrowserLanguage">
	  <script>
var txt = "";
txt += "" + navigator.language + "";
document.getElementById("BrowserLanguage").innerHTML = txt;
</script>
	  </td>
      
      
    </tr>
	<tr>
      <th scope="row">Browser Online</th>
      <td>
	  	  	  	  		  	  <time id="BrowserOnline">
	  <script>
var txt = "";
txt += "" + navigator.onLine + "";
document.getElementById("BrowserOnline").innerHTML = txt;
</script>
	  </td>
      
      
    </tr>
	<tr>
      <th scope="row">Platform</th>
      <td>
	  	  	  	  	  		  	  <time id="Platform">
	  <script>
var txt = "";
txt += "" + navigator.platform + "";
document.getElementById("Platform").innerHTML = txt;
</script>
	  </td>
      
      
    </tr>	
	<tr>
      <th scope="row">User-agent header</th>
      <td>
	  	  	  	  	  	  		  	  <time id="User-agentheader">
	  <script>
var txt = "";
txt += "" + navigator.userAgent + "";
document.getElementById("User-agentheader").innerHTML = txt;
</script>
	  </td>
      
      
    </tr>	
	<tr>
      <th scope="row">Operating System</th>
      <td>
	  <?php
$user_agent  = $_SERVER['HTTP_USER_AGENT'];

function getOS() { 
    global $user_agent;
    $os_platform    =   "Unknown OS Platform";
    $os_array       =   array(
                            '/windows nt 10/i'     =>  'Windows 10',
                            '/windows nt 6.3/i'     =>  'Windows 8.1',
                            '/windows nt 6.2/i'     =>  'Windows 8',
                            '/windows nt 6.1/i'     =>  'Windows 7',
                            '/windows nt 6.0/i'     =>  'Windows Vista',
                            '/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
                            '/windows nt 5.1/i'     =>  'Windows XP',
                            '/windows xp/i'         =>  'Windows XP',
                            '/windows nt 5.0/i'     =>  'Windows 2000',
                            '/windows me/i'         =>  'Windows ME',
                            '/win98/i'              =>  'Windows 98',
                            '/win95/i'              =>  'Windows 95',
                            '/win16/i'              =>  'Windows 3.11',
                            '/macintosh|mac os x/i' =>  'Mac OS X',
                            '/mac_powerpc/i'        =>  'Mac OS 9',
                            '/linux/i'              =>  'Linux',
                            '/ubuntu/i'             =>  'Ubuntu',
                            '/iphone/i'             =>  'iPhone',
                            '/ipod/i'               =>  'iPod',
                            '/ipad/i'               =>  'iPad',
                            '/android/i'            =>  'Android',
                            '/blackberry/i'         =>  'BlackBerry',
                            '/webos/i'              =>  'Mobile'
                        );

    foreach ($os_array as $regex => $value) { 

        if (preg_match($regex, $user_agent)) {
            $os_platform    =   $value;
        }

    }   
    return $os_platform;
}
$user_os        =   getOS();
$device_details =   "</strong>".$user_os."";
print_r($device_details);
?>
	  </td>
      
      
    </tr>	
	<tr>
      <th scope="row">Your User</th>
      <td>
	  <?php echo getenv("username"); ?>
	  </td>
	  <tr>
      <th scope="row">Directory User</th>
      <td>
	  <?php echo getenv("HOMEDRIVE") . getenv("HOMEPATH"); ?>
	  </td>
	  <tr>
      <th scope="row">DO NOT TRACK</th>
      <td>
	  <?php
$DNT = 'HTTP_DNT';
if (isset($_SERVER[$DNT]) && $_SERVER[$DNT] == 1) {
	echo "Enabled [<a target='_black' href='https://en.wikipedia.org/wiki/Do_Not_Track'/>Detail</a>]";
}
else {
	echo "Disable";
}
?>
	  </td>
    </tr>
	<tr>
      <th scope="row">flash logic</th>
      <td>
<?php
if(preg_match('/x-shockwave-flash/',$_SERVER['HTTP_ACCEPT'])) {
    echo "Enabled [<a target='_black' href='https://en.wikipedia.org/wiki/Adobe_Shockwave'/>Detail</a>]";
} else {
    echo "Disable";
}
?>  
	  </td>
    </tr>
  </tbody>
</table>
</div>
<div class="well well-sm">
<p><button class="btn btn-info btn-sm" onclick="alert(document.cookie)">Show Session Cookie</button>
<a class="btn btn-info btn-sm" href="./hijack.php?cookie='+document.cookie;">hijack Session</a></p>
<p><b>Detail Session</b></p>
<?php
$myfile = fopen("./log.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("./log.txt"));
fclose($myfile);
?>
</div>
</div>
<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>

