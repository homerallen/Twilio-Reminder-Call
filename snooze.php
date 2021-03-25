<?php

require_once '/home/dh_9d5e7a/.php/composer/vendor/autoload.php';
use Twilio\TwiML\VoiceResponse;

sleep ((int)$_REQUEST['Digits'] * 60);

include 'Call.php';

?>