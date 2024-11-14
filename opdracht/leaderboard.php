<?php

include_once("connect.php");

$dbhost = "localhost";
$dbname = "herorankings";
$dbuser = "bit_academy";
$dbpass = "bit_academy";

try {
    $heros = "SELECT * FROM heros ORDER BY elo DESC";

    $heros = CONNECT_PDO($heros, $dbhost, $dbname, $dbuser, $dbpass);
} catch (error) {
    echo "error was found";
}

$a = 1;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>
        table {
            border-style: solid;
            margin: 0 auto;
            margin-top: 50px;
        }

        th,
        td {
            border-style: solid;
        }

        .linky:hover {
            color: blue;
        }

        .linky {
            color: grey;
        }
    </style>
    <title>Leaderboard</title>
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
        <style>
            body {
                background-image: url('gif.gif');
                background-size: cover;
                background-position: center;
                height: 100vh;
            }

            .content {
                position: relative;
                z-index: 1;
            }

            body {
                background-image: url('gif.gif');
                background-size: cover;
                background-position: center;
                height: 100vh;
            }

            .content {
                position: relative;
                z-index: 1;
            }
        </style>
    </header>
    <table style="border-style: solid; background-color: white;">
        <tr>
            <th style="border-style: solid;">hero name</th>
            <th style="border-style: solid;">elo rating</th>
            <th style="border-style: solid;">Class Ranking</th>
        </tr>
        <?php
        foreach ($heros as $row) {
            $a++; ?>

            <?php
            if ($a <= 4) {
            ?>
                <tr>
                    <td style="border-style: solid;"><a class="rainbow-text2" href='heropage.php?id=<?php echo $row['id']; ?>'><?php echo $row['heronaam']; ?></td>
                    <td style="border-style: solid;"><?php echo $row['elo']; ?></td>
                    <td style="border-style: solid;">
                        <?php
                        if ($row['elo'] <= 1200) {
                            echo "unknown";
                        } elseif ($row['elo'] <= 1400) {
                            echo "class C";
                        } elseif ($row['elo'] <= 1600) {
                            echo "class B";
                        } elseif ($row['elo'] <= 1800) {
                            echo "class A";
                        } elseif ($row['elo'] <= 100000) {
                            echo "class S";
                        } else {
                            echo "God rank";
                        } 
                        ?>
                    </td>
                </tr><?php
                    } else { ?>
                <tr>
                    <td style="border-style: solid;"><a class="linky" href='heropage.php?id=<?php echo $row['id']; ?>'><?php echo $row['heronaam']; ?></td>
                    <td style="border-style: solid;"><?php echo $row['elo']; ?></td>
                    <td style="border-style: solid;">
                        <?php
                        if ($row['elo'] <= 1200) {
                            echo "unknown";
                        } elseif ($row['elo'] <= 1400) {
                            echo "class C";
                        } elseif ($row['elo'] <= 1600) {
                            echo "class B";
                        } elseif ($row['elo'] <= 1800) {
                            echo "class A";
                        } elseif ($row['elo'] <= 100000) {
                            echo "class S";
                        } else {
                            echo "God rank";
                        }
                        ?>
                    </td>
                </tr>
        <?php
                    }
                } ?>
    </table>
</body>

</html>