#!/usr/bin/php
<?php
echo "ServerStarted!".PHP_EOL;
require_once('path.inc');
require_once('get_host_info.inc');
require_once('rabbitMQLib.inc');
require_once("dbFunctions.php.inc");

function doLogin($username,$password)
{
<<<<<<< HEAD
=======
	echo "HelloLogin!".PHP_EOL;
>>>>>>> ffd95f06be242307125e83aaddb09e43fd7eeea9
	$login = new connectdb();

	$output = $login->validateLogin($username,$password);

	if($output){
		echo "login successful".PHP_EOL;
		return true;
	}
	else{
		echo "login failed".PHP_EOL;
		return false;
	}
}

function doRegister($username,$password){
	echo "Hello!".PHP_EOL;
	$register = new connectdb();

	$output = $register->register($username,$password);

	if($output){
		echo "registration successful".PHP_EOL;
		return true;
	}
	else{
		echo "registration failed".PHP_EOL;
<<<<<<< HEAD
		echo ($output).PHP_EOL;
=======
>>>>>>> ffd95f06be242307125e83aaddb09e43fd7eeea9
		return false;
	}
}

function requestProcessor($request)
{
  echo "received request".PHP_EOL;
  var_dump($request);
  if(!isset($request['type']))
  {
    return "ERROR: unsupported message type";
  }
  switch ($request['type'])
  {
    case "login":
      return doLogin($request['username'],$request['password']);
    case "register":
      return doRegister($request['username'],$request['password']);
    case "validate_session":
      return doValidate($request['sessionId']);
  }
  return array("returnCode" => '0', 'message'=>"Server received request and processed");
}

<<<<<<< HEAD
//create new server
$server = new rabbitMQServer("testRabbitMQ.ini","testServer");
//process the request
=======
$server = new rabbitMQServer("testRabbitMQ.ini","testServer");

>>>>>>> ffd95f06be242307125e83aaddb09e43fd7eeea9
$server->process_requests('requestProcessor');
exit();
?>

