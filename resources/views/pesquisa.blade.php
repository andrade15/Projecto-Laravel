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
    $("#link").click(function(){
		 $("#hidden").fadeIn("slow");
		$("#hidden").show();
    });
});

$(document).ready(function(){
    $("#link1").click(function(){
		 $("#hidden1").fadeIn("slow");
		$("#hidden1").show();
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
    margin: 0;
}
h2{
	position:relative;
	top:20px;
	left:750px;
}

h4{
	margin-left:25%;
}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    width: 24.6%;
    background-color: #f1f1f1;
    position: fixed;
    height: 100%;
    overflow: auto;
	top:0px;
}

li a {
    display: block;
    color: #000;
    padding: 8px 16px;
    text-decoration: none;
}

li a.active {
    background-color: mediumseagreen;
    color: white;
}

li a:hover:not(.active) {
    background-color: #555;
    color: white;
}

.hidden{
	display:none;
	margin-left:50%;
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
    width: 75%;
	margin-left:25%;
}

#customers td, #customers th {
    border: 1px solid mediumseagreen;
    padding: 8px;
	border-radius: 2px;
	
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

.expandir{
position:fixed;	
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
	position:absolute;
	top:258px;
	left:10px;
}
#expandir1 {
    background-color: black;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
	margin-left:none;
	
	margin-top:0.8%;
	position:absolute;
	top:320px;
	left:10px;
}
.expandir:hover{
	background-color:green;
}
#expandir1:hover{
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
<h2>SOLICITAÇÕES</h2>
<body>

<ul>
  <li ><a href="welcome.blade.php">Home</a></li>
  <li style="margin-top:50px;"><a class="active" href="#news">Solicitações</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a>About</a></li>
  <li style="margin-top:120px;" id="link"><a>Efectuar pagamento</a></li>
  <li style="" id="link1"><a>Apagar Solicitação<a></li>
   <p style="margin-top:250px; margin-left:100px; text-decoration:bold; color:black;">SGFC</p>
</ul>


<br>
<h4>Em Espera de Pagamento</h4>
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
<th>Valor A Pagar</th>
<tr>

<?php
$hostname="localhost";
$username="root";
$password="";
$databaseName="sgfc";
$utilizador = $_POST["id"];
$connect = mysqli_connect($hostname, $username, $password, $databaseName);
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}
$query = "SELECT * FROM `viagem` WHERE idCliente='$utilizador' AND Estado='Nao'  AND idMotorista<>'NULL'";
$result = mysqli_query($connect, $query);

while($row=mysqli_fetch_row($result)){
echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[4]."</td><td>".$row[5]."</td><td>".$row[6]."</td><td>".$row[7]."</td><td>".$row[8]."</td><td>".$row[9]."</td><td>".$row[12]."</td></tr>";
}
echo "</table>";

mysqli_close($connect);

?>
<form class="hidden" id="hidden" method="post" action="../lang/pagamento.php"><br>
Insira o ID da Viagem que pretende Pagar<br>
<input type="text" id="hidden" name="id" placeholder="ID da Viagem"><br>
<input type="submit" value="Confirmar">
</form>
<h4>Em Espera de Aceitacao</h4>
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
<th>Valor A pagar</th>
<tr>

<?php
$hostname="localhost";
$username="root";
$password="";
$databaseName="sgfc";
$utilizador = $_POST["id"];
$connect = mysqli_connect($hostname, $username, $password, $databaseName);
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}
$query = "SELECT * FROM `viagem` WHERE idCliente='$utilizador' AND idMotorista='0'";
$result = mysqli_query($connect, $query);

while($row=mysqli_fetch_row($result)){
echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[4]."</td><td>".$row[5]."</td><td>".$row[6]."</td><td>".$row[7]."</td><td>".$row[8]."</td><td>".$row[9]."</td><td>".$row[12]."</td></tr>";
}
echo "</table>";

mysqli_close($connect);

?>
</table>

<form class="hidden" id="hidden1" method="post" action="../lang/apagar.php"><br>
<p>Insira o ID da Viagem que pretende Remover<p>
<input type="text" id="hidden1" name="id" placeholder="ID da Solicitacao"><br>
<input type="submit" value="Confirmar">
</form>
<br><br><button id="voltar" onclick="location.href='welcome.blade.php.html'">Voltar</button>
</body>
</html>