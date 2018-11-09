<html>
<head>
<style>
#botao{
	border-radius:6px;
	background-color:MediumSeaGreen;
	height:50px;
	width:100px;
	position:bottom;
	margin-top:30%;
	margin-left:43%;
	color:white;
}
#botao:hover{
	background-color:orange;
}
</style>
</head>
<body>
<?php
$hostname="localhost";
$username="root";
$password="";
$databaseName="sgfc";

$utilizador = $_POST["username"];
$senha = $_POST["password"];

$connect = mysqli_connect($hostname, $username, $password, $databaseName);
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}


$query = "SELECT * FROM `cliente`";
$result = mysqli_query($connect, $query);


	
	while($row=mysqli_fetch_row($result)){
	/*echo "$row[0] | $row[1] | $row[2] | $row[3] | $row[4] | $row[5] | $row[6]<br>";*/
	if($utilizador==$row[5] && $senha==$row[6]){
		$_SESSION["user"] = "Manjate";
		header("Location:../views/welcome.blade.php");
		
	}
	}
	
	$query = "SELECT * FROM `gestor`";
    $result = mysqli_query($connect, $query);
	
	while($row=mysqli_fetch_row($result)){
	/*echo "$row[0] | $row[1] | $row[2] | $row[3] | $row[4] | $row[5] | $row[6]<br>";*/
	if($utilizador==$row[3] && $senha==$row[4]){
		header("Location:gestor.html");
	}
	}
	
	mysqli_free_result($result);

echo "Acesso Negado";
mysqli_close($connect);

?>

<br><button id="botao" onclick="location.href='login.html'">Login</button>
</body>

</html>