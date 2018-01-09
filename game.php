<?php
header ("Content-type:application/json");
session_start();
if(isset($_POST['result'])) {
    try {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "dice_game";

        $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $conn->prepare("INSERT INTO stats (username, result) VALUES (:username, :result)");
        $stmt->bindParam(':username', $_SESSION['username']);
        $stmt->bindParam(':result', $_POST['result']);

        $stmt->execute();
        $conn = null;

    } catch (PDOException $e) {
        $msg = $e->getMessage();
    }
}

try {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "dice_game";

    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->query("SELECT * FROM stats");
    $response = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $conn = null;

    } catch (PDOException $e) {
        $msg = $e->getMessage();
    }

try {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "dice_game";

    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if(isset($_GET['my'])) {
        $stmt = $conn->prepare("SELECT * FROM stats WHERE username = :username");
        $stmt->bindParam(':username', $_SESSION['username']);
        $stmt->execute();
        $response = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    $conn = null;

} catch (PDOException $e) {
    $msg = $e->getMessage();
}

try {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "dice_game";

    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if(isset($_GET['top'])) {
        $stmt = $conn->prepare("SELECT * FROM stats ORDER BY result DESC LIMIT 5");
        $stmt->bindParam(':result', $_SESSION['result']);
        $stmt->execute();
        $response = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    $conn = null;

} catch (PDOException $e) {
    $msg = $e->getMessage();
}

echo json_encode($response);