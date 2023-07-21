<?php

if(isset($_POST['submit'])) {
    $firstname = $_POST['vorname'];
    $surname = $_POST['nachname'];
    $mailFrom = $_POST['email'];
    $msg = $_POST['msg'];

    $mailTo = "info@isabell-becher.com";
    $headers = "Von: " . $mailFrom;
    $txt = "Du hast eine neue E-Mail erhalten von " . $firstname. " " . $surname . ".\n\n".$msg; 
    $subject = "Neue Kontaktformular Eintrag von " . $firstname. " " . $surname;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.html?mailsend");
}