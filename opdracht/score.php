<?php

include_once("connect.php");
include_once("elo.php");
session_start();

$dbhost = "localhost";
$dbname = "herorankings";
$dbuser = "bit_academy";
$dbpass = "bit_academy";

$pdo = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$stmt = $pdo->prepare("SELECT * FROM accounts WHERE gebruikersnaam=?");
$stmt->execute([$_SESSION['account']]);
$account = $stmt->fetch();

$stmt = $pdo->prepare("SELECT * FROM heros WHERE naam=?");
$stmt->execute([$_SESSION['fighter']]);
$hero = $stmt->fetch();

$stmt = $pdo->prepare("SELECT * FROM monsters WHERE naam=?");
$stmt->execute([$_SESSION['enemy']]);
$enemy = $stmt->fetch();

if (isset($_POST['submit'])) {
    header("location: pve.php");
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Points</title>
    <style>
        body {
            background-image: url('img/666312.jpg');
            background-size: cover;
            background-position: center;
            height: 100vh;
            margin: 0;
            padding: 0;
        }

        .inside {
            display: flex;
            justify-content: center;
        }

        td {
            align-self: center;
        }
    </style>
</head>

<body>
    <div class="inside">
        <table class="bg-light">
            <tr>
                <th><?php echo $_SESSION['fighter']; ?></th>
                <th>vs</th>
                <th><?php echo $_SESSION['enemy']; ?></th>
            </tr>
            <?php
            if ($_GET['status'] == "won") {
            ?>
                <tr>
                    <td>Won</td>
                    <td></td>
                    <td>Lost</td>
                </tr>
            <?php
            } else {
            ?>
                <tr>
                    <td>Lost</td>
                    <td></td>
                    <td>Win</td>
                </tr>
            <?php
            }
            $oppelo = ($enemy['strength'] + $enemy['health'] + $enemy['fitness']) * 75;
            ?>
            <tr>
                <td>Elo:<?php echo $hero['elo']; ?></td>
                <td></td>
                <td>Elo:<?php echo $oppelo; ?></td>
            </tr>
            <?php
            if (round(elo($oppelo, $hero['elo'], $_GET['status'])) >= 100) {
                $newelo = $hero['elo'] + 100;
            } elseif (round(elo($oppelo, $hero['elo'], $_GET['status'])) <= -50) {
                $newelo = $hero['elo'] - 50;
            } else {
                $newelo = $hero['elo'] + round(elo($oppelo, $hero['elo'], $_GET['status']));
            }
            if (round(oppelo($hero['elo'], $oppelo, $_GET['status'])) >= 100) {
                $newoppelo = $oppelo + 100;
            } elseif (round(oppelo($hero['elo'], $oppelo, $_GET['status'])) <= -50) {
                $newoppelo = $oppelo - 50;
            } else {
                $newoppelo = $oppelo + round(oppelo($hero['elo'], $oppelo, $_GET['status']));
            }
            $wongold = round(($newelo - $hero['elo'] + 60) / 7);
            $wonxp = round(($newelo - $hero['elo'] + 60) / 5);
            if ($wongold < 0) {
                $wongold = 0;
            }
            if ($wonxp < 0) {
                $wonxp = 0;
            }
            if ($newelo < 0) {
                $newelo = 0;
            }
            $newxp = $account['XP'] + $wonxp;
            $newGold = $account['gold'] + $wongold;

            $updateStmt = $pdo->prepare("UPDATE `accounts` SET `XP` = :xp, `gold` = :gold WHERE gebruikersnaam = :username");
            $updateStmt->execute([
                ":xp" => $newxp,
                ":gold" => $newGold,
                ":username" => $_SESSION['account']
            ]);

            $updateStmt = $pdo->prepare("UPDATE `heros` SET `elo` = :elo WHERE naam = :naam");
            $updateStmt->execute([
                ":elo" => $newelo,
                ":naam" => $_SESSION['fighter']
            ]);
            ?>
            <tr>
                <td>New Elo:<?php echo $newelo; ?></td>
                <td></td>
                <td>New Elo:<?php echo $newoppelo; ?></td>
            </tr>
            <tr>
                <td></td>
                <td>Won gold: <?php echo $wongold; ?></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td>Won xp: <?php echo $wonxp; ?></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <form method="post">
                        <input type="submit" name="submit" value="Okay">
                    </form>
                </td>
                <td></td>
            </tr>
        </table>
    </div>
</body>

</html>