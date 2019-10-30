<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>About you!</title>
</head>
<body>
<h1>About you!</h1>
<?PHP
    $server =  $_SERVER["SERVER_NAME"];
    $ip_server = $_SERVER["SERVER_ADDR"];
    $server_software = $_SERVER["SERVER_SOFTWARE"];
    $request_time = $_SERVER["REQUEST_TIME"];
    $date = date(DATE_RSS, $request_time);
	$ip =  $_SERVER["REMOTE_ADDR"];
	$ua =  $_SERVER["HTTP_USER_AGENT"];
    echo "<p>The server is: $server</p>";
    echo "<p>The server's IP address is: $ip_server</p>";
    echo "<p>The server's software is: $server_software";
    echo "<p>The server's request time is: $date";
	echo "<p>Your IP address is: $ip</p>";
	echo "<p>Your browser is: $ua</p>";
?>
</body>
</html>