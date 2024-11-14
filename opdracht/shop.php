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

$pdo = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$stmt = $pdo->prepare('SELECT * FROM accounts WHERE gebruikersnaam=?');
$stmt->execute([$_SESSION['account']]);
$account = $stmt->fetch();

if ($account['heros'] != '' || isset($account['heros'])) {
    $obtainedheros = explode(", ", $account['heros']);
}

if (isset($_POST['buy'])) {
    $gold = substr($_POST['buy'], strlen($_POST['buy']) - 8, -5);
    if ($account['gold'] >= $gold) {
        if ($account['heros'] == '') {
            $heros = substr($_POST['buy'], 4, -13);
        } else {
            $heros = $account['heros'] . ", " . substr($_POST['buy'], 4, -13);
        }
        $accountgold = $account['gold'] - $gold;

        $sql = "UPDATE `accounts` SET `heros` = :heros, `gold` = :gold WHERE gebruikersnaam = :username";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ":heros" => $heros,
            ":gold" => $accountgold,
            ":username" => $_SESSION['account']
        ]);
        header("location: shop.php");
    }
    $broke = true;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            background-image: url('img/opm.webp');
            background-size: cover;
            background-position: center;
            height: 100vh;
            margin: 0;
            padding: 0;
        }

        .shop {
            width: 250px;
        }

        .container {
            justify-content: space-between;
        }
        
        .inside {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
    </style>
    <title>Shop</title>
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

    <h3 style="position: absolute; top: 85px; left: 5px;">Gold: <?php echo $account['gold']; ?></h3>

    <?php
    if ($broke) {
        ?>
        <h1 style="position: absolute; top: 82px; left: 43%;">YOU BROKE</h1>
        <?php
    }
    ?>
    <div class="inside">
        <div class="container">
            <div class="saitama shop">
                <img src="shop/saitama.jpg" alt="#">
                <h1>saitama</h1>
                <p>strength 20</p>
                <p>health 15</p>
                <p>fitness 15</p>
                <?php
                foreach ($obtainedheros as $hero) {
                    if (strtolower($hero) == "saitama") {
                        $bought = true;
                        break;
                    } else {
                        $bought = false;
                    }
                }
                if ($bought) {
                ?>
                    <p>Out of Sale</p>
                <?php
                } else {
                ?>
                    <form method="post">
                        <input type="submit" name="buy" value="buy Saitama for 999 gold">
                    </form>
                <?php
                }
                ?>
            </div>
            <div class="genos shop">
                <img src="shop/genos.jpg" alt="#">
                <h1>genos</h1>
                <p>strength 8</p>
                <p>health 9</p>
                <p>fitness 9</p>
                <?php
                foreach ($obtainedheros as $hero) {
                    if (strtolower($hero) == "genos") {
                        $bought = true;
                        break;
                    } else {
                        $bought = false;
                    }
                }
                if ($bought) {
                ?>
                    <p>Out of Sale</p>
                <?php
                } else {
                ?>
                    <form method="post">
                        <input type="submit" name="buy" value="buy Genos for 300 gold">
                    </form>
                <?php
                }
                ?>
            </div>
            <div class="king shop">
                <img src="shop/king.jpg" alt="#">
                <h1>king</h1>
                <p>strength 10+</p>
                <p>health 10+</p>
                <p>fitness 10+</p>
                <?php
                foreach ($obtainedheros as $hero) {
                    if (strtolower($hero) == "king") {
                        $bought = true;
                        break;
                    } else {
                        $bought = false;
                    }
                }
                if ($bought) {
                ?>
                    <p>Out of Sale</p>
                <?php
                } else {
                ?>
                    <form method="post">
                        <input type="submit" name="buy" value="buy King for €10 euro">
                    </form>
                <?php
                }
                ?>
            </div>
            <div class="flashy shop">
                <img src="shop/flash.jpg" alt="#">
                <h1>flashy flash</h1>
                <p>strength 10</p>
                <p>health 7</p>
                <p>fitness 8</p>
                <?php
                foreach ($obtainedheros as $hero) {
                    if (strtolower($hero) == "flashy flash") {
                        $bought = true;
                        break;
                    } else {
                        $bought = false;
                    }
                }
                if ($bought) {
                ?>
                    <p>Out of Sale</p>
                <?php
                } else {
                ?>
                    <form method="post">
                        <input type="submit" name="buy" value="buy Flashy Flash for 200 gold">
                    </form>
                <?php
                }
                ?>
            </div>
            <div class="Darkshine shop">
                <img src="shop/Superalloy.jpg" alt="#">
                <h1>Superalloy</h1>
                <p>strength 8</p>
                <p>health 9</p>
                <p>fitness 10</p>
                <?php
                foreach ($obtainedheros as $hero) {
                    if (strtolower($hero) == "superalloy") {
                        $bought = true;
                        break;
                    } else {
                        $bought = false;
                    }
                }
                if ($bought) {
                ?>
                    <p>Out of Sale</p>
                <?php
                } else {
                ?>
                    <form method="post">
                        <input type="submit" name="buy" value="buy Superalloy for 500 gold">
                    </form>
                <?php
                }
                ?>
            </div>
        </div>

        <div class="container">
            <div class="Tatsumaki shop">
                <img src="shop/Tatsumaki.jpg" alt="#">
                <h1>Tatsumaki</h1>
                <p>strength 9</p>
                <p>health 8</p>
                <p>fitness 10</p>
                <?php
                foreach ($obtainedheros as $hero) {
                    if (strtolower($hero) == "tatsumaki") {
                        $bought = true;
                        break;
                    } else {
                        $bought = false;
                    }
                }
                if ($bought) {
                ?>
                    <p>Out of Sale</p>
                <?php
                } else {
                ?>
                    <form method="post">
                        <input type="submit" name="buy" value="buy Tatsumaki for 500 gold">
                    </form>
                <?php
                }
                ?>
            </div>
            <div class="bang shop">
                <img src="shop/bang.jpg" alt="#">
                <h1>bang</h1>
                <p>strength 10</p>
                <p>health 9</p>
                <p>fitness 9</p>
                <?php
                foreach ($obtainedheros as $hero) {
                    if (strtolower($hero) == "bang") {
                        $bought = true;
                        break;
                    } else {
                        $bought = false;
                    }
                }
                if ($bought) {
                ?>
                    <p>Out of Sale</p>
                <?php
                } else {
                ?>
                    <form method="post">
                        <input type="submit" name="buy" value="buy Bang for 700 gold">
                    </form>
                <?php
                }
                ?>
            </div>
            <div class="sweet shop">
                <img src="shop/sweet.jpg" alt="#">
                <h1>sweet mask</h1>
                <p>strength 8</p>
                <p>health 7</p>
                <p>fitness 7</p>
                <?php
                foreach ($obtainedheros as $hero) {
                    if (strtolower($hero) == "sweet mask") {
                        $bought = true;
                        break;
                    } else {
                        $bought = false;
                    }
                }
                if ($bought) {
                ?>
                    <p>Out of Sale</p>
                <?php
                } else {
                ?>
                    <form method="post">
                        <input type="submit" name="buy" value="buy Sweet mask for 125 gold">
                    </form>
                <?php
                }
                ?>
            </div>
            <div class="zombie shop">
                <img src="shop/zombieman.jpg" alt="#">
                <h1>zombieman</h1>
                <p>strength 6</p>
                <p>health 10</p>
                <p>fitness 10</p>

                <?php
                foreach ($obtainedheros as $hero) {
                    if (strtolower($hero) == "zombieman") {
                        $bought = true;
                        break;
                    } else {
                        $bought = false;
                    }
                }
                if ($bought) {
                ?>
                    <p>Out of Sale</p>
                <?php
                } else {
                ?>
                    <form method="post">
                        <input type="submit" name="buy" value="buy Zombieman for 375 gold">
                    </form>
                <?php
                }
                ?>
            </div>
            <div class="fubuki shop">
                <img src="shop/fubuki.jpg" alt="#">
                <h1>fubuki</h1>
                <p>strength 6</p>
                <p>health 5</p>
                <p>fitness 6</p>
                <?php
                foreach ($obtainedheros as $hero) {
                    if (strtolower($hero) == "fubuki") {
                        $bought = true;
                        break;
                    } else {
                        $bought = false;
                    }
                }
                if ($bought) {
                ?>
                    <p>Out of Sale</p>
                <?php
                } else {
                ?>
                    <form method="post">
                        <input type="submit" name="buy" value="buy Fubuki for 000 gold">
                    </form>
                <?php
                }
                ?>
            </div>
        </div>
    </div>

</body>

</html>