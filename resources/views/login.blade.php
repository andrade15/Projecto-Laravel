<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>SGFC - Login</title>
<link rel="stylesheet" href='{{asset("css/style.css")}}'>
</head>
<body>
<?php
// define variables and set to empty values
$nameErr = $passErr = "";
$name = $pass = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Nome de usuário requerido";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Somente letras e espaços brancos são requeridos"; 
    }
  }
  

  if (empty($_POST["password"])) {
    $pass = "";
  } else {
    $pass = test_input($_POST["password"]);
  }

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>




<header>
<div class="main">
	  <br>
	       <ul>
		        <li class="lista"><a href="index.blade.php">Home</a></li>
				<li class="lista1"><a href="#">Serviços</a></li>
				<li class="lista2"><a href="#">Parceiros</a></li>
				<li class="lista3"><a href="#">Sobre nós</a></li>
				<li class="active"><a href="nova_conta.blade.php">Criar conta</a></li>
		   </ul>
		   <div class="logo">
	                    <a class="btn">S.G.F.C</a>
	       </div>
	  
	  </div>
<form class="login-box" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >

<h1>Login</h1>
   <div class="textbox">
   <i class="fa fa-user" aria-hidden="true"></i>
   <input type="text" placeholder="Nome de Usuário" name="name" value="" required>
   </div>
   
   <div class="textbox">
   <i class="fa fa-lock" aria-hidden="true"></i>
   <input type="password" placeholder="Senha" name="password" value="" required>
   </div>
   
   <input class="btn" type="submit" name="" value="Entrar">
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


$query = "SELECT * FROM `cliente`";
$result = mysqli_query($connect, $query);

while($row=mysqli_fetch_row($result)){
	/*echo "$row[0] | $row[1] | $row[2] | $row[3] | $row[4] | $row[5] | $row[6]<br>";*/
	if($name==$row[5] && $pass==$row[6]){
		
		
	}
	}
	
	$query = "SELECT * FROM `gestor`";
    $result = mysqli_query($connect, $query);
	
	while($row=mysqli_fetch_row($result)){
	/*echo "$row[0] | $row[1] | $row[2] | $row[3] | $row[4] | $row[5] | $row[6]<br>";*/
	if($name==$row[3] && $senha==$row[4]){
		
	}
	}
	
	mysqli_free_result($result);

mysqli_close($connect);

?>
</header>



</body>
</html>