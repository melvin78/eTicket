
<?php
$consumer_key ='1hJ6yqBAEqYO44g6HFEO4e52GqkbBv68 ';
$consumer_secret = 'E6SSQScpULzCIspG';
$headers = ['Content-Type:application/json; charset-utf8'];

$url = 'https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials';


  
  $curl = curl_init();
  curl_setopt($curl, CURLOPT_URL, $url);
  $credentials = base64_encode('1hJ6yqBAEqYO44g6HFEO4e52GqkbBv68:E6SSQScpULzCIspG');
  curl_setopt($curl, CURLOPT_HTTPHEADER, array('Authorization: Basic '.$credentials)); //setting a custom header
  curl_setopt($curl, CURLOPT_HEADER, false);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
  curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
  
  $curl_response = curl_exec($curl);
  
 $access_token = json_decode($curl_response)->access_token;
echo $access_token;

  


$url = 'https://sandbox.safaricom.co.ke/mpesa/c2b/v1/registerurl';
  
  $curl = curl_init();
  curl_setopt($curl, CURLOPT_URL, $url);
  curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type:application/json','Authorization:Bearer '.$access_token)); //setting custom header
  
  
  $curl_post_data = array(
    //Fill in the request parameters with valid values
    'ShortCode' => '  174379 ',
    'ResponseType' => ' Confirmed',
    'ConfirmationURL' => 'https://localhost/eTicket/seat/dist/confirmation_url.php',
    'ValidationURL' => 'https://localhost/eTicket/seat/dist/validation_url.php'
  );
  
  $data_string = json_encode($curl_post_data);
  
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($curl, CURLOPT_POST, true);
  curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);
  
  $curl_response = curl_exec($curl);
  print_r($curl_response);
  
  echo $curl_response;
  ?>