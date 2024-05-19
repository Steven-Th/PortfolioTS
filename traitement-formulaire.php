<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    
    // Adresse e-mail où vous souhaitez recevoir les messages
    $recipient = "stthomassin@stpbb.org";
    
    // Sujet de l'e-mail
    $email_subject = "Nouveau message de $name: $subject";
    
    // Construction du corps de l'e-mail
    $email_body = "Vous avez reçu un nouveau message de $name ($email):\n\n";
    $email_body .= "Sujet: $subject\n";
    $email_body .= "Message:\n$message";
    
    // En-têtes de l'e-mail
    $headers = "De: $name <$email>";
    
    // Envoi de l'e-mail
    if (mail($recipient, $email_subject, $email_body, $headers)) {
        echo "<p>Merci, votre message a été envoyé avec succès.</p>";
    } else {
        echo "<p>Désolé, une erreur s'est produite lors de l'envoi de votre message. Veuillez réessayer plus tard.</p>";
    }
}
?>
