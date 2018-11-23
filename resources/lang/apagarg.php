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
if(!is_numeric($id)){
	echo '<script>alert("ID invalido.");</script>';
}
else{


$query = "Delete from`viagem` WHERE `viagem`.`id` = $id and idMotorista='0'";
/*if (mysqli_query($connect, $query)) {
    echo '<script>alert("Regustado com sucesso!");</script>';
} else {
    echo '<script>alert("Falha no Registo. Verifique os dados e volte a tentar!");</script>';
}*/
if ($connect->query($query) === TRUE) {
    echo "Record deleted successfully";
    header("Location:../views/gestor.blade.php");
 sleep(10);
} else {
    echo "Error deleting record: " . $connect->error;
}

}

mysqli_close($connect);

?>
<a href="solicitacoes.php">Voltar</a>
</body>
</html>