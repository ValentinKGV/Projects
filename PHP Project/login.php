<?php 
session_start();
include("connection.php");
include("functions.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // ceva a fost postat
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    if (!empty($user_name) && !empty($password) && !is_numeric($user_name)) {
        // citire din baza de date
        $query = "select * from users where username = '$user_name' limit 1";
        $result = mysqli_query($con, $query);

        if ($result) {
            if ($result && mysqli_num_rows($result) > 0) {
                $user_data = mysqli_fetch_assoc($result);

                if ($user_data['PASSWORD'] === $password) {
                    $_SESSION['user_id'] = $user_data['user_id'];
                    header("Location: index.php");
                    die;
                }
            }
        }

        echo "Nume de utilizator sau parolă greșită!";
    } else {
        echo "Nume de utilizator sau parolă greșită!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            text-align: center;
        }

        #box {
            background-color: grey;
            margin: auto;
            width: 300px;
            padding: 20px;
            margin-top: 100px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        #text {
            height: 25px;
            border-radius: 5px;
            padding: 4px;
            border: solid thin #aaa;
            width: 100%;
            margin-bottom: 10px;
        }

        #button {
            padding: 10px;
            width: 100%;
            color: white;
            background-color: lightblue;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        #button:hover {
            background-color: #2196F3;
        }

        a {
            text-decoration: none;
            color: white;
            font-size: 14px;
        }

        a:hover {
            color: #f2f2f2;
        }
    </style>
</head>
<body>

    <div id="box">
        <form method="post">
            <div style="font-size: 20px; margin: 10px; color: white;">Login</div>

            <input id="text" type="text" name="user_name"><br>
            <input id="text" type="password" name="password"><br>

            <input id="button" type="submit" value="Login"><br>

            <a href="signup.php">Click to Signup</a>
        </form>
    </div>
</body>
</html>
