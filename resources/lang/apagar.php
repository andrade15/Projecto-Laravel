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
	echo '<script>alert("Insira um ID válido!");</script>';
} 
else{
$query = "Delete from`viagem` WHERE `viagem`.`id` = $id and idMotorista='0'";
/*if (mysqli_query($connect, $query)) {
    echo '<script>alert("Registado com sucesso!");</script>';
    
} else {
    echo '<script>alert("Falha no Registo. Verifique os dados e volte a tentar!");</script>';
}*/
if ($connect->query($query) === TRUE) {
    echo "Apagado Com Sucesso!";

    header("Location:../views/welcome.blade.php");
 sleep(30);
} else {
    echo "Error deleting record: " . $connect->error;
}


mysqli_close($connect);
}

?>
</body>
</html>