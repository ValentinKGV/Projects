



<?php
include('connection.php');
include('functions.php');

if(isset($_POST["ID_Judet"]) && isset($_POST["de"]) && isset($_POST["COD"]))
{
    $IDJudet = $_POST['ID_Judet'];
    $denumire = $_POST['de'];
    $COD= $_POST['COD'];
   
$update1="UPDATE judet SET ID_Judet='$IDJudet', de='$denumire', COD='$COD' WHERE ID_Judet='$IDJudet'";
$result1 = mysqli_query($con,$update1);
if ($result1) {
echo "Schimbare cu succes!";
} else {
echo "Eroare";
}
}

if(isset($_POST["ID_Localitate"]) && isset($_POST["ID_Judet"]) && isset($_POST["COD"]))
{
    $ID_Localitate = $_POST['ID_Localitate'];
    $ID_Judet = $_POST['ID_Judet'];
    $COD= $_POST['COD'];
    $Denumire_Localitate = $_POST['Denumire_Localitate'];

$update1="UPDATE localitate SET ID_Judet='$ID_Judet', Denumire_Localitate='$Denumire_Localitate', COD='$COD', ID_Localitate=$ID_Localitate WHERE ID_Judet='$ID_Localitate'";
$result1 = mysqli_query($con,$update1);
if ($result1) {
echo "Schimbare cu succes!";
} else {
echo "Eroare";
}
}

?>


<!DOCTYPE html>
<html>
    <head></head>
    <body style="background-color:gray">
    <div class="topnav" id="menu23">
       
    <a href="Judet.php" >Adaugare Judet</a>
    <a href="date_persoana.php" >Adaugare Persoana</a>
        <a class="active" href="updateb.php" >Updateaza</a>
        <a href="delete.php">Stergere</a>
        <a href="query_2.php">Afisare Strazi</a>
        <a href="query_1.php">Detalii Domiciliu</a>
        <a href="query_subcerere.php">Afisare persoane</a>
        
       
    
</div>
<div id="box">
<form method="post">
			<p>
				<label>Schimbați denumirea si codul judetului (se introduce id-ul): </label> 
				<input id="text" type="int" name="ID_Judet">
			</p>
      <p>
				<label>Denumirea noua: </label> 
				<input id="text" type="text" name="de">
			</p>
      <p>
				<label>COD nou: </label> 
				<input id="text" type="text" name="COD">
			</p>

			<input id="button" type="submit" value="Schimba"><br><br>
      </form>
      
      <form method="post">
      <p>
				<label>Schimbați Localitate(se introduce id-ul): </label> 
				<input id="text" type="int" name="ID_Localitate">
			</p>
      <p>
				<label>ID Judet nou: </label> 
				<input id="text" type="int" name="ID_Judet">
			</p>
      <p>
				<label>Denumire: </label> 
				<input id="text" type="text" name="Denumire_Localitate">
			</p>
            <p>
				<label>COD: </label> 
				<input id="text" type="text" name="COD">
			</p>
			<input id="button" type="submit" value="Schimba"><br><br>
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

