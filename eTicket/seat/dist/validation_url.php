<?php

//0 means transaction has been validated
header('Content-type: application/json');


$response = '{

	"ResultCode": 0,
	"ResultDesc": "Confirmation Received Successfully"
}';


//data

$mpesa_response = file_get_contents('php://input');


//logging the response


$log_file = "M_PESAResponse.txt";
$json_mpesa_response = json_decode($mpesa_response,true);

//write to file

$log = fopen($log_file, "a");

fwrite($log, $mpesa_response);
fclose($log);

echo $response;
?>