<?php
//curl fetching data 
 $ch = curl_init();
 
 //headers
 $headers = [
    "Authorization: Client-ID 5i2V42Xq6sFwzyBGapXYcoHZtKsShcNzcNDiJm6OKlM"
 ];

 $response_headers = [];

 $header_callback = function($ch, $header) use (&$response_headers) {

    $len = strlen($header);
    //exploding parts of header
    $parts = explode(":", $header, 2);

    if(count($parts)<2) {
        return $len;
    }


    $response_headers[$parts[0]] = trim($parts[1]);

    return $len;
 };

 curl_setopt_array($ch, [
    CURLOPT_URL => "https://api.unsplash.com/photos/random",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPHEADER => $headers,//connecting to headers request
    CURLOPT_HEADERFUNCTION => $header_callback
 ]);

 $response = curl_exec($ch);

 //getting the status of a call
 $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
 

 curl_close($ch);


 echo $status_code . "\n";
 print_r($response_headers);
 echo $response;


?>
