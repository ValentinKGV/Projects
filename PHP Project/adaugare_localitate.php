<?php
session_start();
include('connection.php');
include('functions.php');

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Preia datele din formular
    $Denumire = $_POST["Denumire_Localitate"];
    $COD1 = $_POST["COD"];

    // SQL pentru inserarea datelor în tabela client
    $sql = "INSERT INTO localitate (Denumire_Localitate, COD) 
            VALUES ('$Denumire', '$COD1')";

    // Verificare dacă inserarea a fost realizată cu succes
    if (mysqli_query($con, $sql)) {
        echo "Client adăugat cu succes!";
    } else {
        echo "Eroare la adăugarea clientului: " . mysqli_error($con);
    }
  }

?>


<!DOCTYPE html>
<html>
    <head></head>
    <body style="background-color:gray">
    <div class="topnav" id="menu23">

    <a class="active" href="add_user.php"><i class="Contact">Adaugare Localitate
    </a>
        <a href="date_persoana.php">Adaugare Persoana</a>
        <a href="Judet.php">Adaugare Judet</a>
        <a href="updateb.php">Updateaza</a>
        
        <a href="delete.php">Stergere</a>
        <a class="active" href="query_2.php">Afisare Strazi</a>
        <a href="query_1.php">Detalii Domiciliu</a>
        <a href="query_subcerere.php">Afisare persoane</a>

       
    
</div>
<div id="box">
	<h2>Introduceti datele pentru a adauga un Localitate</h2> 
		
		<form method="post">
			<p>
				<label>Denumire Localitate: </label> 
				<input id="text" type="text" name="Denumire_Localitate">
			</p>
      <p>
				<label>COD: </label> 
				<input id="text" type="text" name="COD">
			</p>

			<input id="button" type="submit" value="Inscriere"><br><br>
		</form>
	</div>
<a href="login.php" class="previous">&laquo; Logout</a>
    </body>
    </html>

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
