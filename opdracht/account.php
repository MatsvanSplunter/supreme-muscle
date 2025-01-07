<?php

$dbhost = "localhost";
$dbname = "herorankings";
$dbuser = "bit_academy";
$dbpass = "bit_academy";

$pdo = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

try {
    session_start();
    $_SESSION['account'] = '';
    if (isset($_POST['naam']) && $_POST['naam'] != "") {
        $stmt = $pdo->prepare('SELECT * FROM accounts WHERE id = (SELECT MAX(id) FROM accounts)');
        $stmt->execute([]);
        $id = $stmt->fetch();
        $run = true;
        for ($i = 1; $run == true; $i++) {
            $stmt = $pdo->prepare('SELECT * FROM accounts WHERE id = ?');
            $stmt->execute([$i]);
            $account = $stmt->fetch();
            if ($_POST['naam'] == $account['gebruikersnaam']) {
                if ($_POST['ww'] == $account['wachtwoord'] && $_POST['ww'] != '') {
                    session_name("account");
                    $_SESSION['account'] = $_POST['naam'];
                    header("location: index.php");
                }
            }
        }
        echo "<h1 style='color: white;'>This username does not exist</h1>";
    }
} catch (Error) {
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-image: url('img/background_home_page.webp');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
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
            <form method='post'>
                <div class="form-group">
                    <label for="naam">Name</label>
                    <input type="text" name="naam" id="naam" class="form-control">
                </div>
                <div class="form-group">
                    <label for="ww">Password</label>
                    <input type="password" name="ww" id="ww" class="form-control">
                </div>
                <input type="submit" id="submit" value="Log In" class="btn btn-primary">
            </form>
            <form action="makeaccount.php">
                <input type="submit" value="Register Account" class="btn btn-secondary">
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>