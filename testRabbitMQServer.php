#!/usr/bin/php
<?php
echo "ServerStarted!".PHP_EOL;
require_once('path.inc');
require_once('get_host_info.inc');
require_once('rabbitMQLib.inc');

function requestProcessor($request)
{
<<<<<<< HEAD
	
  switch ($request["data"])
  {
	case "login":
		$client = new rabbitMQClient("testRabbitMQ_DB.ini","testServer");
		//send data to database and store response
=======
  echo "received request".PHP_EOL;
  switch ($request["type"])
  {
	case "login":
		$client = new rabbitMQClient("testRabbitMQ_DB.ini","testServer");
>>>>>>> 88f287cd5bf03d2b9ca2cf6f5ab7ed121890bf04
		$response = $client->send_request($request);
	break;
	case "register":
		$client = new rabbitMQClient("testRabbitMQ_DB.ini","testServer");
<<<<<<< HEAD
		//send data to database and store response
		$response = $client->send_request($request);
	break;
	case "addToWatchlist":
		$client = new rabbitMQClient("testRabbitMQ_DB.ini","testServer");
		//send data to database and store response
		$response = $client->send_request($request);
	break;
	case "removeFromWatchlist":
		$client = new rabbitMQClient("testRabbitMQ_DB.ini","testServer");
		//send data to database and store response
		$response = $client->send_request($request);
	break;
	case "getListingsFromWatchlist":
		$client = new rabbitMQClient("testRabbitMQ_DB.ini","testServer");
		//send data to database and store response
=======
>>>>>>> 88f287cd5bf03d2b9ca2cf6f5ab7ed121890bf04
		$response = $client->send_request($request);
	break;
	case "listings":
		$client = new rabbitMQClient("testRabbitMQ_DMZ.ini","testServer");
<<<<<<< HEAD
		//send data to DMZ and store response
		$response = $client->send_request($request);
	break;
	case "watchlist":
		$client = new rabbitMQClient("testRabbitMQ_DMZ.ini","testServer");
		//send data to DMZ and store response
		$response = $client->send_request($request);
	break;
	case "recommendedListings":
		$client = new rabbitMQClient("testRabbitMQ_DMZ.ini","testServer");
		//send data to DMZ and store response
		$response = $client->send_request($request);
	break;
	case "getTodaysListings":
		$client = new rabbitMQClient("testRabbitMQ_DMZ.ini","testServer");
		//send data to DMZ and store response
		$response = $client->send_request($request);
	break;
	case "addSkill":
		$client = new rabbitMQClient("testRabbitMQ_DB.ini","testServer");
		//send data to database and store response
		$response = $client->send_request($request);
	break;
	case "removeSkill":
		$client = new rabbitMQClient("testRabbitMQ_DB.ini","testServer");
		//send data to database and store response
		$response = $client->send_request($request);
	break;
	case "getSkills":
		$client = new rabbitMQClient("testRabbitMQ_DB.ini","testServer");
		//send data to database and store response
=======
>>>>>>> 88f287cd5bf03d2b9ca2cf6f5ab7ed121890bf04
		$response = $client->send_request($request);
	break;
  }
  
  return $response;
  //return array("stats" => '0', 'message'=>"Server received request and processed");
}
<<<<<<< HEAD
//create new rabbitmq server instance
$server = new rabbitMQServer("testRabbitMQ.ini","testServer");
//handle all incoming requests
=======

$server = new rabbitMQServer("testRabbitMQ.ini","testServer");

>>>>>>> 88f287cd5bf03d2b9ca2cf6f5ab7ed121890bf04
$server->process_requests('requestProcessor');
exit();
?>

