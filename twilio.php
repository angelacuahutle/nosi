<?php

include 'Services/Twilio/Capability.php';
include 'Services/Twilio.php';
$accountSid = 'AC4008e188c7da3cc68a99cf88a0f514ac';
$authToken  = '78e72cf350e860afc29018e42930149a';
if(strpos($_SERVER['HTTP_HOST'], 'localhost') !== false) {
  $accountSid = 'AC766a6346a2dc0d7a0ac9318784efb5ef';
  $authToken  = '546a06cbd96f565fd544d25a11429c58';
}
$token = new Services_Twilio_Capability($accountSid, $authToken);
$client = new Services_Twilio($accountSid, $authToken);
$token->allowClientOutgoing('APd93702a6c483b7ca3041ba2a24705fc3');
