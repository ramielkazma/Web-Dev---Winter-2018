<?php

$expiry = 60 + time();
$estTime = (new DateTime('America/New_York'))->format('h:i:s - d/m/Y');
setcookie('lastvisit',$estTime,$expiry);;

if(isset($_COOKIE['lastvisit']))
{	
	$cookie = ++$_COOKIE['count'];
    setcookie("count", $cookie);
	echo "You have viewed this page " .$_COOKIE['count']. " times.<br/>";

	$visit = $_COOKIE['lastvisit'];
	echo "Last visited: $visit";
}

else
{
	echo "Welcome! You are a new customer here.";
	
	$cookie = 1;
    setcookie("count", $cookie);
}

?>