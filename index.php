<?php 

$method = $_SERVER['REQUEST_METHOD'];

// Process only when method is POST
if($method == 'POST'){
	$requestBody = file_get_contents('php://input');
	$json = json_decode($requestBody);

	$text = $json->queryResult->parameters->text;

	switch ($text) {
		case 'barisal':
			$speech = "yes it is barisal circle";
			break;

		case 'dhaka':
			$speech = "yes it is dhaka circle";
			break;

		case 'feni':
			$speech = "yes it is feni circle";
			break;
		
		default:
			$speech = $text." is not our circle";
			break;
	}

	$response = new \stdClass();
	$response->fulfillmentText = $speech;
	$response->source = "webhook";
	echo json_encode($response);
}
else
{
	echo "Method not allowed3";
}

?>
