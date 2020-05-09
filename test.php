<?php
require 'twilio/Services/Twilio.php';
$account_sid = 'AC309f40559d310b843a5d9f830f9c499e'; 
$auth_token = 'b6ebeb6e0fc94f4ec45f6bbad1707765'; 
$client = new Services_Twilio($account_sid, $auth_token); 
$client->account->messages->create(array(
    'To' => "+919553407411", 
    'From' => "+12678634454", 
    'Body' => "Bookings",  
));
print $message->sid;
