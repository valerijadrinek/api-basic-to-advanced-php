<?php   

$ch = curl_init();



curl_setopt_array($ch, [
    CURLOPT_URL => "https://api.github.com/gists/6c3c2027ffaeba20106f25bbbe8ff634",
    CURLOPT_RETURNTRANSFER => true, //returns response as a string
    CURLOPT_USERAGENT => "valerijadrinek"
 ]);

 $response = curl_exec($ch);


 

curl_close($ch);

$data = json_decode($response, true);
print_r($data);
/*foreach($data as $gist) {
    echo $gist['id'] . "-". $gist['description'] . "\n";
}*/


?>