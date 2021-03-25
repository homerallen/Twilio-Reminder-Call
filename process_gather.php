<?php

require_once '/home/dh_9d5e7a/.php/composer/vendor/autoload.php';
use Twilio\TwiML\VoiceResponse;

if ($_REQUEST['Digits'] === '1') {

	$response = new VoiceResponse();
	$response->say('Confirmed!');
	echo $response;  
	
} else if ($_REQUEST['Digits'] === '2') {

	$response = new VoiceResponse();
	$gather = $response->gather(['action' => '/snooze.php',
    'method' => 'GET']);
	$gather->say('Enter in the minutes to snooze for and then hangup.');
	$gather->pause(['length' => 30]);

	$response->say('We didn\'t receive any input. Goodbye!');
	echo $response;

} else {

  	$response = new VoiceResponse();
  	$gather = $response->gather(['action' => '/process_gather.php',
    'method' => 'GET']);
	$gather->say('Press 1 to confirm or 2 to Snooze. Will wait 30 seconds.');
	$gather->pause(['length' => 30]);
	$response->say('We didn\'t receive any input. Goodbye!');

	echo $response;
}

?>