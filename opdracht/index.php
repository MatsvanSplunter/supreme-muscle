<?php

include_once("connect.php");

$dbhost = "localhost";
$dbname = "herorankings";
$dbuser = "bit_academy";
$dbpass = "bit_academy";


try {
    session_start();

    if (!isset($_SESSION['account']) || $_SESSION['account'] == '') {
        header("location: yes.php");
    }

    $hero = "SELECT * FROM heros WHERE id=1";

    $hero1 = CONNECT_PDO($hero, $dbhost, $dbname, $dbuser, $dbpass)[0];
    $hero = "SELECT * FROM heros WHERE id=3";

    $hero2 = CONNECT_PDO($hero, $dbhost, $dbname, $dbuser, $dbpass)[0];
    $hero = "SELECT * FROM heros WHERE id=2";

    $hero3 = CONNECT_PDO($hero, $dbhost, $dbname, $dbuser, $dbpass)[0];
    if (isset($hero['stats'])) {
        $stats = explode(", ", $hero['stats']);
    }
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
        <title>Document</title>
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
        <h1 class="rainbow1-text">top 3 favorite hero's</h1>
        <div class="container">
            <div class="cardnummer1">
                <h1 class="rainbow-text"><?php echo $hero1['naam']; ?></h1>
                <p><?php echo $hero1['heronaam']; ?></p>
                <p>elo: <?php echo $hero1['elo']; ?></p>
            </div>
            <div class="cardnummer2">
                <h1 class="rainbow-text"><?php echo $hero2['naam']; ?></h1>
                <p><?php echo $hero2['heronaam']; ?></p>
                <p>elo: <?php echo $hero2['elo']; ?></p>
            </div>
            <div class="cardnummer3">
                <h1 class="rainbow-text"><?php echo $hero3['naam']; ?></h1>
                <p><?php echo $hero3['heronaam']; ?></p>
                <p>elo: <?php echo $hero3['elo']; ?></p>
            </div>
        </div>
        <style>
            body {
                background-image: url('giphy.gif');
                background-size: cover;
                background-position: center;
                height: 100vh;
            }

            .content {
                position: relative;
                z-index: 1;
            }
        </style>
        <div style="display: flex; justify-content: center;">
            <h1 class="rainbow-text">buy your hero, train your hero and fight</h1>\
        </div>
    </body>

    </html>
<?php
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
