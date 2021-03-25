
<?php

require_once '/home/dh_9d5e7a/.php/composer/vendor/autoload.php';
use Twilio\TwiML\VoiceResponse;
use Twilio\Rest\Client;

$sid = getenv("TWILIO_ACCOUNT_SID");
	$token = getenv("TWILIO_AUTH_TOKEN");
	$twilio = new Client($sid, $token);

	$twilio_to = getenv("TWILIO_TO");
	$twilio_from = getenv("TWILIO_FROM");

	$call = $twilio->calls
	               ->create($twilio_to, // to
	                        $twilio_from, // from
	                        [
								"machineDetection" => "Enable",
								"url" => "http://homerallen.com/simple_gather.php"
	                        ]
	               );

?>