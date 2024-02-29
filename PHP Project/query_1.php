




<!DOCTYPE html>
<html>
    <head></head>
    <body style="background-color:gray">
    <div class="topnav" id="menu23">
       
    <a href="date_persoana.php">Adaugare Persoana</a>
        <a href="Judet.php">Adaugare Judet</a>
        <a href="updateb.php">Updateaza</a>
        
        <a href="query_2.php">Afisare Strazi</a>
        <a href="delete.php">Stergere</a>
        <a class="active" href="query_1.php">Detalii Domiciliu</a>
        
        <a href="query_subcerere.php">Afisare persoane</a>
</div>
       
        <br>
			<br>
			<b>Afisati persoanele din localitate:</b>
			<br>
			<br>
            <form method="post">


            <input id="text" type="text" name="nume_localitate">
            <input id="button" type="submit"><br><br>
			
			<?php
            include('connection.php');
            if (isset($_POST["nume_localitate"]))
                
            {
                $nume_localitate= $_POST['nume_localitate'];

            //interogare 1
			$sql = "SELECT date_personale.Nume, date_personale.Prenume, date_personale.Data_nasterii, date_domiciliu.Tip_Stabilire, strada.Denumire, localitate.Denumire_Localitate
            FROM date_personale
            JOIN date_domiciliu On date_personale.ID_Domiciliu =date_domiciliu.ID_Adresa
            LEFT JOIN judet ON date_domiciliu.ID_Judet = judet.ID_Judet
            RIGHT JOIN strada ON date_domiciliu.ID_Strada = strada.ID_Strada
            INNER JOIN localitate On date_domiciliu.ID_Localitate = localitate.ID_Localitate
            WHERE localitate.Denumire_Localitate LIKE 'Buc%'
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

<b>Poate vreti sa vedeti si alte persoane disponibile din diferite localitati:</b>
<?php
include('connection.php');
            //interogare 2
    $sql = "SELECT date_personale.Nume, date_personale.Prenume, date_personale.Data_nasterii, date_domiciliu.Tip_Stabilire, strada.Denumire, localitate.Denumire_Localitate
    FROM date_personale
    JOIN date_domiciliu On date_personale.ID_Domiciliu =date_domiciliu.ID_Adresa
    LEFT JOIN judet ON date_domiciliu.ID_Judet = judet.ID_Judet
    RIGHT JOIN strada ON date_domiciliu.ID_Strada = strada.ID_Strada
    INNER JOIN localitate On date_domiciliu.ID_Localitate = localitate.ID_Localitate
    WHERE localitate.Denumire_Localitate LIKE 'Buc%'
    ORDER BY date_personale.Nume;
                ";
    $result2 = mysqli_query($con, $sql);

if (!$result2) {
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

    while($row = mysqli_fetch_array($result2)) {
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
?>
<br>

<b> Nume si Prenume: </b>            
            <?php
            include('connection.php');

			$sql = "SELECT date_personale.Nume, date_personale.Prenume
            FROM `date_personale` WHERE 1";

			$result3 = mysqli_query($con, $sql);

			if ($result2 != TRUE) {
				echo 'Tabelul nu exista';
			}
			else{
                echo "<table  border='1'>
			<tr>

			<th>Nume</th>
			<th>Prenume </th>

			</tr>";

			while($row = mysqli_fetch_array($result3))
			  {
			  echo "<tr>";
                    echo "<td>" . $row['Nume'] . "</td>";
                    echo "<td>" . $row['Prenume'] . "</td>";
			  echo "</tr>";

			  }
			echo "</table>";
        }
			?>
			

				
			
		<!-- End Left Column -->
		
		
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
