<?php
$ime_posiljaoca = $_POST["ime"];
$email_posiljaoca = $_POST["email"];
$naslov_poruke = $_POST["naslov"];
$poruka = $_POST["poruka"];
$posiljalac = "From: $email_posiljaoca";
mail("darialazarevic@gmail.com", $ime_posiljaoca, $naslov_poruke, $poruka, $posiljalac);
?>
<html>
<head>
<title>Poruka je uspešno poslata</title>
</head>
<body>
<h4>Zahvaljujemo! Vaša poruka je uspešno poslata.</h4>
<a href="https://www.alexgim.rs">Kliknite ovde</a>
</body>
</html>