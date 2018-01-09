<?php
session_start();
if(isset($_POST['username'])){
    try {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "dice_game";
        $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("SELECT * FROM users WHERE username = :username");
        $stmt->bindParam(':username', $_POST['username']);
        $stmt->execute();
        $user_data = $stmt->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
   if (password_verify($_POST['password'], $user_data['password'])){
//       ($_POST['password'] == $user_data['password'])
//       (password_verify($_POST['password'], $user_data['password']))
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['level'] = $user_data['level'];
        $_SESSION['last_login'] = date("Y-m-d H:m:s");

       setcookie("dice_game", $user_data['username'], time() + (60*60*24*7), "/"); // 86400 = 1 day
        header("location: index.php");
    } else {
        echo "try again!";
    }
}
//print_r($_SESSION);
//if(isset($_COOKIE["sausainis_name"])) {
//    echo "Cookie named " . $_COOKIE["sausainis_name"];
//}
?>

<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="login.css">
</head>
<body>
<div class="container">
    <h1 class="form-signin-heading text-center">Welcome to the Dice Game!</h1>
    <form class="form-signin" action="" method="POST">

        <label for="inputEmail" class="sr-only">Username</label>
        <input name="username" type="text" id="inputEmail" class="form-control" placeholder="Username" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        <p class="small"><a href="register.php" class="href">I want to Register!</a></p>
    </form>

</div> <!-- /container -->
</body>
</html>