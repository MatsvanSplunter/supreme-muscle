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
    if (isset($_POST['naam']) && isset($_POST['ww']) && isset($_POST['ww2'])) {
        if ($_POST['ww'] == $_POST['ww2']) {
            $sql = "INSERT INTO accounts (gebruikersnaam, wachtwoord, levels, strength, XP, gold) 
            VALUES (:gebruikersnaam, :wachtwoord, :levels, :strength, :xp, :gold)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([
                ":gebruikersnaam" => $_POST['naam'],
                ":wachtwoord" => $_POST['ww'],
                ":strength" => 0,
                ":levels" => 0,
                ":xp" => 100,
                ":gold" => 50
            ]);
            header("Location: account.php");
        } else {
            echo "<p style='background-color: rgb(255, 255, 255, 75%);'>the password and verification password must be the same</p>";
        }
    } else {
        echo "<p>fill every form</p>";
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
            background-image: url('<?php echo 'https://cdn.discordapp.com/attachments/1206520878892974131/1206977915917439066/join_s.jpg?ex=65ddf8c7&is=65cb83c7&hm=92341da5e91724876e3d93618ef17cf7ff16fe3fb6a9cdbd7d96eae2ed5e5a7c&'; ?>');
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