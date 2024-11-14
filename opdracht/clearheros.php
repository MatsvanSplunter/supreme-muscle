<?php

include_once("connect.php");
include_once("elo.php");

$dbhost = "localhost";
$dbname = "herorankings";
$dbuser = "bit_academy";
$dbpass = "bit_academy";

try {
    $pdo = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
    $sql = "TRUNCATE TABLE heros";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([]);
    header("Location: index.php");
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

$newelo = elo(1000, 1200, 0);