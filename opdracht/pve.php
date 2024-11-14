<?php

include_once("connect.php");
session_start();

$dbhost = "localhost";
$dbname = "herorankings";
$dbuser = "bit_academy";
$dbpass = "bit_academy";

$bought = false;
$obtainedheros = [];

$pdo = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$stmt = $pdo->prepare("SELECT * FROM accounts WHERE gebruikersnaam=?");
$stmt->execute([$_SESSION['account']]);
$account = $stmt->fetch();

if ($account['heros'] != '' || isset($account['heros'])) {
    $obtainedheros = explode(", ", $account['heros']);
}

if (isset($_POST['fight'])) {
    header("location: pve.php?variables=hero," . explode("Fight ", $_POST['fight'])[1]);
}

if (isset($_POST['fighter'])) {
    header("location: pve.php?variables=fight," . $_SESSION['enemy'] . "," . explode("Choose ", $_POST['fighter'])[1]);
}

$variables = isset($_GET['variables']) ? explode(",", $_GET['variables']) : null;
$run = isset($variables[0]) ? $variables[0] : null;
$enemy = isset($variables[1]) ? $variables[1] : null;
$_SESSION['enemy'] = null;
$_SESSION['enemy'] = isset($enemy) ? $enemy : $_SESSION['enemy'];
$enemy = $_SESSION['enemy'];
$fighter = isset($variables[2]) ? $variables[2] : null;
$_SESSION['fighter'] = null;
$_SESSION['fighter'] = isset($fighter) ? $fighter : $_SESSION['fighter'];
$fighter = $_SESSION['fighter'];

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
            background-image: url('saitama.gif');
            background-size: cover;
            background-position: center;
            height: 100vh;
            margin: 0;
            padding: 0;
        }
    </style>
    <title>PVE</title>
</head>

