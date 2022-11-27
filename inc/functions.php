<?php
function getBizes(){
    $curl = curl_init(); //Initializes curl
    curl_setopt($curl, CURLOPT_URL, 'https://admin.creditcardfees.ca/api/businesses');
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_HTTPHEADER, [
        'Content-Type: application/json'
    ]); // Sets header information for authenticated requests

    $res = curl_exec($curl);
    curl_close($curl);
    json_dec($res);
}

function submitContactForm($fullName, $emailAddress, $contactReason){
	
    $contactForm = array(
		'data' => array(
        'fullName' => $fullName,
		'emailAddress' => $emailAddress,
		'contactReason' => $contactReason
		)
      );
	  
	  //$contactForm = "{ 'data' { 'fullName': $fullName, 'emailAddress': $emailAddress, 'contactReason': $contactReason } }";

      // Initializes a new cURL session
      $curl = curl_init();

      curl_setopt($curl, CURLOPT_URL, "https://admin.creditcardfees.ca/api/contact-forms");

      curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

      // Set the CURLOPT_POST for POST request
      curl_setopt($curl, CURLOPT_POST, true);
      curl_setopt($curl, CURLOPT_POSTFIELDS,  json_encode($contactForm));

      curl_setopt($curl, CURLOPT_HTTPHEADER, [
          "Content-Type: application/json",
		  "Authorization: Bearer d5faca04c241ebdf56596114422e8c09819cc80eb496813aca928170a35e6e13a51df51cc7196caa659c94faa0ba55bdb609db72503c080bc7e4d8db4d77e17d5f5e1dafb667800e57839a5f94b711f2b69dd80e8b520b0af51bc38eae5cdb0244772e962bc17601062f9036d7f193e00a31fdc264241d91986170a632b8815c"
      ]);
      $res = curl_exec($curl);
      curl_close($curl);
		//print_r($res);

}

function getFAQs(){
    $curl = curl_init(); //Initializes curl
    curl_setopt($curl, CURLOPT_URL, 'https://admin.creditcardfees.ca/api/faqs');
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_HTTPHEADER, [
        'Content-Type: application/json'
    ]); // Sets header information for authenticated requests

    $res = curl_exec($curl);
    curl_close($curl);
    //print_r($res);
}
