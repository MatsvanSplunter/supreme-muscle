<?php

include_once("connect.php");

$dbhost = "localhost";
$dbname = "herorankings";
$dbuser = "bit_academy";
$dbpass = "bit_academy";

try {
    $pdo = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("<p style='background-color: rgba(255,255,255,0.75);'>Connection failed: " . $e->getMessage() . "</p>");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['naam'], $_POST['ww'], $_POST['ww2'])) {
        $naam = trim($_POST['naam']);
        $ww = trim($_POST['ww']);
        $ww2 = trim($_POST['ww2']);

        if (strlen($naam) < 3) {
            echo "<p style='background-color: rgba(255,255,255,0.75);'>Username must be at least 3 characters long</p>";
            exit;
        }

        if (strlen($ww) < 6) {
            echo "<p style='background-color: rgba(255,255,255,0.75);'>Password must be at least 6 characters long</p>";
            exit;
        }

        if ($ww !== $ww2) {
            echo "<p style='background-color: rgba(255,255,255,0.75);'>The password and confirmation must match</p>";
            exit;
        }

        // Controleer of gebruikersnaam al bestaat
        $stmt = $pdo->prepare("SELECT COUNT(*) FROM accounts WHERE gebruikersnaam = :gebruikersnaam");
        $stmt->execute([":gebruikersnaam" => $naam]);
        if ($stmt->fetchColumn() > 0) {
            echo "<p style='background-color: rgba(255,255,255,0.75);'>Username already exists</p>";
            exit;
        }

        // Sla account op in de database
        $hashed_password = password_hash($ww, PASSWORD_DEFAULT);
        $sql = "INSERT INTO accounts (gebruikersnaam, wachtwoord, levels, strength, XP, gold) 
                VALUES (:gebruikersnaam, :wachtwoord, :levels, :strength, :xp, :gold)";
        try {
            $stmt = $pdo->prepare($sql);
            $stmt->execute([
                ":gebruikersnaam" => $naam,
                ":wachtwoord" => $hashed_password,
                ":levels" => 0,
                ":strength" => 0,
                ":xp" => 100,
                ":gold" => 50
            ]);
            header("Location: account.php");
            exit;
        } catch (PDOException $e) {
            echo "<p style='background-color: rgba(255,255,255,0.75);'>Error saving account. Please try again later.</p>";
        }
    } else {
        echo "<p style='background-color: rgba(255,255,255,0.75);'>Please fill in all fields</p>";
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hero Register</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-image: url('img/register.png');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            height: 100vh;
            padding-top: 7%;
        }

        .login-form {
            background-color: rgba(255, 255, 255, 0.7);
            padding: 20px;
            border-radius: 10px;
        }

        .container {
            z-index: 1;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="login-form">
            <form action="account.php">
                <input type="submit" id="button" class="btn btn-primary" value="back">
            </form>
            <form method="post">
                <div class="form-group">
                    <label class='white' for="naam">name</label>
                    <input type="text" name="naam" id="naam" class="form-control">
                </div>
                <div class="form-group">
                    <label for="ww">password</label>
                    <input type="password" name="ww" id="ww" class="form-control">
                </div>
                <div class="form-group">
                    <label for="ww2">verify password</label>
                    <input type="password" name="ww2" id="ww2" class="form-control">
                </div>
                <input type="submit" class="btn btn-primary" name="submit" id="button" value="save">
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>