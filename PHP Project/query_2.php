




<!DOCTYPE html>
<html>
    <head></head>
    <body style="background-color:gray">
    <div class="topnav" id="menu23">
       
    <a href="date_persoana.php">Adaugare Persoana</a>
        <a href="Judet.php">Adaugare Judet</a>
        <a href="updateb.php">Updateaza</a>
        
        <a href="delete.php">Stergere</a>
        <a class="active" href="query_2.php">Afisare Strazi</a>
        <a href="query_1.php">Detalii Domiciliu</a>
        <a href="query_subcerere.php">Afisare persoane</a>
</div>
       
        <br>
			<br>
			<b>Afisati strazile din localitatea:</b>
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
			$sql = "SELECT strada.Denumire, localitate.Denumire_Localitate, judet.de
            FROM strada
            JOIN judet ON strada.ID_Judet = judet.ID_Judet
            JOIN localitate ON localitate.ID_Localitate = strada.ID_Localitate
            WHERE localitate.Denumire_Localitate LIKE '$nume_localitate'
            ORDER BY strada.Denumire;
            ";

			$result = mysqli_query($con, $sql);

			if ($result != TRUE) {
				echo 'Tabelul nu exista';
			} else {
                    echo "<table border='1'>
			<tr>

            <th>Denumire strada</th>
			<th>Denumire localitate</th>
			<th>Denumire judet</th>
            
			
			</tr>";
                    while ($row = mysqli_fetch_array($result)) {
                        echo "<tr>";
                        echo "<td>" . $row['Denumire'] . "</td>";
                        echo "<td>" . $row['Denumire_Localitate'] . "</td>";
                        echo "<td>" . $row['de'] . "</td>";
                        echo "</tr>";

                    }
                    echo "</table>";
                }
			
			}
		?>	
<br>

<b>Poate vreti sa vedeti si alte evenimente disponibile:</b>
<?php
include('connection.php');
            //interogare 2
    $sql = "SELECT strada.Denumire, localitate.Denumire_Localitate, judet.de
            FROM strada
            JOIN judet ON strada.ID_Judet = judet.ID_Judet
            JOIN localitate ON localitate.ID_Localitate = strada.ID_Localitate
        
            ORDER BY strada.Denumire;
                ";
    $result2 = mysqli_query($con, $sql);

if (!$result2) {
    echo 'Tabelul nu exista';

} else {
    echo "<table border='1'>
            <tr>
                        <th>Denumire strada</th>
                        <th>Denumire localitate</th>
                        <th>Denumire judet</th>
                        
            </tr>";

    while($row = mysqli_fetch_array($result2)) {
        echo "<tr>";
                        echo "<td>" . $row['Denumire'] . "</td>";
                        echo "<td>" . $row['Denumire_Localitate'] . "</td>";
                        echo "<td>" . $row['de'] . "</td>";
                        echo "</tr>";
    }
    echo "</table>";
}
?>
<br>

<b> Strazile sunt reprezentate prin COD: </b>            
            <?php
            include('connection.php');

			$sql = "SELECT Denumire, COD
				FROM strada
				ORDER BY ID_Strada";
			$result3 = mysqli_query($con, $sql);

			if ($result2 != TRUE) {
				echo 'Tabelul nu exista';
			}
			else{
                echo "<table  border='1'>
			<tr>

			<th>Denumire</th>
			<th>COD </th>

			</tr>";

			while($row = mysqli_fetch_array($result3))
			  {
			  echo "<tr>";
                    echo "<td>" . $row['Denumire'] . "</td>";
                    echo "<td>" . $row['COD'] . "</td>";
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
