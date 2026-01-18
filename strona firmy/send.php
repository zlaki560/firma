<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    $to = "emi.tomal@o2.pl";
    $subject = "Nowe zapytanie z formularza - Solid-Bud";

    $body = "Imię i nazwisko: $name\n";
    $body .= "Email: $email\n\n";
    $body .= "Wiadomość:\n$message";

    $headers = "From: formularz@solid-bud.pl\r\n";
    $headers .= "Reply-To: $email\r\n";

    if (mail($to, $subject, $body, $headers)) {
        echo "<h2>Dziękujemy! Wiadomość została wysłana.</h2>";
        echo "<a href='index.html'>Wróć na stronę</a>";
    } else {
        echo "<h2>Błąd! Wiadomość nie została wysłana.</h2>";
    }
}
?>
