<?php
session_start();
include('connection.php');
include('functions.php');

  if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$nume = $_POST['nume'];
    $prenume = $_POST['Prenume'];
    $cnp = $_POST['CNP'];
    $ID_Stare_civila = $_POST['ID_Stare_civila'];
    $ID_Domiciliu = $_POST['ID_Domiciliu'];
    $ID_Localitate_de_nastere = $_POST['ID_Localitate_de_nastere'];
		$data_nasterii = $_POST['Data_nasterii'];
    $data_schimbare = $_POST['Data_schimbare'];	
    $prenume_mama = $_POST['Prenume_mama'];
    $prenume_tata = $_POST['Prenume_tata']; 
      
    $nume = mysqli_real_escape_string($con, $nume);
    $cnp = mysqli_real_escape_string($con, $cnp);
    $data_nasterii = mysqli_real_escape_string($con, $data_nasterii);
    $data_schimbare = mysqli_real_escape_string($con,$data_schimbare );
    $prenume_mama = mysqli_real_escape_string($con, $prenume_mama);
    $prenume_tata = mysqli_real_escape_string($con, $prenume_tata);

		if(!empty($nume) && !empty($cnp) && !empty($prenume_mama) && !empty($prenume_tata) && !empty($data_nasterii) && !empty($data_schimbare))
		{

      
      $query3 = "INSERT into date_personale (ID_Persoana,CNP,nume,Prenume,ID_Localitate_de_nastere,Prenume_mama,Prenume_tata,Data_schimbare,Data_nasterii,ID_Domiciliu,ID_Stare_Civila) 
                                      values (NULL,'$cnp','$nume','$prenume','$ID_Localitate_de_nastere','$prenume_mama', '$prenume_tata','$data_schimbare','$data_nasterii','$ID_Domiciliu','$ID_Stare_civila')";
      $result3 = mysqli_query($con, $query3);

    
      if ($result3 === TRUE) {
        echo "New record created successfully";
      } else {
        echo "Error: <br>" . mysqli_error($con);
      }

			die();
		}
    else
		{
			echo "Introdu ceva ok";
		}
	}


?>


<!DOCTYPE html>
<html>
    <head></head>
    <body style="background-color:gray">
    <div class="topnav" id="menu23">

    <a class="active" href="add_user.php"><i class="Contact">Adaugare persoana</a>
    <a href="Index.php">Home</a>
    <a href="Judet.php" >Adaugare Judet</a>
    <a href="updateb.php" >Updateaza</a>
       
        <a href="delete.php">Stergere</a>
        <a href="query_2.php">Afisare Strazi</a>
        <a href="query_1.php">Detalii Domiciliu</a>
        <a href="query_subcerere.php">Afisare persoane</a>

       
    
</div>
<div id="box">
	<h2>Introduceti datele pentru a adauga o persoana</h2> 
		
		<form method="post">
			<p>
				<label>Nume: </label> 
				<input id="text" type="text" name="nume">
			</p>
      <p>
				<label>Prenume: </label> 
				<input id="text" type="text" name="Prenume">
			</p>
      <p>
				<label>CNP: </label> 
				<input id="text" type="text" name="CNP">
			</p>

      <p>
				<label>Prenume_mama: </label> 
				<input id="text" type="text" name="Prenume_mama">
			</p>
      <p>
				<label>Prenume_tata: </label> 
				<input id="text" type="text" name="Prenume_tata">
			</p>

				<label>Data nasterii: </label> 
				<input id="text" type="date" name="Data_nasterii">
			</p>
      <p>
				<label> Data_schimbare: </label> 
				<input id="text" type="date" name="Data_schimbare">
			</p>

      <p>
				<label> ID Stare civila: </label> 
				<input id="text" type="int" name="ID_Stare_civila">
			</p>

      <p>
				<label>  ID_Domiciliu: </label> 
				<input id="text" type="int" name="ID_Domiciliu">
			</p>

      <p>
				<label> ID_Localitate_de_nastere: </label> 
				<input id="text" type="int" name="ID_Localitate_de_nastere">
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
