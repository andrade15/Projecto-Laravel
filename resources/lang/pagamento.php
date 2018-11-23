<html>
<head>
<title>Pagamento de Viagem</title>
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
	echo '<script>alert("Insira um ID válido!");</script>';
} 
else{


$query = "UPDATE `viagem` SET `Estado` = 'pago' WHERE `viagem`.`id` = $id AND idMotorista<>'0'";
if (mysqli_query($connect, $query)) {
    echo '<script>alert("Registado com sucesso!");</script>';
header("Location:../views/welcome.blade.php");
sleep(10);
} else {
    echo '<script>alert("Falha no Registo. Verifique os dados e volte a tentar!");</script>';
}

mysqli_close($connect);
}
?>
</body>
</html>