<html>
<head>
<title>Registo de Camiao</title>
</head>
<body>
<?php
$hostname="localhost";
$username="root";
$password="";
$databaseName="sgfc";

$connect = mysqli_connect($hostname, $username, $password, $databaseName);
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}

$id=$_POST["id"];
$matricula=$_POST["matricula"];
$id2=$_POST["id2"];
if (!is_numeric($id) and !is_numeric($id2)) {
	echo '<script>alert("ID da Viagem ou do Motorista Invalidos");</script>';
}

else{
$query = "UPDATE `viagem` SET `idMotorista` = '$id2', `idCamiao` = '$matricula' WHERE `viagem`.`id` = '$id'";
if (mysqli_query($connect, $query)) {
    echo "Registado com sucesso!";
    header("Location:../views/gestor.blade.php");
    sleep(10);
   
} else {
    echo '<script>alert("Falha no Registo. Verifique os dados e volte a tentar!");</script>';
}
}
mysqli_close($connect);

?>
<a href="solicitacoes.php">Voltar</a>
</body>
</html>