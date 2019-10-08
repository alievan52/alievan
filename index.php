<?php 

$method = $_SERVER['REQUEST_METHOD'];

// Process only when method is POST
if($method == 'POST'){
	$requestBody = file_get_contents('php://input');
	$json = json_decode($requestBody);

	$text = $json->queryResult->parameters->text;

	switch ($text) {
		case 'barisal':
			$speech = "Barishal Circle: Ph: 0431-2177479, Mob: 01712-187039, 01682-346216, PBX: , Email: gmbarisal@agranibank.org";
			break;

		case 'chattogram':
			$speech = "Chattogram Circle: Ph: 031-721663, 9572045, Mob: 01756630000, 01682-346216, PBX: , Email: gmbarisalgmchittagong@agranibank.org, jaharroy1961@gmail.com@agranibank.org";
			break;

		case 'cumilla':
			$speech = "Cumilla Circle: Ph: 081-72570, Mob: 01708-122205, PBX: , Email: gmcomilla@agranibank.org";
			break;
			
		case 'faridpur':
			$speech = "Faridpur Circle: Ph: 0631-67214, 0631-67215, Mob: , PBX: , Email: gmfaridpur@agranibank.org";
			break;

 case 'khulna':
			$speech = "Khulna Circle: Ph: 041-720265, Mob: 01701-204500, PBX: , Email: dgmkhulnacircle@agranibank.org";
			break;
case 'mymenshing':
			$speech = "Mymenshing Circle: Ph: 091-51563, 091-51543, Mob: , PBX: , Email: dgmmymensingh@agranibank.org";
			break;
case 'rajshahi':
			$speech = "Rajshahi Circle: Ph: 0721-762165, Mob: 01708122215, PBX: , Email: wali.agrani@yahoo.com, gmrajshahi@agranibank.org";
			break;	
case 'rangpur':
			$speech = "Rangpur Circle: Ph: 031-721663, 0521-53161, 0521-52219, 0521-61610, 0521-52368, Mob: , PBX: , Email: gmrangpur.abl@gmail.com, rangcircleabl@yahoo.com";
			break;
case 'sylhet':
			$speech = "Sylhet Circle: Ph: 0821-72555, 0821-726374, Mob: , PBX: , Email: dgmsylhetcircle@agranibank.org";
			break;	

case 'dhaka circle 1':
			$speech = "Dhaka Circle 1: Ph: 9574698, Mob: 01793-411441, PBX: 629, Email: gmdhaka1@agranibank.org";
			break;

case 'dhaka circle 2':
			$speech = "Dhaka Circle 2: Ph: 9573103, Mob: 01727547340, PBX: 614 , Email: gmdhaka2@agranibank.org";
			break;			
		
		default:
			$speech = $text." is not a valid circle name! Please mention correct name with circle keyword";
			break;
	}

	$response = new \stdClass();
	$response->fulfillmentText = $speech;
	$response->source = "webhook";
	echo json_encode($response);
}
else
{
	echo "Method not allowed---";
}

?>
