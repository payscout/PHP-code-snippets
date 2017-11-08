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
  CURLOPT_POSTFIELDS => "client_username={yourUsername}&client_password={yourPassword}&client_token=token&processing_type=SALE&billing_first_name=John&billing_last_name=Doe&billing_phone_number=2455464&billing_address_line_1=Innovation%20Street%201&billing_address_line_2=Brilliance%20Building%2C%20Apt.%2022&billing_city=Palo%20Alto&billing_state=CA&billing_postal_code=94024&billing_country=US&billing_email_address=demo%40payscout.com&ip_address=98.97.129.52&billing_date_of_birth=19801229&billing_social_security_number=000000000&expiration_month=10&expiration_year=2022&account_number={yourTestCardNumber}&cvv2=123&currency=USD&initial_amount=99.99&shipping_first_name=Amazing&shipping_last_name=Jane&shipping_email_address=demoshipping%40payscout.com&shipping_cell_phone_number=74477464&shipping_phone_number=7447746400&shipping_address_line_1=Innovation%20Street%201&shipping_address_line_2=Brilliance%20Building%2C%20Apt.%2022&shipping_city=Palo%20Alto&shipping_state=CA&shipping_postal_code=94024&shipping_country=US&pass_through=10%2312%2313&billing_invoice_number=1999",
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
