<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://gatewaystaging.payscout.com/api/process",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "client_username={yourUsername}&client_password={yourPassword}&client_token=token&processing_type=CAPTURE&currency=USD&initial_amount=99.99&original_transaction_id=A000133RY3R&billing_invoice_number=1999",
  CURLOPT_HTTPHEADER => array(
    "cache-control: no-cache",
    "content-type: application/x-www-form-urlencoded"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}
?>
