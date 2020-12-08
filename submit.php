<?php

$surname = $_POST['surname']; 
$firstName = $_POST['name'];
$emailFrom = $_POST['email'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];
$message = $_POST['message']; 
$emailTo = "nellyanda18@gmail.com";

// validation
$validationOK=true;
if (!$validationOK) {
  echo "Error";
  exit;
};
 
// mise en forme mail
$body = "";
$body .= "Prenom: ";
$body .= $firstName;
$body .= "\n";
$body .= "Nom: ";
$body .= $surname;
$body .= "\n";
$body .= "Email: ";
$body .= $email;
$body .= "\n";
$body .= $phone;
$body .= "\n";
$body .= "Sujet: ";
$body .= $subject;
$body .= "\n";
$body .= "Message: ";
$body .= $message;
$body .= "\n";
 
// envoi email 
$success = mail($emailTo, $subject, $body, "From: <$emailFrom>");

// message success-error
if ($success) {
  echo "Votre message à bien été envoyé.";
} else {
  echo "Une erreur s'est produite à l'envoi de votre message.";
}

?>