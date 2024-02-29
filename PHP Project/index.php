<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Home Page</title>
    <style>
        /* Stilizare pentru lista de butoane */
        .home ul {
            list-style-type: none;
            padding: 0;
            text-align: center; /* Aliniere la centru */
        }
        body {
            background-image: url('images.jpg');
            background-size: cover; /* This will ensure the image covers the entire background */
            background-repeat: no-repeat; /* This will prevent the image from repeating */
        }


        /* Stilizare pentru fiecare element de listă (buton) */
        .home li {
            margin: 10px 0; /* Spațiere între butoane */
        }

        /* Stilizare pentru butoane */
        .home a {
            display: inline-block;
            padding: 10px 20px;
            text-decoration: none;
            background-color: #666; /* Culoare de fundal gri */
            color: #fff; /* Culoare text alb */
            border-radius: 5px; /* Colțuri rotunjite */
            transition: background-color 0.3s ease; /* Tranziție la schimbarea culorii de fundal */
        }

        /* Stilizare la hover pentru butoane */
        .home a:hover {
            background-color: #444; /* Culoare de fundal la hover mai închisă */
        }
    </style>
</head>
<body>

    <div class="home">
        <ul>
            <li style="padding-top:10px"><a href="date_persoana.php">Adaugare Persoana</a></li>
            
            <a href="Judet.php" >Adaugare Judet</a>
    <a href="updateb.php" >Updateaza</a>
       
        <a href="delete.php">Stergere</a>
        <a href="query_2.php">Afisare Strazi</a>
        <a href="query_1.php">Detalii Domiciliu</a>
        <a href="query_subcerere.php">Afisare persoane</a>
        </ul>
    </div>
</body>
</html>

