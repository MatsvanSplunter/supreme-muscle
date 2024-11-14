<?php

include_once("connect.php");

$dbhost = "localhost";
$dbname = "herorankings";
$dbuser = "bit_academy";
$dbpass = "bit_academy";

try {
    $pdo = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (
        isset($_POST['heroname']) && isset($_POST['mainability']) && isset($_POST['subability']) &&
        isset($_POST['naam']) && isset($_POST['telnummer']) && isset($_POST['email']) &&
        isset($_POST['age']) && isset($_POST['noodcontact']) && isset($_POST['backstory']) &&
        isset($_POST['motivatie']) && isset($_POST['physical']) && isset($_POST['health']) &&
        isset($_POST['fitness'])
    ) {
        $sql = "INSERT INTO heros (heronaam, mainability, subabilities, naam, telnummer, email, age, noodcontact, backstory, motivatie, stats, elo) 
            VALUES (:heroname, :mainability, :subability, :naam, :telnummer, :email, :age, :noodcontact, :backstory, :motivatie, :stats, :elo)";
        $stmt = $pdo->prepare($sql);
        $stats = $_POST['physical'] . ", " . $_POST['health'] . ", " . $_POST['fitness'];
        $stmt->execute([
            "heroname" => $_POST['heroname'],
            "mainability" => $_POST['mainability'],
            "subability" => $_POST['subability'],
            "naam" => $_POST['naam'],
            "telnummer" => $_POST['telnummer'],
            "email" => $_POST['email'],
            "age" => $_POST['age'],
            "noodcontact" => $_POST['noodcontact'],
            "backstory" => $_POST['backstory'],
            "motivatie" => $_POST['motivatie'],
            "stats" => $stats,
            "elo" => 1200
        ]);

        header("Location: index.php");
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Hero Register</title>
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
    <form method="post">
        <label for="heroname">hero name:</label>
        <input type="text" name="heroname" id="heroname"><br>
        <label for="mainability">main ability:</label>
        <input type="text" name="mainability" id="mainability"><br>
        <label for="subability">sub ability:</label>
        <input type="text" name="subability" id="subability"><br>
        <label for="naam">name:</label>
        <input type="text" name="naam" id="naam"><br>
        <label for="telnummer">tel nummer:</label>
        <input type="number" name="telnummer" id="telnummer"><br>
        <label for="email">email:</label>
        <input type="text" name="email" id="email"><br>
        <label for="age">age:</label>
        <input type="number" name="age" id="age"><br>
        <label for="noodcontact">noodcontact:</label>
        <input type="number" name="noodcontact" id="noodcontact"><br>
        <label for="backstory">backstory:</label>
        <input type="text" name="backstory" id="backstory"><br>
        <label for="motivatie">motivatie:</label>
        <input type="text" name="motivatie" id="motivatie"><br>
        <label for="physical">physical ability:</label>
        <input type="text" name="physical" id="physical"><br>
        <label for="health">health:</label>
        <input type="text" name="health" id="health"><br>
        <label for="fitness">fitness:</label>
        <input type="text" name="fitness" id="fitness"><br>
        <input type="submit" id="submit" value="save">
    </form>
</body>

</html>