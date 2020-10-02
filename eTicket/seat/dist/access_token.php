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
  
  echo json_decode($curl_response)->access_token;


  ?>