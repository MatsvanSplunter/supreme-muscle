<?php

$dbhost = "localhost";
$dbname = "herorankings";
$dbuser = "bit_academy";
$dbpass = "bit_academy";

try {
    $pdo = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $pdo->prepare("SELECT * FROM heros WHERE id=?");
    $stmt->execute([$_GET['id']]);
    $hero = $stmt->fetch();
    $stats = explode(", ", $hero['stats']);
    ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            background-image: url('img/main-qimg-fce42f3583e7fa09e178e6352e6c7b3d-pjlq.jpg');
            background-size: cover;
            background-position: center;
            height: 100vh;
            margin: 0;
            padding: 0;
        }
        .tabel {
            background-color: rgb(255, 255, 255, 0.5);
        }
    </style>
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

    <h3 class="tabel"><?php echo $hero['naam']; ?></h3>
    <table>
        <tr>
            <th class="tabel">Information</th>
            <th class="tabel">Value</th>
        </tr>
        <?php
        ?>
        <tr>
            <td class="tabel">hero name</td>
            <td class="tabel"><?php echo $hero['heronaam']; ?></td>
        </tr>
        <tr>
            <td class="tabel">mainability</td>
            <td class="tabel"><?php echo $hero['mainability']; ?></td>
        </tr>
        <tr>
            <td class="tabel">subabilities</td>
            <td class="tabel"><?php echo $hero['subabilities']; ?></td>
        </tr>
        <tr>
            <td class="tabel">elo</td>
            <td class="tabel"><?php echo $hero['elo']; ?></td>
        </tr>
        <tr>
            <td class="tabel">telnummer</td>
            <td class="tabel"><?php echo $hero['telnummer']; ?></td>
        </tr>
        <tr>
            <td class="tabel">email</td>
            <td class="tabel"><?php echo $hero['email']; ?></td>
        </tr>
        <tr>
            <td class="tabel">age</td>
            <td class="tabel"><?php echo $hero['age']; ?></td>
        </tr>
        <tr>
            <td class="tabel">noodcontact</td>
            <td class="tabel"><?php echo $hero['noodcontact']; ?></td>
        </tr>
        <tr>
            <td class="tabel">backstory</td>
            <td class="tabel"><?php echo $hero['backstory']; ?></td>
        </tr>
        <tr>
            <td class="tabel">motivatie</td>
            <td class="tabel"><?php echo $hero['motivatie']; ?></td>
        </tr>
        <tr>
            <td class="tabel">training</td>
            <td class="tabel"><?php echo $hero['training']; ?></td>
        </tr>
        <tr>
            <td class="tabel">achievements</td>
            <td class="tabel"><?php echo $hero['achievements']; ?></td>
        </tr>
        <tr>
            <td class="tabel">total stats hero association</td>
            <td class="tabel"><?php echo $stats[0]; ?></td>
        </tr>
    </table>
<?php

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}?>
    </body>
