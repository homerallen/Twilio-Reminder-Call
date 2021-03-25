<?php
require_once '/home/dh_9d5e7a/.php/composer/vendor/autoload.php';
use Twilio\TwiML\VoiceResponse;
use Twilio\Rest\Client;

if($_REQUEST['AnsweredBy'] === 'machine_start'){
	sleep(20);

	include 'Call.php';

} else {
	$response = new VoiceResponse();
	$gather = $response->gather(['action' => '/process_gather.php',
	'method' => 'GET']);
	$gather->say('Press 1 to confirm or 2 to Snooze. Will wait 5 minutes.');
	$gather->pause(['length' => 300]);
	$response->say('We didn\'t receive any input. Goodbye!');
	echo $response;
}
?>