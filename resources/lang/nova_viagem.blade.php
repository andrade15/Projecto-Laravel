<!DOCTYPE html>
<html>
<head>
<title>Confirmar Envio</title>
</head>
<meta charset="utf-8">
<?php
$hostname="localhost";
$username="root";
$password="";
$databaseName="sgfc";

$dChegada=$_POST["dChegada"];
$dPartida=$_POST["dPartida"];
$cPartida=$_POST["cPartida"];
$distrito=$_POST["distrito"];
$city=$_POST["city"];
$peso=$_POST["peso"];
$opcao=$_POST["carga"];
$provincia=$_POST["provincia"];
$idcliente=$_POST["idcliente"];


if($cPartida=="Seleccione a Cidade de Partida"){
	echo "<script>alert('Insira a Cidade de Partida')</script>";
}else
	if($provincia=="Seleccione a Provincia de Chegada"){
		echo "<script>alert('Insira a Provincia de Chegada')</script>";
	}else
	if($distrito=="Seleccione o distrito"){
		echo "<script>alert('Insira O distrito')</script>";
	}else
	if($city=="Seleccione a Cidade"){
		echo "<script>alert('Insira a cidade.')</script>";
	}else
	if(!is_numeric($idcliente)){
		echo "<script>alert('Insira um BI Valido.')</script>";
	}
	else
		if(!is_numeric($peso)){
			echo "<script>alert('Peso Invalido')</script>";
		}
		else
		if($opcao=="Seleccione o tipo de carga"){
			echo "<script>alert('Tipo de Carga Inválido')</script>";
		}
	
	else{
		$total=3*$peso;
echo "<script>alert('Valor a Pagar é:$total Mt')</script>";
$connect = mysqli_connect($hostname, $username, $password, $databaseName);
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}
else{
	echo "Suceso.";
}

$query = "INSERT INTO `viagem` (`id`, `Data de Partida`, `Ponto de partida`, `Provincia de Chegada`, `Cidade de Chegada`, `Distrito de Chegada`,`Data de Chegada`, 
`Peso da carga`, `Tipo de Carga`, `idcliente`,`idMotorista`, `idCamiao`, `valPagar`, `Estado`) VALUES('null','$dPartida','$cPartida','$provincia','$city','$distrito','$dChegada','$peso','$opcao','$idcliente',0, 0, '$total', 'Nao')";
if (mysqli_query($connect, $query)) {
    echo "<script>alert('Solicitacao Enviada');</script>";
} else {
    echo "<script>alert('Falha no Envio. <br> Tente Novamente mais tarde!');</script>";
}

mysqli_close($connect);

	}
?>
<body>
<a href="../views/welcome.blade.php">Voltar</a>
</html>