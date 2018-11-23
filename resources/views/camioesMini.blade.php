<html>
<head>
<title>Camioes Disponiveis</title>
<style>
#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 70%;
	margin-left:10%;
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}
</style>
<head>
<h2>Aluguer de Camioes SGFC</h2>
<h4>Camioes Disponiveis</h4>
<body>
<table id="customers">
<tr>
<th>Matricula</th>
<th>Marca</th>
<th>Modelo</th>
<th>Disponibilidade</th>
<tr>


<?php
$hostname="localhost";
$username="root";
$password="";
$databaseName="sgfc";

$connect = mysqli_connect($hostname, $username, $password, $databaseName);
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}

$query = "SELECT * FROM `camiao` where disponibilidade='Disponivel'";
$result = mysqli_query($connect, $query);

while($row=mysqli_fetch_row($result)){
echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td<tr>";
}
echo "</table>";
mysqli_close($connect);

?>
<br><br><br>
<a href="solicitacoes.php">Voltar</a>
</body>
</html>