<html>
<head>
<title>Minhas viagens</title>
<script src="../js/jquery.js"></script>

<script>
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
    width: 75%;
	margin-left:25%;
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
    background-color: rgb(120, 120, 120);
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

.col-25 {
    float: left;
    width: 20%;
    margin-top: 6px;
}

.col-30 {
    float: left;
    width: 75%;
    margin-top: 6px;
}
</style>
<head>
<h2>SOLICITAÇÕES</h2>
<body>

<ul>
  <li ><a href="gestor.blade.php">Home</a></li>
  <li style="margin-top:50px;"><a class="active" href="#news">Solicitações</a></li>
  <li><a href="#contact">Ajuda</a></li>
  <li><a>Sobre Frota</a></li>
  <li style="margin-top:120px;" id="link"><a>Aceitar Solicitação</a></li>
  <li style="" id="link1"><a>Rejeitar Solicitação</a></li>
   <p style="margin-top:230px;">SISTEMA DE GESTÃO DE FROTA DE CAMIÕES LTD</p>
</ul>


<br><br><br>



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
$query = "SELECT * FROM `viagem` WHERE idMotorista='0'";
$result = mysqli_query($connect, $query);

while($row=mysqli_fetch_row($result)){
echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[4]."</td><td>".$row[5]."</td><td>".$row[6]."</td><td>".$row[7]."</td><td>".$row[8]."</td><td>".$row[9]."</td><td>".$row[12]."</td></tr>";
}
echo "</table>";

mysqli_close($connect);

?>

<br><br>
<form class="hidden" id="hidden" method="post" action="../lang/vregistar.php">
<div class="row">
      <div class="col-25">
        <label>ID da Solicitacao</label>
      </div>
      <div class="col-30">
        <input type="text" name="id" placeholder="1a Coluna da Tabela">
      </div>
    </div>
	
	<div class="col-25">
        <label>Matricula Do Camiao</label>
      </div>
      <div class="col-30">
        <input type="text" name="matricula" placeholder="exemplo: ADR-233-MP"><a href="camioesMini.blade.php" target="_blank" style="color:green">Ver Lista de Camioes Disponiveis</a>
      </div>
    </div>

     <div class="col-25">
        <label>ID do Motorista</label>
      </div>
      <div class="col-30">
        <input type="text" name="id2" placeholder="exemplo: 10"><a href="motoristasMini.blade.php" style="color:green" target="_blank">Ver Lista de Motoristas Disponiveis</a>
      </div>
     </div>

<input type="submit" value="Registar">
</form>
<br><br>

<form class="hidden" id="hidden1" method="post" action="../lang/apagarg.php"><br>
<br>
<input type="text" name="id" placeholder="ID da Solicitacao"><br>
<input type="submit" value="Confirmar">
</form>
<button id="voltar" onclick="location.href='gestor.html'">Voltar</button>
</body>
</html>