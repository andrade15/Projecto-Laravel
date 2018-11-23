<html>
<head>
<title>Minhas viagens</title>

<script src='../js/jquery.js'></script>

<script>
$(document).ready(function(){
    $("#expandir").click(function(){
		 $("#hidden").fadeIn("slow");
		$("#hidden").show();
    });
});

$(document).ready(function(){
    $("#expandir1").click(function(){
		 $("#hidden1").fadeIn("slow");
		$("#hidden1").show();
    });
});
</script>

<style>
body{
font-family: montserrat, arial,verdana;
	background-image:linear-gradient(rgba(0,0,0,0.2), rgba(0,0,0,0.2)), url(../views/images/5.jpg);
	background-position: center;
	background-size:cover;
}
.hidden{
	display:none;
	margin-left:30%;
}
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

#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 120%;
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
    background-color: mediumseagreen;
    color: white;
}

input[type=text]{
    width:25%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
	margin-top:0.2%;
	margin-left:none;
}
input[type=submit] {
    background-color: black;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
	margin-left:none;
	margin-top:0.8%;
}
.expandir {
    background-color: black;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
	margin-left:none;
	margin-top:0.8%;
}
.expandir:hover{
	background-color:green;
}
#voltar {
    background-color: black;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
	margin-left:none;
	margin-top:0.8%;
}
#voltar:hover{
	background-color:green;
}
input[type=submit]:hover {
background-color: green;
}
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
<th>Valor Pago</th>
<tr>
<?php
$hostname="localhost";
$username="root";
$password="";
$databaseName="sgfc";
$utilizador = $_POST["id"];

if(!is_numeric($utilizador)){
	echo '<script>alert("Insira um BI válido!");</script>';
	header("Location:cliente.html");
}
else{
$connect = mysqli_connect($hostname, $username, $password, $databaseName);
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}
$query = "SELECT * FROM `viagem` WHERE idCliente='$utilizador' AND Estado='pago'";
$result = mysqli_query($connect, $query);

while($row=mysqli_fetch_row($result)){
echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[4]."</td><td>".$row[5]."</td><td>".$row[6]."</td><td>".$row[7]."</td><td>".$row[8]."</td><td>".$row[9]."</td><td>".$row[12]."</td></tr>";
}
echo "</table>";

mysqli_close($connect);
}
?>

</body>
</html>