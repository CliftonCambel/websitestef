<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $naam = htmlspecialchars($_POST['naam']);
    $email = htmlspecialchars($_POST['email']);
    $onderwerp = htmlspecialchars($_POST['onderwerp']);
    $bericht = htmlspecialchars($_POST['bericht']);
    
    $to = "ccroozendal@hotmail.com"; // Vervang door het e-mailadres waar je de e-mails naartoe wilt sturen
    $subject = "Nieuw contactformulier bericht: " . $onderwerp;
    $message = "Naam: $naam\nE-mail: $email\nOnderwerp: $onderwerp\nBericht:\n$bericht";
    $headers = "From: $email";
    
    if (mail($to, $subject, $message, $headers)) {
        echo "Bedankt voor je bericht! We nemen zo snel mogelijk contact met je op.";
    } else {
        echo "Er is een fout opgetreden bij het verzenden van je bericht. Probeer het later opnieuw.";
    }
} else {
    echo "Ongeldig verzoek.";
}
?>
