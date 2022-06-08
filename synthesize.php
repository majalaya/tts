<?php
include("config.php");

$postData = [
   "voice_code" => $_POST['voice'],
   "text" => $_POST['text'],
   "output_type" => "base64"
];

$curl = curl_init();
curl_setopt_array($curl, [
	CURLOPT_URL => "https://cloudlabs-text-to-speech.p.rapidapi.com/synthesize",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "POST",
	CURLOPT_POSTFIELDS => http_build_query($postData),
	CURLOPT_HTTPHEADER => [
		"X-RapidAPI-Host: cloudlabs-text-to-speech.p.rapidapi.com",
		"X-RapidAPI-Key: $apiKey",
		"content-type: application/x-www-form-urlencoded"
	],
]);

$response = curl_exec($curl);
$data = json_Decode($response);

if(!isset($data->status)){
   if(!isset($data->message)){
      $error = "server error";
   }else{
      $error = $data->message;
   }
}else{
   if($data->status == "rror"){
      $error = $data->message;
   }
}

if(isset($error)){
   echo json_encode([
      "status" => "error",
      "message" => $error
   ]);
}else{
   echo json_encode([
      "status" => "success",
      "audio_base64" => $data->result->audio_base64
   ]);
}