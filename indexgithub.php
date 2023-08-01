<?php
//curl fetching data 
 $ch = curl_init();
 
 //headers
 $headers = [
    "Accept: application/vnd.github+json",
    "Authorization: token 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",
    "User-Agent: valerijadrinek"
 ];

 $response_headers = [];

 
 curl_setopt_array($ch, [
    CURLOPT_URL => "https://api.github.com/user/starred/httpie/cli",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPHEADER => $headers,//connecting to headers request
    CURLOPT_CUSTOMREQUEST => "PUT"//GET-will check if starred, PUT-will add a star, DELETE will remove a star
    
 ]);

 $response = curl_exec($ch);

 //getting the status of a call
 $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
 

 curl_close($ch);


 echo $status_code . "\n";
 echo $response;


?>
