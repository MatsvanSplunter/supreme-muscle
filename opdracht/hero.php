<?PHP

include("connect.php");

$dbhost = "localhost";
$dbname = "herorankings";
$dbuser = "bit_academy";
$dbpass = "bit_academy";


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>hero's</title>
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
        <div class="saitama">
            <img src="img/Saitama_Manga.webp" alt="#">
            <h1><a href='heropage.php?id=1'>Saitama</a></h1>
            <p><a href='heropage.php?id=1'>Caped Baldy ハゲマント</a></p>
        </div>
    </div>
    <div class="genos">
        <img src="img/Genos_Profile.webp" alt="#">
        <h1><a href='heropage.php?id=2'>Genos</a></h1>
        <p><a href='heropage.php?id=2'>Demon Cyborg 鬼サイボーグ</a></p>
    </div>

    <div class="king">
        <img src="img/King_Anime_Profile.webp" alt="#">
        <h1><a href='heropage.php?id=3'>King</a></h1>
        <p><a href='heropage.php?id=3'>The Strongest Man on Earth</a></p>
    </div>

    <div class="flashy">
        <img src="img/Flashy_flash_colored.webp" alt="#">
        <h1><a href='heropage.php?id=4'>Flashy Flash</a></h1>
        <p><a href='heropage.php?id=4'>Forelocks in the Face</a></p>
    </div>

    <div class="Darkshine">
        <img src="img/Darkshine_Profile.webp" alt="#">
        <h1><a href='heropage.php?id=5'>Superalloy</a></h1>
        <p><a href='heropage.php?id=5'>Chōgōkin Kurobikari</a></p>
    </div>

    <div class="Tatsumaki">
        <img src="img/Tatsumaki_Anime_Profile_Shot.webp" alt="#">
        <h1><a href='heropage.php?id=6'>Tatsumaki</a></h1>
        <p><a href='heropage.php?id=6'>Tornado of Terror</a></p>
    </div>

    <div class="bang">
        <img src="img/Bang_Anime_Profile.webp" alt="#">
        <h1><a href='heropage.php?id=7'>bang</a></h1>
        <p><a href='heropage.php?id=7'>Silver Fang ァング</a></p>
    </div>

    <div class="sweet">
        <img src="img/SweetMaskProfile.webp" alt="#">
        <h1><a href='heropage.php?id=8'>sweet mask</a></h1>
        <p><a href='heropage.php?id=8'>Shīkuretto Kamen</a></p>
    </div>

    <div class="zombie">
        <img src="img/Zombieman_Fullbody.webp" alt="#">
        <h1><a href='heropage.php?id=9'>zombieman</a></h1>
        <p><a href='heropage.php?id=9'>Subject No. 66</a></p>
    </div>

    <div class="fubuki">
        <img src="img/Fubuki_Anime_Profile.webp" alt="#">
        <h1><a href='heropage.php?id=10'>fubuki</a></h1>
        <p><a href='heropage.php?id=10'>Blizzard of Hell</a></p>
    </div>

</body>

</html>