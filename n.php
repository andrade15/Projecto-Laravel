<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
<link rel="stylesheet" href="../sass/form.css">
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$nameErr = $userErr =$passErr = $cpassErr = $apelidoErr = $biErr =$cidadeErr = $emailErr = $genderErr = $websiteErr = "";
$name = $user = $pass = $cpass= $apelido = $bi = $email = $cidade = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "*";
  } else {
    $name = test_input($_POST["name"]);
  }
  
  if (empty($_POST["user"])) {
    $userErr = "*";
  } else {
    $user = test_input($_POST["user"]);
  }
  
  if (empty($_POST["pass"])) {
    $passErr = "*";
  } else {
    $pass = test_input($_POST["pass"]);
  }
  
  if (empty($_POST["cpass"])) {
    $cpassErr = "*";
  } else {
    $cpass = test_input($_POST["cpass"]);
  }
  
  if (empty($_POST["apelido"])) {
    $apelidoErr = "*";
  } else {
    $apelido = test_input($_POST["apelido"]);
  }
  if (empty($_POST["cidade"])) {
    $apelidoErr = "*";
  } else {
    $apelido = test_input($_POST["apelido"]);
  }
  
  if (empty($_POST["bi"])) {
    $biErr = "*";
  } else {
    $bi = test_input($_POST["bi"]);
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "*";
  } else {
    $email = test_input($_POST["email"]);
  }
    
  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<p><span class="error">*</span></p>

<h1 CLASS="titulo"> NOVA CONTA</h1>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  <input type="text" placeholder="Nome Completo" name="name">
  <span class="error"> <?php echo $nameErr;?></span>
  <br><br>
 <input type="text" placeholder="Apelido" name="apelido">
  <span class="error"> <?php echo $apelidoErr;?></span>
  <br><br>
  
  Número de BI: <input type="text" name="bi">
  <span class="error"> <?php echo $biErr;?></span>
  <br><br>
  
  E-mail: <input type="text" name="email">
  <span class="error"> <?php echo $emailErr;?></span>
  <br><br>
  
  <select name="cidade">
<option>Seleccione a Cidade</option>
<option>Maputo</option>
<option>Matola</option>
<option>Xai - Xai</option>
<option>Inhambane - Céu</option>
<option>Beira</option>
<option>Tete</option>
<option>Nacala</option>
<option>Lichinga</option>
</select><br><br>
  
  User: <input type="text" name="user">
  <span class="error"> <?php echo $userErr;?></span>
  <br><br>
  
  Password: <input type="password" name="pass">
  <span class="error"> <?php echo $passErr;?></span>
  <br><br>
  
  Re - Password: <input type="password" name="cpass">
  <span class="error"> <?php echo $cpassErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php



$hostname="localhost";
$username="root";
$password="";
$databaseName="sgfc";

$connect = mysqli_connect($hostname, $username, $password, $databaseName);
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}
else{
	echo "Suceso.";
}

$query = "INSERT INTO `cliente` (`BI`, `nome`, `apelido`, ``, `Cidade`,`Email`, 
`Nome de usuario`, `Password `) VALUES('$bi','$name','$apelido','$cidade','$email','$user','$pass')";
if (mysqli_query($connect, $query)) {
    
    
    echo "Solicitacao Enviada";
    
     header("Location:../views/welcome.blade.php");
sleep(45);
} else {
    echo "<script>alert('Falha no Envio. <br> Tente Novamente mais tarde!');</script>";
}

mysqli_close($connect);

	
?>

</body>
</html>