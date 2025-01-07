<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inlogknop op achtergrondfoto</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    /* CSS-stijl voor achtergrondfoto */
    body {
      background-image: url('img/start.jpg');
      background-size: cover; /* Zorg ervoor dat de afbeelding de volledige achtergrond bedekt */
      background-repeat: no-repeat; /* Voorkomt dat de afbeelding herhaalt */
      height: 100vh; /* Hiermee maak je de afbeelding even groot als het venster van de browser */
      margin: 0; /* Verwijder de standaardmarges van de body */
      padding: 0; /* Verwijder de standaardopvulling van de body */
      display: flex; /* Hiermee wordt flexbox-layout toegepast op de body */
      justify-content: center; /* Hiermee wordt de inhoud in het midden van de body horizontaal uitgelijnd */
      align-items: center; /* Hiermee wordt de inhoud in het midden van de body verticaal uitgelijnd */
    }
    .login-button {
      padding: 10px 20px; /* Optionele stijl voor de inlogknop */
      background-color: #007bff; /* Optionele stijl voor de achtergrondkleur van de knop */
      color: #fff; /* Optionele stijl voor de tekstkleur van de knop */
      border: none; /* Optionele stijl voor de rand van de knop */
      border-radius: 5px; /* Optionele stijl voor de afronding van de randen van de knop */
      font-size: 18px; /* Optionele stijl voor de tekstgrootte van de knop */
    }
  </style>
</head>
<body>

<!-- Inlogknop -->
<form action="account.php">
    <input type="submit" class="login-button" value="Inloggen">
</form>

<!-- Bootstrap JS en afhankelijkheden -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>

<?php

session_start();
$_SESSION['account'] = '';