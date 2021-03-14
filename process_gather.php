<?php

require_once '/home/dh_9d5e7a/.php/composer/vendor/autoload.php';
use Twilio\TwiML\VoiceResponse;

if ($_REQUEST['Digits'] === '1') {

	$response = new VoiceResponse();
	$response->say('Confirmed!');
	echo $response;  
	
} else {

  	$response = new VoiceResponse();
  	$gather = $response->gather(['action' => '/process_gather.php',
    'method' => 'GET']);
	$gather->say('Press 1 to confirm. Will wait 5 minutes.');
	$gather->pause(['length' => 300]);
	$response->say('We didn\'t receive any input. Goodbye!');

	echo $response;
}

?>