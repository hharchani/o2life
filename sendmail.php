<?php

if (!isset($query_cans)) {
    exit();
}

require_once "PHPMailer/PHPMailerAutoload.php";

//Create a new PHPMailer instance
$mail = new PHPMailer;
//Tell PHPMailer to use SMTP
$mail->isSMTP();
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 0;
//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';
//Set the hostname of the mail server
$mail->Host = 'smtpout.asia.secureserver.net';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6
//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 465;
//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'ssl';
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "noreply@froogal.in";
//Password to use for SMTP authentication
$mail->Password = "Noreply@froogal123";
//Set who the message is to be sent from
$mail->setFrom('noreply@froogal.in', 'For O2 Life');
//Set an alternative reply-to address
$mail->addReplyTo('badri.ch86@gmail.com', 'O2 Life');
//Set who the message is to be sent to
$mail->addAddress('badri.ch86@gmail.com', 'For O2 Life');
//Set the subject line
$mail->Subject = 'PHPMailer GMail SMTP test';

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
//$mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));
//Replace the plain text body with one created manually


$mail->Body =
"<table>
<tr align=\"center\"><th style=\"text-align:center\"><h4>No. of Cans</h4></th><th style=\"text-align:center\"><h4>Date</h4></th><th style=\"text-align:center\"><h4>time</h4></th></th><th style=\"text-align:center\"><h4>Address</h4></th><th style=\"text-align:center\"><h4>Username</h4></th><th style=\"text-align:center\"><h4>Mobile</h4></th></tr>
<tr>
    <td align=\"center\"><h5>".$cans." </h5></td>
    <td align=\"center\"><h5>".$deldate." </h5></td>
    <td align=\"center\"><h5>".$deltime." </h5></td>
    <td align=\"center\"><h5>".$address." </h5></td>
    <td align=\"center\"><h5>".$username." </h5></td>
    <td align=\"center\"><h5>".$phone." </h5></td>
</tr>
</table>";

$mail->AltBody = "
    $cans Cans
    Date: $deldate
    Time: $deltime
    Address: $address
    Username: $username
    Phone: $phone
    ";


//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}