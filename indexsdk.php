<?php
//curl fetching data 

$api_key = "sk_test_51NZvXiAU78Q91WVcHeYCHMVP6u3spJi2GpIe4bti7G79j2XJlzTRxUVwKNH0GHaGkvIqgf1x0sj0RR5iqsNQpZrP00NEXFhwBk";
 $ch = curl_init();
 
$data = [
    "name" => "Alfred",
    "email" => "alfred@gmail.com"
];
 
 curl_setopt_array($ch, [
    CURLOPT_URL => "https://api.stripe.com/v1/customers",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_USERPWD => $api_key,
    CURLOPT_POSTFIELDS => http_build_query($data)
 ]);

 $response = curl_exec($ch);
 curl_close($ch);

 echo $response;

