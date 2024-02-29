<?php
session_start();

include("connection.php");
include("functions.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // Verifică dacă au fost trimise date prin POST
    if (isset($_POST["username"]) && isset($_POST["password"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];

        // Verifică dacă username și parola nu sunt goale
        if (!empty($username) && !empty($password)) {
            // Salvează în baza de date
            $query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
            mysqli_query($con, $query);

            // Redirecționează către pagina de login
            header("Location: login.php");
            die;
        } else {
            echo "Please enter some valid information!";
        }
    } else {
        echo "Invalid data received!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Signup</title>
    <style type="text/css">
        #text {
            height: 25px;
            border-radius: 5px;
            padding: 4px;
            border: solid thin #aaa;
            width: 100%;
        }

        #button {
            padding: 10px;
            width: 100px;
            color: white;
            background-color: lightblue;
            border: none;
        }

        #box {
            background-color: grey;
            margin: auto;
            width: 300px;
            padding: 20px;
        }
    </style>
</head>
<body>

<div id="box">
    <form method="post">
        <div style="font-size: 20px; margin: 10px; color: white;">Signup</div>

        <input id="text" type="text" name="username"><br><br>
        <input id="text" type="password" name="password"><br><br>

        <input id="button" type="submit" value="Signup"><br><br>

        <a href="login.php">Click to Login</a><br><br>
    </form>
</div>

</body>
</html>
