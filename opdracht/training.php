<?php

include_once("connect.php");

$dbhost = "localhost";
$dbname = "herorankings";
$dbuser = "bit_academy";
$dbpass = "bit_academy";

$bought = false;
$obtainedheros = [];
$broke = false;
 
session_start();

try {
    $pdo = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->prepare('SELECT * FROM accounts WHERE gebruikersnaam = :username');
    $stmt->execute([':username' => $_SESSION['account']]);
    $account = $stmt->fetch();

    $gold = round(10 * ($account['strength'] * 1.5));
    $xp = round(10 * ($account['levels'] * 2));

    if (isset($_POST['strength']) && $account['gold'] >= $gold) {
        $newStrength = $account['strength'] + 1;
        $newGold = $account['gold'] - $gold;

        $updateStmt = $pdo->prepare("UPDATE `accounts` SET `strength` = :strength, `gold` = :gold WHERE gebruikersnaam = :username");
        $updateStmt->execute([
            ":strength" => $newStrength,
            ":gold" => $newGold,
            ":username" => $_SESSION['account']
        ]);
        header("location: training.php");
    }

    if (isset($_POST['level']) && $account['XP'] >= $xp) {
        $newLevel = $account['levels'] + 1;
        $newXP = $account['XP'] - $xp;

        $updateStmt = $pdo->prepare("UPDATE `accounts` SET `levels` = :levels, `XP` = :xp WHERE gebruikersnaam = :username");
        $updateStmt->execute([
            ":levels" => $newLevel,
            ":xp" => $newXP,
            ":username" => $_SESSION['account']
        ]);
        header("location: training.php");
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Training</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url('https://cdn.discordapp.com/attachments/1172090829419065405/1207332504562835516/sdojqoisd.jpg?ex=65df4304&is=65ccce04&hm=16d7e5431217ef3fc50e92f02907c105869d6602065803eea051e444ae68b140');
            background-size: cover;
            background-position: center;
            height: 100vh;
            margin: 0;
            padding: 0;
        }
    </style>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header class="header">
        <div class="header-section">
            <div class="header-left">
                <img src="img/hero.jpg" alt="#">
            </div>
        </div>

        <div class="header-section">
            <div class="header-middle">
                <a class="kleur" href="index.php">Home</a>
            </div>
        </div>
        <div class="header-middle">
            <a class="kleur" href="leaderboard.php">Leaderboard</a>
        </div>

        <div class="header-middle">
            <a class="kleur" href="hero.php">Hero's</a>
        </div>

        <div class="header-middle">
            <a class="kleur" href="villains.php">Villains</a>
        </div>

        <div class="header-middle">
            <a class="kleur" href="training.php">Training</a>
        </div>

        <div class="header-middle">
            <a class="kleur" href="shop.php">Shop</a>
        </div>

        <div class="header-middle">
            <a class="kleur" href="pve.php">PVE</a>
        </div>

        <div class="header-section">
            <a class="kleur" href="yes.php">Log Out</a>
        </div>

        <div class="header-section">
        </div>

    </header>

    <div class="container">
        <div class="flexbox bg-danger" style="padding: 10px; display: flex; flex-direction:column; align-items: center; border-radius: 10px;">
            <h1>Upgrade strength</h1>
            <p>Your gold: <?php echo $account['gold']; ?></p>
            <p>Your strength is: <?php echo $account['strength']; ?></p>
            <form method="post">
                <input type="submit" class="btn btn-light" style="width: 200px;" name="strength" value="Train cost <?php echo $gold ?> gold">
            </form>
        </div>
        <div class="flexbox bg-primary" style="padding: 10px; display: flex; flex-direction:column; align-items: center; border-radius: 10px;">
            <h1>Upgrade level</h1>
            <p>Your xp: <?php echo $account['XP']; ?></p>
            <p>Your level is: <?php echo $account['levels']; ?></p>
            <form method="post">
                <input type="submit" class="btn btn-light" style="width: 200px;" name="level" value="Train cost <?php echo $xp ?> xp">
            </form>
        </div>
    </div>

</body>

</html>