<?php
include('connection.php');
include('functions.php');

if (isset($_POST["ID_Judet"])) {
    $IdEveniment = $_POST["ID_Judet"];
    $delete1 = "DELETE FROM `judet` WHERE ID_Judet= '$IdEveniment'";
    $result = mysqli_query($con, $delete1);

    if ($result) {
        echo "Succes ati sters un eveniment!";
    } else {
        echo 'Eroare!';
    }
}

if (isset($_POST["ID_Localitate"])) {
    $IdModel = $_POST["ID_Localitate"];
    $delete2 = "DELETE FROM `localitate` WHERE ID_Localitate= '$IdModel'";
    $result = mysqli_query($con, $delete2);

    if ($result) {
        echo "Succes ati sters un model!";
    } else {
        echo 'Eroare!';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stergerea unui Judet/Localitate</title>
    <style>
        ./* General Body Styling */
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

/* Top Navigation Bar */
.topnav {
    background-color: #333;
    overflow: hidden;
}

.topnav a {
    float: left;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;
    transition: 0.3s;
}

.topnav a:hover {
    background-color: #ddd;
    color: black;
}

.topnav a.active {
    background-color: #4CAF50;
    color: white;
}

/* Form Styling */
#box {
    background-color: white;
    width: 300px;
    padding: 20px;
    margin: 20px auto;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

#box h2 {
    text-align: center;
    margin-bottom: 20px;
}

#box p {
    margin-bottom: 10px;
}

#box label {
    display: block;
    margin-bottom: 5px;
}

#box input[type="text"],
#box input[type="number"],
#box input[type="date"] {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
    border: 1px solid #ddd;
    box-sizing: border-box;
}

#box input[type="submit"] {
    width: 100%;
    padding: 10px;
    background-color: #4CAF50;
    color: white;
    border: none;
    cursor: pointer;
}

#box input[type="submit"]:hover {
    background-color: #45a049;
}

/* Logout Link */
a.previous {
    text-decoration: none;
    display: inline-block;
    padding: 8px 16px;
    background-color: #f44336;
    color: white;
    margin-top: 20px;
}

a.previous:hover {
    background-color: #da190b;
}
    </style>
</head>

<body>
    <div class="topnav">
        <a href="date_persoana.php">Adaugare Persoana</a>
        <a href="Judet.php">Adaugare Judet</a>
        <a href="updateb.php">Updateaza</a>
        <a class="active" href="delete.php">Sterge</a>
        <a href="query_2.php">Afisare Strazi</a>
        <a href="query_1.php">Detalii Domiciliu</a>
        <a href="query_subcerere.php">Afisare persoane</a>
    </div>
    <div id="box">
        <form method="post">
            <p>
                <label>Sterge un Judet: </label>
                <input type="text" name="ID_Judet">
            </p>
            <input type="submit" value="Stergere Judet">
        </form>
        <br>
        <form method="post">
            <p>
                <label>Sterge o Localitate: </label>
                <input type="int" name="ID_Localitate">
            </p>
            <input type="submit" value="Stergere Localitate">
        </form>
    </div>
    <a href="login.php" class="previous">&laquo; Logout</a>
</body>

</html>
