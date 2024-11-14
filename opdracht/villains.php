<?PHP

include("connect.php");

$dbhost = "localhost";
$dbname = "herorankings";
$dbuser = "bit_academy";
$dbpass = "bit_academy";

$monsters = "SELECT history FROM monsters WHERE naam='Garou'";

$garou = CONNECT_PDO($monsters, $dbhost, $dbname, $dbuser, $dbpass)[0];

$monsters = "SELECT history FROM monsters WHERE naam='Deep Sea King'";

$deep = CONNECT_PDO($monsters, $dbhost, $dbname, $dbuser, $dbpass)[0];

$monsters = "SELECT history FROM monsters WHERE naam='Gouketsu'";

$gouketsu = CONNECT_PDO($monsters, $dbhost, $dbname, $dbuser, $dbpass)[0];

$monsters = "SELECT history FROM monsters WHERE naam='Carnage'";

$Carnage = CONNECT_PDO($monsters, $dbhost, $dbname, $dbuser, $dbpass)[0];

$monsters = "SELECT history FROM monsters WHERE naam='Boros'";

$boros = CONNECT_PDO($monsters, $dbhost, $dbname, $dbuser, $dbpass)[0];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>one punch man</title>
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
    <div class="garou">
        <img src="img/Garou_profile2.webp" alt="#">
        <h1><a href="villianpage.php?id=3">garou</a></h1>
        <p><a href="villianpage.php?id=3">Hero Hunter ヒーロー狩</a></p>
    </div>

    <div class="deep">
        <img src="img/Deep_Sea_King_Anime_Portrait.webp" alt="#">
        <h1><a href="villianpage.php?id=1">deep Sea King</a></h1>
        <p><a href="villianpage.php?id=1">King of The Sea 深海王</a></p>
    </div>

    <div class="gouketsu">
        <img src="img/Gouketsuanime.webp" alt="#">
        <h1><a href="villianpage.php?id=2">Gouketsu</a></h1>
        <p><a href="villianpage.php?id=2">Original Super Fight Champion</a></p>
    </div>

            <div class="carnage">
                <img src="img/Carnage_kabuto_asura_rhino_profile.webp" alt="#">
                <h1><a href="villianpage.php?id=4">carnage</a></h1>
                <p><a href="villianpage.php?id=4">Bug God</a></p>
            </div>
      
                <div class="boros">
                    <img src="img/Boros_Manga.webp" alt="#">
                    <h1><a href="villianpage.php?id=5">Boros</a></h1>
                    <p><a href="villianpage.php?id=5">Dominator of the Universe</a></p>
                </div>
           
        <div class="sonic">
            <img src="img/Sonic_Manga.webp" alt="#">
            <h1><a href="villianpage.php?id=6">Sound Sonic</a></h1>
            <p><a href="villianpage.php?id=6">Sonic</a></p>
        </div>

        <div class="crablante">
            <img src="img/Crabrante.webp" alt="#">
            <h1><a href="villianpage.php?id=7">Crablante</a></h1>
            <p><a href="villianpage.php?id=7">Kanirante</a></p>
        </div>

        <div class="hammerhead">
            <img src="img/Hammerhead.webp" alt="#">
            <h1 style="color: white;"><a href="villianpage.php?id=8">Hammerhead</a></h1>
            <p style="color: white;"><a href="villianpage.php?id=8">rockhead</a></p>
        </div>
    </div>
    </div>

        <div class="VMAnime">
            <img src="img/VMAnime.webp" alt="#">
            <h1 style="color: white;"><a href="villianpage.php?id=9">Vaccine Man</a></h1>
            <p style="color: white;"><a href="villianpage.php?id=9">Wakuchin Man</a></p>
        </div>

        <div class="elder">
            <img src="img/Elder_Centipede_Anime_Profile.webp" alt="#">
            <h1><a href="villianpage.php?id=10">Elder</a></h1>
            <p><a href="villianpage.php?id=10">Giant Bug Monster</a></p>
        </div>
</body>

</html>