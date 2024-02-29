




<!DOCTYPE html>
<html>
    <head></head>
    <body style="background-color:gray">
    <div class="topnav" id="menu23">
       
    <a href="date_persoana.php">Adaugare Persoana</a>
        <a href="Judet.php">Adaugare Judet</a>
        <a href="updateb.php">Updateaza</a>
        
        <a href="delete.php">Stergere</a>
      
        <a href="query_1.php">Detalii Domiciliu</a>
        <a href="query_2.php">Afisare Strazi</a>
        <a class="active" href="query_subcerere.php">Afisare persoane</a>
        
</div>
       
        <br>
			<br>
			<b>Afisati persoanele stabilite in judetul:</b>
			<br>
			<br>
            <form method="post">


            <input id="text" type="text" name="nume_judet">
            <input id="button" type="submit"><br><br>
			
			<?php
            include('connection.php');
            if (isset($_POST["nume_judet"]))
                
            {
                $nume_judet= $_POST['nume_judet'];

            //interogare 1
			$sql = "SELECT date_personale.Nume, date_personale.Prenume, date_personale.Data_nasterii, date_domiciliu.Tip_Stabilire, strada.Denumire, localitate.Denumire_Localitate
            FROM date_personale
            JOIN date_domiciliu On date_personale.ID_Domiciliu =date_domiciliu.ID_Adresa
            LEFT JOIN judet ON date_domiciliu.ID_Judet = judet.ID_Judet
            RIGHT JOIN strada ON date_domiciliu.ID_Strada = strada.ID_Strada
            INNER JOIN localitate On date_domiciliu.ID_Localitate = localitate.ID_Localitate
            WHERE localitate.Denumire_Localitate IN ( SELECT localitate.Denumire_Localitate 
                                                      from judet
                                                      JOIN localitate On localitate.ID_Judet = judet.ID_Judet
                                                      WHERE judet.de LIKE '$nume_judet')
            ORDER BY date_personale.Nume;
            
            ";

			$result = mysqli_query($con, $sql);

			if ($result != TRUE) {
				echo 'Tabelul nu exista';
			} else {
                    echo "<table border='1'>
                    <tr>
                    <th>Nume</th>
                    <th>Prenume</th>
                    <th>Datana nasterii</th>
                    <th>Tip stabilire</th>
                    <th>Nume strada</th>
                    <th>Denumire localitate</th>
                                
                    </tr>";
                    while ($row = mysqli_fetch_array($result)) {
                        echo "<tr>";
                        echo "<td>" . $row['Nume'] . "</td>";
                        echo "<td>" . $row['Prenume'] . "</td>";
                        echo "<td>" . $row['Data_nasterii'] . "</td>";
                        echo "<td>" . $row['Tip_Stabilire'] . "</td>";
                
                        echo "<td>" . $row['Denumire'] . "</td>";
                        echo "<td>" . $row['Denumire_Localitate'] . "</td>";
                        echo "</tr>";

                    }
                    echo "</table>";
                }
			
			}
		?>	
<br>
</div>
       
        <br>
			<br>
			<b> Afisati adresa persoanei cu numele:</b>
			<br>
			<br>
            <form method="post">


            <input id="text" type="text" name="nume_persoana">
            <input id="button" type="submit"><br><br>
			
			<?php
            include('connection.php');
            if (isset($_POST["nume_persoana"]))
                
            {
                $nume_persoana= $_POST['nume_persoana'];

            //interogare 2
			$sql = "SELECT date_personale.Nume, date_personale.Prenume, date_domiciliu.Sector, strada.Denumire,date_domiciliu.Numar_Strada, date_domiciliu.Scara,date_domiciliu.Etaj,date_domiciliu.Apartament
            FROM  date_domiciliu 
            JOIN judet ON date_domiciliu.ID_Judet = judet.ID_Judet
            JOIN localitate On date_domiciliu.ID_Localitate = localitate.ID_Localitate
            JOIN strada ON date_domiciliu.ID_Strada = strada.ID_Strada
            JOIN date_personale On date_personale.ID_Domiciliu =date_domiciliu.ID_Adresa
            WHERE ID_Persoana IN (SELECT ID_Persoana FROM date_personale WHERE nume LIKE '$nume_persoana')
            ORDER BY date_personale.Nume;
            
            
            ";

			$result = mysqli_query($con, $sql);

			if ($result != TRUE) {
				echo 'Tabelul nu exista';
			} else {
                    echo "<table border='1'>
                    <tr>
                    <th>Nume</th>
                    <th>Prenume</th>
                    <th>Sector</th>
                    <th>Denumire strada</th>
                    <th>Numar strada</th>
                    <th>Scara</th>
                    <th>Etaj</th>
                    <th>Apartament</th>
                                
                    </tr>";
                    while ($row = mysqli_fetch_array($result)) {
                        echo "<tr>";
                        echo "<td>" . $row['Nume'] . "</td>";
                        echo "<td>" . $row['Prenume'] . "</td>";
                        echo "<td>" . $row['Sector'] . "</td>";
                        echo "<td>" . $row['Denumire'] . "</td>";
                        echo "<td>" . $row['Numar_Strada'] . "</td>";
                        echo "<td>" . $row['Scara'] . "</td>";
                        echo "<td>" . $row['Etaj'] . "</td>";
                        echo "<td>" . $row['Apartament'] . "</td>";

                        echo "</tr>";

                    }
                    echo "</table>";
                }
			
			}
		?>	
<br>
		
		
<br><br><br><br>
	<!-- End Page Content -->
	<!-- Begin Footer -->
	<div id="footer">
	</div>
	<!-- End Footer --></div>
   
<!-- End Container -->
<br><br><br>
</div>

</div>
<a href="login.php" class="previous">&laquo; Logout</a>
    </body>
    </html>
    <style>

body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
    color: #333;
}

.topnav {
    background-color: #333;
    overflow: hidden;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
}

.topnav a {
    float: left;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 20px;
    text-decoration: none;
    font-size: 17px;
    transition: background-color 0.3s, color 0.3s;
}

.topnav a:hover {
    background-color: #ddd;
    color: #333;
}

.topnav a.active {
    background-color: #4CAF50;
    color: white;
}

table {
    border-collapse: collapse;
    width: 100%;
    margin-top: 20px;
}

th, td {
    text-align: left;
    padding: 8px;
    border-bottom: 1px solid #ddd;
}

th {
    background-color: #333;
    color: white;
}

tr:hover {
    background-color: #f5f5f5;
}

#footer {
    text-align: center;
    padding: 20px;
    background-color: #333;
    color: white;
    position: fixed;
    bottom: 0;
    width: 100%;
}

.previous {
    background-color: #333;
    color: white;
    padding: 10px 15px;
    text-decoration: none;
    display: inline-block;
    margin-top: 20px;
}

.previous:hover {
    background-color: #555;
}

</style>
