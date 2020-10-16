<?php 
 $toEmail = "info@goenchoxetkar.com";
 $mailHeaders = "From: " . $_POST["name"] . "<". $_POST["email"] .">\r\n";
 if(mail($toEmail, "CONTACT FORM GOENCHOXETKAR ~ " . htmlentities($_POST["subject"]), htmlentities($_POST["message"]), $mailHeaders)) {
	 print "<p class='success'>Mail Sent.</p>";
 } else {
	 print "<p class='Error'>Problem in Sending Mail.</p>";
 }