<body>
    <?php

    if (!isset($run)) {
        $run = "choose";
    }

    if ($run == "choose") {
    ?>
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
        <div style="display:flex; justify-content: center;">
            <h1>Choose your enemy</h1>
        </div>
        <form method="post">
            <div class="boros">
                <img src='img/Boros_Manga.webp' alt='#'>
                <h1>Boros</h1>
                <p>Dominator of the Universe</p>
                <input type="submit" name="fight" class="btn btn-light" value="Fight Boros">
            </div>
            <div class="garou">
                <img src="img/Garou_profile2.webp" alt="#">
                <h1>Garou</h1>
                <p>Hero Hunter ヒーロー狩</p>
                <input type="submit" name="fight" class="btn btn-light" value="Fight Garou">
            </div>
            <div class="elder">
                <img src="img/Elder_Centipede_Anime_Profile.webp" alt="#">
                <h1>Elder Centipede</h1>
                <p>Giant Bug Monster</p>
                <input type="submit" name="fight" class="btn btn-light" value="Fight Elder Centipede">
            </div>
            <div class="gouketsu">
                <img src="img/Gouketsuanime.webp" alt="#">
                <h1>Gouketsu</h1>
                <p>Original Super Fight Champion</p>
                <input type="submit" name="fight" class="btn btn-light" value="Fight Gouketsu">
            </div>
            <div class="carnage">
                <img src="img/Carnage_kabuto_asura_rhino_profile.webp" alt="#">
                <h1>Carnage</h1>
                <p>Bug God</p>
                <input type="submit" name="fight" class="btn btn-light" value="Fight Carnage">
            </div>
            <div class="VMAnime">
                <img src="img/VMAnime.webp" alt="#">
                <h1 style="color: white;">Vaccine Man</h1>
                <p style="color: white;">Wakuchin Man</p>
                <input type="submit" name="fight" class="btn btn-light" value="Fight Vaccine Man">
            </div>
            <div class="sonic">
                <img src="img/Sonic_Manga.webp" alt="#">
                <h1>Sound Sonic</h1>
                <p>Sonic</p>
                <input type="submit" name="fight" class="btn btn-light" value="Fight Sound Sonic">
            </div>
            <div class="deep">
                <img src="img/Deep_Sea_King_Anime_Portrait.webp" alt="#">
                <h1>Deep Sea King</h1>
                <p>King of The Sea 深海王</p>
                <input type="submit" name="fight" class="btn btn-light" value="Fight Deep Sea King">
            </div>
            <div class="hammerhead">
                <img src="img/Hammerhead.webp" alt="#">
                <h1 style="color: white;">Hammerhead</h1>
                <p style="color: white;">rockhead</p>
                <input type="submit" name="fight" class="btn btn-light" value="Fight Hammerhead">
            </div>
            <div class="crablante">
                <img src="img/Crabrante.webp" alt="#">
                <h1>Crablante</h1>
                <p>Kanirante</p>
                <input type="submit" name="fight" class="btn btn-light" value="Fight Crablante">
            </div>
        </form>

    <?php

    } elseif ($run == "hero") {
    ?>
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
        <div style="display:flex; justify-content: center;">
            <h1>Choose your Fighter</h1>
        </div>
        <form method="post">
            <div class="king">
                <img src="img/King_Anime_Profile.webp" alt="#">
                <h1>King</h1>
                <p>The Strongest Man on Earth</p>
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
                    <input type="submit" name="fighter" class="btn btn-light" value="Choose King">
                <?php
                } else {
                ?>
                    <p>not yet bought</p>
                <?php
                }
                ?>
            </div>
            <div class="saitama">
                <img src="img/Saitama_Manga.webp" alt="#">
                <h1>Saitama</h1>
                <p>Caped Baldy ハゲマント</p>
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
                    <input type="submit" name="fighter" class="btn btn-light" value="Choose Saitama">
                <?php
                } else {
                ?>
                    <p>not yet bought</p>
                <?php
                }
                ?>
            </div>
            <div class="bang">
                <img src="img/Bang_Anime_Profile.webp" alt="#">
                <h1>bang</h1>
                <p>Silver Fang ァング</p>
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
                    <input type="submit" name="fighter" class="btn btn-light" value="Choose Bang">
                <?php
                } else {
                ?>
                    <p>not yet bought</p>
                <?php
                }
                ?>
            </div>
            <div class="Darkshine">
                <img src="img/Darkshine_Profile.webp" alt="#">
                <h1>Superalloy</h1>
                <p>Chōgōkin Kurobikari</p>
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
                    <input type="submit" name="fighter" class="btn btn-light" value="Choose Superalloy">
                <?php
                } else {
                ?>
                    <p>not yet bought</p>
                <?php
                }
                ?>
            </div>
            <div class="Tatsumaki">
                <img src="img/Tatsumaki_Anime_Profile_Shot.webp" alt="#">
                <h1>Tatsumaki</h1>
                <p>Tornado of Terror</p>
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
                    <input type="submit" name="fighter" class="btn btn-light" value="Choose Tatsumaki">
                <?php
                } else {
                ?>
                    <p>not yet bought</p>
                <?php
                }
                ?>
            </div>
            <div class="zombie">
                <img src="img/Zombieman_Fullbody.webp" alt="#">
                <h1>zombieman</h1>
                <p>Subject No. 66</p>
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
                    <input type="submit" name="fighter" class="btn btn-light" value="Choose Zombieman">
                <?php
                } else {
                ?>
                    <p>not yet bought</p>
                <?php
                }
                ?>
            </div>
            <div class="genos">
                <img src="img/Genos_Profile.webp" alt="#">
                <h1>Genos</h1>
                <p>Demon Cyborg 鬼サイボーグ</p>
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
                    <input type="submit" name="fighter" class="btn btn-light" value="Choose Genos">
                <?php
                } else {
                ?>
                    <p>not yet bought</p>
                <?php
                }
                ?>
            </div>
            <div class="flashy">
                <img src="img/Flashy_flash_colored.webp" alt="#">
                <h1>Flashy Flash</h1>
                <p>Forelocks in the Face</p>
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
                    <input type="submit" name="fighter" class="btn btn-light" value="Choose Flashy Flash">
                <?php
                } else {
                ?>
                    <p>not yet bought</p>
                <?php
                }
                ?>
            </div>
            <div class="sweet">
                <img src="img/SweetMaskProfile.webp" alt="#">
                <h1>sweet mask</h1>
                <p>Shīkuretto Kamen</p>
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
                    <input type="submit" name="fighter" class="btn btn-light" value="Choose Sweet mask">
                <?php
                } else {
                ?>
                    <p>not yet bought</p>
                <?php
                }
                ?>
            </div>
            <div class="fubuki">
                <img src="img/Fubuki_Anime_Profile.webp" alt="#">
                <h1>fubuki</h1>
                <p>Blizzard of Hell</p>
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
                    <input type="submit" name="fighter" class="btn btn-light" value="Choose Fubuki">
                <?php
                } else {
                ?>
                    <p>not yet bought</p>
                <?php
                }
                ?>
            </div>
        </form>
    <?php

    } elseif ($run == "fight") {

        $stmt = $pdo->prepare("SELECT * FROM heros WHERE naam=?");
        $stmt->execute([$fighter]);
        $hero = $stmt->fetch();

        $stmt = $pdo->prepare("SELECT * FROM monsters WHERE naam=?");
        $stmt->execute([$enemy]);
        $Enemy = $stmt->fetch();

        $herocurrenthealth = round(($hero['health'] + (1 * $account['levels'] / 7) + 1) * 10);
        $enemycurrenthealth = $Enemy['health'] * 10;

        $heromaxhp = $herocurrenthealth;
        $enemymaxhp = $enemycurrenthealth;

    ?>

        <div>
            <h1 id='hp' class="text-info">Health: <?php echo $herocurrenthealth; ?></h1>
        </div>
        <div>
            <h1 id='ehp' class="text-info" style="display: flex; position: absolute; right: 0px; top: 0px;">Enemy Health: <?php echo $enemycurrenthealth; ?></h1>
        </div>
        <script>
            function simulation() {
                if (running) {
                    let damageToEnemy = parseInt((hero['strength'] * account['strength'] / 3) / (enemy['fitness'] / 2) + 1);
                    enemycurrenthp -= damageToEnemy;
                    setTimeout(2000);
                    document.getElementById("ehp").textContent = `Enemy Health: ${enemycurrenthp}`;
                    if (enemycurrenthp <= 0) {
                        setTimeout(2000);
                        running = false;
                        window.location.assign("./score.php?status=won");
                        return;
                    }
                    let damageToHero = parseInt(enemy['strength'] * 2 / (hero['fitness'] / 2));
                    herocurrenthp -= damageToHero;
                    setTimeout(2000);
                    document.getElementById("hp").textContent = `Health: ${herocurrenthp}`;
                    if (herocurrenthp <= 0 && running == true) {
                        setTimeout(2000);
                        running = false;
                        window.location.assign("./score.php?status=lost");
                        return;
                    }
                }
            }
            const hero = <?= json_encode($hero) ?>;
            const enemy = <?= json_encode($Enemy) ?>;
            const account = <?= json_encode($account) ?>;
            let herocurrenthp = <?= json_encode($heromaxhp) ?>;
            let enemycurrenthp = <?= json_encode($enemymaxhp) ?>;
            let running = true;
            setInterval(simulation, 2000);
        </script>

        <?php

        $running = true;
        try { 
            while ($running) {
                $damageToEnemy = round(($hero['strength'] * $account['strength'] / 3) / ($Enemy['fitness'] / 2) + 1);
                $enemycurrenthealth -= $damageToEnemy;
                if ($enemycurrenthealth <= 0) {
                    $running = false;
                    $won = false;
                    break;
                }
                $damageToHero = round($Enemy['strength'] * 2 / ($hero['fitness'] / 2));
                $herocurrenthealth -= $damageToHero;
                if ($herocurrenthealth <= 0) {
                    $running = false;
                    $won = true;
                    break;
                }
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        ?>
 
    <?php
    }
    ?>


</body>

</html>