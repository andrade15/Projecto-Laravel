<html>
<head>
<title>Minhas viagens</title>
<style>
#botao{
	border-radius:6px;
	background-color:MediumSeaGreen;
	height:50px;
	width:100px;
	position:bottom;
	margin-top:10%;
	margin-left:43%;
}
#botao:hover{
	background-color:orange;
}
#botao1{
	border-radius:6px;
	background-color:MediumSeaGreen;
	height:50px;
	width:100px;
	position:bottom;
	margin-top:10%;
	margin-left:1%;
}
#botao1:hover{
	background-color:orange;
}

#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 130%;
	margin-left:1%;
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

</style>
<head>
<h2>Aluguer de Camioes SGFC</h2>
<h4>Viagens Feitas</h4>
<body>
<table id="customers">
<tr>
<th>ID</th>
<th>Data de Parida</th>
<th>Ponto de Partida</th>
<th>Provincia de Chegada</th>
<th>Cidade de Chegada</th>
<th>Distrito de Chegada</th>
<th>Data de Chegada</th>
<th>Peso da Carga</th>
<th>Tipo de Carga</th>
<th>nr Cliente que Requisitou</th>
<th>Motorista Alocado</th>
<th>Camiao Alocado</th>
<th>Estado do Pagamento</th>
<th>Valor a Pagar</th>
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
$query = "SELECT * FROM `viagem` where idmotorista<>'0' and `Estado` = 'pago'";
$result = mysqli_query($connect, $query);

while($row=mysqli_fetch_row($result)){
echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[4]."</td><td>".$row[5]."</td><td>".$row[6]."</td><td>".$row[7]."</td><td>".$row[8]."</td><td>".$row[9]."</td><td>".$row[10]."</td><td>".$row[11]."</td><td>".$row[13]."</td><td>".$row[12]."</td></tr>";
}
echo "</table>";

mysqli_close($connect);

?>

<br><button id="botao" onclick="location.href='gestor.html'">Voltar</button>
<button id="botao1" onclick="location.href='camiaog.php'">Ver Camioes</button>
</body>
</html>