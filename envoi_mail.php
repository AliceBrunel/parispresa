<?php

$EmailFrom = $_REQUEST['email'];
$EmailTo = "contact@parispresa.com";
$Subject = "Paris Presa";
$Nom = Trim(stripslashes($_POST['nom']));
$Email = Trim(stripslashes($_POST['email']));
$Message = Trim(stripslashes($_POST['message']));

// validation
$validationOK=true;
if (!$validationOK) {
echo "Error";
exit;
}

// prepare email body text
$Body = "";
$Body .= "Email ";
$Body .= $Email;
$Body .= "\n";
$Body .= "Message ";
$Body .= "\n";
$Body .= "\n";
$Body .= $Message;
$Body .= "\n";
$Body .= $Nom;
$Body .= "\n";


// send email
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

// redirect to success page
if ($success){
echo "Votre message a bien été envoyé";
}
else{
echo "Error";
}
?>