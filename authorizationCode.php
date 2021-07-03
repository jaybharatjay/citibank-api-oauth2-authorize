<?php

$client_id = "MY CLIENT ID";

//SandboxUser1/P@ssUser1$

$scope='accounts_details_transaction';
$scope='accounts_routing_number';
$scope='accounts_statements';
$scope='accounts_tax_statements';
$scope='customers_profiles';

$url = "https://sandbox.apihub.citi.com/gcb/api/authCode/oauth2/authorize?response_type=code&client_id=$client_id&scope=$scope&countryCode=US&businessCode=GCB&locale=en_US&state=12093&redirect_uri=http://localhost/swaggle/rd/citibank/";

echo "<br>URL generated=".$url;

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => $url,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "accept: application/json"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);
echo "<br>Response=";
print_r($response);
print_r($err);
curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}



?>
