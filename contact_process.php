<?php

    $to = "info@hopemirror.org";
    $from = $_POST["email"];
    $name = $_POST["name"];
    $subject = $_POST["subject"];
  
    $cmessage = $_POST["message"];

    $headers = "From: $from";
	$headers = "From: " . $from . "\r\n";
	$headers .= "Reply-To: ". $from . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    $msubject = "You have a Enquiry from your HopeMirror Website.";

    $logo = 'img/logo.png';
    $link = 'http://hopemirror.org';

	$body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>Express Mail</title></head><body>";
	$body .= "<table style='width: 100%;'>";
	$body .= "<thead style='text-align: center;'><tr><td style='border:none;' colspan='2'>";
	$body .= "<a href='{$link}'><img src='{$logo}' alt=''></a><br><br>";
	$body .= "</td></tr></thead><tbody><tr>";
	$body .= "<td style='border:none;'><strong>Name:</strong> {$name}</td>";
	$body .= "<td style='border:none;'><strong>Email:</strong> {$from}</td>";
	$body .= "</tr>";
	$body .= "<tr><td style='border:none;'><strong>Subject:</strong> {$msubject}</td></tr>";
	$body .= "<tr><td></td></tr>";
	$body .= "<tr><td colspan='2' style='border:none;'>{$cmessage}</td></tr>";
	$body .= "</tbody></table>";
	$body .= "</body></html>";

	$send = mail($to, $subject, $body, $headers);
	echo "<h1> Thank you ".$name."! <br>Your Message Has Been Sent. </h1> <br> Redirecting...";
	header("refresh:3;url=index.html");


?>